<?php //Template Name:Full-Width-About Page
get_header(); 
get_template_part('breadcrums'); ?>
<div style="padding-top: 40px; background:url(//www.xmcolorbaby.com/wp-content/themes/kadima/images/about-bg.png);-moz-background-size:100% 100%; background-size:100% 100%;">
	<div class="container">
		<div class="row kadima_blog_wrapper">
			<div class="col-md-12">
				<div style="padding:1em;">
					<img src="//www.xmcolorbaby.com/wp-content/themes/kadima/images/about-title.png" />
				</div>	
				<?php get_template_part('post','page'); ?>	
			</div>		
		</div>
	</div>
<div>
<?php get_footer(); ?>