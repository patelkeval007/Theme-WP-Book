<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 */
?>

<?php get_header(); ?>

<main>
    <div class="category-banner-area mt-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="category-wrapper" style="background-image: url(<?php
                    if (has_post_thumbnail() == true) {
                        the_post_thumbnail_url();
                    } else {
                        echo get_template_directory_uri().'/assets/img/alter/alter.jpg';
                    }
                    ?>)">
                        <div class="category-inner">
                            <?php
                            $query = new WP_Query(
                                [
                                    'post_status'         => 'publish',
                                    'posts_per_page'      => 1,
                                    'ignore_sticky_posts' => true,
                                ]
                            );
                            if ($query->have_posts() == true) {
                                while ($query->have_posts() == true) {
                                    $query->the_post();
                                    ?>

                                    <span class="post-cat mb-10 mr-10">
                                        <?php the_category(); ?>
                                    </span>
                                    <h1><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></h1>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="news-area pt-60 pb-60">
        <div class="container">
            <div class="category-title-area pb-60">
                <div class="cat-heading text-center grey-bg">
                    <h1>HOME</h1>
                </div>
            </div>
            <?php
            if (get_query_var('paged') == true) {
                $paged = get_query_var('paged');
            } else {
                $paged = 1;
            }

            $query = new WP_Query(
                [
                    'post_status'         => 'publish',
                    'posts_per_page'      => get_option('posts_per_page'),
                    'ignore_sticky_posts' => true,
                    'paged'               => $paged,
                ]
            );
            if ($query->have_posts() == true) { ?>
                <div class="row">
                    <?php
                    while ($query->have_posts() == true) {
                        $query->the_post();
                        ?>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="postbox mb-40">
                                <div class="postbox__thumb mb-25">
                                    <img height="274px" width="406px" src=<?php
                                    if (has_post_thumbnail() == true) {
                                        the_post_thumbnail_url();
                                    } else {
                                        echo get_template_directory_uri().'/assets/img/alter/alter.jpg';
                                    }
                                    ?> alt="">
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
                                            <li>
                                                <i class="far fa-user-circle"></i>
                                                <span>
                                                    <?php the_author_posts_link(); ?>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="title-18 font-600 pr-0">
                                        <a href=<?php the_permalink(); ?>><?php the_title(); ?></a>
                                    </h4>
                                    <div class="desc-text mb-20">
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                    <a href=<?php the_permalink(); ?> class="read-more">read more</a>
                                </div>
                            </div>
                        </div>
                    <?php }//end while

                        wp_reset_postdata(); ?>
                </div>
                <center>
                    <div class="pagination">
                        <?php
                            echo paginate_links(
                                [
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
                                ]
                            );
                        ?>
                    </div>
                </center>
            <?php  } else {
                get_template_part('template-parts/content', 'none');
            }//end if
            ?>
        </div>
    </section>

</main>
<?php get_footer();
