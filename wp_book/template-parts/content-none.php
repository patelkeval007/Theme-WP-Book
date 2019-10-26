<?php
/**
 * Template part for displaying a message that posts cannot be found.
 */
?>
<div class="category-title-area pt-60 pb-60">
    <div class="container">
        <div class="cat-heading text-center grey-bg">
            <h4>Ready to publish your first post?</h4>
            <p><?php printf(wp_kses(__('<a href="%1$s">Get started here</a>.', 'wp_book'), ['a' => ['href' => []]]), esc_url(admin_url('post-new.php'))); ?></p>
        </div>
    </div>
</div>
