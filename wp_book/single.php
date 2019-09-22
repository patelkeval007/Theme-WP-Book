<?php

/**
 * The template for displaying all single posts.
 */
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        // Start the loop.
        while (have_posts()) {
            the_post();

            get_template_part('template-parts/content', 'single');
        }
        ?>
    </main>
</div>

<?php get_footer(); ?>