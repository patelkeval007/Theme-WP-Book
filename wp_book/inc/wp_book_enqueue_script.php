<?php

/**
 * Enqueue scripts & styles and injecting meta tags.
 */


/**
 * Enqueue scripts and styles.
 *
 * @return void.
 */
function wp_book_enqueue_scripts_init()
{
    // Styles.
    wp_enqueue_style('book-style', get_stylesheet_uri(), [], '1.0.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', [], '4.1.3', 'all');
    wp_enqueue_style('owl.carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', [], '2.2.1', 'all');
    wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.min.css', [], '3.6.0', 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css', [], '1.0.0', 'all');
    wp_enqueue_style('fontawesome-all', get_template_directory_uri().'/assets/css/fontawesome-all.min.css', [], '5.0.6', 'all');
    wp_enqueue_style('themify-icons', get_template_directory_uri().'/assets/css/themify-icons.css', [], '1.0.0', 'all');
    wp_enqueue_style('meanmenu', get_template_directory_uri().'/assets/css/meanmenu.css', [], '2.0.7', 'all');
    wp_enqueue_style('slick', get_template_directory_uri().'/assets/css/slick.css', [], '1.0.0', 'all');
    wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', [], '1.0.0', 'all');

    // Scripts.
    wp_enqueue_script('modernizr', get_template_directory_uri().'/assets/js/vendor/modernizr-3.5.0.min.js', [], '3.5.0', true);
    wp_enqueue_script('jquery_js', get_template_directory_uri().'/assets/js/vendor/jquery-1.12.4.min.js', [], '1.12.4', true);
    wp_enqueue_script('popper', get_template_directory_uri().'/assets/js/popper.min.js', [], '1.0.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', [], '4.1.3', true);
    wp_enqueue_script('owl.carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', [], '2.2.1', true);
    wp_enqueue_script('isotope.pkgd', get_template_directory_uri().'/assets/js/isotope.pkgd.min.js', [], '3.0.5', true);
    wp_enqueue_script('one-page-nav', get_template_directory_uri().'/assets/js/one-page-nav-min.js', [], '3.0.0', true);
    wp_enqueue_script('slick', get_template_directory_uri().'/assets/js/slick.min.js', [], '1.0.0', true);
    wp_enqueue_script('jquery.meanmenu', get_template_directory_uri().'/assets/js/jquery.meanmenu.min.js', [], '1.0.0', true);
    wp_enqueue_script('ajax-form', get_template_directory_uri().'/assets/js/ajax-form.js', [], '1.0.0', true);
    wp_enqueue_script('wow', get_template_directory_uri().'/assets/js/wow.min.js', [], '1.0.0', true);
    wp_enqueue_script('jquery.scrollUp', get_template_directory_uri().'/assets/js/jquery.scrollUp.min.js', [], '1.0.0', true);
    wp_enqueue_script('imagesloaded.pkgd', get_template_directory_uri().'/assets/js/imagesloaded.pkgd.min.js', [], '4.1.4', true);
    wp_enqueue_script('jquery.magnific-popup', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', [], '1.1.0', true);
    wp_enqueue_script('plugins', get_template_directory_uri().'/assets/js/plugins.js', [], '1.0.0', true);
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', [], '1.0.0', true);

}//end wp_book_enqueue_scripts_init()


/**
 * To inject meta tag in html file.
 *
 * @return void.
 */
function wp_book_meta_tag_init()
{
    echo '<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">';

}//end wp_book_meta_tag_init()
