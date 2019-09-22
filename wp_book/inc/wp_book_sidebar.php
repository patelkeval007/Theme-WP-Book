<?php

function wp_book_sidebar_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'book'),
        'id'            => 'wp_book_sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'blog'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-border mb-40">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
