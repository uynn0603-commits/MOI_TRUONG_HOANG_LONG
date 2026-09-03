<?php
/**
 * Open Graph + Twitter Card khi share lên Facebook, Zalo, Telegram…
 * Tự tắt nếu đã cài plugin SEO (Yoast, Rank Math, v.v.) để tránh trùng thẻ.
 *
 * @package MTRL
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Có plugin SEO phổ biến đang xử lý meta share hay không.
 */
function mtrl_social_meta_seo_plugin_active(): bool
{
    return defined('WPSEO_VERSION')
        || defined('RANK_MATH_VERSION')
        || defined('AIOSEO_VERSION')
        || defined('SEOPRESS_VERSION')
        || (defined('THE_SEO_FRAMEWORK_VERSION') && THE_SEO_FRAMEWORK_VERSION);
}

/**
 * Ảnh mặc định (logo tùy chỉnh hoặn logo theme).
 */
function mtrl_social_meta_default_image_url(): string
{
    if (function_exists('has_custom_logo') && has_custom_logo()) {
        $id = (int) get_theme_mod('custom_logo');
        if ($id > 0) {
            $url = wp_get_attachment_image_url($id, 'large');
            if (is_string($url) && $url !== '') {
                return $url;
            }
        }
    }

    return mtrl_img_uri('logo.png');
}

/**
 * Chuẩn hóa og:locale (Facebook hay dùng vi_VN).
 */
function mtrl_social_meta_og_locale(): string
{
    $loc = (string) get_locale();
    if ($loc === 'vi' || str_starts_with($loc, 'vi_')) {
        return 'vi_VN';
    }

    return str_replace('-', '_', $loc);
}

function mtrl_social_meta_output(): void
{
    if (! apply_filters('mtrl_output_social_meta', true) || is_feed() || mtrl_social_meta_seo_plugin_active()) {
        return;
    }

    $url   = is_singular() ? get_permalink() : home_url('/');
    if (! is_string($url) || $url === '') {
        $url = home_url('/');
    }
    $url = esc_url($url);

    $title = wp_get_document_title();
    $desc  = get_bloginfo('description', 'display');
    $desc  = $desc !== '' ? wp_strip_all_tags($desc) : get_bloginfo('name', 'display');
    $type  = 'website';
    $image = mtrl_social_meta_default_image_url();

    if (is_singular()) {
        global $post;
        if ($post instanceof WP_Post) {
            $type = is_page() ? 'website' : 'article';
            if (has_excerpt($post)) {
                $desc = wp_strip_all_tags(get_the_excerpt($post));
            } elseif ($post->post_content !== '') {
                $desc = wp_trim_words(wp_strip_all_tags($post->post_content), 40, '…');
            }
            $thumb = get_the_post_thumbnail_url($post, 'large');
            if (is_string($thumb) && $thumb !== '') {
                $image = $thumb;
            }
        }
    }

    $desc = mb_substr($desc, 0, 300, 'UTF-8');

    echo '<meta property="og:type" content="' . esc_attr($type) . "\" />\n";
    echo '<meta property="og:url" content="' . esc_attr($url) . "\" />\n";
    echo '<meta property="og:title" content="' . esc_attr($title) . "\" />\n";
    echo '<meta property="og:description" content="' . esc_attr($desc) . "\" />\n";
    echo '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name', 'display')) . "\" />\n";
    echo '<meta property="og:locale" content="' . esc_attr(mtrl_social_meta_og_locale()) . "\" />\n";
    echo '<meta property="og:image" content="' . esc_attr(esc_url($image)) . "\" />\n";

    echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($title) . "\" />\n";
    echo '<meta name="twitter:description" content="' . esc_attr($desc) . "\" />\n";
    echo '<meta name="twitter:image" content="' . esc_attr(esc_url($image)) . "\" />\n";
}

add_action('wp_head', 'mtrl_social_meta_output', 5);
