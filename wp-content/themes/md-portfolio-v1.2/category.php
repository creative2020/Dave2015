<?php
global $bub_mt;
get_header('mt');
?>
<!-- Section : Blog -->
                <section class="section">
                    <div class="container">

                        <div class="section-title">
                            <h2><?php printf( __( 'Category Archives: %s', 'applause'), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h2>
                            <span class="border"></span>
                        </div><!-- end .section-title -->

                        
                        <div class="row">
                            <div class="blog-post-holder">

                            <?php if ( !is_archive() ) { ?>
                            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts('paged='.$paged.'&cat='.$cat); ?>     
                            <?php } ?> 
                            <?php if (!(have_posts())) { ?><div class="span12"><h2 class="colored">There is no posts</h2></div><?php }  ?>   
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
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
                            
                            <?php endwhile; endif; ?>
                            <?php wp_link_pages(); ?>

                            </div><!-- End .masonry-container -->

                                    <?php get_template_part ('inc/pagination'); ?>

                        </div><!-- End .row -->



                    </div><!-- end .container -->
                </section>
<!-- Section : Blog end-->
<?php get_footer();?>