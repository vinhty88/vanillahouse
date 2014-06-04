// Tiny jQuery Plugin by Chris Goodchild
$.fn.exists = function(callback) { var args = [].slice.call(arguments, 1); if (this.length) { callback.call(this, args); } return this; };
function alertBox(){
	$('#notification').css({marginLeft: -$('#notification').outerWidth()/2});
}

$(document).ready(function() {
	
	/* CSS CLASS ADDED FOR HOME PAGE */
	$('.store-home').parent().addClass('home-wrapper');
	if($('.store-home').hasClass('full-slideshow') == true){
		$('body').addClass('full-slideshow');
	}
	$('.home-wrapper').exists(function() {
		$('body').addClass('homepage');
	});
	
	if($('#content').hasClass('full-slideshow') || $('#content').hasClass('medium-slideshow')){
		$('#container').addClass('slideshow-overflow')
	}

	
	
	
	/* NOTIFICATION ADDED IN TO CONTENT AREA */
	$('#notification').prependTo('#content');
	
	/************************************************************/
	/* CUSTOM FOOTER ADD CLASS */
	
	$('.custom-footer').find('.column:last').addClass('last');
	
	
	/************************************************************/
	/* MAIN MENU DROP DOWN */
	
	/*var mainNavigation = $('#menu').clone();
	
	if($('#menu').find('select').length == 0){
		$('#menu').prepend('<select class="menu"></select>');
	}
	var selectMenu 	= $('select.menu');
	var menuText 	= $('#menu > span').text();
	
	$(selectMenu).prepend('<option>'+menuText+'</option>');
	//$(selectMenu).append('<option value="'+$('#menu .home-btn').attr('href')+'">'+ $('#menu .home-btn').text() +'</option>');
	
	$(mainNavigation).children('ul').children('li').each(function() {
		var href = $(this).children('a').attr('href');
		var text = $(this).children('a').text();
		$(selectMenu).append('<option value="'+href+'">'+text+'</option>');
		
		if ($(this).children('div').find('ul').length > 0) {
			$(this).children('div').find('ul').children('li').each(function() {
				var href2 = $(this).children('a').attr('href');
				var text2 = $(this).children('a').text();
				$(selectMenu).append('<option value="'+href2+'"> |-- '+text2+'</option>');
			});
		}
	});
	$(selectMenu).change(function() { location = this.options[this.selectedIndex].value; });*/
	
	/************************************************************/
	
	/* CATEGORIES */
	$(".box-category .cc").each(function(index, element) {
		//alert($(".box-category .cc").parent().hasClass('cat-active'));
		if($(this).parent().hasClass('cat-active') == true){
			$(this).addClass('open');
			$(this).next().addClass('active');
		}	
	});
	$(".box-category .cc").click(function(){ 
		if($(this).next().is(':visible') == false) {
			$('.box-category .col-subcat').slideUp(300, function(){
				$(this).removeClass('active');
				$('.cc').removeClass('open');
			});
		}
		if($(this).hasClass('open') == true) {
			$(this).next().slideUp(300, function(){
				$(this).removeClass('active');
				$(this).prev().removeClass('open');
			});
		}else{
			$(this).next().slideDown(300, function(){
				$(this).addClass('active');
				$(this).prev().addClass('open');
			});
		}
	});
	
	
	
	/* BREADCRUMB */
	$('.breadcrumb').appendTo('.navigation-bar');
	$('.breadcrumb').css({visibility:'visible'});
	$('.thm-3 .breadcrumb').appendTo('#menu');
	
	
	/* AUTO TAB SETUP */
	var T = 0;
	var CT = 0;
	var CP = 0;
	$('.content-tab').each(function(){
		T++
		var createCls = 'cTab'+T;
		$(this).addClass(createCls);
		
		var newCls = '.cTab'+T + ' .htabs a';
		var newClsPane = '.cTab'+ T + ' .tab-content';
		
		
		$(newCls).each(function(){
			CT++
			var tabCls = 'cT'+CT;
			$(this).attr('href', '#'+tabCls);
		});
		
		$(newClsPane).each(function(){
			CP++
			var paneCls = 'cT'+CP;
			$(this).attr('id', paneCls);
		});
		$(newCls).tabs();
	});
	
	
	var srl = 0;
	$('.scrollPane').each(function(){
		
		// SET ID ON ALL SCROLL PANE
		srl++;
		var createCls = 'sp'+srl;
		$(this).addClass(createCls);
		$(this).wrapInner('<div class="dataHolder"></div>');
		
		var newCls = '.sp'+srl;
		// CALLING SCROLL FUNCTION
		$(window).load(function(){
			$(newCls).mCustomScrollbar();
			$(newCls + ' .mCSB_dragger_bar').prepend('<b class="t"></b><b class="b"></b>');
		});
	});
	
	/* SELECT DROPDOWN MENU	*/
	$('select').each(function(){
		if($(this).parent().hasClass('select') == false){
			$(this).wrap("<span class='select'></span>");
			$(this).addClass('select-menu');
		}
	})
	
	/* CURRENCY */
	$('#currency').hover(
		function(){ $(this).find('ul').css({display:'block'}) },
		function(){ $(this).find('ul').css({display:'none'}) }
	);
	
	/* CURRENCY */
	$('#language').hover(
		function(){ $(this).find('ul').css({display:'block'}) },
		function(){ $(this).find('ul').css({display:'none'}) }
	);
	
	
	/* Search */
	$('.button-search').bind('click', function() {
		url = $('base').attr('href') + 'index.php?route=product/search';
				 
		var search = $('input[name=\'search\']').attr('value');
		
		if (search) {
			url += '&search=' + encodeURIComponent(search);
		}
		
		location = url;
	});
	
	
	$('#header input[name=\'search\']').bind('keydown', function(e) {
		if (e.keyCode == 13) {
			url = $('base').attr('href') + 'index.php?route=product/search';
			 
			var search = $('input[name=\'search\']').attr('value');
			
			if (search) {
				url += '&search=' + encodeURIComponent(search);
			}
			
			location = url;
		}
	});

	/* Mega Menu */
	$('#menu ul > li > a.top-lvl').mouseover(function(e) {
		if($(this).parent().children('.sub-menu').length != 0){
			var submenu = $(this).next('.sub-menu');
			var menu = $('#menu').offset();
			var dropdown = $(submenu).offset();
			i = (dropdown.left + $(submenu).outerWidth()) - (menu.left + $('#menu').outerWidth());
			if (i > 0) {
				$(submenu).css('margin-left', '-' + (i + 5) + 'px');
			}
		}
	});
	/* Mega Menu */
	if ($.browser.msie) {
		if ($.browser.version <= 9) {
			$('body').addClass('oldie');
			$('#menu > ul > li').bind('mouseover', function() {
				$(this).addClass('active');
			});
				
			$('#menu > ul > li').bind('mouseout', function() {
				$(this).removeClass('active');
			});	
		}
	}
	// IE6 & IE7 Fixes
	if ($.browser.msie) {
		if ($.browser.version <= 6) {
			$('#column-left + #column-right + #content, #column-left + #content').css('margin-left', '195px');
			
			$('#column-right + #content').css('margin-right', '195px');
		
			$('.box-category ul li a.active + ul').css('display', 'block');	
		}
		
		if ($.browser.version <= 7) {
			$('#menu > ul > li').bind('mouseover', function() {
				$(this).addClass('active');
			});
				
			$('#menu > ul > li').bind('mouseout', function() {
				$(this).removeClass('active');
			});	
		}
	}
	
	$('.success img, .warning img, .attention img, .information img').live('click', function() {
		$('#notification').fadeOut('slow');
		$(this).parent().fadeOut('slow', function() {
			$(this).remove();
		});
	});	
	
		
});

