<?php

/**
 * Template Name: blog-page
 * 
 * The template for displaying all blogs list-wise.
 * 
 */
?>
<?php get_header(); ?>

<main>
    <div class="page-banner-area mt-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-bar text-center pt-60 pb-60" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/bg/page-itle.jpg' ?>)">
                        <h1>Blog List Page</h1>
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
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $query = new WP_Query(array(
                        'post_status' => 'publish',
                        'posts_per_page' => get_option('posts_per_page'),
                        'ignore_sticky_posts' => true,
                        'paged' => $paged
                    ));
                    if ($query->have_posts()) {
                        /* Start the Loop */
                        while ($query->have_posts()) {
                            $query->the_post();
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
                                    <?php the_tags('Tagged with: ', ' • ', '<br />'); ?>
                                    <a href=<?php the_permalink(); ?> class="read-more">read more</a>
                                </div>
                            </div>
                        <?php
                            }
                            wp_reset_postdata(); ?>
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
                    <?php } else {
                        get_template_part('template-parts/content', 'none');
                    } ?>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <?php get_sidebar(); ?>
                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>