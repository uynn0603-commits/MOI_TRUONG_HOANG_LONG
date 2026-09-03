<?php
/**
 * Trang danh sách dịch vụ (mirror app/dich-vu/page.tsx)
 *
 * @package MTRL
 */

$services = [
	[
		'icon'        => 'droplets',
		'title'       => __( 'Hút hầm cầu', 'mtrl' ),
		'slug'        => 'hut-be-phot',
		'description' => __( 'Dịch vụ hút hầm cầu chuyên nghiệp với xe hút công suất lớn từ 2m³ đến 15m³. Xử lý nhanh gọn, sạch sẽ, không gây ô nhiễm môi trường.', 'mtrl' ),
		'features'    => [ __( 'Xe hút công suất lớn', 'mtrl' ), __( 'Xử lý nhanh chóng', 'mtrl' ), __( 'Không đục phá', 'mtrl' ), __( 'Bảo hành 6 tháng', 'mtrl' ) ],
		'price'       => __( 'Liên hệ báo giá', 'mtrl' ),
		'popular'     => true,
	],
	[
		'icon'        => 'pipette',
		'title'       => __( 'Thông cống nghẹt', 'mtrl' ),
		'slug'        => 'thong-tac-cong',
		'description' => __( 'Thông cống nghẹt cống, bồn cầu, chậu rửa, đường ống thoát nước bằng công nghệ hiện đại. Không cần đục phá, bảo toàn kết cấu công trình.', 'mtrl' ),
		'features'    => [ __( 'Công nghệ tiên tiến', 'mtrl' ), __( 'Không đục phá', 'mtrl' ), __( 'Xử lý triệt để', 'mtrl' ), __( 'Bảo hành 3 tháng', 'mtrl' ) ],
		'price'       => __( 'Liên hệ báo giá', 'mtrl' ),
		'popular'     => true,
	],
	[
		'icon'        => 'waves',
		'title'       => __( 'Nạo vét hố ga', 'mtrl' ),
		'slug'        => 'nao-vet-ho-ga',
		'description' => __( 'Nạo vét hố ga, cống rãnh, xử lý mùi hôi, đảm bảo hệ thống thoát nước hoạt động tốt. Phù hợp cho hộ gia đình và công trình lớn.', 'mtrl' ),
		'features'    => [ __( 'Làm sạch hoàn toàn', 'mtrl' ), __( 'Xử lý mùi hôi', 'mtrl' ), __( 'Kiểm tra camera', 'mtrl' ), __( 'Báo cáo tình trạng', 'mtrl' ) ],
		'price'       => __( 'Liên hệ báo giá', 'mtrl' ),
		'popular'     => false,
	],
	[
		'icon'        => 'trash2',
		'title'       => __( 'Vệ sinh môi trường', 'mtrl' ),
		'slug'        => 've-sinh-moi-truong',
		'description' => __( 'Dịch vụ vệ sinh công nghiệp, thu gom rác thải sinh hoạt và công nghiệp. Đáp ứng mọi nhu cầu từ hộ gia đình đến doanh nghiệp lớn.', 'mtrl' ),
		'features'    => [ __( 'Vệ sinh công nghiệp', 'mtrl' ), __( 'Thu gom rác thải', 'mtrl' ), __( 'Phun khử khuẩn', 'mtrl' ), __( 'Hợp đồng dài hạn', 'mtrl' ) ],
		'price'       => __( 'Liên hệ báo giá', 'mtrl' ),
		'popular'     => false,
	],
	[
		'icon'        => 'truck',
		'title'       => __( 'Cho thuê xe hút', 'mtrl' ),
		'slug'        => 'cho-thue-xe',
		'description' => __( 'Cho thuê xe hút chất thải các loại với nhiều công suất khác nhau. Phù hợp cho các công trình xây dựng, nhà máy, khu công nghiệp.', 'mtrl' ),
		'features'    => [ __( 'Xe 2m³ - 15m³', 'mtrl' ), __( 'Đa dạng công suất', 'mtrl' ), __( 'Thuê ngày/tháng', 'mtrl' ), __( 'Có lái xe đi kèm', 'mtrl' ) ],
		'price'       => __( 'Liên hệ báo giá', 'mtrl' ),
		'popular'     => false,
	],
	[
		'icon'        => 'leaf',
		'title'       => __( 'Xử lý chất thải', 'mtrl' ),
		'slug'        => 'xu-ly-chat-thai',
		'description' => __( 'Xử lý chất thải nguy hại, chất thải công nghiệp theo đúng quy chuẩn môi trường. Có đầy đủ giấy phép vận chuyển và xử lý.', 'mtrl' ),
		'features'    => [ __( 'Chất thải nguy hại', 'mtrl' ), __( 'Theo quy chuẩn', 'mtrl' ), __( 'Giấy phép đầy đủ', 'mtrl' ), __( 'Báo cáo xử lý', 'mtrl' ) ],
		'price'       => __( 'Liên hệ báo giá', 'mtrl' ),
		'popular'     => false,
	],
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
		</div>
	</section>

	<section class="py-16 lg:py-24">
		<div class="mx-auto max-w-7xl px-4 lg:px-8">
			<div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
				<?php foreach ( $services as $service ) : ?>
					<div class="group relative flex flex-col overflow-hidden rounded-xl border border-border/50 bg-card py-6 text-card-foreground shadow-sm transition-all hover:border-primary/30 hover:shadow-lg">
						<?php if ( ! empty( $service['popular'] ) ) : ?>
							<span class="absolute right-4 top-4 inline-flex items-center rounded-md border border-transparent bg-primary px-2.5 py-0.5 text-xs font-semibold text-primary-foreground"><?php esc_html_e( 'Phổ biến', 'mtrl' ); ?></span>
						<?php endif; ?>
						<div class="px-6 pb-4">
							<div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary/10 text-primary transition-colors group-hover:bg-primary group-hover:text-primary-foreground">
								<?php mtrl_icon_e( (string) $service['icon'], 'h-6 w-6' ); ?>
							</div>
							<p class="text-xl font-semibold leading-none tracking-tight text-foreground"><?php echo esc_html( (string) $service['title'] ); ?></p>
							<p class="mt-2 text-base text-muted-foreground"><?php echo esc_html( (string) $service['description'] ); ?></p>
						</div>
						<div class="flex flex-1 flex-col px-6 pb-6">
							<ul class="mb-6 flex-1 space-y-2">
								<?php foreach ( $service['features'] as $feature ) : ?>
									<li class="flex items-center gap-2 text-sm text-muted-foreground">
										<span class="h-1.5 w-1.5 shrink-0 rounded-full bg-primary"></span>
										<?php echo esc_html( (string) $feature ); ?>
									</li>
								<?php endforeach; ?>
							</ul>
							<div class="mt-auto flex items-center justify-between border-t border-border/50 pt-4">
								<span class="text-lg font-semibold text-primary"><?php echo esc_html( (string) $service['price'] ); ?></span>
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
