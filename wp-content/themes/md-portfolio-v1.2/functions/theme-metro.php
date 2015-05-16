<?php
$bub_mt = get_option('bub_mt');

/**
*
* Load theme stylessheets
*
*/
function theme_mt_styles(){
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', false, false, 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome/font-awesome.min.css', false, false, 'all');
    //wp_enqueue_style('fontello', get_template_directory_uri().'/css/fontello/css/fontello.css', false, false, 'all');
    wp_enqueue_style('styles', get_template_directory_uri().'/css/styles.css', false, false, 'all');
    wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css', false, false, 'all');
    wp_enqueue_style('owl.carousel', get_template_directory_uri().'/css/owl.carousel.css', false, false, 'all');
    wp_enqueue_style('owl.theme', get_template_directory_uri().'/css/owl.theme.css', false, false, 'all');
    wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css', false, false, 'all');
    wp_enqueue_style('googlefont', 'http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Raleway:400,100,200,300,500,600,700,800,90|Arizonia', false, false, 'all');
}
add_action('wp_enqueue_scripts', 'theme_mt_styles');


/**
*
* Load theme stylessheets
*
*/
function theme_mt_scripts() {
    wp_enqueue_script( 'appear', get_template_directory_uri() . '/js/appear-min.js', array('jquery'), false, true);
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'gmap3', get_template_directory_uri() . '/js/gmap3-min.js', array('jquery'), false, true);
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/jquery.easing-1.3.pack-min.js', array('jquery'), false, true);
    wp_enqueue_script( 'easypiechart', get_template_directory_uri() . '/js/jquery.easypiechart.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'onepagenav', get_template_directory_uri() . '/js/jquery.nav-min.js', array('jquery'), false, true);
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/jquery.parallax-1.1.3-min.js', array('jquery'), false, true);
    wp_enqueue_script( 'scrollTo', get_template_directory_uri() . '/js/jquery.scrollTo-min.js', array('jquery'), false, true);
    wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/jquery.sticky-min.js', array('jquery'), false, true);
    wp_enqueue_script( 'owljs', get_template_directory_uri() . '/js/owl.carousel-min.js', array('jquery'), false, true);
    wp_enqueue_script( 'skrollr', get_template_directory_uri() . '/js/skrollr-min.js', array('jquery'), false, true);
    wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll-min.js', array('jquery'), false, true);
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), false, true);
    wp_enqueue_script( 'jflickrfeed', get_template_directory_uri() . '/js/jflickrfeed.js', array('jquery'), false, true);
    wp_enqueue_script( 'mapssensor', 'http://maps.google.com/maps/api/js?sensor=false', array('jquery'), false, true );


    if ( is_singular() && get_option( 'thread_comments' ) )
            wp_enqueue_script( 'comment-reply' );
}
add_action('wp_enqueue_scripts', 'theme_mt_scripts');




/**
*
* Requried File's
*
*/
require_once (get_template_directory() . '/inc/metabox/custom-meta-boxes.php');  //CUSTOM METABOXES
require_once(get_template_directory() . '/functions/theme-metabox.php'); //Theme METABOX
require_once(get_template_directory() . '/functions/theme-functions.php'); //Theme Fucntions 
require_once(get_template_directory() . '/functions/widgets/flickr_widget.php');  //Flickr widget
require_once(get_template_directory() . '/functions/widgets/dribbble_widget.php');  //Dribbble widget
require_once(get_template_directory() . '/functions/theme-walker-nav.php'); //Theme Walker Navigation
require_once (get_template_directory() . '/cs-framework/cs-framework.php'); //FrameWork



/**
*
* Framework Enable/Disable 
*
*/
define( 'CS_ACTIVE_FRAMEWORK',  true  ); // default true
define( 'CS_ACTIVE_METABOX',    true ); // default true
define( 'CS_ACTIVE_SHORTCODE',  false ); // default true
define( 'CS_ACTIVE_CUSTOMIZE',  false ); // default true


