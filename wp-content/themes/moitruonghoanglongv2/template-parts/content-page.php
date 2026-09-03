<?php
/**
 * Page content (Gutenberg / classic editor)
 *
 * @package MTRL
 */
?>
<article <?php post_class('prose prose-neutral max-w-none'); ?>>
	<header class="mb-8">
		<h1 class="text-4xl font-bold tracking-tight text-foreground"><?php the_title(); ?></h1>
	</header>
	<div class="entry-content text-muted-foreground">
		<?php the_content(); ?>
	</div>
</article>
