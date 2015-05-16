<?php
global $bub_mt;
get_header('mt');
?>

<section >
    <div class="container">
       <!-- single-post-wrapper -->
      <div class="single-post-wrapper">     
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    
                    <div class="single-post-header">
                        <h2><?php the_title(); ?></h2>

                         <p class="blog-meta">Posted by <?php the_author(); ?> |<?php echo get_the_date('d M y'); ?> | <a href="#"><?php comments_popup_link('0 comments', '1 comments', '% comments','comments-link',''); ?> </a></p>
                          
                          <?php
                            $cat_list = get_the_category_list();
                            if ($cat_list) {
                            $cats = str_replace('<ul class="post-categories">', '', $cat_list);
                                $cats = str_replace('</ul>', '', $cat_list);
                            }
                            echo $cats;
                          ?>


                         <div class="border"></div>
                    </div>   

                    

                    <!-- video post formate -->
                    <?php if ( has_post_format( 'video' )):?>
                            <div class="video-holder">
                                <?php echo get_post_meta( $post->ID, 'video_code', true ); ?>
                            </div>


                    <!-- quote post formate -->
                    <?php elseif (has_post_format('quote')): ?>
                          <!-- Quote .masonry-post -->
       
                                        <blockquote>
                                          <h2><?php echo get_post_meta( $post->ID, 'post_quote', true ); ?></h2>
                                          <P>- <?php echo get_post_meta( $post->ID, 'post_quote_author', true ); ?></P>
                                        </blockquote>

                          <!-- End .masonry-post .quote -->

                    <!-- gallery post formate -->
                    <?php elseif (has_post_format('gallery')): ?>
                                  
                                <div id="blog-carousel" class="owl-carousel owl-theme">
                                      <?php 
                                      $PTData = get_post_meta( $post->ID, 'post-gallery-image');
                                          foreach ($PTData as $PTData ) {
                                                        $thumbnail = wp_get_attachment_image_src( $PTData, 'full');
                                                      echo '<div class="item"><img src='.$thumbnail[0].'  /> </div>';
                                                  } 
                                      ?>
                                </div>

                    <!-- audio post formate -->
                    <?php elseif (has_post_format('audio')): ?>

                                <?php echo do_shortcode  (get_post_meta( $post->ID, 'post-audio-code', true )); ?>
                   

                     <!-- standard post -->
                    <?php endif; ?>

                                 <?php if ( has_post_thumbnail()) : ?>
                                 <div class="single-post-thumb-image">                              
                                     <img src="<?php print  portfolio_thumbnail_url($post->ID) ?>" alt="<?php the_title_attribute(); ?>">
                                 </div> 
                                <?php endif; ?>   




                                                
                    <?php the_content(''); ?>

                    <div class="post-tags"><!--h3>Tags: </h3--> 

                     <?php $tag = get_the_tags(); if (! $tag) { ?>  There is no tags<?php } else { ?> <?php  the_tags('<ul class="tag-cloud"><li>','</li><li>','</li></ul>'); ?>  <?php } ?></div>
            <?php endwhile; endif; ?>
            <hr />
            <?php comments_template( '', true ); ?>      
      </div>
    </div>
</section>  


<?php get_footer();?>