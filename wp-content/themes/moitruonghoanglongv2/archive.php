<?php
/**
 * Archive
 *
 * @package MTRL
 */

get_header();
?>
<main id="main" class="py-16 lg:py-24">
	<div class="mx-auto max-w-7xl px-4 lg:px-8">
		<header class="mb-12 border-b border-border pb-8">
			<h1 class="text-3xl font-bold text-foreground"><?php the_archive_title(); ?></h1>
			<?php the_archive_description('<div class="mt-2 text-muted-foreground">', '</div>'); ?>
		</header>
		<div class="grid gap-12 lg:grid-cols-3">
			<div class="lg:col-span-2">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<?php get_template_part('template-parts/content', 'excerpt'); ?>
					<?php endwhile; ?>
					<div class="mt-8"><?php the_posts_pagination(); ?></div>
				<?php else : ?>
					<?php get_template_part('template-parts/content', 'none'); ?>
				<?php endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</main>
<?php
get_footer();
