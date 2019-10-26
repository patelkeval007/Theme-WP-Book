<?php

/**
 * Register custom post type Portfolio for theme.
 */


/**
 * Register custom post type Portfolio.
 *
 * @return void.
 */
function wp_book_activate_init()
{
    $labels = [
        'name'               => __('Portfolio',  'wp_book'),
        'singular_name'      => __('Portfolio', 'wp_book'),
        'menu_name'          => __('Portfolio', 'wp_book'),
        'name_admin_bar'     => __('Portfolio', 'wp_book'),
        'add_new'            => __('Add New', 'wp_book'),
        'add_new_item'       => __('Add New Portfolio', 'wp_book'),
        'new_item'           => __('New Portfolio', 'wp_book'),
        'edit_item'          => __('Edit Portfolio', 'wp_book'),
        'view_item'          => __('View Portfolio', 'wp_book'),
        'all_items'          => __('All Portfolio', 'wp_book'),
        'search_items'       => __('Search Portfolio', 'wp_book'),
        'parent_item_colon'  => __('Parent Portfolio:', 'wp_book'),
        'not_found'          => __('No portfolio found.', 'wp_book'),
        'not_found_in_trash' => __('No portfolio found in Trash.', 'wp_book'),
    ];

    $args = [
        'labels'             => $labels,
        'description'        => __('Description.', 'wp_book'),
        'public'             => true,
        'menu_icon'          => 'dashicons-portfolio',
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'book'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => [
            'title',
            'editor',
            'author',
            'thumbnail',
            'excerpt',
            'comments',
        ],
    ];

    register_post_type('portfolio', $args);

}//end wp_book_activate_init()


/**
 * Unregister custom post type Portfolio for theme.
 *
 * @return void.
 */
function wp_book_deactivate_init()
{
    unregister_post_type('portfolio');

}//end wp_book_deactivate_init()
