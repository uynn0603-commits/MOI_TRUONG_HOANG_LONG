<?php
/**
 * Emergency banner
 *
 * @package MTRL
 */
?>
<section class="border-y border-destructive/20 bg-destructive/5 py-4">
	<div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-4 px-4 sm:flex-row lg:px-8">
		<div class="flex items-center gap-3">
			<div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-destructive/10">
				<?php mtrl_icon_e('alert', 'h-5 w-5 text-destructive'); ?>
			</div>
			<div>
				<p class="font-semibold text-destructive"><?php esc_html_e('Dịch vụ khẩn cấp 24/7', 'mtrl'); ?></p>
				<p class="text-sm text-muted-foreground"><?php esc_html_e('Bể tràn hay cống nghẽn? Liên hệ ngay — đội xe có mặt nhanh tại chỗ!', 'mtrl'); ?></p>
			</div>
		</div>
		<a href="<?php echo esc_url(mtrl_phone_tel_href()); ?>" class="inline-flex h-10 items-center justify-center gap-2 rounded-md bg-destructive px-4 text-sm font-medium text-white transition-colors hover:bg-destructive/90">
			<?php mtrl_icon_e('phone', 'h-4 w-4'); ?>
			<?php esc_html_e('Gọi khẩn cấp', 'mtrl'); ?>
		</a>
	</div>
</section>
