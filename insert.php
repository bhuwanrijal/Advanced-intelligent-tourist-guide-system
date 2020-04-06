<!DOCTYPE html>
<html>
  <head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<script src="geolocation-marker.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css" rel="stylesheet" type="text/css" />
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
         * {
  box-sizing: border-box;
}
        body{
            background-color: black;
            margin:0px;
            padding:0px;
            border-top-left-radius: 5px;
        }
        .container{
            margin-left: 80px;
        }
        img.image{
         -webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
        }
        img.image:hover{
            -webkit-transform: scale(1.3);
	transform: scale(1.4);
        }
    </style>
  </head>
  <body>
    <!--The div element for the map -->
    <div id="map"></div>
<!--
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
   Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGNUW5a8iPwxyRu2Jakd88oXm9ZhIcJSQ&callback=initMap">
    </script>
  
 
    
    <?php
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con, 'tourist');    
      if (isset($_POST['submit'])){  
          $service_needed = $_POST['framework'];
          $val= sizeof($service_needed);
    $i = 0;
foreach($service_needed as $selected){
    ${'var'.$i} = $selected;
    $i++;
    }
for($i=0;$i<$val;$i++)
{
  ${'data'.$i}="SELECT * FROM `places` WHERE name='${'var'.$i}'"; 
  ${'result'.$i}=mysqli_query($con, ${'data'.$i});
   while(${'res'.$i}= mysqli_fetch_array(${'result'.$i})){
       ?>
    <div class="container">
         <p style="float: left;font-size: 17px;overflow: hidden;padding:0px;padding-bottom: 20px;border-radius:5px;background-color: white;color:black; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em;">
             <img class="image" src="<?php  echo ${'res'.$i}['image'];?>" height="250"style="width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;
                  "><?php  echo ${'res'.$i}['name'];?></p>
            
      </div>
    <?php
   }
}
}
?>
<script>
function initMap() {
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        zoom:5,
        center:{lat:-25.344,lng:131.036}
    };
                    
    // Display a map on the web page
   var map = new google.maps.Map(document.getElementById('map'),mapOptions);
    var markers = [
        <?php if (isset($_POST['submit'])){  
          $service_needed = $_POST['framework'];
          $val= sizeof($service_needed);
    $i = 0;
     foreach($service_needed as $selected){
    ${'var'.$i} = $selected;
    $i++;
    }
for($i=0;$i<=$val;$i++)
{
  ${'data'.$i}="SELECT * FROM `places` WHERE name='${'var'.$i}'"; 
  ${'result'.$i}=mysqli_query($con, ${'data'.$i});
   while(${'res'.$i}= mysqli_fetch_array(${'result'.$i})){
        echo '["'.${'res'.$i}['name'].'", '.${'res'.$i}['latitude'].', '.${'res'.$i}['longitude'].'],';
   }
 
           }
                        }?>
                    
    ];
     var infoWindowContent = [
        <?php if (isset($_POST['submit'])){  
          $service_needed = $_POST['framework'];
          $val= sizeof($service_needed);
    $i = 0;
     foreach($service_needed as $selected){
    ${'var'.$i} = $selected;
    $i++;
    }
for($i=0;$i<$val;$i++)
{
${'data'.$i}="SELECT * FROM `places` WHERE name='${'var'.$i}'"; 
  ${'result'.$i}=mysqli_query($con, ${'data'.$i});
   while(${'res'.$i}= mysqli_fetch_array(${'result'.$i})){ ?>
                ['<div class="info_content">' +
                '<h3><?php echo ${'res'.$i}['name']; ?></h3>' +
                '<img src="<?php  echo ${'res'.$i}['image'];?>" height="80" width="150"<br>'+
                '<p>Description:- &nbsp; <?php echo ${'res'.$i}['des']; ?></p>' + 
                '<p>Area:- &nbsp;<?php echo ${'res'.$i}['area']; ?></p>' +
                '<p>Address:- &nbsp;<?php echo ${'res'.$i}['Address']; ?></p>' +'</div>'],
        <?php }
}
        }
        ?>
    ];
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Place each marker on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            animation:google.maps.Animation.BOUNCE,
            title: markers[i][0]
        });
        
        
        // Add info window to marker    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Center the map to fit all markers on the screen
        map.fitBounds(bounds);
    }

    // Set zoom level
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(8);
        google.maps.event.removeListener(boundsListener);
    });
      if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
             
            infoWindow.setPosition(pos);
            infoWindow.setContent('Your current Location.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }   
}
function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
// Load initialize function
google.maps.event.addDomListener(window, 'load', initMap);
</script>
  </body>
</html>

