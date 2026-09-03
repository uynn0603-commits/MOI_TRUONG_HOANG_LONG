<?php
/**
 * Theme header
 *
 * @package MTRL
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="bg-background">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class('font-sans antialiased'); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('Skip to content', 'mtrl'); ?></a>

<header class="sticky top-0 z-50 w-full border-b border-border/40 bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
	<nav class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 lg:px-8" aria-label="<?php esc_attr_e('Primary', 'mtrl'); ?>">
		<a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3">
			<?php
			if (has_custom_logo()) {
				the_custom_logo();
			} else {
				?>
				<img src="<?php echo esc_url(mtrl_img_uri('logo.png')); ?>" width="48" height="48" class="h-12 w-12 custom-logo-link" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
				<?php
			}
			?>
			<div class="hidden sm:block">
				<p class="text-lg font-bold text-foreground"><?php esc_html_e('Hoàng Long', 'mtrl'); ?></p>
				<p class="text-xs text-muted-foreground"><?php esc_html_e('Môi Trường', 'mtrl'); ?></p>
			</div>
		</a>

		<div class="hidden lg:flex lg:items-center lg:gap-8">
			<?php
			wp_nav_menu([
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'flex items-center gap-8 list-none m-0 p-0',
				'menu_id'        => 'mtrl-primary-desktop',
				'fallback_cb'    => 'mtrl_fallback_menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			]);
			?>
		</div>

		<div class="hidden lg:flex lg:items-center lg:gap-4">
			<a href="<?php echo esc_url(mtrl_phone_tel_href()); ?>" class="flex items-center gap-2 text-sm font-semibold text-primary">
				<?php mtrl_icon_e('phone', 'h-4 w-4'); ?>
				<?php echo esc_html(mtrl_phone_display()); ?>
			</a>
			<a href="<?php echo esc_url(home_url('/lien-he/')); ?>" class="inline-flex h-10 items-center justify-center gap-2 whitespace-nowrap rounded-md bg-primary px-4 text-sm font-medium text-primary-foreground transition-colors hover:bg-primary/90">
				<?php esc_html_e('Liên hệ ngay', 'mtrl'); ?>
			</a>
		</div>

		<button type="button" class="mtrl-menu-btn inline-flex h-9 w-9 items-center justify-center rounded-md lg:hidden hover:bg-accent hover:text-accent-foreground" aria-expanded="false" aria-controls="mtrl-mobile-panel" aria-label="<?php esc_attr_e('Mở menu', 'mtrl'); ?>">
			<?php mtrl_icon_e('menu', 'h-6 w-6'); ?>
		</button>
	</nav>
</header>

<div id="mtrl-mobile-overlay" class="fixed inset-0 z-[60] bg-black/40 opacity-0 pointer-events-none transition-opacity lg:hidden" hidden></div>
<div id="mtrl-mobile-panel" class="fixed inset-y-0 right-0 z-[70] flex w-full max-w-sm flex-col border-l border-border bg-background shadow-xl transition-transform duration-300 ease-out lg:hidden translate-x-full" hidden>
		<div class="flex min-h-0 flex-1 flex-col overflow-y-auto p-6">
			<div class="flex shrink-0 items-center justify-between gap-3 border-b border-border/50 pb-4">
				<a href="<?php echo esc_url(home_url('/')); ?>" class="flex min-w-0 items-center gap-3">
					<img src="<?php echo esc_url(mtrl_img_uri('logo.png')); ?>" width="40" height="40" class="h-10 w-10 shrink-0" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
					<span class="truncate text-lg font-bold"><?php esc_html_e('Hoàng Long', 'mtrl'); ?></span>
				</a>
				<button type="button" class="mtrl-menu-close shrink-0 rounded-md p-2 hover:bg-muted" aria-label="<?php esc_attr_e('Đóng menu', 'mtrl'); ?>">✕</button>
			</div>
			<nav class="shrink-0 overflow-y-auto" aria-label="<?php esc_attr_e('Menu di động', 'mtrl'); ?>">
			<?php
			wp_nav_menu([
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'mtrl-mobile-menu-list flex w-full flex-col divide-y divide-border/50 border-b border-border/50 list-none p-0',
				'menu_id'        => 'mtrl-primary-mobile',
				'fallback_cb'    => 'mtrl_fallback_menu_mobile',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'link_before'    => '',
				'link_after'     => '',
			]);
			?>
			</nav>
			<div class="mt-auto flex shrink-0 flex-col gap-3 border-t border-border/50 pt-4">
				<a href="<?php echo esc_url(mtrl_phone_tel_href()); ?>" class="flex items-center justify-center gap-2 rounded-lg bg-primary/10 px-4 py-3 text-sm font-semibold text-primary">
					<?php mtrl_icon_e('phone', 'h-4 w-4'); ?>
					<?php echo esc_html(mtrl_phone_display()); ?>
				</a>
				<a href="<?php echo esc_url(home_url('/lien-he/')); ?>" class="inline-flex h-10 w-full items-center justify-center rounded-md bg-primary px-4 text-sm font-medium text-primary-foreground hover:bg-primary/90">
					<?php esc_html_e('Liên hệ ngay', 'mtrl'); ?>
				</a>
			</div>
		</div>
</div>
