<?php

/**
 * setup theme.-white
 *
 * @return void
 */
function cic_theme_setup(){
    /**
     * declare support for costum logo.
     */
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'cic_theme_setup');

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

}
add_action( 'wp_enqueue_scripts', 'capace_scripts' );
