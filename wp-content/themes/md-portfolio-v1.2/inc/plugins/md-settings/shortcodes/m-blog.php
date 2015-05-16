<?php
global $bub_mt;
?>
<div class="row">
                    <!-- blog post holder -->
                        <div class="blog-post-holder">                        
    
						<?php
						global $post;
						$wp_query= null;
						//$paged = (get_query_var('page')) ? get_query_var('page') : 1;
						$wp_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 6  ,) );
						
					    if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ) : $wp_query->the_post();
							$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
					     ?>

                        <?php
                        /*
                         * Pull in a different sub-template, depending on the Post Format.
                         * 
                         * Make sure that there is a default '<tt>format.php</tt>' file to fall back to
                         * as a default. Name templates '<tt>format-link.php</tt>', '<tt>format-aside.php</tt>', etc.
                         *
                         * You should use this in the loop.
                         */

                        $format = get_post_format();
                        if ( false === $format ) {
                            $format = 'standard';
                        }
                        get_template_part( '/postformats/' . $format . '-format' );
                        ?>



                        <?php endwhile;wp_reset_postdata();  endif; ?>
                        <?php wp_link_pages(); ?>

                        </div>

 						<!-- blog post holder end-->
</div>
<?php 
$bub_mt_blog_link = cs_get_option( 'mt_more_blog_link' );
if($bub_mt_blog_link != '') { 
echo '
                              <div class="row">
                                  <div class="col-xs-12">
                                      <div class="btn-masonry-container">
                                          <a href="' . get_permalink($bub_mt_blog_link) . '" class="btn-masonry">More Post</a>
                                      </div>
                                  </div>
                              </div>
';
} ?> 	
