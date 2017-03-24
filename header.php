<!DOCTYPE html>
<!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>" />
	<?php $theme_options = kadima_get_options(); ?>
	<?php if($theme_options['upload_image_favicon']!=''){ ?>
	<link rel="shortcut icon" href="<?php  echo esc_url($theme_options['upload_image_favicon']); ?>" />
	<?php } ?>	
	<?php
		if (is_home()) {
			echo '<meta http-equiv="x-dns-prefetch-control" content="on" />
			<link rel="dns-prefetch" href="//cdn.yunclever.com">
			<link rel="dns-prefetch" href="//cdn.bootcss.com">
			<link rel="dns-prefetch" href="//static.addtoany.com">
			<link rel="dns-prefetch" href="//use.typekit.net">';
		} elseif (isset($_COOKIE['yc_visit_cookie'])) {
			echo '';
		}
		else {
			echo '<meta http-equiv="x-dns-prefetch-control" content="on" />
			<link rel="dns-prefetch" href="//cdn.yunclever.com">
			<link rel="dns-prefetch" href="//cdn.bootcss.com">
			<link rel="dns-prefetch" href="//static.addtoany.com">
			<link rel="dns-prefetch" href="//use.typekit.net">';
		}
	?>	
	<?php wp_head(); ?>
	<script src="https://use.typekit.net/nda5ask.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<script type="text/javascript">
	  var _paq = _paq || [];
	  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
		var u="//analytics.yunclever.com/";
		_paq.push(['setTrackerUrl', u+'piwik.php']);
		_paq.push(['setSiteId', '18']);
		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
		g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>

</head>
<body <?php body_class(); ?>>

<div>
	<div class="navigation_menu"  data-spy="affix" data-offset-top="95" id="kadima_nav_top">
		<div class="container navbar-container" >
			<nav class="navbar navbar-default " role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
					  <span class="sr-only"><?php _e('Toggle navigation','kadima');?></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
				</div>
				<div class="logo">
					<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php if($theme_options['upload_image_logo']){ ?>
						<img class="img-responsive" src="<?php echo $theme_options['upload_image_logo']; ?>" style="height:<?php if($theme_options['height']!='') { echo $theme_options['height']; }  else { "80"; } ?>px; width:<?php if($theme_options['width']!='') { echo $theme_options['width']; }  else { "200"; } ?>px;" />
						<?php } else {
							echo get_bloginfo('name');
						} ?>
					</a>
				
					</div>
				<div id="menu" class="collapse navbar-collapse" style="margin-top:1vh;">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class' => 'nav navbar-nav cl-effect-14',
							'walker' => new kadima_nav_walker(),
							)
						);
					?>
					<div style="margin-top:1vh;">
						<a href="//www.xmcolorbaby.com/product" target="_blank"><i class="shopimg"></i></a>
					</div>
					<div id="google_translate_element"></div>
				</div>
			</nav>
		</div>
	</div>
