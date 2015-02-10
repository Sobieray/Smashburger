$(document).foundation();
$(document).ready(function() {
	var windowHeight =$(window).height();
	$('.page-template-template-nutritiondietary-php #main, .page-template-template-angus-php #main').css({paddingTop: windowHeight - 125, marginTop: "-96px"});
	//Menu Locate and Search widget
	$("#menu-item-6488").append('<div id="geolocation"><div class="located"><h6>closest to you</h6><img src="../wp-content/themes/smashburger/img/logo.svg" /></div><div class="search"><h6>Find another</h6><form id="locations-search" action="http://locations.smashburger.com/search" method="get"><input class="form-text" type="text" id="q" name="q" value="Enter ZIP, City, or State"><input class="form-submit" type="submit" value="FIND"></form></div></div>');
	//Clear Input Values
	$('input[type="text"]').each(function() {
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
	  var placeableAPI = 'http://locations.smashburger.com/v1/search?&q=latitude:'+latitude+';longitude:'+longitude+'&app_id=05afe1e2&app_key=2d04fb54ad16be5108fd43941de76a82';
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
	      	//var jsonOpen = hourInfo[today].open.hour;
	      	console.log(hourInfo);
	      	function isOpen() {
	      		if (jsonHours.closed == false) {
	      			$("aside div.placeable").append('<ul class="placeable-times"><li>Open Today</li><li>'+jsonHours.open.hour+':'+jsonHours.open.minute+' '+jsonHours.open.ampm+' - '+jsonHours.close.hour+':'+jsonHours.close.minute+' '+jsonHours.close.ampm+'</li></ul>');
	      			console.log('open');
	      		}else {
	      			$("aside div.placeable").append('<ul class="placeable-times"><li>Closed Today</li></ul>');
	      		}
	      	}
	      	$("#geolocation .located img").fadeOut(500);
	      	$("#geolocation .located").append('<ul><li>'+jsonData.name+'</li><li>'+jsonData.streetAddress+'</li><li>'+jsonData.city+', '+jsonData.state+' '+jsonData.postal+'</li><li><a href=http://locations.smashburger.com/'+jsonData.detailsUrl+'>check it out</a></li>');
	      	$("aside div.placeable").append('<ul><li>'+jsonData.name+'</li><li>'+jsonData.streetAddress+'</li><li>'+jsonData.city+', '+jsonData.state+'</li></ul><a class="red-btn" href=http://locations.smashburger.com/'+jsonData.detailsUrl+'>view location<span></span></a>');
	      	//$("aside div.placeable-img").append('<img src="'+jsonData['Location Photo']+'" alt="smasheburger store front"/>');
	      	isOpen();
	      }
	  });

	  console.log('Your current position is:');
	  console.log('Latitude : ' + crd.latitude);
	  console.log('Longitude: ' + crd.longitude);
	  console.log('More or less ' + crd.accuracy + ' meters.');
	};

	function error(err) {
	  console.warn('ERROR(' + err.code + '): ' + err.message);
	  $("#menu-item-6488").append('<div id="geolocation"><h6>closest to you</h6><ul><li>nothing is close</li><li>did you allow</li><li>GeoLocation?</li><li><a href="http://locations.smashburger.com">Find a Location</a></li>');
	  $("aside div.placeable").append('<ul><li>We Can Not Geolocate Your Position</li></ul><ul><li>check to see if your</li><li>browser is allowing GeoLocation</li></ul><a class="red-btn" href="http://locations.smashburger.com">find a location<span></span></a>');
	  //$("aside div.placeable-img").append('<img src="wp-content/themes/smashburger/img/store_front.jpg" alt="smasheburger Logo"/>');
	};

	navigator.geolocation.getCurrentPosition(success, error, options);
});
