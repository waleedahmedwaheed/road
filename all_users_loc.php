<?php
include_once('conn/db.php');
include_once('functions.php');



?>
<html>
	<head>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvavP7nNca08dK8ZnY8ZocqddOFDE2VqI&libraries=drawing&sensor=false"></script>
		
		<style type="text/css">
			#mapcan{
				height:100%;
				
			}
		</style>
		<script type="text/javascript" >
		//fires when all the html content is loaded properly
		google.maps.event.addDomListener(window, 'load', function(){
		
			//i have created a array of lat and lon to demo
			oblatlan = [
			
			 <?php
	$qry = "SELECT * FROM booking where bk_status=0 and type=1";
	mysql_select_db($database_dbconfig, $dbconfig);
	$result = mysql_query($qry, $dbconfig) or die(mysql_error());
	while($rows = mysql_fetch_assoc($result))
	{
		$u_id = $rows["u_id"];
		$lon = $rows["lon"];
		$lat = $rows["lat"];
	?>
				[<?php echo $lat; ?>,<?php echo $lon; ?>],
	<?php } ?>			
			];
		
			/*
			  when there is more then one location is marked we need to find the center of the map unless
			  markes will be out of the visible area. to do that we first create an empty bound 
			  then we will extend it marker by marker and finally calling map.fitBounds() will set the viewport to contian
			  the bounds
			*/
			var bounds = new google.maps.LatLngBounds();
			var mapoptions = { zoom:11 }; //map options 
			var map = new google.maps.Map(document.getElementById('mapcan'), mapoptions);
			
			map.markers = []; 
			for(var i=0;i<oblatlan.length; i++)
			{
				
				var poiLatLang = new google.maps.LatLng( oblatlan[i][0], oblatlan[i][1]);
				//creating a new node
				var marker = new google.maps.Marker({
					position: poiLatLang ,
					map: map
				});
				//Extends this bounds to contain the given point.
				bounds.extend(marker.position);
				map.markers.push(marker);
			}
			
			//Sets the viewport to contain the given bounds.
			map.fitBounds(bounds);

		});
		</script>
		<title> All Users Location </title>
	</head>
	<body>
	<button class="btn btn-success btn-lg"><h3><a href="adminpanel/build/index.php">Go Back</a></h3></button>
		<div id="mapcan"></div>
	</body>
</html>