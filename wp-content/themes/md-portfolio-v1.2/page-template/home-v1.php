<?php
/*
Template name: Home V1
*/
global $bub_mt;
get_header(); ?>
<!-- Navigation -->
    <div class="main-menu-continer">
        <nav id="main-menu" class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only"><?php _e( 'Toggle navigation', 'Applause') ?></span>
                        <i class="fa fa-navicon"></i>
                    </button>
                    <!-- Logo -->
                    <?php if(cs_get_option( 'mt_site_logo' ) != '') { ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo">
                            <img src="<?php echo cs_get_option( 'mt_site_logo' );?>" alt="<?php echo get_bloginfo('name'); ?>">
                        </a> 
                    <?php } ?> 
                    <!-- Logo -->
                </div><!-- End .navbar-header -->


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!-- Navigation -->
                  <?php wp_nav_menu(array(
                      'theme_location' => 'top-menu',
                      'container' => '',
                      'menu_class' => 'nav navbar-nav', 
                      'menu_id' => 'navs',
                      'fallback_cb' => 'show_top_menu_inset',
                      'echo' => true,
                      'walker' => new OnepageMyWalkerNavMenu(),
                      'depth' => 3 ) ); 
                  ?>                  
                <!-- Navigation End -->
                </div><!-- End .collapse -->
            </div><!-- End .container -->
        </nav><!-- End #main-menu -->
    </div>
<!-- End of Navigation -->
<!-- Section : Home -->
    <section id="home" class="home-parallax" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        <div class="home-overlay-v2">   
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
        </div><!-- end .home-overlay -->
    </section>
<!-- Section : Home end -->

<?php get_footer(); ?>