<?php
/**
 * Testimonials
 *
 * @package MTRL
 */
$items = [
	[__('Nguyễn Văn Hùng', 'mtrl'), __('Chủ nhà tại Phú Nhuận', 'mtrl'), __('Dịch vụ chu đáo, anh em tới đúng giờ, dọn sạch sẽ. Giá hợp lý, tôi sẽ giới thiệu cho bà con xung quanh.', 'mtrl'), 'testimonials/avatar-1.jpg'],
	[__('Trần Thị Mai', 'mtrl'), __('Quản lý tòa nhà', 'mtrl'), __('Dùng dịch vụ Hoàng Long nhiều năm rồi, lúc nào cũng hài lòng về chất lượng và thái độ phục vụ.', 'mtrl'), 'testimonials/avatar-2.jpg'],
	[__('Lê Minh Tuấn', 'mtrl'), __('Chủ quán ăn', 'mtrl'), __('Gọi khuya vì hầm cầu tràn nước, đội có mặt trong khoảng nửa tiếng. Xử lý nhanh gọn, cảm ơn Hoàng Long!', 'mtrl'), 'testimonials/avatar-3.jpg'],
	[__('Phạm Thị Lan', 'mtrl'), __('Chủ khách sạn', 'mtrl'), __('Chất lượng dịch vụ tuyệt vời. Đặc biệt ấn tượng với việc họ dọn dẹp sạch sẽ sau khi hoàn thành công việc.', 'mtrl'), 'testimonials/avatar-4.jpg'],
];
?>
<section class="bg-muted/30 py-16 lg:py-24">
	<div class="mx-auto max-w-7xl px-4 lg:px-8">
		<div class="mb-12 text-center lg:mb-16">
			<p class="mb-2 text-sm font-semibold uppercase tracking-wider text-primary"><?php esc_html_e('Đánh giá khách hàng', 'mtrl'); ?></p>
			<h2 class="text-balance text-3xl font-bold tracking-tight text-foreground lg:text-4xl"><?php esc_html_e('Khách hàng nói về Hoàng Long', 'mtrl'); ?></h2>
			<p class="mx-auto mt-4 max-w-2xl text-pretty text-lg text-muted-foreground"><?php esc_html_e('Nhiều khách hàng tại TP.Hồ Chí Minh đã tin tưởng và hài lòng với dịch vụ của Hoàng Long.', 'mtrl'); ?></p>
		</div>
		<div class="grid gap-6 md:grid-cols-2">
			<?php foreach ($items as $t) : ?>
				<div class="rounded-xl border border-border/50 bg-card py-6 text-card-foreground shadow-sm">
					<div class="p-6">
						<div class="mb-4 flex items-center gap-1">
							<?php for ($i = 0; $i < 5; $i++) : ?>
								<?php mtrl_icon_e('star', 'h-4 w-4 fill-amber-400 text-amber-400'); ?>
							<?php endfor; ?>
						</div>
						<?php mtrl_icon_e('quote', 'mb-2 h-8 w-8 text-primary/20'); ?>
						<p class="mb-4 text-base leading-relaxed text-foreground"><?php echo esc_html($t[2]); ?></p>
						<div class="flex items-center gap-3">
							<div class="relative h-12 w-12 overflow-hidden rounded-full bg-primary/10">
								<img src="<?php echo esc_url(mtrl_img_uri($t[3])); ?>" alt="<?php echo esc_attr($t[0]); ?>" class="absolute inset-0 h-full w-full object-cover" width="48" height="48" loading="lazy">
							</div>
							<div>
								<p class="font-semibold text-foreground"><?php echo esc_html($t[0]); ?></p>
								<p class="text-sm text-muted-foreground"><?php echo esc_html($t[1]); ?></p>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
