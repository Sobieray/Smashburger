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
	      	var burgerDescription =	jsonData["Burger Menu Description"];
	      	var localBurger =	jsonData["Burger Stack Image"]; 
	      	var shakeDescription =	jsonData["Shake Description"];
	      	var localShake =	jsonData["Shake Stack"];
	      	var chickenDescription =	jsonData["Chicken Description"];
			    var smashChicken =	jsonData["Chicken Stack"];
			    var sideDescription =	jsonData["Side Description"];
			    var localSide =	jsonData["Side Stack"];      	
	      	$('.menu-locate').append('<h5>'+jsonData.city+'</h5>');
	      	if (localBurger !== "" ) {
	      		$('.burgers .front img').removeClass('question').attr('src', localBurger);
	      		$('.burgers div.back').append('<p class="localdescription">'+burgerDescription+'</p>');
	      		$('.burgers .front.locating h4').fadeOut(300);
	      		$('.local-burger.burgers').addClass('flip-container');
	      	}
	      	if (smashChicken !== "" ) {
	      		$('.chicken .front img').removeClass('question').attr('src', smashChicken);
	      		$('.chicken .front.locating h4').fadeOut(300);
			    	$('.chicken div.back').append('<p class="localdescription">'+chickenDescription+'</p>');
			    	$('.local-burger.chicken').addClass('flip-container');
	      	}
			    if (localSide !== "" ) {
			      $('.sides .front img').removeClass('question').attr('src', localSide);
			      $('.sides .front.locating h4').fadeOut(300);
			    	$('.sides div.back').append('<p class="localdescription">'+sideDescription+'</p>');
			    	$('.local-burger.sides').addClass('flip-container');
			  	}
			    if (localShake !== "" ) {
			    	$('.shakes .front img').removeClass('question').attr('src', localShake);
			    	$('.shakes .front.locating h4').fadeOut(300);
			    	$('.shakes div.back').append('<p class="localdescription">'+shakeDescription+'</p>');
			    	$('.local-burger.shakes').addClass('flip-container');
			  	}
			  	if (localShake == "" ) {
			  		$('.menu-locate.shakes p, .menu-locate.shakes h6, .menu-locate.shakes h5 ').fadeOut(300);
			  		$('.menu-locate.shakes').append('<p class="na">We either can&rsquo;t find you OR there aren&rsquo;t any local shakes available in your area</p>');
			  	}
			  	if (localSide == "" ) {
			  		$('.menu-locate.sides p, .menu-locate.sides h6, .menu-locate.sides h5 ').fadeOut(300);
			  		$('.menu-locate.sides').append('<p class="na">We either can&rsquo;t find you OR there aren&rsquo;t any local sides available in your area</p>');
			  	}
			  	if (smashChicken == "") {
			  		$('.menu-locate.chicken p, .menu-locate.chicken h6, .menu-locate.chicken h5 ').fadeOut(300);
			  		$('.menu-locate.chicken').append('<p class="na">We either can&rsquo;t find you OR there aren&rsquo;t any local SmashChickens available in your area</p>');
			  	}
			   	if (localBurger == "") {
			  		$('.menu-locate.burgers p, .menu-locate.burgers h6, .menu-locate.burgers h5 ').fadeOut(300);
			  		$('.menu-locate.burgers').append('<p class="na">We either can&rsquo;t find you OR there aren&rsquo;t any local SmashBurgers available in your area</p>');
			  	}
	      	//$("aside div.placeable-img").append('<img src="'+jsonData['Location Photo']+'" alt="smasheburger store front"/>');
	      }
	  });
	};

	function error(err) {
	  console.warn('ERROR(' + err.code + '): ' + err.message);
	  $('.menu-locate.shakes p, .menu-locate.shakes h6, .menu-locate.shakes h5 ').fadeOut(300);
	  $('.menu-locate.shakes').append('<p class="na">We either can&rsquo;t find you OR there aren&rsquo;t any local shakes available in your area</p>');
	  $('.menu-locate.sides p, .menu-locate.sides h6, .menu-locate.sides h5 ').fadeOut(300);
	  $('.menu-locate.sides').append('<p class="na">We either can&rsquo;t find you OR there aren&rsquo;t any local sides available in your area</p>');
	  $('.menu-locate.chicken p, .menu-locate.chicken h6, .menu-locate.chicken h5 ').fadeOut(300);
	  $('.menu-locate.chicken').append('<p class="na">We either can&rsquo;t find you OR there aren&rsquo;t any local SmashChickens available in your area</p>');
	  $('.menu-locate.burgers p, .menu-locate.burgers h6, .menu-locate.burgers h5 ').fadeOut(300);
	  $('.menu-locate.burgers').append('<p class="na">We either can&rsquo;t find you OR there aren&rsquo;t any local SmashBurgers available in your area</p>');
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
			    	var burgerDescription =	jsonData["Burger Menu Description"];
			    	var localBurger =	jsonData["Burger Stack Image"];
			    	$('.burgers .front img').removeClass('question').attr('src', localBurger);
			    	$('.burgers div.back .localdescription').remove();
			    	$('.burgers div.back').append('<p class="localdescription">'+burgerDescription+'</p>');
			    	$('.burgers .front.locating h4').fadeOut(300);
			    	$('.local-burger.burgers').addClass('flip-container');
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
			    	var chickenDescription =	jsonData["Chicken Description"];
			    	var smashChicken =	jsonData["Chicken Stack"];
			    	$('.chicken .front img').removeClass('question').attr('src', smashChicken);
			    	$('.chicken div.back .localdescription').remove();
			    	$('.chicken div.back').append('<p class="localdescription">'+chickenDescription+'</p>');
			    	$('.chicken .front.locating h4').fadeOut(300);
						$('.local-burger.chicken').addClass('flip-container');
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
			    	var sideDescription =	jsonData["Side Description"];
			    	var localSide =	jsonData["Side Stack"];
			    	$('.sides .front img').removeClass('question').attr('src', localSide);
			    	$('.sides div.back .localdescription').remove();
			    	$('.sides div.back').append('<p class="localdescription">'+sideDescription+'</p>');
			    	$('.sides .front.locating h4').fadeOut(300);
						$('.local-burger.sides').addClass('flip-container');
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
			    	var shakeDescription =	jsonData["Shake Description"];
			    	var localShake =	jsonData["Shake Stack"];
			    	$('.shakes .front img').removeClass('question').attr('src', localShake);
			    	$('.shakes div.back .localdescription').remove();
			    	$('.shakes div.back').append('<p class="localdescription">'+shakeDescription+'</p>');
			    	$('.shakes .front.locating h4').fadeOut(300);
			    	$('.local-burger.shakes').addClass('flip-container');
			    }
			});
		});
	});
	$('.back-to-burgers a').click(function() {
		$('.tab-title:first-child a').click();
	});
});