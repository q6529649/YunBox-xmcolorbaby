<?php get_header(); 
get_template_part('breadcrums'); ?>
<div style="padding-top:40px;">
	<div class="container">	
		<div class="row kadima_blog_wrapper">
			<div class="col-md-12">	
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
				<?php get_template_part('post','content'); 
				get_template_part('author','intro');
				endwhile; 
				else : 
				get_template_part('nocontent');
				endif;
				kadima_navigation_posts();
				?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>