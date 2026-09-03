<?php
/**
 * Single post
 *
 * @package MTRL
 */

get_header();
?>
<main id="main" class="py-16 lg:py-24">
	<div class="mx-auto max-w-7xl px-4 lg:px-8">
		<div class="grid gap-12 lg:grid-cols-3">
			<article <?php post_class('lg:col-span-2'); ?>>
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('template-parts/content', 'single'); ?>
				<?php endwhile; ?>
			</article>
			<?php get_sidebar(); ?>
		</div>
	</div>
</main>
<?php
get_footer();
