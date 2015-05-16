<?php
/**
*
* Theme Functions 
*
*/

/*
if ( ! function_exists( 'function_name' ) ) {
	
	function function_name() { ?>
	
	<?php	
	} // End function
	
} // End if

*/


// ------------------------------
// Social Network               -
// ------------------------------

// echo metro_social_links();

if ( ! function_exists( 'metro_social_links' ) ) {
	
	function metro_social_links() { ?>
			
         <ul class="social">

         	<?php if(cs_get_option( 'mts_facebook' ) != '') { ?>
			<li><a class="facebook" href="<?php echo cs_get_option( 'mts_facebook' ); ?>"></a></li>
			<?php } ?> 

			<?php if(cs_get_option( 'mts_twitter' ) != '') { ?>
			<li><a class="twitter" href="<?php echo cs_get_option( 'mts_twitter' ); ?>"></a></li>
			<?php } ?>
			
			<?php if(cs_get_option( 'mts_linkedin' ) != '') { ?>
			<li><a class="linkedin" href="<?php echo cs_get_option( 'mts_linkedin' ); ?>"></a></li>
			<?php } ?>

			<?php if(cs_get_option( 'mts_google' ) != '') { ?>
			<li><a class="google" href="<?php echo cs_get_option( 'mts_google' ); ?>"></a></li>
			<?php } ?>

			<?php if(cs_get_option( 'mts_vimeo' ) != '') { ?>
			<li><a class="vimeo" href="<?php echo cs_get_option( 'mts_vimeo' ); ?>"></a></li>
			<?php } ?>

			<?php if(cs_get_option( 'mts_github' ) != '') { ?>
			<li><a class="github" href="<?php echo cs_get_option( 'mts_github' ); ?>"></a></li>
			<?php } ?>

			<?php if(cs_get_option( 'mts_behance' ) != '') { ?>
			<li><a class="behance" href="<?php echo cs_get_option( 'mts_behance' ); ?>"></a></li>
			<?php } ?>

			<?php if(cs_get_option( 'mts_dribbble' ) != '') { ?>
			<li><a class="dribble" href="<?php echo cs_get_option( 'mts_dribbble' ); ?>"></a></li>
			<?php } ?>	

			<?php if(cs_get_option( 'mts_instagram' ) != '') { ?>			
			<li><a class="instagram" href="<?php echo cs_get_option( 'mts_instagram' ); ?>"></a></li>
			<?php } ?>	

			<?php if(cs_get_option( 'mts_lastfm' ) != '') { ?>				
			<li><a class="lastfm" href="<?php echo cs_get_option( 'mts_lastfm' ); ?>"></a></li>
			<?php } ?>	

			<?php if(cs_get_option( 'mts_rss' ) != '') { ?>			
			<li><a class="rss" href="<?php echo cs_get_option( 'mts_rss' ); ?>"></a></li>
			<?php } ?>	

			<?php if(cs_get_option( 'mts_pinterest' ) != '') { ?>				
			<li><a class="pinterest" href="<?php echo cs_get_option( 'mts_pinterest' ); ?>"></a></li>
			<?php } ?>	

			<?php if(cs_get_option( 'mts_skype' ) != '') { ?>			
			<li><a class="skype" href="<?php echo cs_get_option( 'mts_skype' ); ?>"></a></li>
			<?php } ?>	

			<?php if(cs_get_option( 'mts_picassa' ) != '') { ?>				
			<li><a class="picassa" href="<?php echo cs_get_option( 'mts_picassa' ); ?>"></a></li>
			<?php } ?>		

			<?php if(cs_get_option( 'mts_youtube' ) != '') { ?>				
			<li><a class="youtube" href="<?php echo cs_get_option( 'mts_youtube' ); ?>"></a></li>
			<?php } ?>			

			<?php if(cs_get_option( 'mts_flickr' ) != '') { ?>			
			<li><a class="flickr" href="<?php echo cs_get_option( 'mts_flickr' ); ?>"></a></li>
			<?php } ?>	

			<?php if(cs_get_option( 'mts_tumblr' ) != '') { ?>					
			<li><a class="tumblr" href="<?php echo cs_get_option( 'mts_tumblr' ); ?>"></a></li>
			<?php } ?>

			<?php if(cs_get_option( 'mts_blogger' ) != '') { ?>				
			<li><a class="blogger" href="<?php echo cs_get_option( 'mts_blogger' ); ?>"></a></li>
			<?php } ?>	

			<?php if(cs_get_option( 'mts_delicious' ) != '') { ?>					
			<li><a class="delicious" href="<?php echo cs_get_option( 'mts_delicious' ); ?>"></a></li>
			<?php } ?>

			<?php if(cs_get_option( 'mts_digg' ) != '') { ?>			
			<li><a class="digg" href="<?php echo cs_get_option( 'mts_digg' ); ?>"></a></li>
			<?php } ?>			

			<?php if(cs_get_option( 'mts_friendfeed' ) != '') { ?>
			<li><a class="friendfeed" href="<?php echo cs_get_option( 'mts_friendfeed' ); ?>"></a></li>
			<?php } ?>	

			<?php if(cs_get_option( 'mts_wordpress' ) != '') { ?>					
			<li><a class="wordpress" href="<?php echo cs_get_option( 'mts_wordpress' ); ?>"></a></li>
			<?php } ?>

		</ul>
			
	<?php		
	} // End function
	
} // End if


