$(document).ready(function() {
	var $el = $('.question.slider');
	$el.slick({
		
		onInit: function(e){
		    $el.append('<div class="slick-counter">'+ parseInt(e.currentSlide + 1, 10) +' of '+ e.slideCount +'</div>');
		},
		onAfterChange: function(e){
		  $el.find('.slick-counter').html(e.currentSlide + 1 +' of '+e.slideCount);
		}
	});
	var $el2 = $('.menu.slider');
	$el2.slick({
		dots: true,
		fade: true,
		arrows: false,
		autoplay: true
	});
	$('ul.tabs li').click(function() {
		if($('.tabs li:first-child').hasClass('active')) {
			$el2.slickPlay();
			console.log("play");
		} else {
			$el2.slickPause();
			console.log("pause");
		}
	});
	var $el3 = $('.franchise.slider');	
	$el3.slick({
		dots: false,
		arrows: true,
		autoplay: false
	});
});