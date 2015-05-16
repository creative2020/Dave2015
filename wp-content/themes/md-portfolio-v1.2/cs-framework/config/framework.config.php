<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings      = array(
  'menu_title' => 'Theme Option',
  'menu_type'  => 'add_menu_page',
  'menu_slug'  => 'mt-framework',
  'ajax_save'  => false,
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'general-settings',
  'title'       =>__('General Settings', 'applause'), 
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    //Heading
    array(
      'type'    => 'heading',
      'content' =>__('General Settings', 'applause'),
    ),

    //Notice 
    array(
      'type'    => 'notice',
      'class'   => 'success',
      'content' =>__('Here you can configure the general aspects of the theme.!', 'applause'), 
    ),


    //Theme Skin 
    array(
      'id'        => 'mt_theme_style',
      'type'      => 'image_select',
      'title'     =>__('Theme Style', 'applause'),
      'desc'      =>__('Select Theme Skin color', 'applause'), 
      'default' => '1',
      'options'   => array(
        '1' => 'http://dummyimage.com/80x80/F54F36/F54F36.png',
        '2' => 'http://dummyimage.com/80x80/B6D947/B6D947.png',
        '3' => 'http://dummyimage.com/80x80/9D6FC8/9D6FC8.png',
        '4' => 'http://dummyimage.com/80x80/4ABCDD/4ABCDD.png',
        '5' => 'http://dummyimage.com/80x80/1ABC9C/1ABC9C.png',
        '6' => 'http://dummyimage.com/80x80/EBBB14/EBBB14.png',
        '7' => 'http://dummyimage.com/80x80/F4A622/F4A622.png',
        '8' => 'http://dummyimage.com/80x80/2ECC71/2ECC71.png',
      ),
    ),



    // Favicon
    array(
      'id'        => 'mt_favicon',
      'type'      => 'upload',
      'title'     =>__('Favicon', 'applause'), 
      'desc'      =>__('This is the little icon in the address bar for your website Size should be 32x32px', 'applause'), 
      'default' =>  get_template_directory_uri() . '/img/favicon.ico',
    ),



    // Site Logo For Home
    array(
      'id'        => 'mt_site_logo_big',
      'type'      => 'upload',
      'title'     =>__('Site Logo For Home Section', 'applause'), 
      'desc'      =>__('Logo Size should be 150x150px', 'applause'), 
      'default' =>  get_template_directory_uri() . '/img/logo.png',
    ),


    // Site Logo
    array(
      'id'        => 'mt_site_logo',
      'type'      => 'upload',
      'title'     =>__('Site Logo', 'applause'), 
      'desc'      =>__('Logo Size should be 80x80px', 'applause'), 
      'default' =>  get_template_directory_uri() . '/img/logo-2.png',
    ),

    array(
      'id'             => 'mt_more_blog_link',
      'type'           => 'select',
      'title'          => __('Page used for the blog page', 'applause'), 
      'desc'      =>__('Blog page for display more blogpage link', 'applause'),       
      'options'        => 'pages',
      'default_option' => 'Select a page'

    ),

    //Your Name
    array(
      'id'         => 'mt_md_blog_p_title',
      'type'       => 'text',
      'title'      =>__('Blog Page Title', 'applause'),
      'desc'      =>__('Add Blog Page Title', 'applause'),
      'default' => 'My Blog',
    ),


  ), // end: fields
);

// ------------------------------
// Home Settings              -
// ------------------------------
$options[]   = array(
  'name'     => 'home_section',
  'title'    =>__('Home Settings', 'applause'),
  'icon'     => 'fa fa-home',
  'fields'   => array(


    //Heading
    array(
      'type'    => 'heading',
      'content' =>__('Home Settings', 'applause'),
    ),

    //Notice 
    array(
      'type'    => 'notice',
      'class'   => 'success',
      'content' =>__('Here you can configure the Home Section of the theme.!', 'applause'), 
    ),


    // Avater 
    array(
      'id'        => 'mt_site_avater',
      'type'      => 'upload',
      'title'     =>__('Avater', 'applause'), 
      'desc'      =>__('Image Size should be 450x470px', 'applause'), 
      'default' =>  get_template_directory_uri() . '/img/pro_pic.png',
    ),

    //Your Name
    array(
      'id'         => 'mt_your_name',
      'type'       => 'text',
      'title'      =>__('Your Name', 'applause'),
      'desc'      =>__('Add Your Name ,It will display in home section.', 'applause'),
      'default' => 'MARSHALL DOE',
    ),

    //Your Name
    array(
      'id'         => 'mt_your_short_title',
      'type'       => 'text',
      'title'      =>__('Short title', 'applause'),
      'desc'      =>__('Add Short Title About your self ,It will display in home section.', 'applause'),
      'default' => 'DESIGNER + DEVELOPER',
    ),


    // Home Background Image 
    array(
      'id'        => 'mt_home_background_image',
      'type'      => 'upload',
      'title'     =>__('Home Background Image', 'applause'), 
      'desc'      =>__('Image Size should be 1920x1024px', 'applause'), 
      'default' =>  get_template_directory_uri() . '/img/home_img.jpg',
    ),

    //Home Background Color
    array(
      'id' => 'mt_home_background_color',
      'type'    => 'color_picker',        
      'title' => __('Home Background Color', 'applause'),
      'desc' => __('Home Section Background Color', 'applause'),        
      'default' => 'rgba(53,60,79,0.8)',
    ),


  )
);


// ------------------------------
// About Settings              -
// ------------------------------

