<?php
function my_theme_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-sass', get_stylesheet_directory_uri() . '/build/css/childtheme.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function twentytwelvechild_setup() {
    register_nav_menu( 'primary-mobile', __( 'Primary Mobile Menu', 'twentytwelvechild' ) );
}
add_action( 'after_setup_theme', 'twentytwelvechild_setup' );

// Add Site Logo Callout Section To Admin Customizer Screen 

function site_logo_callout($wp_customize) {
    $wp_customize->add_section('site-logo-callout-section', array(
        'title' => 'Site Logo'
    ));

    $wp_customize->add_setting('site-logo-callout-display', array(
        "default" => 'No'
    ));
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'site_logo_callout_display_control', array(
    'label' => 'Display this section',
    'section' => 'site-logo-callout-section',
    'settings' => 'site-logo-callout-display',
    'type' => 'select',
    'choices' => array('No' => 'No', 'Yes' => 'Yes')
    )));

    $wp_customize->add_setting('site-logo-callout-image');

    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize,'site_logo_callout_image_control', array(
    'label' => 'Image',
    'section' => 'site-logo-callout-section',
    'settings' => 'site-logo-callout-image',
    'width' => 1443, 
    'height' => 680
    )));
}

add_action('customize_register', 'site_logo_callout');

// Add Intro Section To Admin Customizer Screen 


function frontpage_imgs_callout($wp_customize) {
    $wp_customize->add_section('frontpage-imgs-callout-section', array(
        'title' => 'Frontpage Images'
    ));

    $wp_customize->add_setting('frontpage-imgs-callout-display', array(
        "default" => 'No'
    ));
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'frontpage_imgs_callout_display_control', array(
    'label' => 'Display this section',
    'section' => 'frontpage-imgs-callout-section',
    'settings' => 'frontpage-imgs-callout-display',
    'type' => 'select',
    'choices' => array('No' => 'No', 'Yes' => 'Yes')
    )));
    
    $wp_customize->add_setting('frontpage_imgs_callout_one');
    
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize,'frontpage_imgs_callout_one_control', array(
    'label' => 'Image',
    'section' => 'frontpage-imgs-callout-section',
    'settings' => 'frontpage-imgs-callout-display',
    'width' => 199, 
    'height' => 67
    )));
   
}

add_action('customize_register', 'frontpage_imgs_callout');


function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );