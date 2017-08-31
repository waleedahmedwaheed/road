<?php
include_once('conn/db.php');
include_once('functions.php');


$lon = $_GET["lon"];
$lat = $_GET["lat"];
$u_id = $_GET["u_id"];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>User Location</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
  <button class="btn btn-success btn-lg"><h3><a href="adminpanel/build/bookings.php">Go Back</a></h3></button>
    <div id="map"></div>
    <script>

      function initMap() {
        var myLatLng = {lat: <?php echo $lat; ?>, lng: <?php echo $lon; ?>};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: '<?php echo get_title(username,$u_id); ?>'
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvavP7nNca08dK8ZnY8ZocqddOFDE2VqI&callback=initMap">
    </script>
  </body>
</html>