<div id="footer">
  <div class="column">
	<p>Công ty CPTMDV Toyota An Thành<br />
	606 Trần Hưng Đạo, Phường 2, Quận 5, Tp HCM<br />
	ĐT: 0946433033 -   Fax: (84-8) 3980.9999<br />
	© 2013 Toyota An Thành</p>
  </div>
  <div class="big_column">
  	<a href='http://www.facebook.com/toyotasg' class='icon_facebook' title='Facebook'>Facebook</a>
  	<div class='clear'></div>
  	<div class='h20'></div>
  	<div class='h20'></div>
  	<div class='h20'></div>
  	<div class='h10'></div>
  	<!--
  	<span class='icon_amex hidden-phone' title='Amex'>Amex</span>
  	<span class='icon_discover hidden-phone' title='Discover'>Discover</span>
  	<span class='icon_mastercard hidden-phone' title='Mastercard'>Mastercard</span>
  	<span class='icon_paypal hidden-phone' title='Paypal'>Paypal</span>
  	<span class='icon_visa hidden-phone' title='Visa'>Visa</span>-->
  	<span><img src="<?php echo HTTP_IMAGE; ?>data/logo/genuine-parts.png" alt="" /></span>
  	<span><img src="<?php echo HTTP_IMAGE; ?>data/logo/quality-service.png" alt="" /></span>
  	<span><img src="<?php echo HTTP_IMAGE; ?>data/logo/Express-Maintenance.png" alt="" /></span>
  	<span><img src="<?php echo HTTP_IMAGE; ?>data/logo/4h.png" alt="" /></span>
  	<span><img src="<?php echo HTTP_IMAGE; ?>data/logo/xemoitruong.jpg" width="51" height="34" alt="" /></span>
  </div>
  <!--
  <div class="clear"></div>
  <div class="footer_btm">
      <div id="powered"><a href="http://www.blueowlcreative.com" target="_blank">FashionCart Theme</a> © <?php //echo date("Y");?>  &nbsp; |  &nbsp;  Powered by <a href="http://www.opencart.com/" target="_blank">OpenCart</a></div>
  </div>-->
</div>

</div>


