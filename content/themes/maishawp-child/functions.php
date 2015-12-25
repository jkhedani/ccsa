<?php
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
    function theme_enqueue_scripts() {
        // Styles
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
        // Scripts
        wp_enqueue_script( 'theme-script', get_stylesheet_directory_uri() . '/scripts.js', array( 'jquery' ));
    }
?>
