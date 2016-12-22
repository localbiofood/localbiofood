<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <script type="text/javascript">
    </script>
    <meta name="generator" content="Joomla! - Open Source Content Management"/>
    <title>Home</title>
    <link rel="stylesheet" href="/assets/css/chosen.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/css/layout.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/css/jquery.fancybox.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/css/jquery.fancybox-buttons.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/css/jquery.fancybox-thumbs.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/css/template.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/modules/mod_tm_ajax_contact_form/css/style.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/css/caroufredsel.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/modules/mod_tm_parallax/css/rd-parallax.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/css/camera.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/modules/mod_icemegamenu/css/navbar.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script type='text/javascript'
            src='http://maps.google.com/maps/api/js?v=3.exp&amp;language=en-GB&amp;libraries=places&amp;sensor=false&key=AIzaSyCPGgBHAlfYvfitdF967fvGW6YRU0WbuCE'></script>


    <script src="/assets/js/jquery.min.js" type="text/javascript"></script>
    {{--<script src="/assets/js/jquery-noconflict.js" type="text/javascript"></script>--}}
    <script src="/assets/js/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="/assets/js/caption.js" type="text/javascript"></script>
    <script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/js/chosen.jquery.min.js" type="text/javascript"></script>
    <script src="/assets/modules/mod_tm_style_switcher/js/style_switcher_demo.js" type="text/javascript"></script>
    <script src="/assets/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="/assets/modules/mod_caroufredsel/js/jquery.caroufredsel.js" type="text/javascript"></script>
    <script src="/assets/modules/mod_tm_parallax/js/jquery.rd-parallax.js" type="text/javascript"></script>
    <script src="/assets/js/camera.min.js" type="text/javascript"></script>
    <script src="/assets/modules/mod_icemegamenu/js/menu.js" type="text/javascript"></script>
    <script src="/assets/modules/mod_icemegamenu/js/jquery.rd-navbar.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>

    {{--<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>--}}

    <script type="text/javascript">
		jQuery(document).ready(function ()
		{
			var data = [
				[
					"Tiger Nixon",
					"System Architect",
					"Edinburgh",
					"5421",
					"2011/04/25",
					"$3,120"
				],
				[
					"Garrett Winters",
					"Director",
					"Edinburgh",
					"8422",
					"2011/07/25",
					"$5,300"
				]];

			$('#timetable').DataTable({
				data: data
			});

//			googleMap.initMap();
			googleMapAdd.initMap();
			jQuery('.hasTooltip').tooltip({"html": true, "container": "body"});
		});

    </script>

    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
          rel='stylesheet'
          type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Asap:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    {{--<script src="/assets/js/gmap.js" type="text/javascript"></script>--}}
    <script src="/assets/js/gmapAdd.js" type="text/javascript"></script>
    <script src="/assets/js/main.js" type="text/javascript"></script>

</head>

<body class="body__home option-com_content view-category task- itemid-101">
<div id="wrapper">
    <div class="wrapper-inner">
        <a id="fake" href='#'></a>

        <!-- Header -->
        <div id="header">
            <!-- Logo -->
            <div id="logo">
                <a href="{{route('home')}}">
                    {{--<img src="/assets/images/logo.png" alt="Donald. Ag">--}}
                    <h1 style="background: rgba(254, 190, 0, 0.76); padding: 10px">#Localbiofood</h1>
                </a>
            </div>

            @include('layouts/nav')

            <div class="clearfix"></div>
        </div>

        @yield('showcase');
        @yield('timetablelist')
        @yield('content')

        <!-- Mainbottom -->
        <!-- Bottom -->
    </div>
</div>
<div id="footer-wrapper">
    <div class="footer-wrapper-inner">
        <!-- Copyright -->
        <div id="copyright" role="contentinfo">
            <div class="row-container">
                <div class="container-fluid">
                    <div class="row-fluid">

                        <div class="copyright span12">
                            <span class="siteName">Localbiofood</span>
                            <span class="copy">&copy;</span> <span class="year">2016</span>
                            <span class="copy">All rights reserved.</span></div>
                        <!-- {%FOOTER_LINK} -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        @yield('googleMap')
    </div>
</div>
<div id="back-top">
    <a href="#"><span></span> </a>
</div>

<div id="fixed-sidebar-right">
    <div class="moduletable " id="module_181">
    </div>