$options[]   = array(
  'name'     => 'about_section',
  'title'    =>__('About Settings', 'applause'),
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    //Heading
    array(
      'type'    => 'heading',
      'content' =>__('About Settings', 'applause'),
    ),

    //Notice 
    array(
      'type'    => 'notice',
      'class'   => 'success',
      'content' =>__('Here you can configure the About Section of the theme.!,you can display them with shortcode [about-style1] /[about-style2]', 'applause'), 
    ),

    //About Information
    array(
      'id'              => 'mt_about_info',
      'type'            => 'group',
      'title'           => __('Some Information About You', 'applause'),
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',
      'fields'          => array(

            array(
              'id'          => 'mt_about_info_text',
              'type'        => 'text',
              'title'       => __('Add Title', 'applause'),
            ),

            array(
              'id'          => 'mt_about_info_textarea',
              'type'        => 'textarea',
              'title'       => __('Add Details', 'applause'),
            ),


          ),

          //Default Data
          'default'  => array(

            array(
              'mt_about_info_text'     => 'Birthdate',
              'mt_about_info_textarea' => '21-02-1992',
            ),

            array(
              'mt_about_info_text'     => 'Phone',
              'mt_about_info_textarea' => '+6198704563',
            ),

            array(
              'mt_about_info_text'     => 'Email',
              'mt_about_info_textarea' => 'hello@mashaldoe.com',
            ),

            array(
              'mt_about_info_text'     => 'Website',
              'mt_about_info_textarea' => 'www.marshaldoe.com',
            ),

            array(
              'mt_about_info_text'     => 'Address',
              'mt_about_info_textarea' => '121 king street Melbourne VIC <br> 3000, Austraila',
            ),

          )
    ),


    //Signature
    array(
      'id'         => 'mt_signature',
      'type'       => 'text',
      'title'      =>__('Signature', 'applause'),
      'desc'      =>__('Add your signature', 'applause'),
      'default' => 'Marshall Doe',
    ),

    //Download Button Title 
    array(
      'id'         => 'mt_dw_title',
      'type'       => 'text',
      'title'      =>__('Download Button Title ', 'applause'),
      'desc'      =>__('Add your Download Button Title ', 'applause'),
      'default' => 'Download Resume',
    ),

    //Upload you cv
    array(
      'id'        => 'mt_dw_cv',
      'type'      => 'upload',
      'title'     =>__('Upload Your CV', 'applause'), 
      'desc'      =>__('Upload your cv/resume for download', 'applause'), 
    ),

    //HOBBiES & INTERSTS TITLE
    array(
      'id'         => 'mt_hobbie_title',
      'type'       => 'text',
      'title'      =>__('Hobbies & Intersts Title ', 'applause'),
      'desc'      =>__('You can change Hobbies & Intersts Title', 'applause'),
      'default' => 'HOBBIES & INTERESTS',
    ),

    //HOBBIES & INTERESTS
    array(
      'id'              => 'mt_hobbie_info',
      'type'            => 'group',
      'title'           => __('HOBBIES & INTERESTS', 'applause'),
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',
      'fields'          => array(

            array(
              'id'          => 'mt_hobbie_info_icon',
              'type'    => 'icon',
              'title'       => __('Add Icon', 'applause'),
            ),

            array(
              'id'          => 'mt_hobbie_info_text',
              'type'        => 'text',
              'title'       => __('Add Title', 'applause'),
            ),

          ),

          //Default Data
          'default'  => array(

            array(
              'mt_hobbie_info_icon'     => 'fa fa-gamepad',
              'mt_hobbie_info_text' => 'Games',
            ),

            array(
              'mt_hobbie_info_icon'     => 'fa fa-headphones',
              'mt_hobbie_info_text' => 'Music',
            ),

            array(
              'mt_hobbie_info_icon'     => 'fa fa-plane',
              'mt_hobbie_info_text' => 'Travel',
            ),

            array(
              'mt_hobbie_info_icon'     => 'fa fa-video-camera',
              'mt_hobbie_info_text' => 'Cinema',
            ),

            array(
              'mt_hobbie_info_icon'     => 'fa fa-apple',
              'mt_hobbie_info_text' => 'Mac OS',
            ),

            array(
              'mt_hobbie_info_icon'     => 'fa fa-coffee',
              'mt_hobbie_info_text' => 'Coffee',
            ),

            array(
              'mt_hobbie_info_icon'     => 'fa fa-truck',
              'mt_hobbie_info_text' => 'Cars',
            ),

            array(
              'mt_hobbie_info_icon'     => 'fa fa-money',
              'mt_hobbie_info_text' => 'Money',
            ),

                                                            
          )
    ),

  )
);

