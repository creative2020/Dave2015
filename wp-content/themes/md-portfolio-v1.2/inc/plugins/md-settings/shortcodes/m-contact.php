<?php
global $bub_mt;
?>


						<div class="row">

							<div class="col-md-6">
								<?php if(cs_get_option( 'mt_getin_touch_title' ) != '') { ?>
									<h2><?php echo cs_get_option( 'mt_getin_touch_title' ); ?></h2>
								<?php } ?> 

								<ul class="get_in">
								<?php if(cs_get_option( 'mt_getin_touch_mail' ) != '') { ?>
									<li><i class="fa fa-envelope-o"></i><p><?php echo cs_get_option( 'mt_getin_touch_mail' ); ?></p></li>
								<?php } ?> 
								<?php if(cs_get_option( 'mt_getin_touch_phone' ) != '') { ?>
									<li><i class="fa fa-phone"></i><p><?php echo cs_get_option( 'mt_getin_touch_phone' ); ?></p></li>	
								<?php } ?> 
								<?php if(cs_get_option( 'mt_getin_touch_address' ) != '') { ?>
									<li><i class="fa fa-map-marker"></i><p><?php echo cs_get_option( 'mt_getin_touch_address' ); ?></p></li>
								<?php } ?> 
								<?php if(cs_get_option( 'mt_getin_touch_vcard' ) != '') { ?>
									<li><a href="<?php echo cs_get_option( 'mt_getin_touch_vcard' ); ?>"><i class="fa fa-cloud-download"></i><p>Download Vcard</p></a></li>	
								<?php } ?> 

								</ul><!-- end .get_in -->
							</div><!-- end .col-md-6 -->


							<div class="col-md-6">

								<?php if(cs_get_option( 'mt_getin_touch_contact_title' ) != '') { ?>
									<h2><?php echo cs_get_option( 'mt_getin_touch_contact_title' ); ?></h2>
								<?php } ?> 

							
					         	<?php 
					         		$contact_7 = cs_get_option( 'mt_getin_touch_contact_form' );
					         	if($contact_7 != '') { ?>
									<?php echo do_shortcode ($contact_7);  ?>
								<?php } ?> 								


							</div><!-- end .col-md-6 -->

								<?php if(cs_get_option( 'mt_getin_touch_google_map' ) != '') { ?>
									<div id="gmap" class="gmap col-md-12">				
									</div><!-- end .gmap .col-md-12 -->								
								<?php } ?> 


						</div><!-- end .row -->