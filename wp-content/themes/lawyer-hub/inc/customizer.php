<?php
/**
 * Lawyer Hub: Customizer
 *
 * @package Lawyer Hub
 * @subpackage lawyer_hub
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function lawyer_hub_customize_register( $wp_customize ) {

	//add home page setting pannel
	$wp_customize->add_panel( 'lawyer_hub_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Custom Home page', 'lawyer-hub' ),
	    'description' => __( 'Description of what this panel does.', 'lawyer-hub' ),
	) );

	//Sidebar Position
	$wp_customize->add_section('lawyer_hub_tp_general_settings',array(
        'title' => __('TP General Option', 'lawyer-hub'),
        'priority' => 2,
        'panel' => 'lawyer_hub_panel_id'
    ) );

 	$wp_customize->add_setting('lawyer_hub_tp_body_layout_settings',array(
		'default' => 'Full',
		'sanitize_callback' => 'lawyer_hub_sanitize_choices'
	));
 	$wp_customize->add_control('lawyer_hub_tp_body_layout_settings',array(
		'type' => 'radio',
		'label'     => __('Body Layout Setting', 'lawyer-hub'),
		'description'   => __('This option work for complete body, if you want to set the complete website in container.', 'lawyer-hub'),
		'section' => 'lawyer_hub_tp_general_settings',
		'choices' => array(
		'Full' => __('Full','lawyer-hub'),
		'Container' => __('Container','lawyer-hub'),
		'Container Fluid' => __('Container Fluid','lawyer-hub')
		),
	) );

   // Add Settings and Controls for Post Layout
	$wp_customize->add_setting('lawyer_hub_sidebar_post_layout',array(
     'default' => 'right',
     'sanitize_callback' => 'lawyer_hub_sanitize_choices'
	));
	$wp_customize->add_control('lawyer_hub_sidebar_post_layout',array(
     'type' => 'radio',
     'label'     => __('Theme Sidebar Position', 'lawyer-hub'),
     'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'lawyer-hub'),
     'section' => 'lawyer_hub_tp_general_settings',
     'choices' => array(
         'full' => __('Full','lawyer-hub'),
         'left' => __('Left','lawyer-hub'),
         'right' => __('Right','lawyer-hub'),
         'three-column' => __('Three Columns','lawyer-hub'),
         'four-column' => __('Four Columns','lawyer-hub'),
         'grid' => __('Grid Layout','lawyer-hub')
     ),
	) );

	// Add Settings and Controls for Page Layout
	$wp_customize->add_setting('lawyer_hub_sidebar_page_layout',array(
     'default' => 'right',
     'sanitize_callback' => 'lawyer_hub_sanitize_choices'
	));
	$wp_customize->add_control('lawyer_hub_sidebar_page_layout',array(
     'type' => 'radio',
     'label'     => __('Page Sidebar Position', 'lawyer-hub'),
     'description'   => __('This option work for pages.', 'lawyer-hub'),
     'section' => 'lawyer_hub_tp_general_settings',
     'choices' => array(
         'full' => __('Full','lawyer-hub'),
         'left' => __('Left','lawyer-hub'),
         'right' => __('Right','lawyer-hub')
     ),
	) );

	$wp_customize->add_setting('lawyer_hub_preloader_show_hide',array(
		'default' => false,
		'sanitize_callback'	=> 'lawyer_hub_sanitize_checkbox'
	));
 	$wp_customize->add_control('lawyer_hub_preloader_show_hide',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Preloader Option','lawyer-hub'),
		'section' => 'lawyer_hub_tp_general_settings',
	));

	$wp_customize->add_setting('lawyer_hub_sticky',array(
		'default' => false,
		'sanitize_callback'	=> 'lawyer_hub_sanitize_checkbox'
	));
	$wp_customize->add_control('lawyer_hub_sticky',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Sticky Header','lawyer-hub'),
		'section' => 'lawyer_hub_tp_general_settings',
	));

	//TP Blog Option
	$wp_customize->add_section('lawyer_hub_blog_option',array(
		'title' => __('TP Blog Option', 'lawyer-hub'),
		'priority' => 1,
		'panel' => 'lawyer_hub_panel_id'
	) );

    $wp_customize->add_setting('lawyer_hub_remove_date',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_hub_remove_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Date Option','lawyer-hub'),
       'section' => 'lawyer_hub_blog_option',
    ));

    $wp_customize->add_setting('lawyer_hub_remove_author',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_hub_remove_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Author Option','lawyer-hub'),
       'section' => 'lawyer_hub_blog_option',
    ));

    $wp_customize->add_setting('lawyer_hub_remove_comments',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_hub_remove_comments',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Comment Option','lawyer-hub'),
       'section' => 'lawyer_hub_blog_option',
    ));

    $wp_customize->add_setting('lawyer_hub_remove_tags',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_hub_remove_tags',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Tags Option','lawyer-hub'),
       'section' => 'lawyer_hub_blog_option',
    ));

    $wp_customize->add_setting('lawyer_hub_remove_read_button',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_hub_remove_read_button',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Read More Button','lawyer-hub'),
       'section' => 'lawyer_hub_blog_option',
    ));

    $wp_customize->add_setting('lawyer_hub_read_more_text',array(
		'default'=> __('Read More','lawyer-hub'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_hub_read_more_text',array(
		'label'	=> __('Edit Button Text','lawyer-hub'),
		'section'=> 'lawyer_hub_blog_option',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'lawyer_hub_excerpt_count', array(
		'default'              => 35,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'lawyer_hub_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'lawyer_hub_excerpt_count', array(
		'label'       => esc_html__( 'Edit Excerpt Limit','lawyer-hub' ),
		'section'     => 'lawyer_hub_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	// Top Bar
	$wp_customize->add_section( 'lawyer_hub_topbar', array(
    	'title'      => __( 'Header Details', 'lawyer-hub' ),
    	'priority' => 4,
    	'description' => __( 'Add your contact details', 'lawyer-hub' ),
		'panel' => 'lawyer_hub_panel_id'
	) );

	$wp_customize->add_setting('lawyer_hub_search_icon',array(
		'default' => false,
		'sanitize_callback'	=> 'lawyer_hub_sanitize_checkbox'
	));
 	$wp_customize->add_control('lawyer_hub_search_icon',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Search Option','lawyer-hub'),
		'section' => 'lawyer_hub_topbar',
	));

	$wp_customize->add_setting('lawyer_hub_location_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_hub_location_text',array(
		'label'	=> __('Add Location','lawyer-hub'),
		'section'=> 'lawyer_hub_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawyer_hub_phone_number_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'lawyer_hub_sanitize_phone_number'
	));
	$wp_customize->add_control('lawyer_hub_phone_number_text',array(
		'label'	=> __('Add Phone Number','lawyer-hub'),
		'section'=> 'lawyer_hub_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawyer_hub_email_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_hub_email_text',array(
		'label'	=> __('Add Email Text','lawyer-hub'),
		'section'=> 'lawyer_hub_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawyer_hub_email_address',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('lawyer_hub_email_address',array(
		'label'	=> __('Add Email Address','lawyer-hub'),
		'section'=> 'lawyer_hub_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawyer_hub_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_hub_button_text',array(
		'label'	=> __('Add Button Text','lawyer-hub'),
		'section'=> 'lawyer_hub_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lawyer_hub_button_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('lawyer_hub_button_link',array(
		'label'	=> __('Add Button Link','lawyer-hub'),
		'section'=> 'lawyer_hub_topbar',
		'type'=> 'url'
	));

	// Social Media
	$wp_customize->add_section( 'lawyer_hub_social_media', array(
    	'title'      => __( 'Social Media Links', 'lawyer-hub' ),
    	'priority' => 5,
    	'description' => __( 'Add your Social Links', 'lawyer-hub' ),
		'panel' => 'lawyer_hub_panel_id'
	) );

	$wp_customize->add_setting('lawyer_hub_facebook_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('lawyer_hub_facebook_url',array(
		'label'	=> __('Facebook Link','lawyer-hub'),
		'section'=> 'lawyer_hub_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('lawyer_hub_twitter_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('lawyer_hub_twitter_url',array(
		'label'	=> __('Twitter Link','lawyer-hub'),
		'section'=> 'lawyer_hub_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('lawyer_hub_instagram_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('lawyer_hub_instagram_url',array(
		'label'	=> __('Instagram Link','lawyer-hub'),
		'section'=> 'lawyer_hub_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('lawyer_hub_youtube_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('lawyer_hub_youtube_url',array(
		'label'	=> __('YouTube Link','lawyer-hub'),
		'section'=> 'lawyer_hub_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('lawyer_hub_pint_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('lawyer_hub_pint_url',array(
		'label'	=> __('Pinterest Link','lawyer-hub'),
		'section'=> 'lawyer_hub_social_media',
		'type'=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'lawyer_hub_slider_section' , array(
    	'title'      => __( 'Slider Section', 'lawyer-hub' ),
    	'priority' => 6,
		'panel' => 'lawyer_hub_panel_id'
	) );

	$wp_customize->add_setting('lawyer_hub_slider_arrows',array(
		'default' => false,
		'sanitize_callback'	=> 'lawyer_hub_sanitize_checkbox'
	));
	$wp_customize->add_control('lawyer_hub_slider_arrows',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide slider','lawyer-hub'),
		'section' => 'lawyer_hub_slider_section',
	));

	for ( $count = 1; $count <= 3; $count++ ) {

		$wp_customize->add_setting( 'lawyer_hub_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'lawyer_hub_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'lawyer_hub_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'lawyer-hub' ),
			'description' => __('Image Size ( 1835 x 700 ) px','lawyer-hub'),
			'section'  => 'lawyer_hub_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//home page about
	$wp_customize->add_section( 'lawyer_hub_about_section' , array(
    	'title'      => __( 'About Us Section', 'lawyer-hub' ),
    	'priority' => 6,
		'panel' => 'lawyer_hub_panel_id'
	) );

	$wp_customize->add_setting('lawyer_hub_about_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_hub_about_title',array(
		'label'	=> __('Add Title','lawyer-hub'),
		'section'=> 'lawyer_hub_about_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'lawyer_hub_about_page', array(
		'default'           => '',
		'sanitize_callback' => 'lawyer_hub_sanitize_dropdown_pages'
	) );

	$wp_customize->add_control( 'lawyer_hub_about_page', array(
		'label'    => __( 'Select About Page', 'lawyer-hub' ),
		'section'  => 'lawyer_hub_about_section',
		'type'     => 'dropdown-pages'
	) );

	//footer
	$wp_customize->add_section('lawyer_hub_footer_section',array(
		'title'	=> __('Footer Text','lawyer-hub'),
		'description'	=> __('Add copyright text.','lawyer-hub'),
		'panel' => 'lawyer_hub_panel_id'
	));

	$wp_customize->add_setting('lawyer_hub_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lawyer_hub_footer_text',array(
		'label'	=> __('Copyright Text','lawyer-hub'),
		'section'	=> 'lawyer_hub_footer_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('lawyer_hub_return_to_header',array(
		'default' => true,
		'sanitize_callback'	=> 'lawyer_hub_sanitize_checkbox'
	));
	$wp_customize->add_control('lawyer_hub_return_to_header',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Return to header','lawyer-hub'),
		'section' => 'lawyer_hub_footer_section',
	));

   // Add Settings and Controls for Scroll top
	$wp_customize->add_setting('lawyer_hub_scroll_top_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'lawyer_hub_sanitize_choices'
	));
	$wp_customize->add_control('lawyer_hub_scroll_top_position',array(
     'type' => 'radio',
     'label'     => __('Scroll to top Position', 'lawyer-hub'),
     'description'   => __('This option work for scroll to top', 'lawyer-hub'),
     'section' => 'lawyer_hub_footer_section',
     'choices' => array(
         'Right' => __('Right','lawyer-hub'),
         'Left' => __('Left','lawyer-hub'),
         'Center' => __('Center','lawyer-hub')
     ),
	) );

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'lawyer_hub_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'lawyer_hub_customize_partial_blogdescription',
	) );

	$wp_customize->add_setting('lawyer_hub_site_title',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_hub_site_title',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Site Title','lawyer-hub'),
       'section' => 'title_tagline',
    ));

    $wp_customize->add_setting('lawyer_hub_site_tagline',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_hub_site_tagline',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Tagline','lawyer-hub'),
       'section' => 'title_tagline',
    ));

    $wp_customize->add_setting('lawyer_hub_logo_width',array(
		'default' => 150,
		'sanitize_callback'	=> 'lawyer_hub_sanitize_number_absint'
	));
	 $wp_customize->add_control('lawyer_hub_logo_width',array(
		'label'	=> esc_html__('Here You Can Customize Your Logo Size','lawyer-hub'),
		'section'	=> 'title_tagline',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('lawyer_hub_logo_settings',array(
		'default' => 'Different Line',
		'sanitize_callback' => 'lawyer_hub_sanitize_choices'
	));
   $wp_customize->add_control('lawyer_hub_logo_settings',array(
        'type' => 'radio',
        'label'     => __('Logo Layout Settings', 'lawyer-hub'),
        'description'   => __('Here you have two options 1. Logo and Site tite in differnt line. 2. Logo and Site title in same line.', 'lawyer-hub'),
        'section' => 'title_tagline',
        'choices' => array(
            'Different Line' => __('Different Line','lawyer-hub'),
            'Same Line' => __('Same Line','lawyer-hub')
        ),
	) );

	$wp_customize->add_setting('lawyer_hub_per_columns',array(
		'default'=> 3,
		'sanitize_callback'	=> 'lawyer_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('lawyer_hub_per_columns',array(
		'label'	=> __('Product Per Row','lawyer-hub'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));

	$wp_customize->add_setting('lawyer_hub_product_per_page',array(
		'default'=> 9,
		'sanitize_callback'	=> 'lawyer_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('lawyer_hub_product_per_page',array(
		'label'	=> __('Product Per Page','lawyer-hub'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));

    $wp_customize->add_setting('lawyer_hub_product_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_hub_product_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Shop page sidebar','lawyer-hub'),
       'section' => 'woocommerce_product_catalog',
    ));

    $wp_customize->add_setting('lawyer_hub_single_product_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'lawyer_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('lawyer_hub_single_product_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Product page sidebar','lawyer-hub'),
       'section' => 'woocommerce_product_catalog',
    ));
}
add_action( 'customize_register', 'lawyer_hub_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Lawyer Hub 1.0
 * @see lawyer_hub_customize_register()
 *
 * @return void
 */
