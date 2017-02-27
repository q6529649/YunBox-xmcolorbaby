<?php $wl_theme_options = kadima_get_options(); ?>
<div class="kadima_footer_widget_area">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div style="margin-bottom: 20px;">
					<h6 style="margin-top:0;margin-bottom:0;color:#fff;">ADD: </h6>
					<span style="color:#fff;">No.250, Jinting North Road, Xinlin Zhongyacheng, Jimei District, Xiamen, China</span>
				</div>
				<div style="margin-bottom: 20px;">
					<h6 style="margin-top:0;margin-bottom:0;color:#fff;">TEL: </h6>
					<span style="color:#fff;">0086-592-6099836</span>
				</div>
				<div style="margin-bottom: 20px;">
					<h6 style="margin-top:0;margin-bottom:0;color:#fff;">FAX: </h6>
					<span style="color:#fff;">0086-592-6099557</span>
				</div>
				<div style="margin-bottom: 20px;">
					<h6 style="margin-top:0;margin-bottom:0;color:#fff;">Email: </h6>
					<span style="color:#fff;">sam@xmcolorbaby.com</span>
				</div>
			</div>
			<div class="col-md-7">
				<div style="margin-bottom: 20px;">	
					<span style="color:#fff;">f you have any questions or comments, please contact us using the form below.</span>
						<input id="yourname" class="form-control" style="height: 34px; background-color: #fff;margin-bottom: 10px;margin-top: 20px;" type="email" placeholder="Name" />
						<input id="yourname" class="form-control" style="height: 34px; background-color: #fff;margin-bottom: 10px;" type="email" placeholder="Email" />
						<textarea id="yourmessage" name="yourmessage" class="form-control" rows="5" placeholder="Message" value=""></textarea>
						<p style="margin-top:10px;"><button style="background-color:#ffb01e;color:#fff; padding-right: 30px;padding-left: 30px; "  class="btn btn-default" type="submit">SEND</button></p>
				</div>
			</div>					
		</div>   
	</div>
</div>
<div class="kadima_footer_area">
	<div class="container">
		<div class="col-md-12">
			<p class="kadima_footer_copyright_info" >
			<?php
				if($wl_theme_options['footer_customizations']) { echo esc_attr($wl_theme_options['footer_customizations']); }
				if($wl_theme_options['info_copyright']) { echo "|" .esc_attr($wl_theme_options['info_copyright']); } ?>
				<a target="_blank" rel="nofollow" href="<?php if($wl_theme_options['info_fax']) { echo esc_url($wl_theme_options['info_fax']); } ?>">
					<?php if($wl_theme_options['info_tel']) { echo esc_attr($wl_theme_options['info_tel']); } ?>
				</a>
			</p>
			<?php if($wl_theme_options['footer_section_social_media_enbled'] == '1') { ?>
			<div class="kadima_footer_social_div">
				<ul class="social">
					<?php if($wl_theme_options['fb_link']!='') { ?>
					<li class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><a  href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"><i class="fa fa-facebook"></i></a></li>
					<?php } if($wl_theme_options['twitter_link']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="<?php echo esc_url($wl_theme_options['twitter_link']) ; ?>"><i class="fa fa-twitter"></i></a></li>
					<?php } if($wl_theme_options['linkedin_link']!='') { ?>
					<li class="linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"><a href="<?php echo esc_url($wl_theme_options['linkedin_link']) ; ?>"><i class="fa fa-linkedin"></i></a></li>
					<?php } if($wl_theme_options['youtube_link']!='') { ?>
					<li class="youtube" data-toggle="tooltip" data-placement="top" title="Youtube"><a href="<?php echo esc_url($wl_theme_options['youtube_link']) ; ?>"><i class="fa fa-youtube"></i></a></li>
					<?php } if($wl_theme_options['gplus']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="top" title="gplus"><a href="<?php echo esc_url($wl_theme_options['gplus']) ; ?>"><i class="fa fa-google-plus"></i></a></li>
					<?php } if($wl_theme_options['instagram']!='') { ?>
					<li class="facebook" data-toggle="tooltip" data-placement="top" title="instagram"><a href="<?php echo esc_url($wl_theme_options['instagram']) ; ?>"><i class="fa fa-instagram"></i></a></li>
					<?php } ?>
				</ul>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- /Footer Widget Secton -->
</div>
<a href="#" title="Go Top" class="kadima_scrollup" style="display: inline;">
    <i class="fa fa-chevron-up"></i>
</a>
<?php if($wl_theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($wl_theme_options['custom_css']); } ?>
</style>
<?php wp_footer(); ?>
<?php
	$language = get_client_language();
	if ($language != 'zh-cn') {
?>
	<script type='text/javascript' src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
		}
	</script>
<?php
	}
?>
</body>
</html>
