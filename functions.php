<?php
error_reporting(0);
// Load the parent theme's functions
require_once get_template_directory() . '/functions.php';

function child_theme_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');