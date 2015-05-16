 <?php global $bub_mt; ?>

<!-- Footer -->
			<footer>

			<?php
				if(cs_get_option( 'mt_enable_twitter_feed' ) == 1)
					{
			?>
		        <div class="twitter-feed-section">
		            <div class="container">
		                <div class="row">
		                    <div class="col-md-12">
		                        <div class="twt-icon">
		                            <i class="fa fa-twitter"></i>
		                        </div><!-- end .twt-icon -->

		                        <div class="twt-feed">
									<div id="tweet-sroll-wrapper" class="clearfix">
									     <div class="tweets-list-container"></div>
									</div><!-- end #tweet-scroll-wrapper -->
								</div><!-- end .twt-feed -->
		                    </div><!-- end .col-md-12 -->
		                </div><!-- end .row -->
		            </div><!-- end .container -->
		        </div><!-- end .twitter-feed-section -->
			<?php 
					}
			?>

		        <div class="footer-widgets">
		            <div class="container">
		                <div class="row">

		                	<!-- Footer Left Widget -->
		                    <div class="col-md-4 col-xs-12">
			                    <?php if(!dynamic_sidebar("footer-left")){?>
			                        <h4><?php _e("Recent Posts","applause");?></h4>
			                        <?php
			                        $mt_recent_posts =mt_get_recent_posts();
			                        foreach($mt_recent_posts as $mtp){
			                            setup_postdata($mtp);
			                            if(has_post_thumbnail($mtp->ID))
			                            $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($mtp->ID));
			                        ?>
			                            <div class="recent-post-item">
			                                <div class="recent-post-item-img">
			                                    <?php if(has_post_thumbnail($mtp->ID)){?>
			                                        <a href='#'><img src='<?php echo $post_thumbnail[0]; ?>' alt=''/></a>
			                                    <?php } else { ?>
			                                        <a href='#'><img src='http://placehold.it/150x150' alt=''/></a>
			                                    <?php } ?>
			                                </div>
			                                <div class="recent-post-item-des">
			                                    <h5><a href="<?php echo get_the_permalink($mtp->ID);?>"><?php echo $mtp->post_title;?></a></h5>
			                                    <span><?php echo mt_string_truncate(get_the_excerpt(),50," ");?></span>
			                                </div>
			                            </div>
			                        <?php
			                        }
			                        wp_reset_postdata();
			                        ?>
			                    <?php } ?>
		                    </div><!-- end .col-md-4 col-xs-12 -->

		                    <!-- Footer Middle Widget -->
		                    <div class="col-md-4 col-xs-12">
			                    <?php if(!dynamic_sidebar("footer-middle")) {?>
			                    <h4><?php _e("Tag Cloud","applause");?></h4>
			                    <?php
			                        $mt_tag_cloud = wp_tag_cloud(array("format"=>"list","echo"=>false));
			                        $mt_tag_cloud = str_replace("wp-tag-cloud","tag-cloud",$mt_tag_cloud);
			                        echo $mt_tag_cloud;
			                    ?>
			                    <?php } ?>
		                    </div><!-- end .col-md-4 col-xs-12 -->
							
							<!-- Footer Middle Right -->
		                    <div class="col-md-4 col-xs-12">
			                    <?php if(!dynamic_sidebar("footer-right")){?>
			                    <h4><?php _e("Flickr Photo","applause");?></h4>
			                    <ul id="nocallback" class="my-flickr flickrgrid">
			                    </ul>
			                    <?php } ?>	
		                    </div><!-- end .col-md-4 col-xs-12 -->

		                </div><!-- end .row -->
		            </div><!-- end .container -->		        	
		        </div><!-- end .footer-widgets -->

		        <div class="footer-bottom">
		        	<div class="container">
		        		<div class="row">

				  			<div class="col-md-6 col-xs-12">
		                        <p class="copyright">&copy; <?php echo cs_get_option( 'mt_footer_copyright' );?></p>
		                    </div><!-- end .col-md-6 col-xs-12 -->
				  			<div class="col-md-6 col-xs-12">
								<?php echo metro_social_links();?>	                        
		                    </div><!-- end .col-md-6 col-xs-12 -->
		        		</div><!-- end .row -->
		        	</div><!-- end .container -->
		        </div><!-- end .footer-bottom -->
			</footer>
<!-- Footer end -->

<!-- Scroll Top -->
  <a class="scroll-top" href="#" title="Scroll to top"><i class="fa fa-chevron-up"></i></a>
  
 <?php wp_footer(); ?>
  </body>
</html>