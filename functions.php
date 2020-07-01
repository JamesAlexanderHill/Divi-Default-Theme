<?php
//Enqueue Scripts
function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

//Theme Support
add_theme_support( 'title-tag' );

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
