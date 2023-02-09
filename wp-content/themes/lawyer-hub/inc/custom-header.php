<?php
/**
 * Custom header implementation
 *
 * @link https://codex.wordpress.org/Custom_Headers
 *
 * @package Lawyer Hub
 * @subpackage lawyer_hub
 */

function lawyer_hub_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'lawyer_hub_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'flex-height'			 => true,
		'flex-width'			 => true,
		'wp-head-callback'       => 'lawyer_hub_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'lawyer_hub_custom_header_setup' );

if ( ! function_exists( 'lawyer_hub_header_style' ) ) :
add_action( 'wp_enqueue_scripts', 'lawyer_hub_header_style' );
function lawyer_hub_header_style() {
	if ( get_header_image() ) :
	$custom_css = "
        .header-box{
			background-image:url('".esc_url(get_header_image())."') !important;
			background-position: center top !important;
		}";
	   	wp_add_inline_style( 'lawyer-hub-style', $custom_css );
	endif;
}
endif;
