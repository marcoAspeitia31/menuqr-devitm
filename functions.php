<?php

if ( ! function_exists( 'menuqr_devitm_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function menuqr_devitm_setup() {

    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'menuqrdevitm' ),
        'secondary' => __('Secondary Menu', 'menuqrdevitm' )
    ) );
}
endif; // menuqr_devitm_setup
add_action( 'after_setup_theme', 'menuqr_devitm_setup' );

/**
 * Proper way to enqueue scripts and styles
 */
function menuqr_devitm_theme_scripts() {
    /* Styles */
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, '4.5.0');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', false, '4.7.0');
    wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap-css','font-awesome') );

    /* Scripts */
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '2.4.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('popper'), '4.5.0', true);

}
add_action( 'wp_enqueue_scripts', 'menuqr_devitm_theme_scripts' );