<?php
/**
 * Excerpt / loop card
 *
 * @package MTRL
 */
?>
<article <?php post_class('mb-12 rounded-xl border border-border/50 bg-card p-6 shadow-sm'); ?>>
	<h2 class="text-2xl font-semibold text-foreground">
		<a href="<?php the_permalink(); ?>" class="hover:text-primary"><?php the_title(); ?></a>
	</h2>
	<div class="mt-2 text-sm text-muted-foreground"><?php echo esc_html(get_the_date()); ?></div>
	<div class="prose prose-neutral mt-4 max-w-none text-muted-foreground"><?php the_excerpt(); ?></div>
	<a href="<?php the_permalink(); ?>" class="mt-4 inline-flex text-sm font-medium text-primary hover:underline"><?php esc_html_e('Đọc thêm', 'mtrl'); ?></a>
</article>
