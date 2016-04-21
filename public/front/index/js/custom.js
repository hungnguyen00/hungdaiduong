(function ($) {

	new WOW().init();

	jQuery(window).load(function() { 
		jQuery("#preloader").delay(100).fadeOut("slow");
		jQuery("#load").delay(100).fadeOut("slow");
	});


	//jQuery to collapse the navbar on scroll
	$(window).scroll(function() {
		if ($(".navbar").offset().top > 50) {
			$(".navbar-fixed-top").addClass("top-nav-collapse");
		} else {
			$(".navbar-fixed-top").removeClass("top-nav-collapse");
		}
	});

	//jQuery for page scrolling feature - requires jQuery Easing plugin
	$(function() {
		$('.navbar-nav li a').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});
		$('.page-scroll a').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});
	});

	// add googlemaps to index page
	initMap();
	
})(jQuery);
//GoogleMaps start
function initMap() {
    var mapDiv = document.getElementById('google-map');
    var map = new google.maps.Map(mapDiv, {
      center: {lat: 10.7717778, lng: 106.6868165},
      zoom: 17,
		scrollwheel: false,
    });
    var marker = new google.maps.Marker({
        position: {lat: 10.7717778, lng: 106.6868165},
        map: map,
        title: 'Hùng Đại Dương'
      });
}
//GoogleMaps end