<?php if(isset($GLOBALS["display_theme_settings"]) && $GLOBALS["display_theme_settings"]){ ?>

<!-- STYLER :: Start -->
<link rel="stylesheet" href="admin/view/javascript/colorpicker/css/colorpicker.css" type="text/css" />
<script type="text/javascript" src="admin/view/javascript/colorpicker/js/colorpicker.js"></script>

<?php 
function ReadFolderDirectory($dir) 
    { 
        $listDir = array(); 
        if($handler = opendir($dir)) { 
            while (($sub = readdir($handler)) !== FALSE) { 
                if ($sub != "." && $sub != ".." && $sub != "Thumb.db") { 
                    if(is_file($dir."/".$sub)) { 
                        $listDir[] = $sub; 
                    }elseif(is_dir($dir."/".$sub)){ 
                        $listDir[$sub] = $this->ReadFolderDirectory($dir."/".$sub); 
                    } 
                } 
            }    
            closedir($handler); 
        } 
        return $listDir;    
    }
    
   	$bgrs_dir = 'admin/view/image/bgrs/'; 
	$bgrs = ReadFolderDirectory($bgrs_dir); 
?>

	
<script type="text/javascript">

$(document).ready(function(){

	$('#main_color').ColorPicker({
		onSubmit: function(hsb, hex, rgb, el) {
			$(el).val(hex);
			$(el).ColorPickerHide();
		},
		onBeforeShow: function () {
			$(this).ColorPickerSetColor(this.value);
		},
		onChange: function (hsb, hex, rgb) {
			$('#main_color').val(hex);
			$('#main_color').css('backgroundColor', '#' + hex);
			mainColorUpdate(hex);
		}
	})
	.bind('keyup', function(){
		$(this).ColorPickerSetColor(this.value);
	});

	$('#nav_bgr').ColorPicker({
		onSubmit: function(hsb, hex, rgb, el) {
			$(el).val(hex);
			$(el).ColorPickerHide();
		},
		onBeforeShow: function () {
			$(this).ColorPickerSetColor(this.value);
		},
		onChange: function (hsb, hex, rgb) {
			$('#nav_bgr').val(hex);
			$('#nav_bgr').css('backgroundColor', '#' + hex);
			$('#menu').css('backgroundColor', '#' + hex);
			
		}
	})
	.bind('keyup', function(){
		$(this).ColorPickerSetColor(this.value);
	});
	

	$('#bgr_picker').change(function() {
		$('body').css('backgroundImage', 'url(<?php echo $bgrs_dir;?>' + $(this).val() + ')');
	});
	
});

function mainColorUpdate(hex){

	hex = '#'+hex;

	$('#menu-holder').css('border-bottom-color', hex);
	$('#styler_styles').html('<style>'+
		'	a:hover { color: '+ hex +';}'+
		'	#menu > ul > li:hover > a { background:'+ hex +';}'+
		'	#menu > ul > li ul > li > a:hover { background:'+ hex +';}'+
		'	a.button:hover, input.button:hover { background:'+ hex +';}'+
		'	.buttons .right .button:hover { background:'+ hex +';}'+
		'	.box-category > ul > li a:hover { color:'+ hex +';}'+
		'	.box-category > ul > li ul > li > a:hover { color:'+ hex +';}'+
		'	.product_holder .name a:hover { color:'+ hex +';}'+
		'	.product-info .description a:hover { color:'+ hex +';}'+
		'	.product-info .cart .button { background:'+ hex +';}'+
		'	.product-info a.icon_plus:hover { color:'+ hex +';}'+
		'	.product-info .review a.rev_count:hover { color:'+ hex +';}'+
		'	#language a:hover  { color:'+ hex +';}'+
		'	#currency a:hover  { color:'+ hex +';}'+
		'	#header #welcome a:hover  { color:'+ hex +';}'+
		'	#header .links a:hover  { color:'+ hex +';}'+

		'	.camera_prevThumbs:hover, .camera_nextThumbs:hover, .camera_prev:hover, .camera_next:hover, .camera_commands:hover, .camera_thumbs_cont:hover { background:'+ hex +';}'+
		'	.camera_wrap .camera_pag .camera_pag_ul li.cameracurrent > span  { background:'+ hex +';}'+

		'	.jcarousel-skin-opencart .jcarousel-next-horizontal:hover  { background-color:'+ hex +';}'+
		'	.jcarousel-skin-opencart .jcarousel-prev-horizontal:hover  { background-color:'+ hex +';}'+
		'	.jcarousel-skin-opencart .jcarousel-next-disabled-horizontal:hover  { background-color: #ccc;}'+
		'	.jcarousel-skin-opencart .jcarousel-prev-disabled-horizontal:hover  { background-color: #ccc;}'+
		
		'	.pagination .links a:hover  { background:'+ hex +';}'+
		'	.category-list ul li a:hover   { color:'+ hex +';}'+		
		'	.product-filter .display a:hover  { color:'+ hex +';}'+		
		'	.product-compare a:hover  { color:'+ hex +';}'+		
		'	.product-list .compare a:hover, .product-list .wishlist a:hover  { color:'+ hex +';}'+		
		
		'</style>');	
}




$(document).ready(function() {

	$('#styler_toggler').bind('click', function() {
		if($('#styler_slider').css('left') == '0px'){
			$('#styler_slider').stop(false, true).animate({left:'-200px'}, 400, 'easeOutExpo', function(){
				if($('#styler_toggler').hasClass('styler_toggler_off')){
					$('#styler_toggler').removeClass('styler_toggler_off').addClass('styler_toggler_on');	
				}else{
					$('#styler_toggler').removeClass('styler_toggler_on').addClass('styler_toggler_off');				
				}
			});
		}else {
			$('#styler_slider').stop(false, true).animate({left:'0px'}, 400, 'easeOutExpo', function(){
				if($('#styler_toggler').hasClass('styler_toggler_off')){
					$('#styler_toggler').removeClass('styler_toggler_off').addClass('styler_toggler_on');	
				}else{
					$('#styler_toggler').removeClass('styler_toggler_on').addClass('styler_toggler_off');				
				}
			});
		}	
	});

	// Update colors of colorpicker from those set in Admin
	$('#main_color').css('background-color', '#<?php echo (isset($GLOBALS["styles"]['main_color']) ? $GLOBALS["styles"]['main_color'] : "f71277");?>');
	$('#nav_bgr').css('background-color', '#<?php echo (isset($GLOBALS["styles"]['nav_bgr']) ? $GLOBALS["styles"]['nav_bgr'] : "000000");?>');
	
});
</script>


<div id="styler_slider"> 
	<div class="styler_inner">
		<div class="styler_toggler_holder">
			<div id="styler_toggler" class="styler_toggler_off"></div>
		</div>
		
		<div class="styler_content">
			<div class="styler_heading">Theme Settings</div>
			
			<table width="100%" cellspacing="3">
				<tr><td>Main Color: <div class="h10"></div></td>
					<td> <input type="text" maxlength="6" size="6" id='main_color' name="main_color" value="<?php echo (isset($GLOBALS["styles"]['main_color']) ? $GLOBALS["styles"]['main_color'] : "f71277");?>"/><div class="h10"></div></td>
				</tr>
				<tr><td>Navig. BGR: <div class="h10"></div></td>
					<td> <input type="text" maxlength="6" size="6" id='nav_bgr' name="nav_bgr" value="<?php echo (isset($GLOBALS["styles"]['nav_bgr']) ? $GLOBALS["styles"]['nav_bgr'] : "000000");?>"/><div class="h10"></div></td>
				</tr>
				<tr><td>Main BGR:</td>
					<td>
						<select name="bgr_picker" id="bgr_picker">                	
			                <?php foreach ($bgrs as $i=>$img_file) { ?>		                
			                <option <?php echo ((isset($GLOBALS["styles"]['bgr_image']) && ($img_file == $GLOBALS["styles"]['bgr_image']) ) ? "selected = 'selected'" : "");?>  value="<?php echo $img_file; ?>"><?php echo ($i==0 ? "Default" : "Pattern $i")?></option>
			                <?php } ?>
	                    </select>					
					</td>
				</tr>
				
			
			</table>
		
		
		</div>	
	</div>


<div id="styler_styles"></div>

</div>

<!-- STYLER :: End -->
<?php }?>

</body></html>