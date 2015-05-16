<?php
/*
Plugin Name: MD Theme Helper Plugin
Description: This plugin for MD – Multipurpose Resume & Portfolio WordPress Theme To Eanble Custom Post Type and Shortcodes
Plugin URI: http://metrothemes.me
Author: Metrothemes
Author URI: http://metrothemes.me
Version: 1.1
*/

// Load Script in frontent
function plugin_mt_scripts() {
  wp_enqueue_script( 'tweetscroll', plugins_url( '/js/tweetscroll/jquery.tweetscroll-min.js', __FILE__ ), array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'plugin_mt_scripts');
 


function plugin_admin_scripts($hook) {

  if( $hook != 'edit.php' && $hook != 'post.php' && $hook != 'post-new.php' ) 
    return;

   wp_enqueue_script( 'qt-js', plugins_url( '/js/qt.js', __FILE__ ),array('quicktags'), false, true);
}
add_action('admin_enqueue_scripts', 'plugin_admin_scripts');



// Internationalization
add_action('init', 'ap_action_init');
	function ap_action_init() {
		load_plugin_textdomain ( 'applause', FALSE, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}


//define plugin url 
define( 'METRO_PLUGIN_URI', trailingslashit(plugin_dir_path(__FILE__)) );


//Included

include( plugin_dir_path( __FILE__ ) . 'cpt/theme-cpt.php' );

include( plugin_dir_path( __FILE__ ) . 'shortcodes/theme-shortcodes.php' );

include( plugin_dir_path( __FILE__ ) . 'bs-shortcodes/bootstrap-shortcodes.php' );
//Custom Js code
if ( ! function_exists( 'md_plugin_js' ) ) {
  function md_plugin_js() { 
    ?>
      <?php if(cs_get_option( 'mt_enable_twitter_feed' ) == 1) { ?>
      <script type="text/javascript">
        jQuery(document).ready(function($) {
          //Twitter
            $('.tweets-list-container').tweetscroll({ 
              username: '<?php echo cs_get_option( 'mt_twitter_username' );?>', 
              time: false, 
              visible_tweets: 1,
              limit: <?php echo cs_get_option( 'mt_twitter_limit' );?>,
              speed : <?php echo cs_get_option( 'mt_twitter_speed' );?>,
              delay: <?php echo cs_get_option( 'mt_twitter_delay' );?>,
              replies: true, 
              position: 'append', 
              date_format: 'style2',
              request_url: '<?php echo plugins_url( '/js/tweetscroll/twitter/tweets.php', __FILE__ );?>', 
              animation: 'slide_up', 
            });
          });
      </script>
      <?php } ?> 
<?php
  } 
} // End if
add_action('wp_footer', 'md_plugin_js'); 