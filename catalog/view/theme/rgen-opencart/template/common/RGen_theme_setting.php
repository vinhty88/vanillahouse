<style type="text/css"><?php 
if(
	$this->config->get('RGen_bodyBg') != '' ||
	$this->config->get('RGen_bodyBgImg') != '' ||
	$this->config->get('RGen_bodyBgAttachment') != 'inherit' || 
	$this->config->get('RGen_fontColor') != ''
){ 
?>body { <?php 

	if($this->config->get('RGen_bodyBg') != ''){ 
	?>background: none;	background-color:<?php echo $this->config->get('RGen_bodyBg'); ?>;<?php 
	}
	
	if($this->config->get('RGen_bodyBgImg') != ''){ 
	?>background-image:url(<?php echo $this->config->get('config_url'); ?>image/<?php echo $this->config->get('RGen_bodyBgImg'); ?>);<?php		
	?>background-repeat:<?php echo $this->config->get('RGen_bodyBgImgRepeat'); ?>;<?php 
	?>background-position:<?php echo $this->config->get('RGen_bodyBgImgPosition'); ?>;<?php
	}
	
	if($this->config->get('RGen_bodyBgAttachment') != 'inherit'){ 
	?>background-attachment:<?php echo $this->config->get('RGen_bodyBgAttachment'); ?>;<?php 
	}
	
	if($this->config->get('RGen_fontColor') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_fontColor'); ?>;<?php 
	}
?>}<?php 
}

if($this->config->get('RGen_fontColor') != ''){ 
?>body, p, .category-info p, .tab-content{ color:#<?php echo $this->config->get('RGen_fontColor'); ?>; }<?php 
} 

/* GLOBAL COLOR - 1 */
if($this->config->get('RGen_globalColour') != ''){ 
?>#menu,
#header .button-search,
.refine-cate h2,
.product-info .price,
.footer-bt a:hover,
.product-info .cart,
.cart-bt:hover,
.product-list .prd-block .info-wrp .price,
.prd-block .info-wrp .price,
.store-home .slideshow .nivo-controlNav a.active,
.home-btn:hover,
.thumb-wrapper .bx-prev:hover,
.next:hover,
.prev:hover,
.jcarousel-next:hover,
.jcarousel-prev:hover,
.cart-bt:hover,
.store-home #slidshow-box .next,
.store-home #slidshow-box .prev { <?php
	?>background-color:#<?php echo $this->config->get('RGen_globalColour'); ?>;	}<?php 
}

if($this->config->get('RGen_globalColourRing') != ''){ 
?>.slideshow .nivo-controlNav a { <?php
	?>box-shadow:0px 0px 0px 2px <?php $this->config->get('RGen_globalColourRing')?>; }<?php 
}

/* MAIN CONTAINER BACK */
if($this->config->get('RGen_pageBg') != ''){ 
?>#container, .page-heading strong, .pagination .links, .popup-box { <?php
	?>background-color:<?php echo $this->config->get('RGen_pageBg'); ?>; }<?php 
} 

?>#container { <?php 

if($this->config->get('RGen_pageShadow') == ''){ 
	?>-webkit-box-shadow: none; box-shadow: none;<?php 
} else { 
	?>-webkit-box-shadow: 0px 0px 8px 0px <?php echo $this->config->get('RGen_pageShadow'); ?>;<?php
	?>box-shadow: 0px 0px 8px 0px <?php echo $this->config->get('RGen_pageShadow'); ?>;<?php 
} 

?>}<?php


/* IMAGE BOX */
if($this->config->get('RGen_ImageBox') != ''){ ?>
.category-info .image, 
.img-frame, 
.mini-cart-info .image a, 
.mini-cart-info .image span,
.col-prd .image, 
.product-info .image, 
.product-info .image-additional a,
.product-info .image-additional .active a { <?php
	?>background-color:<?php echo $this->config->get('RGen_ImageBox'); ?>;<?php
	?>border-color:<?php echo $this->config->get('RGen_ImageBox'); ?>; }<?php 
} 

/* LINK COLOUR 1 */

if($this->config->get('RGen_LinkColor') != ''){ 
?>a, a:visited, a b,
#footer .column a,
.col-links > ul > li > a,
.col-links > ul > li ul > li > a { <?php
	?>color:#<?php echo $this->config->get('RGen_LinkColor'); ?>; }<?php 
} 

if($this->config->get('RGen_LinkColor_hover') != ''){ 
?>a:hover,
#footer .column a:hover,
.col-links > ul > li a:hover,
.col-links > ul > li ul > li > a:hover { <?php
	?>color:#<?php echo $this->config->get('RGen_LinkColor_hover'); ?>; }<?php 
} 

if($this->config->get('RGen_LinkBtColor') != '' || $this->config->get('RGen_LinkBtFontColor') != ''){ 
?>.link-bt { <?php 

if($this->config->get('RGen_LinkBtColor') != ''){ 
	?>background:#<?php echo $this->config->get('RGen_LinkBtColor'); ?>;<?php 
} 
if($this->config->get('RGen_LinkBtFontColor') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_LinkBtFontColor'); ?>;<?php 
} 
?> }<?php
}

if($this->config->get('RGen_LinkBtColor_hover') != '' || $this->config->get('RGen_LinkBtFontColor_hover') != ''){ 
?>.link-bt:hover { <?php 
if($this->config->get('RGen_LinkBtColor_hover') != ''){ 
	?>background:#<?php echo $this->config->get('RGen_LinkBtColor_hover'); ?>;<?php 
} 
if($this->config->get('RGen_LinkBtFontColor_hover') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_LinkBtFontColor_hover'); ?>;<?php 
} 
?> }<?php
}

/* BUTTONS */
if($this->config->get('RGen_btColor') != '' || $this->config->get('RGen_btFontColor') != ''){ 
?>input.button, .button, a.button, a.sml-button, input.sml-button {<?php 
if($this->config->get('RGen_btColor') != ''){ 
	?>background-color:#<?php echo $this->config->get('RGen_btColor'); ?>;<?php 
} 
if($this->config->get('RGen_btFontColor') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_btFontColor'); ?>;<?php 
} 
?> }<?php
}
if($this->config->get('RGen_btColor_hover') != '' || $this->config->get('RGen_btFontColor_hover') != ''){ 
?>input.button:hover, .button:hover, .sml-button:hover { <?php 
if($this->config->get('RGen_btColor_hover') != ''){ 
	?>background-color:#<?php echo $this->config->get('RGen_btColor_hover'); ?>;<?php 
} 
if($this->config->get('RGen_btFontColor_hover') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_btFontColor_hover'); ?>;<?php 
} 
?> }<?php
}

if($this->config->get('RGen_btColor1') != '' || $this->config->get('RGen_btFontColor1') != ''){
?>input.dark-bt, a.dark-bt, #confirm .payment .button { <?php 
if($this->config->get('RGen_btColor1') != ''){ 
	?>background-color:#<?php echo $this->config->get('RGen_btColor1'); ?>;<?php 
}

if($this->config->get('RGen_btFontColor1') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_btFontColor1'); ?>;<?php
}
?> }<?php
}

if($this->config->get('RGen_btColor1_hover') != '' || $this->config->get('RGen_btFontColor1_hover') != ''){ 
?>input.dark-bt:hover, .dark-bt:hover, #confirm .payment .button:hover { <?php
if($this->config->get('RGen_btColor1_hover') != ''){ 
	?>background-color:#<?php echo $this->config->get('RGen_btColor1_hover'); ?>;<?php 
} 
if($this->config->get('RGen_btFontColor1_hover') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_btFontColor1_hover'); ?>;<?php 
}
?> }<?php 
}

