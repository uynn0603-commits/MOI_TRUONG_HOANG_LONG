<?php
/**
 * Service routing helpers (slug → permalink)
 *
 * @package MTRL
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Permalink trang con dịch vụ: /dich-vu/{slug}/ khi có page cha slug dich-vu.
 */
function mtrl_service_url(string $slug): string
{
    $parent = get_page_by_path('dich-vu');
    if ($parent instanceof WP_Post) {
        $children = get_posts([
            'post_type'      => 'page',
            'post_parent'    => (int) $parent->ID,
            'name'           => $slug,
            'post_status'    => 'publish',
            'posts_per_page' => 1,
            'no_found_rows'  => true,
        ]);
        if (! empty($children[0]) && $children[0] instanceof WP_Post) {
            return get_permalink($children[0]);
        }
    }

    return home_url('/dich-vu/' . rawurlencode($slug) . '/');
}
