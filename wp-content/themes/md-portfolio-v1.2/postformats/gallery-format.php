<?php global $post; ?>
                          <!-- slider .masonry-post -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>                          
                              <div class="masonry-post">
                                  <div id="blog-carousel" class="owl-carousel owl-theme">
                                        <?php 
                                        $PTData = get_post_meta( $post->ID, 'post-gallery-image');
                                            foreach ($PTData as $PTData ) {
                                                          $thumbnail = wp_get_attachment_image_src( $PTData, 'full');
                                                        echo '<div class="item"><img src='.$thumbnail[0].'  class="img-responsive" alt="" /> </div>';
                                                    } 
                                        ?>                                    
                                  </div>
                                  <div class="masonry-post-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><h4><?php the_title(); ?></h4></a></div>
                                  <p class="masonry-post-meta">By <a class="masonry-author"><?php the_author(); ?></a> | <?php echo get_the_date('d M y'); ?></p>
                                  <div class="masonry-post-content">
                                      Nullam ornare, sem in malesuada sagittis, quam sapien ornare massa, id pulvinar quam augue vel. Praesent leo orci...
                                  </div><!-- End .masonry-post-content -->
                                  <div class="masonry-post-more clearfix">
                                      <a href="#" class="pull-left"><i class="fa fa-comments"></i> <?php comments_number( '0 Comment', '1 Comment', '% Comment' ); ?></a>
                                      <a href="#" class="pull-right"><i class="fa fa-long-arrow-right"></i></a>
                                  </div><!-- End .masonry-post-more .clearfix -->
                              </div>
</div>
                          <!-- End .masonry-post -->
