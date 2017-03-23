<?php
get_header();
$theme_options = kadima_get_options();
$theme_options['_frontpage'];
if ($theme_options['_frontpage']=="1" && is_front_page())
{
	get_template_part('home','slideshow');
	get_template_part('home','cat');
	get_template_part('home','about');
	get_template_part('home','news');
	get_template_part('home','footermsg');
	get_footer();
}
else
{
	if(is_page()){
		get_template_part('page');
	}else{
		get_template_part('index');
	}
}
?>
