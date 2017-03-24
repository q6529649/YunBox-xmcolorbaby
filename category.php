<?php
get_header(); 
get_template_part('breadcrums'); ?>
<div style="padding-top:40px; background-color:#f3f3f3;">
	<div class="container">	
		<div class="row kadima_blog_wrapper">
			<div class="col-md-12">
			<?php 
			if ( have_posts()): 
				while ( have_posts() ): the_post();
					get_template_part('post','content'); ?>	
			<?php endwhile; 
			endif; 
			kadima_navigation(); ?>
			</div>	
		</div>
	</div>
</div>
<?php get_footer(); ?>