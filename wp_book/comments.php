<?php

/**
 * The template for displaying the comment section.
 */
?>

<?php

_deprecated_file(
    // Translators: %s: template name.
    sprintf(__('Theme without %s'), 'wp_book'),
    '3.0.0',
    null,
    // Translators: %s: template name.
    sprintf(__('Please include a %s template in your theme.'), 'wp_book')
);

// Do not delete these lines.
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
    die('Please do not load this page directly. Thanks!');
}

if (post_password_required() == true) { ?>
    <p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.'); ?></p>
    <?php
    return;
}
?>

<?php if (have_comments() == true) : ?>
    <h3 id="comments">
        <?php
        if (1 == get_comments_number()) {
            // Translators: %s: post title.
            printf(__('One response to %s'), '&#8220;'.get_the_title().'&#8221;');
        } else {
            // Translators: 1: number of comments, 2: post title.
            printf(
                _n('%1$s response to %2$s', '%1$s responses to %2$s', get_comments_number()),
                number_format_i18n(get_comments_number()),
                '&#8220;'.get_the_title().'&#8221;'
            );
        }
        ?>
    </h3>

    <div class="navigation">
        <div class="alignleft"><?php previous_comments_link(); ?></div>
        <div class="alignright"><?php next_comments_link(); ?></div>
    </div>

    <ol class="commentlist">
        <?php wp_list_comments(); ?>
    </ol>

    <div class="navigation">
        <div class="alignleft"><?php previous_comments_link(); ?></div>
        <div class="alignright"><?php next_comments_link(); ?></div>
    </div>
<?php else :
    // This is displayed if there are no comments so far.
    ?>

    <?php if (comments_open() == true) : ?>
        <!-- If comments are open, but there are no comments. -->

    <?php else :
        // Comments are closed.
        ?>
        <!-- If comments are closed. -->
        <p class="nocomments"><?php _e('Comments are closed.'); ?></p>

    <?php endif; ?>
<?php endif; ?>

<?php comment_form();
