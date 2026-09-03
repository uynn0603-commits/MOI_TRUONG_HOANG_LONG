<?php
/**
 * SMTP tùy chọn (Gmail / hosting) — khai báo trong wp-config.php, không để mật khẩu trong theme.
 *
 * Bắt buộc: MTRL_SMTP_HOST, MTRL_SMTP_USER, MTRL_SMTP_PASS
 * Tuỳ chọn: MTRL_SMTP_PORT (587), MTRL_SMTP_SECURE (tls), MTRL_MAIL_FROM, MTRL_MAIL_FROM_NAME
 *
 * @package MTRL
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * @param PHPMailer\PHPMailer\PHPMailer $phpmailer
 */
function mtrl_configure_phpmailer_smtp($phpmailer): void
{
    if (! defined('MTRL_SMTP_HOST') || MTRL_SMTP_HOST === '') {
        return;
    }
    if (! defined('MTRL_SMTP_USER') || MTRL_SMTP_USER === '') {
        return;
    }
    if (! defined('MTRL_SMTP_PASS') || MTRL_SMTP_PASS === '') {
        return;
    }

    $phpmailer->isSMTP();
    $phpmailer->Host       = (string) MTRL_SMTP_HOST;
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Username   = (string) MTRL_SMTP_USER;
    $phpmailer->Password   = (string) MTRL_SMTP_PASS;
    $phpmailer->Port       = defined('MTRL_SMTP_PORT') ? (int) MTRL_SMTP_PORT : 587;
    $phpmailer->SMTPSecure = defined('MTRL_SMTP_SECURE') && MTRL_SMTP_SECURE !== ''
        ? (string) MTRL_SMTP_SECURE
        : 'tls';
    $phpmailer->CharSet = 'UTF-8';
    $phpmailer->Timeout = 20;

    $from = defined('MTRL_MAIL_FROM') && is_email((string) MTRL_MAIL_FROM)
        ? (string) MTRL_MAIL_FROM
        : (string) MTRL_SMTP_USER;
    $from_name = defined('MTRL_MAIL_FROM_NAME') && MTRL_MAIL_FROM_NAME !== ''
        ? (string) MTRL_MAIL_FROM_NAME
        : (string) wp_specialchars_decode(get_bloginfo('name'), ENT_QUOTES);

    $phpmailer->setFrom($from, $from_name, false);
}

add_action('phpmailer_init', 'mtrl_configure_phpmailer_smtp');

add_filter(
    'wp_mail_from',
    static function (string $from): string {
        if (defined('MTRL_MAIL_FROM') && is_email((string) MTRL_MAIL_FROM)) {
            return (string) MTRL_MAIL_FROM;
        }
        if (defined('MTRL_SMTP_USER') && is_email((string) MTRL_SMTP_USER)) {
            return (string) MTRL_SMTP_USER;
        }

        return $from;
    }
);

add_filter(
    'wp_mail_from_name',
    static function (string $name): string {
        if (defined('MTRL_MAIL_FROM_NAME') && MTRL_MAIL_FROM_NAME !== '') {
            return (string) MTRL_MAIL_FROM_NAME;
        }

        return $name;
    }
);

add_action(
    'wp_mail_failed',
    static function ($error): void {
        if (! $error instanceof WP_Error) {
            return;
        }
        if (! defined('WP_DEBUG') || ! WP_DEBUG) {
            return;
        }
        error_log('MTRL wp_mail_failed: ' . $error->get_error_message());
        $data = $error->get_error_data();
        if ($data !== null && $data !== '') {
            error_log('MTRL wp_mail_failed data: ' . wp_json_encode($data));
        }
    }
);
