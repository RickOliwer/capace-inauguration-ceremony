<?php

require_once('inc/front-page-content.php');
require_once('inc/front-page-form.php');
require_once('inc/front-page-fourth-module.php');


require get_template_directory() . '/inc/acf-loader.php';

/**
 * setup theme.-white
 *
 * @return void
 */
function capace_theme_setup(){
    /**
     * declare support for costum logo.
     */
    add_theme_support('custom-logo');

    remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'capace_theme_setup');

function capace_customize_register( $wp_customize){
    $wp_customize->get_setting( 'image_control_one' )->transport = 'postMessage';
    // Add and manipulate theme images to be used.
    $wp_customize->add_section('imageoner', array(
    "title" => 'Footer Image',
    "priority" => 28,
    "description" => __( 'Upload images to display on the foooter', 'capace' )
    ));
    $wp_customize->add_setting('image_control_one', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_control_one', array(
    'label' => __( 'Featured Footer Image One', 'capace' ),
    'section' => 'imageoner',
    'settings' => 'image_control_one',
    ))
    );
}
add_action( 'customize_register', 'capace_customize_register' );

/**
 * Enqueue scripts and styles.
 */

/**
 * Enqueue scripts and styles.
 */
function capace_scripts() {

    // Style CSS
    wp_enqueue_style( 'capace-style', get_template_directory_uri() . '/css/theme.css' );
    //fontawsome
    wp_enqueue_script('fonts', 'https://kit.fontawesome.com/597b6f103f.js', [], false, false);
    
    // Google fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&family=Jost:wght@400;500;600;700&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap', [], null);

    wp_enqueue_script( 'capace-script', get_template_directory_uri() . '/js/theme.js', array(), '20151215', true);


}
add_action( 'wp_enqueue_scripts', 'capace_scripts' );



require_once('inc/class.SocialWidget.php');
/**
 * widget support
 *
 * @return void
 */
function capace_widgets_init(){
    register_sidebar([
        'name' => 'Main Footer',
        'id' => 'main-footer',
        'description' => 'footer for Capace',
        'before_widget' => '<div id="%1$s" class="%2$s footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);

    register_sidebar([
        'name' => 'Bottom Footer',
        'id' => 'bottom-footer',
        'description' => 'widget for Capace',
        'before_widget' => '<div id="%1$s" class="%2$s footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);

    register_widget('SocialWidget');
}
add_action('widgets_init', 'capace_widgets_init');
