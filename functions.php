<?php 
add_action('wp_enqueue_scripts', 'apeos_scripts');
add_action('wp_enqueue_scripts', 'apeos_styles');

function apeos_styles() {
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/styles/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('apeos_style', get_stylesheet_uri() );
};

function apeos_scripts() {
    wp_enqueue_script('jquery_slim', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), null, true);
    // wp_enqueue_script('bootstrap_script', get_template_directory_uri() . '/styles/bootstrap/js/bootstrap.min.js', array(), null, true);
    // wp_script_add_data( 'jquery_slim', array( 'integrity', 'crossorigin' ) , array( 'ha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN', 'anonymous' ) );
};

add_theme_support( 'custom-logo', [
	'height'      => '',
	'width'       => '',
	'flex-width'  => false,
	'flex-height' => false,
	'header-text' => '',
	'unlink-homepage-logo' => false, // WP 5.5
] );





?>

