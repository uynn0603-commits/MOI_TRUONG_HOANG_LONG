<?php
/**
 * Hero section (home)
 *
 * @package MTRL
 */
?>
<section class="relative overflow-hidden bg-gradient-to-b from-muted/50 to-background pb-16 pt-8 lg:pb-24 lg:pt-12">
	<div class="absolute inset-0 -z-10 overflow-hidden">
		<div class="absolute -right-40 -top-40 h-80 w-80 rounded-full bg-primary/5 blur-3xl"></div>
		<div class="absolute -bottom-40 -left-40 h-80 w-80 rounded-full bg-secondary/5 blur-3xl"></div>
	</div>
	<div class="mx-auto max-w-7xl px-4 lg:px-8">
		<div class="grid gap-12 lg:grid-cols-2 lg:items-center">
			<div class="flex flex-col items-center text-center lg:items-start lg:text-left">
				<div class="mb-6 inline-flex items-center gap-2 rounded-full border border-primary/20 bg-primary/5 px-4 py-1.5 text-sm font-medium text-primary">
					<span class="relative flex h-2 w-2">
						<span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-75"></span>
						<span class="relative inline-flex h-2 w-2 rounded-full bg-primary"></span>
					</span>
					<?php esc_html_e('Phục vụ 24/7 - Có mặt trong 30 phút', 'mtrl'); ?>
				</div>
				<h1 class="max-w-xl text-balance text-4xl font-bold tracking-tight text-foreground sm:text-5xl lg:text-nowrap line-height-1">
					<?php esc_html_e('Dịch vụ hút hầm cầu', 'mtrl'); ?>
					<span class="text-primary"> <?php esc_html_e('chuyên nghiệp', 'mtrl'); ?></span>
					<?php esc_html_e(' tại TP.Hồ Chí Minh', 'mtrl'); ?>
				</h1>
				<p class="mt-6 max-w-xl text-pretty text-lg leading-relaxed text-muted-foreground lg:text-xl">
					<?php esc_html_e('Môi Trường Hoàng Long phục vụ hút hầm cầu, thông cống nghẹt và vệ sinh môi trường tại TP.Hồ Chí Minh và các quận lân cận với hơn 15 năm kinh nghiệm. Giá minh bạch, có mặt nhanh, làm gọn gàng sạch sẽ.', 'mtrl'); ?>
				</p>
				<div class="mt-8 flex flex-col gap-4 sm:flex-row sm:items-center">
					<a href="<?php echo esc_url(mtrl_phone_tel_href()); ?>" class="inline-flex h-10 items-center justify-center gap-2 rounded-md bg-primary px-6 text-base font-medium text-primary-foreground transition-colors hover:bg-primary/90">
						<?php mtrl_icon_e('phone', 'h-5 w-5'); ?>
						<?php printf(esc_html__('Gọi ngay: %s', 'mtrl'), esc_html(mtrl_phone_display())); ?>
					</a>
					<a href="<?php echo esc_url(home_url('/dich-vu/')); ?>" class="inline-flex h-10 items-center justify-center gap-2 rounded-md border border-input bg-background px-6 text-base font-medium shadow-xs transition-colors hover:bg-accent hover:text-accent-foreground">
						<?php esc_html_e('Xem dịch vụ', 'mtrl'); ?>
						<?php mtrl_icon_e('arrow-right', 'h-4 w-4'); ?>
					</a>
				</div>
				<div class="mt-8 flex flex-wrap items-center justify-center gap-6 lg:justify-start">
					<div class="flex items-center gap-2 text-sm text-muted-foreground"><?php mtrl_icon_e('clock', 'h-5 w-5 text-primary'); ?><span><?php esc_html_e('Phục vụ 24/7', 'mtrl'); ?></span></div>
					<div class="flex items-center gap-2 text-sm text-muted-foreground"><?php mtrl_icon_e('shield', 'h-5 w-5 text-primary'); ?><span><?php esc_html_e('Bảo hành dài hạn', 'mtrl'); ?></span></div>
					<div class="flex items-center gap-2 text-sm text-muted-foreground"><?php mtrl_icon_e('award', 'h-5 w-5 text-primary'); ?><span><?php esc_html_e('15+ năm kinh nghiệm', 'mtrl'); ?></span></div>
				</div>
			</div>
			<div class="relative mx-auto w-full max-w-lg lg:max-w-none">
				<div class="relative aspect-[4/3] overflow-hidden rounded-2xl border border-border/50 bg-muted shadow-2xl">
					<img src="<?php echo esc_url(mtrl_img_uri('hero-placeholder.jpg')); ?>" alt="<?php echo esc_attr__('Xe hút bể phốt chuyên dụng Hoàng Long', 'mtrl'); ?>" class="absolute inset-0 h-full w-full object-cover" width="800" height="600" loading="eager" fetchpriority="high">
					<div class="absolute bottom-4 left-4 right-4 rounded-xl bg-background/95 p-4 backdrop-blur-sm">
						<div class="flex items-center gap-3">
							<div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary text-primary-foreground">
								<?php mtrl_icon_e('phone', 'h-6 w-6'); ?>
							</div>
							<div>
								<p class="text-sm font-medium text-muted-foreground"><?php esc_html_e('Hotline 24/7', 'mtrl'); ?></p>
								<p class="text-lg font-bold text-foreground"><?php echo esc_html(mtrl_phone_display()); ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="absolute -bottom-4 -right-4 -z-10 h-full w-full rounded-2xl bg-primary/10"></div>
			</div>
		</div>
		<div class="mt-16 grid w-full grid-cols-2 gap-4 lg:grid-cols-4">
			<?php
			$stats = [
				['15+', __('Năm kinh nghiệm', 'mtrl')],
				['50K+', __('Khách hàng', 'mtrl')],
				['100+', __('Xe chuyên dụng', 'mtrl')],
				['24/7', __('Sẵn sàng phục vụ', 'mtrl')],
			];
			foreach ($stats as $stat) :
				?>
				<div class="flex flex-col items-center rounded-xl border border-border/50 bg-card p-4 shadow-sm">
					<span class="text-3xl font-bold text-primary"><?php echo esc_html($stat[0]); ?></span>
					<span class="mt-1 text-sm text-muted-foreground"><?php echo esc_html($stat[1]); ?></span>
				</div>
				<?php
			endforeach;
			?>
		</div>
	</div>
</section>
