<?php
/**
 * Môi Trường Hoàng Long — theme bootstrap
 *
 * @package MTRL
 */

if (! defined('ABSPATH')) {
    exit;
}

define('MTRL_VERSION', '1.0.0');
define('MTRL_DIR', get_template_directory());
define('MTRL_URI', get_template_directory_uri());

/** Hotline toàn site — chỉnh một chỗ (10 số VN, có hoặc không khoảng trắng). */
if (! defined('MTRL_PHONE')) {
    define('MTRL_PHONE', '0123456789');
}

require_once MTRL_DIR . '/inc/helpers.php';
require_once MTRL_DIR . '/inc/svg-icons.php';
require_once MTRL_DIR . '/inc/menus.php';
require_once MTRL_DIR . '/inc/services.php';
require_once MTRL_DIR . '/inc/theme-setup.php';
require_once MTRL_DIR . '/inc/social-meta.php';
require_once MTRL_DIR . '/inc/enqueue.php';
require_once MTRL_DIR . '/inc/widgets.php';
require_once MTRL_DIR . '/inc/service-routing.php';
require_once MTRL_DIR . '/inc/mail-smtp.php';
require_once MTRL_DIR . '/inc/contact-form.php';
