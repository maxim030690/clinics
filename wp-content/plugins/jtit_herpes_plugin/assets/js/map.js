var markers = [];
// The array where to store the markers

/*var locations = [
        ['New York', 40.714364, -74.005972, 'http://www.google.com/intl/en_us/mapfiles/ms/micons/green-dot.png']
    ];*/

function initialize() {
	
	// Create an array of styles.
  var styles = [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#405978"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#2074a8"},{"visibility":"on"}]}];

  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});

    var mapOptions = {
        center: new google.maps.LatLng(locations[0][1], locations[0][2]),
		zoom: 10,
		 zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT,
            },
				disableDoubleClickZoom: true,
				mapTypeControl: true,
				mapTypeControlOptions: {
				style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            },
				scaleControl: true,
				scrollwheel: false,
				panControl: true,
				streetViewControl: true,
				draggable : true,
				overviewMapControl: true,
				overviewMapControlOptions: {
					opened: false,
            },
			mapTypeId: [google.maps.MapTypeId.ROADMAP, 'map_style']
        
    }
    var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
	
	
			  //Associate the styled map with the MapTypeId and set it to display.
			  map.mapTypes.set('map_style', styledMap);
			  map.setMapTypeId('map_style');

    var marker, i;
    var infowindow = new google.maps.InfoWindow();


    google.maps.event.addListener(map, 'click', function() {
        infowindow.close();
		this.setOptions({scrollwheel:true});
    });


    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map,
            icon: locations[i][3]
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));

        // Push the marker to the 'markers' array
        markers.push(marker);
    }

}


// The function to trigger the marker click, 'id' is the reference index to the 'markers' array.
function showOnMap(id){
    google.maps.event.trigger(markers[id], 'click');
}