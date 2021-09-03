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
}
add_action('after_setup_theme', 'capace_theme_setup');

/**
 * Enqueue scripts and styles.
 */

/**
 * Enqueue scripts and styles.
 */
function capace_scripts() {

    // Style CSS
    wp_enqueue_style( 'capace-style', get_template_directory_uri() . '/css/theme.css' );
    
    // Google fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&family=Jost:wght@400;500;600;700&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap', [], null);

    wp_enqueue_script( 'capace-script', get_template_directory_uri() . '/js/theme.js', array(), '20151215', true);


}
add_action( 'wp_enqueue_scripts', 'capace_scripts' );

function capace_widgets_init(){
    register_sidebar([
        'name' => 'Footer',
        'id' => 'footer',
        'description' => 'footer for Capace',
        'before_widget' => '<div id="%1$s" class="%2$s footer-widget"',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);
}
add_action('widgets_init', 'capace_widgets_init');