// ------------------------------
// Contact Settings               -
// ------------------------------
$options[]   = array(
  'name'     => 'contact_section',
  'title'    =>__('Contact Settings', 'applause'),
  'icon'     => 'fa fa-road',
  'fields'   => array(

    //Heading
    array(
      'type'    => 'heading',
      'content' =>__('Contact Settings', 'applause'),
    ),

    //Notice 
    array(
      'type'    => 'notice',
      'class'   => 'success',
      'content' =>__('Here you can configure the Contact Section of the theme.!,you can display them with shortcode [contact]', 'applause'), 
    ),



    //Get In Touch Title
    array(
      'id'         => 'mt_getin_touch_title',
      'type'       => 'text',
      'title'      =>__('Get In Touch Title', 'applause'),
      'desc'      =>__('Add your title', 'applause'),
      //'dependency' => array( 'mt_enable_getin_touch', '!=', '' ),
      'default' => 'GET IN TOUCH',
    ),

    //Your mail address
    array(
      'id'         => 'mt_getin_touch_mail',
      'type'       => 'text',
      'title'      =>__('Your Mail Address', 'applause'),
      'desc'      =>__('Add your mail address', 'applause'),
      //'dependency' => array( 'mt_enable_getin_touch', '!=', '' ),
      'default' => 'hello@metrothemes.me',
    ),

    //Your Phone Number
    array(
      'id'         => 'mt_getin_touch_phone',
      'type'       => 'text',
      'title'      =>__('Your Phone Number', 'applause'),
      'desc'      =>__('Add your Phone Number', 'applause'),
      //'dependency' => array( 'mt_enable_getin_touch', '!=', '' ),
      'default' => '+0123 456 789',
    ),

    //Your Address
    array(
      'id'         => 'mt_getin_touch_address',
      'type'       => 'text',
      'title'      =>__('Your Phone Number', 'applause'),
      'desc'      =>__('Add your address', 'applause'),
      //'dependency' => array( 'mt_enable_getin_touch', '!=', '' ),
      'default' => '21 Cool Street, Melbourne Victoria 3000 Australia',
    ),

    //Your Vcard
    array(
      'id'         => 'mt_getin_touch_vcard',
      'type'       => 'upload',
      'title'      =>__('Upload your Vcard', 'applause'),
      'desc'      =>__('Add your Vcard', 'applause'),
      //'dependency' => array( 'mt_enable_getin_touch', '!=', '' ),
      //'default' => '21 Cool Street, Melbourne Victoria 3000 Australia',
    ),

    //Your Address
    array(
      'id'         => 'mt_getin_touch_contact_title',
      'type'       => 'text',
      'title'      =>__('Contact Form Title', 'applause'),
      'desc'      =>__('Add Title Contact Form Before ', 'applause'),
      //'dependency' => array( 'mt_enable_getin_touch', '!=', '' ),
      'default' => 'DROP ME A LINE',
    ),

    //Contact Form Short code 
    array(
      'id'         => 'mt_getin_touch_contact_form',
      'type'       => 'textarea',
      'title'      =>__('Add Contact Form 7 Shortcode ', 'applause'),
      'desc'      =>__('Add Contact Form 7 Shortcode , Example: [contact-form-7 id="1131" title="Contact form 1"] ', 'applause'),
      'shortcode' => true,
      //'dependency' => array( 'mt_enable_getin_touch', '!=', '' ),
      //'default' => '21 Cool Street, Melbourne Victoria 3000 Australia',
    ),


    //Google mape address 
    array(
      'id'         => 'mt_getin_touch_google_map',
      'type'       => 'textarea',
      'title'      =>__('Google Map Address', 'applause'),
      'desc'      =>__('Add your address ,Example: Haltern am See, Weseler Str. 151 ', 'applause'),
      'shortcode' => true,
      //'dependency' => array( 'mt_enable_getin_touch', '!=', '' ),
      'default' => 'Haltern am See, Weseler Str. 151',
    ),


  )
);
// ------------------------------
// Footer Settings              -
// ------------------------------
$options[]   = array(
  'name'     => 'footer_section',
  'title'    =>__('Footer Settings', 'applause'),
  'icon'     => 'fa fa-toggle-down',
  'fields'   => array(

    //Heading
    array(
      'type'    => 'heading',
      'content' =>__('Footer Settings', 'applause'),
    ),

    //Notice 
    array(
      'type'    => 'notice',
      'class'   => 'success',
      'content' =>__('Here you can configure the Footer aspects of the theme.!', 'applause'), 
    ),

    //Twitter Feed
    array(
      'id'         => 'mt_enable_twitter_feed',
      'type'       => 'switcher',
      'title'      =>__('Enable Twitter Feed', 'applause'),
      'label'      =>__('You can enable / disable Twitter Feed ', 'applause'),
      'default' => true,
      //'default' => true,
    ),

    //Twitter Username 
    array(
      'id'         => 'mt_twitter_username',
      'type'       => 'text',
      'title'      =>__('Twitter Username', 'applause'),
      'desc'      =>__('User your twitter username for feed', 'applause'),
      'dependency' => array( 'mt_enable_twitter_feed', '!=', '' ),
      'default' => 'metrothemes',
    ),

    //Twitter Limit
    array(
      'id'         => 'mt_twitter_limit',
      'type'       => 'text',
      'title'      =>__('Limit', 'applause'),
      'desc'      =>__('Twitter Feed limit', 'applause'),
      'dependency' => array( 'mt_enable_twitter_feed', '!=', '' ),
      'default' => '5',
    ),

    //Twitter Speed
    array(
      'id'         => 'mt_twitter_speed',
      'type'       => 'text',
      'title'      =>__('Speed', 'applause'),
      'desc'      =>__('Twitter Feed Speed', 'applause'),
      'dependency' => array( 'mt_enable_twitter_feed', '!=', '' ),
      'default' => '600',
    ),

    //Twitter Delay
    array(
      'id'         => 'mt_twitter_delay',
      'type'       => 'text',
      'title'      =>__('Delay', 'applause'),
      'desc'      =>__('Twitter Feed Delay', 'applause'),
      'dependency' => array( 'mt_enable_twitter_feed', '!=', '' ),
      'default' => '3000',
    ),

    //Recent Post Widget
    array(
      'id'         => 'mt_recent_post_widget',
      'type'       => 'text',
      'title'      =>__('Recent Post Widget', 'applause'),
      'desc'      =>__('How many Recent post you want to display ', 'applause'),
      'default' => '2',
    ),

    //Flickr id 
    array(
      'id'         => 'mt_flickr_id',
      'type'       => 'text',
      'title'      =>__('Flickr Id', 'applause'),
      'desc'      =>__('use your flickr id for display image feed ', 'applause'),
      'default' => '44802888@N04',
    ),

    //Flickr feed limit 
    array(
      'id'         => 'mt_flickr_limit',
      'type'       => 'text',
      'title'      =>__('Number of flickr photos', 'applause'),
      'default' => '8',
    ),

    //Footer Copyright
    array(
      'id'         => 'mt_footer_copyright',
      'type'     => 'textarea',
      'title'      =>__('Footer Copyright Text', 'applause'),
      'desc'      =>__('User Footer copyright text ', 'applause'),
      'default' => 'Copyright 2015 <a href="#">metrothemes.me</a>',
    ),



  )
);

