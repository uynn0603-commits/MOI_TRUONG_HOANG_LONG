<?php
/**
 * Why choose us
 *
 * @package MTRL
 */
$reasons = [
	['clock', __('Phục vụ 24/7', 'mtrl'), __('Sẵn sàng có mặt trong vòng 30 phút, kể cả ngày lễ, cuối tuần.', 'mtrl')],
	['award', __('15+ năm kinh nghiệm', 'mtrl'), __('Đội ngũ kỹ thuật viên giàu kinh nghiệm, được đào tạo chuyên nghiệp.', 'mtrl')],
	['truck', __('100+ xe chuyên dụng', 'mtrl'), __('Đội xe hiện đại, đa dạng công suất từ 2m³ đến 15m³.', 'mtrl')],
	['shield', __('Bảo hành dài hạn', 'mtrl'), __('Cam kết bảo hành từ 3-12 tháng cho mọi dịch vụ.', 'mtrl')],
	['users', __('50.000+ khách hàng', 'mtrl'), __('Được hàng nghìn khách hàng tin tưởng và đánh giá cao.', 'mtrl')],
	['check-circle', __('Giá cả minh bạch', 'mtrl'), __('Báo giá trước khi làm, không phát sinh chi phí ẩn.', 'mtrl')],
];
?>
<section class="bg-muted/30 py-16 lg:py-24">
	<div class="mx-auto max-w-7xl px-4 lg:px-8">
		<div class="grid gap-12 lg:grid-cols-2 lg:items-center">
			<div class="relative order-2 lg:order-1">
				<div class="relative aspect-[4/3] overflow-hidden rounded-2xl border border-border/50 bg-muted shadow-xl">
					<img src="<?php echo esc_url(mtrl_img_uri('why-choose-us.jpg')); ?>" alt="<?php esc_attr_e('Đội ngũ Hoàng Long chuyên nghiệp', 'mtrl'); ?>" class="absolute inset-0 h-full w-full object-cover" width="600" height="450" loading="lazy">
				</div>
				<div class="absolute -bottom-4 -right-4 rounded-xl bg-primary p-4 text-primary-foreground shadow-lg md:-right-8">
					<p class="text-3xl font-bold">15+</p>
					<p class="text-sm"><?php esc_html_e('Năm kinh nghiệm', 'mtrl'); ?></p>
				</div>
			</div>
			<div class="order-1 lg:order-2">
				<p class="mb-2 text-sm font-semibold uppercase tracking-wider text-primary"><?php esc_html_e('Tại sao chọn Hoàng Long', 'mtrl'); ?></p>
				<h2 class="text-balance text-3xl font-bold tracking-tight text-foreground lg:text-4xl"><?php esc_html_e('Đối tác tin cậy của hàng nghìn khách hàng', 'mtrl'); ?></h2>
				<p class="mt-4 text-pretty text-lg leading-relaxed text-muted-foreground"><?php esc_html_e('Hoàng Long cam kết mang đến dịch vụ chất lượng cao nhất với giá cả hợp lý nhất.', 'mtrl'); ?></p>
				<div class="mt-8 grid gap-6 sm:grid-cols-2">
					<?php foreach ($reasons as $r) : ?>
						<div class="group flex gap-4">
							<div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary/10 text-primary transition-colors group-hover:bg-primary group-hover:text-primary-foreground">
								<?php mtrl_icon_e($r[0], 'h-6 w-6'); ?>
							</div>
							<div>
								<h3 class="text-base font-semibold text-foreground"><?php echo esc_html($r[1]); ?></h3>
								<p class="mt-1 text-sm leading-relaxed text-muted-foreground"><?php echo esc_html($r[2]); ?></p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
