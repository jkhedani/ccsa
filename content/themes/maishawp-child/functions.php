<?php
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
    function theme_enqueue_scripts() {

        // Bootstrap
        wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/lib/bootstrap/bootstrap.min.css', array(), '20150116' );
        wp_enqueue_style( 'bootstrap-theme', get_stylesheet_directory_uri() . '/lib/bootstrap/bootstrap-theme.min.css', array(), '20150116' );

        // Styles
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ), '4.5.0');
        wp_enqueue_style( 'prefix-font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array('child-style'), '4.5.0' );

        // Scripts
        wp_enqueue_script( 'bootstrap-tooltips', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ));
        wp_enqueue_script( 'theme-script', get_stylesheet_directory_uri() . '/scripts.js', array( 'jquery' ));
    }
?>