// ------------------------------
// Social Network               -
// ------------------------------
$options[]   = array(
  'name'     => 'social_section',
  'title'    =>__('Social Network', 'applause'),
  'icon'     => 'fa fa-share-alt',
  'fields'   => array(

    //Heading
    array(
      'type'    => 'heading',
      'content' =>__('SocialNetwork', 'applause'),
    ),

    //Notice 
    array(
      'type'    => 'notice',
      'class'   => 'success',
      'content' =>__('Add your SocialNetwork links', 'applause'), 
    ),


    //Facebook 
    array(
      'id'      => 'mts_facebook',
      'type'    => 'text',
      'title'   => __('Facebook', 'applause'),
    ),

    //Twitter 
    array(
      'id'      => 'mts_twitter',
      'type'    => 'text',
      'title'   => __('Twitter', 'applause'),
    ),

    //Linkedin
    array(
      'id'      => 'mts_linkedin',
      'type'    => 'text',
      'title'   => __('Linkedin', 'applause'),
    ),

    //Google
    array(
      'id'      => 'mts_google',
      'type'    => 'text',
      'title'   => __('Google', 'applause'),
    ),

    //Vimeo
    array(
      'id'      => 'mts_vimeo',
      'type'    => 'text',
      'title'   => __('Vimeo', 'applause'),
    ),

    //Github
    array(
      'id'      => 'mts_github',
      'type'    => 'text',
      'title'   => __('Github', 'applause'),
    ),

    //Behance
    array(
      'id'      => 'mts_behance',
      'type'    => 'text',
      'title'   => __('Behance', 'applause'),
    ),

    //Dribbble
    array(
      'id'      => 'mts_dribbble',
      'type'    => 'text',
      'title'   => __('Dribbble', 'applause'),
    ),

    //Instagram
    array(
      'id'      => 'mts_instagram',
      'type'    => 'text',
      'title'   => __('Instagram', 'applause'),
    ),


    //Lastfm
    array(
      'id'      => 'mts_lastfm',
      'type'    => 'text',
      'title'   => __('Lastfm', 'applause'),
    ),

    //Rss
    array(
      'id'      => 'mts_rss',
      'type'    => 'text',
      'title'   => __('Rss', 'applause'),
    ),

    //Pinterest
    array(
      'id'      => 'mts_pinterest',
      'type'    => 'text',
      'title'   => __('Pinterest', 'applause'),
    ),

    //Skype
    array(
      'id'      => 'mts_skype',
      'type'    => 'text',
      'title'   => __('Skype', 'applause'),
    ),

    //Picassa
    array(
      'id'      => 'mts_picassa',
      'type'    => 'text',
      'title'   => __('Picassa', 'applause'),
    ),

    //Youtube
    array(
      'id'      => 'mts_youtube',
      'type'    => 'text',
      'title'   => __('Youtube', 'applause'),
    ),


    //Flickr
    array(
      'id'      => 'mts_flickr',
      'type'    => 'text',
      'title'   => __('Flickr', 'applause'),
    ),

    //Tumblr
    array(
      'id'      => 'mts_tumblr',
      'type'    => 'text',
      'title'   => __('Tumblr', 'applause'),
    ),


    //Blogger
    array(
      'id'      => 'mts_blogger',
      'type'    => 'text',
      'title'   => __('Blogger', 'applause'),
    ),


    //Delicious
    array(
      'id'      => 'mts_delicious',
      'type'    => 'text',
      'title'   => __('Delicious', 'applause'),
    ),

    //Digg
    array(
      'id'      => 'mts_digg',
      'type'    => 'text',
      'title'   => __('Digg', 'applause'),
    ),

    //FriendFeed
    array(
      'id'      => 'mts_friendfeed',
      'type'    => 'text',
      'title'   => __('FriendFeed', 'applause'),
    ),

    //WordPress
    array(
      'id'      => 'mts_wordpress',
      'type'    => 'text',
      'title'   => __('WordPress', 'applause'),
    ),


  )
);

// ------------------------------
// Onpage Control               -
// ------------------------------
$options[]   = array(
  'name'     => 'onepage_section',
  'title'    =>__('OnePage Control', 'applause'),
  'icon'     => 'fa fa-check-square-o',
  'fields'   => array(

    //Heading
    array(
      'type'    => 'heading',
      'content' =>__('OnePage Sections Control', 'applause'),
    ),

    //Notice 
    array(
      'type'    => 'notice',
      'class'   => 'success',
      'content' =>__('You can manage show and hide pages display in frontpage as a onepage sections', 'applause'), 
    ),


    //Page MultiSelect

    array(
      'id'                 => 'mt_onepage_control',
      'type'               => 'select',
      'title'              =>__('OnePage Sections Control', 'applause'),
      'options'            => 'pages',
      'class'              => 'chosen',
      'attributes'         => array(
      'data-placeholder' => 'Select your favrorite posts',
          'multiple'         => 'only-key',
          'style'            => 'width: 200px;'
      ),
      'info'               =>__('Choose which pages you want in the HomePage.', 'applause'),
    ),

  )
);
// ------------------------------
// Work Experience              -
// ------------------------------
$options[]   = array(
  'name'     => 'wexperience_section',
  'title'    =>__('Work Experience', 'applause'),
  'icon'     => 'fa fa-file-text-o',
  'fields'   => array(

    //Heading
    array(
      'type'    => 'heading',
      'content' =>__('Work Experience', 'applause'),
    ),

    //Notice 
    array(
      'type'    => 'notice',
      'class'   => 'success',
      'content' =>__('Add your Work Experience ,you can display them with shortcode [wexperience]', 'applause'), 
    ),

    //Timeline Title 
    array(
        'id'          => 'mt_wexperience_title',
        'type'        => 'text',
        'title'       => __('Timeline Title', 'applause'),
        'desc'        =>__('Example: Experience', 'applause'),
        'default'     =>'Experiences',
    ),

    //Timeline Icon
    array(
        'id'          => 'mt_wexperience_icon',
        'type'        => 'icon',
        'title'       => __('Timeline Icon', 'applause'),
        'default'     =>'fa fa-folder-open',
    ),

        //Left Work Experience
        array(
          'id'              => 'mt_left_wexperience',
          'type'            => 'group',
          'title'           => __('Left Side', 'applause'),
          'desc'            =>__('It will display your work expreience to left side', 'applause'),
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Field',
          'fields'          => array(

                array(
                  'id'          => 'mt_left_wexperience_title',
                  'type'        => 'text',
                  'title'       => __('Add Title', 'applause'),
                  'desc'        =>__('Example: SENIOR DEVELOPER', 'applause'),
                ),

                array(
                  'id'          => 'mt_left_wexperience_company',
                  'type'        => 'text',
                  'title'       => __('Add Company Name', 'applause'),
                  'desc'        =>__('Example: Apple Inc', 'applause'),
                ),

                array(
                  'id'          => 'mt_left_wexperience_duration',
                  'type'        => 'text',
                  'title'       => __('Add Duration', 'applause'),
                  'desc'        =>__('Example: 2012 - Current', 'applause'),
                ),   

                array(
                  'id'          => 'mt_left_wexperience_textarea',
                  'type'        => 'textarea',
                  'title'       => __('Add Details', 'applause'),
                ),

              ),

              //Default Data
              'default'  => array(

                array(
                  'mt_left_wexperience_title'     => 'SENIOR DEVELOPER',
                  'mt_left_wexperience_company'     => 'Apple Inc',
                  'mt_left_wexperience_duration'     => '2012 - Current',
                  'mt_left_wexperience_textarea'     => 'Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.',
                ),


                array(
                  'mt_left_wexperience_title'     => 'SENIOR DEVELOPER',
                  'mt_left_wexperience_company'     => 'Apple Inc',
                  'mt_left_wexperience_duration'     => '2012 - Current',
                  'mt_left_wexperience_textarea'     => 'Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.',
                ),


             )
        ),//Left Work Experince end 



        //Right Work Experience
        array(
          'id'              => 'mt_right_wexperience',
          'type'            => 'group',
          'title'           => __('Right Side', 'applause'),
          'desc'            =>__('It will display your work expreience to Right side', 'applause'),
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Field',
          'fields'          => array(

                array(
                  'id'          => 'mt_right_wexperience_title',
                  'type'        => 'text',
                  'title'       => __('Add Title', 'applause'),
                  'desc'        =>__('Example: SENIOR DEVELOPER', 'applause'),
                ),

                array(
                  'id'          => 'mt_right_wexperience_company',
                  'type'        => 'text',
                  'title'       => __('Add Company Name', 'applause'),
                  'desc'        =>__('Example: Apple Inc', 'applause'),
                ),

                array(
                  'id'          => 'mt_right_wexperience_duration',
                  'type'        => 'text',
                  'title'       => __('Add Duration', 'applause'),
                  'desc'        =>__('Example: 2012 - Current', 'applause'),
                ),   

                array(
                  'id'          => 'mt_right_wexperience_textarea',
                  'type'        => 'textarea',
                  'title'       => __('Add Details', 'applause'),
                ),

              ),

              //Default Data
              'default'  => array(

                array(
                  'mt_right_wexperience_title'     => 'SENIOR DEVELOPER',
                  'mt_right_wexperience_company'     => 'Apple Inc',
                  'mt_right_wexperience_duration'     => '2012 - Current',
                  'mt_right_wexperience_textarea'     => 'Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.',
                ),


                array(
                  'mt_right_wexperience_title'     => 'SENIOR DEVELOPER',
                  'mt_right_wexperience_company'     => 'Apple Inc',
                  'mt_right_wexperience_duration'     => '2012 - Current',
                  'mt_right_wexperience_textarea'     => 'Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.',
                ),

             )
        ),//right Work Experince end 


  )
);

