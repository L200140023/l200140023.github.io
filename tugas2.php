<!DOCTYPE  html>
<html>
<head>
<SCRIPT src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDt_RuCG8oPCT1R6LneSu4b8kNyn9kP0W0 "></SCRIPT>
 
<style type="text/css">
              #mapDiv { 
width: 600px; 
height: 400px;
  }
</style>
<SCRIPT>
var  map;
function initMap() {
var mapOptions = {
center: new google.maps.LatLng(-7.9078, 110.8252),
zoom: 18,
      mapTypeId: google.maps.MapTypeId.ROADMAP
};
 var mapElement = document.getElementById('mapDiv');
 map = new google.maps.Map(mapElement, mapOptions);
 
}
google.maps.event.addDomListener(window, 'load', initMap);
</SCRIPT>
<SCRIPT>
if (navigator.geolocation) {
navigator.geolocation.getCurrentPosition(
  function(position) {
 
          console.log(position);
          var lat = position.coords.latitude;
          var lng = position.coords.longitude;
          var devCenter =  new google.maps.LatLng(lat, lng);
          map.setCenter(devCenter);
          map.setZoom(18);
                                    
 console.log(latitude + " -- " + longitude);
 
       });
    }
</SCRIPT>
</head>
<body>

        <b>Merubah tipe PETA</b><br/>
        <input id="btnRoad" type="button" value="RoadMap">
		<input id="btnTerrain" type="button" value="TERRAIN">
        <input id="btnSat" type="button" value="SATELLITE">
		<input id="btnHybrid" type="button" value="HYBRID">
		<div id="mapDiv"></div>
		
<script>
document.getElementById('btnRoad').addEventListener('click', function(){
               map.setMapTypeId(google.maps.MapTypeId.ROADMAP); 
});
document.getElementById('btnSat').addEventListener('click', function(){
                      map.setMapTypeId(google.maps.MapTypeId.SATELLITE);
});
document.getElementById('btnHybrid').addEventListener('click', function(){
               map.setMapTypeId(google.maps.MapTypeId.HYBRID);
});
document.getElementById('btnTerrain').addEventListener('click', function(){
                      map.setMapTypeId(google.maps.MapTypeId.TERRAIN);
});
</script>
</body>
</html>
