<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 */
?>
<?php get_header(); ?>

<main>
    <section class="news-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <?php
                    while (have_posts() == true) {
                        the_post();
                        ?>
                        <?php get_template_part('template-parts/content', 'page'); ?>

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() == true || get_comments_number() == true) {
                            comments_template();
                        }
                    }

                    wp_reset_postdata(); ?>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer();
