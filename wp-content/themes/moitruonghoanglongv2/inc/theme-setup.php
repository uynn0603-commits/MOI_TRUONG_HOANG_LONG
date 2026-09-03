<?php
/**
 * Theme supports, menus, image sizes
 *
 * @package MTRL
 */

if (! defined('ABSPATH')) {
    exit;
}

add_action('after_setup_theme', static function (): void {
    load_theme_textdomain('mtrl', MTRL_DIR . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);
    add_theme_support('custom-logo', [
        'height'      => 192,
        'width'       => 192,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('align-wide');

    register_nav_menus([
        'primary' => __('Menu chính', 'mtrl'),
        'footer'  => __('Menu chân trang', 'mtrl'),
    ]);
});