/**
*
* Add Theme Support
*
*/

//Post Formats
add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio', 'quote' ) );
add_post_type_support( 'my_custom_post_type', 'post-formats' );
//add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio', 'image', 'link', 'quote', 'aside' ) );

add_theme_support( 'automatic-feed-links' );
add_editor_style('editor-style.css');
add_theme_support( 'custom-header');
add_theme_support( 'custom-background'); 
add_theme_support( 'title-tag' );
add_theme_support( 'html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
  ) );

if ( ! isset( $content_width ) ) $content_width = 1170;


/**
*
* Post excerpt length
*
*/

function custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 116 );
function new_excerpt_more($more) {
       global $post;
  return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
/*
function new_excerpt_more($more) {
       global $post;
  return '<br /><br /><a href="'. get_permalink($post->ID) . '"class="btn">Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
*/


/**
*
* Thumbnail & Image resize
*
*/

function portfolio_thumbnail_url($pid){
  $image_id = get_post_thumbnail_id($pid);  
  $image_url = wp_get_attachment_image_src($image_id,'screen-shot');  
  return  $image_url[0];  
}
//Post thumbnails
  add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 771, 270, true ); 


//Custom image resize
if ( function_exists( 'add_image_size' ) ) { 
  add_image_size( 'event-image', 150, 200, true );
  add_image_size( 't-member', 270, 178, true );
  add_image_size( 'gallery', 235, 155, true );

  //add_image_size( 'single-posts', 838, 260, true );
  add_image_size( 'portfolio_img', 250, 188, true );
}



/**
*
* Theme Translation
*
*/
add_action('after_setup_theme', 'metrothemes_lang_setup');
   function metrothemes_lang_setup(){
        load_theme_textdomain('applause', get_template_directory() . '/languages');
   }



/**
*
* Register Menus
*
*/
function register_menus() {
  register_nav_menus( array( 'top-menu' => 'Primary Menu'));
}
add_action('init', 'register_menus');


/**
*
* Recent post widget 
*
*/

function mt_get_recent_posts(){
    $count = cs_get_option( 'mt_recent_post_widget' );
    $posts = get_posts(array(
        "posts_per_page"=>$count,
        "order_by"=>"post_date",
        "order"=>"DESC"
    ));
    return $posts;
}

/**
*
* Related portfolio post  
*
*/

function mt_get_related_portfolio(){
    //$count = cs_get_option( 'mt_recent_post_widget' );
    $posts = get_posts(array(
        "post_type" => "portfolio",
        "posts_per_page"=>3,
        "orderby"=>"rand",
    ));
    return $posts;
}


function mt_string_truncate($string, $limit=80, $break=".", $pad="")
{
    // return with no change if string is shorter than $limit
    if(strlen($string) <= $limit) return $string;

    // is $break present between $limit and the end of the string?
    if(false !== ($breakpoint = strpos($string, $break, $limit))) {
        if($breakpoint < strlen($string) - 1) {
            $string = substr($string, 0, $breakpoint) . $pad;
        }
    }
    return $string;
}


/**
*
* Register widget area.
*
*/

function metro_widgets_init() {

    //Footer Left
    register_sidebar(array(
        'name' => __( 'Footer Left', 'applause' ),
        'id'   => 'footer-left',
         'description'   => '',
        'before_widget' => '<div class="side_bar_widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    //Footer Middle
    register_sidebar(array(
        'name' => __( 'Footer Middle', 'applause' ),
        'id'   => 'footer-middle',
         'description'   => '',
        'before_widget' => '<div class="side_bar_widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    //Footer Right 
    register_sidebar(array(
        'name' => __( 'Footer Right', 'applause' ),
        'id'   => 'footer-right',
         'description'   => '',
        'before_widget' => '<div class="side_bar_widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

  }
add_action( 'widgets_init', 'metro_widgets_init' );

?>
