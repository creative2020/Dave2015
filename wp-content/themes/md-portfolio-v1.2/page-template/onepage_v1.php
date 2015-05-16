<?php
/*
Template name: OnePage V1
*/
global $bub_mt;
get_header(); ?>


<!-- header  -->
<nav id="header">
                  <?php wp_nav_menu(array(
                      'theme_location' => 'top-menu',
                      'container' => '',
                      'menu_class' => 'navone', 
                      'menu_id' => 'navs',
                      'fallback_cb' => 'show_top_menu_inset',
                      'echo' => true,
                      'walker' => new OnepageMyWalkerNavMenu(),
                      'depth' => 3 ) ); 
                  ?>           
    <!-- navigation end -->

    <a id="open-nav" class="nav-half fa fa-bars"><span class="nav-menu"><?php _e( 'Menu', 'Applause') ?></span>
        <i></i>
    </a>

</nav>
<!-- header end -->

<!-- Section : Home -->
    <section id="home" class="home-parallax" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        <div class="home-overlay">   
            <div class="container">
                <div class="col-md-12">

                <?php if(cs_get_option( 'mt_site_logo_big' ) != '') { ?>
                    <div class="logo"><img src="<?php echo cs_get_option( 'mt_site_logo_big' );?>" class="img-responsive" alt="<?php echo get_bloginfo('name'); ?>"></div><!-- end .logo -->
                <?php } ?> 


                    <div class="info">
                        <h2><?php echo cs_get_option( 'mt_your_name' );?></h2>
                        <h3><?php echo cs_get_option( 'mt_your_short_title' );?></h3>
                    </div><!-- end .info -->


                    <!-- Social Links -->
                    <?php echo metro_social_links();?>

                </div><!-- end .col-md-12 -->
            </div><!-- end .cotainer -->

        <?php if(cs_get_option( 'mt_site_avater' ) != '') { ?>
            <div class="avatar-section">
                <img src="<?php echo cs_get_option( 'mt_site_avater' );?>" class="img-responsive" alt="<?php echo cs_get_option( 'mt_your_name' );?>">
            </div><!-- end .avatar-section -->
        <?php } ?> 

        </div><!-- end .home-overlay -->
    </section>
<!-- Section : Home end -->

 <?php 

    if ( ( $locations = get_nav_menu_locations() ) && $locations['top-menu'] ) {
        $menu = wp_get_nav_menu_object( $locations['top-menu'] );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        $include = cs_get_option( 'mt_onepage_control' );

        query_posts( array( 'post_type' => 'page', 'post__in' => $include, 'posts_per_page' => count($include), 'orderby' => 'post__in' ) );
    }
    else
    {
        if(cs_get_option( 'mt_onepage_control' ) != '' )
            query_posts(array( 'post_type' => 'page', 'post__in' => cs_get_option( 'mt_onepage_control' ), 'posts_per_page' => count(cs_get_option( 'mt_onepage_control' )), 'orderby' => 'menu_order', 'order' => 'ASC' ) );
        else
            query_posts(array( 'post_type' => 'page', 'posts_per_page' => 10, 'orderby' => 'menu_order', 'order' => 'ASC' ) );
    }
    $i = 1;


    while(have_posts() ) : the_post(); ?>

<?php
        //Section Styles

        $meta_data = get_post_meta( get_the_ID(), 'page_metabox', true );
        $id = get_the_ID();
        $slug = $post->post_name;

        echo  '<style>';
        echo  '#'.$slug.'{';



                                    if ( !empty($meta_data['p_back_image']) ):
                                        echo 'background-image:url("'.$meta_data['p_back_image'].'");';
                                    endif;

                                    if ( !empty($meta_data['p_text_colorpicker']) ):
                                        echo ' color:'.$meta_data['p_text_colorpicker'].';';
                                    endif;
        echo  '}';
        echo  '#'.$slug.' .section-title > h2, #'.$slug.' .section-title > P{';

                                   if ( !empty($meta_data['p_text_colorpicker']) ):
                                        echo 'color:'.$meta_data['p_text_colorpicker'].';';
                                    endif;   

        echo  '}';
        echo  '.overlay-'.$slug.'{';

                                    if ( !empty($meta_data['p_bg_colorpicker']) ):
                                        echo 'background-color:'.$meta_data['p_bg_colorpicker'].';';
                                    endif; 


                                    if ( !empty($meta_data['p_padding']) ):
                                        echo 'padding: '.$meta_data['p_padding'].'px 0;';
                                    endif; 

        echo  '}';
        echo  '</style>';


