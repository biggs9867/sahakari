<?php

require get_stylesheet_directory() . '/customizer/customizer.php';

add_action( 'after_setup_theme', 'legal_law_consulting_after_setup_theme' );
function legal_law_consulting_after_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "responsive-embeds" );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'legal-law-consulting-featured-image', 2000, 1200, true );
    add_image_size( 'legal-law-consulting-thumbnail-avatar', 100, 100, true );

    // Set the default content width.
    $GLOBALS['content_width'] = 525;

    // Add theme support for Custom Logo.
    add_theme_support( 'custom-logo', array(
        'width'       => 250,
        'height'      => 250,
        'flex-width'  => true,
    ) );

    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff'
    ) );

    add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

    add_editor_style( array( 'assets/css/editor-style.css') );
}

/**
 * Register widget area.
 */
function legal_law_consulting_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'legal-law-consulting' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'legal-law-consulting' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Page Sidebar', 'legal-law-consulting' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'legal-law-consulting' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Sidebar 3', 'legal-law-consulting' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'legal-law-consulting' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 1', 'legal-law-consulting' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in your footer.', 'legal-law-consulting' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'legal-law-consulting' ),
        'id'            => 'footer-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'legal-law-consulting' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'legal-law-consulting' ),
        'id'            => 'footer-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'legal-law-consulting' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 4', 'legal-law-consulting' ),
        'id'            => 'footer-4',
        'description'   => __( 'Add widgets here to appear in your footer.', 'legal-law-consulting' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'legal_law_consulting_widgets_init' );

// enqueue styles for child theme
function legal_law_consulting_enqueue_styles() {

    wp_enqueue_style( 'legal-law-consulting-fonts', lawyer_hub_fonts_url(), array(), null );

    // Bootstrap
    wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

    // Theme block stylesheet.
    wp_enqueue_style( 'legal-law-consulting-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'legal-law-consulting-child-style' ), '1.0' );

    // enqueue parent styles
    wp_enqueue_style('lawyer-hub-style', get_template_directory_uri() .'/style.css');

    // enqueue child styles
    wp_enqueue_style('legal-law-consulting-child-style', get_stylesheet_directory_uri() .'/style.css', array('lawyer-hub-style'));

    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );
}
add_action('wp_enqueue_scripts', 'legal_law_consulting_enqueue_styles');

function legal_law_consulting_admin_scripts( $hook ) {
    if ( 'function.php' == $hook ) {
        return;
    }
    // Backend CSS
    wp_enqueue_style( 'legal-law-consulting-backend-css', get_theme_file_uri( '/assets/css/customizer.css' ) );
}
add_action( 'admin_enqueue_scripts', 'legal_law_consulting_admin_scripts' );


function legal_law_consulting_sanitize_select( $input, $setting ){
    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);

    //get the list of possible select options
    $choices = $setting->manager->get_control( $setting->id )->choices;

    //return input if valid or return default option
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

if ( ! defined( 'LAWYER_HUB_PRO_THEME_URL' ) ) {
    define( 'LAWYER_HUB_PRO_THEME_URL', 'https://www.themespride.com/themes/legal-wordpress-theme/' );
}
if ( ! defined( 'LAWYER_HUB_PRO_THEME_NAME' ) ) {
    define( 'LAWYER_HUB_PRO_THEME_NAME', esc_html__( 'Law Consulting Pro', 'legal-law-consulting' ));
}
if ( ! defined( 'LAWYER_HUB_FREE_THEME_URL' ) ) {
	define( 'LAWYER_HUB_FREE_THEME_URL', 'https://www.themespride.com/themes/free-law-wordpress-theme/' );
}
if ( ! defined( 'LAWYER_HUB_DEMO_THEME_URL' ) ) {
	define( 'LAWYER_HUB_DEMO_THEME_URL', 'https://www.themespride.com/legal-law-consulting/' );
}
if ( ! defined( 'LAWYER_HUB_DOCS_THEME_URL' ) ) {
    define( 'LAWYER_HUB_DOCS_THEME_URL', 'https://themespride.com/demo/docs/legal-law-consulting-pro/' );
}
if ( ! defined( 'LAWYER_HUB_DOCS_URL' ) ) {
    define( 'LAWYER_HUB_DOCS_URL', 'https://themespride.com/demo/docs/legal-law-consulting-pro/' );
}
if ( ! defined( 'LAWYER_HUB_SUPPORT_THEME_URL' ) ) {
    define( 'LAWYER_HUB_SUPPORT_THEME_URL', 'https://wordpress.org/support/theme/legal-law-consulting' );
}
if ( ! defined( 'LAWYER_HUB_RATE_THEME_URL' ) ) {
    define( 'LAWYER_HUB_RATE_THEME_URL', 'https://wordpress.org/support/theme/legal-law-consulting/reviews/#new-post' );
}
if ( ! defined( 'LAWYER_HUB_CHANGELOG_THEME_URL' ) ) {
    define( 'LAWYER_HUB_CHANGELOG_THEME_URL', get_stylesheet_directory() . '/readme.txt' );
}

define('LEAGAL_LAW_CONSULTING',__('https://www.themespride.com/themes/free-law-wordpress-theme/','legal-law-consulting') );
if ( ! function_exists( 'legal_law_consulting_credit' ) ) {
    function legal_law_consulting_credit(){
        echo "<a href=".esc_url(LEAGAL_LAW_CONSULTING)." target='_blank'>".esc_html__('Legal Law Consulting WordPress Theme ','legal-law-consulting')."</a>";
    }
}
