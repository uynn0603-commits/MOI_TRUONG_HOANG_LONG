<?php
/**
 * Coverage districts
 *
 * @package MTRL
 */
$districts = [
	['Quận 1', '15-25 phút'],
	['Quận 3', '15-25 phút'],
	['Phú Nhuận', '15-25 phút'],
	['Bình Thạnh', '20-30 phút'],
	['Tân Bình', '20-30 phút'],
	['Gò Vấp', '20-35 phút'],
	['Tân Phú', '25-35 phút'],
	['Quận 7', '25-40 phút'],
	['Bình Tân', '25-40 phút'],
	['TP. Thủ Đức', '25-40 phút'],
	['Quận 10', '20-30 phút'],
];
?>
<section class="py-16 lg:py-24">
	<div class="mx-auto max-w-7xl px-4 lg:px-8">
		<div class="mb-12 text-center lg:mb-16">
			<p class="mb-2 text-sm font-semibold uppercase tracking-wider text-primary"><?php esc_html_e('Khu vực phục vụ', 'mtrl'); ?></p>
			<h2 class="text-balance text-3xl font-bold tracking-tight text-foreground lg:text-4xl"><?php esc_html_e('Phủ sóng TP.Hồ Chí Minh và vùng ven', 'mtrl'); ?></h2>
			<p class="mx-auto mt-4 max-w-2xl text-pretty text-lg text-muted-foreground"><?php esc_html_e('Đội xe Hoàng Long sẵn sàng có mặt nhanh tại các quận nội thành và khu vực lân cận.', 'mtrl'); ?></p>
		</div>
		<div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
			<?php foreach ($districts as $d) : ?>
				<div class="group flex items-center gap-3 rounded-xl border border-border/50 bg-card p-4 transition-all hover:border-primary/30 hover:shadow-md">
					<div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary/10 text-primary transition-colors group-hover:bg-primary group-hover:text-primary-foreground">
						<?php mtrl_icon_e('map-pin', 'h-5 w-5'); ?>
					</div>
					<div>
						<p class="font-semibold text-foreground"><?php echo esc_html($d[0]); ?></p>
						<p class="text-sm text-muted-foreground"><?php echo esc_html('Có mặt: ' . $d[1]); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<p class="mt-8 text-center text-sm text-muted-foreground">
			<?php esc_html_e('Ngoài ra còn phục vụ các huyện ven và tỉnh lân cận: Hóc Môn, Củ Chi, Bình Chánh, Nhà Bè, Cần Giờ, Bình Dương, Long An, Đồng Nai, Bà Rịa - Vũng Tàu…', 'mtrl'); ?>
		</p>
	</div>
</section>
