<?php get_header(); ?>
<div class="kadima_header_breadcrum_title">	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                <?php if (function_exists('kadima_breadcrumbs')) kadima_breadcrumbs(); ?>
			</div>
		</div>
	</div>	
</div>
<div class="container">
	<div class="row kadima_blog_wrapper">
		<div class="col-md-12">
			<?php woocommerce_content(); ?>
		</div>
	</div>
</div>	
<?php get_footer(); ?>