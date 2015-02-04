$(document).ready(function() {
	$('article li:first-child').addClass('active')
	function fade() {
		if ($('article li').hasClass('active')) {
			setTimeout(function() {
				$('article li.active').fadeOut(500).removeClass('active').next('li').fadeIn(500).addClass('active');
				fade();
			}, 3000);
		}
		else {
			$('article li:first-child').fadeIn(500).addClass('active');		
			fade();
		}
	}
	fade();
});