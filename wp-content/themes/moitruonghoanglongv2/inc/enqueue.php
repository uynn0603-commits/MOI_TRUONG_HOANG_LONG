<?php
/**
 * Enqueue styles & scripts
 *
 * @package MTRL
 */

if (! defined('ABSPATH')) {
    exit;
}

add_action('wp_enqueue_scripts', static function (): void {
    $css_path = MTRL_DIR . '/assets/css/main.css';
    $ver      = file_exists($css_path) ? (string) filemtime($css_path) : MTRL_VERSION;

    wp_enqueue_style(
        'mtrl-main',
        MTRL_URI . '/assets/css/main.css',
        [],
        $ver
    );

    wp_enqueue_style(
        'mtrl-font-inter',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
        [],
        null
    );

    $js_path = MTRL_DIR . '/assets/js/main.js';
    $js_ver  = file_exists($js_path) ? (string) filemtime($js_path) : MTRL_VERSION;

    wp_enqueue_script(
        'mtrl-main',
        MTRL_URI . '/assets/js/main.js',
        [],
        $js_ver,
        true
    );
});
