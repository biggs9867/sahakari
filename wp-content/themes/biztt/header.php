<?php
/**
 * @package biztt
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<a class = "skip-link screen-reader-text" href = "#bizttcontentdiv">
            <?php esc_html_e('Skip to content', 'biztt');
            ?></a>
	<?php
        if (function_exists('wp_body_open')) {
            wp_body_open();
        } else {
            do_action('wp_body_open');
        }
        ?>
<?php 
get_template_part('skin/template/header/template', 'header_top');
get_template_part('skin/template/header/template', 'slider');
?>
<?php if ( is_front_page() && !is_home() ) {?>
<section id="hompagecontent">
<div class="container">
<?php 
get_template_part('skin/template/home/template', 'boxes');
?>
</div>
</section>
<?php }?>
