@include('layouts.head')
<body>

<div id="wrapper">
    <!-- Navigation -->

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- For mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-1">
                <span class="sr-only">top-nav-toggle</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">#Localbiofood</a>
        </div>
        <ul class="nav navbar-left top-nav">
            <li class="green" >
                <a href="/login"></i> Riga</a>
            </li>
            <li class="green" >
                <a href="/login"></i> Vidzeme</a>
            </li>
            <li class="green" >
                <a href="/login"></i> Zemgale</a>
            </li>
            <li class="green" >
                <a href="/login"></i> Kurzeme</a>
            </li>
            <li class="green" >
                <a href="/login"></i> Latgale</a>
            </li>

         </ul>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">

            <li>
                <a href="{{route('timetable::list')}}"><i class="fa fa-map-marker" aria-hidden="true"></i>Pievienot atrašanās vietu</a>
            </li>
            @if (Auth::check())
                <li class="dropdown profile">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="assets/img/fish.svg"> {{Auth::user()->name}}<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{route('profile')}}"><i class="fa fa-fw fa-user"></i> Profils</a>
                        </li>
                        <li>
                            <a href="{{route('timetable::list')}}"><i class="fa fa-map-marker" aria-hidden="true"></i>Pievienot atrašanās vietu</a>
                        </li>

                        @if (Auth::user()->admin === "1")
                        <li>
                            <a href="{{route('admin::edit')}}"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>Admin panelis</a>
                        </li>
                        @endif

                        <li class="divider"></li>
                        <li>
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                <i class="fa fa-fw fa-power-off"></i> Iziet</a>
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li>
                    <a class="green" href="/register"><span class="green">Reģistrācija</span></a>
                </li>
                <li>
                    <a href="/login"><i class="fa fa-fw fa-user"></i> Ielogoties</a>
                </li>
            @endif
        </ul>

        </nav>
    @include('layouts.sidemenu')
        <div id="content-wrapper">
            <div class="container-fluid">
                @yield('content')

            </div>
        </div>
</div>
<script src="assets/js/gmap.js"></script>

<script src="assets/js/gmapAdd.js"></script>
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPGgBHAlfYvfitdF967fvGW6YRU0WbuCE&callback=googleMap.initMap"--}}
        {{--async defer></script>--}}



<script src="js/jquery/dist/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>

{{-- Angular JS partt --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.2/angular.js"></script>
<link rel="stylesheet" href="https://cdn.rawgit.com/esvit/ng-table/1.0.0/dist/ng-table.min.css">
<script src="https://cdn.rawgit.com/esvit/ng-table/1.0.0/dist/ng-table.js"></script>
<script src="assets/js/app.js"></script>

{{--<script src="{{resource_path('assets/js/components/timepicker/jquery.timepicker.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="assets/js/plugins/timepicker/jquery.timepicker.min.js"></script>--}}
{{--<script type="text/javascript" src="assets/js/plugins/timepicker/jquery.timepicker.css"></script>--}}

<script type="text/javascript" src="assets/js/plugins/timepicker/jquery.timepicker.js"></script>
<link rel="stylesheet" type="text/css" href="assets/js/plugins/timepicker/jquery.timepicker.css" />

<script type="text/javascript" src="assets/js/plugins/timepicker/lib/bootstrap-datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="assets/js/plugins/timepicker/lib/bootstrap-datepicker.css" />


{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>--}}
{{--<script src="{{vendor_path('timepicker/jquery.timepicker.min.js')}}"></script>--}}

</body>
</html>