?>
    <!-- section -->
    <section id="<?php echo $post->post_name;?>" class="section"  data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        <!-- section overlay -->
        <div class="overlay-<?php echo $post->post_name;?>">
            <div class="container">
                        <!-- Section Title -->
                            <div class="section-title" >
                                <h2>
                                    <?php 

                                    $meta_data = get_post_meta( get_the_ID(), 'page_metabox', true );

                                    if ( !empty($meta_data['p_title']) ) { 
                                        echo $meta_data['p_title'];
                                    }
                                    else the_title();


                                    ?>
                                </h2>
                                <span class="border"></span>
                                <p>
                                    <?php 

                                    $meta_data = get_post_meta( get_the_ID(), 'page_metabox', true );

                                    if ( !empty($meta_data['top_short_des']) ) { 
                                        echo $meta_data['top_short_des'];
                                    } 

                                   ?>
                                </p>
                            </div>
                        <!-- Section Title End -->         
                <?php global $more; $more = 0; the_content('');?>
            </div> 
        </div>
        <!-- section overlay end -->   
    </section>
    <!-- end of sections -->    

<?php 
    $sp_data = get_post_meta( get_the_ID(), 'separator_metabox', true );

    if(isset($sp_data['separator-on-off']) && $sp_data['separator-on-off'] == 1): 
?> 

<?php
    //Separator Styles

    $sp_data = get_post_meta( get_the_ID(), 'separator_metabox', true );
    echo '<style>';

            echo '#separator_'.$i.'{ ';

                                    if ( !empty($sp_data['sp_back_image']) ):
                                        echo 'background-image:url("'.$sp_data['sp_back_image'].'");';
                                    endif;

                                    if ( !empty($sp_data['sp_text_colorpicker']) ):
                                        echo ' color:'.$sp_data['sp_text_colorpicker'].';';
                                    endif;

            echo '}';

            echo '.parallax h1 ,.parallax h2,.parallax h2,.parallax p{';
                                    if ( !empty($sp_data['sp_text_colorpicker']) ):
                                        echo 'color:'.$sp_data['sp_text_colorpicker'].';';
                                    endif;   
            echo '}';

            echo '.parallax-overlay-'.$i.'{';

                                    if ( !empty($sp_data['sp_bg_colorpicker']) ):
                                        echo 'background-color:'.$sp_data['sp_bg_colorpicker'].';';
                                    endif;   
            echo '}';

            echo '.parallax .container{';
                                    if ( !empty($sp_data['sp_padding']) ):
                                        echo 'padding: '.$sp_data['sp_padding'].'px 20px;';
                                    endif; 
            echo '}';
    echo '</style>';

?>
  


    <div id="separator_<?php echo $i;?>" class="parallax" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        <div class="parallax-overlay-<?php echo $i;?>"> 
            <div class="container">
                <div class="col-md-12">
                    <?php 
                        $sp_data = get_post_meta( get_the_ID(), 'separator_metabox', true );

                        if ( !empty($sp_data['sp_title']) ):

                        $output = '

                                <!--Title-->
                                <div class="title">
                                    <h2>'.$sp_data['sp_title'] .'</h2>
                                    <span class="border"></span>
                                </div>
                                <!--Title-->

                             ';

                        $output =  preg_replace( '/\s+/', ' ', $output );
                        echo $output;

                        endif;
                            
                        echo do_shortcode ($sp_data['sp_content']);
                    ?> 
                </div><!-- end .col-md-12 -->               
            </div><!-- end .container --> 
        </div><!-- end .parallax-overlay -->
     </div>

    <!-- end of separator -->
<?php endif; ?>

<?php $i++; endwhile; wp_reset_postdata(); ?> 


<?php get_footer(); ?>