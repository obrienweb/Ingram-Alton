jQuery(document).ready(function($) {

	// Stellarnav
	$('.stellarnav').stellarNav({
		theme: 'plain',
		phoneBtn: '5555555555',
		locationBtn: '/contact-us/',
		sticky : false,
		closeBtn: true,
		showArrows: false
	});

	$('#slider').flexslider({
		animation: "fade",
		directionNav: false,
		controlNav: false
	});

	$('.reviews').flexslider({
		animation: "fade",
		directionNav: false,
		controlNav: true
	});

	$('.procs').flexslider({
		manualControls: ".procs-nav li",
		animation: "fade",
		directionNav: true,
		controlNav: true
	});
	$('.procs .flex-direction-nav li.flex-nav-prev a').text('').addClass('fa fa-chevron-left');
	$('.procs .flex-direction-nav li.flex-nav-next a').text('').addClass('fa fa-chevron-right');
	$('.procs .flex-direction-nav').appendTo('.procs .grid-container');


	// ===== sticky header =====
	$(function() {
			var header = $(".header");
			$(window).scroll(function() {
					var scroll = $(window).scrollTop();

					if (scroll >= 1) {
						$('.header').addClass('sticky');
						$('#slider, #main').addClass('sticky');
					} else {
						$('.header').removeClass('sticky');
						$('#slider, #main').removeClass('sticky');
					}
			});
	});

});
