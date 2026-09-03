<?php
/**
 * Service detail layout (slug = post_name trang con dưới dich-vu)
 *
 * @package MTRL
 */

$slug = null;
if (is_page()) {
    $slug = (string) get_post_field('post_name', get_queried_object_id());
}
if ($slug === '') {
    $slug = null;
}

$service = $slug ? mtrl_get_service($slug) : null;
if (! $service) {
    echo '<p class="p-12 text-center text-muted-foreground">' . esc_html__('Không tìm thấy dịch vụ.', 'mtrl') . '</p>';
    return;
}

$titles = mtrl_service_titles();
$icon    = isset($service['icon']) ? (string) $service['icon'] : 'droplets';
?>
<main id="main">
	<section class="relative overflow-hidden bg-gradient-to-b from-muted/50 to-background py-16 lg:py-24">
		<div class="absolute inset-0 -z-10">
			<div class="absolute -right-40 -top-40 h-80 w-80 rounded-full bg-primary/5 blur-3xl"></div>
		</div>
		<div class="mx-auto max-w-7xl px-4 lg:px-8">
			<div class="flex flex-col items-start gap-4">
				<a href="<?php echo esc_url(home_url('/dich-vu/')); ?>" class="flex items-center gap-1 text-sm text-muted-foreground hover:text-primary">
					<?php mtrl_icon_e('arrow-right', 'h-4 w-4 rotate-180'); ?>
					<?php esc_html_e('Tất cả dịch vụ', 'mtrl'); ?>
				</a>
				<div class="flex items-center gap-4">
					<div class="flex h-16 w-16 items-center justify-center rounded-xl bg-primary/10 text-primary">
						<?php mtrl_icon_e($icon, 'h-8 w-8'); ?>
					</div>
					<div>
						<h1 class="text-3xl font-bold text-foreground lg:text-4xl"><?php echo esc_html((string) $service['title']); ?></h1>
						<p class="mt-1 text-lg text-muted-foreground"><?php echo esc_html((string) $service['description']); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="mx-auto max-w-7xl px-4 py-12 lg:px-8 lg:py-16">
		<div class="grid gap-12 lg:grid-cols-3">
			<div class="lg:col-span-2">
				<section class="mb-12">
					<h2 class="mb-4 text-2xl font-bold text-foreground"><?php esc_html_e('Giới thiệu dịch vụ', 'mtrl'); ?></h2>
					<p class="leading-relaxed text-muted-foreground"><?php echo esc_html((string) $service['longDescription']); ?></p>
				</section>

				<section class="mb-12">
					<h2 class="mb-6 text-2xl font-bold text-foreground"><?php esc_html_e('Lợi ích khi sử dụng dịch vụ', 'mtrl'); ?></h2>
					<div class="grid gap-4 sm:grid-cols-2">
						<?php foreach ($service['benefits'] as $benefit) : ?>
							<div class="flex items-start gap-3">
								<?php mtrl_icon_e('check-circle', 'mt-0.5 h-5 w-5 shrink-0 text-primary'); ?>
								<span class="text-foreground"><?php echo esc_html((string) $benefit); ?></span>
							</div>
						<?php endforeach; ?>
					</div>
				</section>

				<section class="mb-12">
					<h2 class="mb-6 text-2xl font-bold text-foreground"><?php esc_html_e('Quy trình thực hiện', 'mtrl'); ?></h2>
					<div class="space-y-4">
						<?php
						$idx = 0;
						foreach ($service['process'] as $step) :
							$idx++;
							?>
							<div class="flex gap-4">
								<div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-primary-foreground"><?php echo esc_html((string) $idx); ?></div>
								<div>
									<h3 class="font-semibold text-foreground"><?php echo esc_html((string) $step['title']); ?></h3>
									<p class="text-sm text-muted-foreground"><?php echo esc_html((string) $step['description']); ?></p>
								</div>
							</div>
							<?php
						endforeach;
						?>
					</div>
				</section>

				<section class="mb-12">
					<h2 class="mb-6 text-2xl font-bold text-foreground"><?php esc_html_e('Bảng giá tham khảo', 'mtrl'); ?></h2>
					<div class="overflow-hidden rounded-lg border border-border">
						<table class="w-full">
							<thead class="bg-muted/50">
								<tr>
									<th class="px-4 py-3 text-left text-sm font-semibold text-foreground"><?php esc_html_e('Dịch vụ', 'mtrl'); ?></th>
									<th class="px-4 py-3 text-right text-sm font-semibold text-foreground"><?php esc_html_e('Giá', 'mtrl'); ?></th>
								</tr>
							</thead>
							<tbody class="divide-y divide-border">
								<?php foreach ($service['pricing'] as $row) : ?>
									<tr>
										<td class="px-4 py-3">
											<span class="text-foreground"><?php echo esc_html((string) $row['name']); ?></span>
											<?php if (! empty($row['note'])) : ?>
												<span class="block text-xs text-muted-foreground"><?php echo esc_html((string) $row['note']); ?></span>
											<?php endif; ?>
										</td>
										<td class="px-4 py-3 text-right font-semibold text-primary"><?php echo esc_html((string) $row['price']); ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<p class="mt-4 text-sm text-muted-foreground">* <?php esc_html_e('Giá trên mang tính tham khảo. Giá thực tế phụ thuộc vào khảo sát thực tế.', 'mtrl'); ?></p>
				</section>

				<section>
					<h2 class="mb-6 text-2xl font-bold text-foreground"><?php esc_html_e('Câu hỏi thường gặp', 'mtrl'); ?></h2>
					<div class="w-full">
						<?php foreach ($service['faqs'] as $faq) : ?>
							<details class="group border-b border-border/50 last:border-b-0">
								<summary class="flex w-full cursor-pointer list-none items-start justify-between gap-4 rounded-md py-4 text-left text-sm font-medium outline-none hover:underline [&::-webkit-details-marker]:hidden">
									<span><?php echo esc_html((string) $faq['question']); ?></span>
									<?php mtrl_icon_e('chevron-down', 'text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200 group-open:rotate-180'); ?>
								</summary>
								<div class="pb-4 text-sm text-muted-foreground"><?php echo esc_html((string) $faq['answer']); ?></div>
							</details>
						<?php endforeach; ?>
					</div>
				</section>
			</div>

			<div class="lg:col-span-1">
				<div class="sticky top-24 space-y-6">
					<div class="rounded-xl border border-primary/20 bg-primary/5 py-6 text-card-foreground shadow-sm">
						<div class="px-6">
							<div class="text-xl font-semibold leading-none"><?php esc_html_e('Liên hệ ngay', 'mtrl'); ?></div>
						</div>
						<div class="space-y-4 px-6 pt-4">
							<p class="text-sm text-muted-foreground"><?php esc_html_e('Gọi điện ngay để được tư vấn miễn phí và báo giá chi tiết.', 'mtrl'); ?></p>
							<a href="<?php echo esc_url(mtrl_phone_tel_href()); ?>" class="inline-flex h-10 w-full items-center justify-center gap-2 rounded-md bg-primary px-6 text-sm font-medium text-primary-foreground hover:bg-primary/90">
								<?php mtrl_icon_e('phone', 'h-5 w-5'); ?>
								<?php echo esc_html(mtrl_phone_display()); ?>
							</a>
							<div class="flex items-center gap-2 text-sm text-muted-foreground">
								<?php mtrl_icon_e('clock', 'h-4 w-4 text-primary'); ?>
								<span><?php esc_html_e('Phục vụ 24/7', 'mtrl'); ?></span>
							</div>
							<div class="flex items-center gap-2 text-sm text-muted-foreground">
								<?php mtrl_icon_e('shield', 'h-4 w-4 text-primary'); ?>
								<span><?php esc_html_e('Bảo hành dịch vụ', 'mtrl'); ?></span>
							</div>
						</div>
					</div>

					<div class="rounded-xl border border-border bg-card py-6 text-card-foreground shadow-sm">
						<div class="px-6">
							<div class="text-lg font-semibold leading-none"><?php esc_html_e('Dịch vụ liên quan', 'mtrl'); ?></div>
						</div>
						<div class="space-y-3 px-6 pt-4">
							<?php foreach ($service['relatedServices'] as $rel) : ?>
								<?php
								$rel = (string) $rel;
								if (! isset($titles[$rel])) {
									continue;
								}
								?>
								<a href="<?php echo esc_url(mtrl_service_url($rel)); ?>" class="flex items-center gap-3 rounded-lg border border-border/50 p-3 transition-colors hover:border-primary/30 hover:bg-muted/50">
									<div class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary/10 text-primary">
										<?php
										$rd = mtrl_get_service($rel);
										$ricon = $rd['icon'] ?? 'droplets';
										mtrl_icon_e((string) $ricon, 'h-5 w-5');
										?>
									</div>
									<span class="font-medium text-foreground"><?php echo esc_html($titles[$rel]); ?></span>
								</a>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
