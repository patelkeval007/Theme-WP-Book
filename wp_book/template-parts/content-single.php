<?php
/**
 * Template part for displaying single post details.
 */
?>
<section class="post-details-area pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <!-- post-details -->
                <div class="post-details">
                    <?php the_title('<h2 class="details-title mb-15">', '</h2>'); ?>

                    <!-- meta -->
                    <div class="postbox__text-meta pb-30">
                        <ul>
                            <li>
                                <i class="far fa-user-circle"></i>
                                <span><?php the_author_posts_link(); ?></span>
                            </li>
                            <li>
                                <i class="fas fa-calendar-alt"></i>
                                <span> <?php
                                        $archive_year  = get_the_time('Y');
                                        $archive_month = get_the_time('m');
                                        $archive_day   = get_the_time('d');
                                ?>
                                    <a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"> <?php echo get_the_date(); ?></a>
                                </span>
                            </li>
                            <li>
                                <span class="post-cat">
                                    <?php the_category(); ?>
                                </span>
                            </li>
                        </ul>
                    </div>

                    <!-- post-thumb -->
                    <div class="post-thumb mb-25">
                        <img height="451px" width="803px" src=<?php
                        if (has_post_thumbnail() == true) {
                            the_post_thumbnail_url();
                        } else {
                            echo get_template_directory_uri().'/assets/img/alter/alter.jpg';
                        }
                        ?> alt="">
                    </div>

                    <!-- post-content -->
                    <div class="post-content">
                        <p><?php the_content(); ?></p>
                    </div>

                    <!-- content__tags -->
                    <div class="content__tags mt-30">
                        <span> <?php edit_post_link('Edit', '<span class="edit-link">', '</span>'); ?></span>
                    </div>

                    <!-- post_navigation -->
                    <div class="s-content__pagenav mt-60">
                        <div class="s-content__nav">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="s-content__prev mb-30">
                                        <a href="#0" rel="prev">
                                            <?php previous_post_link();
                                            ?>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="s-content__next mb-30 text-left text-md-right">
                                        <a href="#0" rel="next">
                                            <?php next_post_link();
                                            ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    if (comments_open() == true || get_comments_number() == true) {
                        comments_template();
                    }
                    ?>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>
