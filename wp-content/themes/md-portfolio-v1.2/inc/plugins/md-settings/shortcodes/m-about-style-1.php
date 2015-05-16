                        <div class="row">
                            <div class="col-md-4">
                                <div class="about-info">

                                    <?php
                                            
                                            echo  '<div class="info-title">';
                                        $PPData = cs_get_option( 'mt_about_info' );
                                        foreach ($PPData as $PPable ) {
                                            $PPData = $PPable;                                    
                                            echo  '<p>' . $PPData['mt_about_info_text'] . '</p>';
                                             }
                                            echo  '</div>';


                                            echo  '<div class="info-details">';
                                        $TTData = cs_get_option( 'mt_about_info' );
                                        foreach ($TTData as $TTable ) {
                                            $TTData = $TTable;                                    
                                            echo  '<p>: ' . $TTData['mt_about_info_textarea'] . ' </p>';
                                             }
                                            echo  '</div>';
                                    ?>

                                    <p class="about-signature"><?php echo cs_get_option( 'mt_signature' );?></p>


                                    <?php if(cs_get_option( 'mt_dw_cv' ) != '') { ?> 
                                    <a href="<?php echo cs_get_option( 'mt_dw_cv' );?>" class="mt-button large btn"><i class="fa fa-download"></i><span><?php echo cs_get_option( 'mt_dw_title' );?></span></a>
                                    <?php } ?>  

                                </div> <!-- end .about-info -->

                            </div> <!-- end .col-md-4 -->
                            <div class="col-md-8">
                                <div class="about-extra">

                                    <h4><?php echo cs_get_option( 'mt_hobbie_title' );?></h4>
                                    <div class="about-extra-icon">
                                        <ul>
                                            <?php                                        
                                                $CCData = cs_get_option( 'mt_hobbie_info' );
                                                foreach ($CCData as $CCable ) {
                                                    $CCData = $CCable;   
                                                    echo  '<li>';   
                                                    echo  '<p><i class="' . $CCData['mt_hobbie_info_icon'] . '"></i><br><span>' . $CCData['mt_hobbie_info_text'] . '</span></p>';
                                                    echo  '</li>';                                        
                                                     }
                                            ?>            
                                        </ul>
                                    </div> <!-- end .about-extra-icon -->


                                </div><!-- end .about-extra -->             
                            </div><!-- end .col-md-8 -->    
                        </div><!-- end .col-md-row -->