function getURLVar(key) {
	var value = [];
	
	var query = String(document.location).split('?');
	
	if (query[1]) {
		var part = query[1].split('&');

		for (i = 0; i < part.length; i++) {
			var data = part[i].split('=');
			
			if (data[0] && data[1]) {
				value[data[0]] = data[1];
			}
		}
		
		if (value[key]) {
			return value[key];
		} else {
			return '';
		}
	}
}

function addToCart(product_id, quantity) {
	quantity = typeof(quantity) != 'undefined' ? quantity : 1;

	$.ajax({
		url: 'index.php?route=checkout/cart/add',
		type: 'post',
		data: 'product_id=' + product_id + '&quantity=' + quantity,
		dataType: 'json',
		success: function(json) {
			
			$('.success, .warning, .attention, .information, .error').remove();
			
			if (json['redirect']) {
				location = json['redirect'];
			}
			
			if (json['success']) {
				$('#notification').show();
				$('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');
				alertBox();
				$('.success').fadeIn('slow');
				
				$('#cart').load('index.php?route=module/cart #cart > *', function(){
					var getTotal = $('.mini-cart-total').find('tr:last').find('td:last').html();
					$('#cart').find('#cart-total').html(getTotal);
				});

				//$('html, body').animate({ scrollTop: 0 }, 'slow'); 
			}
			if (json['success']) {
				$('html, body').animate({ scrollTop: 0 }, 'slow');
			}	
		}
	});
}
function addToWishList(product_id) {
	$.ajax({
		url: 'index.php?route=account/wishlist/add',
		type: 'post',
		data: 'product_id=' + product_id,
		dataType: 'json',
		success: function(json) {
			$('.success, .warning, .attention, .information').remove();
			
			if (json['success']) {
				$('#notification').show();
				$('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');
				alertBox();
				$('.success').fadeIn('slow');
				
				$('#wishlist-total').html(json['total']);
				
				//$('html, body').animate({ scrollTop: 700 }, 'slow');
			}
			if (json['success']) {
				$('html, body').animate({ scrollTop: 0 }, 'slow');
			}
		}
	});
}

function addToCompare(product_id) { 
	$.ajax({
		url: 'index.php?route=product/compare/add',
		type: 'post',
		data: 'product_id=' + product_id,
		dataType: 'json',
		success: function(json) {
			$('.success, .warning, .attention, .information').remove();
						
			if (json['success']) {
				$('#notification').show();
				$('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');
				alertBox();
				$('.success').fadeIn('slow');
				
				$('#compare-total').html(json['total']);
				
				//$('html, body').animate({ scrollTop: 700 }, 'slow'); 
			}
			if (json['success']) {
				$('html, body').animate({ scrollTop: 0 }, 'slow');
			}	
		}
	});
}