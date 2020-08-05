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