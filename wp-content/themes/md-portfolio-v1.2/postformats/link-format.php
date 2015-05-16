<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="images">
	<?php global $post; ?>
	<h3 class="blockquote"><a href="<?php echo get_post_meta( $post->ID, '_cmb_the_link', true ); ?>"><?php echo get_post_meta( $post->ID, '_cmb_the_link', true ); ?></a></h3>
</div>
</div>