<?php

/**
 * The template for displaying the general archive page.
 */
?>

<?php get_header(); ?>

<main>
    <div class="page-banner-area mt-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-bar text-center pt-60 pb-60" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/bg/page-itle.jpg' ?>)">
                        <h1><?php
                        if (is_tag() == true) {
                            the_tags();
                        }

                        if (is_category() == true) {
                            the_category();
                        }
                        ?></h1>
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
                                        <?php
                                        if (has_post_thumbnail() == true) {
                                            the_post_thumbnail();
                                        }
                                        ?>
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
                                                <span>
                                                    <?php
                                                            $archive_year  = get_the_time('Y');
                                                            $archive_month = get_the_time('m');
                                                            $archive_day   = get_the_time('d');
                                                    ?>
                                                    <a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"> <?php echo get_the_date(); ?></a>
                                                </span>
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

                        wp_reset_postdata();
                    } else {
                        get_template_part('template-parts/content', 'none');
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
