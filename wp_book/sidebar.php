<?php

/**
 * The sidebar containing the main widget area.
 */

if (is_active_sidebar('wp_book_sidebar-1')) {
	dynamic_sidebar('wp_book_sidebar-1');
} else {
	$args = array(
		'name'          => esc_html__('Sidebar', 'storeone'),
		'id'            => 'sidebar',
		'description'   => esc_html__('Sidebar Widget Area', 'storeone'),
		'before_widget' => '<div id="%1$s" class="widget sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-heading"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	);
	the_widget('WP_Widget_Categories', null, $args);
}
