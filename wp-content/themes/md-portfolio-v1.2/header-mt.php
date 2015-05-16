<?php global $bub_mt; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
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
                      'walker' => new BootstrapBasicMyWalkerNavMenu(),
                      'depth' => 3 ) ); 
                  ?>                  
                <!-- Navigation End -->
                </div><!-- End .collapse -->
            </div><!-- End .container -->
        </nav><!-- End #main-menu -->
    </div>
<!-- End of Navigation -->






  
    