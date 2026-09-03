<?php
/**
 * Trang danh sách dịch vụ (mirror app/dich-vu/page.tsx)
 *
 * @package MTRL
 */

$services = [
	[
		'icon'        => 'droplets',
		'title'       => __( 'Hút hầm cầu Sài Gòn', 'mtrl' ),
		'slug'        => 'hut-be-phot',
		'description' => __( 'Hút hầm cầu tại Sài Gòn giá công khai, minh bạch, có mặt trong 15 phút. Xe hút công suất lớn từ 2m³ đến 15m³, xử lý sạch sẽ, không gây ô nhiễm.', 'mtrl' ),
		'features'    => [ __( 'Có mặt trong 15 phút', 'mtrl' ), __( 'Giá công khai từ 137.000đ/m³', 'mtrl' ), __( 'Hút lại miễn phí nếu chưa sạch', 'mtrl' ), __( 'Bảo hành đến 5 năm', 'mtrl' ) ],
		'price'       => __( 'Từ 137.000đ/m³', 'mtrl' ),
		'highlight'   => __( 'Có mặt 15 phút', 'mtrl' ),
		'popular'     => true,
	],
	[
		'icon'        => 'pipette',
		'title'       => __( 'Thông cống nghẹt TP.HCM giá rẻ', 'mtrl' ),
		'slug'        => 'thong-tac-cong',
		'description' => __( 'Thông cống nghẹt, bồn cầu, chậu rửa, đường ống thoát nước bằng máy lò xo, áp lực cao và camera nội soi. Không đục phá, có mặt trong 30 phút.', 'mtrl' ),
		'features'    => [ __( 'Có mặt trong 30 phút', 'mtrl' ), __( 'Giá công khai từ 99.000đ', 'mtrl' ), __( 'Không đục phá', 'mtrl' ), __( 'Bảo hành 3-12 tháng', 'mtrl' ) ],
		'price'       => __( 'Từ 99.000đ', 'mtrl' ),
		'highlight'   => __( 'Có mặt 30 phút', 'mtrl' ),
		'popular'     => true,
	],
	[
		'icon'        => 'waves',
		'title'       => __( 'Nạo vét hố ga', 'mtrl' ),
		'slug'        => 'nao-vet-ho-ga',
		'description' => __( 'Nạo vét hố ga, cống rãnh, xử lý mùi hôi, đảm bảo hệ thống thoát nước hoạt động tốt. Phù hợp cho hộ gia đình và công trình lớn.', 'mtrl' ),
		'features'    => [ __( 'Làm sạch hoàn toàn', 'mtrl' ), __( 'Xử lý mùi hôi', 'mtrl' ), __( 'Kiểm tra camera', 'mtrl' ), __( 'Báo cáo tình trạng', 'mtrl' ) ],
		'price'       => __( 'Liên hệ báo giá', 'mtrl' ),
		'highlight'   => null,
		'popular'     => false,
	],
	[
		'icon'        => 'trash2',
		'title'       => __( 'Vệ sinh môi trường', 'mtrl' ),
		'slug'        => 've-sinh-moi-truong',
		'description' => __( 'Dịch vụ vệ sinh công nghiệp, thu gom rác thải sinh hoạt và công nghiệp. Đáp ứng mọi nhu cầu từ hộ gia đình đến doanh nghiệp lớn.', 'mtrl' ),
		'features'    => [ __( 'Vệ sinh công nghiệp', 'mtrl' ), __( 'Thu gom rác thải', 'mtrl' ), __( 'Phun khử khuẩn', 'mtrl' ), __( 'Hợp đồng dài hạn', 'mtrl' ) ],
		'price'       => __( 'Liên hệ báo giá', 'mtrl' ),
		'highlight'   => null,
		'popular'     => false,
	],
	[
		'icon'        => 'truck',
		'title'       => __( 'Cho thuê xe hút', 'mtrl' ),
		'slug'        => 'cho-thue-xe',
		'description' => __( 'Cho thuê xe hút chất thải các loại với nhiều công suất khác nhau. Phù hợp cho các công trình xây dựng, nhà máy, khu công nghiệp.', 'mtrl' ),
		'features'    => [ __( 'Xe 2m³ - 15m³', 'mtrl' ), __( 'Đa dạng công suất', 'mtrl' ), __( 'Thuê ngày/tháng', 'mtrl' ), __( 'Có lái xe đi kèm', 'mtrl' ) ],
		'price'       => __( 'Liên hệ báo giá', 'mtrl' ),
		'highlight'   => null,
		'popular'     => false,
	],
	[
		'icon'        => 'leaf',
		'title'       => __( 'Xử lý chất thải', 'mtrl' ),
		'slug'        => 'xu-ly-chat-thai',
		'description' => __( 'Xử lý chất thải nguy hại, chất thải công nghiệp theo đúng quy chuẩn môi trường. Có đầy đủ giấy phép vận chuyển và xử lý.', 'mtrl' ),
		'features'    => [ __( 'Chất thải nguy hại', 'mtrl' ), __( 'Theo quy chuẩn', 'mtrl' ), __( 'Giấy phép đầy đủ', 'mtrl' ), __( 'Báo cáo xử lý', 'mtrl' ) ],
		'price'       => __( 'Liên hệ báo giá', 'mtrl' ),
		'highlight'   => null,
		'popular'     => false,
	],
];

