<?php
////Styles
    function wp_register_styles()
    {
        wp_enqueue_style('main-style', get_template_directory_uri() . '/main-style.css', false, '1.0', 'all');
    }
    add_action('wp_enqueue_scripts', 'wp_register_styles');

    function wp_register_scripts()
    {
        wp_enqueue_script('us-scripts', get_theme_file_uri('/assets/js/main.js'), array(), '1.0.0', true);
    }

    add_action('wp_enqueue_scripts', 'wp_register_scripts');



    /* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );