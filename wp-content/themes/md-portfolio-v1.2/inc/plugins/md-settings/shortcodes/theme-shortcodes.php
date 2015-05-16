<?php
/*
	SHORTCODES
*/
//
/*--------------------------------------*/
/*    Clean up Shortcodes
/*--------------------------------------*/
function wpex_clean_shortcodes($content){   
    $array = array (
        '<p>[' => '[', 
        ']</p>' => ']', 
        ']<br />' => ']'
    );
    $content = strtr($content, $array);
    return $content;
}
add_filter('the_content', 'wpex_clean_shortcodes');


// -----------------------------------------
// About Style1                            -
// -----------------------------------------
function mt_about_style_one($atts=array()) {
    ob_start();
    mt_about_style_one_show($atts);
    $content = ob_get_clean();
    return $content;
}

function mt_about_style_one_show($atts=array()) {
	require_once(METRO_PLUGIN_URI . 'shortcodes/m-about-style-1.php');
}

add_shortcode('about-style1', 'mt_about_style_one');

// -----------------------------------------
// About Style2                            -
// -----------------------------------------
function mt_about_style_two($atts=array()) {
    ob_start();
    mt_about_style_two_show($atts);
    $content = ob_get_clean();
    return $content;
}

function mt_about_style_two_show($atts=array()) {
	require_once(METRO_PLUGIN_URI . 'shortcodes/m-about-style-2.php');
}

add_shortcode('about-style2', 'mt_about_style_two');



// -----------------------------------------
//  Teams                         -
// -----------------------------------------
function mt_teams($atts){
		extract(shortcode_atts( array(
				"number" => '-1',
			), $atts) );

		$the_query = new WP_Query('post_type=teams&posts_per_page='.$number.'');//$the_query = new WP_Query('post_type=teams&posts_per_page='.$number.'&orderby=title&order=DESC');
		if($the_query->have_posts()) :
		$metro = '	<div class="row"><div id="team-slider" > ';

			while ( $the_query->have_posts() ) : $the_query->the_post();

			$id = get_the_ID();
			$metro_title = get_the_title($id);
			$slug = sanitize_title( get_the_title($id));
			$images = get_post_meta( $id, 'md_image', true );
			$thumbnail = wp_get_attachment_image_src( $images, 'full');
			$name = get_post_meta( $id, 'mb_name', true );
			$job = get_post_meta( $id, 'md_job', true );
			$metro .= '
                        <div class="col-xs-6 col-sm-6 col-md-3">
                        	<div class="team-profile">
                            <div class="team-profile-img">
                                <img src="'.$thumbnail[0].'" class="img-responsive" alt="'.$name.'">
                            </div><!-- End .team-profile-img -->
                            <div class="team-profile-name">
                                <h5>'.$name.'</h5>
                                <div class="divider"></div>
                            </div><!-- End .team-profile-name -->
                            <div class="team-profile-job">
                                <p>'.$job.'</p>
                            </div><!-- End .team-profile-job -->
                            <div class="team-profile-social">
                                <ul>';
			       if($mb_twitter = get_post_meta( $id, 'mb_twitter', true )):
					$metro.= ' <li><a href="'.$mb_twitter.'"><i class="fa fa-twitter"></i></a></li>';
				   endif;
						
			       if($mb_fb = get_post_meta( $id, 'mb_fb', true )):
					$metro.= ' <li><a href="'.$mb_fb.'"><i class="fa fa-facebook"></i></a></li>';
				   endif;

			       if($mb_dribbble = get_post_meta( $id, 'mb_dribbble', true )):
					$metro.= ' <li><a href="'.$mb_dribbble.'"><i class="fa fa-dribbble"></i></a></li>';
				   endif;

			       if($mb_gplus = get_post_meta( $id, 'mb_gplus', true )):
					$metro.= ' <li><a href="'.$mb_gplus.'"><i class="fa fa-google-plus"></i></a></li>';
				   endif;				   				   

			       if($mb_linkedin = get_post_meta( $id, 'mb_linkedin', true )):
					$metro.= ' <li><a href="'.$mb_linkedin.'"><i class="fa fa-linkedin"></i></a></li>';
				   endif;	
												
			$metro .= '
                                </ul>
                            </div><!-- End .team-profile-social -->
                        </div><!-- End .profile -->
                        </div>
			';
				endwhile;wp_reset_postdata();
		        $metro .= ' 	 
					</div></div>
				    ';
				return $metro;
				endif;
}

add_shortcode('teams', 'mt_teams');
	