/* FORMS */ 
if($this->config->get('RGen_TextBox') != '' || $this->config->get('RGen_TextBoxBorder') != '' || $this->config->get('RGen_TextBoxText') != ''){ 
?>input[type='text'], input[type='password'], textarea { <?php
if($this->config->get('RGen_TextBox') != ''){ 
	?>background:<?php echo $this->config->get('RGen_TextBox'); ?>;<?php
}
if($this->config->get('RGen_TextBoxBorder') != ''){ 
	?>border-color:<?php echo $this->config->get('RGen_TextBoxBorder'); ?>;	box-shadow:none;<?php
}
if($this->config->get('RGen_TextBoxText') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_TextBoxText'); ?>;<?php
} ?> }<?php
}

if($this->config->get('RGen_FormLabel') != ''){ 
?>table.form tr td:first-child, .box-form label {
	color:#<?php echo $this->config->get('RGen_FormLabel'); ?>;	}<?php
}

if($this->config->get('RGen_FormHeaders') != '' || $this->config->get('RGen_FormBorders') != ''){ 
?>.box-form .header-3 { <?php
if($this->config->get('RGen_FormHeaders') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_FormHeaders'); ?>;<?php
}
if($this->config->get('RGen_FormBorders') != ''){ 
	?>border-color:<?php echo $this->config->get('RGen_FormBorders'); ?>;<?php
} ?> }<?php
}

/* SCROLLER ARROWS */
if($this->config->get('RGen_arrowBg') != '' || $this->config->get('RGen_arrowBgRing') != ''){ 
?>.next,
.prev, 
.jcarousel-next, 
.jcarousel-prev,
.thumb-wrapper .next,
.thumb-wrapper .prev { <?php 
if($this->config->get('RGen_arrowBg') != ''){ 
	?>background-color:#<?php echo $this->config->get('RGen_arrowBg'); ?>;<?php 
} 
if($this->config->get('RGen_arrowBgRing') != ''){
	?>box-shadow:0px 0px 0px 6px <?php echo $this->config->get('RGen_arrowBgRing'); ?>;<?php
} 
?> }<?php
}

if($this->config->get('RGen_arrowBg_hover') != '' || $this->config->get('RGen_arrowBgRing_hover') != ''){ 
?>.next:hover, 
.prev:hover, 
.jcarousel-next:hover, 
.jcarousel-prev:hover,
.thumb-wrapper .next:hover,
.thumb-wrapper .prev:hover { <?php 
if($this->config->get('RGen_arrowBg_hover') != ''){ 
	?>background-color:#<?php echo $this->config->get('RGen_arrowBg_hover'); ?>;<?php 
} 
if($this->config->get('RGen_arrowBgRing_hover') != ''){
	?>box-shadow:0px 0px 0px 6px <?php $this->config->get('RGen_arrowBgRing_hover'); ?>;<?php 
}
?> }<?php
}

/* HEADERS */
if($this->config->get('RGen_Header') != ''){ 
?>.header-1, .header-2, .header-3, .header-4, .column .box-heading, .page-heading strong {
	color:#<?php echo $this->config->get('RGen_Header'); ?>;
	}<?php 
} 
if($this->config->get('RGen_globalLines') != ''){ 
?>.product-info .description,
.product-info .review,
.product-info .options,
.read-review,
.review-comment,
.col-links > ul > li,
.address-list ul li,
.col-prd,
.col-prd .name,
.wishlist-info tbody td,
.wishlist-info td,
.cart-info tbody td,
.cart-info tbody .reward,
.cart-total tr.last td,
.cart-total tr td,
#shipping-method .radio,
.checkout-product tbody td,
.checkout-product tfoot td,
.checkout-product .other-amount.last td,
.checkout-product .total-amount td,
table.list td,
#footer h3,
.manufacturer-list,
.custom-footer .column,
#twitter ul li,
.column .box-heading,
.col-links > ul > li > ul {
	border-color:<?php echo $this->config->get('RGen_globalLines'); ?>;	
}<?php
}

/* TABLE LIST */
if($this->config->get('RGen_tableListHeaderFont') != '' || $this->config->get('RGen_tableListBorder_bottom') != '' || $this->config->get('RGen_tableListHeader') != ''){ 
?>table.list thead td,
.wishlist-info thead td,
.cart-info thead td,
.compare-info thead td { <?php 
if($this->config->get('RGen_tableListHeaderFont') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_tableListHeaderFont'); ?>;<?php 
} 
if($this->config->get('RGen_tableListBorder_bottom') != ''){ 
	?>border-bottom-color:<?php echo $this->config->get('RGen_tableListBorder_bottom'); ?>;<?php 
} 
if($this->config->get('RGen_tableListHeader') != ''){ 
	?>background-color:<?php echo $this->config->get('RGen_tableListHeader'); ?>;<?php 
} 
?> }<?php
}

if($this->config->get('RGen_tableListBorder_bottom') != '' || $this->config->get('RGen_tableListBorder_right') != '' || $this->config->get('RGen_tableListFont') != ''){ 
?>table.list td,
.wishlist-info tbody td,
.cart-info tbody td,
.compare-info td { <?php 
if($this->config->get('RGen_tableListBorder_bottom') != ''){ 
	?>border-bottom-color:<?php echo $this->config->get('RGen_tableListBorder_bottom'); ?>;<?php 
} 
if($this->config->get('RGen_tableListBorder_right') != ''){ 
	?>border-right-color:<?php echo $this->config->get('RGen_tableListBorder_right'); ?>;<?php 
}
if($this->config->get('RGen_tableListFont') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_tableListFont'); ?>;<?php 
} 
?> }<?php 
}

if($this->config->get('RGen_tableListBorder_bottom') != ''){ 
?>.cart-total tr.last td,
.cart-total .total-amount td {
	border-bottom-color:<?php echo $this->config->get('RGen_tableListBorder_bottom'); ?>;
	}<?php 
} 

if($this->config->get('RGen_tableListBorder_right') != ''){ 
?>.cart-total tr td {
	border-right-color:<?php echo $this->config->get('RGen_tableListBorder_right'); ?>;
	}<?php 
}

if($this->config->get('RGen_tableListHeaderFont') != ''){ 
?>.compare-info tr td:first-child  {
	color:#<?php echo $this->config->get('RGen_tableListHeaderFont'); ?>;
	}<?php 
}

/* HEADER 
********************************/
if($this->config->get('RGen_headerBg') != '' || $this->config->get('RGen_headerBgImg') != ''){ 
?>#header-wrapper {<?php
	if($this->config->get('RGen_headerBg') != ''){ 
	?>background: none;
	background-color:<?php echo $this->config->get('RGen_headerBg'); ?>;<?php 
	}
	
	if($this->config->get('RGen_headerBgImg') != ''){ 
	?>background-image:url(<?php echo $this->config->get('config_url'); ?>image/<?php echo $this->config->get('RGen_headerBgImg'); ?>);<?php		
	?>background-repeat:<?php echo $this->config->get('RGen_headerBgImgRepeat'); ?>;<?php 
	?>background-position:<?php echo $this->config->get('RGen_headerBgImgPosition'); ?>;<?php
	} 
?> }<?php
}

