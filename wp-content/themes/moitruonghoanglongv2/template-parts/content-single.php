<?php
/**
 * Single post content
 *
 * @package MTRL
 */
?>
<header class="mb-8">
	<h1 class="text-4xl font-bold tracking-tight text-foreground"><?php the_title(); ?></h1>
	<div class="mt-2 text-sm text-muted-foreground"><?php echo esc_html(get_the_date()); ?> · <?php the_author(); ?></div>
	<?php if (has_post_thumbnail()) : ?>
		<div class="relative mt-8 aspect-video overflow-hidden rounded-xl border border-border">
			<?php the_post_thumbnail('large', ['class' => 'h-full w-full object-cover']); ?>
		</div>
	<?php endif; ?>
</header>
<div <?php post_class('prose prose-neutral max-w-none entry-content'); ?>>
	<?php the_content(); ?>
</div>
