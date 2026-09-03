<?php
/**
 * Sidebar
 *
 * @package MTRL
 */

if (! is_active_sidebar('sidebar-1')) {
    return;
}
?>
<aside class="lg:col-span-1" role="complementary" aria-label="<?php esc_attr_e('Sidebar', 'mtrl'); ?>">
	<div class="sticky top-28 space-y-8">
		<?php dynamic_sidebar('sidebar-1'); ?>
	</div>
</aside>