if($this->config->get('RGen_Breadcrumb_Arrow') != ''){ 
?>.breadcrumb { color:#<?php echo $this->config->get('RGen_Breadcrumb_Arrow'); ?>; }<?php
}
if($this->config->get('RGen_Breadcrumb_Link') != ''){ 
?>.breadcrumb a { color:#<?php echo $this->config->get('RGen_Breadcrumb_Link'); ?>; }<?php
}
if($this->config->get('RGen_Breadcrumb_Link_hover') != ''){ 
?>.breadcrumb a:hover { color:#<?php echo $this->config->get('RGen_Breadcrumb_Link_hover'); ?>; }<?php
}
if($this->config->get('RGen_Logo') != ''){ 
?>.store-logo { background-color:<?php echo $this->config->get('RGen_Logo'); ?>; }<?php 
}

/* HEADER LINKS */
if($this->config->get('RGen_Header_Link') != ''){ ?>
#header #welcome a,
#header .links a {
	color:#<?php echo $this->config->get('RGen_Header_Link'); ?>;
	}<?php 
} 

if($this->config->get('RGen_Header_Link_hover') != ''){ ?>
#header #welcome a:hover,
#header .links a:hover {
	color:#<?php echo $this->config->get('RGen_Header_Link_hover'); ?>;
	}<?php 
}

if($this->config->get('RGen_Header_text') != ''){
?>#header #welcome {
	color:#<?php echo $this->config->get('RGen_Header_text'); ?>;
	}<?php 
}


/* MAIN NAVIGATION */
if($this->config->get('RGen_Navbar') != ''){ 
?>.navigation-bar { background-color:<?php echo $this->config->get('RGen_Navbar'); ?>; }<?php 
}
if($this->config->get('RGen_Nav') != ''){ 
?>#menu { background-color:<?php echo $this->config->get('RGen_Nav'); ?>; }<?php 
}
if($this->config->get('RGen_NavFont') != ''){ 
?>#menu > ul > li > a.top-lvl {
	color:#<?php echo $this->config->get('RGen_NavFont'); ?>; }<?php 
} 
if($this->config->get('RGen_Nav_hover') != '' || $this->config->get('RGen_NavFont_hover') != ''){ 
?>#menu > ul > li:hover > a.top-lvl { <?php 
if($this->config->get('RGen_Nav_hover') != ''){ 
	?>background-color:<?php echo $this->config->get('RGen_Nav_hover'); ?>;<?php 
} 
if($this->config->get('RGen_NavFont_hover') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_NavFont_hover'); ?>;<?php 
}
?> }<?php 
}
if($this->config->get('RGen_NavSub') != ''){ 
?>#menu > ul > li > div { background-color:<?php echo $this->config->get('RGen_NavSub'); ?>; }<?php 
} 
if($this->config->get('RGen_NavSubFont') != '' || $this->config->get('RGen_NavSubBorder') != ''){ 
?>#menu > ul > li ul > li > a.sub-lvl { <?php 
if($this->config->get('RGen_NavSubFont') != ''){ 
	?>color: #<?php echo $this->config->get('RGen_NavSubFont'); ?>;<?php 
} 
if($this->config->get('RGen_NavSubBorder') != ''){ 
	?>border-bottom-color:<?php echo $this->config->get('RGen_NavSubBorder'); ?>;<?php 
} 
?> }<?php
}
if($this->config->get('RGen_NavSub_hover') != '' || $this->config->get('RGen_NavSubFont_hover') != ''){ 
?>#menu > ul > li ul > li > a.sub-lvl:hover { <?php 
if($this->config->get('RGen_NavSub_hover') != ''){ 
	?>background-color: <?php echo $this->config->get('RGen_NavSub_hover'); ?>;<?php 
} 
if($this->config->get('RGen_NavSubFont_hover') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_NavSubFont_hover'); ?>;<?php 
} ?> }<?php
}