function lawyer_hub_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Lawyer Hub 1.0
 * @see lawyer_hub_customize_register()
 *
 * @return void
 */
function lawyer_hub_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if ( ! defined( 'LAWYER_HUB_PRO_THEME_NAME' ) ) {
	define( 'LAWYER_HUB_PRO_THEME_NAME', esc_html__( 'Lawyer Hub Pro', 'lawyer-hub' ));
}
if ( ! defined( 'LAWYER_HUB_PRO_THEME_URL' ) ) {
	define( 'LAWYER_HUB_PRO_THEME_URL', esc_url('https://www.themespride.com/themes/law-firm-wordpress-theme/'));
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Lawyer_Hub_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Lawyer_Hub_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Lawyer_Hub_Customize_Section_Pro(
				$manager,
				'lawyer_hub_section_pro',
				array(
					'priority'   => 9,
					'title'    => LAWYER_HUB_PRO_THEME_NAME,
					'pro_text' => esc_html__( 'Upgrade Pro', 'lawyer-hub' ),
					'pro_url'  => esc_url( LAWYER_HUB_PRO_THEME_URL, 'lawyer-hub' ),
				)
			)
		);

		$manager->add_section(
		  new Lawyer_Hub_Customize_Section_Pro(
		    $manager,
		    'lawyer_hub_documentation',
		    array(
		      'priority'   => 500,
		      'title'    => esc_html__( 'Theme Documentation', 'lawyer-hub' ),
		      'pro_text' => esc_html__( 'Click Here', 'lawyer-hub' ),
		      'pro_url'  => esc_url( LAWYER_HUB_DOCS_URL, 'lawyer-hub'),
		    )
		  )
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'lawyer-hub-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'lawyer-hub-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Lawyer_Hub_Customize::get_instance();