// -----------------------------------------
//  Milestones                         -
// -----------------------------------------
function m_milestone($atts, $content = null) {
	extract( shortcode_atts( array( ),$atts));
			$metro = '<div class="row count">';		

                    $MMData = cs_get_option( 'mt_milestone' );
                        foreach ($MMData as $MMable ){
                            $MMData = $MMable;

                        $metro .= ' 

								<div class="col-xs-6 col-sm-6 col-md-3 single">
									<div class="total-numbers" data-perc="1300">
										<div class="iconspace"><i class="cicon '.$MMData['mt_milestone_icon'].'"></i></div>									
										<span class="sum">'.$MMData['mt_milestone_number'].'</span>
										 '.$MMData['mt_milestone_text'].'
									</div>
								</div>	

								  ';                                             
                        }

			$metro .= '</div>';
		return $metro;
}
add_shortcode('milestones', 'm_milestone');


// -----------------------------------------
//  Work Process                        -
// -----------------------------------------
function m_wprocess($atts, $content = null) {
	extract( shortcode_atts( array( ),$atts));
			$metro = '<div class="row">';		

                    $WPData = cs_get_option( 'mt_wprocess' );
                        foreach ($WPData as $WPable ){
                            $WPData = $WPable;

                        $metro .= ' 
	             				<div class="col-xs-6 col-sm-4 col-md-2">
	                                <div class="work_process">
	                                    <div class="work_process-box">
	                                        <i class="'.$WPData['mt_wprocess_icon'].'"></i>
	                                        <h4>'.$WPData['mt_wprocess_text'].'</h4>
	                                    </div>
	                                </div>
	                            </div>
								  ';                                             
                        }

			$metro .= '</div>';
		return $metro;
}
add_shortcode('work_process', 'm_wprocess');


// -----------------------------------------
//  Services                      -
// -----------------------------------------
function m_service($atts, $content = null) {
	extract( shortcode_atts( array( ),$atts));
			$metro = '<div class="row">';		

			$metro .= '<div class="col-md-6 left-service">';
                    $SLData = cs_get_option( 'mt_left_service' );
                        foreach ($SLData as $SLable ){
                            $SLData = $SLable;

                        $metro .= ' 

								<div class="service-box">
									<i class="service-icon '.$SLData['mt_left_service_icon'].'"></i>
									<div class="service-content">
										<h3>'.$SLData['mt_left_service_text'].'</h3>
										<p>'.$SLData['mt_left_service_textarea'].'</p>
									</div>
								</div>
								  ';
                        }
            $metro .= '</div>';


			$metro .= '<div class="col-md-6 right-service">';
                    $SRData = cs_get_option( 'mt_right_service' );
                        foreach ($SRData as $SRable ){
                            $SRData = $SRable;

                        $metro .= ' 

								<div class="service-box">
									<i class="service-icon '.$SRData['mt_right_service_icon'].'"></i>
									<div class="service-content">
										<h3>'.$SRData['mt_right_service_text'].'</h3>
										<p>'.$SRData['mt_right_service_textarea'].'</p>
									</div>
								</div>
								  ';
                        }
            $metro .= '</div>';




			$metro .= '</div>';
		return $metro;
}
add_shortcode('services', 'm_service');



// -----------------------------------------
//  Skills                    -
// -----------------------------------------
function m_skill($atts, $content = null) {
	extract( shortcode_atts( array( ),$atts));
			$metro = '<div class="row">';		

                    $SkData = cs_get_option( 'mt_skill' );
                        foreach ($SkData as $Skable ){
                            $SkData = $Skable;

                        $metro .= ' 
							<div class="col-xs-12 col-sm-6 col-md-3 chart-padding">
								<div class="chart" data-percent="'.$SkData['mt_skill_number'].'"><p>'.$SkData['mt_skill_number'].'<sup>%</sup></p></div>
								<div class="skills-content">
									<h3>'.$SkData['mt_skill_text'].'</h3>
									<p>'.$SkData['mt_skill_textarea'].'</p>
								</div>
							</div>        
								  ';                                             
                        }

			$metro .= '</div>';
		return $metro;
}
add_shortcode('skills', 'm_skill');


