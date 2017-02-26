<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <script type="text/javascript">
    </script>
    <meta name="generator" content="localbiofood"/>
    <title>Localbiofood</title>

    {{-- BOOTSTRAP CSS --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

    {{--<link rel="stylesheet" href="/assets/css/template.css" type="text/css"/>--}}
    {{--<link rel="stylesheet" href="/css/clean-blog.css" type="text/css"/>--}}
    {{--<link href="/css/clean-blog.min.css" rel="stylesheet">--}}

    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap-theme.css" type="text/css"/>
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />--}}

    {{-- DATATABLE CSS --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">

    {{-- CUSTOM CSS--}}
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">

    {{-- GOOGLE MAP --}}
    <script type='text/javascript'
            src='http://maps.google.com/maps/api/js?v=3.exp&amp;language=en-GB&amp;libraries=places&amp;key=AIzaSyCPGgBHAlfYvfitdF967fvGW6YRU0WbuCE'></script>

    {{-- MOMENT --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


    {{-- TEMPLATE JS --}}
    {{--<script src="/assets/modules/mod_caroufredsel/js/jquery.caroufredsel.js" type="text/javascript"></script>--}}
    {{--<script src="/assets/js/clean-blog.js" type="text/javascript"></script>--}}
    <script src="/assets/js/clean-blog.min.js"></script>

    {{-- DATA TABLES --}}
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>

    {{-- FONTS --}}
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
          rel='stylesheet'
          type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Asap:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    {{-- Select 2--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

    {{-- TIMEPICKER JS --}}
    <script src="/assets/plugins/ericjgagnon-wickedpicker-5080539/dist/wickedpicker.min.js"
            type="text/javascript"></script>
    <script src="/assets/js/gmap.js" type="text/javascript"></script>
    <script src="/assets/js/gmapAdd.js" type="text/javascript"></script>
    <script src="/assets/js/showInMap.js" type="text/javascript"></script>

    <script type="text/javascript">
		jQuery(document).ready(function ()
		{
			var table = $('#timetable').DataTable({
				"ajax": {
					url: "/timetabledata",
				},
			});

			$('#showcase a').click(function(){
				var column = $(this).data('columnIndex');
				var category =  $(this).data('category');
				table.column(column).search(category).draw();
			});

			$('#regionLinks a').click(function() {
				var region =  $(this).data('region');
				// Remove all active classes
				$('.active').removeClass('active');
				//Set active only to current
                $(this).addClass('active');
				table.column(2).search(region).draw();
            });

			$('#user_timetable').DataTable({
				"ajax": {
					url: "/usertimetabledata",
				},
			});

			googleMap.initMap();
			googleMapAdd.initMap();
		});

    </script>
    <script src="/assets/js/main.js" type="text/javascript"></script>

</head>

<body class="body__home option-com_content view-category task- itemid-101">

<div id="wrapper">
    <div class="wrapper-inner">
        <a id="fake" href='#'></a>

        <!-- Header -->
        <div id="header">
            @include('layouts/nav')
            <div class="clearfix"></div>
        </div>

    @yield('promotion')

    @yield('showcase')
    @yield('timetablelist')
    @yield('content')

    <!-- Mainbottom -->
        <!-- Bottom -->
        <div class="row" style="background-color: rgba(0, 0, 0, 0.3)">
            <div class="col-md-3" style="margin:35px">
                <img src="/assets/images/Agrichamber_Logo_Gat_edited.png" alt="Agrichamber">
            </div>
        </div>

        <div class="row" style="background:black;">
            <div class=" col-md-11">
                <div class="pull-right">
                    <h4>Localbiofood 2017</h4>
                </div>
            </div>
        </div>
    </div>
</div>



@yield('googleMap')

<div id="back-top">
    <a href="#"><span></span> </a>
</div>

<div id="fixed-sidebar-right">
    <div class="moduletable " id="module_181">
    </div>
</div>
</body>