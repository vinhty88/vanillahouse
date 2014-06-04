<?php echo $header; ?>

<?php $status = array('Disabled' => 0, 'Enabled' => 1); ?>

<link rel="stylesheet" type="text/css" href="view/stylesheet/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="view/stylesheet/rgenadmin.css" />

<div id="content" class="rgen-mod">
	<div class="breadcrumb">
		<?php foreach ($breadcrumbs as $breadcrumb) { ?>
		<?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
		<?php } ?>
	</div>
	<?php if ($error_warning) { ?>
	<div class="warning"><?php echo $error_warning; ?></div>
	<?php } ?>
	<div class="box" id="main-wrapper">
		<!-- MAIN TABS START -->
		<div class="navbar" id='main-tabs'>
			<div class="navbar-inner">
				<span class="brand"><?php echo $heading_title; ?></span>
				<ul class="nav">
					<li class="active"><a href="#CustomFt">THEME SETTINGS</a></li>
					<li><a href="#RGen_themes">R.GEN THEMES</a></li>
					<li><a href="#ThemeSetting">THEME COLORS</a></li>
					<li><a href="#CustomCSS">CUSTOM CODE</a></li>
				</ul>
				<div class="buttons pull-right">
					<a onclick="$('#form').submit();" class="btn btn-success btn-large"><?php echo $button_save; ?></a><a onclick="location = '<?php echo $cancel; ?>';" class="btn btn-large"><?php echo $button_cancel; ?></a>
				</div>
			</div>
		</div>

		
		<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form" >
			<div class='tab-content main-panes'>
				
				<div id="CustomFt" class="tab-pane active">
					<div class="tabs-left tabbable" data-theme="tab1">
						<ul id="tabs1" class="nav nav-tabs">
							<li class="active"><a href="#tab_general_settings">General</a></li>
							<li><a href="#tab_menu_settings">Menu</a></li>
							<li><a href="#tab_slideshow_mod">Home slideshow</a></li>
							<li><a href="#tab_fonts_settings">Fonts</a></li>
							<li><a href="#tab_social_links">Footer social</a></li>
							<li><a href="#tab_contactinfo">Footer contact</a></li>
							<li><a href="#tab_custom_footer">Custom footer</a></li>
						</ul>
						<div class="tab-content">
							<div id="tab_general_settings" class="tab-pane active">
							<?php include "rgen_generalsettings.php"; ?>
							</div>
							
							<div id="tab_fonts_settings" class="tab-pane">
							<?php include "rgen_fonts.php"; ?>
							</div>
							
							<div id="tab_menu_settings" class="tab-pane">
							<?php include "rgen_menu.php"; ?>
							</div>
							
							<div id="tab_slideshow_mod" class="tab-pane slideshowOptions">
							<?php include "rgen_slideshowsetting.php"; ?>
							</div>
							
							<div id="tab_social_links" class="tab-pane">
							<?php include "rgen_sociallinks.php"; ?>
							</div>
							
							<div id="tab_contactinfo" class="tab-pane">
							<?php include "rgen_contactinfo.php"; ?>
							</div>
							
							<div id="tab_custom_footer" class="tab-pane">
							<?php include "rgen_customfooter.php"; ?>
							</div>
						</div>
					</div>
				</div>
				
				<div id="RGen_themes" class="tab-pane">
					<?php include "rgen_readythemes.php"; ?>
				</div>
				
				<div id="ThemeSetting" class="tab-pane">
					<?php include "rgen_themecolors.php"; ?>
				</div>
				
				<div id="CustomCSS" class="tab-pane">
					<?php include "rgen_customcode.php"; ?>
				</div>

			</div>
		</form>
		
	</div>
</div>

<script src="view/javascript/rgen/bootstrap.min.js"></script>
<script src="view/javascript/rgen/rgenadmin.js"></script>

<script type="text/javascript"><!--
function image_upload(field, previewImg) {
	
	$('#dialog').remove();
	
	$('#content').prepend('<div id="dialog" style="padding: 3px 0px 0px 0px;"><iframe src="index.php?route=common/filemanager&token=<?php echo $token; ?>&field=' + encodeURIComponent(field) + '" style="padding:0; margin: 0; display: block; width: 100%; height: 100%;" frameborder="no" scrolling="auto"></iframe></div>');
	
	$('#dialog').dialog({
		title: '<?php echo $text_image_manager; ?>',
		close: function (event, ui) {
			if ($('#' + field).attr('value')) {
				$.ajax({
					url: 'index.php?route=common/filemanager/image&token=<?php echo $token; ?>&image=' + encodeURIComponent($('#' + field).attr('value')),
					dataType: 'text',
					success: function(data) {
						$('#' + previewImg).replaceWith('<img src="' + data + '" alt="" class="PreviewImage" id="' + previewImg + '" />');
					}
				});
			}
		},	
		bgiframe: false,
		width: 700,
		height: 400,
		resizable: false,
		modal: false
	});
};
//--></script> 


