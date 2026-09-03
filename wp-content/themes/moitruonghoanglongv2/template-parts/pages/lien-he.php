<?php
/**
 * Trang Liên hệ (mirror app/lien-he/page.tsx; form UX bằng JS trong main.js)
 *
 * @package MTRL
 */

$contact_info = [
	[
		'icon'    => 'phone',
		'title'   => __( 'Hotline 24/7', 'mtrl' ),
		'content' => mtrl_phone_display(),
		'href'    => mtrl_phone_tel_href(),
		'ext'     => false,
	],
	[
		'icon'    => 'mail',
		'title'   => __( 'Email', 'mtrl' ),
		'content' => 'info@moitruonghoanglong.vn',
		'href'    => 'mailto:info@moitruonghoanglong.vn',
		'ext'     => false,
	],
	[
		'icon'    => 'map-pin',
		'title'   => __( 'Địa chỉ', 'mtrl' ),
		'content' => __( 'Số 45, đường Nguyễn Văn Trỗi, phường Phú Nhuận, TP.Hồ Chí Minh', 'mtrl' ),
		'href'    => 'https://www.google.com/maps/search/?api=1&query=S%E1%BB%91+45+Nguy%E1%BB%85n+V%C4%83n+Tr%E1%BB%97i+Ph%C3%BA+Nhu%E1%BA%ADn+TP+H%E1%BB%93+Ch%C3%AD+Minh',
		'ext'     => true,
	],
	[
		'icon'    => 'clock',
		'title'   => __( 'Giờ làm việc', 'mtrl' ),
		'content' => __( '24/7 - Phục vụ cả ngày lễ', 'mtrl' ),
		'href'    => '',
		'ext'     => false,
	],
];

$service_options = [
	__( 'Hút hầm cầu', 'mtrl' ),
	__( 'Thông cống nghẹt', 'mtrl' ),
	__( 'Nạo vét hố ga', 'mtrl' ),
	__( 'Vệ sinh môi trường', 'mtrl' ),
	__( 'Cho thuê xe hút', 'mtrl' ),
	__( 'Xử lý chất thải', 'mtrl' ),
	__( 'Khác', 'mtrl' ),
];

