<?php
/**
 * Services grid (home)
 *
 * @package MTRL
 */
$services = [
	['droplets', 'Hút hầm cầu', 'Dịch vụ hút hầm cầu chuyên nghiệp với xe hút công suất lớn, xử lý nhanh gọn, sạch sẽ.', mtrl_service_url('hut-be-phot'), 'Liên hệ báo giá', 'hut-be-phot.jpg'],
	['pipette', 'Thông cống nghẹt', 'Thông cống nghẹt, bồn cầu, chậu rửa bằng công nghệ hiện đại, không đục phá.', mtrl_service_url('thong-tac-cong'), 'Liên hệ báo giá', 'thong-tac-cong.jpg'],
	['waves', 'Nạo vét hố ga', 'Nạo vét hố ga, cống rãnh, xử lý mùi hôi, đảm bảo thoát nước tốt.', mtrl_service_url('nao-vet-ho-ga'), 'Liên hệ báo giá', 'nao-vet-ho-ga.jpg'],
	['trash2', 'Vệ sinh môi trường', 'Dịch vụ vệ sinh công nghiệp, thu gom rác thải, xử lý chất thải.', mtrl_service_url('ve-sinh-moi-truong'), 'Liên hệ báo giá', 've-sinh-moi-truong.jpg'],
	['truck', 'Xe hút chất thải', 'Cho thuê xe hút chất thải các loại, công suất từ 2m³ đến 15m³.', mtrl_service_url('cho-thue-xe'), 'Liên hệ báo giá', 'cho-thue-xe.jpg'],
	['leaf', 'Xử lý chất thải', 'Xử lý chất thải nguy hại, chất thải công nghiệp theo quy chuẩn môi trường.', mtrl_service_url('xu-ly-chat-thai'), 'Liên hệ báo giá', 'xu-ly-chat-thai.jpg'],
];
?>
<section id="dich-vu" class="py-16 lg:py-24">
	<div class="mx-auto max-w-7xl px-4 lg:px-8">
		<div class="mb-12 text-center lg:mb-16">
			<p class="mb-2 text-sm font-semibold uppercase tracking-wider text-primary"><?php esc_html_e('Dịch vụ nổi bật', 'mtrl'); ?></p>
			<h2 class="text-balance text-3xl font-bold tracking-tight text-foreground lg:text-4xl"><?php esc_html_e('Giải pháp toàn diện cho môi trường sạch', 'mtrl'); ?></h2>
			<p class="mx-auto mt-4 max-w-2xl text-pretty text-lg text-muted-foreground"><?php esc_html_e('Hoàng Long triển khai đầy đủ dịch vụ vệ sinh môi trường tại TP.Hồ Chí Minh với đội ngũ chuyên nghiệp và trang thiết bị hiện đại.', 'mtrl'); ?></p>
		</div>
		<div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
			<?php foreach ($services as $s) : ?>
				<div class="group relative flex flex-col overflow-hidden rounded-xl border border-border/50 bg-card py-6 text-card-foreground shadow-sm transition-all hover:border-primary/30 hover:shadow-lg">
					<div class="relative h-48 overflow-hidden bg-muted">
						<img src="<?php echo esc_url(mtrl_img_uri('services/' . $s[5])); ?>" alt="<?php echo esc_attr($s[1]); ?>" class="absolute inset-0 h-full w-full object-cover transition-transform duration-300 group-hover:scale-105" width="400" height="300" loading="lazy">
						<div class="absolute inset-0 bg-gradient-to-t from-background/80 to-transparent "></div>
						<div class="absolute bottom-3 left-3">
							<div class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary text-primary-foreground shadow-lg">
								<?php mtrl_icon_e($s[0], 'h-5 w-5'); ?>
							</div>
						</div>
					</div>
					<div class="grid auto-rows-min grid-rows-[auto_auto] items-start gap-2 px-6 pb-2">
						<div class="text-xl font-semibold leading-none mt-4"><?php echo esc_html($s[1]); ?></div>
						<div class="text-base text-muted-foreground"><?php echo esc_html($s[2]); ?></div>
					</div>
					<div class="px-6">
						<div class="flex items-center justify-between">
							<span class="text-sm font-semibold text-primary"><?php echo esc_html($s[4]); ?></span>
							<a href="<?php echo esc_url($s[3]); ?>" class="inline-flex h-8 items-center gap-1 rounded-md px-3 text-sm font-medium text-muted-foreground transition-colors hover:text-primary">
								<?php esc_html_e('Chi tiết', 'mtrl'); ?>
								<?php mtrl_icon_e('arrow-right', 'h-4 w-4'); ?>
							</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="mt-12 text-center">
			<a href="<?php echo esc_url(home_url('/dich-vu/')); ?>" class="inline-flex h-10 items-center justify-center gap-2 rounded-md border border-input bg-background px-6 text-sm font-medium shadow-xs transition-colors hover:bg-accent hover:text-accent-foreground">
				<?php esc_html_e('Xem tất cả dịch vụ', 'mtrl'); ?>
				<?php mtrl_icon_e('arrow-right', 'ml-2 h-4 w-4'); ?>
			</a>
		</div>
	</div>
</section>
