@include('layouts.head')
<body>
@include('layouts.header')

<main class="cd-main-content">
    @include('layouts.sidemenu')
    <div class="content-wrapper">
        <div id="map"></div>
        <script>
            var map;
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 56.949649, lng: 24.105186},
                    zoom: 8
                });
            }
        </script>

    @include('layouts.footer')

