<?php if($position == 'column_left' || $position == 'column_right'){ ?>
	
<div class="box latest-prd" id="latest-prd<?php echo $module; ?>">
	<div class="box-heading header-1"><?php echo $heading_title; ?></div>
	<?php if($this->config->get('RGen_colprdView_latest') != 'scroll'){ ?>
	<ul class="box-product">
		<?php foreach ($products as $product) { ?>
		<li class="col-prd">
			<div class="image">
				<?php if ($product['special']) { ?>
				<span class="offer-tag"></span>
				<?php } ?>
				<a href="<?php echo $product['href']; ?>">
					<?php if ($product['thumb']) { ?>
					<img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" />
					<?php } ?>
				</a>
			</div>
			<div class="info-wrp">
				<a href="<?php echo $product['href']; ?>" class="name"><?php echo $product['name']; ?></a>
				<?php if ($product['price']) { ?>
				<div class="price col-price">
					<?php if (!$product['special']) { ?>
					<?php echo $product['price']; ?>
					<?php } else { ?>
					<span class="price-old"><?php echo $product['price']; ?></span>
					<span class="price-new"><?php echo $product['special']; ?></span>
					<?php } ?>
				</div>
				<?php } ?>
				<a href="<?php echo $product['href']; ?>" class="more"><?php echo $this->language->get('button_moreinfo'); ?> <span>&#8250;</span></a>
			</div>
		</li>
		<?php } ?>
	</ul>
	<?php } else { ?>
	<div class='list-carousel col-prd-carousel'>
		<ul class="box-product">
			<?php foreach ($products as $product) { ?>
			<li class="col-prd carousel-item">
				<div class="image">
					<?php if ($product['special']) { ?>
					<span class="offer-tag"></span>
					<?php } ?>
					<a href="<?php echo $product['href']; ?>">
						<?php if ($product['thumb']) { ?>
						<img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" />
						<?php } ?>
					</a>
				</div>
				<div class="info-wrp">
					<a href="<?php echo $product['href']; ?>" class="name"><?php echo $product['name']; ?></a>
					<?php if ($product['price']) { ?>
					<div class="price col-price">
						<?php if (!$product['special']) { ?>
						<?php echo $product['price']; ?>
						<?php } else { ?>
						<span class="price-old"><?php echo $product['price']; ?></span>
						<span class="price-new"><?php echo $product['special']; ?></span>
						<?php } ?>
					</div>
					<?php } ?>
					<a href="<?php echo $product['href']; ?>" class="more"><?php echo $this->language->get('button_moreinfo'); ?> <span>&#8250;</span></a>
				</div>
			</li>
			<?php } ?>
		</ul>
		<div class="carousel-controls"><a class="prev"></a><a class="next"></a></div>
	</div>
	<script type="text/javascript">
		$('#latest-prd<?php echo $module; ?>').find('.box-product').carouFredSel({
			prev: '#latest-prd<?php echo $module; ?> .carousel-controls .prev',
			next: '#latest-prd<?php echo $module; ?> .carousel-controls .next',
			scroll: 1,
			width:'100%',
			swipe:{onTouch: true},
			auto: false,
			circular:false,
			infinite:false
		});
	</script>
	<?php } ?>
	
</div>		

<?php }else{ ?>

<?php 
$this->document->addScript('catalog/view/theme/' . $this->config->get('config_template') . '/js/jquery.touchSwipe.min.js');
$this->document->addScript('catalog/view/theme/' . $this->config->get('config_template') . '/js/jquery.carouFredSel-6.1.0-packed.js');

$getRoute = 'common/home';
if (isset($this->request->get['route'])) {
    $getRoute = $this->request->get['route'];
} else {
    $getRoute = 'common/home';
}
if ($this->config->get('RGen_SlideShow_Mod_status') == 1 && $this->config->get('RGen_SlideShow_Mod') == 'latest' && $getRoute == 'common/home') { ?>
<div class="box latest-prd slidshow-prd list-carousel" id="slidshow-box">
<?php }else { ?>
<div class="box latest-prd list-carousel<?php if ($this->config->get('RGen_carouselArrow') == 'tr') { ?> arrow-tr<?php } ?>" id="latest-prd<?php echo $module; ?>">
<?php } ?>
	
	<div class="box-heading header-1"><?php echo $heading_title; ?></div>
	<ul class="box-product">
		<?php foreach ($products as $product) { ?>
		<li class="carousel-item">
			<div class="prd-block">
				
				<div class="image">
					<?php if ($product['special']) { ?>
					<span class="offer-tag"></span>
					<?php } ?>
					<a href="<?php echo $product['href']; ?>">
					<?php if ($product['thumb']) { ?>
					<img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" />
					<?php } ?>
					</a>
				</div>
				
				<div class="info-wrp">
					<div class="info">
						<a href="<?php echo $product['href']; ?>" class="name"><?php echo $product['name']; ?></a>
						<?php if ($product['price']) { ?>
						<div class="price-wrp">
							<?php if (!$product['special']) { ?>
							<?php echo $product['price']; ?>
							<?php } else { ?>
							<span class="price-old"><?php echo $product['price']; ?></span>
							<?php echo $product['special']; ?>
							<?php } ?>
						</div>
						<?php } ?>
						<?php if ($product['rating']) { ?>
						<div class="rating"><img src="catalog/view/theme/default/image/stars-<?php echo $product['rating']; ?>.png" alt="<?php echo $product['reviews']; ?>" /></div>
						<?php } ?>
                        <a class="cart-bt" title="<?php echo $button_cart; ?>" onclick="addToCart('<?php echo $product['product_id']; ?>');"><?php echo $button_cart; ?></a>
						<ul>
							<li><a href="<?php echo $product['href']; ?>"><?php echo $this->language->get('button_moreinfo'); ?> <span>&#8250;</span></a></li>
							<li><a onclick="addToWishList('<?php echo $product['product_id']; ?>');"><?php echo $this->language->get('button_wishlist'); ?> <span>&#8250;</span></a></li>
							<li class="last"><a onclick="addToCompare('<?php echo $product['product_id']; ?>');"><?php echo $this->language->get('button_compare'); ?> <span>&#8250;</span></a></li>
						</ul>
					</div>
					<?php if ($product['price']) { ?>
					<div class="price">
						<?php if (!$product['special']) { ?>
						<?php echo $product['price']; ?>
						<?php } else { ?>
						<span class="price-old"><?php echo $product['price']; ?></span>
						<span class="price-new"><?php echo $product['special']; ?></span>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
			</div>
		</li>
		<?php } ?>
	</ul>
	<div class="carousel-controls"><a class="prev"></a><a class="next"></a></div>
	<div class="clearfix hr"></div>
</div>
<script type="text/javascript"><!--
$(document).ready(function(){
	
	var prdObj 	= 	$('#latest-prd<?php echo $module; ?>');
	var chkW 	= 	$('.content-body').width();
	var chkHome = 	$('.latest-prd').hasClass('slidshow-prd');
	
	// CHECK FOR COLUMN PRODUCTS
	/* PRODUCTS DISPLAY ON SLIDESHOW 
	*******************************************/
	<?php if ($this->config->get('RGen_SlideShow_Mod_status') == 1 && $this->config->get('RGen_SlideShow_Mod') == 'latest' && $getRoute == 'common/home') { ?>
	$('#slidshow-box').find('.box-product').each(function() {
		$(this).carouFredSel({
			//responsive: true,
			prev: '#slidshow-box .carousel-controls .prev',
			next: '#slidshow-box .carousel-controls .next',
			width: 469,
			auto:false,
			scroll: 1,
			onCreate: function(){
				$('#slidshow-box .carousel-controls').css({ display:'block' });
			},
			items: { visible: {min: 2}},
			swipe:{onTouch: true},
			circular:false,
			infinite:false
		});
	});
	$('#slidshow-box').prependTo('#content .slideshow:first');
	
	/* PRODUCTS DISPLAY ON NORMAL MODULE
	*******************************************/
	<?php }else { ?>
	prdObj.find('.box-product').each(function() {
		if($(this).children('li').length == 3) {
			$(this).addClass('less3');
		}else if($(this).children('li').length == 2) {
			$(this).addClass('less2');
		}else if($(this).children('li').length == 1) {
			$(this).addClass('less1');
		}
		
		$(this).carouFredSel({
			responsive: true,
			prev: '#latest-prd<?php echo $module; ?> .carousel-controls .prev',
			next: '#latest-prd<?php echo $module; ?> .carousel-controls .next',
			width: '100%',
			auto:false,
			scroll: 1,
			items: {visible: {min: 1,max: 4}},
			swipe:{onTouch: true},
			circular:false,
			infinite:false,
		}, { onWindowResize  : "throttle" });
	});
	<?php } ?>
});
//--></script>

<?php } ?>