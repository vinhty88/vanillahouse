<?php echo $header; ?>
<style>
#fanback {
	display:none;
	background:rgba(0,0,0,0.8);
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:99999;
}
#fan-exit {
	width:100%;
	height:100%;
}
#fanbox {
	background:white;
	width:420px;
	height:270px;
	position:absolute;
	top:58%;
	left:63%;
	margin:-220px 0 0 -375px;
	-webkit-box-shadow: inset 0 0 50px 0 #939393;
	-moz-box-shadow: inset 0 0 50px 0 #939393;
	box-shadow: inset 0 0 50px 0 #939393;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	margin: -220px 0 0 -375px;
}
#fanclose {
	float:right;
	cursor:pointer;
	background:url(http://3.bp.blogspot.com/-NRmqfyLwBHY/T4nwHOrPSzI/AAAAAAAAAdQ/8b9O7O1q3c8/s1600/fanclose.png) repeat;
	height:15px;
	padding:20px;
	position:relative;
	padding-right:40px;
	margin-top:-20px;
	margin-right:-22px;
}
.remove-borda {
	height:1px;
	width:366px;
	margin:0 auto;
	background:#F3F3F3;
	margin-top:16px;
	position:relative;
	margin-left:20px;
}
#linkit a.visited,#linkit a,#linkit a:hover {
	color:#80808B;
	font-size:10px;
	margin: 0 auto 5px auto;
	float:center;
}
</style>


<script type='text/javascript'>
//<![CDATA[
jQuery.cookie = function (key, value, options) {

// key and at least value given, set cookie...
if (arguments.length > 1 && String(value) !== "[object Object]") {
	options = jQuery.extend({}, options);
	
	if (value === null || value === undefined) {
	options.expires = -1;
}

if (typeof options.expires === 'number') {
	var days = options.expires, t = options.expires = new Date();
	t.setDate(t.getDate() + days);
}

value = String(value);

return (document.cookie = [
	encodeURIComponent(key), '=',
	options.raw ? value : encodeURIComponent(value),
	options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
	options.path ? '; path=' + options.path : '',
	options.domain ? '; domain=' + options.domain : '',
	options.secure ? '; secure' : ''
	].join(''));
}

// key and possibly options given, get cookie...
options = value || {};
	var result, decode = options.raw ? function (s) { return s; } : decodeURIComponent;
	return (result = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)').exec(document.cookie)) ? decode(result[1]) : null;
};
//]]>
</script>
<script type='text/javascript'>
jQuery(document).ready(function($){
	if($.cookie('popup_user_login') != 'yes'){
		$('#fanback').delay('3000').fadeIn('medium');
		$('#fanclose, #fan-exit').click(function(){
		$('#fanback').stop().fadeOut('medium');
	});
}
$.cookie('popup_user_login', 'yes', { path: '/', expires: 2 });
});
</script>
<?php if ($this->config->get('RGen_SlideShow_Type') == 'full') { ?>
<div id="content" class="store-home full-slideshow">
<?php } elseif($this->config->get('RGen_SlideShow_Type') == 'medium') { ?>
<div id="content" class="store-home medium-slideshow">
<?php } elseif($this->config->get('RGen_SlideShow_Type') == 'normal') { ?>
<div id="content" class="store-home small-slideshow">
<?php } elseif($this->config->get('RGen_SlideShow_Type') == 'beside_bnr') { ?>
<div id="content" class="store-home beside-bnr-slideshow">
<?php } else { ?>
<div id="content" class="store-home">
<?php } ?>
	
	<!--CONTENT LEFT -->
	<?php echo $column_left; ?>
	
	<!--CONTENT RIGHT -->
	<?php echo $column_right; ?>
	
	<!--PAGE CONTENT WRAPPER -->
	<div class="content-body">
		<h1 style="display: none;"><?php echo $heading_title; ?></h1>
		<?php echo $content_top; ?>
	
	</div>
	
	
	<?php echo $content_bottom; ?>
</div>
<div id='fanback'>
	<div id='fan-exit'>
	</div>
	<div id='fanbox'>
		<div id='fanclose'>
		</div>
		<div class='remove-borda'>
		</div>
		<iframe allowtransparency='true' frameborder='0' scrolling='no' src='//www.facebook.com/plugins/likebox.php?href=http://www.facebook.com/VANILLA.VN&width=402&height=255&colorscheme=light&show_faces=true&show_border=false&stream=false&header=false'
style='border: none; overflow: hidden; margin-top: -19px; width: 402px; height: 230px;'></iframe>
		<span id="linkit"><a href="http://www.theblogwidgets.com/2013/08/facebook-popup-widget-with-lightbox.html">Facebook Popup Widget</a></span></center>
	</div>
</div>
<?php echo $footer; ?>