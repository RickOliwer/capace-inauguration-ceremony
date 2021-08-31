<?php

// Define path and URL to the ACF plugin.
define( 'CAPACE_ACF_PATH', get_stylesheet_directory() . '/inc/acf-pro/' );
define( 'CAPACE_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf-pro/' );

// Include the ACF plugin.
include_once( CAPACE_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'capace_acf_settings_url');
function capace_acf_settings_url( $url ) {
    return CAPACE_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
//add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
function my_acf_settings_show_admin( $show_admin ) {
    return false;
}