<?php
/**
 * The front page template file
 *
 * @package Legal Law Consulting
 * @subpackage legal_law_consulting
 */

get_header(); ?>

<main id="tp_content" role="main">
	<?php do_action( 'lawyer_hub_before_slider' ); ?>

	<?php get_template_part( 'template-parts/home/slider' ); ?>
	<?php do_action( 'lawyer_hub_after_slider' ); ?>

	<?php get_template_part( 'template-parts/home/about' ); ?>
	<?php do_action( 'lawyer_hub_after_about' ); ?>

	<?php get_template_part( 'template-parts/home/our-services' ); ?>
	<?php do_action( 'lawyer_hub_after_services' ); ?>

	<?php get_template_part( 'template-parts/home/home-content' ); ?>
	<?php do_action( 'lawyer_hub_after_home_content' ); ?>
</main>

<?php get_footer();