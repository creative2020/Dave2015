<?php global $post; ?>	
			                    <!-- Quote .masonry-post -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>			                    
			                        <div class="masonry-post quote">
			                            <a href="<?php the_permalink() ?>">
			                                <div class="post-quote">
			                                    <h2><?php echo get_post_meta( $post->ID, 'post_quote', true ); ?></h2>
			                                    <P>- <?php echo get_post_meta( $post->ID, 'post_quote_author', true ); ?></P>
			                                </div>
			                            </a><!-- End .masonry-post-content -->
			                        </div>
</div>			                   
			                    <!-- End .masonry-post .quote -->
