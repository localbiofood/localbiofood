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
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                @if (Auth::check())
                <li>
                    <a href="/register">Reģistrācija</a>
                </li>
                @endif
                <li class="dropdown profile">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        @if (Auth::check())
                            <img src="assets/img/fish.svg"> Jānis <b class="caret"></b>
                        @else
                            <img src="assets/img/cheese.svg"> Jānis <b class="caret"></b>
                        @endif
                    </a>
                    <ul class="dropdown-menu">
                        @if (Auth::check())
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profils</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa ffoa-fw fa-envelope"></i> Vēstules</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Iestatījumi</a>
                        </li>
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
                                LogIn
                        </li>
                        @else
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Ielogoties</a>
                            </li>
                        @endif

                    </ul>
                </li>
            </ul>
           