<?php

/**
 * Registers navigation menu locations for a theme.
 */


/**
 * Register navigation menu at header.
 *
 * @return void.
 */
function wp_book_nav_menu_init()
{
    register_nav_menus(
        [
            'book_menu' => esc_html__('Header', 'wp_book'),
        ]
    );

}//end wp_book_nav_menu_init()
