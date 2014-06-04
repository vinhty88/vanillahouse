<h4>
	R.Gen ready to use themes
	<div class="pull-right">
		<?php 
		$dbKey 	= $RGen_theme_optionStatus;
		$name	= 'RGen_theme_optionStatus';
		$id		= 'RGen_theme_optionStatus';
		?>
		<span class="switch">
			<input type="checkbox" id="<?php echo $id; ?>" name="<?php echo $name; ?>" <?php if ($dbKey) { ?>checked="checked"<?php }?> value="1">
			<label for="<?php echo $id; ?>" class="switch-img"></span>
		</span>
		<a class="resetBt btn btn-danger" onclick="$('.themeOptions input:radio').attr('checked', false);">Reset</a>
	</div>
</h4>
<div class="form-horizontal">
	<div class="themeOptions">
		<span class="radio">
			<input id="RGen_Theme1" name="RGen_theme_option" type="radio" <?php if ($RGen_theme_option == 1) { ?>checked="checked"<?php }?> value="1" />
			<label class="rgen-button" for="RGen_Theme1">
				<span></span>Theme 1
			</label>
		</span>
		<span class="radio">
			<input id="RGen_Theme2" name="RGen_theme_option" type="radio" <?php if ($RGen_theme_option == 2) { ?>checked="checked"<?php }?> value="2" />
			<label class="rgen-button" for="RGen_Theme2">
				<span></span>Theme 2
			</label>
		</span>
		<span class="radio">
			<input id="RGen_Theme3" name="RGen_theme_option" type="radio" <?php if ($RGen_theme_option == 3) { ?>checked="checked"<?php }?> value="3" />
			<label class="rgen-button" for="RGen_Theme3">
				<span></span>Theme 3 (Full width)
			</label>
		</span>
		<span class="radio">
			<input id="RGen_Theme3_boxed" name="RGen_theme_option" type="radio" <?php if ($RGen_theme_option == 4) { ?>checked="checked"<?php }?> value="4" />
			<label class="rgen-button" for="RGen_Theme3_boxed">
				<span></span>Theme 3 (Boxed)
			</label>
		</span>
		<span class="radio">
			<input id="RGen_Theme4" name="RGen_theme_option" type="radio" <?php if ($RGen_theme_option == 5) { ?>checked="checked"<?php }?> value="5" />
			<label class="rgen-button" for="RGen_Theme4">
				<span></span>Theme 4
			</label>
		</span>
		<span class="radio">
			<input id="RGen_Theme4_boxed" name="RGen_theme_option" type="radio" <?php if ($RGen_theme_option == 6) { ?>checked="checked"<?php }?> value="6" />
			<label class="rgen-button" for="RGen_Theme4_boxed">
				<span></span>Theme 4 (Boxed)
			</label>
		</span>
	</div>
</div>