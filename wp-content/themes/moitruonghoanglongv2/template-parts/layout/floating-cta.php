<?php
/**
 * Floating Zalo + Phone CTA
 *
 * @package MTRL
 */
?>
<div class="fixed bottom-6 right-6 z-50 flex flex-col gap-3">
	<a href="<?php echo esc_url(mtrl_phone_zalo_url()); ?>" target="_blank" rel="noopener noreferrer" class="group flex h-14 w-14 items-center justify-center rounded-full bg-secondary shadow-lg transition-all hover:scale-110 hover:shadow-xl" aria-label="<?php esc_attr_e('Chat Zalo', 'mtrl'); ?>">
		<span class="text-sm font-bold text-secondary-foreground">Zalo</span>
	</a>
	<a href="<?php echo esc_url(mtrl_phone_tel_href()); ?>" class="group relative flex h-14 w-14 items-center justify-center rounded-full bg-red-600 shadow-lg transition-all hover:scale-110 hover:bg-red-700 hover:shadow-xl" aria-label="<?php esc_attr_e('Gọi điện ngay', 'mtrl'); ?>">
		<span class="absolute inset-0 rounded-full bg-red-600 animate-pulse-ring"></span>
		<?php mtrl_icon_e('phone', 'relative h-6 w-6 text-white'); ?>
	</a>
</div>
