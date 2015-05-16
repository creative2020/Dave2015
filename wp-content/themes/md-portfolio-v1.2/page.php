<?php
global $bub_mt;
get_header('mt');
?>

<?php 
$i = 1;
while ( have_posts() ) : the_post(); ?>

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



<?php get_footer();?>