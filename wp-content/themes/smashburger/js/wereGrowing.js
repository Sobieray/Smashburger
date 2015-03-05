$(document).ready(function() {
	var windowHeight = $(window).height();
	$('#map').height(windowHeight);
	$(window).resize(function() {
		var windowHeight = $(window).height();
		$('#map').height(windowHeight);
	});
	var smashBurger = new Datamap({
	    element: document.getElementById('map'),
	    responsive: true,
	    scope: 'world',   
	    fills: {
	     	'RED' : '#c4161c',
	     	'BLUE' : '#4b5f8a',
				defaultFill: '#d4cab6'
	    },
	    data: {
	      'CAN': {fillKey: 'RED'},
	      'USA': {fillKey: 'RED'},
	      'SLV': {fillKey: 'RED'},
	      'CRI': {fillKey: 'RED'},
	      'PAN': {fillKey: 'RED'},
	      'SAU': {fillKey: 'RED'}
	    },
	    geographyConfig: {
	        highlightOnHover: false,
	        popupOnHover: false,
	        borderWidth: 0.0,
	    },	   
	});
	$.ajax({
	    url: 'http://localhost:8888/wp-content/themes/smashburger/data/smash2.json',
	    dataType:'json',
	    success:function(locations) {
	    	var smashburgerLocations = [];
	      for (var i = 0; i < locations.results.length; i++) {
	        var latitude = locations.results[i].geocode.lat;
	        var longitude = locations.results[i].geocode.long;
	        var name = locations.results[i].name;
	        var opened = locations.results[i].userFields["Opening Date"].value;
	      	var date = new Date(opened);
	      	var time = date.getTime();
	      	
	        var coordinates = {name: name, date: time, latitude: latitude, longitude: longitude, radius: 2, fillKey: 'BLUE', fillOpacity: 1, borderColor: '#4b5f8a', borderWidth: 0}; //
	        smashburgerLocations.push(coordinates); 
	        //console.log(opened);
	      };
	    	console.log(smashburgerLocations);
	    	var recentOpenings = [];
	    	var futureOpenings = [];
	    	for (var j = 0; j < smashburgerLocations.length; j++) {

	    		var today = Date.now();
      		var sixMonths = today - 15552000000;
      		var dates = smashburgerLocations[j].date;

	  		  if (dates >= sixMonths && dates <= today) { 
	    		  var latitude =  smashburgerLocations[j].latitude;
	    		  var longitude = smashburgerLocations[j].longitude;
	    		  var name = smashburgerLocations[j].name;
	    		  newLocations = {name: name, date: time, latitude: latitude, longitude: longitude, radius: 2, fillKey: 'BLUE', fillOpacity: 1, borderColor: '#4b5f8a', borderWidth: 0};
	    	  	recentOpenings.push(newLocations);
	  		  };
	  		  if (dates > today) {
	  		  	 var latitude =  smashburgerLocations[j].latitude;
	    		   var longitude = smashburgerLocations[j].longitude;
	    		   var name = smashburgerLocations[j].name;
	    		   futureLocations = {name: name, date: time, latitude: latitude, longitude: longitude, radius: 2, fillKey: 'BLUE', fillOpacity: 1, borderColor: '#4b5f8a', borderWidth: 0};
	    		   futureOpenings.push(futureLocations);
	  		  };
	  		};
	  		console.log(recentOpenings);
	  		console.log(futureOpenings);
	      smashBurger.bubbles(smashburgerLocations, {

	       /*popupTemplate: function (geo, data) { 
	        return ['<div class="hoverinfo">' +  data.name, '</div>'].join('');
	       }*/
	      });
	      $('#filters a.recent-openings').click(function() {
	      	console.log(recentOpenings);
	      	smashBurger.bubbles(recentOpenings, {
		      });
		      $(this).addClass('active');
		      $('#filters a.future-openings').removeClass('active');
		      console.log('recent');
	      });
	        $('#filters a.future-openings').click(function() {
	      	smashBurger.bubbles(futureOpenings, {
		      });
		      console.log('future');
		      $(this).addClass('active');
		      $('#filters a.recent-openings').removeClass('active');
	      });

	    },
	});
	// Zoom 
	setTimeout(zoomin, 1000);
	function zoomin() {
		var width = 960,
		    height = 550;
		
		var zoom = d3.behavior.zoom()
		    .scaleExtent([1, 10])
		    .on("zoom", zoomed);
		/*var drag = d3.behavior.drag()
		    .origin(function(d) { return d; })
		    .on("dragstart", dragstarted)
		    .on("drag", dragged)
		    .on("dragend", dragended);*/
		var slider = d3.select(".zoom-slider").append("p").append("input")
		  .datum({})
		  .attr("type", "range")
		  .attr("value", zoom.scaleExtent()[0])
		  .attr("min", zoom.scaleExtent()[0])
		  .attr("max", zoom.scaleExtent()[1])
		  .attr("step", (zoom.scaleExtent()[1] - zoom.scaleExtent()[0]) / 100)
		  .on("input", slided);
		var svg = d3.select("g")
		    .attr("width", width)
		    .attr("height", height)
		    //.attr("transform", "translate(" + margin.left + "," + margin.right + ")")
		    .call(zoom);
		var gBubs = d3.select("g.bubbles")
		    .attr("width", width)
		    .attr("height", height)
		    //.attr("transform", "translate(" + margin.left + "," + margin.right + ")")
		    .call(zoom);
		  function zoomed() {
		    svg.attr("transform", "translate(" + d3.event.translate + ")scale(" + d3.event.scale + ")");
		    gBubs.attr("transform", "translate(" + d3.event.translate + ")scale(" + d3.event.scale + ")");
		    slider.property("value",  d3.event.scale);
		    //slider.property("value",  d3.event.translate);
		  }

	  function dragstarted(d) {
	    d3.event.sourceEvent.stopPropagation();
	    d3.select(this).classed("dragging", true);
	  }

	  function dragged(d) {
	    d3.select(this).attr("cx", d.x = d3.event.x).attr("cy", d.y = d3.event.y);
	  }

	  function dragended(d) {
	    d3.select(this).classed("dragging", false);
	  }

	  function slided(d){
	   zoom.scale(d3.select(this).property("value"))
	      .event(svg);	  
	  }
	}
});
