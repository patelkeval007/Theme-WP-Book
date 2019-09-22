<?php

function wp_book_activate_init()
{
    $labels = array(
        'name'               => __('Portfolio',  'book'),
        'singular_name'      => __('Portfolio', 'book'),
        'menu_name'          => __('Portfolio', 'book'),
        'name_admin_bar'     => __('Portfolio', 'book'),
        'add_new'            => __('Add New', 'book'),
        'add_new_item'       => __('Add New Portfolio', 'book'),
        'new_item'           => __('New Portfolio', 'book'),
        'edit_item'          => __('Edit Portfolio', 'book'),
        'view_item'          => __('View Portfolio', 'book'),
        'all_items'          => __('All Portfolio', 'book'),
        'search_items'       => __('Search Portfolio', 'book'),
        'parent_item_colon'  => __('Parent Portfolio:', 'book'),
        'not_found'          => __('No portfolio found.', 'book'),
        'not_found_in_trash' => __('No portfolio found in Trash.', 'book')
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Description.', 'book'),
        'public'             => true,
        'menu_icon'          => 'dashicons-portfolio',
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'book'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );

    register_post_type('portfolio', $args);
}
function wp_book_deactivate_init()
{
    unregister_post_type('portfolio');
}
