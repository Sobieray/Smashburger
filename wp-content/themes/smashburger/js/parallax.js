/**
 * Parallax Scrolling Tutorial
 * For Smashing Magazine
 * July 2011
 *   
 * Author: Richard Shepherd
 * 		   www.richardshepherd.com
 * 		   @richardshepherd   
 */

// On your marks, get set...
$(document).ready(function(){

			


	function responsive() {
		
		if (window.innerWidth > 1580)  {
	
			$('div[data-type="sprite"]').each(function(){
				boxPadding = $('.box-padding').height() * 0.55;
				offset = $(this).offset();
				topOffset = offset.top;
				offsetY = $(this).attr('data-offsetY');
				dataSpeed = $(this).attr('data-speed');
				newOffset1 = offsetY - boxPadding * 0.2;
				newOffset2 = offsetY +++ boxPadding;
				newOffset3 = offsetY +++ boxPadding * 2;
				newOffset4 = offsetY +++ boxPadding * 1.1;
				newOffset5 = newOffset1 * 1.15;
				if (window.innerWidth > 1800) {
					newOffset1 = offsetY - boxPadding * 1;
					newOffset2 = offsetY +++ boxPadding * 1.7;
					newOffset3 = offsetY +++ boxPadding * 2.5;
					newOffset4 = offsetY +++ boxPadding * 1.4;
					newOffset5 = newOffset1 * 1.19;
				}
				//console.log(boxPadding);
				if (dataSpeed > 0 && offsetY > 570 && offsetY < 1599) {
					$(this).attr('data-offsetY', newOffset2 );
				}
				if (dataSpeed < 0 && offsetY <= 0) {
				 	$(this).attr('data-offsetY', newOffset1);
				}
				if (dataSpeed > 0 && offsetY > 1800) {
					$(this).attr('data-offsetY', newOffset3 );
				}
				if (dataSpeed > 0 && offsetY > 1599 && offsetY < 1799) {
					$(this).attr('data-offsetY', newOffset4 );
				}
				if (dataSpeed < 0 && offsetY < 2000) {
					$(this).attr('data-offsetY', newOffset5);
				}
			});
			/*$('div[data-type="sprite"]').each(function(){
				boxPadding = $('.box-padding').height() / -0.9;
				offsetY = $(this).attr('data-offsetY');
				dataSpeed = $(this).attr('data-speed');
				newOffset = offsetY +++ boxPadding;
				if (dataSpeed < 0 && offsetY < 0 ) {
					$(this).attr('data-offsetY', newOffset );
				}
			});*/
			$('section[data-type="background"]').each(function(){
				offset = $(this).offset();
				topOffset = offset.top;
				console.log(offset, topOffset);
				boxPadding = $('.box-padding').height() / 2.2;
				console.log(boxPadding);
				offsetY = $(this).attr('data-offsetY');
				dataSpeed = $(this).attr('data-speed');
				newOffset = offsetY +++ boxPadding;

				if (offsetY > 700 ) {
					$(this).attr('data-offsetY', newOffset );
				}
			});
		/*} else if (window.innerWidth > 1300) {
			$('div[data-type="sprite"]').each(function(){
				boxPadding = $('.box-padding').height();
				offsetY = $(this).attr('data-offsetY');
				dataSpeed = $(this).attr('data-speed');
				newOffset = offsetY +++ boxPadding;
				if (dataSpeed > 0 && offsetY >= 960 && offsetY < 1399) {
					$(this).attr('data-offsetY', newOffset );
				}else if (dataSpeed > 0 && offsetY >= 960 && offsetY > 1399) {
				 	$(this).attr('data-offsetY', newOffset * 1);
				 }
			});
			$('section[data-type="background"]').each(function(){
				boxPadding = $('.box-padding').height() / 1.2;
				offsetY = $(this).attr('data-offsetY');
				dataSpeed = $(this).attr('data-speed');
				newOffset = offsetY +++ boxPadding;
				if (offsetY > 700 ) {
					$(this).attr('data-offsetY', newOffset );
				}
			});
			$('div[data-type="sprite"]').each(function(){
				boxPadding = $('.box-padding').height() / -1.2;
				offsetY = $(this).attr('data-offsetY');
				dataSpeed = $(this).attr('data-speed');
				newOffset = offsetY +++ boxPadding;
				if (dataSpeed < 0 && offsetY < 0 ) {
					$(this).attr('data-offsetY', newOffset );
				}
			});*/
		}
	}
	responsive();
	function parallax()	{		
		// Cache the Window object
		$window = $(window);
		//$window.resize(responsive);	
		// Cache the Y offset and the speed of each sprite
		$('[data-type]').each(function() {	
			$(this).data('offsetY', parseInt($(this).attr('data-offsetY')));
			$(this).data('Xposition', $(this).attr('data-Xposition'));
			$(this).data('speed', $(this).attr('data-speed'));
		});
		
		// For each element that has a data-type attribute
		$('section[data-type="background"], div[data-type="background"]').each(function(){
		
		
			// Store some variables based on where we are
			var $self = $(this),
				offsetCoords = $self.offset(),
				topOffset = offsetCoords.top;
			
			// When the window is scrolled...
		  $(window).scroll(function() {	
				// If this section is in view
				if ( ($window.scrollTop() + $window.height() ) > (topOffset) &&
					 ( (topOffset + $self.height() + $(document).height() ) > $window.scrollTop() ) ) {
						// Scroll the background at var speed
						// the yPos is a negative value because we're scrolling it UP!								
						var yPos = -($window.scrollTop() / $self.data('speed')); 
						
						// If this element has a Y offset then add it on
						if ($self.data('offsetY')) {
							yPos += $self.data('offsetY');
						}
					
						// Put together our final background position
						var coords = '50% '+ yPos + 'px';

						// Move the background
						$self.css({ backgroundPosition: coords });
						
						// Check for other sprites in this section	
						$('[data-type="sprite"]:not(.smasher , .burger-paddy)', $self).each(function() {
							
							// Cache the sprite
							var $sprite = $(this);
							
							// Use the same calculation to work out how far to scroll the sprite
							var yPos = -($window.scrollTop() / $sprite.data('speed'));					
							var coords = $sprite.data('Xposition') + ' ' + (yPos + $sprite.data('offsetY')) + 'px';
							
							$sprite.css({ backgroundPosition: coords });													
							
						}); // sprites
			
						// Check for any Videos that need scrolling
						$('[data-type="video"]', $self).each(function() {
							
							// Cache the video
							var $video = $(this);
							
							// There's some repetition going on here, so 
							// feel free to tidy this section up. 
							var yPos = -($window.scrollTop() / $video.data('speed'));					
							var coords = (yPos + $video.data('offsetY')) + 'px';
			
							$video.css({ top: coords });													
							
						}); // video	
				
					}; // in view
		
			}); // window scroll
				
		});	// each data-type
	} // parallax
	parallax();
	//parallax2();
	$(window).scroll(function() {
		var widowHeight = $window.innerHeight();
		var smash = $('#seventh').offset().top;
		var smashTop = $window.scrollTop();
		var smashSection = smashTop + windowHeight;
		var smashMove = smashTop - smash;
		var smashHeight = $('#seventh').height() / 8;
		console.log(smashMove);
		console.log(smashHeight);
		//var smashData = $('.smasher').attr(data)
		if (smash <= smashSection) {
			console.log('start bg move');
			$('.smasher').css({'backgroundPositionY' : smashMove });
			$('.burger-paddy').css({'backgroundPositionY' : -smashMove});
		}
		if (smashMove >= smashHeight) {
			$('.smasher').css( {'backgroundPositionY' : smashHeight });			
		}
		if (smashMove >= smashHeight - 100) {
			$('.burger-paddy').css({'backgroundPositionY' : -smashHeight + 100});
		}
		//console.log(smash);
		//console.log(smashTop);
	});
	
}); // document ready