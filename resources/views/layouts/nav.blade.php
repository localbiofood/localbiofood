<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/">Localbiofood</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="/about">Par mums</a>
                </li>
                <li>
                    <a href="/usefull">Noderīgi</a>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (\Auth::check())
                    <li>
                        <a href="{{Route('usertimetable::list')}}">Mani laiki</a>
                    </li>

                    <li>
                        <a href="{{ url('/logout') }}" class="iceMenuTitle"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="icemega_title icemega_nosubtitle">Iziet</span>
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>
                    </li>
                    </li>
                @else
                    <li>
                        <a href="/login">Ielogoties</a>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

{{--<nav class="moduletable home_menu pull-right">--}}
    {{--<div class="module_container">--}}
        {{--<div class="icemegamenu">--}}
            {{--<ul id="icemegamenu">--}}

                {{--<li id="iceMenu_285" class="iceMenuLiLevel_1 ">--}}
                    {{--<a href="/" class=" iceMenuTitle ">--}}
                        {{--<span class="icemega_title icemega_nosubtitle">Sākums</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li id="iceMenu_285" class="iceMenuLiLevel_1 ">--}}
                    {{--<a href="/usefull" class=" iceMenuTitle ">--}}
                        {{--<span class="icemega_title icemega_nosubtitle">Noderīgi</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li id="iceMenu_285" class="iceMenuLiLevel_1 ">--}}
                    {{--<a href="/about" class=" iceMenuTitle ">--}}
                        {{--<span class="icemega_title icemega_nosubtitle">Par mums</span>--}}
                    {{--</a>--}}
                {{--</li>--}}


                {{--@if (Auth::check())--}}
                    {{--<li id="iceMenu_285" class="iceMenuLiLevel_1 ">--}}
                        {{--<a href="{{ route('usertimetable::list') }}" class="iceMenuTitle">--}}
                            {{--<span class="icemega_title icemega_nosubtitle">Manas vietas</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}

                    {{--<li id="iceMenu_285" class="iceMenuLiLevel_1 ">--}}
                        {{--<a href="{{ url('/logout') }}" class="iceMenuTitle"--}}
                           {{--onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
                            {{--<span class="icemega_title icemega_nosubtitle">Iziet</span>--}}

                        {{--</a>--}}
                        {{--<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">--}}
                            {{--{{ csrf_field() }}--}}
                        {{--</form>--}}
                    {{--</li>--}}
                {{--@else--}}
                    {{--<li id="iceMenu_285" class="iceMenuLiLevel_1 ">--}}
                        {{--<a href="/register" class=" iceMenuTitle ">--}}
                            {{--<span class="icemega_title icemega_nosubtitle">Reģistrēties</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}

                    {{--<li id="iceMenu_285" class="iceMenuLiLevel_1 ">--}}
                        {{--<a href="/login" class=" iceMenuTitle ">--}}
                            {{--<span class="icemega_title icemega_nosubtitle">Ielogoties</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--@endif--}}
            {{--</ul>--}}
        {{--</div>--}}


        {{--<script type="text/javascript">--}}
			{{--jQuery(document).ready(function ()--}}
			{{--{--}}
				{{--var browser_width1 = jQuery(window).width();--}}
				{{--jQuery("#icemegamenu").find(".icesubMenu").each(function (index)--}}
				{{--{--}}
					{{--var offset1 = jQuery(this).offset();--}}
					{{--var xwidth1 = offset1.left + jQuery(this).width();--}}
					{{--if (xwidth1 >= browser_width1)--}}
					{{--{--}}
						{{--jQuery(this).addClass("ice_righttoleft");--}}
					{{--}--}}
				{{--});--}}

			{{--})--}}
			{{--jQuery(window).resize(function ()--}}
			{{--{--}}
				{{--var browser_width = jQuery(window).width();--}}
				{{--jQuery("#icemegamenu").find(".icesubMenu").removeClass("ice_righttoleft").each(function (index)--}}
				{{--{--}}
					{{--var offset = jQuery(this).offset();--}}
					{{--var xwidth = offset.left + jQuery(this).width();--}}
					{{--if (xwidth >= browser_width)--}}
					{{--{--}}
						{{--jQuery(this).addClass("ice_righttoleft");--}}
					{{--}--}}
				{{--});--}}
			{{--});--}}
        {{--</script>--}}
    {{--</div>--}}
{{--</nav>--}}
{{--<div class="clearfix"></div>--}}
