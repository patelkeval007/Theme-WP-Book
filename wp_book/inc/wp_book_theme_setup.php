<?php

/**
 * For add extra functionalities/supports related to theme.
 */


/**
 * Add post-thumbnails and it's size.
 *
 * @return void.
 */
function wp_book_theme_setup_init()
{
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(800, 400, false);

}//end wp_book_theme_setup_init()


/**
 * Retrieve customized comment form.
 *
 * @param mixed $fields Fields array.
 *
 * @return string.
 */
function wp_book_comment_form_fields($fields)
{
    $defaults = [
        'fields'               => $fields,
        // 'comment_field'        => '<p class="comment-form-comment"><label for="comment">' . _x('Comment', 'noun') . '</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>',
        'comment_field'        => '
        <div class="col-xl-8 col-lg-8">
            <div class="post-details">
                <div class="post-comments-form mt-40 mb-40">
                    <div class="section-title mb-30">
                        <h2>Leave a Reply</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <textarea id="comment" name="comment" maxlength="65525" required="required" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>',
        'must_log_in'          => '<p class="must-log-in">'.sprintf(
            __('You must be <a href="%s">logged in</a> to post a comment.','wp_book'),
            wp_login_url(apply_filters('the_permalink', get_permalink($post_id), $post_id))
        ).'</p>',
        'logged_in_as'         => '',
        'comment_notes_before' => '<p class="comment-notes"><span id="email-notes">'.__('Your email address will not be published.','wp_book').'</span>'.($req == true ? $required_text : '').'</p>',
        'comment_notes_after'  => '',
        'action'               => site_url('/wp-comments-post.php'),
        'id_form'              => 'commentform',
        'id_submit'            => 'submit',
        'class_form'           => 'comment-form',
        'class_submit'         => 'submit',
        'name_submit'          => 'submit',
        'title_reply'          => __('','wp_book'),
        'title_reply_to'       => __('Leave a Reply to %s','wp_book'),
        'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
        'title_reply_after'    => '</h3>',
        'cancel_reply_before'  => ' <small>',
        'cancel_reply_after'   => '</small>',
        'cancel_reply_link'    => __('Cancel reply','wp_book'),
        'label_submit'         => __('Post Comment','wp_book'),
        'submit_button'        => '
        <div class="col-xl-8 col-lg-8">
            <div class="post-details">
                <div class="post-comments-form mt-40 mb-40">
                    <div class="row">
                        <div class="col-xl-12">
                            <button name="%1$s" type="submit" id="%2$s" value="%4$s" class="btn brand-btn %3$s" type="submit">Send message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>',
        'submit_field'         => '<p class="form-submit">%1$s %2$s</p>',
        'format'               => 'xhtml',
    ];
    return $defaults;

}//end wp_book_comment_form_fields()