// ------------------------------
// Education Experience         -
// ------------------------------
$options[]   = array(
  'name'     => 'eduexperience_section',
  'title'    =>__('Education Experience', 'applause'),
  'icon'     => 'fa fa-graduation-cap',
  'fields'   => array(

    //Heading
    array(
      'type'    => 'heading',
      'content' =>__('Education Experience', 'applause'),
    ),

    //Notice 
    array(
      'type'    => 'notice',
      'class'   => 'success',
      'content' =>__('Add your Education Experience ,you can display them with shortcode [eexperience]', 'applause'), 
    ),


    //Timeline Title 
    array(
        'id'          => 'mt_eduexperience_title',
        'type'        => 'text',
        'title'       => __('Timeline Title', 'applause'),
        'desc'        =>__('Example: Education', 'applause'),
        'default'     =>'Education',
    ),

    //Timeline Icon
    array(
        'id'          => 'mt_eduexperience_icon',
        'type'        => 'icon',
        'title'       => __('Timeline Icon', 'applause'),
        'default'     =>'fa fa-graduation-cap',
    ),

        //Left Education Experience
        array(
          'id'              => 'mt_left_eduexperience',
          'type'            => 'group',
          'title'           => __('Left Side', 'applause'),
          'desc'            =>__('It will display your work expreience to left side', 'applause'),
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Field',
          'fields'          => array(

                array(
                  'id'          => 'mt_left_eduexperience_title',
                  'type'        => 'text',
                  'title'       => __('Add Title', 'applause'),
                  'desc'        =>__('Example: Phd Computer Science', 'applause'),
                ),

                array(
                  'id'          => 'mt_left_eduexperience_company',
                  'type'        => 'text',
                  'title'       => __('Add Company Name', 'applause'),
                  'desc'        =>__('Example: stanford university', 'applause'),
                ),

                array(
                  'id'          => 'mt_left_eduexperience_duration',
                  'type'        => 'text',
                  'title'       => __('Add Duration', 'applause'),
                  'desc'        =>__('Example: 2012 - Current', 'applause'),
                ),   

                array(
                  'id'          => 'mt_left_eduexperience_textarea',
                  'type'        => 'textarea',
                  'title'       => __('Add Details', 'applause'),
                ),

              ),

              //Default Data
              'default'  => array(

                array(
                  'mt_left_eduexperience_title'     => 'Phd Computer Science',
                  'mt_left_eduexperience_company'     => 'stanford university',
                  'mt_left_eduexperience_duration'     => '2012 - Current',
                  'mt_left_eduexperience_textarea'     => 'Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.',
                ),


             )
        ),//Left Education Experince end 



        //Right Education Experience
        array(
          'id'              => 'mt_right_eduexperience',
          'type'            => 'group',
          'title'           => __('Right Side', 'applause'),
          'desc'            =>__('It will display your work expreience to Right side', 'applause'),
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Field',
          'fields'          => array(

                array(
                  'id'          => 'mt_right_eduexperience_title',
                  'type'        => 'text',
                  'title'       => __('Add Title', 'applause'),
                  'desc'        =>__('Example: Graduation', 'applause'),
                ),

                array(
                  'id'          => 'mt_right_eduexperience_company',
                  'type'        => 'text',
                  'title'       => __('Add Company Name', 'applause'),
                  'desc'        =>__('Example: stanford university', 'applause'),
                ),

                array(
                  'id'          => 'mt_right_eduexperience_duration',
                  'type'        => 'text',
                  'title'       => __('Add Duration', 'applause'),
                  'desc'        =>__('Example: 2012 - Current', 'applause'),
                ),   

                array(
                  'id'          => 'mt_right_eduexperience_textarea',
                  'type'        => 'textarea',
                  'title'       => __('Add Details', 'applause'),
                ),

              ),

              //Default Data
              'default'  => array(

                array(
                  'mt_right_eduexperience_title'     => 'Graduation',
                  'mt_right_eduexperience_company'     => 'stanford university',
                  'mt_right_eduexperience_duration'     => '2008 - 2012',
                  'mt_right_eduexperience_textarea'     => 'Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.',
                ),


                array(
                  'mt_right_eduexperience_title'     => 'High School',
                  'mt_right_eduexperience_company'     => 'West End High School',
                  'mt_right_eduexperience_duration'     => '2008',
                  'mt_right_eduexperience_textarea'     => 'Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.',
                ),

             )
        ),//right Education Experince end 

  )
);



