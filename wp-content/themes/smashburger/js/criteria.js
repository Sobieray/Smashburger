$(document).ready(function() {
	$('#franchise-criteria input').click(function() {
		var checkboxes = $('input[name="criteria"]');
		var count_checkboxes = checkboxes.filter(':checked').length;
		if (count_checkboxes == 6) {
		 	$('#modal1').fadeIn(500);
		} else {
			setTimeout(function() {
				checkBox();
			}, 15000);
		}
	});
	function checkBox() {
		checkboxes = $('input[name="criteria"]');
		count_checkboxes = checkboxes.filter(':checked').length;
		if (count_checkboxes == 6) {
	 	  $('#modal1').fadeIn(500);
	 	} else {
	 		$('#modal2').fadeIn(500);
	 	}
  };
});