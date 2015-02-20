$(document).ready(function() {
	var options = {
	  enableHighAccuracy: true,
	  timeout: 5000,
	  maximumAge: 0
	};
	function success(pos) {
	  var crd = pos.coords;
	  var latitude = crd.latitude;
	  var longitude = crd.longitude;
	  var placeableAPI = 'http://smashburger.test.placeablepages.com/v1/search?&q=latitude:'+latitude+';longitude:'+longitude+'&app_id=05afe1e2&app_key=2d04fb54ad16be5108fd43941de76a82';
	  $.ajax({
	      url:placeableAPI,
	      dataType:'jsonp',
	      success:function(data) {
	      	console.log(data);
	      	var jsonData = data.results.results[0];
	      	var locationDescription =	jsonData["location description"];
	      	var localBurger =	jsonData["Burger Stack Image"];       	
	      	$('.page-template-template-menu-php .menu-locate').append('<h5>&bullet;'+jsonData.city+'&bullet;</h5>');
	      	$('.page-template-template-menu-php .burgers div.back').append('<p class="localdescription">'+locationDescription+'</p>');
	      	$('.page-template-template-menu-php .burgers .front img').removeClass('question').attr('src', localBurger);
	      	$('.page-template-template-menu-php .burgers .front h4').fadeOut(300);
	      	$('.page-template-template-menu-php .local-burger').addClass('flip-container');
	      	//$("aside div.placeable-img").append('<img src="'+jsonData['Location Photo']+'" alt="smasheburger store front"/>');
	      	isOpen();
	      }
	  });
	};

	function error(err) {
	  console.warn('ERROR(' + err.code + '): ' + err.message);
	  
	};

	//navigator.geolocation.getCurrentPosition(success, error, options);
	function GetCurrentLocation() {
		try {
		navigator.geolocation.getCurrentPosition(success, error, options); 
		} catch (err) {

		}
	};
	GetCurrentLocation();
	/* Select Box To Change Local Burger*/
	$('.menu-locate.burgers select').change(function() {
		$('.menu-locate.burgers select option:selected').each(function() {
			var selected= $(this).text();
			var placeableAPI = 'http://smashburger.test.placeablepages.com/v1/search?&q='+selected+'&app_id=05afe1e2&app_key=2d04fb54ad16be5108fd43941de76a82';
			console.log(selected);
			$.ajax({
			    url:placeableAPI,
			    dataType:'jsonp',
			    success:function(data) {
			    	console.log(data);
			    	var jsonData = data.results.results[0];
			    	var locationDescription =	jsonData["location description"];
			    	var localBurger =	jsonData["Burger Stack Image"];
			    	$('.page-template-template-menu-php .burgers .front img').attr('src', localBurger);
			    	$('.page-template-template-menu-php .burgers div.back .localdescription').remove();
			    	$('.page-template-template-menu-php .burgers div.back').append('<p class="localdescription">'+locationDescription+'</p>')
			    }
			});
		});
	});
	$('.menu-locate.chicken select').change(function() {
		$('.menu-locate.chicken select option:selected').each(function() {
			var selected= $(this).text();
			var placeableAPI = 'http://smashburger.test.placeablepages.com/v1/search?&q='+selected+'&app_id=05afe1e2&app_key=2d04fb54ad16be5108fd43941de76a82';
			console.log(selected);
			$.ajax({
			    url:placeableAPI,
			    dataType:'jsonp',
			    success:function(data) {
			    	console.log(data);
			    	var jsonData = data.results.results[0];
			    	var locationDescription =	jsonData["location description"];
			    	var localBurger =	jsonData["Chicken Stack Image"];
			    	$('.page-template-template-menu-php .chicken .front img').attr('src', localBurger);
			    	$('.page-template-template-menu-php .chicken div.back .localdescription').remove();
			    	$('.page-template-template-menu-php .chicken div.back').append('<p class="localdescription">'+locationDescription+'</p>')
			    }
			});
		});
	});
	$('.menu-locate.sides select').change(function() {
		$('.menu-locate.sides select option:selected').each(function() {
			var selected= $(this).text();
			var placeableAPI = 'http://smashburger.test.placeablepages.com/v1/search?&q='+selected+'&app_id=05afe1e2&app_key=2d04fb54ad16be5108fd43941de76a82';
			console.log(selected);
			$.ajax({
			    url:placeableAPI,
			    dataType:'jsonp',
			    success:function(data) {
			    	console.log(data);
			    	var jsonData = data.results.results[0];
			    	var locationDescription =	jsonData["location description"];
			    	var localBurger =	jsonData["Side Stack Image"];
			    	$('.page-template-template-menu-php .sides .front img').attr('src', localBurger);
			    	$('.page-template-template-menu-php .sides div.back .localdescription').remove();
			    	$('.page-template-template-menu-php .sides div.back').append('<p class="localdescription">'+locationDescription+'</p>')
			    }
			});
		});
	});
	$('.menu-locate.shakes select').change(function() {
		$('.menu-locate.shakes select option:selected').each(function() {
			var selected= $(this).text();
			var placeableAPI = 'http://smashburger.test.placeablepages.com/v1/search?&q='+selected+'&app_id=05afe1e2&app_key=2d04fb54ad16be5108fd43941de76a82';
			console.log(selected);
			$.ajax({
			    url:placeableAPI,
			    dataType:'jsonp',
			    success:function(data) {
			    	console.log(data);
			    	var jsonData = data.results.results[0];
			    	var locationDescription =	jsonData["location description"];
			    	var localBurger =	jsonData["Side Stack Image"];
			    	$('.page-template-template-menu-php .shakes .front img').attr('src', localBurger);
			    	$('.page-template-template-menu-php .shakes div.back .localdescription').remove();
			    	$('.page-template-template-menu-php .shakes div.back').append('<p class="localdescription">'+locationDescription+'</p>')
			    }
			});
		});
	});
});