// ------------------------------
// Custom Css                   -
// ------------------------------

if ( ! function_exists( 'metrothemes_custom_css' ) ) {
	
	function metrothemes_custom_css() { 

		?>

		<!-- Home Style -->
			<style type="text/css">
				#home{
		    		background-image: url('<?php echo cs_get_option( 'mt_home_background_image' );?>');
		    	}

				.home-overlay , .home-overlay-v2 {
				    background-color:<?php echo cs_get_option( 'mt_home_background_color' );?>;
				}

			</style>


		<?php	

			
		$custom_css ='';		

		if ( cs_get_option( 'mt_custom_css' ) !== '' ) {
			$custom_css .= cs_get_option( 'mt_custom_css' );
		}
		
		// trim white space for faster page loading
		$custom_css_trimmed =  preg_replace( '/\s+/', ' ', $custom_css );
		
		// output css on front end
		$css_output = "<!-- Custom CSS -->\n<style type=\"text/css\">\n" . $custom_css_trimmed . "\n</style>";
		if( !empty($custom_css) ) {
			echo $css_output;
		}
		


	} // End function
	
} // End if
add_action('wp_head', 'metrothemes_custom_css');				           


// ------------------------------
// Custom Js                  	-
// ------------------------------

if ( ! function_exists( 'metrothemes_custom_js' ) ) {
	
	function metrothemes_custom_js() { 

		?>

			<?php if(cs_get_option( 'mt_getin_touch_google_map' ) != '') { ?>	
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$('#gmap').gmap3({
					    marker:{address:"<?php echo cs_get_option( 'mt_getin_touch_google_map' );?>", options:{icon: "<?php echo get_template_directory_uri(); ?>/img/location1.png"}},
					    map:{
					        options:{
					        zoom: 14,
					        scrollwheel: false
					                }
					        }
					});
				});
			</script>
			<?php } ?>

			<!-- Flickr Feed Script -->
			<?php if(cs_get_option( 'mt_flickr_id' ) != '') { ?>	
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$('#nocallback').jflickrfeed({
						limit: <?php echo cs_get_option( 'mt_flickr_limit' );?>,
						qstrings: {
							id: '<?php echo cs_get_option( 'mt_flickr_id' );?>'
						},
						itemTemplate: 
						'<li>' +
							'<a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a>' +
						'</li>'
					});
				});
			</script>
			<?php } ?>


		<?php

			//Custom Javascript codes
			$custom_js ='';		

			if ( cs_get_option( 'mt_custom_js' ) !== '' ) {
				$custom_js .= cs_get_option( 'mt_custom_js' );
			}
			
			// trim white space for faster page loading
			$custom_js_trimmed =  preg_replace( '/\s+/', ' ', $custom_js );
			
			// output js on front end
			$js_output = "<!-- Custom Javascript -->\n<script type=\"text/javascript\">\n" . $custom_js_trimmed . "\n</script>";
			if( !empty($custom_js) ) {
				echo $js_output;
			}
			


	} // End function
	
} // End if
add_action('wp_footer', 'metrothemes_custom_js', 10);		


// ------------------------------
// Add Items To Header          -
// ------------------------------


if ( ! function_exists( 'metro_add_header' ) ) {
	
	function metro_add_header() { ?>

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo cs_get_option( 'mt_favicon' );?>" />

	<?php	
	} // End function
	
} // End if
add_action('wp_head', 'metro_add_header');	



// ------------------------------
// Theme Color Skin          -
// ------------------------------

