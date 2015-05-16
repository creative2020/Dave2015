<?php

//Theme main functional file 
require_once (TEMPLATEPATH . '/functions/theme-metro.php');
//admin notice
function my_admin_notice(){
    global $pagenow;
    if ( $pagenow == 'nav-menus.php' ) {
         echo '<div class="updated">
             <h2>How to make One Page Link ??</h2>
             <p>Add new menu with <strong>Links</strong> , Put your URL like  Example:  http://yourdomain.com/#slug </p>
             <p>You need use your url and page slug</p>
 			 <p>Also you can add standard link for multipage version  As Usual System </p>
         </div>';
    }
}
add_action('admin_notices', 'my_admin_notice');


//Colorization & Fonts
add_action('wp_head', 'nature_customization');
if(! function_exists('nature_customization'))
{
	function nature_customization() {

		//Enable Customizer 
		if( cs_get_option( 'mt_enable_customizer' ) == 1)
		{
			//Body Typography
			$mt_typo_body = cs_get_option( 'mt_typo_body' );
			//Body Font Size			
			$mt_typo_body_font_size = cs_get_option( 'mt_typo_body_font_size' );
			//Heading 
			$mt_typo_heading = cs_get_option( 'mt_typo_heading' );

			
			//Heading Font Size 
			$mt_typo_h1_font_size = cs_get_option( 'mt_typo_h1_font_size' );
			$mt_typo_h2_font_size = cs_get_option( 'mt_typo_h2_font_size' );
			$mt_typo_h3_font_size = cs_get_option( 'mt_typo_h3_font_size' );
			$mt_typo_h4_font_size = cs_get_option( 'mt_typo_h4_font_size' );
			$mt_typo_h5_font_size = cs_get_option( 'mt_typo_h5_font_size' );
			$mt_typo_h6_font_size = cs_get_option( 'mt_typo_h6_font_size' );


			//Load Font
				echo '<link id="'.$mt_typo_body['family'].'" href="http://fonts.googleapis.com/css?family='.$mt_typo_body['family'].':'.$mt_typo_body['variant'].'" rel="stylesheet" type="text/css" />';
				echo '<link id="'.$mt_typo_heading['family'].'" href="http://fonts.googleapis.com/css?family='.$mt_typo_heading['family'].':'.$mt_typo_heading['variant'].'" rel="stylesheet" type="text/css" />';


			//Stylesheet
				echo "\n<style type='text/css'> \n";

					echo '
						body {font-size:'.$mt_typo_body_font_size.'px; font-family: \'' . str_replace('+', ' ', $mt_typo_body['family']) . '\',Helvetica Neue,Helvetica,sans-serif;}

						h1, h2, h3, h4, h5, h6 {
    						font-family: \'' . str_replace('+', ' ', $mt_typo_heading['family']) . '\',Helvetica Neue,Helvetica,sans-serif;
						}

						h1,
						.h1 {
						  font-size: '.$mt_typo_h1_font_size.'px;
						}

						h2,
						.h2 {
						  font-size: '.$mt_typo_h2_font_size.'px;
						}

						h3,
						.h3 {
						  font-size: '.$mt_typo_h3_font_size.'px;
						}

						h4,
						.h4 {
						  font-size: '.$mt_typo_h4_font_size.'px;
						}

						h5,
						.h5 {
						  font-size: '.$mt_typo_h5_font_size.'px;
						}

						h6,
						.h6 {
						  font-size: '.$mt_typo_h6_font_size.'px;
						}

					';
				echo '</style>';

		}

	}
}


/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname(__FILE__) . '/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'me_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function me_theme_register_required_plugins() {
 
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
 
 		array(
			'name'     				=> 'icpo', // The plugin name
			'slug'     				=> 'icpo', // The plugin slug (typically the folder name)
			'source'   				=> get_stylesheet_directory() . '/inc/plugins/icpo.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
		),
 
 		array(
			'name'     				=> 'MD Settings', // The plugin name
			'slug'     				=> 'md-settings', // The plugin slug (typically the folder name)
			'source'   				=> get_stylesheet_directory() . '/inc/plugins/md-settings.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
		),
 
         array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => true,
            'force_activation' 		=> true,
            'force_deactivation' 	=> false, 
        ),


/*
        // This is an example of how to include a plugin pre-packaged with a theme.
        array(
            'name'               => 'TGM Example Plugin', // The plugin name.
            'slug'               => 'tgm-example-plugin', // The plugin slug (typically the folder name).
            'source'             => get_stylesheet_directory() . '/lib/plugins/tgm-example-plugin.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        ),
 
        // This is an example of how to include a plugin from a private repo in your theme.
        array(
            'name'               => 'TGM New Media Plugin', // The plugin name.
            'slug'               => 'tgm-new-media-plugin', // The plugin slug (typically the folder name).
            'source'             => 'https://s3.amazonaws.com/tgm/tgm-new-media-plugin.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'external_url'       => 'https://github.com/thomasgriffin/New-Media-Image-Uploader', // If set, overrides default API URL and points to an external URL.
        ),
 
*/
 
 
    );
 
/**
* Array of configuration settings. Amend each line as needed.
* If you want the default strings to be available under your own theme domain,
* leave the strings uncommented.
* Some of the strings are added into a sprintf, so see the comments at the
* end of each line for what each argument will be.
*/
		$config = array(
			'default_path' => '', // Default absolute path to pre-packaged plugins.
			'menu' => 'tgmpa-install-plugins', // Menu slug.
			'has_notices' => true, // Show admin notices or not.
			'dismissable' => true, // If false, a user cannot dismiss the nag message.
			'dismiss_msg' => '', // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false, // Automatically activate plugins after installation or not.
			'message' => '', // Message to output right before the plugins table.
			'strings' => array(
			'page_title' => __( 'Install Required Plugins', 'tgmpa' ),
			'menu_title' => __( 'Install Plugins', 'tgmpa' ),
			'installing' => __( 'Installing Plugin: %s', 'tgmpa' ), // %s = plugin name.
			'oops' => __( 'Something went wrong with the plugin API.', 'tgmpa' ),
			'notice_can_install_required' => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s).
			'notice_can_install_recommended' => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s).
			'notice_cannot_install' => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s).
			'notice_can_activate_required' => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
			'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
			'notice_cannot_activate' => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s).
			'notice_ask_to_update' => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s).
			'notice_cannot_update' => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s).
			'install_link' => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
			'activate_link' => _n_noop( 'Begin activating plugin', 'Begin activating plugins' ),
			'return' => __( 'Return to Required Plugins Installer', 'tgmpa' ),
			'plugin_activated' => __( 'Plugin activated successfully.', 'tgmpa' ),
			'complete' => __( 'All plugins installed and activated successfully. %s', 'tgmpa' ), // %s = dashboard link.
			'nag_type' => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
		)
	);
	tgmpa( $plugins, $config );
}
 






