<?php
global $bub_mt;
get_header('mt');
?>

    <section class="portfolio-single">
        <div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

			     <!-- Image Type -->
			     <?php
					$meta_data = get_post_meta( get_the_ID(), 'mt_portfolio_options', true );
				 	if(isset($meta_data['mt_portfolio_type']) && $meta_data['mt_portfolio_type'] == 'images'): 
			     ?>

		            <div class="row">
		                <div class="col-xs-6">
		                    <h3><?php the_title(); ?></h3>

							<?php the_content(''); ?>

		                    <hr>

		                	<?php  
								$meta_data = get_post_meta( get_the_ID(), 'mt_portfolio_options', true );
			                    echo'<ul class="item-meta">';
									if(isset($meta_data['mt_p_client_name']) && $meta_data['mt_p_client_name'] != ''):
			                    		echo'<li><strong>Client - </strong>'.$meta_data['mt_p_client_name'].'</li>';
									endif; 
									if(isset($meta_data['mt_p_date']) && $meta_data['mt_p_date'] != ''):
			                        	echo'<li><strong>Date - </strong>'.$meta_data['mt_p_date'].'</li>';
									endif; 
									if(isset($meta_data['mt_p_checklist']) && $meta_data['mt_p_checklist'] != ''):
			                        	echo'<li><strong>Skills/Tools Used - </strong>'.$meta_data['mt_p_checklist'].'</li>';
									endif; 
			                    echo'</ul>';
								if(isset($meta_data['mt_p_url']) && $meta_data['mt_p_url'] != ''):
				                    echo'<a href="'.$meta_data['mt_p_url'].'" class="mt-button large hire-btn" target="_blank">Project link</a>';
								endif; 
		                    ?>

		                </div><!-- End .col-xs-6 --> 
		                <div class="col-xs-6">
		                    <div class="single-project">
		                    	<?php  
										$meta_data = get_post_meta( get_the_ID(), 'mt_portfolio_options', true );
					                    $MMData = $meta_data['mt_p_type_image'];
					                        foreach ($MMData as $MMable ){
					                            $MMData = $MMable;
										echo '<img class="img-responsive" src="'.$MMData['mt_p_type_image_url'].'" alt="'.$MMData['mt_p_type_image_title'].'">';
		                    			}
		                    	?>
		                    </div><!-- End .single-project -->
		                </div><!-- End .col-xs-6 -->                
		            </div><!-- End .row -->


			  	<?php endif; ?>



			  	<!-- Slider Type -->
			     <?php
					$meta_data = get_post_meta( get_the_ID(), 'mt_portfolio_options', true );
				 	if(isset($meta_data['mt_portfolio_type']) && $meta_data['mt_portfolio_type'] == 'slideshow'): 
			     ?>
		            <div class="row">
		                <div class="col-xs-12">
		                    <h3><?php the_title(); ?></h3>


		                            <div id="blog-carousel" class="owl-carousel owl-theme">
				                    	<?php  
												$meta_data = get_post_meta( get_the_ID(), 'mt_portfolio_options', true );
							                    $MMData = $meta_data['mt_p_type_slide'];
							                        foreach ($MMData as $MMable ){
							                            $MMData = $MMable;
												echo '<div class="item"><img class="img-responsive" src="'.$MMData['mt_p_type_slide_url'].'" alt="'.$MMData['mt_p_type_slide_title'].'"></div> ';
				                    			}
				                    	?>		                            	
		                            </div>
		                    <br><br><br>
		                </div><!-- End .col-xs-12 --> 
		            </div><!-- End .row -->
		            <div class="row">    
		                <div class="col-xs-6">
		                    <?php the_content(''); ?>
		                </div><!-- End .col-xs-6 --> 
		                <div class="col-xs-6">
		                	<?php  
								$meta_data = get_post_meta( get_the_ID(), 'mt_portfolio_options', true );
			                    echo'<ul class="item-meta">';
									if(isset($meta_data['mt_p_client_name']) && $meta_data['mt_p_client_name'] != ''):
			                    		echo'<li><strong>Client - </strong>'.$meta_data['mt_p_client_name'].'</li>';
									endif; 
									if(isset($meta_data['mt_p_date']) && $meta_data['mt_p_date'] != ''):
			                        	echo'<li><strong>Date - </strong>'.$meta_data['mt_p_date'].'</li>';
									endif; 
									if(isset($meta_data['mt_p_checklist']) && $meta_data['mt_p_checklist'] != ''):
			                        	echo'<li><strong>Skills/Tools Used - </strong>'.$meta_data['mt_p_checklist'].'</li>';
									endif; 
			                    echo'</ul>';
								if(isset($meta_data['mt_p_url']) && $meta_data['mt_p_url'] != ''):
				                    echo'<a href="'.$meta_data['mt_p_url'].'" class="mt-button large hire-btn" target="_blank">Project link</a>';
								endif; 
		                    ?>
		                </div><!-- End .col-xs-6 --> 
		            </div><!-- End .row -->


			  	<?php endif; ?>





			  	<!-- Video Type -->
			     <?php
					$meta_data = get_post_meta( get_the_ID(), 'mt_portfolio_options', true );
				 	if(isset($meta_data['mt_portfolio_type']) && $meta_data['mt_portfolio_type'] == 'video'): 
			     ?>
		            <div class="row">
		                <div class="col-xs-12">
		                    <h3><?php the_title(); ?></h3>


		                                <div class="video-holder">
		                                    <?php
		                                    		$meta_data = get_post_meta( get_the_ID(), 'mt_portfolio_options', true );

		                                    		echo $meta_data['mt_p_type_video'];
		                                    ?>
		                                </div><!-- End .video-holder-->   
		                                <br><br><br>


		                </div><!-- End .col-xs-12 --> 
		            </div><!-- End .row -->
		            <div class="row">    
		                <div class="col-xs-6">
		                    <?php the_content(''); ?>
		                </div><!-- End .col-xs-6 --> 
		                <div class="col-xs-6">
		                	<?php  
								$meta_data = get_post_meta( get_the_ID(), 'mt_portfolio_options', true );
			                    echo'<ul class="item-meta">';
									if(isset($meta_data['mt_p_client_name']) && $meta_data['mt_p_client_name'] != ''):
			                    		echo'<li><strong>Client - </strong>'.$meta_data['mt_p_client_name'].'</li>';
									endif; 
									if(isset($meta_data['mt_p_date']) && $meta_data['mt_p_date'] != ''):
			                        	echo'<li><strong>Date - </strong>'.$meta_data['mt_p_date'].'</li>';
									endif; 
									if(isset($meta_data['mt_p_checklist']) && $meta_data['mt_p_checklist'] != ''):
			                        	echo'<li><strong>Skills/Tools Used - </strong>'.$meta_data['mt_p_checklist'].'</li>';
									endif; 
			                    echo'</ul>';
								if(isset($meta_data['mt_p_url']) && $meta_data['mt_p_url'] != ''):
				                    echo'<a href="'.$meta_data['mt_p_url'].'" class="mt-button large hire-btn" target="_blank">Project link</a>';
								endif; 
		                    ?>
		                </div><!-- End .col-xs-6 --> 
		            </div><!-- End .row -->
			  	<?php endif; ?>			  	

			<?php endwhile; endif; ?>
            </div>
        </div>
    </section>

    <!-- more portfolio item -->
    <section class="more-portfolio-item">
        <div class="container">

                <div class="title">
                    <h2><?php _e( 'Some Related Projects', 'Applause') ?></h2>
                </div>

            <div class="row">
			                        <?php
			                        $mt_related_portfolio =mt_get_related_portfolio();
			                        foreach($mt_related_portfolio as $mtp){
			                            setup_postdata($mtp);
			                            if(has_post_thumbnail($mtp->ID))
			                            $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($mtp->ID), 'large');
			                        	$meta_data = get_post_meta( get_the_ID($mtp->ID), 'mt_portfolio_options', true );
			                        ?>

				                        <div class="col-xs-12 col-sm-6 col-md-4 mt webdesign illustration logodesign">
				                            <div class="project-item">
				                                <div class="project-image">
				                                    <a href="<?php echo get_the_permalink($mtp->ID);?>">
				                                        <img src="<?php echo $post_thumbnail[0]; ?>" alt="<?php echo $mtp->post_title;?>" />
				                                        <div class="overlay">
				                                            <div class="details">
				                                                <h2><?php echo $mtp->post_title;?></h2>
				                                                <p><span><?php echo $meta_data['mt_p_client_name'];?></span></p>
				                                            </div>
				                                        </div>
				                                    </a>
				                                </div><!-- end .project-image -->
				                            </div><!-- end .project-item -->
				                        </div><!-- end .col-xs-12 col-sm-6 col-md-4 -->    

			                        <?php
			                        }
			                        wp_reset_postdata();
			                        ?>
                
            </div><!-- End .row --> 
        </div><!-- End .container -->

    </section>
    <!-- more portfolio item -->  

<?php get_footer();?>