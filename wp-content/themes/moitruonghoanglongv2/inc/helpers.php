<?php
/**
 * Helpers: URL, escaping wrappers
 *
 * @package MTRL
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Asset URI trong theme.
 */
function mtrl_asset_uri(string $path = ''): string
{
    return esc_url(MTRL_URI . '/assets/' . ltrim($path, '/'));
}

/**
 * Image URI (assets/images).
 */
function mtrl_img_uri(string $path): string
{
    return mtrl_asset_uri('images/' . ltrim($path, '/'));
}

/**
 * Số điện thoại chỉ còn chữ số (dùng cho tel:, Zalo…).
 * Nguồn: hằng MTRL_PHONE trong functions.php — có thể ghi đè bằng filter.
 */
function mtrl_phone_digits(): string
{
    $raw    = defined('MTRL_PHONE') ? (string) MTRL_PHONE : '0977452861';
    $digits = preg_replace('/\D+/', '', $raw);
    if ($digits === '') {
        $digits = '0977452861';
    }

    return apply_filters('mtrl_phone_digits', $digits);
}

/**
 * Hiển thị: 0xxx xxx xxx (10 số, bắt đầu bằng 0) hoặc chuỗi số gốc.
 */
function mtrl_phone_display(): string
{
    $digits = mtrl_phone_digits();
    if (strlen($digits) === 10 && $digits[0] === '0') {
        return substr($digits, 0, 4) . ' ' . substr($digits, 4, 3) . ' ' . substr($digits, 7, 3);
    }

    return $digits;
}

/**
 * Giá trị href cho thẻ <a href="tel:…">.
 */
function mtrl_phone_tel_href(): string
{
    return 'tel:' . mtrl_phone_digits();
}

/**
 * Link mở Zalo theo số điện thoại.
 */
function mtrl_phone_zalo_url(): string
{
    return 'https://zalo.me/' . mtrl_phone_digits();
}