// -----------------------------------------
//  Testimonials                   -
// -----------------------------------------
function m_testimonial($atts, $content = null) {
	extract( shortcode_atts( array( ),$atts));
			$metro = '<div class="row">';		
			$metro .='<div id="testimonials"  class="owl-carousel owl-theme">';

                    $TMData = cs_get_option( 'mt_testimonials' );
                        foreach ($TMData as $TMable ){
                            $TMData = $TMable;

                        $metro .= ' 
                        				<div class="item">
							                	<div class="box testimonials">
													<img src="'.$TMData['mt_testimonials_avater'].'" alt="'.$TMData['mt_testimonials_text'].'">
													<blockquote>
													<p>'.$TMData['mt_testimonials_textarea'].'</p>
													</blockquote>
									';
											
									if(isset($TMData['mt_testimonials_url']) && $TMData['mt_testimonials_url'] != ''):
										$metro.= '<div class="author">'.$TMData['mt_testimonials_text'].' - <a href="http://'.$TMData['mt_testimonials_url'].'" target="_blank">WebSite</a></div>';
									else :
										$metro.= '<div class="author">'.$TMData['mt_testimonials_text'].' </div>';
									endif; 

						$metro .=' 				
												</div>
										</div>

								  ';                                             
                        }

            $metro .= '</div>';
			$metro .= '</div>';
		return $metro;
}
add_shortcode('testimonials', 'm_testimonial');



// -----------------------------------------
//  Clients Logo                  -
// -----------------------------------------
function m_client_logo($atts, $content = null) {
	extract( shortcode_atts( array( ),$atts));

			$metro = '<div class="row">';		
			$metro .='<ul class="clients_logo">';

                    $CLData = cs_get_option( 'mt_clients_logo' );
                        foreach ($CLData as $CLable ){
                            $CLData = $CLable;

                        $metro .= '
									<li class="col-xs-12 col-sm-4 col-md-3">
										<a href="'.$CLData['mt_clients_logo_url'].'" target="_blank" >
											<img src="'.$CLData['mt_clients_logo_image'].'" alt="'.$CLData['mt_clients_logo_name'].'" class="img-responsive">
										</a>
									</li>                        
									';						                                        
                        }


            $metro .= '</ul>';
			$metro .= '</div>';
		return $metro;
}
add_shortcode('clients_logo', 'm_client_logo');



// -----------------------------------------
//  Work Experience                 -
// -----------------------------------------
function mt_work_experience($atts){
		extract(shortcode_atts( array(), $atts) );

		$metro = '		<div class="row">
							<div class="col-md-12">
								<div class="timeline">
				';

		$mt_timeline_wtitle = cs_get_option( 'mt_wexperience_title' );
		$mt_timeline_wicon = cs_get_option( 'mt_wexperience_icon' );


		$metro .='
									<div class="timeline-category exp-category">
										<a class="large bt-timeline"> '.$mt_timeline_wtitle.' </a>
										<div class="timeline-category-icon">
											<div class="iconspace"><i class=" '.$mt_timeline_wicon.' "></i></div>
										</div>
									</div> 
				';



		$metro .='				<div class="col-md-6 timeline-post-left"> ';

                    $MLWData = cs_get_option( 'mt_left_wexperience' );
                        foreach ($MLWData as $MLWable ){
                            $MLWData = $MLWable;

		$metro .='					<div class="timeline-post">											
											<div class="timeline-post-content-holder">
												<div class="timeline-post-icon"></div>
												<div class="timeline-post-title">
													<h4>'.$MLWData['mt_left_wexperience_title'].'</h4>
												</div>
												<div class="timeline-post-subtitle">
													<p><span>'.$MLWData['mt_left_wexperience_company'].'</span><span class="timeline-duration">'.$MLWData['mt_left_wexperience_duration'].'</span></p>
												</div>
												<div class="timeline-post-content">
													<p>'.$MLWData['mt_left_wexperience_textarea'].'</p>
												</div>
											</div> 						
										</div> 
				';

								}

		$metro .='				</div>';



		$metro .='					<div class="col-md-6 timeline-post-right"> ';

                    $MRWData = cs_get_option( 'mt_right_wexperience' );
                        foreach ($MRWData as $MRWable ){
                            $MRWData = $MRWable; 

		$metro .='						<div class="timeline-post">											
											<div class="timeline-post-content-holder">
												<div class="timeline-post-icon"></div>
												<div class="timeline-post-title">
													<h4>'.$MRWData['mt_right_wexperience_title'].'</h4>
												</div>
												<div class="timeline-post-subtitle">
													<p><span>'.$MRWData['mt_right_wexperience_company'].'</span><span class="timeline-duration">'.$MRWData['mt_right_wexperience_duration'].'</span></p>
												</div>
												<div class="timeline-post-content">
													<p>'.$MRWData['mt_right_wexperience_textarea'].'</p>
												</div>
											</div> 						
										</div> 

				';
							}

		$metro .='					</div> ';


		$metro .='	
									
								</div>
							</div>
						</div>';

			return $metro;

}
add_shortcode('wexperience', 'mt_work_experience');	



