

$(document).ready(function() {
	$('#menu-item-41').addClass('has-dropdown');
	$('#menu-item-41').append('<ul id="geolocation" class="sub-menu dropdown"><li>test</li></ul>');
	//Find Screen Orientation
	function portrait() {
		windowHeight = $(window).height();
		if (window.matchMedia("(orientation: portrait)").matches) {
			$('.location-widget').css({'marginTop' : windowHeight / 1.7 });
		} else {
			$('.location-widget').css({'marginTop' : windowHeight - 83});
		}
	}
	portrait();
	if (windowHeight < 1025) {
		$(window).resize(portrait);
	}
});

