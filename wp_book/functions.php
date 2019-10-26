<?php

/**
 * Functions and Definitions.
 */

// Add Style/Script and meta tags.
require get_template_directory().'/inc/wp_book_enqueue_script.php';
add_action('wp_enqueue_scripts', 'wp_book_enqueue_scripts_init', 1);
add_action('wp_head', 'wp_book_meta_tag_init', 1);

// This theme uses wp_nav_menu() in one location.
require get_template_directory().'/inc/wp_book_nav_menu.php';
add_action('init', 'wp_book_nav_menu_init', 1);

// Add Theme Supports.
require get_template_directory().'/inc/wp_book_theme_setup.php';
add_action('after_setup_theme', 'wp_book_theme_setup_init');
add_filter('comment_form_defaults', 'wp_book_comment_form_fields');

// Sidebar.
require get_template_directory().'/inc/wp_book_sidebar.php';
add_action('widgets_init', 'wp_book_sidebar_init');

// Create Custom Post Type for portfolio.
require get_template_directory().'/inc/wp_book_portfolio.php';
add_action('init', 'wp_book_activate_init');
add_action('switch_theme', 'wp_book_deactivate_init');

// Implement Customizer.
require get_template_directory().'/inc/customizer.php';
add_action('customize_register', 'wp_book_customize_register');
