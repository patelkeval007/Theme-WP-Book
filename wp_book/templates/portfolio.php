<?php

/**
 * Template Name: portfolio
 * 
 * The template for displaying all featured images of portfolio( custom post type ).
 * 
 */
?>

<?php get_header(); ?>

<main>

    <!-- portfolio area -->
    <div class="portfolio-area pt-100 pb-100">
        <div class="container">
            <div class="category-title-area pb-60">
                <div class="cat-heading text-center grey-bg">
                    <h1>portfolio</h1>
                </div>
            </div>
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $query = new WP_Query(array(
                'post_type' => 'portfolio',
                'post_status' => 'publish',
                'posts_per_page' => get_option('posts_per_page'),
                'ignore_sticky_posts' => true,
                'paged' => $paged
            ));
            if ($query->have_posts()) { ?>
                <div class="row grid">
                    <?php
                        /* Start the Loop */
                        while ($query->have_posts()) {
                            $query->the_post();
                            ?>

                        <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat1 cat5">
                            <div class="portfolio-wrapper mb-30">
                                <div class="portfolio-thumb">

                                    <img height="247px" width="151px" src=<?php if (has_post_thumbnail()) {
                                                                                        the_post_thumbnail_url();
                                                                                    } else
                                                                                        echo get_template_directory_uri() . '/assets/img/alter/alter.jpg';
                                                                                    ?> alt="">
                                    <a class="popup-image" href=<?php if (has_post_thumbnail()) {
                                                                            the_post_thumbnail_url();
                                                                        } else
                                                                            echo get_template_directory_uri() . '/assets/img/alter/alter.jpg';
                                                                        ?>>
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                        wp_reset_postdata();
                        ?>

                </div>
                <center>
                    <!-- portfolio area end -->
                    <div class="pagination">
                        <?php
                            echo paginate_links(array(
                                'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                                'total'        => $query->max_num_pages,
                                'current'      => max(1, get_query_var('paged')),
                                'format'       => '?paged=%#%',
                                'show_all'     => false,
                                'type'         => 'list',
                                'end_size'     => 2,
                                'mid_size'     => 1,
                                'prev_next'    => true,
                                'prev_text'    => sprintf('<i></i><< Previous %1$s', ''),
                                'next_text'    => sprintf('%1$s Next >><i></i>', ''),
                                'add_args'     => false,
                                'add_fragment' => '',
                            ));
                            ?>
                    </div>
                </center>
            <?php } else {
                get_template_part('template-parts/content', 'portfolio_none');
            } ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>