// ------------------------------
// Contents sections           -
// ------------------------------
$options[]   = array(
  'name'     => 'content_section',
  'title'    =>__('Contents', 'applause'),
  'icon'     => 'fa fa-bars',
  'sections' => array(


        // Milestones
        array(
          'name'     => 'sub_section_1',
          'title'    =>__('Milestones', 'applause'),
          'icon'     => 'fa fa-minus',
          'fields'   => array(

            //Heading
            array(
              'type'    => 'heading',
              'content' =>__('Milestones Achieved', 'applause'),
            ),

            //Notice 
            array(
              'type'    => 'notice',
              'class'   => 'success',
              'content' =>__('Add your Milestones Achieved ,you can display them with shortcode [milestones]', 'applause'), 
            ),


            //Milestones Achieved Field
            array(
              'id'              => 'mt_milestone',
              'type'            => 'group',
              'title'           => __('Milestones Achieved', 'applause'),
              'button_title'    => 'Add New',
              'accordion_title' => 'Add New Field',
              'fields'          => array(

                    array(
                      'id'          => 'mt_milestone_icon',
                      'type'    => 'icon',
                      'title'       => __('Add Icon', 'applause'),
                    ),

                    array(
                      'id'          => 'mt_milestone_text',
                      'type'        => 'text',
                      'title'       => __('Add Title', 'applause'),
                    ),

                    array(
                      'id'          => 'mt_milestone_number',
                      'type'        => 'text',
                      'title'       => __('Add Number', 'applause'),
                    ),

                  ),

                  //Default Data
                  'default'  => array(

                    array(
                      'mt_milestone_icon'     => 'fa fa-coffee',
                      'mt_milestone_text' => 'Cups of Coffee',
                      'mt_milestone_number' => '2412',
                    ),

                    array(
                      'mt_milestone_icon'     => 'fa fa-briefcase',
                      'mt_milestone_text' => 'Succesful Projects',
                      'mt_milestone_number' => '550',
                    ),
         
                    array(
                      'mt_milestone_icon'     => 'fa fa-group',
                      'mt_milestone_text' => 'Happy Clients',
                      'mt_milestone_number' => '212',
                    ),

                    array(
                      'mt_milestone_icon'     => 'fa fa-trophy',
                      'mt_milestone_text' => 'Awards Won',
                      'mt_milestone_number' => '99',
                    ),

                                                                    
                 )
            ),


          )
        ),//Milestones Section end


    // Work Process
    array(
      'name'     => 'sub_section_2',
      'title'    =>__('Work Process', 'applause'),
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        //Heading
        array(
          'type'    => 'heading',
          'content' =>__('Work Process', 'applause'),
        ),

        //Notice 
        array(
          'type'    => 'notice',
          'class'   => 'success',
          'content' =>__('Add your Work Process System ,you can display them with shortcode [work_process]', 'applause'), 
        ),


        //Work Process Field
        array(
          'id'              => 'mt_wprocess',
          'type'            => 'group',
          'title'           => __('Work Process', 'applause'),
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Field',
          'fields'          => array(

                array(
                  'id'          => 'mt_wprocess_icon',
                  'type'    => 'icon',
                  'title'       => __('Add Icon', 'applause'),
                ),

                array(
                  'id'          => 'mt_wprocess_text',
                  'type'        => 'text',
                  'title'       => __('Add Title', 'applause'),
                ),

              ),

              //Default Data
              'default'  => array(

                array(
                  'mt_wprocess_icon'     => 'icon-lamp',
                  'mt_wprocess_text' => 'IDEA',
                ),

                array(
                  'mt_wprocess_icon'     => 'fa fa-puzzle-piece',
                  'mt_wprocess_text' => 'CONCEPT',
                ),
             
                array(
                  'mt_wprocess_icon'     => 'icon-brush',
                  'mt_wprocess_text' => 'DESIGN',
                ),

                array(
                  'mt_wprocess_icon'     => 'fa fa-code',
                  'mt_wprocess_text' => 'DEVELOP',
                ),
                                       
                array(
                  'mt_wprocess_icon'     => 'fa fa-bug',
                  'mt_wprocess_text' => 'TEST',
                ),

                array(
                  'mt_wprocess_icon'     => 'fa fa-rocket',
                  'mt_wprocess_text' => 'LAUNCH',
                ),

             )
        ),


      )
    ),//Work Process Section end


    // Service 
    array(
      'name'     => 'sub_section_3',
      'title'    =>__('Services', 'applause'),
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        //Heading
        array(
          'type'    => 'heading',
          'content' =>__('Services', 'applause'),
        ),

        //Notice 
        array(
          'type'    => 'notice',
          'class'   => 'success',
          'content' =>__('Add your services ,you can display them with shortcode [services]', 'applause'), 
        ),


        //Left Services field 
        array(
          'id'              => 'mt_left_service',
          'type'            => 'group',
          'title'           => __('Left Side Services', 'applause'),
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Field',
          'fields'          => array(

                array(
                  'id'          => 'mt_left_service_icon',
                  'type'    => 'icon',
                  'title'       => __('Add Icon', 'applause'),
                ),

                array(
                  'id'          => 'mt_left_service_text',
                  'type'        => 'text',
                  'title'       => __('Add Title', 'applause'),
                ),

                array(
                  'id'          => 'mt_left_service_textarea',
                  'type'        => 'textarea',
                  'title'       => __('Add Details', 'applause'),
                ),

              ),

              //Default Data
              'default'  => array(

                array(
                  'mt_left_service_icon'     => 'fa fa-leaf',
                  'mt_left_service_text' => 'Designing',
                  'mt_left_service_textarea' => 'Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a',
                ),

                array(
                  'mt_left_service_icon'     => 'fa fa-magic',
                  'mt_left_service_text' => 'Branding',
                  'mt_left_service_textarea' => 'Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a',
                ),

                array(
                  'mt_left_service_icon'     => 'fa fa-bar-chart-o',
                  'mt_left_service_text' => 'Analytics',
                  'mt_left_service_textarea' => 'Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a',
                ),


             )
        ),//Left side services end 



        //Right Services field 
        array(
          'id'              => 'mt_right_service',
          'type'            => 'group',
          'title'           => __('Right Side Services', 'applause'),
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Field',
          'fields'          => array(

                array(
                  'id'          => 'mt_right_service_icon',
                  'type'    => 'icon',
                  'title'       => __('Add Icon', 'applause'),
                ),

                array(
                  'id'          => 'mt_right_service_text',
                  'type'        => 'text',
                  'title'       => __('Add Title', 'applause'),
                ),

                array(
                  'id'          => 'mt_right_service_textarea',
                  'type'        => 'textarea',
                  'title'       => __('Add Details', 'applause'),
                ),

              ),

              //Default Data
              'default'  => array(

                array(
                  'mt_right_service_icon'     => 'fa fa-flask',
                  'mt_right_service_text' => 'Developing',
                  'mt_right_service_textarea' => 'Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a',
                ),

                array(
                  'mt_right_service_icon'     => 'fa fa-globe',
                  'mt_right_service_text' => 'Marketing',
                  'mt_right_service_textarea' => 'Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a',
                ),

                array(
                  'mt_right_service_icon'     => 'fa fa-anchor',
                  'mt_right_service_text' => 'Support',
                  'mt_right_service_textarea' => 'Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a',
                ),


             )
        ),//right side services end 


      )
    ),//Services Section end


    // Skills 
    array(
      'name'     => 'sub_section_4',
      'title'    =>__('Skills', 'applause'),
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        //Heading
        array(
          'type'    => 'heading',
          'content' =>__('Skills', 'applause'),
        ),

        //Notice 
        array(
          'type'    => 'notice',
          'class'   => 'success',
          'content' =>__('Add your Skills ,you can display them with shortcode [skills]', 'applause'), 
        ),


        //Skill Field
        array(
          'id'              => 'mt_skill',
          'type'            => 'group',
          'title'           => __('Skills', 'applause'),
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Field',
          'fields'          => array(



                array(
                  'id'          => 'mt_skill_text',
                  'type'        => 'text',
                  'title'       => __('Add Title', 'applause'),
                ),

                array(
                  'id'          => 'mt_skill_number',
                  'type'        => 'number',
                  'title'       => __('Add number', 'applause'),
                ),

                array(
                  'id'          => 'mt_skill_textarea',
                  'type'        => 'textarea',
                  'title'       => __('Add Title', 'applause'),
                ),                

              ),

              //Default Data
              'default'  => array(

                array(
                  'mt_skill_text'     => 'HTML5/CSS3',
                  'mt_skill_number' => '87',
                  'mt_skill_textarea' => 'Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.',
                ),

                array(
                  'mt_skill_text'     => 'JAVASCRIPT',
                  'mt_skill_number' => '75',
                  'mt_skill_textarea' => 'Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.',
                ),

                array(
                  'mt_skill_text'     => 'WORDPRESS',
                  'mt_skill_number' => '83',
                  'mt_skill_textarea' => 'Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.',
                ),

                array(
                  'mt_skill_text'     => 'JOOMLA',
                  'mt_skill_number' => '69',
                  'mt_skill_textarea' => 'Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.',
                ),

                array(
                  'mt_skill_text'     => 'PHOTOSHOP',
                  'mt_skill_number' => '100',
                  'mt_skill_textarea' => 'Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.',
                ),

                array(
                  'mt_skill_text'     => 'ILLUSTRATOR',
                  'mt_skill_number' => '73',
                  'mt_skill_textarea' => 'Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.',
                ),

                array(
                  'mt_skill_text'     => 'INDESIGN',
                  'mt_skill_number' => '85',
                  'mt_skill_textarea' => 'Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.',
                ),

                array(
                  'mt_skill_text'     => '3D MAX',
                  'mt_skill_number' => '55',
                  'mt_skill_textarea' => 'Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.',
                ),


             )
        ),


      )
    ),//Skills Section end

    // Testimonials
    array(
      'name'     => 'sub_section_5',
      'title'    =>__('Testimonials', 'applause'),
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        //Heading
        array(
          'type'    => 'heading',
          'content' =>__('Testimonials', 'applause'),
        ),

        //Notice 
        array(
          'type'    => 'notice',
          'class'   => 'success',
          'content' =>__('Add Clients Testimonials ,you can display them with shortcode [testimonials]', 'applause'), 
        ),


        //Testimonials Field
        array(
          'id'              => 'mt_testimonials',
          'type'            => 'group',
          'title'           => __('Testimonials', 'applause'),
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Field',
          'fields'          => array(

                array(
                  'id'          => 'mt_testimonials_avater',
                  'type'    => 'upload',
                  'title'       => __('Author Avater', 'applause'),
                ),

                array(
                  'id'          => 'mt_testimonials_text',
                  'type'        => 'text',
                  'title'       => __('Author Name', 'applause'),
                ),

                array(
                  'id'          => 'mt_testimonials_textarea',
                  'type'        => 'textarea',
                  'title'       => __('Author Comment', 'applause'),
                ),

                array(
                  'id'          => 'mt_testimonials_url',
                  'type'        => 'text',
                  'title'       => __('Author Website', 'applause'),
                  'desc'        =>__('Example: metrothemes.me ', 'applause'), 
                ),


              ),

              //Default Data
              'default'  => array(

                array(
                  'mt_testimonials_avater'     => 'http://placehold.it/120x120',
                  'mt_testimonials_text' => 'Marilyn Monroe',
                  'mt_testimonials_textarea' => 'Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.',
                  'mt_testimonials_url' => 'metrothemes.me',
                ),


                array(
                  'mt_testimonials_avater'     => 'http://placehold.it/120x120',
                  'mt_testimonials_text' => 'Abraham Lincoln',
                  'mt_testimonials_textarea' => 'There is darkness Everywhere! You are not the only one who has lost everything!',
                  'mt_testimonials_url' => 'metrothemes.me',
                ),

                array(
                  'mt_testimonials_avater'     => 'http://placehold.it/120x120',
                  'mt_testimonials_text' => 'Buddha',
                  'mt_testimonials_textarea' => 'Unity can only be manifested by the Binary. Unity itself and the idea of Unity are already two.',
                  'mt_testimonials_url' => 'metrothemes.me',
                ),                
             )
        ),


      )
    ),//Testimonials Section end

    // Clients logo
    array(
      'name'     => 'sub_section_6',
      'title'    =>__('Clients Logo', 'applause'),
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        //Heading
        array(
          'type'    => 'heading',
          'content' =>__('Clients Logo', 'applause'),
        ),

        //Notice 
        array(
          'type'    => 'notice',
          'class'   => 'success',
          'content' =>__('Add your Clients Logo ,you can display them with shortcode [clients_logo]', 'applause'), 
        ),



        //Clients Logo
        array(
          'id'              => 'mt_clients_logo',
          'type'            => 'group',
          'title'           => __('Clients Logo', 'applause'),
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Field',
          'fields'          => array(

                array(
                  'id'          => 'mt_clients_logo_image',
                  'type'    => 'upload',
                  'title'       => __('Add logo', 'applause'),
                  'desc'       => __('Logo size 212x125px recommended', 'applause'),
                ),

                array(
                  'id'          => 'mt_clients_logo_name',
                  'type'        => 'text',
                  'title'       => __('Add Client Name', 'applause'),
                ),

                array(
                  'id'          => 'mt_clients_logo_url',
                  'type'        => 'text',
                  'title'       => __('Add Client Website Url', 'applause'),
                  'desc'       => __('example: http://metrothemes.me', 'applause'),
                ),


              ),

              //Default Data
              'default'  => array(

                array(
                  'mt_clients_logo_image'     => 'http://placehold.it/212x125',
                  'mt_clients_logo_name' => 'metrothemes',
                  'mt_clients_logo_url' => 'http://metrothemes.me',
                ),

                array(
                  'mt_clients_logo_image'     => 'http://placehold.it/212x125',
                  'mt_clients_logo_name' => 'metrothemes',
                  'mt_clients_logo_url' => 'http://metrothemes.me',
                ),

                array(
                  'mt_clients_logo_image'     => 'http://placehold.it/212x125',
                  'mt_clients_logo_name' => 'metrothemes',
                  'mt_clients_logo_url' => 'http://metrothemes.me',
                ),
                
                array(
                  'mt_clients_logo_image'     => 'http://placehold.it/212x125',
                  'mt_clients_logo_name' => 'metrothemes',
                  'mt_clients_logo_url' => 'http://metrothemes.me',
                ),

             )
        ),


      )
    ),//Clients Logo Section end

  ),
);

