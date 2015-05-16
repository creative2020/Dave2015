<?php
//admin script
function nature_custom_metaboxes_jquery($hook) {
    if( $hook != 'edit.php' && $hook != 'post.php' && $hook != 'post-new.php' ) 
    return;
        wp_enqueue_script('custom_script', get_template_directory_uri().'/inc/metabox/admin.js', array('jquery'));
}
add_action('admin_enqueue_scripts', 'nature_custom_metaboxes_jquery');

//Metaboxes
add_filter( 'cmb_meta_boxes', 'mt_theme_features_meta_box' );
function mt_theme_features_meta_box( $meta_boxes ) {

//$prefix = ''; // Prefix for all fields
  
  //////////////////////////////////////////////////////////////////////////
  ////// CREATE METABOXES FOR POST ///////////////////////////////
  ////////////////////////////////////////////////////////////////////////


//quote_metabox

  $meta_boxes[] = array(
    'id' => 'quote_metabox',
    'title' => __('Quote post options', 'applause'),
    'pages' => array('post'), // post type
    'context' => 'normal',
    'priority' => 'high',
    'show_names' => true, // Show field names on the left
    'fields' => array(

      array(
        'name' => __('Quote', 'applause'),
        'desc' => __('Insert your quote', 'applause'),
        'id' => 'post_quote',
        'type' => 'textarea',
      ),

      array(
        'name' => __('Quote Author', 'applause'),
        'desc' => __('Quote AUthor Name', 'applause'),
        'id' => 'post_quote_author',
        'type' => 'text',
      ),

   )
  );

//video metabox

  $meta_boxes[] = array(
    'id' => 'video_metabox',
    'title' => __('Video post options', 'applause'),
    'pages' =>array('post', 'portfolio'), // post type
    'context' => 'normal',
    'priority' => 'high',
    'show_names' => true, // Show field names on the left
    'fields' => array(

      array(
        'name' => __('Video Embed Code', 'applause'),
        'desc' => __('Insert your video EMbed code from youtube or vimeo ,give width 100%', 'applause'),
        'id' => 'video_code',
        'type' => 'textarea',
      ),


   )
  );

//Gallery metabox 

  $meta_boxes[] = array(
    'id' => 'gallery_metabox',
    'title' => __('Gallery post options', 'applause'),
    'pages' => array('post', 'portfolio'), // post type
    'context' => 'normal',
    'priority' => 'high',
    'show_names' => true, // Show field names on the left
    'fields' => array(

      array(
        'name' => __('Add Gallery Image', 'applause'),
        'desc' => __('Upload Image for Gallery post', 'applause'),
        'id' => 'post-gallery-image',
        'type' => 'image',
        'repeatable' => true,
        'show_size' => true 
      ),


   )
  );

//Audio metabox 

  $meta_boxes[] = array(
    'id' => 'audio_metabox',
    'title' => __('Audio post options', 'applause'),
    'pages' => array('post'), // post type
    'context' => 'normal',
    'priority' => 'high',
    'show_names' => true, // Show field names on the left
    'fields' => array(

      array(
        'name' => __('Audio Shortcode Code', 'applause'),
        'desc' => __('Add Audio Shortcode   [audio mp3="http://metrothemes.me/upload/song.mp3"][/audio]', 'applause'),
        'id' => 'post-audio-code',
        'type' => 'textarea',
      ),



   )
  );

  //////////////////////////////////////////////////////////////////////////
  ////// CREATE METABOXES FOR TEAMS         ///////////////////////////////
  ////////////////////////////////////////////////////////////////////////
 
  $meta_boxes[] = array(
    'id' => 'team_metabox',
    'title' => __('Membar Options', 'applause'),
    'pages' => array('teams'), // post type
    'context' => 'normal',
    'priority' => 'high',
    'show_names' => true, // Show field names on the left
    'fields' => array(
    array( 
        'id'   => 'md_image', 
        'name' => __('Add Avater', 'applause'),
        'desc' => __('Image Size should be 300x300px', 'applause'),
        'type' => 'image', 
        'cols' => 5       
    ),
      array(
        'name' => __('Name', 'applause'),
        'desc' => __('Membar Name', 'applause'),
        'id' => 'mb_name',
        'type' => 'text',
        'cols' => 6
      ),        

      array(
        'name' => __('Job', 'applause'),
        'desc' => __('What he/she do', 'applause'),
        'id' => 'md_job',
        'type'    => 'text', 
        'cols' => 6        
      ),    



      array(
        'name' => __('Facebook', 'applause'),
        'desc' => __('Facebook Profile url', 'applause'),
        'id' => 'mb_fb',
        'type' => 'text',
      ),        

      array(
        'name' => __('Twitter', 'applause'),
        'desc' => __('Twitter Profile url', 'applause'),
        'id' => 'mb_twitter',
        'type' => 'text',
      ),  

      array(
        'name' => __('Dribbble', 'applause'),
        'desc' => __('Dribbble Profile url', 'applause'),
        'id' => 'mb_dribbble',
        'type' => 'text',
      ),  

      array(
        'name' => __('Google Plus', 'applause'),
        'desc' => __('Google Plus Profile url', 'applause'),
        'id' => 'mb_gplus',
        'type' => 'text',
      ),  

      array(
        'name' => __('Linkedin', 'applause'),
        'desc' => __('Linkedin Profile url', 'applause'),
        'id' => 'mb_linkedin',
        'type' => 'text',
      ),  

      
    )
  );





  //////////////////////////////////////////////////////////////////////////
  ////// CREATE METABOXES FOR PRICETABLE ///////////////////////////////
  ////////////////////////////////////////////////////////////////////////



  $meta_boxes[] = array(
    'id' => 'pricetables_metabox',
    'title' => __('Pricetable Options', 'applause'),
    'pages' => array('pricetable'), // post type
    'context' => 'normal',
    'priority' => 'high',
    'show_names' => true, // Show field names on the left
    'fields' => array(

      array(
        'name' => __('Package Name', 'applause'),
        'desc' => __('Pricetable Package Name', 'applause'),
        'id' => 'pk_name',
        'type' => 'text',
      ),        

      array(
        'name' => __('Package Type', 'applause'),
        'desc' => __('Select your Package Type', 'applause'),
        'id' => 'pk_type',
        'type'    => 'select', 
        'options' => array(
            'package-basic' => 'Package Basic',
            'package-standard' => 'Package Standard',
            'package-pro' => 'Package Pro',
            'package-ultimate' => 'Package Ultimate',
        )
      ),    


      array(
        'name' => __('Package Price', 'applause'),
        'desc' => __('Pricetable Package Price , Example: <span>$</span>29', 'applause'),
        'id' => 'pk_price',
        'type' => 'text',
      ),   

      array(
        'name' => __('Package Time', 'applause'),
        'desc' => __('Pricetable Package Time , Example: monthly/year', 'applause'),
        'id' => 'pk_time',
        'type' => 'text',
      ),   


      array(
        'name' => __('Package Features', 'applause'),
        'desc' => __('Pricetable Package Features, Example: <span>1 Hosting</span> For Free', 'applause'),
        'id' => 'pk_features',
        'type' => 'text',
        'repeatable'     => true,
        'repeatable_max' => 20 ,       
      ),   


      array(
        'name' => __('Package Url', 'applause'),
        'desc' => __('Pricetable Package Purchase Url ,  Example:  http://yourclientwebsite.com  ', 'applause'),
        'id' => 'pk_url',
        'type' => 'text',
      ), 
   


    )
  );



  

return $meta_boxes;
}

?>