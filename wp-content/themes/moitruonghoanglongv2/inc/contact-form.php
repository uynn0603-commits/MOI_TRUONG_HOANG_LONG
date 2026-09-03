<?php
/**
 * Xử lý form liên hệ: gửi email qua wp_mail() (cấu hình SMTP/Gmail bằng plugin hoặc hosting).
 *
 * @package MTRL
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Địa chỉ nhận thông báo liên hệ.
 * Tạm thời: uynn0603@gmail.com — đổi bằng filter `mtrl_contact_mail_to` khi lên production.
 *
 * @param int $page_id ID trang Liên hệ (nếu có).
 */
function mtrl_contact_mail_recipients(int $page_id): array
{
    $default_to = 'uynn0603@gmail.com';
    $to         = apply_filters('mtrl_contact_mail_to', $default_to, $page_id);
    if (! is_string($to) || ! is_email($to)) {
        $to = $default_to;
    }

    return [sanitize_email($to)];
}

/**
 * @param array<string, string> $data
 */
function mtrl_contact_send_mail(array $data, int $page_id): bool
{
    $recipients = mtrl_contact_mail_recipients($page_id);
    if ($recipients === [] || ! is_email($recipients[0])) {
        return false;
    }

    $name    = $data['name'] ?? '';
    $phone   = $data['phone'] ?? '';
    $email   = $data['email'] ?? '';
    $service = $data['service'] ?? '';
    $address = $data['address'] ?? '';
    $message = $data['message'] ?? '';

    $subject = sprintf(
        /* translators: %s: customer name */
        __('[Hoàng Long] Liên hệ mới từ %s', 'mtrl'),
        $name !== '' ? $name : __('(chưa rõ tên)', 'mtrl')
    );

    $lines = [
        __('Có yêu cầu liên hệ mới từ website.', 'mtrl'),
        '',
        __('Họ và tên:', 'mtrl') . ' ' . $name,
        __('Điện thoại:', 'mtrl') . ' ' . $phone,
        __('Email:', 'mtrl') . ' ' . ($email !== '' ? $email : '—'),
        __('Dịch vụ:', 'mtrl') . ' ' . $service,
        __('Địa chỉ:', 'mtrl') . ' ' . ($address !== '' ? $address : '—'),
        '',
        __('Mô tả:', 'mtrl'),
        $message !== '' ? $message : '—',
        '',
        __('Thời gian:', 'mtrl') . ' ' . wp_date('Y-m-d H:i:s'),
    ];

    $plain = implode("\n", $lines);
    $body  = '<pre style="font-family:system-ui,sans-serif;white-space:pre-wrap;">' . esc_html($plain) . '</pre>';

    $headers = ['Content-Type: text/html; charset=UTF-8'];
    // Chỉ dùng địa chỉ email (tránh header Reply-To sai ký tự khiến SMTP từ chối).
    if ($email !== '' && is_email($email)) {
        $headers[] = 'Reply-To: ' . sanitize_email($email);
    }

    return wp_mail($recipients, wp_specialchars_decode($subject, ENT_QUOTES), $body, $headers);
}

function mtrl_handle_contact_form_post(): void
{
    if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
        return;
    }

    if (empty($_POST['mtrl_contact_submit']) || empty($_POST['mtrl_contact_nonce'])) {
        return;
    }

    if (! isset($_POST['mtrl_contact_page_id']) || ! is_numeric($_POST['mtrl_contact_page_id'])) {
        return;
    }

    $page_id = (int) $_POST['mtrl_contact_page_id'];
    if ($page_id <= 0 || get_post_status($page_id) !== 'publish') {
        wp_safe_redirect(home_url('/'));
        exit;
    }

    if (! wp_verify_nonce(sanitize_text_field(wp_unslash((string) $_POST['mtrl_contact_nonce'])), 'mtrl_contact_' . $page_id)) {
        wp_safe_redirect(add_query_arg('contact', 'error', get_permalink($page_id)));
        exit;
    }

    // Honeypot: nếu điền thì coi như bot, chuyển về trang với trạng thái "sent" nhưng không gửi mail.
    if (! empty($_POST['mtrl_company'])) {
        wp_safe_redirect(add_query_arg('contact', 'sent', get_permalink($page_id)));
        exit;
    }

    $name    = isset($_POST['name']) ? sanitize_text_field(wp_unslash((string) $_POST['name'])) : '';
    $phone   = isset($_POST['phone']) ? sanitize_text_field(wp_unslash((string) $_POST['phone'])) : '';
    $email   = isset($_POST['email']) ? sanitize_email(wp_unslash((string) $_POST['email'])) : '';
    $service = isset($_POST['service']) ? sanitize_text_field(wp_unslash((string) $_POST['service'])) : '';
    $address = isset($_POST['address']) ? sanitize_text_field(wp_unslash((string) $_POST['address'])) : '';
    $message = isset($_POST['message']) ? sanitize_textarea_field(wp_unslash((string) $_POST['message'])) : '';

    if ($name === '' || $phone === '' || $service === '') {
        wp_safe_redirect(add_query_arg('contact', 'error', get_permalink($page_id)));
        exit;
    }

    if ($email !== '' && ! is_email($email)) {
        wp_safe_redirect(add_query_arg('contact', 'error', get_permalink($page_id)));
        exit;
    }

    $ip       = isset($_SERVER['REMOTE_ADDR']) ? sanitize_text_field((string) $_SERVER['REMOTE_ADDR']) : '';
    $rate_key = $ip !== '' ? 'mtrl_cf_' . md5($ip) : '';
    if ($rate_key !== '') {
        if (get_transient($rate_key)) {
            wp_safe_redirect(add_query_arg('contact', 'slow', get_permalink($page_id)));
            exit;
        }
        set_transient($rate_key, 1, 45);
    }

    $ok = mtrl_contact_send_mail(
        [
            'name'    => $name,
            'phone'   => $phone,
            'email'   => $email,
            'service' => $service,
            'address' => $address,
            'message' => $message,
        ],
        $page_id
    );

    if (! $ok && $rate_key !== '') {
        delete_transient($rate_key);
    }

    wp_safe_redirect(
        add_query_arg('contact', $ok ? 'sent' : 'error', get_permalink($page_id))
    );
    exit;
}

add_action('template_redirect', 'mtrl_handle_contact_form_post', 1);
