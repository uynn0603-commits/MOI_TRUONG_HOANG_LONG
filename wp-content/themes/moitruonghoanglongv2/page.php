<?php
/**
 * Default page + routing trang con dịch vụ (cha slug: dich-vu)
 *
 * @package MTRL
 */

get_header();

if (is_page()) {
    $pid         = get_queried_object_id();
    $parent_id   = wp_get_post_parent_id($pid);
    $parent_slug = $parent_id ? (string) get_post_field('post_name', $parent_id) : '';
    $slug        = (string) get_post_field('post_name', $pid);
    $svc_keys    = array_keys(mtrl_get_services_data());

    if ($parent_slug === 'dich-vu' && in_array($slug, $svc_keys, true)) {
        get_template_part('template-parts/pages/service', 'single');
        get_footer();
        return;
    }
}
?>
<main id="main" class="py-16 lg:py-24">
	<div class="mx-auto max-w-7xl px-4 lg:px-8">
		<div class="grid gap-12 lg:grid-cols-3">
			<div class="lg:col-span-2">
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('template-parts/content', 'page'); ?>
				<?php endwhile; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</main>
<?php
get_footer();
