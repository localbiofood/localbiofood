var kurzemeLocation = {lat: 56.8635184, lng:21.8856784};
var latgaleLocation = {lat: 56.4191032, lng:26.4756745};
var zemgaleLocation = {lat: 56.4943488, lng:24.110379};
var vidzemeLocation = {lat: 57.209073, lng:25.9568126};
var rigaLocation = {lat: 56.9715833, lng:23.9901725};


var googleMap = {
	initMap: function ()
	{
		var zoom = 7;
		var map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: 56.949649, lng: 24.105186},
			zoom: zoom,
			scrollwheel: false,
			navigationControl: false,
			panControl: false,
			// maxZoom: zoom,
			minZoom: zoom,
			mapTypeControl: false,
			scaleControl: false,
			draggable: false,
			zIndex:62,
			disableDefaultUI: true
		});
		var ctaLayer = {};
		googleMap.setLatviaOverlay(map);
		googleMap.setRegionListeners(map);
		googleMap.timetableCloseUp(map)
		map.setZoom(3);

	},

	setLatviaOverlay: function(map)
	{
		ctaLayer = new google.maps.KmlLayer({
			url: 'https://dl.dropboxusercontent.com/u/46566612/LVA_adm11.kml'+"?rev="+Date.now(),
			map:map,
			zIndex:80
		});
		ctaLayer.setMap(map);

		ctaLayer.addListener('click', function(kmlEvent) {
			var text = kmlEvent.featureData.name;
			googleMap.closeUp(text, map);
		});

	},

	setRegionListeners : function(map)
	{
		var closeUp = 9;
		$("#menu_kurzeme").click(function(){
			googleMap.setActiveMenuItem(this);
			map.panTo(kurzemeLocation);
			map.setZoom(closeUp);
		});
		$("#menu_latvia").click(function(){
			googleMap.setActiveMenuItem(this);
			map.panTo(rigaLocation);
			map.setZoom(7);
		});
		$("#menu_riga").click(function(){
			googleMap.setActiveMenuItem(this);
			map.panTo(rigaLocation);
			map.setZoom(closeUp);
		});
		$("#menu_vidzeme").click(function(){
			googleMap.setActiveMenuItem(this);
			map.panTo(vidzemeLocation);
			map.setZoom(closeUp);
		});
		$("#menu_zemgale").click(function(){
			googleMap.setActiveMenuItem(this);
			map.panTo(zemgaleLocation);
			map.setZoom(closeUp);
		});
		$("#menu_latgale").click(function(){
			googleMap.setActiveMenuItem(this);
			map.panTo(latgaleLocation);
			map.setZoom(closeUp);
		});
	},

	setActiveMenuItem: function($item)
	{
		$('.active').removeClass('active');
		$($item).closest('li').addClass('active');
	},

	closeUp: function($region, map, closeUp)
	{

		if (typeof closeUp === 'undefined')
		{
			closeUp = 8;
		}

		switch ($region){
			case 'Kurzeme':
				googleMap.setActiveMenuItem($('#menu_kurzeme'));
				map.setZoom(closeUp);
				map.panTo(kurzemeLocation);
				break;
			case 'Latgale':
				googleMap.setActiveMenuItem($('#menu_latgale'));
				map.panTo(latgaleLocation);
				map.setZoom(closeUp);
				break;
			case 'Riga':
				googleMap.setActiveMenuItem($('#menu_riga'));
				map.panTo(rigaLocation);
				map.setZoom(closeUp);
				break;
			case 'Vidzeme':
				googleMap.setActiveMenuItem($('#menu_vidzeme'));
				map.panTo(vidzemeLocation);
				map.setZoom(closeUp);
				break;
			case 'Zemgale':
				googleMap.setActiveMenuItem($('#menu_zemgale'));
				map.panTo(zemgaleLocation);
				map.setZoom(closeUp	);
		}
	},

	timetableCloseUp: function(map)
	{
		$('#region_dropdown').change(function(){
			ctaLayer.setMap(null);

			ctaLayer = new google.maps.KmlLayer({
				url: 'https://dl.dropboxusercontent.com/u/46566612/LVA_adm11-onlyBoarders.kml'+"?rev="+Date.now(),
				map:map,
				zIndex:80
			});
			ctaLayer.setMap(map);

			$region = $(this).val();
			googleMap.closeUp($region, map, 3);

			ctaLayer.addListener('click', function(kmlEvent) {
				var text = kmlEvent.featureData.name;
				googleMap.closeUp(text, map);
			});

		});
	}

};

