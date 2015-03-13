$(document).foundation();
$(document).ready(function() {
	var windowHeight = $(window).height();
	$('.page-template-template-nutritiondietary-php #main, .page-template-template-why-us-php #primary ').css({paddingTop: windowHeight - 125, marginTop: "-96px"});
	$('.page-template-template-angus-php .angus_hero').css({height: windowHeight - 125});
	$(window).resize(function() {
		windowHeight = $(window).height();
		$('.page-template-template-angus-php .angus_hero').css({height: windowHeight - 125});
	});
	//Menu Locate and Search widget
	$('#menu-item-6488').append('<div id="geolocation"><div class="located"><h6>closest to you</h6><img src="http://smashwebadmin.wpengine.com/wp-content/themes/smashburger/img/loader.gif" /></div><div class="search"><h6>Find another</h6><form id="locations-search" action="http://locations.smashburger.com/search" method="get"><input class="form-text" type="text" id="q" name="q" value="Enter ZIP, City, or State"><input class="form-submit" type="submit" value="FIND"></form></div></div>');
	//Clear Input Values
	$('input[type="text"], input[type="email"], textarea').each(function() {
		var default_value = this.value;
		$(this).focus(function(){
      if(this.value == default_value) {
        this.value = '';
      } 
		});
		$(this).blur(function(){
		  if(this.value == '') {
		    this.value = default_value;
		  }
		});
	});
	//GeoLocation
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
	      	var hours = jsonData.hours;
	      	var hourInfo = eval("(" + hours + ")");
	      	var newDate = new Date();
	      	var today = newDate.getDay();      	
	      	var jsonHours = hourInfo[today];
	      	var orderLink = jsonData.OnlineOrderLink;
	      	//var jsonOpen = hourInfo[today].open.hour;
	      	console.log(hourInfo);
	      	console.log(orderLink);
	      	function isOpen() {
	      		if (jsonHours.closed == false) {
	      			$("aside div.placeable").append('<ul class="placeable-times"><li>Open Today</li><li>'+jsonHours.open.hour+':'+jsonHours.open.minute+' '+jsonHours.open.ampm+' - '+jsonHours.close.hour+':'+jsonHours.close.minute+' '+jsonHours.close.ampm+'</li></ul>');
	      			console.log('open');
	      		}else {
	      			$("aside div.placeable").append('<ul class="placeable-times"><li>Closed Today</li></ul>');
	      		}
	      	};
	      	$("#geolocation .located img, .placeable img").fadeOut(500);
	      	$("#geolocation .located").append('<ul><li>'+jsonData.name+'</li><li>'+jsonData.streetAddress+'</li><li>'+jsonData.city+', '+jsonData.state+' '+jsonData.postal+'</li><li><a href=http://locations.smashburger.com/'+jsonData.detailsUrl+'>check it out</a></li>');
	      	$("aside div.placeable").append('<ul><li>'+jsonData.name+'</li><li>'+jsonData.streetAddress+'</li><li>'+jsonData.city+', '+jsonData.state+'</li></ul><a class="darkred-btn" href=http://locations.smashburger.com/'+jsonData.detailsUrl+'>view location<span></span></a>');
	      	$('.home #nine a.order, .menu-item-25 a, .flip .back a, .menu-item-6512 a, .home #eight a, #panel3 #inquiry-submit a').attr("href", orderLink);

	      	isOpen();
	      }
	  });
	};
	function error(err) {
	  console.warn('ERROR(' + err.code + '): ' + err.message);
	  $("#geolocation .located img, .placeable img").fadeOut(500);
	  $("#menu-item-6488").append('<div id="geolocation"><h6>closest to you</h6><ul><li>nothing is close</li><li>did you allow</li><li>GeoLocation?</li><li><a href="http://locations.smashburger.com">Find a Location</a></li>');
	  $("aside div.placeable").append('<ul><li>We Can Not Geolocate Your Position</li></ul><ul><li>check to see if your</li><li>browser is allowing GeoLocation</li></ul><a class="red-btn" href="http://locations.smashburger.com">find a location<span></span></a>');
	  $('.home #nine a.order, .menu-item-25 a, .flip .back a, .menu-item-6512 a, .home #eight a, #panel3 #inquiry-submit a').attr("href", 'http://locations.smashburger.com/');
	  //$("aside div.placeable-img").append('<img src="wp-content/themes/smashburger/img/store_front.jpg" alt="smasheburger Logo"/>');
	};
	//navigator.geolocation.getCurrentPosition(success, error, options);
	function GetCurrentLocation() {
		try {
			navigator.geolocation.getCurrentPosition(success, error, options); 
		}catch (err) {

		}
	};
	GetCurrentLocation();
	/*Mobile Menu Accordion*/
	$('.left-off-canvas-menu li.menu-item-has-children > a').click(function() {
		$(this).parent().find('.sub-menu').toggleClass('show');
	});
	/*Drop-in Navigation Background*/
	$(window).scroll(function() {
	/*	windowTop = $(window).scrollTop();
		if (windowTop >= 98) {
			$('nav#site-navigation').addClass('bg');
		} else {
			$('nav#site-navigation').removeClass('bg');
		}*/
		var windowTop = $(window).scrollTop();
		var locationOffset = $('.location-widget, #primary:not(.home)').offset().top;
		var navSize = locationOffset - 96;
		if (windowTop >= navSize) {
			$('nav#site-navigation').addClass('bg');
		} else {
			$('nav#site-navigation').removeClass('bg');
		}

	});
	
});
