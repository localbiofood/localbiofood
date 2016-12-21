var kurzemeLocation = {lat: 56.8635184, lng: 21.8856784};
var latgaleLocation = {lat: 56.4191032, lng: 26.4756745};
var zemgaleLocation = {lat: 56.4943488, lng: 24.110379};
var vidzemeLocation = {lat: 57.209073, lng: 25.9568126};
var rigaLocation = {lat: 56.9715833, lng: 23.9901725};

var googleMapAdd = {
	initMap: function ()
	{
		var mapDiv = document.getElementById('map');

		var mapstyled8_snl4g_0 = [
			{
				"featureType": "water",
				"elementType": "geometry",
				"stylers": [
					{"visibility": "on"},
					{"color": "#cde0fd"}
				]
			},
			{
				"featureType": "landscape",
				"elementType": "geometry",
				"stylers": [
					{"visibility": "on"},
					{"color": "#e8e7e3"}
				]
			},
			{
				"featureType": "road.highway",
				"elementType": "geometry",
				"stylers": [
					{"visibility": "on"},
					{"color": "#bababa"}
				]
			},
			{
				"featureType": "landscape.natural",
				"elementType": "geometry",
				"stylers": [
					{"color": "#f8f8f6"}
				]
			},
			{
				"featureType": "poi",
				"elementType": "geometry",
				"stylers": [
					{"visibility": "off"}
				]
			},
			{
				"featureType": "road.highway",
				"elementType": "labels",
				"stylers": [
					{"lightness": 19},
					{"saturation": -100}
				]
			},
			{
				"featureType": "transit.station",
				"stylers": [
					{"visibility": "off"}
				]
			}
		];
		var mapOptions = {
			// How zoomed in you want the map to start at (always required)
			zoom: 8,
			scrollwheel: false,
			// The latitude and longitude to center the map (always required)
			center: new google.maps.LatLng(56.9834821, 24.4387936),
			styles: mapstyled8_snl4g_0,
		};
		window.map = new google.maps.Map(mapDiv, mapOptions);
		var geocoder = new google.maps.Geocoder;

		var input = /** @type {!HTMLInputElement} */(
				document.getElementById('pac-input'));

		var autocomplete = new google.maps.places.Autocomplete(input);
		autocomplete.bindTo('bounds', window.map);

		var infowindow = new google.maps.InfoWindow();

		var marker = new google.maps.Marker({
			map: map,
			anchorPoint: new google.maps.Point(0, -29)
		});

		autocomplete.addListener('place_changed', function() {
			infowindow.close();
			marker.setVisible(true);
			var place = autocomplete.getPlace();
			if (!place.geometry) {
				// User entered the name of a Place that was not suggested and
				// pressed the Enter key, or the Place Details request failed.
				window.alert("No details available for input: '" + place.name + "'");
				return;
			}

			// If the place has a geometry, then present it on a map.
			if (place.geometry.viewport) {
				map.fitBounds(place.geometry.viewport);
			} else {
				map.setCenter(place.geometry.location);
				map.setZoom(17);  // Why 17? Because it looks good.
			}
			marker.setIcon(/** @type {google.maps.Icon} */({
				// url: place.icon,
				url: 'https:\/\/livedemo00.template-help.com\/joomla_55599\/images\/marker.png',
				iconwidth: "",
				iconheight: "",
				iconshadow: "",
				iconshadowwidth: "",
				iconshadowheight: "",
				iconanchorx: "",
				iconanchory: "",
				iconimagemap: "13,0,15,1,16,2,17,3,18,4,18,5,19,6,19,7,19,8,19,9,19,10,19,11,19,12,19,13,18,14,18,15,17,16,16,17,15,18,14,19,14,20,13,21,13,22,12,23,12,24,12,25,12,26,11,27,11,28,11,29,11,30,11,31,11,32,11,33,8,33,8,32,8,31,8,30,8,29,8,28,8,27,8,26,7,25,7,24,7,23,6,22,6,21,5,20,5,19,4,18,3,17,2,16,1,15,1,14,0,13,0,12,0,11,0,10,0,9,0,8,0,7,0,6,1,5,1,4,2,3,3,2,4,1,6,0,13,0",

			}));
			marker.setPosition(place.geometry.location);
			marker.setVisible(true);

			$('#lat').val(marker.getPosition().lat());
			$('#lng').val(marker.getPosition().lng());
			// setupClickListener('changetype-address', ['address']);
			// setupClickListener('Address', ['address']);

			var address = '';
			if (place.address_components) {
				address = [
					(place.address_components[0] && place.address_components[0].short_name || ''),
					(place.address_components[1] && place.address_components[1].short_name || ''),
					(place.address_components[2] && place.address_components[2].short_name || '')
				].join(' ');
			}

			infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
			infowindow.open(map, marker);
		});

		var input = /** @type {!HTMLInputElement} */(
				document.getElementById('address'));


		// if ($('#lat').val() != '' && $('#lng').val() != '')
		// {
		// 	marker = new google.maps.Marker({
		// 		// The below line is equivalent to writing:
		// 		// position: new google.maps.LatLng(-34.397, 150.644)
		// 		position: new google.maps.LatLng($('#lat').val(), $('#lng').val()),
		// 		map: window.map
		// 	});
		// }

		function geocodeLatLng(geocoder, map, $lat, $lng)
		{
			var latlng = {lat: $lat, lng: $lng};
			geocoder.geocode({'location': latlng}, function (results, status)
			{
				if (status === google.maps.GeocoderStatus.OK)
				{
					if (results[1])
					{
						// map.setZoom(11);
						// var marker = new google.maps.Marker({
						//     position: latlng,
						//     map: map
						// });
						// infowindow.setContent(results[1].formatted_address);
						// infowindow.open(map, marker);
					}
					else
					{
						window.alert('No results found');
					}
				}
				else
				{
					window.alert('Geocoder failed due to: ' + status);
				}
			});
		}


		function placeMarker(location)
		{
			if (marker)
			{
				marker.setPosition(location);
			}
			else
			{
				marker = new google.maps.Marker({
					position: location,
					map: map
				});
			}
		}


		google.maps.event.addListener(map, 'click', function (event)
		{
			// $lat = event.latLng.lat();
			// $lng = event.latLng.lng();
			// $('#lat').val($lat);
			// $('#lng').val($lng);
			// // geocodeLatLng(geocoder, map, $lat, $lng);
			//
			// placeMarker(event.latLng);
		});
	},

	zoomRegion: function (region)
	{
		if (typeof closeUp === 'undefined')
		{
			closeUp = 8;
		}

		switch (region)
		{
			case 'Kurzeme':
				googleMap.setActiveMenuItem($('#menu_kurzeme'));
				window.map.setZoom(closeUp);
				window.map.panTo(kurzemeLocation);
				break;
			case 'Latgale':
				googleMap.setActiveMenuItem($('#menu_latgale'));
				window.map.panTo(latgaleLocation);
				window.map.setZoom(closeUp);
				break;
			case 'Riga':
				googleMap.setActiveMenuItem($('#menu_riga'));
				window.map.panTo(rigaLocation);
				window.map.setZoom(closeUp);
				break;
			case 'Vidzeme':
				googleMap.setActiveMenuItem($('#menu_vidzeme'));
				window.map.panTo(vidzemeLocation);
				window.map.setZoom(closeUp);
				break;
			case 'Zemgale':
				googleMap.setActiveMenuItem($('#menu_zemgale'));
				window.map.panTo(zemgaleLocation);
				window.map.setZoom(closeUp);
		}
	}
};

