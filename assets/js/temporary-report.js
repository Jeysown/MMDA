var markers = [];

var map = new google.maps.Map(document.getElementById('map'), {
zoom: 9,
center: new google.maps.LatLng(14.8302664,121.1126421),
mapTypeId: google.maps.MapTypeId.ROADMAP
});

var locations_all = All;


var infowindow = new google.maps.InfoWindow();
var marker, i;


for (i = 0; i < locations_all.length; i++) {
  marker = new google.maps.Marker({
    icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png',
    position: new google.maps.LatLng(locations_all[i][3], locations_all[i][4]),
    map: map
  });

  google.maps.event.addListener(marker, 'click', (function(marker, i) {
    return function() {
      infowindow.setContent("<b>Date: "+locations_all[i][1]+"<br>Time: "+locations_all[i][2]+"<br>Status: "+locations_all[i][0]+"<br>Latitude: "+locations_all[i][3]+"<br>Longitude: "+locations_all[i][4]+"<br>Message: "+locations_all[i][5]+"<br></b>");
      infowindow.open(map, marker);
    }
  })(marker, i));
    markers.push(marker);

}
