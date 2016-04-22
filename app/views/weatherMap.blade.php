<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/weather_map.css">
	<title>Weather Map</title>
</head>
<body>

	<div id="container">
		<h1>Weather Application</h1>

		<h3 id="city">San Antonio</h3>
		<img id="bacon" src="/image/bacon.jpg" alt="bacon and eggs">

		<div class="row">
			<div id="day-1"></div>
			<div id="day-2"></div>
			<div id="day-3"></div>
		</div>
		<div id="map-canvas"></div>
	</div>

	<form>
		<input  type="text" id="latitude" placeholder="Latitude">
		<input  type="text" id="longitude" placeholder="Longitude">
		<button type="submit" id="search-form">Search</button>	
	</form>
	<p>
		<button id="push">hungry</button>
		<h1 class="eat" id="us"></h1>
	</p>
	<div id="images"</div>
		<img id="baconz" src="/image/bacon_strip.jpg" alt="bacon and eggs">
		<img id="pancakez" src="/image/pancake.jpg" alt="bacon and eggs">
		<img id="babez" src="/image/bacon.jpg" alt="bacon and eggs">
	</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVHykYeA_nKVY_sBUNZphArU-yEvT0684"></script>
<script>

$(document).ready(function() {
		$("#push").click(function(){
	    $("#baconz").animate({"bottom":"550px",});
	    $("#pancakez").animate({"bottom":"550px",},800);
	    $("#babez").animate({"bottom":"550px",},1500);
	    $("#us").append("<p>Eat Us We're Delicious!</p>").show(3000);
	   	
		
		})
});
		
	           	     
(function() {
	var updateWeatherContent = function(data, index) {
		
 		var content = "";
 		var icon = "http://openweathermap.org/img/w/" + data.weather[0].icon + ".png";
 		
	 	  content += '<p>' + "degrees:" + Math.round(data.temp.max) + '&deg;' + '/' 
	 	  +  Math.round(data.temp.min) + '&deg' + '</p>';
	 	  content += '<p><img src="' + icon + '"></p>';
	 	  content += '<p>' + data.weather[0].description + '</p>';
	 	  content += '<p>' + "Humidity: " + data.humidity + '</p>'; 
	 	  content += '<p>' + "Wind: " + data.speed + '</p>'; 
	 	  content += '<p>' + "Pressure: " + data.pressure + '</p>';
	      $('#day-' + (index + 1)).html(content);
	     
	}; 
		 
	$.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
	    APPID: "c37cfb1fc9efd588a79b2010ca0aa85c",
	    q:     "San Antonio, TX",
	    units: "imperial",
	    cnt:3
	}).done(function(data) {
		console.log(data);
	

		data.list.forEach(updateWeatherContent);
		
		
	   });

	        var mapOptions = {
	           
	            zoom: 16,
	            
	            center: {
	                lat:  29.4284595,
	                lng: -98.492433
	            },

	        	mapTypeId: google.maps.MapTypeId.HYBRID
	    	}

     
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);    
    	
    	function richardWeather () { 
	        var latitude = Number($("#latitude").val()); 
	        var longitude = Number($("#longitude").val());
	        var latlng = {lat: latitude,
	        			  lng: longitude}

	        var addressFinder = new google.maps.Geocoder();


	addressFinder.geocode({"location": latlng}, function(results,status){
    		if (status == google.maps.GeocoderStatus.OK) {
    			console.log(results);
    			map.setCenter(results[0].geometry.location);
    		
    			var marker = new google.maps.Marker({
        			"map": map,
        			"position":results[0].geometry.location,
        			animation: google.maps.Animation.DROP

				});
        		
        		var hotInfo = new google.maps.InfoWindow({
    			content: "Good Choice!"
    			
        		});
        		
        		marker.addListener('click', function() {
    			hotInfo.open(map, marker);
  				});

    		} else {
    		alert("Geocoding was not successful - STATUS: " + status);
    	  }
    });	 
 
	$.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
	    APPID: "c37cfb1fc9efd588a79b2010ca0aa85c",
	    lat: latitude,
	    lon: longitude,
	    units: "imperial",
	    cnt:3
	}).done(function(data) {	
		console.log(data);
		$('#city').html(data.city.name); 
		data.list.forEach(updateWeatherContent);

	});    

	}

	$("#search-form").click (function(e){
	  e.preventDefault();
	  richardWeather(); 
	});

  
})();
</script>
</body>
</html>

