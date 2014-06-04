<h4>Slide show settings</h4>
<div class="form-horizontal slideshowOptions">
	<div class="control-group">
		<label class="control-label">Display products on slideshow</label>
		<div class="controls">
			<?php 
			$dbKey 	= $RGen_SlideShow_Mod_status;
			$name	= 'RGen_SlideShow_Mod_status';
			$id		= 'RGen_SlideShow_Mod_status';
			?>
			<span class="switch" style='vertical-align: middle; margin-top: 0px;'>
				<input type="checkbox" id="<?php echo $id; ?>" name="<?php echo $name; ?>" <?php if ($dbKey) { ?>checked="checked"<?php }?> value="1">
				<label for="<?php echo $id; ?>" class="switch-img"></span>
			</span>

			<?php 
			$ar 	= array( 
						'--' 		=> '--', 
						'featured' 	=> 'Featured', 
						'best' 		=> 'Best Sellers', 
						'special' 	=> 'Special', 
						'latest' 	=> 'Latest'
						);
			if($RGen_prdList_defaultView == ''){
				$dbKey 	= '--';
			}else{
				$dbKey 	= $RGen_SlideShow_Mod;
			}
			$name	= 'RGen_SlideShow_Mod';
			$id		= 'RGen_SlideShow_Mod';
			?>
			<div class="btn-group" data-toggle="buttons-radio" style='verticle-align:middle; margin-left:20px;'>
				<?php foreach ($ar as $key => $value) { ?>
					<?php ($key ==  $dbKey) ? $selected = ' active' : $selected=''; ?>
					<label for="<?php echo $id . '-' . $value; ?>"  type="button" class="btn<?php echo $selected; ?>">
						<input type="radio" id="<?php echo $id . '-' . $value; ?>" name="<?php echo $name; ?>" value="<?php echo $key; ?>" <?php if ($dbKey == $key) { ?>checked="checked"<?php }?>>
						<?php echo $value; ?>
					</label>
				<?php } ?>
			</div>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">
			Slideshow type
			<div class="help-block" style="font-size:11px; color:#666; margin-top:10px; display:inline-block; line-height: 1.2;">
				Prefered slideshow banner sizes<br />
				<strong>Full</strong> - w:1080 x h:800, <strong>Medium</strong> - w:1080 x h:630, <strong>Normal</strong> - w:940 x h:500<br /><br />
				
				Create banner slide set with multiple slide images from Settings > Design > Banners <br /><br />
				Set slideshow banner size in<br> Extensions > Modules > Slideshow module<br />
			</div>
		</label>
		<div class="controls">
			<span class="radio">
				<input id="ss_none" name="RGen_SlideShow_Type" type="radio" <?php if ($RGen_SlideShow_Type == '--' || $RGen_SlideShow_Type == '') { ?>checked="checked"<?php }?> value="--" />
				<label class="rgen-button" for="ss_none">
					<span></span>Default Opencart
				</label>
			</span>
			<span class="radio">
				<input id="ss_full" name="RGen_SlideShow_Type" type="radio" <?php if ($RGen_SlideShow_Type == 'full') { ?>checked="checked"<?php }?> value="full" />
				<label class="rgen-button" for="ss_full">
					<span></span>Full size
				</label>
			</span>
			<span class="radio">
				<input id="ss_medium" name="RGen_SlideShow_Type" type="radio" <?php if ($RGen_SlideShow_Type == 'medium') { ?>checked="checked"<?php }?> value="medium" />
				<label class="rgen-button" for="ss_medium">
					<span></span>Medium size
				</label>
			</span>
			<span class="radio">
				<input id="ss_normal" name="RGen_SlideShow_Type" type="radio" <?php if ($RGen_SlideShow_Type == 'normal') { ?>checked="checked"<?php }?> value="normal" />
				<label class="rgen-button" for="ss_normal">
					<span></span>Normal size
				</label>
			</span>
			<span class="radio">
				<input id="ss_beside_bnr" name="RGen_SlideShow_Type" type="radio" <?php if ($RGen_SlideShow_Type == 'beside_bnr') { ?>checked="checked"<?php }?> value="beside_bnr" />
				<label class="rgen-button" for="ss_beside_bnr">
					<span></span>Beside banners
				</label>
			</span>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Home page small banners</label>
		<div class="controls">
			<span class="radio">
				<input id="bannerNone" name="RGen_bannerPosition" type="radio" <?php if ($RGen_bannerPosition == 'none' || $RGen_bannerPosition == '') { ?>checked="checked"<?php }?> value="none" />
				<label class="rgen-button" for="bannerNone">
					<span></span>Flexible position
				</label>
			</span>
			<span class="radio">
				<input id="bannerBelow" name="RGen_bannerPosition" type="radio" <?php if ($RGen_bannerPosition == 'below') { ?>checked="checked"<?php }?> value="below" />
				<label class="rgen-button" for="bannerBelow">
					<span></span>Stick below slideshow
				</label>
			</span>
			
			<span class="radio">
				<input id="bannerBeside" name="RGen_bannerPosition" type="radio" <?php if ($RGen_bannerPosition == 'none' || $RGen_bannerPosition == 'below' || $RGen_bannerPosition == '') { ?>disabled="disabled"<?php }?> <?php if ($RGen_bannerPosition == 'beside') { ?>checked="checked"<?php }?> value="beside" />
				<label class="rgen-button" for="bannerBeside">
					<span></span>Beside slideshow
				</label>
			</span>
		</div>
	</div>
</div>

<h4>Slide show options</h4>
<div class="form-horizontal">

	<div class="control-group">
		<label class="control-label">Slide show effect</label>
		<div class="controls">
			<?php 
				$ar 	= array( 
							'--',
							'sliceDown',
							'sliceDownLeft',
							'sliceUp',
							'sliceUpLeft',
							'sliceUpDown',
							'sliceUpDownLeft',
							'fold',
							'fade',
							'random',
							'slideInRight',
							'slideInLeft',
							'boxRandom',
							'boxRain',
							'boxRainReverse',
							'boxRainGrow',
							'boxRainGrowReverse'
							); 
				$dbKey 	= $RGen_slideshow_Effect;
				$name	= 'RGen_slideshow_Effect';
				$id		= 'RGen_slideshow_Effect';
			?>
			<span class='select'>
				<select id="<?php echo $id; ?>" name="<?php echo $name; ?>">
					<?php foreach ($ar as $key) { ?>
						<?php ($key ==  $dbKey) ? $selected = 'selected' : $selected=''; ?>
						<option value="<?php echo $key; ?>" <?php echo $selected; ?>><?php echo $key; ?></option>
					<?php } ?>
				</select>
			</span>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Slide animation speed</label>
		<div class="controls">
			<?php 
				$dbKey 			= $RGen_slideshow_animSpeed;
				$name			= 'RGen_slideshow_animSpeed';
				$id				= 'RGen_slideshow_animSpeed';
				$placeholder	= '';
			?>
			<input type="text" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">
			<span class='help-block'>Slide transition speed</span>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Slide pause time</label>
		<div class="controls">
			<?php 
				$dbKey 			= $RGen_slideshow_pauseTime;
				$name			= 'RGen_slideshow_pauseTime';
				$id				= 'RGen_slideshow_pauseTime';
				$placeholder	= '';
			?>
			<input type="text" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">
			<span class='help-block'>How long each slide will show</span>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Start slide</label>
		<div class="controls">
			<?php 
				$dbKey 			= $RGen_slideshow_startSlide;
				$name			= 'RGen_slideshow_startSlide';
				$id				= 'RGen_slideshow_startSlide';
				$placeholder	= '';
			?>
			<input type="text" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">
			<span class='help-block'>Set starting Slide (0 index)</span>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Display left right arrows</label>
		<div class="controls">
			<?php 
				$ar 	= array( 'Yes' => 'true', 'No' => 'false');
				if($RGen_prdList_defaultView == ''){
					$dbKey 	= 'true';
				}else{
					$dbKey 	= $RGen_slideshow_directionNav;
				}
				$name	= 'RGen_slideshow_directionNav';
				$id		= 'directionNav';
			?>
			<div class="btn-group" data-toggle="buttons-radio">
				<?php foreach ($ar as $key => $value) { ?>
					<?php ($value ==  $dbKey) ? $selected = ' active' : $selected=''; ?>
					<label for="<?php echo $id . '-' . $value; ?>"  type="button" class="btn<?php echo $selected; ?>">
						<input type="radio" id="<?php echo $id . '-' . $value; ?>" name="<?php echo $name; ?>" value="<?php echo $value; ?>" <?php if ($dbKey == $value) { ?>checked="checked"<?php }?>>
						<?php echo $key; ?>
					</label>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Display control navigation</label>
		<div class="controls">
			<?php 
				$ar 	= array( 'Yes' => 'true', 'No' => 'false'); 
				if($RGen_prdList_defaultView == ''){
					$dbKey 	= 'true';
				}else{
					$dbKey 	= $RGen_slideshow_controlNav;
				}
				$name	= 'RGen_slideshow_controlNav';
				$id		= 'controlNav';
			?>
			<div class="btn-group" data-toggle="buttons-radio">
				<?php foreach ($ar as $key => $value) { ?>
					<?php ($value ==  $dbKey) ? $selected = ' active' : $selected=''; ?>
					<label for="<?php echo $id . '-' . $value; ?>"  type="button" class="btn<?php echo $selected; ?>">
						<input type="radio" id="<?php echo $id . '-' . $value; ?>" name="<?php echo $name; ?>" value="<?php echo $value; ?>" <?php if ($dbKey == $value) { ?>checked="checked"<?php }?>>
						<?php echo $key; ?>
					</label>
				<?php } ?>
			</div>
			<span class='help-block'>1,2,3... navigation</span>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Pause on hover</label>
		<div class="controls">
			<?php 
				$ar 	= array( 'Yes' => 'true', 'No' => 'false'); 
				if($RGen_prdList_defaultView == ''){
					$dbKey 	= 'true';
				}else{
					$dbKey 	= $RGen_slideshow_pauseOnHover;
				}
				$name	= 'RGen_slideshow_pauseOnHover';
				$id		= 'pauseOnHover';
			?>
			<div class="btn-group" data-toggle="buttons-radio">
				<?php foreach ($ar as $key => $value) { ?>
					<?php ($value ==  $dbKey) ? $selected = ' active' : $selected=''; ?>
					<label for="<?php echo $id . '-' . $value; ?>"  type="button" class="btn<?php echo $selected; ?>">
						<input type="radio" id="<?php echo $id . '-' . $value; ?>" name="<?php echo $name; ?>" value="<?php echo $value; ?>" <?php if ($dbKey == $value) { ?>checked="checked"<?php }?>>
						<?php echo $key; ?>
					</label>
				<?php } ?>
			</div>
			<span class='help-block'>Stop animation while hovering</span>
		</div>
	</div>
</div>