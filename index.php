<!DOCTYPE HTML>
<html>
<head>
   


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="description" content="Get on Road">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <?php include("style.php"); ?>
	
	 <title>Get on Road - Index</title>
	
	<style>
	.google-maps {
        position: relative;
        padding-bottom: 75%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
    }
	</style>
		
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvavP7nNca08dK8ZnY8ZocqddOFDE2VqI&sensor=false&libraries=places"></script>
    
	<script type="text/javascript">
		
		var source, destination;
        var directionsDisplay;
        var directionsService = new google.maps.DirectionsService();
        google.maps.event.addDomListener(window, 'load', function () {
            new google.maps.places.SearchBox(document.getElementById('txtSource'));
            new google.maps.places.SearchBox(document.getElementById('txtDestination'));
            directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
        });

        function GetRoute() {
            var mumbai = new google.maps.LatLng(18.9750, 72.8258);
            var mapOptions = {
                zoom: 7,
                center: mumbai
            };
            map = new google.maps.Map(document.getElementById('dvMap'), mapOptions);
            directionsDisplay.setMap(map);
            directionsDisplay.setPanel(document.getElementById('dvPanel'));

            //*********DIRECTIONS AND ROUTE**********************//
            source = document.getElementById("txtSource").value;
            destination = document.getElementById("txtDestination").value;

            var request = {
                origin: source,
                destination: destination,
                travelMode: google.maps.TravelMode.DRIVING
            };
            directionsService.route(request, function (response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                }
            });

            //*********DISTANCE AND DURATION**********************//
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix({
                origins: [source],
                destinations: [destination],
                travelMode: google.maps.TravelMode.DRIVING,
                unitSystem: google.maps.UnitSystem.METRIC,
                avoidHighways: false,
                avoidTolls: false
            }, function (response, status) {
                if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
                    var distance = response.rows[0].elements[0].distance.text;
					
					var arr = distance.split(/\s+/);
					var dist = arr[0]; 
					var unit = arr[1]; 
					var rate = <?php echo get_title(rate,1); ?>;
					var pickup_charge = 100;
					
                    var vid = document.getElementById('v_id');
                    var vopt = vid.options[vid.selectedIndex].value;
                    
                    //alert(vopt);
                    
                    if(vopt==1)
                    {
                        var rate = <?php echo get_title(rate,1); ?>; 
                    }
                    else 
                    {
                        var rate = <?php echo get_title(rate,2); ?>;
                    }

					if(unit=="km")
					{
						var total_fare = Math.round(dist * rate) + pickup_charge;
						//alert(total_fare);
					}
					else
					{
						var convert = dist/1000 ;
						var total_fare = Math.round(dist * rate) + pickup_charge;
						//alert("meter");
					}
					//console.log(arr[1]);
                    var duration = response.rows[0].elements[0].duration.text;
                    var dvDistance = document.getElementById("dvDistance");
                    dvDistance.innerHTML = "";
                    dvDistance.innerHTML += "Distance: " + distance + "<br />";
                    dvDistance.innerHTML += "Moving:  " + rate + " PKR per kilometer <br />";
                    dvDistance.innerHTML += "Pick-up Surcharge: " + pickup_charge + " PKR <br />";
                    dvDistance.innerHTML += "Duration: " + duration + "<br />";
                    dvDistance.innerHTML += "<b style='color: black;font-size: 16px;'> Estimated Fare: " + total_fare + " PKR </b> ";
					var result = document.getElementById("dist").value = dist;
					var unit_bk = document.getElementById("unit").value = unit;
					var fare = document.getElementById("fare").value = total_fare;
					
					if(result==null)
					{
						document.getElementById("submit1").disabled = true;
					}
					else
					{
						document.getElementById("submit1").disabled = false;
					}

                } else {
                    alert("Unable to find the distance via road.");
                }
            });
        }
    </script>

	<script type="text/javascript">
		
		var source, destination;
        var directionsDisplay;
        var directionsService = new google.maps.DirectionsService();
        google.maps.event.addDomListener(window, 'load', function () {
            new google.maps.places.SearchBox(document.getElementById('txtSource2'));
            new google.maps.places.SearchBox(document.getElementById('txtDestination2'));
            directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
        });

        function GetRoute2() {
            var mumbai = new google.maps.LatLng(18.9750, 72.8258);
            var mapOptions = {
                zoom: 7,
                center: mumbai
            };
            map = new google.maps.Map(document.getElementById('dvMap2'), mapOptions);
            directionsDisplay.setMap(map);
            directionsDisplay.setPanel(document.getElementById('dvPanel2'));

            //*********DIRECTIONS AND ROUTE**********************//
            source = document.getElementById("txtSource2").value;
            destination = document.getElementById("txtDestination2").value;

            var request = {
                origin: source,
                destination: destination,
                travelMode: google.maps.TravelMode.DRIVING
            };
            directionsService.route(request, function (response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                }
            });

            //*********DISTANCE AND DURATION**********************//
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix({
                origins: [source],
                destinations: [destination],
                travelMode: google.maps.TravelMode.DRIVING,
                unitSystem: google.maps.UnitSystem.METRIC,
                avoidHighways: false,
                avoidTolls: false
            }, function (response, status) {
                if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
                    var distance = response.rows[0].elements[0].distance.text;
					
					var arr = distance.split(/\s+/);
					var dist = arr[0]; 
					var unit = arr[1]; 
					
					var pickup_charge = 100;
					
					var sel = document.getElementById('days');
					var opt = sel.options[sel.selectedIndex].value;
					
					var vid = document.getElementById('v_id');
					var vopt = vid.options[vid.selectedIndex].value;
					
					var day_surcharge = 1000;
					
					//alert(vopt);
					
					if(vopt==1)
					{
						var rate = <?php echo get_title(rate,1); ?>; 
					}
					else 
					{
						var rate = <?php echo get_title(rate,2); ?>;
					}
					
					
					if(unit=="km")
					{
						var total_fare2 = Math.round(dist * rate) + pickup_charge + Math.round(day_surcharge*opt) ;
						//alert(total_fare);
					}
					else
					{
						var convert = dist/1000 ;
						var total_fare2 = Math.round(dist * rate) + pickup_charge + Math.round(day_surcharge*opt);
						//alert("meter");
					}
					//console.log(arr[1]);
                    var duration = response.rows[0].elements[0].duration.text;
                    var dvDistance = document.getElementById("dvDistance2");
                    dvDistance.innerHTML = "";
                    dvDistance.innerHTML += "<br /> Distance: " + distance + "<br />";
                    dvDistance.innerHTML += "Moving:  " + rate + " PKR per kilometer <br />";
                    dvDistance.innerHTML += "Pick-up Surcharge: " + pickup_charge + " PKR <br />";
                    dvDistance.innerHTML += "Per-Day Surcharge: " + day_surcharge + " PKR <br />";
                    dvDistance.innerHTML += "Duration: " + duration + "<br />";
                    dvDistance.innerHTML += "<b style='color: black;font-size: 16px;'> Estimated Fare: " + total_fare2 + " PKR </b> ";
					var result = document.getElementById("dist2").value = dist;
					var unit_bk = document.getElementById("unit2").value = unit;
					var fare = document.getElementById("fare2").value = total_fare2;
					
					if(result==null)
					{
						document.getElementById("submit2").disabled = true;
					}
					else
					{
						document.getElementById("submit2").disabled = false;
					}

                } else {
                    alert("Unable to find the distance via road.");
                }
            });
        }
    </script>
	
	
	<script type="text/javascript">
		
		var source, destination;
        var directionsDisplay;
        var directionsService = new google.maps.DirectionsService();
        google.maps.event.addDomListener(window, 'load', function () {
            new google.maps.places.SearchBox(document.getElementById('txtSource3'));
            new google.maps.places.SearchBox(document.getElementById('txtDestination3'));
            directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
        });

        function GetRoute3() {
            var mumbai = new google.maps.LatLng(18.9750, 72.8258);
            var mapOptions = {
                zoom: 7,
                center: mumbai
            };
            map = new google.maps.Map(document.getElementById('dvMap3'), mapOptions);
            directionsDisplay.setMap(map);
            directionsDisplay.setPanel(document.getElementById('dvPanel3'));

            //*********DIRECTIONS AND ROUTE**********************//
            source = document.getElementById("txtSource3").value;
            destination = document.getElementById("txtDestination3").value;

            var request = {
                origin: source,
                destination: destination,
                travelMode: google.maps.TravelMode.DRIVING
            };
            directionsService.route(request, function (response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                }
            });

            //*********DISTANCE AND DURATION**********************//
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix({
                origins: [source],
                destinations: [destination],
                travelMode: google.maps.TravelMode.DRIVING,
                unitSystem: google.maps.UnitSystem.METRIC,
                avoidHighways: false,
                avoidTolls: false
            }, function (response, status) {
                if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
                    var distance = response.rows[0].elements[0].distance.text;
					
					var arr3 = distance.split(/\s+/);
					var dist3 = arr3[0]; 
					var unit3 = arr3[1]; 
					
					var pickup_charge = 100;
					
					var sel3 = document.getElementById('days3');
					var opt3 = sel3.options[sel3.selectedIndex].value;
					
					var vid3 = document.getElementById('v_id3');
					var vopt3 = vid3.options[vid3.selectedIndex].value;
					
					//alert(vopt3);
					
					if(vopt3==1)
					{
						var rate = <?php echo get_title(rate,1); ?>; 
					}
					else 
					{
						var rate = <?php echo get_title(rate,2); ?>;
					}
					
					//alert(rate);
					
					if(unit3=="km")
					{
						var total_fare3 = Math.round(dist3 * rate) + pickup_charge ;
						//alert(total_fare3);
						if(opt3==5)
						{
							var mon_fare = Math.round(total_fare3*22);
						}
						else
						{
							var mon_fare = Math.round(total_fare3*26);
						}
						
					}
					else
					{
						var convert = dist3/1000 ;
						var total_fare3 = Math.round(dist3 * rate) + pickup_charge ;
						if(opt3==5)
						{
							var mon_fare = Math.round(total_fare3*22);
						}
						else
						{
							var mon_fare = Math.round(total_fare3*26);
						}
					}
					//alert(mon_fare);
					//console.log(arr[1]);
                    var duration = response.rows[0].elements[0].duration.text;
                    var dvDistance = document.getElementById("dvDistance3");
                    dvDistance.innerHTML = "";
                    dvDistance.innerHTML += "<br /> Distance: " + distance + "<br />";
                    dvDistance.innerHTML += "Moving:  " + rate + " PKR per kilometer <br />";
                    dvDistance.innerHTML += "Duration: " + duration + "<br />";
                    dvDistance.innerHTML += "<b style='color: black;font-size: 16px;'> Estimated Monthly Fare: " + mon_fare + " PKR </b> ";
					var result = document.getElementById("dist3").value = dist3;
					var unit_bk = document.getElementById("unit3").value = unit3;
					var fare = document.getElementById("fare3").value = mon_fare;
					
					if(result==null)
					{
						document.getElementById("submit3").disabled = true;
					}
					else
					{
						document.getElementById("submit3").disabled = false;
					}

                } else {
                    alert("Unable to find the distance via road.");
                }
            });
        }
    </script>
	
	
	<script>

