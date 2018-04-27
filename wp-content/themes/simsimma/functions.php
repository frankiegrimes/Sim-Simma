<?php
/**
 * Proper way to register and enqueue scripts and styles
 */    
function namespace_theme_stylesheets() {
    wp_register_style( 'app-min',  get_template_directory_uri() .'/css/app-min.css', array(), null, 'all' );
    wp_register_style( 'custom-styles',  get_template_directory_uri() .'/css/styles.css', array(), null, 'all' );
    wp_register_style( 'styles', get_stylesheet_uri(), '', null, 'all' );
    wp_enqueue_style( 'app-min' );
    wp_enqueue_style( 'custom-styles' );
    wp_enqueue_style( 'styles' );
}
add_action( 'wp_enqueue_scripts', 'namespace_theme_stylesheets' );

?>

