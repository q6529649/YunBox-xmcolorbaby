<?php $theme_options = kadima_get_options(); ?>
<div class="content-grid">		
	<div class="col-md-12 product-bj" style="padding-top: 20px;padding-bottom: 40px;background-color: #fff;">
		<div class="container">
			<h3 style="text-align: center;font-size: 55px;color: #ff7f02;font-weight: 100;margin-bottom: 20px;">
				<?php echo $theme_options['custom_title_1']; ?>
			</h3>
			<h5 style="text-align:center;">
				<?php echo $theme_options['custom_title_sub_1']; ?>
			</h5>
			<div class="col-md-12 box_2" >					
				<div>
					<div class="most-1">
						<h6 style="text-align:center;margin-bottom: 30px;font-size: 16px;padding:0 45px;">
							<?php echo esc_attr($theme_options['custom_desciption_1']); ?>
						</h6>
					</div>
				</div>
			</div>
			<p class="p1" style="text-align:center;">
				<img src="//xmcolorbaby.site.yunclever.com/wp-content/themes/kadima/images/sp.jpg">
				<!--img class=" zoom-img" src="<?php echo esc_url($theme_options['port_img_'.$i]); ?>" alt="<?php echo esc_attr($theme_options['port_title_'.$i]); ?>"-->
			</p>
		</div>
	</div>
</div>
<section style="background-color: #ececec;">
<div class="col-md-12" style="background-image:url(../wp-content/themes/kadima/images/bjt.jpg);background-size:cover;background-position:top;color: #fff;padding-top:20px;padding-bottom:20px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12" >
				<div class="row">
					<?php for($i=1; $i<=4; $i++ ) { ?>
					<?php if($i==1||$i==3) { ?>
						<div class="col-md-6" style="padding:0px;">
					<?php } else { ?>
						<div class="col-md-6" style="padding:0px;">	
					<?php } ?>												
							<div>															
								<?php if($theme_options['custom_img_1_'.$i] !='') { ?>
									<?php if($i==1||$i==3) { ?>
										<div class="pull-right">
											<div class="col-md-1"></div>
											<i class="col-md-2">
												<img style="height: 75px;" src="<?php echo esc_url($theme_options['custom_img_1_'.$i]); ?>">
											</i>
											<div class="col-md-1"></div>
										</div>
										<div class="col-md-8 text-right">
											<h3 style="font-size: 18px; font-weight: bold; color:<?php echo esc_attr($theme_options['custom_title_color_1_'.$i]); ?>;">
												<?php echo esc_attr($theme_options['custom_title_1_'.$i]); ?>
											</h3>
											<p style="font-size: 16px">
												<?php echo apply_filters('the_content', $theme_options['custom_text_1_'.$i], true); ?>
											</p>
										</div>
									<?php } else { ?>
										<div class="pull-left">
											<div class="col-md-1"></div>
											<i class="col-md-2">
												<img style="height: 75px;" src="<?php echo esc_url($theme_options['custom_img_1_'.$i]); ?>">
											</i>
											<div class="col-md-1"></div>
										</div>
										<div class="col-md-8 pull-right text-left">
											<h3 style="font-size: 18px; font-weight: bold; color:<?php echo $theme_options['custom_title_color_1_'.$i]; ?>;">
												<?php echo esc_attr($theme_options['custom_title_1_'.$i]); ?>
											</h3>
											<p style="font-size: 16px">
												<?php echo apply_filters('the_content', $theme_options['custom_text_1_'.$i], true); ?>
											</p>
									</div>
									<?php } ?>									
								<?php } ?>
							</div>	
						</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
