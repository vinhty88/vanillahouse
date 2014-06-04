<?php 
$l_id = $this->config->get('config_language_id');
$RGen_menu_item = $this->document->RGen_HtmlMenu;

if ($this->config->get('RGen_menuhtml_status') == 1) { ?>
<li>
	<a class="top-lvl"><?php echo $RGen_menu_item[$l_id]['name']; ?></a>
	<div class="sub-menu menu-html-wrp">
		<div class="menu-html">
		<?php echo htmlspecialchars_decode($RGen_menu_item[$l_id]['htmldata'], ENT_QUOTES ); ?>
		</div>
	</div>
</li>
<?php } ?>