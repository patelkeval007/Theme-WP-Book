<?php

/**
 * Register custom sidebar for theme.
 */


/**
 * Register custome sidebar.
 *
 * @return void.
 */
function wp_book_sidebar_init()
{
    register_sidebar(
        [
            'name'          => esc_html__('Sidebar', 'wp_book'),
            'id'            => 'wp_book_sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'wp_book'),
            'before_widget' => '<div id="%1$s" class="widget %2$s widget-border mb-40">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ]
    );

}//end wp_book_sidebar_init()
