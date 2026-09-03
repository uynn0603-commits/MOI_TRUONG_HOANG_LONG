<?php
/**
 * Sidebars / widgets
 *
 * @package MTRL
 */

if (! defined('ABSPATH')) {
    exit;
}

add_action('widgets_init', static function (): void {
    register_sidebar([
        'name'          => __('Sidebar chính', 'mtrl'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets hiển thị cạnh nội dung blog / trang có sidebar.', 'mtrl'),
        'before_widget' => '<section id="%1$s" class="widget %2$s mb-8">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title mb-3 text-lg font-semibold text-foreground">',
        'after_title'   => '</h2>',
    ]);
});
