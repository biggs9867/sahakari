<?php

function legal_law_consulting_remove_customize_register() {
    global $wp_customize;
    $wp_customize->remove_section( 'lawyer_hub_color_option' );
    $wp_customize->remove_section( 'lawyer_hub_documentation' );
    $wp_customize->remove_section( 'lawyer_hub_social_media' );

    $wp_customize->remove_setting( 'lawyer_hub_location_text' );
    $wp_customize->remove_control( 'lawyer_hub_location_text' );
}
add_action( 'customize_register', 'legal_law_consulting_remove_customize_register', 11 );

function legal_law_consulting_customize_register( $wp_customize ) {

    // Services
    $wp_customize->add_section( 'legal_law_consulting_services', array(
        'title'      => __( 'Service Section', 'legal-law-consulting' ),
        'priority' => 10,
        'description' => __( 'Add your law firm services', 'legal-law-consulting' ),
        'panel' => 'lawyer_hub_panel_id'
    ) );

    $wp_customize->add_setting('legal_law_consulting_services_title',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('legal_law_consulting_services_title',array(
        'label' => __('Add Section Title','legal-law-consulting'),
        'section'=> 'legal_law_consulting_services',
        'type'=> 'text'
    ));

    $wp_customize->add_setting('legal_law_consulting_services_text',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('legal_law_consulting_services_text',array(
        'label' => __('Add Section Text','legal-law-consulting'),
        'section'=> 'legal_law_consulting_services',
        'type'=> 'text'
    ));

    $wp_customize->add_setting('legal_law_consulting_services_btn_text',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('legal_law_consulting_services_btn_text',array(
        'label' => __('Add Section Button Text','legal-law-consulting'),
        'section'=> 'legal_law_consulting_services',
        'type'=> 'text'
    ));

    $wp_customize->add_setting('legal_law_consulting_services_btn_url',array(
        'default'=> '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('legal_law_consulting_services_btn_url',array(
        'label' => __('Add Section Button URL','legal-law-consulting'),
        'section'=> 'legal_law_consulting_services',
        'type'=> 'url'
    ));

    $categories = get_categories();
    $cats = array();
    $i = 0;
    $services_cat[]= 'select';
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $services_cat[$category->slug] = $category->name;
    }

    $wp_customize->add_setting('legal_law_consulting_services_section_category',array(
        'default'   => 'select',
        'sanitize_callback' => 'legal_law_consulting_sanitize_select',
    ));
    $wp_customize->add_control('legal_law_consulting_services_section_category',array(
        'type'    => 'select',
        'choices' => $services_cat,
        'label' => __('Select Category','legal-law-consulting'),
        'section' => 'legal_law_consulting_services',
    ));
}
add_action( 'customize_register', 'legal_law_consulting_customize_register' );