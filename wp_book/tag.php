<?php

/**
 * The template for displaying the category.
 */
?>

<?php get_header(); ?>

<main>
    <!-- hero-area start -->
    <div class="page-banner-area mt-60">
        <div class="container">
            <div class="category-title-area pb-60">
                <div class="cat-heading text-center grey-bg">
                    <h1>Tag - archive page</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="page-title-bar text-center pt-60 pb-60" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/bg/page-itle.jpg' ?>)">
                        <h1><?php the_tags(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero-area end -->

    <section class="news-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <?php
                    if (have_posts()) {
                        /* Start the Loop */
                        while (have_posts()) {
                            the_post();
                            ?>
                            <div class="postbox mb-40">
                                <div class="postbox__thumb mb-25">
                                    <a href=<?php the_permalink(); ?>>
                                        <img height="451px" width="803px" src=<?php if (has_post_thumbnail()) {
                                                                                            the_post_thumbnail_url();
                                                                                        } else
                                                                                            echo get_template_directory_uri() . '/assets/img/alter/alter.jpg';
                                                                                        ?> alt="">
                                    </a>
                                </div>
                                <div class="postbox__text">
                                    <div class="postbox__text-meta pb-20">
                                        <ul>
                                            <li>
                                                <span class="post-cat">
                                                    <?php the_category(); ?>
                                                </span>
                                            </li>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span><?php echo get_the_date(); ?></span>
                                            </li>
                                            <li>
                                                <span> | <?php the_author_posts_link(); ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="title-30 font-600 pr-0">
                                        <a href=<?php the_permalink(); ?>><?php the_title(); ?></a>
                                    </h4>
                                    <div class="desc-text mb-20">
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                    <a href=<?php the_permalink(); ?> class="read-more">read more</a>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <?php get_sidebar(); ?>
                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>