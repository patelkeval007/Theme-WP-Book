<?php

/**
 * The template for displaying search results pages.
 */
?>
<?php get_header(); ?>

<main>
    <div class="page-banner-area mt-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center pt-60 pb-60">
                        <h1>Search Result</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="news-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <?php
                    if (have_posts() == true) {
                        while (have_posts() == true) {
                            the_post();
                            ?>
                            <div class="postbox mb-40">
                                <div class="postbox__thumb mb-25">
                                    <a href=<?php the_permalink(); ?>>
                                        <img height="451px" width="803px" src=<?php
                                        if (has_post_thumbnail() == true) {
                                            the_post_thumbnail_url();
                                        } else {
                                            echo get_template_directory_uri().'/assets/img/alter/alter.jpg';
                                        }
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
                                                <i class="far fa-user-circle"></i>
                                                <span><?php the_author_posts_link(); ?></span>
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
                        }//end while
                    }//end if
                    ?>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <?php get_sidebar(); ?>
                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer();
