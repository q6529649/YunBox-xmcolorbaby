<!-- about section -->
<?php $wl_theme_options = kadima_get_options(); ?>
<section id="what-we-do" class="what-we-do " style="background-color: #ececec;;">
			<div class="container">
					<div class="row">
							<div class="col-md-12 col-md-offset-1" style="margin-left: 0;padding-top:4em;padding-bottom:4em;">
									<div class="row">
									<?php for($i=1; $i<=4; $i++ ) { ?>
									<?php if($i==1||$i==3) { ?>
									<div class="col-md-6" style="border-right: 1px solid #d8d8d8;text-align: center;"></div<
									<?php } ?>
											
											<div class="col-md-6 col-sm-6 col-xs-12" style="pading-left:0;pading-right:0;">	
												
													<div class="do-box text-center" >
															
															<?php if($wl_theme_options['custom_img_1_'.$i] !='') { ?>
																<i class="lnr"><img style="float:right;" src="<?php echo esc_url($wl_theme_options['custom_img_1_'.$i]); ?>" style="height: 60px;"></i>
															<?php } ?>
													
															<div style="float: right;text-align: right;padding-top: 10px;padding-right: 20px;width: 80%;">
																<?php if($wl_theme_options['custom_title_1_'.$i] !='') { ?><h3 style="font-size: 18px;font-weight: bold;margin-top:0 !important;"><?php echo esc_attr($wl_theme_options['custom_title_1_'.$i]); ?></h3><?php } ?>
																<?php if($wl_theme_options['custom_text_1_'.$i] !='') { ?><p style="font-size: 16px"><?php echo apply_filters('the_content', $wl_theme_options['custom_text_1_'.$i], true); ?></p><?php } ?>
															</div>
															<a href="<?php echo esc_url($wl_theme_options['custom_link_1_'.$i]); ?>">
																<!--<?php if($wl_theme_options['about_slide_btn_text_'.$i] !='') { ?><p><?php echo apply_filters('the_content', $wl_theme_options['about_slide_btn_text_'.$i], true); ?></p><?php } ?>-->
															</a>
													</div>	
											</div>
										<?php }?>
									</div>
							</div>
					</div>
			</div>
	</section>
</div>
