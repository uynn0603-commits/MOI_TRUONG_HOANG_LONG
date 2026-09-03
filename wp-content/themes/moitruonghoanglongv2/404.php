<?php
/**
 * 404 template
 *
 * @package MTRL
 */

get_header();
?>
<main id="main" class="py-10 md:py-14 lg:py-16">
	<div class="mx-auto max-w-2xl px-4 text-center lg:px-8">
		<p class="text-sm font-semibold uppercase tracking-wider text-primary"><?php esc_html_e('Lỗi 404', 'mtrl'); ?></p>
		<h1 class="mt-2 text-4xl font-bold tracking-tight text-foreground"><?php esc_html_e('Trang không tồn tại', 'mtrl'); ?></h1>
		<p class="mt-4 text-muted-foreground"><?php esc_html_e('Đường dẫn anh chị truy cập không đúng hoặc đã được gỡ bỏ.', 'mtrl'); ?></p>
		<div class="mt-8 flex flex-wrap justify-center gap-4">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex h-10 items-center justify-center rounded-md bg-primary px-6 text-sm font-medium text-primary-foreground hover:bg-primary/90"><?php esc_html_e('Về trang chủ', 'mtrl'); ?></a>
			<a href="<?php echo esc_url(home_url('/lien-he/')); ?>" class="inline-flex h-10 items-center justify-center rounded-md border border-input bg-background px-6 text-sm font-medium shadow-xs hover:bg-accent hover:text-accent-foreground"><?php esc_html_e('Liên hệ', 'mtrl'); ?></a>
		</div>
	</div>
</main>
<?php
get_footer();
