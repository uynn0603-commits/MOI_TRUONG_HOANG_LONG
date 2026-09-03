<?php
/**
 * Process steps
 *
 * @package MTRL
 */
$steps = [
	['phone', __('Liên hệ', 'mtrl'), __('Gọi hotline hoặc đặt lịch online. Nhân viên tư vấn sẽ tiếp nhận yêu cầu.', 'mtrl')],
	['file', __('Báo giá', 'mtrl'), __('Khảo sát thực tế và báo giá chi tiết, minh bạch trước khi thực hiện.', 'mtrl')],
	['truck', __('Thực hiện', 'mtrl'), __('Đội kỹ thuật có mặt nhanh (thường trong khoảng 30 phút), thi công gọn, dọn sạch.', 'mtrl')],
	['check-circle', __('Hoàn thành', 'mtrl'), __('Nghiệm thu, vệ sinh hiện trường và bàn giao. Bảo hành dài hạn.', 'mtrl')],
];
?>
<section class="py-16 lg:py-24">
	<div class="mx-auto max-w-7xl px-4 lg:px-8">
		<div class="mb-12 text-center lg:mb-16">
			<p class="mb-2 text-sm font-semibold uppercase tracking-wider text-primary"><?php esc_html_e('Quy trình làm việc', 'mtrl'); ?></p>
			<h2 class="text-balance text-3xl font-bold tracking-tight text-foreground lg:text-4xl"><?php esc_html_e('4 bước đơn giản để giải quyết vấn đề', 'mtrl'); ?></h2>
			<p class="mx-auto mt-4 max-w-2xl text-pretty text-lg text-muted-foreground"><?php esc_html_e('Quy trình rõ ràng, báo giá trước để anh chị yên tâm khi sử dụng dịch vụ.', 'mtrl'); ?></p>
		</div>
		<div class="relative">
			<div class="absolute left-0 right-0 top-24 hidden h-0.5 bg-gradient-to-r from-primary/20 via-primary to-primary/20 lg:block"></div>
			<div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
				<?php foreach ($steps as $i => $step) : ?>
					<div class="relative flex flex-col items-center text-center">
						<div class="relative z-10 mb-4 flex h-16 w-16 items-center justify-center rounded-full border-4 border-background bg-primary text-2xl font-bold text-primary-foreground shadow-lg"><?php echo esc_html((string) ($i + 1)); ?></div>
						<div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-muted text-primary">
							<?php mtrl_icon_e($step[0], 'h-6 w-6'); ?>
						</div>
						<h3 class="text-lg font-semibold text-foreground"><?php echo esc_html($step[1]); ?></h3>
						<p class="mt-2 text-sm leading-relaxed text-muted-foreground"><?php echo esc_html($step[2]); ?></p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
