<?php
/**
 * FAQ accordion (native details for accessibility)
 *
 * @package MTRL
 */
$faqs = [
	[__('Chi phí hút hầm cầu là bao nhiêu?', 'mtrl'), __('Giá hút hầm cầu tùy khối lượng và vị trí công trình. Bên em khảo sát và báo giá rõ ràng trước khi làm, minh bạch, không phát sinh ẩn.', 'mtrl')],
	[__('Mất bao lâu để xử lý xong?', 'mtrl'), __('Tùy khối lượng công việc. Nhà dân thường hút hầm cầu khoảng 30–60 phút; công trình lớn có thể 2–4 giờ. Luôn cố gắng xử lý gọn, sạch, nhanh nhất có thể.', 'mtrl')],
	[__('Có phục vụ ngoài giờ và ngày lễ không?', 'mtrl'), __('Có ạ, phục vụ 24/7 kể cả ngày lễ, Tết, cuối tuần. Đội trực sẵn sàng có mặt trong khoảng 30 phút khi anh chị gọi.', 'mtrl')],
	[__('Dịch vụ có bảo hành không?', 'mtrl'), __('Có, mọi dịch vụ đều có bảo hành từ 3–12 tháng tùy hạng mục. Trong thời gian bảo hành nếu phát sinh sự cố, bên em xử lý miễn phí.', 'mtrl')],
	[__('Thanh toán như thế nào?', 'mtrl'), __('Chấp nhận tiền mặt, chuyển khoản ngân hàng hoặc ví điện tử. Thanh toán sau khi hoàn tất và anh chị nghiệm thu.', 'mtrl')],
	[__('Cần chuẩn bị gì trước khi nhân viên tới?', 'mtrl'), __('Anh chị chỉ cần chỉ giúp vị trí hầm cầu hoặc điểm tắc. Nếu được, dọn nhẹ khu vực thi công cho thoáng. Đội ngũ mang đầy đủ dụng cụ và thiết bị.', 'mtrl')],
];
?>
<section class="bg-muted/30 py-16 lg:py-24">
	<div class="mx-auto max-w-7xl px-4 lg:px-8">
		<div class="mb-12 text-center lg:mb-16">
			<p class="mb-2 text-sm font-semibold uppercase tracking-wider text-primary"><?php esc_html_e('Câu hỏi thường gặp', 'mtrl'); ?></p>
			<h2 class="text-balance text-3xl font-bold tracking-tight text-foreground lg:text-4xl"><?php esc_html_e('Giải đáp thắc mắc cho anh chị', 'mtrl'); ?></h2>
			<p class="mx-auto mt-4 max-w-2xl text-pretty text-lg text-muted-foreground"><?php esc_html_e('Những câu hỏi thường gặp khi đặt dịch vụ tại Hoàng Long.', 'mtrl'); ?></p>
		</div>
		<div class="mx-auto max-w-3xl">
			<?php foreach ($faqs as $i => $faq) : ?>
				<details class="group border-b border-border/50 last:border-b-0 mtrl-faq-item">
					<summary class="flex w-full cursor-pointer list-none items-start justify-between gap-4 rounded-md py-4 text-left text-base font-medium outline-none hover:underline [&::-webkit-details-marker]:hidden">
						<span class="group-open:text-primary"><?php echo esc_html($faq[0]); ?></span>
						<?php mtrl_icon_e('chevron-down', 'text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200 group-open:rotate-180'); ?>
					</summary>
					<div class="pb-4 text-sm text-muted-foreground"><?php echo esc_html($faq[1]); ?></div>
				</details>
			<?php endforeach; ?>
		</div>
	</div>
</section>