/* HOME BUTTON */
if($this->config->get('RGen_homeBt') != '' || $this->config->get('RGen_homeBtRing') != '' || $this->config->get('RGen_homeBtIcon') != ''){ 
?>a.home-btn { <?php 
if($this->config->get('RGen_homeBt') != ''){ 
	?>background-color:<?php echo $this->config->get('RGen_homeBt'); ?>;<?php 
}
if($this->config->get('RGen_homeBtIcon') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_homeBtIcon'); ?>;<?php 
}
if($this->config->get('RGen_homeBtRing') != ''){
	?>box-shadow:0px 0px 0px 5px <?php echo $this->config->get('RGen_homeBtRing'); ?>;<?php
} 
?> }<?php
}
if($this->config->get('RGen_homeBt_hover') != '' || $this->config->get('RGen_homeBtIcon_hover') != ''){ 
?>a.home-btn:hover { <?php
if($this->config->get('RGen_homeBt_hover') != ''){ 
	?>background-color:<?php echo $this->config->get('RGen_homeBt_hover'); ?>;<?php
}
if($this->config->get('RGen_homeBtIcon_hover') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_homeBtIcon_hover'); ?>;<?php 
} 
?>} <?php 
}

if($this->config->get('RGen_searchBg') != '' || $this->config->get('RGen_searchText') != ''){ 
?>#header #search input { <?php 
if($this->config->get('RGen_searchBg') != ''){
	?>background:<?php echo $this->config->get('RGen_searchBg'); ?>;<?php
}
if($this->config->get('RGen_searchText') != ''){
	?>color:#<?php echo $this->config->get('RGen_searchText'); ?>;<?php
}
?> }<?php
}
if($this->config->get('RGen_searchOuterBg') != ''){ 
?>#header #search .search-box {
	background:<?php echo $this->config->get('RGen_searchOuterBg'); ?>;<?php
?> }<?php
}

if($this->config->get('RGen_searchBt') != '' || $this->config->get('RGen_searchBtRing') != '' || $this->config->get('RGen_searchBtIcon') != ''){ 
?>#header .button-search { <?php 
if($this->config->get('RGen_searchBt') != ''){ 
	?>background-color:<?php echo $this->config->get('RGen_searchBt'); ?>;<?php 
}
if($this->config->get('RGen_searchBtIcon') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_searchBtIcon'); ?>;<?php 
}
if($this->config->get('RGen_searchBtRing') != ''){
	?>box-shadow:0px 0px 0px 5px <?php echo $this->config->get('RGen_searchBtRing'); ?>;<?php
}?> }<?php
}

if($this->config->get('RGen_searchBtRing_hover') != '' || $this->config->get('RGen_searchBt_hover') != '' || $this->config->get('RGen_searchBtIcon_hover') != ''){
?>#header #search.active .button-search, #header .button-search:hover { <?php
if($this->config->get('RGen_searchBtRing_hover') != ''){
	?>box-shadow:0px 0px 0px 5px <?php echo $this->config->get('RGen_searchBtRing_hover'); ?>;<?php 
} 
if($this->config->get('RGen_searchBt_hover') != ''){ 
	?>background-color:<?php echo $this->config->get('RGen_searchBt_hover'); ?>;<?php 
}
if($this->config->get('RGen_searchBtIcon_hover') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_searchBtIcon_hover'); ?>;<?php 
}
?> }<?php
}

/* CURRENCY AND LANGUAGE */
if($this->config->get('RGen_CurLanBg') != '' || $this->config->get('RGen_CurLanSelected') != ''){ 
?>#currency, #language { <?php
if($this->config->get('RGen_CurLanBg') != ''){ 
	?>background-color: <?php echo $this->config->get('RGen_CurLanBg'); ?>;<?php
}
if($this->config->get('RGen_CurLanSelected') != ''){ 
	?>color: #<?php echo $this->config->get('RGen_CurLanSelected'); ?>;<?php
}
?> }<?php
}
if($this->config->get('RGen_CurLanArrow') != ''){
?>.selected-language:before, .selected-currency:before {
	color: #<?php echo $this->config->get('RGen_CurLanArrow'); ?>; }<?php
}

if($this->config->get('RGen_CurLanDropdown') != ''){
?>#currency ul, #language ul {
	background:<?php echo $this->config->get('RGen_CurLanDropdown'); ?>; 
	}<?php
}
if($this->config->get('RGen_CurLanText') != ''){
?>#currency ul li a, #language ul li a {
	color: #<?php echo $this->config->get('RGen_CurLanText'); ?>; 
	}<?php
}
if($this->config->get('RGen_CurLanText_hover') != '' || $this->config->get('RGen_CurLanDropdown_hover') != ''){
?>#currency ul li a:hover, #language ul li a:hover {
	color: #<?php echo $this->config->get('RGen_CurLanText_hover'); ?>; 
	background: <?php echo $this->config->get('RGen_CurLanDropdown_hover'); ?>;
	}<?php
}
/* HEADER MINI CART */
if($this->config->get('RGen_MiniCart') != ''){
?>#header #cart .heading { background-color:<?php echo $this->config->get('RGen_MiniCart'); ?>; }<?php
}
if($this->config->get('RGen_MiniCartText') != ''){
?>#header #cart .heading a span { color:#<?php echo $this->config->get('RGen_MiniCartText'); ?>; }<?php
}
if($this->config->get('RGen_MiniCartIcon') != ''){
?>#header #cart .heading a { color:#<?php echo $this->config->get('RGen_MiniCartIcon'); ?>; }<?php
}
if($this->config->get('RGen_MiniCartContent') != '' || $this->config->get('RGen_MiniCartContent_text') != ''){
?>#header #cart .content { <?php
if($this->config->get('RGen_MiniCartContent') != ''){
	?>background:<?php echo $this->config->get('RGen_MiniCartContent'); ?>;<?php
}
if($this->config->get('RGen_MiniCartContent') != ''){
	?>color:#<?php echo $this->config->get('RGen_MiniCartContent_text'); ?>;<?php
}
?>}<?php
}

