<?php
/**
 * Bottom CTA band
 *
 * @package MTRL
 */
?>
<section class="bg-primary py-16 text-primary-foreground lg:py-24">
	<div class="mx-auto max-w-7xl px-4 lg:px-8">
		<div class="text-center">
			<h2 class="text-balance text-3xl font-bold tracking-tight lg:text-4xl"><?php esc_html_e('Anh chị đang gặp sự cố hầm cầu hay cống tắc?', 'mtrl'); ?></h2>
			<p class="mx-auto mt-4 max-w-2xl text-pretty text-lg opacity-90">
				<?php esc_html_e('Đừng lo! Đội ngũ Hoàng Long sẵn sàng đồng hành cùng anh chị 24/7. Gọi liền để được tư vấn miễn phí và báo giá nhanh.', 'mtrl'); ?>
			</p>
			<div class="mt-8 flex flex-col items-center justify-center gap-4 sm:flex-row">
				<a href="<?php echo esc_url(mtrl_phone_tel_href()); ?>" class="inline-flex h-10 items-center justify-center gap-2 rounded-md bg-secondary px-6 text-base font-medium text-secondary-foreground transition-colors hover:bg-secondary/80">
					<?php mtrl_icon_e('phone', 'h-5 w-5'); ?>
					<?php printf(esc_html__('Gọi ngay: %s', 'mtrl'), esc_html(mtrl_phone_display())); ?>
				</a>
				<a href="<?php echo esc_url(home_url('/lien-he/')); ?>" class="inline-flex h-10 items-center justify-center gap-2 rounded-md border border-primary-foreground/30 bg-transparent text-base text-primary-foreground transition-colors hover:bg-primary-foreground/10">
					<?php esc_html_e('Đặt lịch hẹn', 'mtrl'); ?>
					<?php mtrl_icon_e('arrow-right', 'h-4 w-4'); ?>
				</a>
			</div>
			<p class="mt-6 text-sm opacity-75"><?php esc_html_e('Miễn phí khảo sát - Báo giá trong 5 phút - Có mặt trong 30 phút', 'mtrl'); ?></p>
		</div>
	</div>
</section>