$page_id = (int) get_queried_object_id();
if ($page_id <= 0 && is_singular()) {
    $page_id = (int) get_the_ID();
}
$form_action = $page_id ? get_permalink($page_id) : home_url('/lien-he/');
$contact_feedback = isset($_GET['contact']) ? sanitize_key((string) wp_unslash($_GET['contact'])) : '';
$show_success       = ($contact_feedback === 'sent');
?>
<main id="main">
	<section class="relative overflow-hidden bg-gradient-to-b from-muted/50 to-background py-16 lg:py-24">
		<div class="absolute inset-0 -z-10">
			<div class="absolute -right-40 -top-40 h-80 w-80 rounded-full bg-primary/5 blur-3xl"></div>
		</div>
		<div class="mx-auto max-w-7xl px-4 text-center lg:px-8">
			<p class="mb-2 text-sm font-semibold uppercase tracking-wider text-primary"><?php esc_html_e( 'Liên hệ', 'mtrl' ); ?></p>
			<h1 class="text-balance text-4xl font-bold tracking-tight text-foreground lg:text-5xl"><?php esc_html_e( 'Liên hệ Hoàng Long', 'mtrl' ); ?></h1>
			<p class="mx-auto mt-6 max-w-2xl text-pretty text-lg text-muted-foreground">
				<?php esc_html_e( 'Anh chị để lại thông tin, bên em sẽ liên hệ lại sớm nhất. Hoặc gọi thẳng hotline để được hỗ trợ liền.', 'mtrl' ); ?>
			</p>
		</div>
	</section>

	<section class="py-16">
		<div class="mx-auto max-w-7xl px-4 lg:px-8">
			<?php if ( $show_success ) : ?>
				<div
					class="mb-8 sm:mb-10 rounded-2xl border-primary/25 bg-primary/5 p-5 shadow-sm ring-1 ring-primary/10 sm:p-6"
					role="status"
					aria-live="polite"
				>
					<div class="flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between sm:gap-6 p-4">
						<div class="flex min-w-0 flex-1 items-start gap-4">
							<div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-primary/15 text-primary">
								<?php mtrl_icon_e( 'check-circle', 'h-7 w-7' ); ?>
							</div>
							<div class="min-w-0 pt-0.5 text-left">
								<p class="text-base font-semibold leading-snug text-foreground sm:text-lg">
									<?php esc_html_e( 'Gửi yêu cầu thành công!', 'mtrl' ); ?>
								</p>
								<p class="mt-1.5 max-w-2xl text-pretty text-sm leading-relaxed text-muted-foreground sm:text-base">
									<?php esc_html_e( 'Bên em đã nhận thông tin và sẽ liên hệ lại cho anh chị trong khoảng 15 phút. Anh chị cũng có thể gọi hotline nếu cần gấp.', 'mtrl' ); ?>
								</p>
							</div>
						</div>
						<a
							href="<?php echo esc_url( $form_action ); ?>"
							class="inline-flex h-11 shrink-0 items-center justify-center rounded-lg bg-primary px-5 text-sm font-medium text-primary-foreground shadow-sm transition-colors hover:bg-primary/90 sm:h-10 sm:px-6 p-4"
						>
							<?php esc_html_e( 'Gửi yêu cầu khác', 'mtrl' ); ?>
						</a>
					</div>
				</div>
			<?php elseif ( in_array( $contact_feedback, [ 'error', 'slow' ], true ) ) : ?>
				<div
					class="mb-8 sm:mb-10 rounded-2xl  border-destructive/25 bg-destructive/5 p-5 shadow-sm ring-1 ring-destructive/10 sm:p-6"
					role="alert"
				>
					<div class="flex items-center gap-4">
						<div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-destructive/15 text-destructive">
							<?php mtrl_icon_e( 'alert', 'h-7 w-7' ); ?>
						</div>
						<div class="min-w-0 py-4 text-left">
							<p class="text-base font-semibold leading-snug text-foreground sm:text-lg">
								<?php esc_html_e( 'Chưa gửi được yêu cầu', 'mtrl' ); ?>
							</p>
							<p class="mt-1.5 max-w-2xl text-pretty text-sm leading-relaxed text-muted-foreground sm:text-base">
								<?php
								if ( $contact_feedback === 'slow' ) {
									esc_html_e( 'Anh chị gửi quá nhanh, vui lòng đợi thêm một chút rồi thử lại.', 'mtrl' );
								} else {
									echo esc_html(
										sprintf(
											/* translators: %s: hotline display */
											__( 'Vui lòng kiểm tra lại thông tin hoặc gọi hotline %s để bên em hỗ trợ trực tiếp.', 'mtrl' ),
											mtrl_phone_display()
										)
									);
								}
								?>
							</p>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<div class="grid gap-12 lg:grid-cols-2">
				<div>
					<div class="rounded-xl border border-border/50 bg-card py-6 text-card-foreground shadow-sm">
						<div class="flex flex-col space-y-1.5 border-b border-border/50 p-6 pb-4">
							<h2 class="text-2xl font-semibold leading-none tracking-tight"><?php esc_html_e( 'Gửi yêu cầu tư vấn', 'mtrl' ); ?></h2>
						</div>
						<div class="p-6 pt-0 mt-4">
							<?php if ( $show_success ) : ?>
								<p class="py-6 text-center text-sm leading-relaxed text-muted-foreground">
									<?php esc_html_e( 'Anh chị xem thông báo phía trên. Muốn gửi thêm yêu cầu, bấm nút Gửi yêu cầu khác trên thông báo.', 'mtrl' ); ?>
								</p>
							<?php else : ?>
							<form id="mtrl-contact-form" class="space-y-6" method="post" action="<?php echo esc_url( $form_action ); ?>" novalidate>
								<?php wp_nonce_field( 'mtrl_contact_' . $page_id, 'mtrl_contact_nonce' ); ?>
								<input type="hidden" name="mtrl_contact_submit" value="1">
								<input type="hidden" name="mtrl_contact_page_id" value="<?php echo esc_attr( (string) $page_id ); ?>">
								<div class="grid gap-4 sm:grid-cols-2">
									<div class="space-y-2">
										<label for="mtrl-name" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"><?php esc_html_e( 'Họ và tên *', 'mtrl' ); ?></label>
										<input id="mtrl-name" name="name" required class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" placeholder="<?php echo esc_attr__( 'Nguyễn Văn A', 'mtrl' ); ?>">
									</div>
									<div class="space-y-2">
										<label for="mtrl-phone" class="text-sm font-medium leading-none"><?php esc_html_e( 'Số điện thoại *', 'mtrl' ); ?></label>
										<input id="mtrl-phone" name="phone" type="tel" required class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 md:text-sm" placeholder="<?php echo esc_attr(mtrl_phone_display()); ?>">
									</div>
								</div>
								<div class="space-y-2">
									<label for="mtrl-email" class="text-sm font-medium leading-none"><?php esc_html_e( 'Email', 'mtrl' ); ?></label>
									<input id="mtrl-email" name="email" type="email" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 md:text-sm" placeholder="email@example.com">
								</div>
								<div class="space-y-2">
									<label for="mtrl-service" class="text-sm font-medium leading-none"><?php esc_html_e( 'Dịch vụ cần tư vấn *', 'mtrl' ); ?></label>
									<select id="mtrl-service" name="service" required class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 md:text-sm">
										<option value="" selected disabled><?php esc_html_e( 'Chọn dịch vụ', 'mtrl' ); ?></option>
										<?php foreach ( $service_options as $opt ) : ?>
											<option value="<?php echo esc_attr( $opt ); ?>"><?php echo esc_html( $opt ); ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="space-y-2">
									<label for="mtrl-address" class="text-sm font-medium leading-none"><?php esc_html_e( 'Địa chỉ', 'mtrl' ); ?></label>
									<input id="mtrl-address" name="address" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 md:text-sm" placeholder="<?php echo esc_attr__( 'Số nhà, đường, quận/huyện', 'mtrl' ); ?>">
								</div>
								<div class="space-y-2">
									<label for="mtrl-message" class="text-sm font-medium leading-none"><?php esc_html_e( 'Mô tả yêu cầu', 'mtrl' ); ?></label>
									<textarea id="mtrl-message" name="message" rows="4" class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 md:text-sm" placeholder="<?php echo esc_attr__( 'Mô tả giúp bên em tình trạng anh chị đang gặp...', 'mtrl' ); ?>"></textarea>
								</div>
								<p class="mtrl-honeypot pointer-events-none absolute -left-[9999px] top-0 h-px w-px overflow-hidden opacity-0" aria-hidden="true">
									<label for="mtrl-company"><?php esc_html_e( 'Công ty', 'mtrl' ); ?></label>
									<input type="text" name="mtrl_company" id="mtrl-company" tabindex="-1" autocomplete="off" value="">
								</p>
								<button type="submit" class="inline-flex h-11 w-full items-center justify-center rounded-md bg-primary px-8 text-base font-medium text-primary-foreground transition-colors hover:bg-primary/90">
									<?php esc_html_e( 'Gửi yêu cầu', 'mtrl' ); ?>
								</button>
								<p class="text-center text-sm text-muted-foreground">
									<?php esc_html_e( 'Hoặc gọi ngay', 'mtrl' ); ?>
									<a href="<?php echo esc_url(mtrl_phone_tel_href()); ?>" class="font-semibold text-primary hover:underline"><?php echo esc_html(mtrl_phone_display()); ?></a>
									<?php esc_html_e( 'để được hỗ trợ liền', 'mtrl' ); ?>
								</p>
							</form>
							<?php endif; ?>
						</div>
					</div>
				</div>

				<div class="space-y-6">
					<div class="grid gap-4 sm:grid-cols-2">
						<?php foreach ( $contact_info as $item ) : ?>
							<div class="rounded-xl border border-border/50 bg-card text-card-foreground shadow-sm">
								<div class="flex items-start gap-4 p-6">
									<div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-primary/10 text-primary">
										<?php mtrl_icon_e( (string) $item['icon'], 'h-6 w-6' ); ?>
									</div>
									<div>
										<h3 class="font-semibold text-foreground"><?php echo esc_html( (string) $item['title'] ); ?></h3>
										<?php if ( $item['href'] ) : ?>
											<a href="<?php echo esc_url( (string) $item['href'] ); ?>" class="text-sm text-muted-foreground hover:text-primary" <?php echo ! empty( $item['ext'] ) ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>>
												<?php echo esc_html( (string) $item['content'] ); ?>
											</a>
										<?php else : ?>
											<p class="text-sm text-muted-foreground"><?php echo esc_html( (string) $item['content'] ); ?></p>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>

					<div class="rounded-xl border border-border/50 bg-card text-card-foreground shadow-sm">
						<div class="flex flex-col space-y-1.5 border-b border-border/50 p-6 pb-4">
							<h2 class="text-lg font-semibold leading-none tracking-tight"><?php esc_html_e( 'Kết nối với Hoàng Long', 'mtrl' ); ?></h2>
						</div>
						<div class="flex gap-4 p-6 pt-0  mt-4">
							<a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary/10 text-primary transition-colors hover:bg-primary hover:text-primary-foreground" aria-label="Facebook">
								<?php mtrl_icon_e( 'facebook', 'h-6 w-6' ); ?>
							</a>
							<a href="<?php echo esc_url(mtrl_phone_zalo_url()); ?>" target="_blank" rel="noopener noreferrer" class="flex h-12 w-12 items-center justify-center rounded-lg bg-secondary/10 text-secondary transition-colors hover:bg-secondary hover:text-secondary-foreground" aria-label="Zalo">
								<span class="text-sm font-bold">Zalo</span>
							</a>
						</div>
					</div>

					<div class="overflow-hidden rounded-xl border border-border/50 bg-card text-card-foreground shadow-sm">
						<div class="aspect-video bg-muted">
							<iframe class="h-full w-full" src="https://maps.google.com/maps?q=10.7992,106.6708&amp;z=13&amp;hl=vi&amp;output=embed" width="100%" height="100%" style="border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="<?php echo esc_attr__( 'Vị trí Môi Trường Hoàng Long tại TP.Hồ Chí Minh', 'mtrl' ); ?>"></iframe>
						</div>
					</div>

					<div class="rounded-xl border border-border/50 bg-card text-card-foreground shadow-sm">
						<div class="flex flex-col space-y-1.5 border-b border-border/50 p-6 pb-4">
							<h2 class="text-lg font-semibold leading-none tracking-tight"><?php esc_html_e( 'Khu vực phục vụ', 'mtrl' ); ?></h2>
						</div>
						<div class="p-6 pt-0 mt-4">
							<p class="text-sm text-muted-foreground">
								<?php esc_html_e( 'Hoàng Long phục vụ toàn bộ các quận nội thành TP.Hồ Chí Minh và vùng ven: Quận 1, 3, 4, 5, 6, 7, 8, 10, 11, 12, Tân Bình, Tân Phú, Phú Nhuận, Bình Thạnh, Gò Vấp, Bình Tân, TP. Thủ Đức; các huyện Hóc Môn, Củ Chi, Bình Chánh, Nhà Bè, Cần Giờ cùng Bình Dương, Long An, Đồng Nai, Bà Rịa - Vũng Tàu…', 'mtrl' ); ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
