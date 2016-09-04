// $(document).ready(function () {
//    googleMap.initMap();
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

        var markers = [];
        $coordinates = getCoordinates(map);
        //var neighborhoods = [
        //     Main
            //{lat: coordinates['latitude'], lng: coordinates['longitude'], title: coordinates['title'], icon: 'map-pin.png'},
        //];
        //addMarkerWithTimeout(neighborhoods[i], i * 150);


        // Enable scroll zoom after drag on map
        map.addListener('drag', function() {
            map.setOptions({
                scrollwheel: true
            });
        });

        // Enable scroll zoom after drag on map
        map.addListener('drag', function() {
            map.setOptions({
                scrollwheel: true
            });
        });

        // Disable scroll zoom when mouse leave map
        map.addListener('mouseout', function() {
            map.setOptions({
                scrollwheel: false
            });
        });

        function getCoordinates(marker){
            $.ajax({
                type: 'POST',
                url: '/getlocations',
                dataType: 'json',
                timeout: 3000,
                headers: {
                    "_token": "{{ csrf_token() }}",
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                //data: {
                //    title: $(this).val(),
                //},
                success: function (data) {
                    var geocoder = new google.maps.Geocoder;
                    for (var key in data) {
                        if (data.hasOwnProperty(key)) {
                            if (data[key]['lat'] != 'undefined' && data[key]['lng'] != 'undefined' && data[key]['description'] != 'undefined'){
                                var infowindow = new google.maps.InfoWindow({
                                    content: data[key]['description']
                                });
								marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(data[key]['lat'],data[key]['lng']),
                                    map: map
                                });
                                marker.addListener('click', function() {
                                    infowindow.open(map, marker);
                                });
                            }
                        }
                    }

                    //    marker = new google.maps.Marker({
                    //    // The below line is equivalent to writing:
                    //    // position: new google.maps.LatLng(-34.397, 150.644)
                    //    position: new google.maps.LatLng(-34.397, 150.644),
                    //    map: map
                    //});

                    //$.each(data.test, function(index, value) {
                    //    markers.push(new google.maps.Marker({
                    //        position: new google.maps.LatLng(value.lat, value.lon),
                    //        map: map,
                    //        title: 'title',
                    //        animation: google.maps.Animation.DROP
                    //    }));
                    //
                    //    $coordinates = getCoordinates();
                    //});
                    //if (data.alt !== 'undefined') {
                    //    alert('kaut kas saturigs');
                    //}
                },
                error: function ()
                {
                    alert('what tf');
                }
            });
        }
    },
};

