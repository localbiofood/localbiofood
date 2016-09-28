var googleMap = {
    getKurzemeLoc: function()
    {
        return {lat: 56.8635184, lng:21.8856784};
    },
    getLatgaleLoc: function()
    {
        return {lat: 56.4191032, lng:26.4756745};
    },
    getRigaLoc: function()
    {
        return {lat: 56.9715833, lng:23.9901725};
    },
    getVidzemeLoc: function()
    {
        return {lat: 57.3241842, lng:25.0419587};
    },
    getZemgaleLoc: function()
    {
        return {lat: 56.4943488, lng:24.110379};
    },

    initMap: function (){
        var map;
		var zoom = 7;
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 56.949649, lng: 24.105186},
                zoom: zoom,
                scrollwheel: false,
                navigationControl: false,
				panControl: false,
				maxZoom: zoom,
				minZoom: zoom,
                mapTypeControl: false,
                scaleControl: false,
                draggable: false,
				zIndex:62
            });
		googleMap.setLatviaOverlay(map);

    },
	setLatviaOverlay: function(map)
	{
		var ctaLayer = new google.maps.KmlLayer({
			url: 'https://dl.dropboxusercontent.com/u/46566612/LVA_adm11.kml'+"?rev=",
			map:map,
			zIndex:80
		});
		ctaLayer.setMap(map);

		ctaLayer.addListener('click', function(kmlEvent) {
			var text = kmlEvent.featureData.name;
			// googleMap.closeUp(this);
			googleMap.closeUp(text, map);
		});

		googleMap.setRegionListeners(map);
	},
    setRegionListeners : function(map)
    {
        $("#kurzeme").click(function(){
            map.setCenter(googleMap.getKurzemeLoc());
            map.setZoom(9);
        });
        $("#riga").click(function(){
            map.setCenter(googleMap.getRigaLoc());
            map.setZoom(9);
        });
        $("#vidzeme").click(function(){
            map.setCenter(googleMap.getVidzemeLoc());
            map.setZoom(9);
        });
        $("#zemgale").click(function(){
            map.setCenter(googleMap.getZemgaleLoc());
            map.setZoom(9);
        });
        $("#latgale").click(function(){
            map.setCenter(googleMap.getLatgaleLoc());
            map.setZoom(9);
        });

    },
    closeUp: function($region, map)
    {
    	var closeUp = 14;
        switch ($region){
            case 'Kurzeme':
                map.setCenter(googleMap.getKurzemeLoc);
                map.setZoom(closeUp);
                break;
            case 'Latgale':
                map.setCenter(googleMap.getLatgaleLoc());
                map.setZoom(closeUp);
                break;
            case 'Riga':
                map.setCenter(googleMap.getRigaLoc);
                map.setZoom(closeUp);
                break;
            case 'Vidzeme':
                map.setCenter(googleMap.getVidzemeLoc());
                map.setZoom(closeUp);
            case 'Zemgale':
                map.setCenter(googleMap.getZemgaleLoc());
                map.setZoom(closeUp	);
        }
    }

};