if(! function_exists('theme_mt_styles_chosse')){
		function theme_mt_styles_chosse(){


			if(cs_get_option( 'mt_theme_style' ) == 1){	
				wp_enqueue_style('red_style', get_template_directory_uri().'/css/colors/color-red.css ', false, false, 'all');    
			}


			if(cs_get_option( 'mt_theme_style' ) == 2){
				wp_enqueue_style('green_style', get_template_directory_uri().'/css/colors/color-green.css ', false, false, 'all');  
			}


			if(cs_get_option( 'mt_theme_style' ) == 3){
				wp_enqueue_style('purple_style', get_template_directory_uri().'/css/colors/color-purple.css ', false, false, 'all');     
			}


			if(cs_get_option( 'mt_theme_style' ) == 4){
				wp_enqueue_style('blue_style', get_template_directory_uri().'/css/colors/color-blue.css ', false, false, 'all');  
			}


			if(cs_get_option( 'mt_theme_style' ) == 5){
				wp_enqueue_style('turquoise_style', get_template_directory_uri().'/css/colors/color-turquoise.css ', false, false, 'all'); 
			}


			if(cs_get_option( 'mt_theme_style' ) == 6){
				wp_enqueue_style('sun-flower_style', get_template_directory_uri().'/css/colors/color-sun-flower.css ', false, false, 'all');   
			}


			if(cs_get_option( 'mt_theme_style' ) == 7){
				wp_enqueue_style('orange_style', get_template_directory_uri().'/css/colors/color-orange.css ', false, false, 'all');  			
			}


			if(cs_get_option( 'mt_theme_style' ) == 8){
				wp_enqueue_style('emerald_style', get_template_directory_uri().'/css/colors/color-emerald.css ', false, false, 'all'); 				  
			}

		}
	}
add_action('wp_enqueue_scripts', 'theme_mt_styles_chosse');


// ------------------------------
// Custom Font Icon         -
// ------------------------------

