<?php

// Load CSS
function enqueue_style() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_style');

// Load fonts
// Load fonts
function load_fonts() {
     wp_enqueue_style('Exo', 'https://fonts.googleapis.com/css?family=Exo:500,500i,700,700i,900,900i&subset=latin-ext');
}
add_action('wp_enqueue_scripts', 'load_fonts');

// Activate featured images
add_theme_support( 'post-thumbnails' );

// Register Wordpress menus
function register_my_menus() {
  register_nav_menus(
    array(
      'amp-footer-menu' => __( 'AMP Footer Menu' ),
      'amp-sidebar-menu' => __( 'AMP Sidebar Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );