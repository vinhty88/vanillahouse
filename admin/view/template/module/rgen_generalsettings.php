<h4>General options</h4>
<div class="form-horizontal">

	<div class="control-group">
		<label class="control-label">Responsive theme</label>
		<div class="controls">
			<?php 
			$dbKey 	= $RGen_reaponsive_status;
			$name	= 'RGen_reaponsive_status';
			$id		= 'RGen_reaponsive_status';
			?>
			<span class="switch">
				<input type="checkbox" id="<?php echo $id; ?>" name="<?php echo $name; ?>" <?php if ($dbKey) { ?>checked="checked"<?php }?> value="1">
				<label for="<?php echo $id; ?>" class="switch-img"></span>
			</span>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Product list page default view</label>
		<div class="controls">
			<?php 
			$ar 	= array( 'Grid view' => 'grid', 'List view' => 'list'); 
			if($RGen_prdList_defaultView == ''){
				$dbKey 	= 'list';
			}else{
				$dbKey 	= $RGen_prdList_defaultView;	
			}
			$name	= 'RGen_prdList_defaultView';
			$id		= 'defaultView';
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
		<label class="control-label">Refine category layout style</label>
		<div class="controls">
			<?php 
			$ar 	= array( 'R.Gen' => 'rgen', 'OpenCart' => 'oc' ); 
			if($RGen_refineCate_layout == ''){
				$dbKey 	= 'rgen';
			}else{
				$dbKey 	= $RGen_refineCate_layout;	
			}
			$name	= 'RGen_refineCate_layout';
			$id		= 'RGen_refineCate_layout';
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
		<label class="control-label">Refine category view</label>
		<div class="controls">
			<?php 
			$ar 	= array( 'Scroll' => 'scroll', 'Grid' => 'grid' ); 
			if($RGen_refineCate_View == ''){
				$dbKey 	= 'scroll';
			}else{
				$dbKey 	= $RGen_refineCate_View;	
			}
			$name	= 'RGen_refineCate_View';
			$id		= 'refineCate';
			?>
			<div class="btn-group" data-toggle="buttons-radio">
				<?php foreach ($ar as $key => $value) { ?>
					<?php ($value ==  $dbKey) ? $selected = ' active' : $selected=''; ?>
					<label for="<?php echo $id . '-' . $value; ?>"  type="button" class="btn<?php echo $selected; ?>">
						<input type="radio" id="<?php echo $id . '-' . $value; ?>" name="<?php echo $name; ?>" value="<?php echo $value; ?>" <?php if ($dbKey == $value) { ?>checked="checked"<?php }?>>
						<?php echo $key; ?>
					</label>
				<?php } ?>
				<span class="help-block">
					Only work with R.Gen style layout
				</span>
			</div>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Product carousel arrow positions</label>
		<div class="controls">
			<?php 
			$ar 	= array( 'Both side' => 'bs', 'Top Right' => 'tr' ); 
			if($RGen_carouselArrow == ''){
				$dbKey 	= 'bs';
			}else{
				$dbKey 	= $RGen_carouselArrow;	
			}
			$name	= 'RGen_carouselArrow';
			$id		= 'RGen_carouselArrow';
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
		<label class="control-label">Product modules display in side column</label>
		<div class="controls">
			<table class='subfields'>
				<tr>
					<td>
						<span class='lbl'>Special</span>
						<?php 
						$ar 	= array( 'List' => 'list', 'Scroll' => 'scroll' ); 
						if($RGen_colprdView_special == ''){
							$dbKey 	= 'list';
						}else{
							$dbKey 	= $RGen_colprdView_special;	
						}
						$name	= 'RGen_colprdView_special';
						$id		= 'RGen_colprdView_special';
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
					</td>
					<td>
						<span class='lbl'>Featured</span>
						<?php 
						$ar 	= array( 'List' => 'list', 'Scroll' => 'scroll' ); 
						if($RGen_colprdView_featured == ''){
							$dbKey 	= 'list';
						}else{
							$dbKey 	= $RGen_colprdView_featured;	
						}
						$name	= 'RGen_colprdView_featured';
						$id		= 'RGen_colprdView_featured';
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
					</td>
					<td>
						<span class='lbl'>Bestseller</span>
						<?php 
						$ar 	= array( 'List' => 'list', 'Scroll' => 'scroll' ); 
						if($RGen_colprdView_best == ''){
							$dbKey 	= 'list';
						}else{
							$dbKey 	= $RGen_colprdView_best;	
						}
						$name	= 'RGen_colprdView_best';
						$id		= 'RGen_colprdView_best';
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
					</td>
					<td>
						<span class='lbl'>Latest</span>
						<?php 
						$ar 	= array( 'List' => 'list', 'Scroll' => 'scroll' ); 
						if($RGen_colprdView_latest == ''){
							$dbKey 	= 'list';
						}else{
							$dbKey 	= $RGen_colprdView_latest;	
						}
						$name	= 'RGen_colprdView_latest';
						$id		= 'RGen_colprdView_latest';
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
					</td>
				</tr>
			</table>
			
			
			
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Theme icons</label>
		<div class="controls">
			<?php 
			$ar 	= array( 'Use image icons' => 'img', 'Use vector icons' => 'vector' );
			if($RGen_Icons == ''){
				$dbKey 	= 'img';
			}else{
				$dbKey 	= $RGen_Icons;	
			}
			$name	= 'RGen_Icons';
			$id		= 'RGen_Icons';
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

			<span class="help-block">
				<strong>Vector icons</strong><br>
				Only vector icon support color changes from theme color options<br><br>
				
				<strong>Image icons</strong><br>
				You can change image icons from this folder => <strong>\catalog\view\theme\rgen-cupid\image\rgen\</strong>
			</span>
		</div>
	</div>

</div>
<h4>Logo options</h4>
<div class="form-horizontal">
	<div class="control-group">
		<label class="control-label">Logo placement</label>
		<div class="controls">
			<?php 
			$ar 	= array( 'Inside menu' => 0, 'Outside menu' => 1); 
			$dbKey 	= $RGen_logoPosition_status;
			$name	= 'RGen_logoPosition_status';
			$id		= 'logoPosition';
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
		<label class="control-label">Logo position</label>
		<div class="controls">
			<?php 
			$dbKey 			= $RGen_logoLeft;
			$name			= 'RGen_logoLeft';
			$id				= 'RGen_logoLeft';
			$placeholder	= 'Left';
			?>
			<input type="text" class="input-small" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">

			<?php 
			$dbKey 			= $RGen_logoTop;
			$name			= 'RGen_logoTop';
			$id				= 'RGen_logoTop';
			$placeholder	= 'Top';
			?>
			<input type="text" class="input-small" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Space around logo</label>
		<div class="controls">
			<?php 
			$dbKey 			= $RGen_logoSpaceAround_TB;
			$name			= 'RGen_logoSpaceAround_TB';
			$id				= 'RGen_logoSpaceAround_TB';
			$placeholder	= 'Top - Bottom';
			?>
			<input type="text" class="input-small" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">

			<?php 
			$dbKey 			= $RGen_logoSpaceAround_LR;
			$name			= 'RGen_logoSpaceAround_LR';
			$id				= 'RGen_logoSpaceAround_LR';
			$placeholder	= 'Left - Right';
			?>
			<input type="text" class="input-small" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Background color</label>
		<div class="controls">
			<?php 
			$dbKey 			= $RGen_logoBG_color;
			$name			= 'RGen_logoBG_color';
			$id				= 'RGen_logoBG_color';
			$placeholder	= 'Select color(rgb)';
			?>
			<input type="text" class="input-medium rgb" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">

		</div>
	</div>
</div>

<h4>Product page options</h4>
<div class="form-horizontal">
	<div class="control-group">
		<label class="control-label">Product page opencart default layout</label>
		<div class="controls">
			<?php 
			$dbKey 	= $RGen_productLayout;
			$name	= 'RGen_productLayout';
			$id		= 'RGen_productLayout';
			?>
			<span class="switch">
				<input type="checkbox" id="<?php echo $id; ?>" name="<?php echo $name; ?>" <?php if ($dbKey) { ?>checked="checked"<?php }?> value="oc">
				<label for="<?php echo $id; ?>" class="switch-img"></span>
			</span>

		</div>
	</div>
	<div class="control-group ocLayout">
		<label class="control-label">Display review in tabs</label>
		<div class="controls">
			<?php 
			$dbKey 	= $RGen_reviewTab;
			$name	= 'RGen_reviewTab';
			$id		= 'RGen_reviewTab';
			?>
			<span class="switch">
				<input type="checkbox" id="<?php echo $id; ?>" name="<?php echo $name; ?>" <?php if ($dbKey) { ?>checked="checked"<?php }?> value="1">
				<label for="<?php echo $id; ?>" class="switch-img"></span>
			</span>

		</div>
	</div>
	<div class="control-group ocLayout">
		<label class="control-label">Additional images display below main image</label>
		<div class="controls">
			<?php 
			$dbKey 	= $RGen_thumbOptions;
			$name	= 'RGen_thumbOptions';
			$id		= 'RGen_thumbOptions';
			?>
			<span class="switch">
				<input type="checkbox" id="<?php echo $id; ?>" name="<?php echo $name; ?>" <?php if ($dbKey) { ?>checked="checked"<?php }?> value="1">
				<label for="<?php echo $id; ?>" class="switch-img"></span>
			</span>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Product image zoom options</label>
		<div class="controls">
			<?php 
			$ar 	= array( 'Magnify zoom' => 0, 'Normal popup' => 1, 'Both' => 2); 
			$dbKey 	= $RGen_productZoom;
			$name	= 'RGen_productZoom';
			$id		= 'productZoom';
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

</div>									