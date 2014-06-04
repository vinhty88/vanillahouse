$(document).ready(function(){
	
	$('#main-tabs .nav a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	$('#tabs1 a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	
	$('#customMenu .nav-tabs a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});

	$('#RGen-ddMenu-tab a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	
	$('#customMenuItems a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});

	$('#customHtmlMenu a:first').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	$('#customHtmlMenu li:first').addClass('active');
	$('#RGen-htmlMenu .tab-content .tab-pane:first').addClass('active');
	
	$('#custom-ft a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	
	$('#theme_tabs a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	
	$('#customCode a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	
	$('#widgetID').live('click', function() {
		$('.widget-popup').dialog({
			dialogClass: "widgetid-popup",
			open: function(event, ui) {},
			title: 'widget ID',
			bgiframe: false,
			width: 900,
			height: 750,
			resizable: false,
			modal: false,
			closeOnEscape: true
		});	
	});
	
	

	// RADIO BUTTONS
	$('.btn-group .btn').on('click', function (e) {
		if (!this) return e.preventDefault() // stops modal from being shown
		$(this).button();
	})
});