// -----------------------------------------
//  Education Experience                 -
// -----------------------------------------
function mt_education_experience($atts){
		extract(shortcode_atts( array(
			), $atts) );

		$metro = '		<div class="row">
							<div class="col-md-12">
								<div class="timeline">
				';

		$mt_timeline_wtitle = cs_get_option( 'mt_eduexperience_title' );
		$mt_timeline_wicon = cs_get_option( 'mt_eduexperience_icon' );


		$metro .='
									<div class="timeline-category exp-category">
										<a class="large bt-timeline"> '.$mt_timeline_wtitle.' </a>
										<div class="timeline-category-icon">
											<div class="iconspace"><i class=" '.$mt_timeline_wicon.' "></i></div>
										</div>
									</div> 
				';



		$metro .='				<div class="col-md-6 timeline-post-left"> ';

                    $MLEData = cs_get_option( 'mt_left_eduexperience' );
                        foreach ($MLEData as $MLEable ){
                            $MLEData = $MLEable;

		$metro .='					<div class="timeline-post">											
											<div class="timeline-post-content-holder">
												<div class="timeline-post-icon"></div>
												<div class="timeline-post-title">
													<h4>'.$MLEData['mt_left_eduexperience_title'].'</h4>
												</div>
												<div class="timeline-post-subtitle">
													<p><span>'.$MLEData['mt_left_eduexperience_company'].'</span><span class="timeline-duration">'.$MLEData['mt_left_eduexperience_duration'].'</span></p>
												</div>
												<div class="timeline-post-content">
													<p>'.$MLEData['mt_left_eduexperience_textarea'].'</p>
												</div>
											</div> 						
										</div> 
				';

								}

		$metro .='				</div>';



		$metro .='					<div class="col-md-6 timeline-post-right"> ';

                    $MREData = cs_get_option( 'mt_right_eduexperience' );
                        foreach ($MREData as $MREable ){
                            $MREData = $MREable; 

		$metro .='						<div class="timeline-post">											
											<div class="timeline-post-content-holder">
												<div class="timeline-post-icon"></div>
												<div class="timeline-post-title">
													<h4>'.$MREData['mt_right_eduexperience_title'].'</h4>
												</div>
												<div class="timeline-post-subtitle">
													<p><span>'.$MREData['mt_right_eduexperience_company'].'</span><span class="timeline-duration">'.$MREData['mt_right_eduexperience_duration'].'</span></p>
												</div>
												<div class="timeline-post-content">
													<p>'.$MREData['mt_right_eduexperience_textarea'].'</p>
												</div>
											</div> 						
										</div> 

				';
							}

		$metro .='					</div> ';


		$metro .='	
									<div class="timeline-end-icon"><span> <i class="fa fa-bookmark"></i></span></div>		
								</div>
							</div>
						</div>';

			return $metro;

}
add_shortcode('eexperience', 'mt_education_experience');		




