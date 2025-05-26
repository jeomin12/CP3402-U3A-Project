<?php
function u3a_child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'u3a-custom-style',
        get_stylesheet_directory_uri() . '/custom.css',
        array('parent-style'),
        filemtime(get_stylesheet_directory() . '/custom.css')
    );
    wp_enqueue_script('dashicons'); // Enable dashicons for search icon
}
add_action('wp_enqueue_scripts', 'u3a_child_enqueue_styles');

function u3a_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'u3a-child'),
    ));
}
add_action('after_setup_theme', 'u3a_register_menus');
