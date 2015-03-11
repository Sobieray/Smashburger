$(document).ready(function() {
	$('article li:first-child').addClass('active')
	function fade() {
		if ($('article li').hasClass('active')) {
			setTimeout(function() {
				$('article li.active').delay(500).removeClass('active').next('li').delay(750).addClass('active');
				fade();
			}, 7000);
		}
		else {
			$('article li:first-child').delay(500).addClass('active');		
			fade();
		}
	}
	fade();
});