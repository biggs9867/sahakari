<?php   
/**
 * @package biztt
 */
 ?>
 <?php
 if ( ! function_exists( 'biztt_setup' ) ) :
function biztt_setup() {   
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'biztt' ),
		'footer' => esc_html__( 'Footer Menu', 'biztt' ),
	) );

	 $defaults = array(            
            'default-text-color' => 'ffffff',
            'wp-head-callback'   => 'biztt_header_style',
        );
        add_theme_support('custom-header', $defaults);

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );	
} 
endif; // biztt_setup
add_action( 'after_setup_theme', 'biztt_setup' );

//logo header style
function biztt_header_style() {
    $biztt_header_text_color = get_header_textcolor();
    if (get_theme_support('custom-header', 'default-text-color') === $biztt_header_text_color) {
        return;
    }
    echo '<style id="biztt-custom-header-styles" type="text/css">';
    if ('blank' !== $biztt_header_text_color) {
        echo '.logotxt, .logotxt a
			 {
				color: #' . esc_attr($biztt_header_text_color) . '
			}';
    }
    echo '</style>';
}
?>