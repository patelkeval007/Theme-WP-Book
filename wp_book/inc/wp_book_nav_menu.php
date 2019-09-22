<?php

function wp_book_nav_menu_init()
{
    register_nav_menus(array(
        'book_menu' => esc_html__('Header', 'book'),
    ));
}
