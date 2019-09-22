<?php

/**
 * Template part for displaying a message that portfolio cannot be found.
 */
?>
<div class="category-title-area pt-60 pb-60">
    <div class="container">
        <div class="cat-heading text-center grey-bg">
            <h4>Ready to publish your first portfolio?</h4>
            <p><?php printf(wp_kses(__('<a href="%1$s">Get started here</a>.', 'book'), array('a' => array('href' => array()))), esc_url(admin_url('post-new.php?post_type=portfolio'))); ?></p>
        </div>
    </div>
</div>