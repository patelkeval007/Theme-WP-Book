<div id="post-<?php the_ID(); ?>" class="postbox mb-40">
	<div class="postbox__thumb mb-25">
		<?php the_post_thumbnail('storeone-blog', array('class' => 'img-responsive')); ?>
	</div>
	<div class="postbox__text">
		<h4 class="title-30 font-600 pr-0">
			<?php the_title(); ?>
		</h4>
		<div class="desc-text mb-20">
			<p><?php the_content();
				wp_link_pages(array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'storeone'),
					'after'  => '</div>',
				));
				?></p>
		</div>
	</div>
</div>