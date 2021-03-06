        <!-- Standard .masonry-post -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>        
                <div class="masonry-post">
                    <div class="masonry-post-img">
                         <?php if ( has_post_thumbnail()) : ?>                               
                         <?php print  the_post_thumbnail( 'full' ); ?>
                        <?php endif; ?>                        
                    </div><!-- End .masonry-post-img -->

                    <div class="masonry-post-title"><h4><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h4></div>
                    <p class="masonry-post-meta">By <a class="masonry-author"><?php the_author(); ?></a> | <?php echo get_the_date('d M y'); ?></p>
                    <div class="masonry-post-content">
                        <?php the_excerpt(); ?> 
                    </div><!-- End .masonry-post-content -->
                    <div class="masonry-post-more clearfix">
                        <a href="<?php the_permalink() ?>" class="pull-left"><i class="fa fa-comments"></i> <?php comments_number( '0 Comment', '1 Comment', '% Comment' ); ?></a>
                        <a href="<?php the_permalink() ?>" class="pull-right"><i class="fa fa-long-arrow-right"></i></a>
                    </div><!-- End .masonry-post-more .clearfix -->
                </div>
</div>
        <!-- End .masonry-post -->


