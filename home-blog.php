<div class="kadima_blog_area ">
<?php $wl_theme_options = kadima_get_options();?>
	<div class="specialty">
		<div class="container">
			<div class="col-md-12 specialty-info wow fadeInLeft animated animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
				<h3><?php echo esc_attr($wl_theme_options['blog_title']); ?></h3>
				<div class="container">	
					<div class="row" id="kadima_blog_section">
						<div class="col-md-1">
							<div id="port-next" class="kadima_carousel-prev" ><i class="fa fa-arrow-left"></i></div>
						</div>
							<div class="col-md-10">
								<div class="row">
								<?php
									if ( have_posts()) : 		
										$args = array( 'post_type' => 'post','posts_per_page' => 5 ,'ignore_sticky_posts' => 1);		
										$post_type_data = new WP_Query( $args );
										while($post_type_data->have_posts()):
											$post_type_data->the_post();
								?>
									<div class="kadima_blog_thumb_wrapper col-md-3">
										<?php
											$img = array('class' => 'kadima_img_responsive');
											if(has_post_thumbnail()): 
												the_post_thumbnail('home_post_thumb',$img);
											endif;
										?>							
									</div>
								<?php
									endwhile; 
								endif; ?>										
								</div>	
							</div>
						<div class="col-md-1">
							<div id="port-prev" class="kadima_carousel-next" ><i class="fa fa-arrow-right"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>