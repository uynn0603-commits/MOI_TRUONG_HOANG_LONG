<?php
/**
 * Section title block (mirror components/ui/section SectionHeader)
 *
 * Expects query var `mtrl_section_args` (array) set before get_template_part.
 *
 * @package MTRL
 */

$args = wp_parse_args(
	(array) get_query_var('mtrl_section_args', []),
	[
		'subtitle'      => '',
		'title'         => '',
		'description'   => '',
		'centered'      => true,
		'wrapper_class' => '',
	]
);

$centered = (bool) $args['centered'];
$wrap     = trim((string) $args['wrapper_class']);
?>
<div class="<?php echo esc_attr(trim('mb-12 lg:mb-16 ' . ($centered ? 'text-center ' : '') . $wrap)); ?>">
	<?php if ($args['subtitle'] !== '') : ?>
		<p class="mb-2 text-sm font-semibold uppercase tracking-wider text-primary"><?php echo esc_html((string) $args['subtitle']); ?></p>
	<?php endif; ?>
	<?php if ($args['title'] !== '') : ?>
		<h2 class="text-balance text-3xl font-bold tracking-tight text-foreground lg:text-4xl"><?php echo esc_html((string) $args['title']); ?></h2>
	<?php endif; ?>
	<?php if ($args['description'] !== '') : ?>
		<p class="<?php echo $centered ? 'mx-auto mt-4 max-w-2xl text-pretty text-lg text-muted-foreground' : 'mt-4 max-w-2xl text-pretty text-lg text-muted-foreground'; ?>">
			<?php echo esc_html((string) $args['description']); ?>
		</p>
	<?php endif; ?>
</div>
