// $(document).ready(function () {
//    googleMap.initialize();
// });

var googleMap = {
    initialize: function () {
        var mapDiv = document.getElementById('map');
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 8,
            scrollwheel: false,
            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(56.9834821, 24.4387936),
        };
        var map = new google.maps.Map(mapDiv, mapOptions);
        var geocoder = new google.maps.Geocoder;

        var marker;

        if ($('#lat').val() != '' && $('#lng').val() != ''){
            marker = new google.maps.Marker({
                // The below line is equivalent to writing:
                // position: new google.maps.LatLng(-34.397, 150.644)
                position: new google.maps.LatLng($('#lat').val(), $('#lng').val()),
                map: map
            });            
        }

        function geocodeLatLng(geocoder, map, $lat, $lng) {
            var latlng = {lat: $lat, lng: $lng};
            geocoder.geocode({'location': latlng}, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                        // map.setZoom(11);
                        // var marker = new google.maps.Marker({
                        //     position: latlng,
                        //     map: map
                        // });
                        // infowindow.setContent(results[1].formatted_address);
                        // infowindow.open(map, marker);
                    } else {
                        window.alert('No results found');
                    }
                } else {
                    window.alert('Geocoder failed due to: ' + status);
                }
            });
        }


        function placeMarker(location) {
            if ( marker ) {
                marker.setPosition(location);
            } else {
                marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
            }
        }


        google.maps.event.addListener(map, 'click', function(event) {
            $lat = event.latLng.lat();
            $lng = event.latLng.lng();
            $('#lat').val($lat);
            $('#lng').val($lng);
            // geocodeLatLng(geocoder, map, $lat, $lng);

            placeMarker(event.latLng);
        });

    }
};