$(document).ready(function (e) {
$("#form1").on('submit',(function(e) {
e.preventDefault();
$('#response1').show();
$("#loader").show();
$.ajax({
url: "booking_save.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
$('#form1')[0].reset();
$("#response1").html(data);
}
});

}));
});


</script>

<script>

$(document).ready(function (e) {
$("#form2").on('submit',(function(e) {
e.preventDefault();
$('#response2').show();
$("#loader").show();
$.ajax({
url: "booking_save.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
$('#form2')[0].reset();
$("#response2").html(data);
}
});

}));
});


</script>

<script>

$(document).ready(function (e) {
$("#form3").on('submit',(function(e) {
e.preventDefault();
$('#response3').show();
$("#loader").show();
$.ajax({
url: "booking_save.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
$('#form3')[0].reset();
$("#response3").html(data);
}
});

}));
});


</script>

	
	    <script>
	    function initialize() {
 
	    
	    	if(!!navigator.geolocation) {
	    	
	    		var map;
	    	
		    	var mapOptions = {
		    		zoom: 15,
		    		mapTypeId: google.maps.MapTypeId.ROADMAP
		    	};
		    	
		    	map = new google.maps.Map(document.getElementById('google_canvas'), mapOptions);
	    	
	    		navigator.geolocation.getCurrentPosition(function(position) {
	    		
		    		var geolocate = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
		    		
					var cur_latitude = position.coords.latitude;
					var cur_longitude = position.coords.longitude;
					
					var lon = document.getElementById('lon').value = cur_longitude;
					var lat = document.getElementById('lat').value = cur_latitude;
					var lon2 = document.getElementById('lon2').value = cur_longitude;
					var lat2 = document.getElementById('lat2').value = cur_latitude;
					var lon3 = document.getElementById('lon3').value = cur_longitude;
					var lat3 = document.getElementById('lat3').value = cur_latitude;
					//alert(cur_langitude);
					
		    		var infowindow = new google.maps.InfoWindow({
						//pixelOffset: new google.maps.Size(200,0),
		    			map: map,
						position: geolocate,
						center: geolocate,
		    			content:
		    				'<h1>Your Current Location</h1>'
		    		});
					
					var marker = new google.maps.Marker({
					  position: geolocate,
					  center: geolocate,
					  map: map,
					  title: 'Latitude: ' + position.coords.latitude + '' +
		    				'Longitude: ' + position.coords.longitude + ''
					});
		    		
		    		map.setCenter(geolocate);
		    		
	    		});
	    		
	    	} else {
	    		document.getElementById('google_canvas').innerHTML = 'No Geolocation Support.';
	    	}
	    	
	    }
		google.maps.event.addDomListener(window, "load", initialize);
		
	    </script>
		
