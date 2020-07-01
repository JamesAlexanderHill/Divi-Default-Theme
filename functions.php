<?php
//Enqueue Scripts
function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

//Theme Support

function add_theme_support_funcs() {
 $logo_param = array(
   'height'      => 100,
   'width'       => 400,
   'flex-height' => true,
   'flex-width'  => true,
   'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $logo_param );
 add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'add_theme_support_funcs' );

//Menus
function register_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
      'social-menu' => __( 'Social Menu' )
    )
  );
}
add_action( 'init', 'register_menus' );
?>
