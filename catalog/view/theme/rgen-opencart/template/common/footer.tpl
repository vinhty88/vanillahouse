	</div>
	<!-- <div class="content-body-wrapper"> close -->
	<div class="footer-wrapper">
		<?php 
			$On_customFT = $this->config->get('RGen_FT_Status');
			
			if ($On_customFT == 1 && $getRoute == 'common/home') {
				require 'catalog/view/theme/rgen-opencart/template/module/rgen_theme.tpl';
			}elseif ($On_customFT == 1 && $this->config->get('RGen_FT_Status_home') == 'all') {
				require 'catalog/view/theme/rgen-opencart/template/module/rgen_theme.tpl';
			}
		?>
		<?php  ?>

		<footer id="footer">
			<?php if ($informations) { ?>
			<div class="column">
				<h3 class="header-3"><?php echo $text_information; ?></h3>
				<ul>
					<?php foreach ($informations as $information) { ?>
					<li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
					<?php } ?>
				</ul>
			</div>
			<?php } ?>
			<div class="column">
				<h3 class="header-3"><?php echo $text_service; ?></h3>
				<ul>
					<li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
					<li><a href="<?php echo $return; ?>"><?php echo $text_return; ?></a></li>
					<li><a href="<?php echo $sitemap; ?>"><?php echo $text_sitemap; ?></a></li>
				</ul>
			</div>
			<!--<div class="column">
				<h3 class="header-3"><?php /*echo $text_extra; ?></h3>
				<ul>
					<li><a href="<?php echo $manufacturer; ?>"><?php echo $text_manufacturer; ?></a></li>
					<li><a href="<?php echo $voucher; ?>"><?php echo $text_voucher; ?></a></li>
					<li><a href="<?php echo $affiliate; ?>"><?php echo $text_affiliate; ?></a></li>
					<li><a href="<?php echo $special; ?>"><?php echo $text_special;*/ ?></a></li>
				</ul>
			</div>-->
			<div class="column">
				<h3 class="header-3"><?php echo $text_account; ?></h3>
				<ul>
					<li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
					<li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
					<li><a href="<?php echo $wishlist; ?>"><?php echo $text_wishlist; ?></a></li>
					<li><a href="<?php echo $newsletter; ?>"><?php echo $text_newsletter; ?></a></li>
				</ul>
			</div>
			
			<?php if ($this->config->get('FT_Contact_status') == '1') { ?>
			<div class="column contact-info">
				<ul>
					<?php if ($this->config->get('FT_Contact_phStatus') == '1') { ?>
					<li>
						<span class="ph-image" title="Phone"></span>
						<span class="ph-text">
							<?php echo $this->config->get('FT_Contact_ph'); ?><br />
							<?php echo $this->config->get('FT_Contact_ph1'); ?>
						</span>
					</li>
					<?php } ?>
					
					<?php if ($this->config->get('FT_Contact_faxStatus') == '1') { ?>
					<li>
						<span class="fax-image" title="Fax"></span>
						<span class="fax-text">
							<?php echo $this->config->get('FT_Contact_fax'); ?> 
							<?php echo $this->config->get('FT_Contact_fax1'); ?>
						</span>
					</li>
					<?php } ?>
					
					<?php if ($this->config->get('FT_Contact_emailStatus') == '1') { ?>
					<li>
						<span class="email-image" title="Email us"></span>
						<a href="mailto:<?php echo $this->config->get('FT_Contact_email'); ?>" class="email-text"><?php echo $this->language->get('text_emailus'); ?></a></span>
					</li>
					<?php } ?>

				</ul>
			</div>
			<?php } ?>
			
		</footer>
		<div class="footer-bt">
			<table width="100%">
				<tr>
					<td>
						<?php if ($this->config->get('socialLink_fb_Status') == '1') : ?>
						<a href="<?php echo $this->config->get('socialLink_fb'); ?>" target="_blank" class="facebook-icon"></a>
						<?php endif; ?>
						
						<?php if ($this->config->get('socialLink_twitter_Status') == '1') : ?>
						<a href="<?php echo $this->config->get('socialLink_twitter'); ?>" target="_blank" class="twitter-icon"></a>
						<?php endif; ?>
						
						<?php if ($this->config->get('socialLink_youtube_Status') == '1') : ?>
						<a href="<?php echo $this->config->get('socialLink_youtube'); ?>" target="_blank" class="youtube-icon"></a>
						<?php endif; ?>
						
						<?php if ($this->config->get('socialLink_google_Status') == '1') : ?>
						<a href="<?php echo $this->config->get('socialLink_google'); ?>" target="_blank" class="google-icon"></a>
						<?php endif; ?>
						
						<?php if ($this->config->get('socialLink_mailTo_Status') == '1') : ?>
							<a class="mailto-icon addthis_button_email"></a>
						<?php endif; ?>
						
						<?php if ($this->config->get('socialLink_addThis_Status') == '1') { ?>
							<a class="addthis-icon addthis_button_compact"></a>
							<script type="text/javascript" src="//s7.addthis.com/js/250/addthis_widget.js"></script> 
						<?php } ?>
						
						<?php if(isset($this->document->RGen_social)) { ?>
							<?php foreach ($this->document->RGen_social as $result) { ?>
							<?php if($result && $result['status'] == 1) { ?>
							<a <?php if($result['url']){ ?>href="<?php echo $result['url']; ?>"<?php } ?> <?php if($result['normal']){ ?>target="_blank" style="background-image:url(catalog/view/theme/rgen-opencart/image/rgen/social-icons/<?php echo $result['normal']; ?>);" data-icon="<?php echo $result['normal']; ?>"<?php } ?> <?php if($result['hover']){ ?>data-hover="<?php echo $result['hover']; ?>"<?php } ?> class="custom-icon"></a>
							<?php } ?>
							<?php } ?>
						<?php } ?>
						<script type="text/javascript">
						$('.custom-icon').each(function(index, element) {
							$(this).hover(
								function(){
									if($(this).attr('data-hover')){
									$(this).css("background-image", 'url(catalog/view/theme/rgen-opencart/image/rgen/social-icons/' + $(this).attr('data-hover') + ')'); 
									}
								},
								function(){
									if($(this).attr('data-icon')){
									$(this).css("background-image", 'url(catalog/view/theme/rgen-opencart/image/rgen/social-icons/' + $(this).attr('data-icon') + ')'); 
									}
								}
							);
						});
						</script>
						
					</td>
					<td class="cards"><img src="catalog/view/theme/rgen-opencart/image/rgen/crads.png" class="credit-cards" /></td>
				</tr>
			</table>
		</div>
		<div class="cp-text" id="powered">
			<p style="float:left;padding-right:10px;"><?php echo $powered; ?></p>
			<div style="float:left; border:1px solid #CCC;" class="gmap">
				<iframe width="655" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?ie=UTF8&amp;msa=0&amp;msid=206781469164305864377.0004e3cb98df43437b7d4&amp;ll=10.782703,106.666783&amp;spn=0,0&amp;t=m&amp;output=embed"></iframe><br /><small>View <a href="https://maps.google.com/maps/ms?ie=UTF8&amp;msa=0&amp;msid=206781469164305864377.0004e3cb98df43437b7d4&amp;ll=10.782703,106.666783&amp;spn=0,0&amp;t=m&amp;source=embed" style="color:#0000FF;text-align:left">Vanilla House</a> in a larger map</small>
			</div>
		</div>
		
	</div><!-- <div class="footer-wrapper"> close -->
</div><!-- <div id="container"> close -->
<?php if ($this->config->get('RGen_CustomJS') != '' && $this->config->get('RGen_CustomJS_Status') == 1) { 
	echo htmlspecialchars_decode( $this->config->get('RGen_CustomJS'), ENT_QUOTES );
} ?>
</body>
</html>