function mt_own_icons () {

  $title  = 'Fontello Icons';
  $icons  = array( 
		'icon-picture',
		'icon-paper-plane-1',
		'icon-info',
		'icon-home',
		'icon-link',
		'icon-attach',
		'icon-pin',
		'icon-tag',
		'icon-tag-empty',
		'icon-quote-left',
		'icon-quote-right',
		'icon-pencil',
		'icon-pencil-neg',
		'icon-comment',
		'icon-comment-inv',
		'icon-comment-alt',
		'icon-comment-inv-alt',
		'icon-comment-alt2',
		'icon-comment-inv-alt2',
		'icon-chat',
		'icon-chat-inv',
		'icon-location',
		'icon-location-inv',
		'icon-location-alt',
		'icon-compass',
		'icon-doc',
		'icon-doc-inv',
		'icon-doc-alt',
		'icon-doc-inv-alt',
		'icon-book-open',
		'icon-cog',
		'icon-share',
		'icon-mic',
		'icon-headphones',
		'icon-clock',
		'icon-lamp',
		'icon-resize-full',
		'icon-resize-full-alt',
		'icon-resize-small',
		'icon-resize-small-alt',
		'icon-play',
		'icon-play-circle2',
		'icon-stop',
		'icon-pause',
		'icon-award',
		'icon-award-empty',
		'icon-mobile',
		'icon-cd',
		'icon-equalizer',
		'icon-aperture',
		'icon-aperture-alt',
		'icon-book',
		'icon-book-alt',
		'icon-brush',
		'icon-brush-alt',
		'icon-layers',
		'icon-layers-alt',
		'icon-flash',
		'icon-chart-bar',
		'icon-chart-pie',
		'icon-key',
		'icon-key-inv',
		'icon-hash',
		'icon-at',
		'icon-pilcrow',
		'icon-doc-1',
		'icon-article-alt',
		'icon-volume-off',
		'icon-volume-down',
		'icon-volume-up',
		'icon-award-1',
		'icon-tablet',
		'icon-cd-1',
		'icon-book-1',
		'icon-easel',
		'icon-globe',
		'icon-dollar',
		'icon-camera-1',
		'icon-home-1',
		'icon-left-open',
		'icon-right-open',
		'icon-trophy',
		'icon-flash-1',
		'icon-cloud',
		'icon-paper-plane',
		'icon-fontsize',
		'icon-color-adjust',
		'icon-vector-pencil',
		'icon-spread',
		'icon-art-gallery',
		'icon-bicycle',
		'icon-cafe',
		'icon-college',
		'icon-embassy',
		'icon-fast-food',
		'icon-duckduckgo',
		'icon-aim',
		'icon-delicious',
		'icon-paypal',
		'icon-flattr',
		'icon-android',
		'icon-eventful',
		'icon-smashmag',
		'icon-gplus',
		'icon-wikipedia',
		'icon-lanyrd',
		'icon-calendar',
		'icon-stumbleupon',
		'icon-fivehundredpx',
		'icon-pinterest',
		'icon-bitcoin',
		'icon-w3c',
		'icon-foursquare',
		'icon-html5',
		'icon-ie',
		'icon-camera',
		'icon-grooveshark',
		'icon-ninetyninedesigns',
		'icon-forrst',
		'icon-digg',
		'icon-spotify',
		'icon-reddit',
		'icon-guest',
		'icon-gowalla',
		'icon-appstore',
		'icon-blogger',
		'icon-cc',
		'icon-dribbble',
		'icon-evernote',
		'icon-flickr',
		'icon-google',
		'icon-viadeo',
		'icon-instapaper',
		'icon-weibo',
		'icon-klout',
		'icon-linkedin',
		'icon-meetup',
		'icon-vk',
		'icon-plancast',
		'icon-disqus',
		'icon-rss',
		'icon-skype',
		'icon-twitter',
		'icon-youtube',
		'icon-vimeo',
		'icon-windows',
		'icon-xing',
		'icon-yahoo',
		'icon-chrome',
		'icon-email',
		'icon-macstore',
		'icon-myspace',
		'icon-podcast',
		'icon-amazon',
		'icon-steam',
		'icon-cloudapp',
		'icon-dropbox',
		'icon-ebay',
		'icon-facebook',
		'icon-github',
		'icon-github-circled',
		'icon-googleplay',
		'icon-itunes',
		'icon-plurk',
		'icon-songkick',
		'icon-lastfm',
		'icon-gmail',
		'icon-pinboard',
		'icon-openid',
		'icon-quora',
		'icon-soundcloud',
		'icon-tumblr',
		'icon-eventasaurus',
		'icon-wordpress',
		'icon-yelp',
		'icon-intensedebate',
		'icon-eventbrite',
		'icon-scribd',
		'icon-posterous',
		'icon-stripe',
		'icon-opentable',
		'icon-cart',
		'icon-print',
		'icon-angellist',
		'icon-instagram',
		'icon-dwolla',
		'icon-appnet',
		'icon-statusnet',
		'icon-acrobat',
		'icon-drupal',
		'icon-buffer',
		'icon-pocket',
		'icon-bitbucket',
		'icon-lego',
		'icon-login',
		'icon-stackoverflow',
		'icon-hackernews',
		'icon-lkdto',
		'icon-jabber',
		'icon-picasa',
		'icon-instagram-1',
		'icon-instagram-filled',
		'icon-camera-2',
		'icon-home-2',
		'icon-phone',
		'icon-cog-1',
		'icon-lightbulb',
		'icon-play-1',
		'icon-play-circled',
		'icon-play-circled2',
		'icon-stop-1',
		'icon-stop-circled',
		'icon-pause-1',
		'icon-pause-circled',
		'icon-desktop',
		'icon-laptop',
		'icon-globe-1',
		'icon-leaf',
		'icon-qrcode',
		'icon-book-2',
		'icon-gauge',
		'icon-address-book',
		'icon-person',
		'icon-adult',
		'icon-child',
		'icon-behance',
		'icon-css',
		'icon-friendfeed',
		'icon-slideshare',
		'icon-call'
   );  // add your icons

  echo '<h4 class="cs-icon-title">'. $title .'</h4>';
  foreach ( $icons as $icon ) {
    echo '<a class="cs-icon-tooltip" data-icon="'. $icon .'" data-title="'. $icon .'">';
    echo '<span class="cs-icon cs-selector"><i class="'. $icon .'"></i></span>';
    echo '</a>';
   }

}
add_action( 'cs_add_icons', 'mt_own_icons' );

// adding icons css file
// you know this. you need to include your icon css for admin panel also theme
function my_custom_icon_css() {
  wp_enqueue_style( 'my-custom-icon', get_template_directory_uri().'/css/fontello/css/fontello.css', array(), '1.0.0', 'all' );
}
add_action( 'admin_print_styles', 'my_custom_icon_css' );
add_action( 'wp_print_styles', 'my_custom_icon_css' );





?>