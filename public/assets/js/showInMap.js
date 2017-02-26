var kurzemeLocation = {lat: 56.8635184, lng: 21.8856784};
var latgaleLocation = {lat: 56.4191032, lng: 26.4756745};
var zemgaleLocation = {lat: 56.4943488, lng: 24.110379};
var vidzemeLocation = {lat: 57.209073, lng: 25.9568126};
var rigaLocation = {lat: 56.9715833, lng: 23.9901725};

var googleMap = {
	initMap: function ()
	{
		var mapDiv = document.getElementById('showInMap');


		if (mapDiv !== null)
		{

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

			var input = /** @type {!HTMLInputElement} */(
					document.getElementById('pac-input'));


			marker = new google.maps.Marker({
				position: new google.maps.LatLng($('#lat').val(), $('#lng').val()),
				map: map
			});

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

			var infowindow = new google.maps.InfoWindow();

			google.maps.event.addListener(marker, 'click', (function (marker)
			{
				return function ()
				{
					var template = '<div style="width:200px;">' +
							$('#regionInfo').text();
					infowindow.setContent(template);
					infowindow.open(map, marker);
				}
			})(marker));

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
		}
	}
};