</head>
<body>

    
    <div class="global-wrap">
        
		<?php include("header.php"); ?>
        <!-- TOP AREA -->
		
        <div class="top-area show-onload">
            <div class="bg-holder full">
                <div class="bg-mask"></div>
                <div class="bg-parallax" style="background-image:url(img/196_365_2048x1365.jpg);"></div>
                <div class="bg-content">
				
				
				
				<div class="container">
            <div class="row row-wrap" data-gutter="60">
                <div class="col-md-12">
                        
						<button class="btn btn-success btn-lg hide" onclick="initialize();">Your Current Location</button>									
									<div id="google_canvas" style="width:100%; height:200px;"></div>
					
                </div>
               
            </div>
            
        </div>
		
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="search-tabs search-tabs-bg mt50" style="margin-top: 1px !important;">
                                    <div class="tabbable">
                                        <ul class="nav nav-tabs" id="myTab">
                                            <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-building-o"></i> <span >One Way Travel</span></a>
                                            </li>
                                            <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-home"></i> <span >Organization Trip</span></a>
                                            </li>
                                            <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-car"></i> <span >Monthly Pick & Drop</span></a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="tab-1">
											
															
                                                <h2>Search Pick-up and Drop-off Location</h2>
                                                <form method="post" id="form1">
												<div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                            <label>From </label>
                                                                            <input type="text" name="from_loc" id="txtSource" value="Blue Area, Islamabad, Islamabad Capital Territory, Pakistan" class="form-control" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                            <label>To</label>
                                                                            <input type="text" name="to_loc" id="txtDestination" value="Jinnah Avenue, Islamabad, Islamabad Capital Territory, Pakistan" class="form-control" required />
                                                                        </div>
                                                                    </div>
																	
																	<input type="hidden" name="dist" id="dist" value="" required />
																	<input type="hidden" name="unit" id="unit" value="" required />
																	<input type="hidden" name="bk_rate" value="<?php echo get_title(rate,1); ?>" required />
																	<input type="hidden" name="u_id" value="<?php echo $user_arr["u_id"]; ?>" required />
																	<input type="hidden" name="type" value="1" required />
																	<input type="hidden" name="fare" id="fare" value="" required />
																	<input type="hidden" name="lon" id="lon" value="" required />
																	<input type="hidden" name="lat" id="lat" value="" required />
                                                </div>
                                                 
												 <div class="row">
													 <div class="col-md-6">
                                                    <label>Select Vehicle </label>
													<select class="form-control" name="v_id" id="v_id" required>
													<option value="">--Select--</option>
													<?php
													$sql2v = "select * from vehicles where v_status =0 order by v_name";   
													$resultv = mysql_query($sql2v);
													mysql_select_db($database_dbconfig, $dbconfig);
													while($rowsv = mysql_fetch_assoc($resultv))
													{
													$v_name = $rowsv["v_name"];	
													$v_id = $rowsv["type"];	
													?>
													<option value="<?php echo $v_id; ?>"><?php echo $v_name; ?></option>
													<?php } ?>
													</select>
													</div>
													<div class="col-md-6">
													<label> &nbsp; </label>
                                                    <input type="button" class="btn btn-info btn-lg" value="Get Fare & Route" onclick="GetRoute()" />
													</div>
												</div>	
													<div class="form-group form-group-lg form-group-icon-left">
                                                        <div id="dvDistance"> </div>
													</div>
													<div class="row">
														<div class="col-md-12" id="dvMap" style="width: 100%;height: 300px">
														</div>
													</div>
                                                    <br>
                                                    <button class="btn btn-success btn-lg" id="submit1" type="submit" disabled >Book Your Ride Now </button>
                                                </form>
													<span id="response1"> </span>
                                            </div>
                                            
											<!------------------------------------------------------------>
											
											<div class="tab-pane fade" id="tab-3">
                                                <h2>Search Pick-up and Drop-off Location</h2>
                                                <form method="post" id="form2">
													
												<div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                            <label>From </label>
                                                                            <input type="text" name="from_loc" id="txtSource2" value="Blue Area, Islamabad, Islamabad Capital Territory, Pakistan" class="form-control" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                            <label>To</label>
                                                                            <input type="text" name="to_loc" id="txtDestination2" value="Jinnah Avenue, Islamabad, Islamabad Capital Territory, Pakistan" class="form-control" required />
                                                                        </div>
                                                                    </div>
																	
																	<input type="hidden" name="dist" id="dist2" value="" required />
																	<input type="hidden" name="unit" id="unit2" value="" required />
																	<input type="hidden" name="bk_rate" value="<?php echo get_title(rate,1); ?>" required />
																	<input type="hidden" name="u_id" value="<?php echo $user_arr["u_id"]; ?>" required />
																	<input type="hidden" name="type" value="2" required />
																	<input type="hidden" name="fare" id="fare2" value="" required />
																	<input type="hidden" name="lon" id="lon2" value="" required />
																	<input type="hidden" name="lat" id="lat2" value="" required />
                                                </div>
													
                                                    <div class="row">
													 <div class="col-md-6">
                                                    <label>Select Vehicle </label>
													<select class="form-control" name="v_id" id="v_id" required>
													<option value="">--Select--</option>
													<?php
													$sql2v = "select * from vehicles where v_status =0 order by v_name";   
													$resultv = mysql_query($sql2v);
													mysql_select_db($database_dbconfig, $dbconfig);
													while($rowsv = mysql_fetch_assoc($resultv))
													{
													$v_name = $rowsv["v_name"];	
													$v_id = $rowsv["type"];	
													?>
													<option value="<?php echo $v_id; ?>"><?php echo $v_name; ?></option>
													<?php } ?>
													</select>
													</div>
													<div class="col-md-6">
													<label> Days </label>
                                                    <select class="form-control" name="days" id="days" required>
													<option value="">--Select--</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													</select>
													</div>
												</div>	
													
													<div class="row">
														<div class="col-md-12">
														<label> &nbsp; </label>
														<input type="button" class="btn btn-info btn-lg" value="Get Fare & Route" onclick="GetRoute2()" />
														</div>
													</div>
													
													<div class="form-group form-group-lg form-group-icon-left">
                                                        <div id="dvDistance2"> </div>
													</div>
													<div class="row">
														<div class="col-md-12" id="dvMap2" style="width: 100%;height: 300px">
														</div>
													</div>
                                                    <br>
													
                                                    <button class="btn btn-primary btn-lg" id="submit2" type="submit" disabled>Book Your Ride</button>
													
                                                </form>
												<span id="response2"> </span>
                                            </div>
											
											<!------------------------------------------------>
											
                                            <div class="tab-pane fade" id="tab-4">
                                                <h2>Search Pick-up and Drop-off Location</h2>
                                                <form method="post" id="form3">
                                                    <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                            <label>From </label>
                                                                            <input type="text" name="from_loc" id="txtSource3" value="Blue Area, Islamabad, Islamabad Capital Territory, Pakistan" class="form-control" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                            <label>To</label>
                                                                            <input type="text" name="to_loc" id="txtDestination3" value="Jinnah Avenue, Islamabad, Islamabad Capital Territory, Pakistan" class="form-control" required />
                                                                        </div>
                                                                    </div>
																	
																	<input type="hidden" name="dist" id="dist3" value="" required />
																	<input type="hidden" name="unit" id="unit3" value="" required />
																	<input type="hidden" name="bk_rate" value="<?php echo get_title(rate,1); ?>" required />
																	<input type="hidden" name="u_id" value="<?php echo $user_arr["u_id"]; ?>" required />
																	<input type="hidden" name="type" value="3" required />
																	<input type="hidden" name="fare" id="fare3" value="" required />
																	<input type="hidden" name="lon" id="lon3" value="" required />
																	<input type="hidden" name="lat" id="lat3" value="" required />
                                                </div>
												
													
												
												<div class="row">
                                                           
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-clock-o input-icon input-icon-highlight"></i>
                                                                    <label>Pick-up Time</label>
                                                                    <input class="time-pick form-control" name="pk_time" value="12:00 AM" type="text" required />
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-clock-o input-icon input-icon-highlight"></i>
                                                                    <label>Drop-off Time</label>
                                                                    <input class="time-pick form-control" name="dr_time" value="12:00 AM" type="text" required />
                                                                </div>
                                                            </div>
                                                        </div>
												
												<div class="row">
													 <div class="col-md-6">
                                                    <label>Select Vehicle </label>
													<select class="form-control" name="v_id" id="v_id3" required>
													<option value="">--Select--</option>
													<?php
													$sql2v = "select * from vehicles where v_status =0 order by v_name";   
													$resultv = mysql_query($sql2v);
													mysql_select_db($database_dbconfig, $dbconfig);
													while($rowsv = mysql_fetch_assoc($resultv))
													{
													$v_name = $rowsv["v_name"];	
													$v_id = $rowsv["type"];	
													?>
													<option value="<?php echo $v_id; ?>"><?php echo $v_name; ?></option>
													<?php } ?>
													</select>
													</div>
													<div class="col-md-6">
													<label> Days per Week </label>
                                                    <select class="form-control" name="days" id="days3" required>
													<option value="">--Select--</option>
													<option value="5">5</option>
													<option value="6">6</option>
													</select>
													</div>
												</div>
												
												<div class="row">
														<div class="col-md-12">
														<label> &nbsp; </label>
														<input type="button" class="btn btn-info btn-lg" value="Get Fare & Route" onclick="GetRoute3()" />
														</div>
													</div>
													
													<div class="form-group form-group-lg form-group-icon-left">
                                                        <div id="dvDistance3"> </div>
													</div>
													<div class="row">
														<div class="col-md-12" id="dvMap3" style="width: 100%;height: 300px">
														</div>
													</div>
                                                    <br>
													
												    <button class="btn btn-success btn-lg" type="submit" id="submit3" disabled>Book Your Ride</button>
                                                </form>
													<span id="response3"> </span>
                                            </div>
                                             </div>
											 
											 
									
                                    </div>
										
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END TOP AREA  -->

        <div class="gap"></div>


        <div class="container">
            <div class="row row-wrap" data-gutter="60">
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header"><i class="fa fa-dollar box-icon-md round box-icon-black animate-icon-top-to-bottom"></i>
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title"><a class="text-darken" href="#">Best Price Guarantee</a></h5>
                            <p class="thumb-desc">We provide cheapest services to our customers</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header"><i class="fa fa-lock box-icon-md round box-icon-black animate-icon-top-to-bottom"></i>
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title"><a class="text-darken" href="#">Trust & Safety</a></h5>
                            <p class="thumb-desc">We can assure safety of our customers by giving life insurance to them</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header"><i class="fa fa-thumbs-o-up box-icon-md round box-icon-black animate-icon-top-to-bottom"></i>
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title"><a class="text-darken" href="#">Best Travel Agent</a></h5>
                            <p class="thumb-desc">Get on Road is one of the best travel service providers in Pakistan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>
        </div>
        <div class="bg-holder">
            <div class="bg-mask"></div>
            <div class="bg-parallax" style="background-image:url(img/hotel_the_cliff_bay_spa_suite_2048x1310.jpg);"></div>
            <div class="bg-content">
                <div class="container">
                    <div class="gap gap-big text-center text-white">
                        <h2 class="text-uc mb20">Our Head Office</h2>
                        <ul class="icon-list list-inline-block mb0 last-minute-rating">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <h5 class="last-minute-title">Blue Area - Islamabad</h5>
                        <p class="last-minute-date">Mon - Fri</p>
                        <p class="mb20"><b>9:00 am </b> -- <b>5:00 pm</b></p>
					</div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="gap"></div>
            <h2 class="text-center">Top Cities</h2>
            <div class="gap">
                <div class="row row-wrap">
                    <div class="col-md-3">
                        <div class="thumb">
                            <header class="thumb-header">
                                <a class="hover-img curved" href="#">
                                    <img src="img/the_journey_home_400x300.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                                </a>
                            </header>
                            <div class="thumb-caption">
                                <h4 class="thumb-title">Islamabad</h4>
                                <p class="thumb-desc">Get on road delivers its services in Islamabad</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumb">
                            <header class="thumb-header">
                                <a class="hover-img curved" href="#">
                                    <img src="img/sunny_wood_300x300.jpg" alt="Image Alternative text" title="Upper Lake in New York Central Park" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                                </a>
                            </header>
                            <div class="thumb-caption">
                                <h4 class="thumb-title">Multan</h4>
                                <p class="thumb-desc">Get on road delivers its services in Multan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumb">
                            <header class="thumb-header">
                                <a class="hover-img curved" href="#">
                                    <img src="img/people_on_the_beach_800x600.jpg" alt="Image Alternative text" title="people on the beach" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                                </a>
                            </header>
                            <div class="thumb-caption">
                                <h4 class="thumb-title">Karachi</h4>
                                <p class="thumb-desc">Get on road delivers its services in Karachi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumb">
                            <header class="thumb-header">
                                <a class="hover-img curved" href="#">
                                    <img src="img/end_of_the_day_300x300.jpg" alt="Image Alternative text" title="lack of blue depresses me" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                                </a>
                            </header>
                            <div class="thumb-caption">
                                <h4 class="thumb-title">Lahore</h4>
                                <p class="thumb-desc">Get on road delivers its services in Lahore</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

		<?php include("footer.php"); ?>
		
		
		 
    </div>
</body>
</html>



