<?php
//* Sart the engine
require_once( get_template_directory() . '/lib/init.php' );

// Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Child' );
define( 'CHILD_THEME_URL', 'none' );

//* Add HTML5 markup structure
add_theme_support( 'html5' );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add suppert for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

// Add custom css
add_action( 'wp_enqueue_scripts', 'art_custom_styles' );
function art_custom_styles()
{
   wp_enqueue_style( 'art-v-custom', get_stylesheet_directory_uri() . '/dist/css/style.min.css' );

}
// Add custom js
add_action('wp_enqueue_scripts', 'art_custom_js' );
function art_custom_js()
{
  wp_enqueue_script( 'art-v-custom', get_stylesheet_directory_uri() . '/dist/js/artversion.min.js');
}