$stats = [
	[ 'icon' => 'clock', 'value' => __( '15 phút', 'mtrl' ), 'label' => __( 'Có mặt nhanh nhất', 'mtrl' ) ],
	[ 'icon' => 'shield', 'value' => __( '5 năm', 'mtrl' ), 'label' => __( 'Bảo hành dài nhất', 'mtrl' ) ],
	[ 'icon' => 'users', 'value' => __( '10.000+', 'mtrl' ), 'label' => __( 'Khách hàng tin dùng', 'mtrl' ) ],
	[ 'icon' => 'award', 'value' => __( '24/7', 'mtrl' ), 'label' => __( 'Phục vụ mọi lúc', 'mtrl' ) ],
];

$trust_chips = [
	[ 'icon' => 'clock', 'label' => __( 'Có mặt 15-30 phút', 'mtrl' ) ],
	[ 'icon' => 'shield', 'label' => __( 'Bảo hành đến 5 năm', 'mtrl' ) ],
	[ 'icon' => 'check-circle', 'label' => __( 'Giá công khai, không phát sinh', 'mtrl' ) ],
	[ 'icon' => 'phone', 'label' => __( 'Hỗ trợ 24/7', 'mtrl' ) ],
];
?>
<main id="main">
	<section class="relative overflow-hidden bg-gradient-to-b from-muted/50 to-background py-16 lg:py-24">
		<div class="absolute inset-0 -z-10">
			<div class="absolute -right-40 -top-40 h-80 w-80 rounded-full bg-primary/5 blur-3xl"></div>
		</div>
		<div class="mx-auto max-w-7xl px-4 text-center lg:px-8">
			<p class="mb-2 text-sm font-semibold uppercase tracking-wider text-primary"><?php esc_html_e( 'Dịch vụ', 'mtrl' ); ?></p>
			<h1 class="text-balance text-4xl font-bold tracking-tight text-foreground lg:text-5xl"><?php esc_html_e( 'Giải pháp môi trường toàn diện', 'mtrl' ); ?></h1>
			<p class="mx-auto mt-6 max-w-2xl text-pretty text-lg text-muted-foreground"><?php esc_html_e('Hoàng Long phục vụ đầy đủ các hạng mục vệ sinh môi trường tại TP.Hồ Chí Minh với cam kết chất lượng và giá hợp lý.', 'mtrl'); ?></p>

			<div class="mt-8 flex flex-wrap items-center justify-center gap-3">
				<?php foreach ( $trust_chips as $chip ) : ?>
					<span class="inline-flex items-center gap-2 rounded-full border border-primary/20 bg-primary/5 px-4 py-2 text-sm font-medium text-foreground">
						<?php mtrl_icon_e( (string) $chip['icon'], 'h-4 w-4 text-primary' ); ?>
						<?php echo esc_html( (string) $chip['label'] ); ?>
					</span>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="border-y border-border/50 bg-muted/30 py-12">
		<div class="mx-auto max-w-7xl px-4 lg:px-8">
			<div class="grid grid-cols-2 gap-6 lg:grid-cols-4">
				<?php foreach ( $stats as $stat ) : ?>
					<div class="text-center">
						<div class="mx-auto mb-3 flex h-12 w-12 items-center justify-center rounded-full bg-primary/10 text-primary">
							<?php mtrl_icon_e( (string) $stat['icon'], 'h-6 w-6' ); ?>
						</div>
						<p class="text-3xl font-bold text-foreground"><?php echo esc_html( (string) $stat['value'] ); ?></p>
						<p class="mt-1 text-sm text-muted-foreground"><?php echo esc_html( (string) $stat['label'] ); ?></p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="py-16 lg:py-24">
		<div class="mx-auto max-w-7xl px-4 lg:px-8">
			<div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
				<?php foreach ( $services as $service ) : ?>
					<div class="group relative flex flex-col overflow-hidden rounded-xl border border-border/50 bg-card py-6 text-card-foreground shadow-sm transition-all hover:border-primary/30 hover:shadow-xl">
						<?php if ( ! empty( $service['popular'] ) ) : ?>
							<span class="absolute right-4 top-4 inline-flex items-center gap-1 rounded-md border border-transparent bg-primary px-2.5 py-0.5 text-xs font-semibold text-primary-foreground">
								<?php mtrl_icon_e( 'star', 'h-3 w-3' ); ?>
								<?php esc_html_e( 'Phổ biến', 'mtrl' ); ?>
							</span>
						<?php endif; ?>
						<div class="px-6 pb-4">
							<div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary/10 text-primary transition-transform duration-300 group-hover:scale-105 group-hover:bg-primary group-hover:text-primary-foreground">
								<?php mtrl_icon_e( (string) $service['icon'], 'h-6 w-6' ); ?>
							</div>
							<?php if ( ! empty( $service['highlight'] ) ) : ?>
								<span class="mb-2 inline-flex items-center gap-1 rounded-full bg-primary/10 px-2.5 py-1 text-xs font-semibold text-primary">
									<?php mtrl_icon_e( 'clock', 'h-3 w-3' ); ?>
									<?php echo esc_html( (string) $service['highlight'] ); ?>
								</span>
							<?php endif; ?>
							<p class="text-xl font-semibold leading-none tracking-tight text-foreground"><?php echo esc_html( (string) $service['title'] ); ?></p>
							<p class="mt-2 text-base text-muted-foreground"><?php echo esc_html( (string) $service['description'] ); ?></p>
						</div>
						<div class="flex flex-1 flex-col px-6 pb-6">
							<ul class="mb-6 flex-1 space-y-2">
								<?php foreach ( $service['features'] as $feature ) : ?>
									<li class="flex items-center gap-2 text-sm text-muted-foreground">
										<?php mtrl_icon_e( 'check-circle', 'h-4 w-4 shrink-0 text-primary' ); ?>
										<?php echo esc_html( (string) $feature ); ?>
									</li>
								<?php endforeach; ?>
							</ul>
							<div class="mt-auto flex items-center justify-between border-t border-border/50 pt-4">
								<span class="text-2xl font-bold text-primary"><?php echo esc_html( (string) $service['price'] ); ?></span>
								<a href="<?php echo esc_url( mtrl_service_url( (string) $service['slug'] ) ); ?>" class="inline-flex h-9 items-center justify-center gap-1 rounded-md border border-input bg-background px-3 text-sm font-medium shadow-xs transition-colors hover:bg-accent hover:text-accent-foreground">
									<?php esc_html_e( 'Chi tiết', 'mtrl' ); ?>
									<?php mtrl_icon_e( 'arrow-right', 'h-4 w-4' ); ?>
								</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="bg-primary py-16 text-primary-foreground lg:py-24">
		<div class="mx-auto max-w-7xl px-4 text-center lg:px-8">
			<h2 class="text-balance text-3xl font-bold lg:text-4xl"><?php esc_html_e( 'Cần tư vấn dịch vụ phù hợp?', 'mtrl' ); ?></h2>
			<p class="mx-auto mt-4 max-w-2xl text-lg opacity-90"><?php esc_html_e( 'Liên hệ ngay để được nhân viên tư vấn miễn phí và báo giá chi tiết!', 'mtrl' ); ?></p>
			<div class="mt-8 flex flex-col items-center justify-center gap-4 sm:flex-row">
				<a href="<?php echo esc_url(mtrl_phone_tel_href()); ?>" class="inline-flex h-11 items-center justify-center gap-2 rounded-md bg-secondary px-8 text-base font-medium text-secondary-foreground transition-colors hover:bg-secondary/80">
					<?php mtrl_icon_e( 'phone', 'h-5 w-5' ); ?>
					<?php echo esc_html(mtrl_phone_display()); ?>
				</a>
				<a href="<?php echo esc_url( home_url( '/lien-he/' ) ); ?>" class="inline-flex h-11 items-center justify-center gap-2 rounded-md border border-primary-foreground/30 bg-transparent px-8 text-base font-medium text-primary-foreground transition-colors hover:bg-primary-foreground/10">
					<?php esc_html_e( 'Đặt lịch ngay', 'mtrl' ); ?>
					<?php mtrl_icon_e( 'arrow-right', 'h-4 w-4' ); ?>
				</a>
			</div>
		</div>
	</section>
</main>
