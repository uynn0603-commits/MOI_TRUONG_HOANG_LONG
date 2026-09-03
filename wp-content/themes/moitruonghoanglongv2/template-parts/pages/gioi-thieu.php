<?php
/**
 * Trang Giới thiệu (mirror app/gioi-thieu/page.tsx)
 *
 * @package MTRL
 */
?>
<main id="main">
	<section class="relative overflow-hidden bg-gradient-to-b from-muted/50 to-background py-16 lg:py-24">
		<div class="absolute inset-0 -z-10">
			<div class="absolute -right-40 -top-40 h-80 w-80 rounded-full bg-primary/5 blur-3xl"></div>
			<div class="absolute -bottom-40 -left-40 h-80 w-80 rounded-full bg-secondary/5 blur-3xl"></div>
		</div>
		<div class="mx-auto max-w-7xl px-4 lg:px-8">
			<div class="grid gap-12 lg:grid-cols-2 lg:items-center">
				<div>
					<p class="mb-2 text-sm font-semibold uppercase tracking-wider text-primary"><?php esc_html_e('Về Hoàng Long', 'mtrl'); ?></p>
					<h1 class="text-balance text-4xl font-bold tracking-tight text-foreground lg:text-5xl"><?php esc_html_e('Công ty Môi Trường Hoàng Long', 'mtrl'); ?></h1>
					<p class="mt-6 text-pretty text-lg leading-relaxed text-muted-foreground">
						<?php esc_html_e('Với hơn 15 năm kinh nghiệm, Hoàng Long tự hào đồng hành cùng hộ gia đình và doanh nghiệp tại TP.Hồ Chí Minh và các tỉnh lân cận trong lĩnh vực vệ sinh môi trường. Đội ngũ hơn 200 nhân sự cùng 100+ xe chuyên dụng luôn sẵn sàng phục vụ anh chị 24/7.', 'mtrl'); ?>
					</p>
				</div>
				<div class="relative">
					<div class="relative aspect-[4/3] overflow-hidden rounded-2xl border border-border/50 bg-muted shadow-xl">
						<img src="<?php echo esc_url(mtrl_img_uri('about/company.jpg')); ?>" alt="<?php echo esc_attr__('Văn phòng Công ty Môi Trường Hoàng Long', 'mtrl'); ?>" class="absolute inset-0 h-full w-full object-cover" width="600" height="450" loading="eager" fetchpriority="high">
					</div>
					<div class="absolute -bottom-4 -left-4 -z-10 h-full w-full rounded-2xl bg-primary/10"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="border-y border-border/50 bg-card py-12">
		<div class="mx-auto max-w-7xl px-4 lg:px-8">
			<div class="grid grid-cols-2 gap-8 lg:grid-cols-4">
				<div class="text-center">
					<?php mtrl_icon_e('calendar', 'mx-auto mb-2 h-8 w-8 text-primary'); ?>
					<p class="text-3xl font-bold text-foreground">15+</p>
					<p class="text-sm text-muted-foreground"><?php esc_html_e('Năm kinh nghiệm', 'mtrl'); ?></p>
				</div>
				<div class="text-center">
					<?php mtrl_icon_e('users', 'mx-auto mb-2 h-8 w-8 text-primary'); ?>
					<p class="text-3xl font-bold text-foreground">50,000+</p>
					<p class="text-sm text-muted-foreground"><?php esc_html_e('Khách hàng tin tưởng', 'mtrl'); ?></p>
				</div>
				<div class="text-center">
					<?php mtrl_icon_e('truck', 'mx-auto mb-2 h-8 w-8 text-primary'); ?>
					<p class="text-3xl font-bold text-foreground">100+</p>
					<p class="text-sm text-muted-foreground"><?php esc_html_e('Xe chuyên dụng', 'mtrl'); ?></p>
				</div>
				<div class="text-center">
					<?php mtrl_icon_e('award', 'mx-auto mb-2 h-8 w-8 text-primary'); ?>
					<p class="text-3xl font-bold text-foreground">99%</p>
					<p class="text-sm text-muted-foreground"><?php esc_html_e('Khách hàng hài lòng', 'mtrl'); ?></p>
				</div>
			</div>
		</div>
	</section>

	<section class="py-16 lg:py-24">
		<div class="mx-auto max-w-7xl px-4 lg:px-8">
			<div class="grid gap-8 lg:grid-cols-2">
				<div class="rounded-xl border border-primary/20 bg-primary/5 py-6 text-card-foreground shadow-sm">
					<div class="p-8">
						<div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-primary text-primary-foreground">
							<?php mtrl_icon_e('target', 'h-6 w-6'); ?>
						</div>
						<h3 class="text-2xl font-bold text-foreground"><?php esc_html_e('Sứ mệnh', 'mtrl'); ?></h3>
						<p class="mt-4 leading-relaxed text-muted-foreground">
							<?php esc_html_e('Mang đến giải pháp vệ sinh môi trường toàn diện, nhanh chóng và hiệu quả cho mọi gia đình, doanh nghiệp. Góp phần xây dựng môi trường sống xanh - sạch - đẹp cho cộng đồng.', 'mtrl'); ?>
						</p>
					</div>
				</div>
				<div class="rounded-xl border border-secondary/20 bg-secondary/5 py-6 text-card-foreground shadow-sm">
					<div class="p-8">
						<div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-secondary text-secondary-foreground">
							<?php mtrl_icon_e('eye', 'h-6 w-6'); ?>
						</div>
						<h3 class="text-2xl font-bold text-foreground"><?php esc_html_e('Tầm nhìn', 'mtrl'); ?></h3>
						<p class="mt-4 leading-relaxed text-muted-foreground">
							<?php esc_html_e('Trở thành đơn vị môi trường uy tín hàng đầu khu vực phía Nam. Mở rộng mạng lưới ra các tỉnh Đông Nam Bộ và hợp tác đối tác trên cả nước.', 'mtrl'); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-muted/30 py-16 lg:py-24">
		<div class="mx-auto max-w-7xl px-4 lg:px-8">
			<div class="grid gap-12 lg:grid-cols-2 lg:items-center">
				<div>
					<p class="mb-2 text-sm font-semibold uppercase tracking-wider text-primary"><?php esc_html_e('Đội ngũ Hoàng Long', 'mtrl'); ?></p>
					<h2 class="text-balance text-3xl font-bold tracking-tight text-foreground lg:text-4xl"><?php esc_html_e('200+ nhân viên chuyên nghiệp', 'mtrl'); ?></h2>
					<p class="mt-4 text-pretty text-lg leading-relaxed text-muted-foreground">
						<?php esc_html_e('Đội ngũ nhân viên của Hoàng Long được tuyển chọn kỹ lưỡng và đào tạo chuyên nghiệp. Mỗi kỹ thuật viên đều có chứng chỉ nghề và được cập nhật công nghệ mới thường xuyên.', 'mtrl'); ?>
					</p>
					<div class="mt-6 space-y-3">
						<?php
						$bullets = [
							__('Đào tạo bài bản, chuyên nghiệp', 'mtrl'),
							__('Trang phục đồng phục gọn gàng', 'mtrl'),
							__('Thái độ phục vụ tận tâm', 'mtrl'),
							__('Tác phong làm việc nhanh nhẹn', 'mtrl'),
						];
						foreach ($bullets as $item) :
							?>
							<div class="flex items-center gap-3">
								<?php mtrl_icon_e('check-circle', 'h-5 w-5 shrink-0 text-primary'); ?>
								<span class="text-foreground"><?php echo esc_html($item); ?></span>
							</div>
							<?php
						endforeach;
						?>
					</div>
				</div>
				<div class="relative">
					<div class="relative aspect-[4/3] overflow-hidden rounded-2xl border border-border/50 bg-muted shadow-xl">
						<img src="<?php echo esc_url(mtrl_img_uri('about/team.jpg')); ?>" alt="<?php echo esc_attr__('Đội ngũ nhân viên Hoàng Long', 'mtrl'); ?>" class="absolute inset-0 h-full w-full object-cover" width="600" height="450" loading="lazy">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="py-16 lg:py-24">
		<div class="mx-auto max-w-7xl px-4 lg:px-8">
			<div class="grid gap-12 lg:grid-cols-2 lg:items-center">
				<div class="order-2 lg:order-1">
					<div class="relative aspect-[4/3] overflow-hidden rounded-2xl border border-border/50 bg-muted shadow-xl">
						<img src="<?php echo esc_url(mtrl_img_uri('about/fleet.jpg')); ?>" alt="<?php echo esc_attr__('Đội xe chuyên dụng Hoàng Long', 'mtrl'); ?>" class="absolute inset-0 h-full w-full object-cover" width="600" height="450" loading="lazy">
					</div>
				</div>
				<div class="order-1 lg:order-2">
					<p class="mb-2 text-sm font-semibold uppercase tracking-wider text-primary"><?php esc_html_e('Trang thiết bị', 'mtrl'); ?></p>
					<h2 class="text-balance text-3xl font-bold tracking-tight text-foreground lg:text-4xl"><?php esc_html_e('100+ xe hút chuyên dụng', 'mtrl'); ?></h2>
					<p class="mt-4 text-pretty text-lg leading-relaxed text-muted-foreground">
						<?php esc_html_e('Đội xe Hoàng Long được đầu tư hiện đại với đa dạng công suất từ 2m³ đến 15m³, đáp ứng mọi nhu cầu từ hộ gia đình đến công trình lớn.', 'mtrl'); ?>
					</p>
					<div class="mt-6 grid grid-cols-2 gap-4">
						<?php
						$fleet = [
							[ 'label' => __('Xe 2-4m³', 'mtrl'), 'value' => '40 xe' ],
							[ 'label' => __('Xe 5-8m³', 'mtrl'), 'value' => '35 xe' ],
							[ 'label' => __('Xe 10-15m³', 'mtrl'), 'value' => '25 xe' ],
							[ 'label' => __('Xe thông cống', 'mtrl'), 'value' => '15 xe' ],
						];
						foreach ($fleet as $item) :
							?>
							<div class="rounded-lg border border-border/50 bg-card p-4 text-center">
								<p class="text-2xl font-bold text-primary"><?php echo esc_html($item['value']); ?></p>
								<p class="text-sm text-muted-foreground"><?php echo esc_html($item['label']); ?></p>
							</div>
							<?php
						endforeach;
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-muted/30 py-16 lg:py-24">
		<div class="mx-auto max-w-7xl px-4 lg:px-8">
			<?php
			set_query_var(
				'mtrl_section_args',
				[
					'subtitle' => __('Giá trị cốt lõi', 'mtrl'),
					'title'    => __('Giá trị Hoàng Long theo đuổi', 'mtrl'),
				]
			);
			get_template_part('template-parts/ui/section', 'header');
			?>
			<div class="grid gap-8 md:grid-cols-3">
				<div class="text-center">
					<div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-primary/10 text-primary">
						<?php mtrl_icon_e('shield', 'h-8 w-8'); ?>
					</div>
					<h3 class="text-xl font-semibold text-foreground"><?php esc_html_e('Chất lượng', 'mtrl'); ?></h3>
					<p class="mt-2 text-muted-foreground"><?php esc_html_e('Cam kết chất lượng dịch vụ tốt nhất với trang thiết bị hiện đại.', 'mtrl'); ?></p>
				</div>
				<div class="text-center">
					<div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-primary/10 text-primary">
						<?php mtrl_icon_e('check-circle', 'h-8 w-8'); ?>
					</div>
					<h3 class="text-xl font-semibold text-foreground"><?php esc_html_e('Uy tín', 'mtrl'); ?></h3>
					<p class="mt-2 text-muted-foreground"><?php esc_html_e('15 năm xây dựng uy tín với hàng chục nghìn khách hàng.', 'mtrl'); ?></p>
				</div>
				<div class="text-center">
					<div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-primary/10 text-primary">
						<?php mtrl_icon_e('users', 'h-8 w-8'); ?>
					</div>
					<h3 class="text-xl font-semibold text-foreground"><?php esc_html_e('Tận tâm', 'mtrl'); ?></h3>
					<p class="mt-2 text-muted-foreground"><?php esc_html_e('Đội ngũ nhân viên tận tâm, chu đáo trong từng dịch vụ.', 'mtrl'); ?></p>
				</div>
			</div>
		</div>
	</section>

	<section class="py-16 lg:py-24">
		<div class="mx-auto max-w-7xl px-4 lg:px-8">
			<?php
			set_query_var(
				'mtrl_section_args',
				[
					'subtitle' => __('Lịch sử phát triển', 'mtrl'),
					'title'    => __('Hành trình 15 năm phát triển', 'mtrl'),
				]
			);
			get_template_part('template-parts/ui/section', 'header');
			?>
			<div class="relative">
				<div class="absolute left-4 top-0 h-full w-0.5 bg-border md:left-1/2 md:-translate-x-1/2"></div>
				<div class="space-y-8">
					<?php
					$timeline = [
						[ 'year' => '2009', 'title' => __('Thành lập', 'mtrl'), 'description' => __('Khởi đầu với 2 xe hút và 5 nhân viên tại TP.Hồ Chí Minh.', 'mtrl'), 'image' => 'timeline/2009.jpg' ],
						[ 'year' => '2012', 'title' => __('Mở rộng', 'mtrl'), 'description' => __('Phát triển đội xe lên 20 chiếc, mở rộng khu vực phục vụ.', 'mtrl'), 'image' => 'timeline/2012.jpg' ],
						[ 'year' => '2016', 'title' => __('Hiện đại hóa', 'mtrl'), 'description' => __('Đầu tư công nghệ mới, xe hút công suất lớn 15m³.', 'mtrl'), 'image' => 'timeline/2016.jpg' ],
						[ 'year' => '2020', 'title' => __('Chuyên nghiệp hóa', 'mtrl'), 'description' => __('Đạt chứng nhận ISO, đào tạo đội ngũ chuyên nghiệp.', 'mtrl'), 'image' => 'timeline/2020.jpg' ],
						[ 'year' => '2024', 'title' => __('Dẫn đầu', 'mtrl'), 'description' => __('Top dịch vụ môi trường tại TP.Hồ Chí Minh với 100+ xe.', 'mtrl'), 'image' => 'timeline/2024.jpg' ],
					];
					foreach ($timeline as $index => $item) :
						$even = ( $index % 2 ) === 0;
						?>
						<div class="relative flex items-start gap-8 <?php echo $even ? 'md:flex-row' : 'md:flex-row-reverse'; ?>">
							<div class="hidden w-1/2 md:block"></div>
							<div class="absolute left-4 z-10 flex h-8 w-8 items-center justify-center rounded-full border-4 border-background bg-primary text-xs font-bold text-primary-foreground md:left-1/2 md:-translate-x-1/2">
								<?php echo esc_html((string) ( $index + 1 )); ?>
							</div>
							<div class="ml-16 w-full md:ml-0 md:w-1/2">
								<div class="overflow-hidden rounded-xl border border-border/50 bg-card text-card-foreground shadow-sm">
									<?php if ( ! empty( $item['image'] ) ) : ?>
										<div class="relative h-32 bg-muted">
											<img src="<?php echo esc_url(mtrl_img_uri((string) $item['image'])); ?>" alt="<?php echo esc_attr(sprintf(__('Hoàng Long năm %s', 'mtrl'), (string) $item['year'])); ?>" class="absolute inset-0 h-full w-full object-cover" width="400" height="128" loading="lazy">
										</div>
									<?php endif; ?>
									<div class="p-6">
										<span class="text-sm font-semibold text-primary"><?php echo esc_html((string) $item['year']); ?></span>
										<h4 class="mt-1 text-lg font-semibold text-foreground"><?php echo esc_html((string) $item['title']); ?></h4>
										<p class="mt-2 text-sm text-muted-foreground"><?php echo esc_html((string) $item['description']); ?></p>
									</div>
								</div>
							</div>
						</div>
						<?php
					endforeach;
					?>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-muted/30 py-16 lg:py-24">
		<div class="mx-auto max-w-7xl px-4 lg:px-8">
			<?php
			set_query_var(
				'mtrl_section_args',
				[
					'subtitle'    => __('Chứng nhận', 'mtrl'),
					'title'       => __('Giấy phép & Chứng nhận', 'mtrl'),
					'description' => __('Hoàng Long hoạt động hợp pháp với đầy đủ giấy tờ theo quy định.', 'mtrl'),
				]
			);
			get_template_part('template-parts/ui/section', 'header');
			?>
			<?php
			$certs = [
				[ 'name' => __('Giấy phép kinh doanh dịch vụ môi trường', 'mtrl'), 'image' => 'certifications/giay-phep-kinh-doanh.jpg' ],
				[ 'name' => __('Chứng nhận ISO 9001:2015', 'mtrl'), 'image' => 'certifications/iso-9001.jpg' ],
				[ 'name' => __('Giấy phép vận chuyển chất thải nguy hại', 'mtrl'), 'image' => 'certifications/giay-phep-van-chuyen.jpg' ],
				[ 'name' => __('Chứng nhận an toàn lao động', 'mtrl'), 'image' => 'certifications/an-toan-lao-dong.jpg' ],
			];
			?>
			<div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
				<?php foreach ($certs as $cert) : ?>
					<div class="overflow-hidden rounded-xl border border-border/50 bg-card text-card-foreground shadow-sm">
						<div class="relative h-48 bg-muted">
							<img src="<?php echo esc_url(mtrl_img_uri((string) $cert['image'])); ?>" alt="<?php echo esc_attr((string) $cert['name']); ?>" class="absolute inset-0 h-full w-full object-contain p-4" width="400" height="300" loading="lazy">
						</div>
						<div class="p-4">
							<div class="flex items-center gap-2">
								<?php mtrl_icon_e('check-circle', 'h-5 w-5 shrink-0 text-primary'); ?>
								<span class="text-sm font-medium text-foreground"><?php echo esc_html((string) $cert['name']); ?></span>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="bg-primary py-16 text-primary-foreground lg:py-24">
		<div class="mx-auto max-w-7xl px-4 text-center lg:px-8">
			<h2 class="text-balance text-3xl font-bold lg:text-4xl"><?php esc_html_e('Anh chị cần hỗ trợ môi trường?', 'mtrl'); ?></h2>
			<p class="mx-auto mt-4 max-w-2xl text-lg opacity-90"><?php esc_html_e('Liên hệ liền để được tư vấn và báo giá miễn phí ạ!', 'mtrl'); ?></p>
			<div class="mt-8 flex flex-col items-center justify-center gap-4 sm:flex-row">
				<a href="<?php echo esc_url(mtrl_phone_tel_href()); ?>" class="inline-flex h-11 items-center justify-center gap-2 rounded-md bg-secondary px-8 text-base font-medium text-secondary-foreground transition-colors hover:bg-secondary/80">
					<?php mtrl_icon_e('phone', 'h-5 w-5'); ?>
					<?php echo esc_html(mtrl_phone_display()); ?>
				</a>
				<a href="<?php echo esc_url(home_url('/lien-he/')); ?>" class="inline-flex h-11 items-center justify-center gap-2 rounded-md border border-primary-foreground/30 bg-transparent px-8 text-base font-medium text-primary-foreground transition-colors hover:bg-primary-foreground/10">
					<?php esc_html_e('Liên hệ ngay', 'mtrl'); ?>
					<?php mtrl_icon_e('arrow-right', 'h-4 w-4'); ?>
				</a>
			</div>
		</div>
	</section>
</main>
