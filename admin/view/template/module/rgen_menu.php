<h4>Menu options</h4>
<div class="form-horizontal">

	<div class="control-group">
		<label class="control-label">Menu sort order</label>
		<div class="controls menu-sort">
			<div class="input-prepend">
				<span class="add-on">Category</span>
				<?php 
					$dbKey 			= isset($RGenData['RGen_menu_sort'][0]['sort_order']) ? $RGenData['RGen_menu_sort'][0]['sort_order'] : 0;
					$name			= 'RGenData_mod[RGen_menu_sort][0][sort_order]';
					$id				= 'RGen_menu_sort0';
					$placeholder	= '0';
				?>
				<input type="text" class="span1" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">
			</div>
			<div class="input-prepend">
				<span class="add-on">Information</span>
				<?php 
					$dbKey 			= isset($RGenData['RGen_menu_sort'][1]['sort_order']) ? $RGenData['RGen_menu_sort'][1]['sort_order'] : 1;
					$name			= 'RGenData_mod[RGen_menu_sort][1][sort_order]';
					$id				= 'RGen_menu_sort1';
					$placeholder	= '1';
				?>
				<input type="text" class="span1" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">
			</div>
			<div class="input-prepend">
				<span class="add-on">My account</span>
				<?php 
					$dbKey 			= isset($RGenData['RGen_menu_sort'][2]['sort_order']) ? $RGenData['RGen_menu_sort'][2]['sort_order'] : 2;
					$name			= 'RGenData_mod[RGen_menu_sort][2][sort_order]';
					$id				= 'RGen_menu_sort2';
					$placeholder	= '2';
				?>
				<input type="text" class="span1" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">
			</div><br>
			<div class="input-prepend">
				<span class="add-on">Custom dropdown</span>
				<?php 
					$dbKey 			= isset($RGenData['RGen_menu_sort'][3]['sort_order']) ? $RGenData['RGen_menu_sort'][3]['sort_order'] : 3;
					$name			= 'RGenData_mod[RGen_menu_sort][3][sort_order]';
					$id				= 'RGen_menu_sort3';
					$placeholder	= '3';
				?>
				<input type="text" class="span1" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">
			</div>
			<div class="input-prepend">
				<span class="add-on">Custom links</span>
				<?php 
					$dbKey 			= isset($RGenData['RGen_menu_sort'][4]['sort_order']) ? $RGenData['RGen_menu_sort'][4]['sort_order'] : 4;
					$name			= 'RGenData_mod[RGen_menu_sort][4][sort_order]';
					$id				= 'RGen_menu_sort4';
					$placeholder	= '4';
				?>
				<input type="text" class="span1" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">
			</div>
			<div class="input-prepend">
				<span class="add-on">Custom html</span>
				<?php 
					$dbKey 			= isset($RGenData['RGen_menu_sort'][5]['sort_order']) ? $RGenData['RGen_menu_sort'][5]['sort_order'] : 5;
					$name			= 'RGenData_mod[RGen_menu_sort][5][sort_order]';
					$id				= 'RGen_menu_sort5';
					$placeholder	= '5';
				?>
				<input type="text" class="span1" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">
			</div>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Space between menu items</label>
		<div class="controls">
			<?php 
				$dbKey 			= $RGen_MenuItemSpace;
				$name			= 'RGen_MenuItemSpace';
				$id				= 'RGen_MenuItemSpace';
				$placeholder	= '20';
			?>
			<input type="text" class="input-medium" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">
			<span class="help-block">Enter integer value in text box to reduce space between menu items</span>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Information menu</label>
		<div class="controls">
			<?php 
			$dbKey 	= $RGen_informationMenu_status;
			$name	= 'RGen_informationMenu_status';
			$id		= 'RGen_informationMenu';
			?>
			<span class="switch">
				<input type="checkbox" id="<?php echo $id; ?>" name="<?php echo $name; ?>" <?php if ($dbKey) { ?>checked="checked"<?php }?> value="1">
				<label for="<?php echo $id; ?>" class="switch-img"></span>
			</span>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">My account menu</label>
		<div class="controls">
			<?php 
			$dbKey 	= $RGen_myac_status;
			$name	= 'RGen_myac_status';
			$id		= 'RGen_myac';
			?>
			<span class="switch">
				<input type="checkbox" id="<?php echo $id; ?>" name="<?php echo $name; ?>" <?php if ($dbKey) { ?>checked="checked"<?php }?> value="1">
				<label for="<?php echo $id; ?>" class="switch-img"></span>
			</span>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Multilevel menu</label>
		<div class="controls">
			<?php 
			$dbKey 	= $RGen_multiLevelMenu_status;
			$name	= 'RGen_multiLevelMenu_status';
			$id		= 'RGen_multiLevelMenu';
			?>
			<span class="switch">
				<input type="checkbox" id="<?php echo $id; ?>" name="<?php echo $name; ?>" <?php if ($dbKey) { ?>checked="checked"<?php }?> value="1">
				<label for="<?php echo $id; ?>" class="switch-img"></span>
			</span>
		</div>
	</div>