// -----------------------------------------
//  Portfolio                 -
// -----------------------------------------
function mt_portfolio($atts, $content=null) {
		extract(shortcode_atts( array(), $atts) );
     	$terms = get_terms("tagportifolio");
		$the_query = new WP_Query('post_type=portfolio&posts_per_page=-1&order=ASC');
		if($the_query->have_posts()) :
			
        		$projects = '<div class="row">';

	            $projects .= '<!-- #options -->
	                				<div id="options" class="clearfix">
	                				';

	           	$projects .= '<ul id="filters" class="option-set clearfix" data-option-key="filter">';
	            $projects .= '<li><a href="#filter" data-option-value="*" class="selected">all works</a></li>';	

					$count = count($terms);
			                     if ( $count > 0 ){
			                    
			                        foreach ( $terms as $term ) {
			                            
			                            $termname = strtolower($term->name);
			                            $termname = str_replace(' ', '-', $termname);                               
			                            $projects .='<li><a href="#filter" data-option-value=".'.$termname.'">'.$term->name.'</a></li>';
			         				}
			         }			
        		$projects .= '</ul>'; 
				$projects .= '</div></div> ';

       			$projects .= '	
				            	<div class="row">
				                	<!-- Portfolio container -->
				                    	<div class="portfolio-container">

        					';
                     
				while ( $the_query->have_posts() ) : $the_query->the_post();
				$project_id = get_the_ID();
				$project_title = get_the_title($project_id);
				$terms = get_the_terms( $project_id, 'tagportifolio' );
					if ( $terms && ! is_wp_error( $terms ) ) : 
							$links = array();

							foreach ( $terms as $term ) 
							{
								$links[] = $term->name;
							}
								$links = str_replace(' ', '-', $links);	
								$tax = join( " ", $links );		
								else :	
									$tax = '';	
								endif;
				$projects_classes = strtolower($tax); 
				$thumbnail = get_the_post_thumbnail($project_id, 'portfolio_img');
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
				$meta_data = get_post_meta( get_the_ID(), 'mt_portfolio_options', true );
				$projects .= '
				                        <div class="col-xs-12 col-sm-6 col-md-4 mt '.$projects_classes.'">
				                            <div class="project-item">
				                                <div class="project-image">
				                                    <a href="'.get_permalink().'">
				                                        <img src="'.$large_image_url[0].'" alt="'.$project_title.'" />
				                                        <div class="overlay">
				                                            <div class="details">
				                                                <h2>'.$project_title.'</h2>
				                                                <p><span>'.$meta_data['mt_p_client_name'].'</span></p>
				                                            </div>
				                                        </div>
				                                    </a>
				                                </div><!-- end .project-image -->
				                            </div><!-- end .project-item -->
				                        </div><!-- end .col-xs-12 col-sm-6 col-md-4 -->  
			
				';
				endwhile;wp_reset_postdata();

				$projects .= '
				                    </div><!-- End .portfolio-container -->
				            </div><!-- End .row -->
				
				';

				return $projects;
				endif;
}
add_shortcode('portfolio', 'mt_portfolio');



// -----------------------------------------
//  Pricetable                 -
// -----------------------------------------
function mt_pricetables($atts){
		extract(shortcode_atts( array(
				"title" => 'Education experience',
			), $atts) );

		$the_query = new WP_Query('post_type=pricetable&posts_per_page=-1&order=ASC');
		if($the_query->have_posts()) :
		$metro = '
					<!-- Pricetable-->
						<div class="row">
					';

			while ( $the_query->have_posts() ) : $the_query->the_post();

			$id = get_the_ID();
			$metro_title = get_the_title($id);
			$slug = sanitize_title( get_the_title($id));
			$pk_name = get_post_meta( $id, 'pk_name', true );
			$pk_price = get_post_meta( $id, 'pk_price', true );
			$pk_url = get_post_meta( $id, 'pk_url', true );
			$pk_time = get_post_meta( $id, 'pk_time', true );
			$pk_type = get_post_meta( $id, 'pk_type', true );
			$metro .= '

                       	<!-- single price table -->
                                	<div class="col-xs-12 col-sm-4 col-md-3 price-padding">
                                    		<div class="price-pack text-center clearfix">
                                            	<div class="package-header '.$pk_type.'"><div class="name">'.$pk_name.'</div></div>
                                                <div class="package-price">
                                                	<div class="price">
                                                		<div class="price-value">'.$pk_price.'</div>
                                                		<div class="price-period">'.$pk_time.'</div>
                                                	</div>
                                                </div>
                                               <div class="package-features">
                                                        <ul>';

												$pk_features = get_post_meta( $id, 'pk_features', false );
												foreach ($pk_features as $feature) {
													$metro .= '<li>' . $feature . '</li>';
													}   
                $metro .= '                                            
                                                        </ul>
                                                </div>
                                                <a class="btn large" href="'.$pk_url.'">Sign Up</a>
                                            </div>
                                    </div>                                
						';													
				endwhile ;wp_reset_postdata(); 
		        $metro .= ' 	 

						</div>
						<!-- Pricetable end -->
				    ';
				return $metro;
				endif;
}
add_shortcode('pricetables', 'mt_pricetables');	



// -----------------------------------------
//  Blog                 -
// -----------------------------------------
function mt_blog($atts=array()) {
    ob_start();
    mt_blog_show($atts);
    $content = ob_get_clean();
    return $content;
}

function mt_blog_show($atts=array()) {
	require_once(METRO_PLUGIN_URI . 'shortcodes/m-blog.php');
}

add_shortcode('blog', 'mt_blog');



// -----------------------------------------
//  Contact                 -
// -----------------------------------------
function mt_contact($atts=array()) {
    ob_start();
    mt_contact_show($atts);
    $content = ob_get_clean();
    return $content;
}

function mt_contact_show($atts=array()) {
	require_once(METRO_PLUGIN_URI . 'shortcodes/m-contact.php');
}

add_shortcode('contact', 'mt_contact');




?>