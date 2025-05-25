<?php
/**
 * Enqueue parent and custom styles.
 */
add_action('wp_enqueue_scripts', 'u3a_enqueue_styles');
function u3a_enqueue_styles() {
    // Load parent theme stylesheet
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Load custom stylesheet
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/custom.css', array('parent-style'));
}