// ------------------------------
// Code Integration             -
// ------------------------------
$options[]   = array(
  'name'     => 'integration_section',
  'title'    =>__('Code Integration', 'applause'),
  'icon'     => 'fa fa-code',
  'fields'   => array(

    //Heading
    array(
      'type'    => 'heading',
      'content' =>__('Code Integration', 'applause'),
    ),

    //Notice 
    array(
      'type'    => 'notice',
      'class'   => 'success',
      'content' =>__('You can your custom javascript and css code here also google analytics code', 'applause'), 
    ),

    //Custom Css
    array(
      'id'      => 'mt_custom_css',
      'type'    => 'textarea',
      'title'   =>__('Custom Css Code', 'applause'),
      'desc'    =>__('Custom css code for theme', 'applause'),
    ),


    //Custom js
    array(
      'id'      => 'mt_custom_js',
      'type'    => 'textarea',
      'title'   =>__('Custom Js Code', 'applause'),
      'desc'    =>__('Custom Js code for theme', 'applause'),
    ),




  )
);


// ------------------------------
// Typography               -
// ------------------------------
$options[]   = array(
  'name'     => 'customization_section',
  'title'    =>__('Typography', 'applause'),
  'icon'     => 'fa fa-paint-brush',
  'fields'   => array(

    //Heading
    array(
      'type'    => 'heading',
      'content' =>__('Theme Customiztion', 'applause'),
    ),

    //Notice 
    array(
      'type'    => 'notice',
      'class'   => 'success',
      'content' =>__('You can customize your theme font family and size from here ,you need to enable first the customization settings', 'applause'), 
    ),

    //Customization Enable / Disable .
    array(
      'id'         => 'mt_enable_customizer',
      'type'       => 'switcher',
      'title'      =>__('Enable Typography Customizer', 'applause'),
      'label'      =>__('You can enable / disable your customizer', 'applause'),
    ),

        array(
          'id'        => 'mt_typo_body',
          'type'      => 'typography',
          'title'     =>__('Body Font Family', 'applause'),
          'dependency' => array( 'mt_enable_customizer', '!=', '' ),
        ),

        array(
          'id'      => 'mt_typo_body_font_size',
          'type'    => 'number',
          'title'   =>__('Body Font Size', 'applause'),
          'default' => '16',
          'dependency' => array( 'mt_enable_customizer', '!=', '' ),
        ),

        array(
          'id'        => 'mt_typo_heading',
          'type'      => 'typography',
          'title'     =>__('Heading Font Family', 'applause'),
          'dependency' => array( 'mt_enable_customizer', '!=', '' ),
        ),


        array(
          'id'      => 'mt_typo_h1_font_size',
          'type'    => 'number',
          'title'   =>__('H1 Font Size', 'applause'),
          'default' => '36',
          'dependency' => array( 'mt_enable_customizer', '!=', '' ),
        ),

        array(
          'id'      => 'mt_typo_h2_font_size',
          'type'    => 'number',
          'title'   =>__('H2 Font Size', 'applause'),
          'default' => '30',
          'dependency' => array( 'mt_enable_customizer', '!=', '' ),
        ),

        array(
          'id'      => 'mt_typo_h3_font_size',
          'type'    => 'number',
          'title'   =>__('H3 Font Size', 'applause'),
          'default' => '24',
          'dependency' => array( 'mt_enable_customizer', '!=', '' ),
        ),

        array(
          'id'      => 'mt_typo_h4_font_size',
          'type'    => 'number',
          'title'   =>__('H4 Font Size', 'applause'),
          'default' => '18',
          'dependency' => array( 'mt_enable_customizer', '!=', '' ),
        ),  

        array(
          'id'      => 'mt_typo_h5_font_size',
          'type'    => 'number',
          'title'   =>__('H5 Font Size', 'applause'),
          'default' => '14',
          'dependency' => array( 'mt_enable_customizer', '!=', '' ),
        ),  

        array(
          'id'      => 'mt_typo_h6_font_size',
          'type'    => 'number',
          'title'   =>__('H6 Font Size', 'applause'),
          'default' => '12',
          'dependency' => array( 'mt_enable_customizer', '!=', '' ),
        ),  

  )
);


// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    =>__('Backup', 'applause'),
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => 'You can save your current options. Download a Backup and Import.',
    ),

    array(
      'type'    => 'backup',
    ),

  )
);




// ------------------------------
// donate                       -
// ------------------------------
$options[]   = array(
  'name'     => 'donate_section',
  'title'    =>__('Support', 'applause'),
  'icon'     => 'fa fa-life-ring',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => 'How to get support!'
    ),

    array(
      'type'    => 'content',
      'content' => 'If you face any problem with installing the theme ,please contact with me via my themeforest profile contact form .',
    ),


  )
);



CSFramework::instance( $settings, $options );