<?php
/**
 * Menu fallbacks (khi chưa gán menu trong WP Admin)
 *
 * @package MTRL
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * @param array<string, mixed> $args Menu args.
 */
function mtrl_fallback_menu(array $args): void
{
    $items = [
        [__('Trang chủ', 'mtrl'), home_url('/')],
        [__('Về Hoàng Long', 'mtrl'), home_url('/gioi-thieu/')],
        [__('Dịch vụ', 'mtrl'), home_url('/dich-vu/')],
        [__('Liên hệ', 'mtrl'), home_url('/lien-he/')],
    ];
    $ul_class = isset($args['menu_class']) ? (string) $args['menu_class'] : '';
    $menu_id  = ! empty($args['menu_id']) ? ' id="' . esc_attr((string) $args['menu_id']) . '"' : '';
    echo '<ul class="' . esc_attr($ul_class) . '"' . $menu_id . '>';
    foreach ($items as $row) {
        echo '<li><a class="text-sm font-medium text-foreground/80 transition-colors hover:text-primary" href="' . esc_url($row[1]) . '">' . esc_html($row[0]) . '</a></li>';
    }
    echo '</ul>';
}

/**
 * @param array<string, mixed> $args Menu args.
 */
function mtrl_fallback_menu_mobile(array $args): void
{
    $items = [
        [__('Trang chủ', 'mtrl'), home_url('/')],
        [__('Về Hoàng Long', 'mtrl'), home_url('/gioi-thieu/')],
        [__('Dịch vụ', 'mtrl'), home_url('/dich-vu/')],
        [__('Liên hệ', 'mtrl'), home_url('/lien-he/')],
    ];
    $ul_class = isset($args['menu_class']) ? (string) $args['menu_class'] : '';
    $menu_id  = ! empty($args['menu_id']) ? ' id="' . esc_attr((string) $args['menu_id']) . '"' : '';
    echo '<ul class="' . esc_attr($ul_class) . '"' . $menu_id . '>';
    foreach ($items as $row) {
        echo '<li><a class="block w-full py-4 text-lg font-medium leading-snug text-foreground/85 transition-colors hover:bg-muted/70 hover:text-primary" href="' . esc_url($row[1]) . '">' . esc_html($row[0]) . '</a></li>';
    }
    echo '</ul>';
}

/**
 * Link menu mobile: block + vùng chạm đủ lớn (menu gán trong Admin).
 *
 * @param array<string, string> $atts
 * @param WP_Post                 $item
 * @param stdClass                $args
 */
add_filter('nav_menu_link_attributes', static function (array $atts, $item, $args, $depth): array {
    if (! is_object($args) || ($args->theme_location ?? '') !== 'primary') {
        return $atts;
    }
    $menu_class = isset($args->menu_class) ? (string) $args->menu_class : '';
    if (str_contains($menu_class, 'flex-col')) {
        $extra = 'block w-full py-4 text-lg font-medium leading-snug text-foreground/85 transition-colors hover:bg-muted/70 hover:text-primary';
        $atts['class'] = isset($atts['class']) && $atts['class'] !== ''
            ? $atts['class'] . ' ' . $extra
            : $extra;
    }
    return $atts;
}, 10, 4);
