<?php $theme_options = kadima_get_options();
	if(!is_front_page()){ ?>
		<div class="kadima_footer_area" style="padding: 10px 0 5px;">
			<div class="container">
				<div class="col-md-12">
					<!--<p class="kadima_footer_copyright_info" >
					<?php
						if($theme_options['footer_customizations']) { echo esc_attr($theme_options['footer_customizations']); }
						if($theme_options['info_copyright']) { echo "|" .esc_attr($theme_options['info_copyright']); } ?>
						<a target="_blank" rel="nofollow" href="<?php if($theme_options['info_fax']) { echo esc_url($theme_options['info_fax']); } ?>">
							<?php if($theme_options['info_tel']) { echo esc_attr($theme_options['info_tel']); } ?>
						</a>
					</p>-->
					<?php if($theme_options['footer_section_social_media_enbled'] == '1') { ?>
					<div class="kadima_footer_social_div">
						<ul class="social">
							<?php if($theme_options['fb_link']!='') { ?>
									 <li class="twitter" title="Facebook"><a class="twitter" href="<?php echo esc_url($theme_options['fb_link']); ?>"></a></li>
								<?php } if($theme_options['twitter_link']!='') { ?>
									<li class="twitter facebook" title="Twitter"><a class="twitter facebook" href="<?php echo esc_url($theme_options['twitter_link']) ; ?>"></a></li>
								<?php } if($theme_options['linkedin_link']!='') { ?>
									<li class="twitter chrome" title="Linkedin"><a class="twitter pinterest" href="<?php echo esc_url($theme_options['linkedin_link']) ; ?>"></a></li>
								<?php } if($theme_options['youtube_link']!='') { ?>
									<li class="twitter pinterest" title="Youtube"><a class="twitter pinterest" href="<?php echo esc_url($theme_options['youtube_link']) ; ?>"></a></li>
								<?php } if($theme_options['gplus']!='') { ?>
									<li class="twitter linkedin" title="gplus"><a class="twitter linkedin" href="<?php echo esc_url($theme_options['gplus']) ; ?>"></a></li>
								<?php } if($theme_options['instagram']!='') { ?>
									<li class="instagram" title="instagram"><a href="<?php echo esc_url($theme_options['instagram']) ; ?>"></a></li>
								<?php } ?>
						</ul>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
<?php		
	}
 ?>
</div>
<a href="#" title="Go Top" class="kadima_scrollup" style="display: inline;">
    <i class="fa fa-chevron-up"></i>
</a>
<?php if($theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($theme_options['custom_css']); } ?>
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
