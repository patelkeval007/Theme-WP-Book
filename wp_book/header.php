<?php

/**
 * The template for displaying Header part.
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php echo get_bloginfo('title'); ?></title>
    <meta name="<?php echo get_bloginfo('description'); ?>" content="">

    <link rel="manifest" href=<?php echo get_template_directory_uri() . "site.html" ?>>
    <link rel="shortcut icon" type="image/x-icon" href=<?php echo get_template_directory_uri() . '/assets/img/alter/favicon.ico' ?>>

    <?php wp_head(); ?>
</head>

<body>
    <!-- header start -->
    <header class="header">
        <div class="header__middle pt-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-3 d-flex align-items-center justify-content-md-start justify-content-center">
                        <div class="header__logo text-center text-md-left mb-20">
                            <a href="<?php echo site_url(); ?>"><img width='148px' height='43px' src=<?php echo get_theme_mod('wp_book_logo'); ?> alt="Header Logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__menu-area black-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="header__right-icon f-right mt-17">
                            <a href="#" data-toggle="modal" data-target="#search-modal">
                                <i class="fas fa-search"></i>
                            </a>
                        </div>
                        <div class="header__menu f-left">
                            <nav id="mobile-menu">
                                <?php
                                $args = array('theme_location'    => 'book_menu');
                                wp_nav_menu($args);
                                ?>
                            </nav>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Search -->
        <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->