if($this->config->get('RGen_MiniCartContent_text') != ''){
?>.mini-cart-info td.total strong { color:#<?php echo $this->config->get('RGen_MiniCartContent_text'); ?>; }<?php
}

if($this->config->get('RGen_MiniCartContent') != ''){
?>#header #cart .cart-arrow { color:<?php echo $this->config->get('RGen_MiniCartContent'); ?>; }<?php
}

if($this->config->get('RGen_MiniCartContent_image') != ''){
?>.mini-cart-info .image a { background:<?php echo $this->config->get('RGen_MiniCartContent_image'); ?>; }<?php
}

if($this->config->get('RGen_MiniCartContent_links') != ''){
?>.mini-cart-info td.total a,
.mini-cart-info .name a { color:#<?php echo $this->config->get('RGen_MiniCartContent_links'); ?>; }<?php
}

if($this->config->get('RGen_MiniCartContent_border') != ''){
?>.mini-cart-info td { border-color:<?php echo $this->config->get('RGen_MiniCartContent_border'); ?>; }<?php
}

if($this->config->get('RGen_MiniCartContent_total') != ''){
?>.mini-cart-total { background:<?php echo $this->config->get('RGen_MiniCartContent_total'); ?>; }<?php
}

if($this->config->get('RGen_MiniCartContent_value') != ''){
?>.mini-cart-total td { color:#<?php echo $this->config->get('RGen_MiniCartContent_value'); ?>;	}<?php
}

if($this->config->get('RGen_MiniCartContent_label') != ''){
?>.mini-cart-total tr td:first-child { color:#<?php echo $this->config->get('RGen_MiniCartContent_label'); ?>; }<?php
}

/* PRODUCT BOX */
if($this->config->get('RGen_RefinCateHdBg') != ''){ 
?>.refine-cate h2 { background-color:<?php echo $this->config->get('RGen_RefinCateHdBg'); ?>; }<?php 
}
if($this->config->get('RGen_RefinCateHdFontColor') != ''){ 
?>.refine-cate h2 span { color:#<?php echo $this->config->get('RGen_RefinCateHdFontColor'); ?>; }<?php 
} 

if($this->config->get('RGen_RefinCateBg') != '' || $this->config->get('RGen_RefinCateFontColour') != ''){ 
?>.refine-cate ul li a { <?php 
if($this->config->get('RGen_RefinCateBg') != ''){ 
	?>background-color:<?php echo $this->config->get('RGen_RefinCateBg'); ?>;<?php 
} 
if($this->config->get('RGen_RefinCateFontColour') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_RefinCateFontColour'); ?>; <?php 
} 
?> }<?php 
}


if($this->config->get('RGen_prdBack') != ''){ ?>
.prd-block,
.product-list .image,
.product-list .info-wrp,
.prd-block .info {
	background-color:<?php echo $this->config->get('RGen_prdBack'); ?>; }<?php 
}
if($this->config->get('RGen_prdHover_Bg') != ''){ ?>
.prd-block .info {
	background-color:<?php echo $this->config->get('RGen_prdHover_Bg'); ?>; }<?php 

?>.product-list .info { background:none; }<?php
}
if($this->config->get('RGen_prdBorder') != ''){ ?>
.prd-block .info-wrp ul li, 
.product-list .buy-option ul li,
.prd-block .info {
	border-color:<?php echo $this->config->get('RGen_prdBorder'); ?>; }<?php
}
if($this->config->get('RGen_prdName') != ''){ 
?>.prd-block a.name {
	color:#<?php echo $this->config->get('RGen_prdName'); ?>; }<?php 
} 
if($this->config->get('RGen_prdLinks') != ''){ 
?>.prd-block .info-wrp ul li a, 
.product-list .buy-option ul li a {
	color:#<?php echo $this->config->get('RGen_prdLinks'); ?>; }<?php 
}
if($this->config->get('RGen_prdLinks_hover') != ''){ 
?>.prd-block .info-wrp ul li a:hover, 
.product-list .buy-option ul li a:hover {
	color:#<?php echo $this->config->get('RGen_prdLinks_hover'); ?>;
	}<?php 
}
if($this->config->get('RGen_prdText') != ''){ 
?>.product-list .description {
	color:#<?php echo $this->config->get('RGen_prdText'); ?>; }<?php 
} 

if($this->config->get('RGen_PriceBg') != '' || $this->config->get('RGen_Price') != ''){ 
?>.prd-block .info-wrp .price,
.product-list .prd-block .info-wrp .price,
.product-info .price { <?php 
if($this->config->get('RGen_PriceBg') != ''){ 
	?>background-color:#<?php echo $this->config->get('RGen_PriceBg'); ?>;<?php 
}
if($this->config->get('RGen_Price') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_Price'); ?>;<?php 
} ?> }<?php 
}

if($this->config->get('RGen_Price') != ''){ 
?>.product-info .price-new,
.prd-block .info-wrp .price-new,
.product-list .prd-block .price-new {
	color:#<?php echo $this->config->get('RGen_Price'); ?>;	}<?php 
} 
if($this->config->get('RGen_PriceRing') != ''){
?>.product-list .prd-block .info-wrp .price,
.product-info .price { 
	box-shadow: 0px 0px 0px 10px <?php echo $this->config->get('RGen_PriceRing'); ?>; }<?php
}
if($this->config->get('RGen_OldPrice') != ''){ 
?>.prd-block .info-wrp .price-old,
.product-info .price .price-old {
	color: #<?php echo $this->config->get('RGen_OldPrice'); ?>;
	}<?php 
}

if($this->config->get('RGen_cartBt') != '' || $this->config->get('RGen_cartBtRing') != '' || $this->config->get('RGen_cartBtIcon') != ''){ 
?>.cart-bt,
.prd-block .cart-bt,
.product-info .cart .cart-bt,
.product-list .buy-option .cart-bt { <?php 
if($this->config->get('RGen_cartBt') != ''){ 
	?>background-color:#<?php echo $this->config->get('RGen_cartBt'); ?>;<?php 
}
if($this->config->get('RGen_cartBtRing') != ''){
	?>box-shadow: 0px 0px 0px 6px <?php echo $this->config->get('RGen_cartBtRing'); ?>;<?php
} 
if($this->config->get('RGen_cartBtIcon') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_cartBtIcon'); ?>;<?php 
}
?> }<?php
}

if($this->config->get('RGen_cartBt_hover') != '' || $this->config->get('RGen_cartBtRing_hover') != '' || $this->config->get('RGen_cartBtIcon_hover') != ''){ 
?>.cart-bt:hover,
.prd-block .cart-bt:hover,
.product-info .cart .cart-bt:hover,
.product-list .buy-option .cart-bt:hover { <?php 
if($this->config->get('RGen_cartBt_hover') != ''){ 
	?>background-color:#<?php echo $this->config->get('RGen_cartBt_hover'); ?>;<?php 
}
if($this->config->get('RGen_cartBtRing_hover') != ''){
	?>box-shadow: 0px 0px 0px 6px <?php echo $this->config->get('RGen_cartBtRing_hover'); ?>;<?php
} 
if($this->config->get('RGen_cartBtIcon_hover') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_cartBtIcon_hover'); ?>;<?php 
}
?> }<?php
}

/* MAIN BANNER FEATURE PRODUCT */
if($this->config->get('RGen_featuredTitleBg') != '' || $this->config->get('RGen_featuredTitleFont') != ''){ 
?>.store-home #slidshow-box .box-heading { <?php 
if($this->config->get('RGen_featuredTitleBg') != ''){ 
	?>background-color:<?php echo $this->config->get('RGen_featuredTitleBg'); ?>;<?php 
} 
if($this->config->get('RGen_featuredTitleFont') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_featuredTitleFont'); ?>;<?php 
} ?> }<?php
}

if($this->config->get('RGen_featuredArrow') != '' || $this->config->get('RGen_featuredArrowIcon') != ''){ 
?>.store-home #slidshow-box .next, 
.store-home #slidshow-box .prev { <?php
if($this->config->get('RGen_featuredArrow') != ''){ 
	?>background-color:<?php echo $this->config->get('RGen_featuredArrow'); ?>;<?php
}
if($this->config->get('RGen_featuredArrowIcon') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_featuredArrowIcon'); ?>;<?php
} ?> }<?php
}

if($this->config->get('RGen_featuredArrow_hover') != '' || $this->config->get('RGen_featuredArrowIcon_hover') != ''){ 
?>.store-home #slidshow-box .next:hover, 
.store-home #slidshow-box .prev:hover {	<?php
if($this->config->get('RGen_featuredArrow') != ''){ 
	?>background-color:<?php echo $this->config->get('RGen_featuredArrow_hover'); ?>;<?php
}
if($this->config->get('RGen_featuredArrowIcon_hover') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_featuredArrowIcon_hover'); ?>;<?php
} ?> }<?php
}

if($this->config->get('RGen_featuredBg') != ''){
?>.store-home #slidshow-box .prd-block {
	background-color:<?php echo $this->config->get('RGen_featuredBg'); ?>; }<?php 
}

if($this->config->get('RGen_featuredHover_Bg') != ''){ 
?>.store-home #slidshow-box .prd-block .info {
	background-color:<?php echo $this->config->get('RGen_featuredHover_Bg'); ?>; }<?php 
}

if($this->config->get('RGen_featuredPrdLines') != ''){
?>#slidshow-box .prd-block .info-wrp ul li,
#slidshow-box .prd-block .info {
	border-color:<?php echo $this->config->get('RGen_featuredPrdLines'); ?>; }<?php 
} 
if($this->config->get('RGen_featuredPrdText') != ''){
?>.store-home #slidshow-box .prd-block a.name,
.store-home #slidshow-box .prd-block .info-wrp ul li a {
	color:#<?php echo $this->config->get('RGen_featuredPrdText'); ?>; }<?php 
} 

if($this->config->get('RGen_featuredPriceBg') != ''){
?>.store-home #slidshow-box .price {
	background-color:#<?php echo $this->config->get('RGen_featuredPriceBg'); ?>; }<?php 
} 

if($this->config->get('RGen_featuredPrice') != ''){
?>.store-home #slidshow-box .price-new {
	color: #<?php echo $this->config->get('RGen_featuredPrice'); ?>; }<?php 
}

if($this->config->get('RGen_featuredPriceOld') != ''){
?>.store-home #slidshow-box .price-old {
	color: #<?php echo $this->config->get('RGen_featuredPriceOld'); ?>; }<?php 
} 

if($this->config->get('RGen_featuredCrtBt') != '' || $this->config->get('RGen_featuredCrtBtRing') != ''){
?>.store-home #slidshow-box .prd-block .cart-bt { <?php
if($this->config->get('RGen_featuredCrtBt') != ''){
	?>background-color:#<?php echo $this->config->get('RGen_featuredCrtBt'); ?>;<?php 
}
if($this->config->get('RGen_featuredCrtBtRing') != ''){
	?>box-shadow: 0px 0px 0px 6px <?php echo $this->config->get('RGen_featuredCrtBtRing'); ?>;<?php
} 
if($this->config->get('RGen_featuredCrtBtIcon') != ''){
	?>color:#<?php echo $this->config->get('RGen_featuredCrtBtIcon'); ?>;<?php
}
?> }<?php
}

if($this->config->get('RGen_featuredCrtBt_hover') != '' || $this->config->get('RGen_featuredCrtBtRing_hover') != ''){ 
?>.store-home #slidshow-box .prd-block .cart-bt:hover {	<?php 
if($this->config->get('RGen_featuredCrtBt_hover') != ''){ 
	?>background-color:#<?php echo $this->config->get('RGen_featuredCrtBt_hover'); ?>;<?php 
}
if($this->config->get('RGen_featuredCrtBtRing_hover') != ''){
	?>box-shadow: 0px 0px 0px 6px <?php $this->config->get('RGen_featuredCrtBtRing_hover'); ?>;<?php
} 
if($this->config->get('RGen_featuredCrtBtIcon_hover') != ''){
	?>color:#<?php echo $this->config->get('RGen_featuredCrtBtIcon_hover'); ?>;<?php
}
?> }<?php
}

if($this->config->get('RGen_Slideshow_pager') != ''){
?>.store-home .slideshow .nivo-controlNav a {
	background-color:<?php echo $this->config->get('RGen_Slideshow_pager'); ?>; }<?php
}
if($this->config->get('RGen_Slideshow_pagerActive') != ''){
?>.store-home .slideshow .nivo-controlNav a.active {
	background-color:<?php echo $this->config->get('RGen_Slideshow_pagerActive'); ?>; }<?php
}
/* PRODUCT PAGE */ 
if($this->config->get('RGen_prdImageBg') != ''){
?>.image-additional li, .product-info .image {
	background:<?php echo $this->config->get('RGen_prdImageBg'); ?>;
}<?php
}
if($this->config->get('RGen_prdImageActive') != ''){
?>.th-l .image-additional .active a, .image-additional .active a { 
	border-color:<?php echo $this->config->get('RGen_prdImageActive'); ?>;
	color:<?php echo $this->config->get('RGen_prdImageActive'); ?>; }<?php
}
if($this->config->get('RGen_prdZoomText') != ''){
?>.product-info .image .zoom-text {
	color:#<?php echo $this->config->get('RGen_prdZoomText'); ?>; }<?php
}
if($this->config->get('RGen_prdZoomIcon') != ''){
?>.product-info .image .zoom-text b {
	color:#<?php echo $this->config->get('RGen_prdZoomIcon'); ?>;	
}<?php
}

if($this->config->get('RGen_prdDiscount_border') != ''){
?>.product-info .r .discount, .prd-layout1 .discount, .product-info .r .discount li, .prd-layout1 .discount li {
	border-color:<?php echo $this->config->get('RGen_prdDiscount_border'); ?>;
}<?php
}

if($this->config->get('RGen_prdPriceBg') != '' || $this->config->get('RGen_prdPriceRing') != ''){
?>.product-info .price { <?php
if($this->config->get('RGen_prdPriceBg') != ''){
	?>background-color:<?php echo $this->config->get('RGen_prdPriceBg'); ?>;<?php
}
if($this->config->get('RGen_prdPriceRing') != ''){
	?>box-shadow: 0px 0px 0px 10px <?php echo $this->config->get('RGen_prdPriceRing'); ?>;<?php
}?> }<?php
}
if($this->config->get('RGen_prdPriceOld') != ''){
?>.product-info .price-old {
	color:#<?php echo $this->config->get('RGen_prdPriceOld'); ?>;	
}<?php
}
if($this->config->get('RGen_prdPriceNew') != ''){
?>.product-info .price-new {
	color:#<?php echo $this->config->get('RGen_prdPriceNew'); ?>;
}<?php
}
if($this->config->get('RGen_prdPriceTax') != ''){
?>.product-info .price-tax {
	color:#<?php echo $this->config->get('RGen_prdPriceTax'); ?>;
}<?php
}
if($this->config->get('RGen_prdOtherText') != ''){
?>.product-info .r .minimum, .product-info .r .reward, .prd-layout1 .reward {
	color:#<?php echo $this->config->get('RGen_prdOtherText'); ?>;
}<?php
}

if($this->config->get('RGen_prdQty') != '' || $this->config->get('RGen_prdQtyBorder') != '' || $this->config->get('RGen_prdQtyText') != ''){
?>.product-info .qty .qty-input { <?php
if($this->config->get('RGen_prdQty') != ''){
	?>background:<?php echo $this->config->get('RGen_prdQty'); ?>;<?php
}
if($this->config->get('RGen_prdQtyBorder') != ''){
	?>border-color:<?php echo $this->config->get('RGen_prdQtyBorder'); ?>;<?php
}
if($this->config->get('RGen_prdQtyText') != ''){
	?>color:#<?php echo $this->config->get('RGen_prdQtyText'); ?>;<?php
} ?> }<?php
}

if($this->config->get('RGen_prdCartIcon') != '' || $this->config->get('RGen_prdCartBt') != '' || $this->config->get('RGen_prdCartRing') != ''){
?>.product-info .cart .cart-bt { <?php
if($this->config->get('RGen_prdCartIcon') != ''){
	?>color: #<?php echo $this->config->get('RGen_prdCartIcon'); ?>;<?php
}
if($this->config->get('RGen_prdCartBt') != ''){
	?>background-color: <?php echo $this->config->get('RGen_prdCartBt'); ?>;<?php
}
if($this->config->get('RGen_prdCartRing') != ''){
	?>box-shadow: 0px 0px 0px 6px <?php echo $this->config->get('RGen_prdCartRing'); ?>;<?php
} ?> }<?php
}

if($this->config->get('RGen_prdCartIcon_hover') != '' || $this->config->get('RGen_prdCartBt_hover') != '' || $this->config->get('RGen_prdCartRing_hover') != ''){
?>.product-info .cart .cart-bt:hover { <?php
if($this->config->get('RGen_prdCartIcon_hover') != ''){
	?>color: #<?php echo $this->config->get('RGen_prdCartIcon_hover'); ?>;<?php
}
if($this->config->get('RGen_prdCartBt_hover') != ''){
	?>background-color: <?php echo $this->config->get('RGen_prdCartBt_hover'); ?>;<?php
}
if($this->config->get('RGen_prdCartRing_hover') != ''){
	?>box-shadow: 0px 0px 0px 6px <?php echo $this->config->get('RGen_prdCartRing_hover'); ?>;<?php
} ?> }<?php
}
if($this->config->get('RGen_prdOptionLabel') != ''){
?>.product-info .option b { color:#<?php echo $this->config->get('RGen_prdOptionLabel'); ?>; }<?php
}

if($this->config->get('RGen_TabsBg') != ''){
?>.htabs a.selected, .tab-content {
	background-color:<?php echo $this->config->get('RGen_TabsBg'); ?>;
}<?php
}

if($this->config->get('RGen_TabsNormal') != '' || $this->config->get('RGen_TabText') != ''){
?>.htabs a { <?php
if($this->config->get('RGen_TabsNormal') != ''){
	?>background-color:<?php echo $this->config->get('RGen_TabsNormal'); ?>;<?php
}
if($this->config->get('RGen_TabText') != ''){
	?>color:#<?php echo $this->config->get('RGen_TabText'); ?>;<?php
} ?> }<?php
}
if($this->config->get('RGen_TabActiveText') != ''){
?>.htabs a.selected { color:#<?php echo $this->config->get('RGen_TabActiveText'); ?>; }<?php
}
if($this->config->get('RGen_TabContentText') != ''){
?>.tab-content { color:#<?php echo $this->config->get('RGen_TabContentText'); ?>; }<?php
}
if($this->config->get('RGen_WriteReview') != ''){
?>.read-review .wrt-off, .write-review {
	background:<?php echo $this->config->get('RGen_WriteReview'); ?>;
}<?php
}
if($this->config->get('RGen_WriteReview_label') != ''){
?>.write-review label { color:#<?php echo $this->config->get('RGen_WriteReview_label'); ?>; }<?php
}
if($this->config->get('RGen_WriteReview_Rating') != ''){
?>.write-review ol li {
	background-color:<?php echo $this->config->get('RGen_WriteReview_Rating'); ?>;
}<?php
}
if($this->config->get('RGen_WriteReview_RatingBdr') != ''){
?>.write-review ol li, .write-review ol {
	border-color:<?php echo $this->config->get('RGen_WriteReview_RatingBdr'); ?>;
}<?php
}

if($this->config->get('RGen_WriteReviewRating_bg') != '' || $this->config->get('RGen_WriteReviewRating_Text') != ''){
?>.write-review .bad, .write-review .good { <?php
if($this->config->get('RGen_WriteReviewRating_bg') != ''){
	?>background-color:#<?php echo $this->config->get('RGen_WriteReviewRating_bg'); ?>;<?php
}
if($this->config->get('RGen_WriteReviewRating_Text') != ''){
	?>color:#<?php echo $this->config->get('RGen_WriteReviewRating_Text'); ?>;<?php
} ?> }<?php
}

/* FOOTER */
if($this->config->get('RGen_FooterWrpBg') != ''){
?>.footer-wrapper { background:<?php echo $this->config->get('RGen_FooterWrpBg'); ?>; }<?php
}
if($this->config->get('RGen_FooterText') != ''){
?>.footer-wrapper {color:#<?php echo $this->config->get('RGen_FooterText'); ?>; }<?php
}
if($this->config->get('RGen_FooterLines') != ''){
?>#twitter ul li, .custom-footer .column, #footer h3 {
	border-color:<?php echo $this->config->get('RGen_FooterLines'); ?>; }<?php
}
if($this->config->get('RGen_FooterHeader') != ''){
?>.custom-footer .header-2, #footer h3 {
	color:#<?php echo $this->config->get('RGen_FooterHeader'); ?>; }<?php
}
if($this->config->get('RGen_FooterLinks') != ''){
?>.custom-footer a, #footer .column a, #twitter ul li > a {
	color:#<?php echo $this->config->get('RGen_FooterLinks'); ?>; }<?php
}
if($this->config->get('RGen_FooterLinks_hover') != ''){
?>.custom-footer a:hover, #footer .column a:hover, #twitter ul li > a:hover {
	color:#<?php echo $this->config->get('RGen_FooterLinks_hover'); ?>; }<?php
}

if($this->config->get('RGen_twitterIcon_color') != ''){
?>#twitter ul li:before {
	color:#<?php echo $this->config->get('RGen_twitterIcon_color'); ?>; }<?php
}

if($this->config->get('RGen_contactText') != ''){
?>#footer .contact-info li span {
	color:#<?php echo $this->config->get('RGen_contactText'); ?>; }<?php
}
if($this->config->get('RGen_contactIcons') != '' || $this->config->get('RGen_contactIcon_color') != ''){ ?>
#footer .contact-info .ph-image,
#footer .contact-info .fax-image,
#footer .contact-info .email-image { <?php
if($this->config->get('RGen_contactIcons') != ''){ 	
	?>background-color:<?php echo $this->config->get('RGen_contactIcons'); ?>;<?php
}
if($this->config->get('RGen_contactIcon_color') != ''){ 	
	?>color:#<?php echo $this->config->get('RGen_contactIcon_color'); ?>;<?php
}
?> }<?php 
}

if($this->config->get('RGen_FooterBg') != '' || $this->config->get('RGen_FooterSocial_bdr') != ''){ 
?>.footer-bt { <?php
if($this->config->get('RGen_FooterBg') != ''){ 
	?>background-color:<?php echo $this->config->get('RGen_FooterBg'); ?>;<?php
}
if($this->config->get('RGen_FooterSocial_bdr') != ''){ 
	?>border-color:<?php echo $this->config->get('RGen_FooterSocial_bdr'); ?>;<?php
}
?> }<?php 
}

if($this->config->get('RGen_FooterSocial') != '' || $this->config->get('RGen_FooterSocialRing') != '' || $this->config->get('RGen_FooterSocialIcon') != ''){ 
?>.footer-bt a { <?php 
if($this->config->get('RGen_FooterSocial') != ''){ 
	?>background-color:#<?php echo $this->config->get('RGen_FooterSocial'); ?>;<?php 
} 
if($this->config->get('RGen_FooterSocialRing') != ''){ 
	?>box-shadow: 0px 0px 0px 8px <?php echo $this->config->get('RGen_FooterSocialRing'); ?>;<?php 
}
if($this->config->get('RGen_FooterSocialIcon') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_FooterSocialIcon'); ?>;<?php
} ?> }<?php
}

if($this->config->get('RGen_FooterSocial_hover') != '' || $this->config->get('RGen_FooterSocialRing_hover') != '' || $this->config->get('RGen_FooterSocialIcon_hover') != ''){ 
?>.footer-bt a:hover { <?php 
if($this->config->get('RGen_FooterSocial_hover') != ''){ 
	?>background-color:#<?php echo $this->config->get('RGen_FooterSocial_hover'); ?>; <?php 
}
if($this->config->get('RGen_FooterSocialRing_hover') != ''){
	?>box-shadow: 0px 0px 0px 8px <?php $this->config->get('RGen_FooterSocialRing_hover'); ?>;<?php
}
if($this->config->get('RGen_FooterSocialIcon_hover') != ''){ 
	?>color:#<?php echo $this->config->get('RGen_FooterSocialIcon_hover'); ?>;<?php
} 
?> }<?php
}
?></style>