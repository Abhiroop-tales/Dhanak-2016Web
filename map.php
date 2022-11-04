<!-- From map.php -->
<section id="mapsection" class="cd-section">
  <!-- <div class="bcg"> -->
    <div id="map"></div>
  <!-- </div> -->
</section>


<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng(8.6249838,77.0329445);
  var mapOptions = {
                      center: myCenter,
                      zoom:14,
                      mapTypeId: google.maps.MapTypeId.ROADMAP
                   };
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
    icon: "img/dhanak.ico",
    animation: google.maps.Animation.BOUNCE
  });
  marker.setMap(map);
  var infowindow = new google.maps.InfoWindow({
    content: "Awesomeness Here!"
  });
  infowindow.open(map,marker);
}
</script>

<!-- Google Maps JS API with my API key -->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBaE_g3dFQ8kfyw92lDaPi240fSSG4SPUw&callback=myMap" async defer></script>

<!-- ends map.php -->
