<?php $theme_options = kadima_get_options(); ?>
<div class="kadima_footer_widget_area">
	<div class="container" style="padding-top:20px;">
		<div class="row">
			<div class="col-md-5">
				<div class="row" style="margin-bottom: 20px;">
					<h6 class="col-md-2 pull-left">ADD: </h6>
					<span class="col-md-10" style="color:#fff;">No.250, Jinting North Road, Xinlin Zhongyacheng, Jimei District, Xiamen, China</span>
				</div>
				<div class="row" style="margin-bottom: 20px;">
					<h6 class="col-md-2 pull-left" >TEL: </h6>
					<span class="col-md-10" style="color:#fff;">0086-592-6099836</span>
				</div>
				<div class="row" style="margin-bottom: 20px;">
					<h6 class="col-md-2 pull-left">FAX: </h6>
					<span class="col-md-10" style="color:#fff;">0086-592-6099557</span>
				</div>
				<div class="row" style="margin-bottom: 20px;">
					<h6 class="col-md-2 pull-left">Email: </h6>
					<span class="col-md-10" style="color:#fff;">sales8@xmcolorbaby.com</span>
				</div>
				<?php if($theme_options['footer_section_social_media_enbled'] == '1') { ?>
				<div class="row">
					<div class="col-md-12 kadima_footer_social_div">						
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
				</div>
				<?php } ?>
			</div>
			<div class="col-md-7">
				<div class="csstransforms3d" style="margin-bottom: 20px;">	
					<span style="color:#fff;">If you have any questions or comments, please contact us using the form below.</span>
					<input id="yourname" class="form-control" style="height: 34px; background-color: #fff;margin-bottom: 10px;margin-top: 20px;" type="email" placeholder="Name" />
					<input id="yourname" class="form-control" style="height: 34px; background-color: #fff;margin-bottom: 10px;" type="email" placeholder="Email" />
					<textarea id="yourmessage" name="yourmessage" class="form-control" rows="5" placeholder="Message" value=""></textarea>
					<div class="cl-effect-2" style="margin-top:10px;">
						<a style="color:#fff;font-size:1.2em;text-align: center;">
							<span data-hover="SEND">SEND</span>
						</a>
					</div>
				</div>
			</div>					
		</div>   
	</div>
</div>