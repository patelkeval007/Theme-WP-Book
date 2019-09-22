<?php

/**
 * Enqueue scripts and styles.
 */
function wp_book_enqueue_scripts_init()
{
    //styles
    wp_enqueue_style('book-style', get_stylesheet_uri(), array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3', 'all');
    wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.2.1', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '3.6.0', 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all');
    wp_enqueue_style('fontawesome-all', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), '5.0.6', 'all');
    wp_enqueue_style('themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css', array(), '1.0.0', 'all');
    wp_enqueue_style('meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), '2.0.7', 'all');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');

    //scripts
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', array(), '3.5.0', true);
    wp_enqueue_script('jquery_js', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js', array(), '1.12.4', true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.1.3', true);
    wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '2.2.1', true);
    wp_enqueue_script('isotope.pkgd', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), '3.0.5', true);
    wp_enqueue_script('one-page-nav', get_template_directory_uri() . '/assets/js/one-page-nav-min.js', array(), '3.0.0', true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery.meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.min.js', array(), '1.0.0', true);
    wp_enqueue_script('ajax-form', get_template_directory_uri() . '/assets/js/ajax-form.js', array(), '1.0.0', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery.scrollUp', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array(), '1.0.0', true);
    wp_enqueue_script('imagesloaded.pkgd', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array(), '4.1.4', true);
    wp_enqueue_script('jquery.magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.1.0', true);
    wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), '1.0.0', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
function wp_book_meta_tag_init()
{
    echo '<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">';
}
