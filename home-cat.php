<?php $theme_options = kadima_get_options();?>
<div class="index_service_area">
	<div class="container">
		<div class="col-md-12 fadeInLeft animated" data-wow-delay="0.5s">
			<h3><?php echo esc_attr($theme_options['service_heading']); ?></h3>
			<div class="container">	
				<div class="row" id="kadima_blog_section">
					<div class="col-md-12">
						<div class="row">					
						<?php for($i=1; $i<=4; $i++ ) { ?>
							<div class="col-md-3 news-grid wow fadeInLeft animated" data-wow-delay="0.4s">
								<div style="background-color: #fff;border-radius: 10% 10% 100px 100px;">
									<a href="<?php echo esc_url($theme_options['service_link_'.$i]); ?>">
										<img src="<?php echo esc_attr($theme_options['service_img_'.$i]); ?>" alt="<?php echo esc_attr($theme_options['service_text_'.$i]); ?>" style="border-radius: 10% 10% 0 0;">
										<div class="service-text text-center">
											<?php echo esc_attr($theme_options['service_text_'.$i]); ?>
										</div>
									</a>
								</div>
							</div>
						<?php } ?>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>