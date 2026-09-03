<?php
/**
 * Front page (static home mirror)
 *
 * @package MTRL
 */

get_header();
?>
<main id="main">
	<?php
	get_template_part('template-parts/home/hero');
	get_template_part('template-parts/home/emergency');
	get_template_part('template-parts/home/services');
	get_template_part('template-parts/home/why-choose');
	get_template_part('template-parts/home/process');
	get_template_part('template-parts/home/testimonials');
	get_template_part('template-parts/home/coverage');
	get_template_part('template-parts/home/faq');
	get_template_part('template-parts/home/cta');
	?>
</main>
<?php
get_footer();