<input id="helpImage" />
<script type="text/javascript" src="view/javascript/ckeditor/ckeditor.js"></script> 
<script type="text/javascript"><!--
// SET FCK EDITOR FOR ABOUT US CONTENT
CKEDITOR.replace('FT_about_Text', {
	filebrowserImageBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
	filebrowserFlashBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
	filebrowserUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
	filebrowserImageUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
	filebrowserFlashUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>'
});

<?php foreach ($languages as $language) { ?>
CKEDITOR.replace('RGen_htmlmenu-<?php echo $language["language_id"]; ?>-htmldata', {
	filebrowserBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
	filebrowserImageBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
	filebrowserFlashBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
	filebrowserUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
	filebrowserImageUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
	filebrowserFlashUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>'
});
CKEDITOR.replace('RGen_module-<?php echo $language["language_id"]; ?>-ftAbout', {
	filebrowserBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
	filebrowserImageBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
	filebrowserFlashBrowseUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
	filebrowserUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
	filebrowserImageUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>',
	filebrowserFlashUploadUrl: 'index.php?route=common/filemanager&token=<?php echo $token; ?>'
});
<?php } ?>

function imgPopup (helpImg){
	$('#ThemeOverview').remove();
	$('#content').prepend('<div id="ThemeOverview" style="padding: 15px;"><img src="" /></div>');
	$('#ThemeOverview').dialog({
		dialogClass: "ThemeOverview-popup",
		open: function(event, ui) {
			$(this).find('img').attr('src',$(helpImg).attr('rel'));
			},
		title: 'Theme overview',
		bgiframe: false,
		width: 950,
		height: 600,
		resizable: false,
		modal: false,
		closeOnEscape: true
	});
}

if($('#RGen_productLayout').attr('checked') == 'checked'){
	$('.ocLayout').find('input').removeAttr('checked');
	$('.ocLayout').css({display:'none'});
}
	
$('#RGen_productLayout').click(function(){
	if($(this).attr('checked') == 'checked'){
		$('.ocLayout').find('input').removeAttr('checked');
		$('.ocLayout').css({display:'none'});
	}else {
		$('.ocLayout').css({display:''});
	}
});

$('#ss_full, #ss_medium, #ss_none, #ss_normal').click(function(){
	$('#bannerNone').attr('checked', 'checked');
	$('#bannerBeside').attr('disabled', 'disabled');
	$('#bannerBelow').removeAttr('disabled');
	
});

$('#ss_beside_bnr').click(function(){
	$('#bannerBelow, #bannerBeside').removeAttr('disabled');
	$('#bannerBeside').attr('checked', 'checked');
	$('#bannerBelow').attr('disabled', 'disabled');
});

$('#RGen_SlideShow_Mod_status').change(function(){
	if($(this).val() == 0){
		$('select[name="RGen_SlideShow_Mod"]').find('option').first().attr('selected', 'selected');
	}
});
$('select[name="RGen_SlideShow_Mod"]').change(function(){
	if($(this).val() != '--'){
		$('#RGen_SlideShow_Mod_status').find('option').first().attr('selected', 'selected');
	}
});

$("#RGen_Theme3, #RGen_Theme3_boxed, #RGen_Theme4, #RGen_Theme4_boxed").click(function(){
	$('#RGen_logoPosition_status').attr('checked','checked');
});

$('.hex').each(function(index, element) {
	$(this).colorpicker({
		hsv:false,
		altField:$(this),
		showNoneButton:true,
		altProperties: 'background-color'
	});	
	$(this).click(function(){
		$('.ui-colorpicker').css({top:$(this).offset().top + 25});
	});
	
	if($(this).val() == ''){
		$(this).css({backgroundColor:"#fff"});
	}else{
		$(this).css({backgroundColor:"#"+$(this).val()});
	}
});
$('.rgb').each(function(index, element) {

	$(this).colorpicker({
		hsv:false,
		alpha:true,
		colorFormat: ['RGBA'],
		showNoneButton:true,
		select: function(event, color) {
					$(this).val(color.formatted);
				}
	});
	
	$(this).click(function(){
		$('.ui-colorpicker').css({top:$(this).offset().top + 25});
	});
});

$('select .normal').bind('select', function(){
	$('.normal-size').css({display:'block'});
});

//--></script> 


<?php echo $footer; ?>