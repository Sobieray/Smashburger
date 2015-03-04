

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
	/*hero rotation*/
	var divs = $('#first').find('div.rotation');
	var x = Math.floor((Math.random() * 6));
	var show = divs[x];
	$(show).removeClass('rotation');

	var target = $('.parallax1 p, .parallax1 span');
  var targetHeight = $('#main').outerHeight() / 4;
  $(document).scroll(function(e){
    var scrollPercent = (targetHeight - window.scrollY) / targetHeight;
    console.log(scrollPercent);
    if(scrollPercent >= 0){
        target.css('opacity', scrollPercent);
    };
  });
  if ($(window).width() < 642) {
		var deviceHeight = $(window).height() / 3.4;
		$('.home #nine a').css({'height' : deviceHeight});
		$(window).resize(function() {
		  deviceHeight = $(window).height() / 3.4;
		  $('.home #nine a').css({'height' : deviceHeight});
		});
	};
});

