<?php
/**
 * Footer
 *
 * @package MTRL
 */

if (! defined('ABSPATH')) {
    exit;
}

$nav_services = [
    ['Hút hầm cầu', mtrl_service_url('hut-be-phot')],
    ['Thông cống nghẹt', mtrl_service_url('thong-tac-cong')],
    ['Nạo vét hố ga', mtrl_service_url('nao-vet-ho-ga')],
    ['Vệ sinh môi trường', mtrl_service_url('ve-sinh-moi-truong')],
];
$areas = ['Quận 1', 'Quận 3', 'Tân Bình', 'Phú Nhuận', 'Bình Thạnh', 'Gò Vấp', 'Tân Phú', 'Quận 7'];
?>
<footer class="border-t border-border bg-muted/30">
	<div class="mx-auto max-w-7xl px-4 py-12 lg:px-8 lg:py-16">
		<div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
			<div class="space-y-4">
				<a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3">
					<img src="<?php echo esc_url(mtrl_img_uri('logo.png')); ?>" width="48" height="48" class="h-12 w-12" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
					<div>
						<p class="text-lg font-bold text-foreground"><?php esc_html_e('Hoàng Long', 'mtrl'); ?></p>
						<p class="text-xs text-muted-foreground"><?php esc_html_e('Môi Trường', 'mtrl'); ?></p>
					</div>
				</a>
				<p class="text-sm leading-relaxed text-muted-foreground">
					<?php esc_html_e('Công ty Môi Trường Hoàng Long - Đơn vị hút hầm cầu, thông cống nghẹt và vệ sinh môi trường uy tín tại TP.Hồ Chí Minh và các quận lân cận.', 'mtrl'); ?>
				</p>
				<div class="flex gap-3">
					<a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="flex h-10 w-10 items-center justify-center rounded-full bg-primary/10 text-primary transition-colors hover:bg-primary hover:text-primary-foreground">
						<?php mtrl_icon_e('facebook', 'h-5 w-5'); ?>
						<span class="sr-only">Facebook</span>
					</a>
					<a href="<?php echo esc_url(mtrl_phone_zalo_url()); ?>" target="_blank" rel="noopener noreferrer" class="flex h-10 w-10 items-center justify-center rounded-full bg-secondary/10 text-secondary transition-colors hover:bg-secondary hover:text-secondary-foreground">
						<span class="text-xs font-bold">Zalo</span>
					</a>
				</div>
			</div>

			<div>
				<h3 class="mb-4 text-sm font-semibold uppercase tracking-wider text-foreground"><?php esc_html_e('Dịch vụ', 'mtrl'); ?></h3>
				<ul class="space-y-3">
					<?php foreach ($nav_services as $item) : ?>
						<li>
							<a href="<?php echo esc_url($item[1]); ?>" class="text-sm text-muted-foreground transition-colors hover:text-primary"><?php echo esc_html($item[0]); ?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div>
				<h3 class="mb-4 text-sm font-semibold uppercase tracking-wider text-foreground"><?php esc_html_e('Khu vực phục vụ', 'mtrl'); ?></h3>
				<ul class="grid grid-cols-2 gap-2">
					<?php foreach ($areas as $area) : ?>
						<li class="text-sm text-muted-foreground"><?php echo esc_html($area); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div>
				<h3 class="mb-4 text-sm font-semibold uppercase tracking-wider text-foreground"><?php esc_html_e('Liên hệ', 'mtrl'); ?></h3>
				<ul class="space-y-3">
					<li class="flex items-start gap-3">
						<?php mtrl_icon_e('phone', 'mt-0.5 h-4 w-4 shrink-0 text-red-600'); ?>
						<div>
							<p class="text-sm font-medium text-foreground"><?php esc_html_e('Hotline 24/7', 'mtrl'); ?></p>
							<a href="<?php echo esc_url(mtrl_phone_tel_href()); ?>" class="text-sm font-semibold text-red-600 hover:text-red-700 hover:underline"><?php echo esc_html(mtrl_phone_display()); ?></a>
						</div>
					</li>
					<li class="flex items-start gap-3">
						<?php mtrl_icon_e('mail', 'mt-0.5 h-4 w-4 shrink-0 text-primary'); ?>
						<div>
							<p class="text-sm font-medium text-foreground">Email</p>
							<a href="mailto:info@moitruonghoanglong.vn" class="text-sm text-muted-foreground hover:text-primary">info@moitruonghoanglong.vn</a>
						</div>
					</li>
					<li class="flex items-start gap-3">
						<?php mtrl_icon_e('map-pin', 'mt-0.5 h-4 w-4 shrink-0 text-primary'); ?>
						<div>
							<p class="text-sm font-medium text-foreground"><?php esc_html_e('Địa chỉ', 'mtrl'); ?></p>
							<p class="text-sm text-muted-foreground"><?php esc_html_e('Số 45, đường Nguyễn Văn Trỗi, phường Phú Nhuận, TP.Hồ Chí Minh', 'mtrl'); ?></p>
						</div>
					</li>
					<li class="flex items-start gap-3">
						<?php mtrl_icon_e('clock', 'mt-0.5 h-4 w-4 shrink-0 text-primary'); ?>
						<div>
							<p class="text-sm font-medium text-foreground"><?php esc_html_e('Giờ làm việc', 'mtrl'); ?></p>
							<p class="text-sm text-muted-foreground"><?php esc_html_e('24/7 - Phục vụ cả ngày lễ', 'mtrl'); ?></p>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<div class="mt-12 border-t border-border pt-8">
			<div class="flex flex-col items-center justify-between gap-4 md:flex-row">
				<p class="text-sm text-muted-foreground">
					© <?php echo esc_html(gmdate('Y')); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('Bảo lưu mọi quyền.', 'mtrl'); ?>
				</p>
				<div class="flex gap-6">
					<a href="<?php echo esc_url(home_url('/chinh-sach/')); ?>" class="text-sm text-muted-foreground hover:text-primary"><?php esc_html_e('Chính sách bảo mật', 'mtrl'); ?></a>
					<a href="<?php echo esc_url(home_url('/dieu-khoan/')); ?>" class="text-sm text-muted-foreground hover:text-primary"><?php esc_html_e('Điều khoản sử dụng', 'mtrl'); ?></a>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php get_template_part('template-parts/layout/floating', 'cta'); ?>

<?php wp_footer(); ?>
</body>
</html>