</div>

<h4>Custom menu options</h4>
<div class="form-horizontal" id='customMenu'>
	<div class="tabs-left tabbable" data-theme="tab2">
		<ul class="nav nav-tabs">
			<li class="active">
				<a href="#RGen-ddMenu">Custom dropdown menu</a>
				<?php 
					$dbKey 	= $RGen_customMenu_status;
					$name	= 'RGen_customMenu_status';
					$id		= 'RGen_customMenu_status';
				?>
				<span class="switch">
					<input type="checkbox" id="<?php echo $id; ?>" name="<?php echo $name; ?>" <?php if ($dbKey) { ?>checked="checked"<?php }?> value="1">
					<label for="<?php echo $id; ?>" class="switch-img"></span>
				</span>
			</li>
			<li>
				<a href="#RGen-MenuLinks">Custom menu links</a>
				<?php 
					$dbKey 	= $RGen_menu_item_status;
					$name	= 'RGen_menu_item_status';
					$id		= 'RGen_menu_item_status';
				?>
				<span class="switch">
					<input type="checkbox" id="<?php echo $id; ?>" name="<?php echo $name; ?>" <?php if ($dbKey) { ?>checked="checked"<?php }?> value="1">
					<label for="<?php echo $id; ?>" class="switch-img"></span>
				</span>
			</li>
			<li>
				<a href="#RGen-htmlMenu">Custom HTML menu</a>
				<?php 
					$dbKey 	= $RGen_menuhtml_status;
					$name	= 'RGen_menuhtml_status';
					$id		= 'RGen_menuhtml_status';
				?>
				<span class="switch">
					<input type="checkbox" id="<?php echo $id; ?>" name="<?php echo $name; ?>" <?php if ($dbKey) { ?>checked="checked"<?php }?> value="1">
					<label for="<?php echo $id; ?>" class="switch-img"></span>
				</span>
			</li>
		</ul>
		<div class="tab-content">
			<div id="RGen-ddMenu" class="tab-pane active">
				<ul class="nav nav-tabs" id="RGen-ddMenu-tab">
					<li class="active"><a href="#menu-dd-static">Static (Not multi language)</a></li>
					<?php foreach ($languages as $language) { ?>
					<li>
						<a href="#menu-dd-<?php echo $language['language_id']; ?>">
						<img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?>
						</a>
					</li>
					<?php } ?>
				</ul>

				<div class="tab-content">
					<div class="tab-pane active" id="menu-dd-static">
						<table class="table table-hover">
							<tr class="success">
								<td>
									<?php 
										$dbKey 			= $RGen_menu1_item;
										$name			= 'RGen_menu1_item';
										$id				= 'RGen_menu1_item';
										$placeholder	= 'Menu Name';
									?>
									<input type="text" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">
									<?php 
										$dbKey 			= $RGen_menu1_item_url;
										$name			= 'RGen_menu1_item_url';
										$id				= 'RGen_menu1_item_url';
										$placeholder	= 'Menu URL';
									?>
									<input type="text" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">
								</td>
							</tr>
							<?php for($i=1; $i<=10; $i++){ ?>
							<tr>
								<td>
									<?php 
										$dbKey 			= ${'RGen_subMenu1_item'. $i};
										$name			= 'RGen_subMenu1_item' . $i;
										$id				= 'RGen_subMenu1_item' . $i;
										$placeholder	= 'Sub name';
									?>
									<input type="text" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">
									<?php 
										$dbKey 			= ${'RGen_subMenu1_item_url'. $i};
										$name			= 'RGen_subMenu1_item_url' . $i;
										$id				= 'RGen_subMenu1_item_url' . $i;
										$placeholder	= 'Sub URL';
									?>
									<input type="text" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">
								</td>
							</tr>
							<?php } ?>
						</table>
					</div>
					<?php $j=0; foreach ($languages as $language) { ?>
					<div class="tab-pane" id="menu-dd-<?php echo $language['language_id']; ?>">
						<table class="table table-hover">
							<tr class="success">
								<td>
									<?php 
										$dbKey 			= isset($RGen[$language['language_id']]['Menu'][$j]['name']) ? $RGen[$language['language_id']]['Menu'][$j]['name'] : '';
										$name			= 'RGen_module[' . $language['language_id'] . '][Menu][' . $j . '][name]';
										$id				= 'ddMenu-' . $language['language_id'] . '-name';
										$placeholder	= 'Menu Name';
									?>
									<input type="text" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">

									<?php 
										$dbKey 			= isset($RGen[$language['language_id']]['Menu'][$j]['url']) ? $RGen[$language['language_id']]['Menu'][$j]['url'] : '';
										$name			= 'RGen_module[' . $language['language_id'] . '][Menu][' . $j . '][url]';
										$id				= 'ddMenu-' . $language['language_id'] . '-url';
										$placeholder	= 'Menu URL';
									?>
									<input type="text" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">
								</td>
							</tr>
							<?php for($i=0; $i<=10; $i++){ ?>
							<tr>
								<td>
									<?php 
										$dbKey 			= isset($RGen[$language['language_id']]['Menu'][$j]['ddMenuItems'][$i]['name']) ? $RGen[$language['language_id']]['Menu'][$j]['ddMenuItems'][$i]['name'] : '';
										$name			= 'RGen_module[' . $language['language_id'] . '][Menu][' . $j . '][ddMenuItems][' . $i . '][name]';
										$id				= 'ddMenuItems-' . $i . '-name';
										$placeholder	= 'Sub name';
									?>
									<input type="text" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">

									<?php 
										$dbKey 			= isset($RGen[$language['language_id']]['Menu'][$j]['ddMenuItems'][$i]['url']) ? $RGen[$language['language_id']]['Menu'][$j]['ddMenuItems'][$i]['url'] : '';
										$name			= 'RGen_module[' . $language['language_id'] . '][Menu][' . $j . '][ddMenuItems][' . $i . '][url]';
										$id				= 'ddMenuItems-' . $i . '-url';
										$placeholder	= 'Sub URL';
									?>
									<input type="text" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">
								</td>
							</tr>
							<?php } ?>
						</table>
					</div>
					<?php } ?>
				</div>

			</div>
			<div id="RGen-MenuLinks" class="tab-pane">
				
				<ul class="nav nav-tabs" id="customMenuItems">
					<li class="active"><a href="#menu-item-static">Static (Not multi language)</a></li>
					<?php foreach ($languages as $language) { ?>
					<li>
						<a href="#menu-item-<?php echo $language['language_id']; ?>">
						<img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?>
						</a>
					</li>
					<?php } ?>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="menu-item-static">
						<table class="table table-hover">
							<?php for($i=1; $i<=5; $i++){ ?>
							<tr>
								<td>
									<?php 
										$dbKey 			= ${'RGen_menu_item'. $i};
										$name			= 'RGen_menu_item' . $i;
										$id				= 'RGen_menu_item' . $i;
										$placeholder	= 'Link-' . $i . ' name';
									?>
									<input type="text" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">

									<?php 
										$dbKey 			= ${'RGen_menu_item'. $i . '_url'};
										$name			= 'RGen_menu_item' . $i . '_url';
										$id				= 'RGen_menu_item' . $i . '_url';
										$placeholder	= 'Link-' . $i . ' URL';
									?>
									<input type="text" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">

								</td>
							</tr>
							<?php } ?>
						</table>
					</div>

					<?php $j=1; foreach ($languages as $language) { ?>
					<div class="tab-pane" id="menu-item-<?php echo $language['language_id']; ?>">
						<table class="table table-hover">
							<?php for($i=0; $i<=6; $i++){ ?>
							<tr>
								<td>
									<?php 
										$dbKey 			= isset($RGen[$language['language_id']]['Menu'][$j]['RGen_menu_items'][$i]['name']) ? $RGen[$language['language_id']]['Menu'][$j]['RGen_menu_items'][$i]['name'] : '';
										$name			= 'RGen_module[' . $language['language_id'] . '][Menu][' . $j . '][RGen_menu_items][' . $i . '][name]';
										$id				= 'RGen_menu_items-' . $language['language_id'] . '-' . $i . '-name';
										$placeholder	= 'Link-' . $i . ' name';
									?>
									<input type="text" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">

									<?php 
										$dbKey 			= isset($RGen[$language['language_id']]['Menu'][$j]['RGen_menu_items'][$i]['url']) ? $RGen[$language['language_id']]['Menu'][$j]['RGen_menu_items'][$i]['url'] : '';
										$name			= 'RGen_module[' . $language['language_id'] . '][Menu][' . $j . '][RGen_menu_items][' . $i . '][url]';
										$id				= 'RGen_menu_items-' . $language['language_id'] . '-' . $i . '-url';
										$placeholder	= 'Link-' . $i . ' URL';
									?>
									<input type="text" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">

									<?php 
										$dbKey 			= isset($RGen[$language['language_id']]['Menu'][$j]['RGen_menu_items'][$i]['sort_order']) ? $RGen[$language['language_id']]['Menu'][$j]['RGen_menu_items'][$i]['sort_order'] : '';
										$name			= 'RGen_module[' . $language['language_id'] . '][Menu][' . $j . '][RGen_menu_items][' . $i . '][sort_order]';
										$id				= 'RGen_menu_items-' . $language['language_id'] . '-' . $i . '-sort_order';
										$placeholder	= 'Sort order';
									?>
									<input type="text" class='input-small' placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">

								</td>
							</tr>
							<?php } ?>
						</table>
					</div>
					<?php } ?>
				</div>

			</div>
			<div id="RGen-htmlMenu" class="tab-pane">
				<ul class="nav nav-tabs" id="customHtmlMenu">
					<?php foreach ($languages as $language) { ?>
					<li>
						<a href="#tab-menu-<?php echo $language['language_id']; ?>">
						<img src="view/image/flags/<?php echo $language['image']; ?>" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?>
						</a>
					</li>
					<?php } ?>
				</ul>
				<?php $j=2; foreach ($languages as $language) { ?>
				<div class="tab-content">
					<div class="tab-pane" id="tab-menu-<?php echo $language['language_id']; ?>">
						<table class="table table-hover">
							<tr>
								<td>
									<?php 
										$dbKey 			= isset($RGen[$language['language_id']]['Menu'][$j]['name']) ? $RGen[$language['language_id']]['Menu'][$j]['name'] : '';
										$name			= 'RGen_module[' . $language['language_id'] . '][Menu][' . $j . '][name]';
										$id				= 'RGen_htmlmenu-' . $language['language_id'] . '-name';
										$placeholder	= 'Menu name';
									?>
									<input type="text" placeholder="<?php echo $placeholder; ?>" id="<?php echo $id; ?>" name="<?php echo $name; ?>" value="<?php echo $dbKey; ?>">
								</td>
							</tr>
							<tr>
								<td>
									<?php 
										$dbKey 			= isset($RGen[$language['language_id']]['Menu'][$j]['htmldata']) ? $RGen[$language['language_id']]['Menu'][$j]['htmldata'] : '';
										$name			= 'RGen_module[' . $language['language_id'] . '][Menu][' . $j . '][htmldata]';
										$id				= 'RGen_htmlmenu-' . $language['language_id'] . '-htmldata';
									?>
									<textarea name="<?php echo $name; ?>" id="<?php echo $id; ?>"><?php echo $dbKey; ?></textarea>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>