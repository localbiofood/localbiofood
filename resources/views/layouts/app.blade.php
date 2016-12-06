<head>
    {{--<base href="http://livedemo00.template-help.com/joomla_55599/" />--}}
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <script type="text/javascript">
    </script>
    <meta name="generator" content="Joomla! - Open Source Content Management"/>
    <title>Home</title>
    {{--<link href="/joomla_55599/index.php?format=feed&amp;type=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0" />--}}
    {{--<link href="/joomla_55599/index.php?format=feed&amp;type=atom" rel="alternate" type="application/atom+xml" title="Atom 1.0" />--}}
    <link href="/joomla_55599/templates/theme3175/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
    <link rel="stylesheet" href="/assets/css/chosen.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/css/layout.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/css/jquery.fancybox.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/css/jquery.fancybox-buttons.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/css/jquery.fancybox-thumbs.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/css/template.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/modules/mod_tm_style_switcher/css/style.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/css/color_schemes/color_scheme_1.css" type="text/css" id="color_scheme"/>
    <link rel="stylesheet" href="/assets/modules/mod_tm_ajax_contact_form/css/style.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/css/caroufredsel.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/modules/mod_tm_parallax/css/rd-parallax.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/css/camera.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/modules/mod_icemegamenu/css/navbar.css" type="text/css"/>

    <script type='text/javascript'
            src='http://maps.google.com/maps/api/js?v=3.exp&amp;language=en-GB&amp;libraries=places&amp;sensor=false&key=AIzaSyCPGgBHAlfYvfitdF967fvGW6YRU0WbuCE'></script>


    <script src="/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/jquery-noconflict.js" type="text/javascript"></script>
    <script src="/assets/js/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="/assets/js/caption.js" type="text/javascript"></script>
    <script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/js/chosen.jquery.min.js" type="text/javascript"></script>
    {{--<script src="/assets/js/jquery.cookies.js" type="text/javascript"></script>--}}
    <script src="/assets/modules/mod_tm_style_switcher/js/style_switcher_demo.js" type="text/javascript"></script>
    <script src="/assets/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/js/additional-methods.min.js" type="text/javascript"></script>
    {{--<script src="/assets/js/ajaxsendmail.js" type="text/javascript"></script>--}}
    <script src="/assets/modules/mod_caroufredsel/js/jquery.caroufredsel.js" type="text/javascript"></script>
    <script src="/assets/modules/mod_tm_parallax/js/jquery.rd-parallax.js" type="text/javascript"></script>
    <script src="/assets/js/camera.min.js" type="text/javascript"></script>
    <script src="/assets/modules/mod_icemegamenu/js/menu.js" type="text/javascript"></script>
    <script src="/assets/modules/mod_icemegamenu/js/jquery.rd-navbar.js" type="text/javascript"></script>
    <script type='text/javascript' src='http://www.google.com/jsapi?key='></script>
    <script type='text/javascript' src='http://www.google.com/uds/?file=earth&amp;v=1'></script>
    <script type='text/javascript' src='/assets/modules/googleearthv3/googleearth.js'></script>
    <script type='text/javascript' src='/assets/modules/googlemaps/googlemapsv3.js'></script>

    <script src="/assets/modules/mod_icemegamenu/js/jquery.rd-navbar.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>

    <script type="text/javascript">
		jQuery(window).on('load', function ()
		{
			new JCaption('img.caption');
		});
		jQuery(document).ready(function ()
		{
			jQuery('.hasTooltip').tooltip({"html": true, "container": "body"});
		});
		jQuery(document).ready(function ()
		{
			jQuery('select').chosen({
				"disable_search_threshold": 10,
				"allow_single_deselect": true,
				"placeholder_text_multiple": "Select some options",
				"placeholder_text_single": "Select an option",
				"no_results_text": "No results match"
			});
		});

		jQuery(function ($)
		{

			$(document).ready(function ()
			{
				$("link").last().addClass("last_link");
				$("#color_scheme").insertAfter($(".last_link"));
			})

			$("#style_switcher .toggler").click(function ()
			{
				$("#style_switcher").toggleClass("hidden");
			})
			$("#style_switcher").style_switcher("/joomla_55599/templates/theme3175/css/color_schemes/", "/joomla_55599");
		})

		window.setInterval(function ()
		{
			var r;
			try
			{
				r = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP")
			}
			catch (e)
			{
			}
			if (r)
			{
				r.open("GET", "./", true);
				r.send(null)
			}
		}, 840000);
		jQuery(function ($)
		{
			var error = "Something went wrong, please try again later.",
					validator = $("#contact-form_209").validate({
						wrapper: "mark",
						submitHandler: function (form)
						{
							$(form).ajaxsendmail();
							return false;
						}
					});
			$('#message_3').rules('add', {
				minlength: 50
			});
		});
		$(document).ready(function() {
			$('#example').DataTable();
		} );

    </script>

    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
          rel='stylesheet'
          type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Asap:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    {{--<link href='/assets/plugins/plugin_googlemap3/plugin_googlemap3.css.php' rel='stylesheet' type='text/css' />--}}

</head>

<body class="body__home option-com_content view-category task- itemid-101">
<div id="wrapper">
    <div class="wrapper-inner">
        <a id="fake" href='#'></a>

        <!-- Header -->
        <div id="header">
            <!-- Logo -->
            <div id="logo">
                <a href="#">
                    {{--<img src="/assets/images/logo.png" alt="Donald. Ag">--}}
                    <h1 style="background: rgba(254, 190, 0, 0.76); padding: 10px">#Localbiofood</h1>
                </a>
            </div>

            <div class="clearfix"></div>
        </div>
        <!-- Navigation -->
        <!-- Showcase -->
        <div id="showcase">
            <div class="row-container">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="moduletable center double  span12">
                            <div class="module_container">
                                <header>
                                    <h1 class="moduleTitle ">
                                        <span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Par</span>
                                        <span class="item_title_part_1 item_title_part_even item_title_part_first_half">Localbiofood</span>
                                    </h1>
                                </header>
                                <div class="mod-newsflash-adv about mod-newsflash-adv__center double cols-2"
                                     id="module_220">
                                    <div class="module_container">
                                        <header>
                                            <h1 class="moduleTitle  visible-first heading-style-1">
                                                <span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Par</span>
                                                <span class="item_title_part_1 item_title_part_even item_title_part_first_half">Localbiofood</span>
                                            </h1>
                                        </header>
                                        <div class="mod-newsflash-adv about mod-newsflash-adv__center double cols-2"
                                             id="module_220">
                                            <div class="pretext"> Dažādi produkti, dažādas kategorijas</div>
                                            <div class="row-fluid">
                                                <article class="span6 item item_num0 item__module   visible-first"
                                                         id="item_214">

                                                    <!-- Intro Image -->
                                                    <figure class="item_img img-intro img-intro__none">
                                                        <img src="/assets/images/icons/icon1.png" alt="">
                                                    </figure>

                                                    <div class="item_content">

                                                        <!-- Item title -->
                                                        <h3 class="item_title item_title__center double visible-first heading-style-3">
                                                            <span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Augļi</span>
                                                        </h3>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            Dažādi augļi, āboli, bumbieri, banāni utt.
                                                        </div>


                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </article>

                                                <article class="span6 item item_num1 item__module   visible-first"
                                                         id="item_215">
                                                    <!-- Intro Image -->
                                                    <figure class="item_img img-intro img-intro__none">
                                                        <img src="/assets/images/icons/icon2.png" alt="">
                                                    </figure>

                                                    <div class="item_content">

                                                        <!-- Item title -->
                                                        <h3 class="item_title item_title__center double visible-first heading-style-3">
                                                            <span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Gaļas produkti</span>
                                                        </h3>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            Vistas gaļa, cūkgaļa, jēra gaļa utt.
                                                        </div>


                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </article>
                                            </div>
                                            <div class="row-fluid">
                                                <article class="span6 item item_num2 item__module   visible-first"
                                                         id="item_216">

                                                    <!-- Intro Image -->
                                                    <figure class="item_img img-intro img-intro__none">
                                                        <img src="/assets/images/icons/icon3.png" alt="">
                                                    </figure>

                                                    <div class="item_content">

                                                        <!-- Item title -->
                                                        <h3 class="item_title item_title__center double visible-first heading-style-3">
                                                            <span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Piena</span>
                                                            <span class="item_title_part_1 item_title_part_even item_title_part_first_half">produkti</span>
                                                        </h3>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            Siers, piens, jogurti, biezpiens utt.
                                                        </div>


                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </article>
                                                <article class="span6 item item_num3 item__module  lastItem visible-first"
                                                         id="item_217">

                                                    <!-- Intro Image -->
                                                    <figure class="item_img img-intro img-intro__none">
                                                        <img src="/assets/images/icons/icon4.png" alt="">
                                                    </figure>

                                                    <div class="item_content">

                                                        <!-- Item title -->
                                                        <h3 class="item_title item_title__center double visible-first heading-style-3">
                                                            <span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Dārzeņi</span>
                                                        </h3>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            Burkāni, gurķi, redīsi, sīpoli utt
                                                        </div>


                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </article>
                                            </div>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature -->
        <div id="feature">
            <div class="row-container">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="moduletable center team  span12">
                            <div class="module_container">
                                <div class="mod-newsflash-adv products mod-newsflash-adv__center team cols-4"
                                     id="module_171">
                                    <div class="module_container">
                                        <header>
                                            <h1 class="moduleTitle center heading-style-1 visible-first">
                                                <span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Reģioni</span>
                                            </h1>
                                        </header>
                                        <div class="mod-newsflash-adv products mod-newsflash-adv__center team cols-4"
                                             id="module_171">
                                            <div class="pretext">
                                                Viss tiek grupēts un ir atlasāms pēc reģioniem
                                            </div>
                                            <div class="row-fluid">
                                                <article class="span3 item item_num0 item__module   visible-first"
                                                         id="item_41">

                                                    <!-- Intro Image -->
                                                    <figure class="item_img img-intro img-intro__none">
                                                        <img src="" alt="">
                                                    </figure>

                                                    <div class="item_content">

                                                        <!-- Item title -->
                                                        <h4 class="item_title item_title__center team heading-style-4 visible-first">
                                                            <span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Rīga</span>
                                                        </h4>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            Rīgas reģions
                                                        </div>


                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </article>
                                                <article class="span3 item item_num1 item__module   visible-first"
                                                         id="item_42">

                                                    <!-- Intro Image -->
                                                    <figure class="item_img img-intro img-intro__none">
                                                        <img src="" alt="">
                                                    </figure>

                                                    <div class="item_content">

                                                        <!-- Item title -->
                                                        <h4 class="item_title item_title__center team heading-style-4 visible-first">
                                                            <span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Vidzeme</span>
                                                        </h4>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            Vidzemes reģions
                                                        </div>


                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </article>
                                                <article class="span3 item item_num2 item__module   visible-first"
                                                         id="item_43">

                                                    <!-- Intro Image -->
                                                    <figure class="item_img img-intro img-intro__none">
                                                        <img src="" alt="">
                                                    </figure>

                                                    <div class="item_content">

                                                        <!-- Item title -->
                                                        <h4 class="item_title item_title__center team heading-style-4 visible-first">
                                                            <span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Kurzeme</span>
                                                        </h4>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            Kurzemes reģions
                                                        </div>

                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </article>
                                                <article class="span3 item item_num3 item__module  lastItem visible-first"
                                                         id="item_44">

                                                    <!-- Intro Image -->
                                                    <figure class="item_img img-intro img-intro__none">
                                                        <img src="" alt="">
                                                    </figure>

                                                    <div class="item_content">
                                                        <!-- Item title -->
                                                        <h4 class="item_title item_title__center team heading-style-4 visible-first">
                                                            <span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Latgale</span>
                                                        </h4>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            Latgales reģions
                                                        </div>

                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </article>
                                                <article class="span3 item item_num2 item__module   visible-first"
                                                         id="item_45">

                                                    <!-- Intro Image -->
                                                    <figure class="item_img img-intro img-intro__none">
                                                        <img src="" alt="">
                                                    </figure>

                                                    <div class="item_content">

                                                        <!-- Item title -->
                                                        <h4 class="item_title item_title__center team heading-style-4 visible-first">
                                                            <span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Zemgale</span>
                                                        </h4>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            Zemgales reģions
                                                        </div>

                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </article>
                                            </div>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Mainbottom -->
        <div id="content">
            <div class="moduletable center">
                <div class="module_container">
                    <header><h1 class="moduleTitle ">
                            <span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Our</span>
                            <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">Products</span>
                        </h1></header>
                    <div class="pretext">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.
                    </div>

                    <ul class="nav nav-tabs" id="bootstrap_tabs_nav_213">
                        <li class="active"><a data-toggle="tab" href="#tab1-213">Rīgas reģions</a></li>
                        <li><a data-toggle="tab" href="#tab2-213">Kurzeme</a></li>
                        <li><a data-toggle="tab" href="#tab3-213">Latgale</a></li>
                        <li><a data-toggle="tab" href="#tab4-213">Zemgale</a></li>
                        <li><a data-toggle="tab" href="#tab5-213">Vidzeme</a></li>
                    </ul>

                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Tirgotājs</th>
                            <th>Reģions</th>
                            <th>Kategorija(s)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Drēliņu gaļas rūpnīca</td>
                            <td>Vidzeme</td>
                            <td>Gaļa</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sienīši Sia</td>
                            <td>Rīga</td>
                            <td>Piena produkti</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Lapnieki I/k</td>
                            <td>Vidzeme</td>
                            <td>Piena produkti</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Bērzi</td>
                            <td>Kurzeme</td>
                            <td>Piena produkti</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Liepas</td>
                            <td>Latgale</td>
                            <td>Piena produkti</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Liepas</td>
                            <td>Latgale</td>
                            <td>Piena produkti</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Liepas</td>
                            <td>Latgale</td>
                            <td>Piena produkti</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Liepas</td>
                            <td>Latgale</td>
                            <td>Piena produkti</td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="tab-content" id="bootstrap_tabs_content_213">
                        <div class="tab-pane fade active in" id="tab1-213">

                            <!-- Intro Image -->

                            <div class="item_content">


                                <!-- Introtext -->
                                <div class="item_introtext">
                                    <div class="moduletable">
                                        <div class="mod_caroufredsel portfolio mod_caroufredsel__" id="module_91">
                                            <div id="list_carousel_91" class="list_carousel">

                                                <ul id="caroufredsel_91">
                                                    <li class="item" id="item_161">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category1/image1.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category1/image2.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    </li>
                                                </ul>

                                            </div>


                                            <div id="carousel_91_pag" class="caroufredsel_pagination"></div>
                                            <div class="clearfix"></div>

                                        </div>

                                        <script>
											jQuery(function ($)
											{
												var carousel = $("#caroufredsel_91")
												carousel.carouFredSel({
													responsive: true,
													width: '100%',
													items: {
														width: 513,
														height: 'variable',
														visible: {
															min: 1,
															max: 4
														},
														minimum: 1
													},
													scroll: {
														items: 1,
														fx: "scroll",
														easing: "swing",
														duration: 500,
														queue: true
													},
													auto: 8000,
													swipe: {
														onTouch: true
													}
												});
												$(window).load(function ()
												{
													setTimeout(function ()
													{
														carousel.trigger('configuration', {reInit: true})
													}, 100);
												});
											});
                                        </script>
                                    </div>
                                </div>

                                <!-- Read More link -->
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-pane fade" id="tab2-213">

                            <!-- Intro Image -->

                            <div class="item_content">


                                <!-- Introtext -->
                                <div class="item_introtext">
                                    <div class="moduletable">
                                        <div class="mod_caroufredsel portfolio mod_caroufredsel__" id="module_214">
                                            <div id="list_carousel_214" class="list_carousel">

                                                <ul id="caroufredsel_214">
                                                    <li class="item" id="item_189">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category2/image4.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category2/image6.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_192">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category2/image7.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category2/image5.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_162">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category2/image1.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category2/image8.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_188">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category2/image3.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category2/image2.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                </ul>

                                            </div>


                                            <div id="carousel_214_pag" class="caroufredsel_pagination"></div>
                                            <div class="clearfix"></div>

                                        </div>

                                        <script>
											jQuery(function ($)
											{
												var carousel = $("#caroufredsel_214")
												carousel.carouFredSel({
													responsive: true,
													width: '100%',
													items: {
														width: 513,
														height: 'variable',
														visible: {
															min: 1,
															max: 4
														},
														minimum: 1
													},
													scroll: {
														items: 1,
														fx: "scroll",
														easing: "swing",
														duration: 500,
														queue: true
													},
													auto: 8000,
													swipe: {
														onTouch: true
													}
												});
												$(window).load(function ()
												{
													setTimeout(function ()
													{
														carousel.trigger('configuration', {reInit: true})
													}, 100);
												});
											});
                                        </script>
                                    </div>
                                </div>

                                <!-- Read More link -->
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-pane fade" id="tab3-213">

                            <!-- Intro Image -->

                            <div class="item_content">


                                <!-- Introtext -->
                                <div class="item_introtext">
                                    <div class="moduletable">
                                        <div class="mod_caroufredsel portfolio mod_caroufredsel__" id="module_215">
                                            <div id="list_carousel_215" class="list_carousel">

                                                <ul id="caroufredsel_215">
                                                    <li class="item" id="item_181">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category3/image3.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category3/image8.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_182">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category3/image4.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category3/image7.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_183">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category3/image5.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category3/image2.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_184">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category3/image6.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category3/image1.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                </ul>

                                            </div>


                                            <div id="carousel_215_pag" class="caroufredsel_pagination"></div>
                                            <div class="clearfix"></div>

                                        </div>

                                        <script>
											jQuery(function ($)
											{
												var carousel = $("#caroufredsel_215")
												carousel.carouFredSel({
													responsive: true,
													width: '100%',
													items: {
														width: 513,
														height: 'variable',
														visible: {
															min: 1,
															max: 4
														},
														minimum: 1
													},
													scroll: {
														items: 1,
														fx: "scroll",
														easing: "swing",
														duration: 500,
														queue: true
													},
													auto: 8000,
													swipe: {
														onTouch: true
													}
												});
												$(window).load(function ()
												{
													setTimeout(function ()
													{
														carousel.trigger('configuration', {reInit: true})
													}, 100);
												});
											});
                                        </script>
                                    </div>
                                </div>

                                <!-- Read More link -->
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-pane fade" id="tab4-213">

                            <!-- Intro Image -->

                            <div class="item_content">


                                <!-- Introtext -->
                                <div class="item_introtext">
                                    <div class="moduletable">
                                        <div class="mod_caroufredsel portfolio mod_caroufredsel__" id="module_216">
                                            <div id="list_carousel_216" class="list_carousel">

                                                <ul id="caroufredsel_216">
                                                    <li class="item" id="item_178">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category4/image7.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category4/image5.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_174">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category4/image3.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category4/image6.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_175">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category4/image4.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category4/image2.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_179">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category4/image8.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category4/image1.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                </ul>

                                            </div>


                                            <div id="carousel_216_pag" class="caroufredsel_pagination"></div>
                                            <div class="clearfix"></div>

                                        </div>

                                        <script>
											jQuery(function ($)
											{
												var carousel = $("#caroufredsel_216")
												carousel.carouFredSel({
													responsive: true,
													width: '100%',
													items: {
														width: 513,
														height: 'variable',
														visible: {
															min: 1,
															max: 4
														},
														minimum: 1
													},
													scroll: {
														items: 1,
														fx: "scroll",
														easing: "swing",
														duration: 500,
														queue: true
													},
													auto: 8000,
													swipe: {
														onTouch: true
													}
												});
												$(window).load(function ()
												{
													setTimeout(function ()
													{
														carousel.trigger('configuration', {reInit: true})
													}, 100);
												});
											});
                                        </script>
                                    </div>
                                </div>

                                <!-- Read More link -->
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-pane fade" id="tab5-213">

                            <!-- Intro Image -->

                            <div class="item_content">


                                <!-- Introtext -->
                                <div class="item_introtext">
                                    <div class="moduletable">
                                        <div class="mod_caroufredsel portfolio mod_caroufredsel__" id="module_217">
                                            <div id="list_carousel_217" class="list_carousel">

                                                <ul id="caroufredsel_217">
                                                    <li class="item" id="item_171">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category5/image7.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category5/image4.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_172">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category5/image8.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category5/image6.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_167">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category5/image3.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category5/image1.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_169">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category5/image5.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category5/image2.jpg"
                                                                     alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus.</figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                </ul>

                                            </div>


                                            <div id="carousel_217_pag" class="caroufredsel_pagination"></div>
                                            <div class="clearfix"></div>

                                        </div>

                                        <script>
											jQuery(function ($)
											{
												var carousel = $("#caroufredsel_217")
												carousel.carouFredSel({
													responsive: true,
													width: '100%',
													items: {
														width: 513,
														height: 'variable',
														visible: {
															min: 1,
															max: 4
														},
														minimum: 1
													},
													scroll: {
														items: 1,
														fx: "scroll",
														easing: "swing",
														duration: 500,
														queue: true
													},
													auto: 8000,
													swipe: {
														onTouch: true
													}
												});
												$(window).load(function ()
												{
													setTimeout(function ()
													{
														carousel.trigger('configuration', {reInit: true})
													}, 100);
												});
											});
                                        </script>
                                    </div>
                                </div>

                                <!-- Read More link -->
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
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
                            <span class="siteName">Donald. Ag</span>
                            <span class="copy">&copy;</span> <span class="year">2016</span>
                            <span class="copy">All rights reserved.</span></div>
                        <!-- {%FOOTER_LINK} -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div id="footer">
            <section class="moduletable map">
                <div class="module_container">
                    <div class="mod-article-single mod-article-single__map" id="module_89">
                        <div class="item__module" id="item_155">

                            <!-- Intro Text -->
                            <div class="item_introtext">
                                <div class="map_wrapper">
                                    <!-- Plugin Google Maps version 3.2 by Mike Reumer --><!-- fail nicely if the browser has no Javascript -->
                                    <noscript>
                                        <blockquote class='warning'><p>
                                                <b>JavaScript must be enabled in order for you to use Google Maps.</b>
                                                <br/>However, it seems JavaScript is either disabled or not supported by your browser.
                                                <br/>To view Google Maps, enable JavaScript by changing your browser options, and then try again.
                                            </p></blockquote>
                                    </noscript>
                                    <div id='mapbody8_oktdx_0' style="display: none; text-align:center">
                                        <div id="googlemap8_oktdx_0"
                                             class="map"
                                             style="margin-right: auto; margin-left: auto; width:100%; height:460px;"></div>
                                    </div>
                                    <img src='/assets/images/marker.png' style='display:none' alt='icon'/>
                                    <script type='text/javascript'>/*<![CDATA[*/
										var mapconfig8_oktdx_0 = {
											"debug": "0",
											"visualrefresh": "1",
											"show": "1",
											"mapclass": "",
											"loadmootools": "0",
											"timeinterval": "500",
											"googlewebsite": "maps.google.com",
											"align": "center",
											"width": "100%",
											"height": "460px",
											"effect": "none",
											"deflatitude": "40.749032",
											"deflongitude": "-73.937254",
											"centerlat": "",
											"centerlon": "",
											"address": "",
											"latitudeid": "",
											"latitudedesc": "1",
											"latitudecoord": "0",
											"latitudeform": "0",
											"controltype": "UI",
											"zoomtype": "None",
											"svcontrol": "1",
											"returncontrol": "0",
											"zoom": "11",
											"corzoom": "0",
											"minzoom": "0",
											"maxzoom": "19",
											"rotation": "1",
											"zoomnew": "0",
											"zoomwheel": "0",
											"keyboard": "0",
											"maptype": "Normal",
											"showmaptype": "1",
											"shownormalmaptype": "1",
											"showsatellitemaptype": "1",
											"showhybridmaptype": "1",
											"showterrainmaptype": "1",
											"showearthmaptype": "1",
											"showscale": "0",
											"overview": "0",
											"draggable": "false",
											"marker": "1",
											"traffic": "0",
											"transit": "0",
											"bicycle": "0",
											"panoramio": "0",
											"panominzoom": "none",
											"panomaxzoom": "none",
											"pano_userid": "",
											"pano_tag": "",
											"weather": "0",
											"weathercloud": "0",
											"weatherinfo": "1",
											"weathertempunit": "celsius",
											"weatherwindunit": "km",
											"dir": "0",
											"dirtype": "D",
											"formdirtype": "0",
											"avoidhighways": "0",
											"avoidtoll": "0",
											"diroptimize": "0",
											"diralternatives": "0",
											"showdir": "1",
											"animdir": "0",
											"animspeed": "1",
											"animautostart": "0",
											"animunit": "kilometers",
											"formspeed": "0",
											"formaddress": "0",
											"formdir": "0",
											"autocompl": "both",
											"txtdir": "Directions: ",
											"txtgetdir": "Get Directions",
											"txtfrom": "From here",
											"txtto": "To here",
											"txtdiraddr": "Address: ",
											"txt_driving": "",
											"txt_avhighways": "",
											"txt_avtoll": "",
											"txt_walking": "",
											"txt_bicycle": "",
											"txt_transit": "",
											"txt_optimize": "",
											"txt_alternatives": "",
											"dirdefault": "0",
											"gotoaddr": "0",
											"gotoaddrzoom": "0",
											"txtaddr": "Address: ##",
											"erraddr": "Address ## not found!",
											"txtgotoaddr": "Goto",
											"clientgeotype": "google",
											"lightbox": "0",
											"txtlightbox": "Open lightbox",
											"lbxcaption": "",
											"lbxwidth": "1600px",
											"lbxheight": "800px",
											"lbxcenterlat": "",
											"lbxcenterlon": "",
											"lbxzoom": "",
											"sv": "none",
											"svpano": "",
											"svwidth": "100%",
											"svheight": "300px",
											"svautorotate": "0",
											"svaddress": "1",
											"kmlrenderer": "google",
											"kmlsidebar": "none",
											"kmlsbwidth": "200px",
											"kmllightbox": "0",
											"kmlhighlite": "{ \"color\": \"#aaffff\", \"opacity\": 0.3,  \"textcolor\": \"#000000\" }",
											"proxy": "0",
											"tilelayer": "",
											"tilemethod": "",
											"tileopacity": "1",
											"tilebounds": "",
											"tileminzoom": "0",
											"tilemaxzoom": "19",
											"twittername": "",
											"twittertweets": "15",
											"twittericon": "\/media\/plugin_googlemap3\/site\/Twitter\/twitter_map_icon.png",
											"twitterline": "#ff0000ff",
											"twitterlinewidth": "4",
											"twitterstartloc": "0,0,0",
											"lang": "en-GB",
											"mapType": "normal",
											"geocoded": 0,
											"tolat": "",
											"tolon": "",
											"toaddress": "",
											"description": "",
											"tooltip": "",
											"kml": [],
											"kmlsb": [],
											"layer": [],
											"camera": [],
											"searchtext": "",
											"latitude": "40.749032",
											"longitude": "-73.937254",
											"waypoints": [],
											"mapnm": "8_oktdx_0",
											"descr": "0",
											"geoxmloptions": {
												"titlestyle": " class=kmlinfoheader ",
												"descstyle": " class=kmlinfodesc ",
												"veryquiet": true,
												"quiet": true,
												"iwmethod": "click",
												"sortbyname": null,
												"linktarget": "_self",
												"linkmethod": "dblclick",
												"hilite": {"color": "#aaffff", "opacity": 0.3, "textcolor": "#000000"},
												"baseicon": "A",
												"lang": {
													"txtdir": "Directions: ",
													"txtto": "To here",
													"txtfrom": "From here",
													"txtsrchnrby": "Search nearby",
													"txtzoomhere": "Zoom Here",
													"txtaddrstart": "Start address:",
													"txtgetdir": "Go",
													"txtback": "\u00ab Back",
													"txtsearchnearby": "Search nearby: e.g. pizza",
													"txtsearch": "Go"
												},
												"inputsize": "25"
											},
											"markericon": [{
												"name": "A",
												"imageurl": "http:\/\/livedemo00.template-help.com\/joomla_55599\/images\/marker.png",
												"iconwidth": "",
												"iconheight": "",
												"iconshadow": "",
												"iconshadowwidth": "",
												"iconshadowheight": "",
												"iconanchorx": "",
												"iconanchory": "",
												"iconimagemap": "13,0,15,1,16,2,17,3,18,4,18,5,19,6,19,7,19,8,19,9,19,10,19,11,19,12,19,13,18,14,18,15,17,16,16,17,15,18,14,19,14,20,13,21,13,22,12,23,12,24,12,25,12,26,11,27,11,28,11,29,11,30,11,31,11,32,11,33,8,33,8,32,8,31,8,30,8,29,8,28,8,27,8,26,7,25,7,24,7,23,6,22,6,21,5,20,5,19,4,18,3,17,2,16,1,15,1,14,0,13,0,12,0,11,0,10,0,9,0,8,0,7,0,6,1,5,1,4,2,3,3,2,4,1,6,0,13,0"
											}],
											"icontype": "A",
											"earthoptions": {
												"timeout": "300",
												"borders": true,
												"buildings": false,
												"roads": false,
												"terrain": false,
												"lookat": [],
												"camera": []
											}
										};
										var mapstyled8_oktdx_0 = [
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
										var googlemap8_oktdx_0 = new GoogleMaps('8_oktdx_0', mapconfig8_oktdx_0, mapstyled8_oktdx_0);
                                        /*]]>*/</script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<div id="back-top">
    <a href="#"><span></span> </a>
</div>
<div id="modal" class="modal hide fade loginPopup">
    <div class="modal-hide"></div>
    <div class="modal_wrapper">
        <button type="button" class="close modalClose">×</button>
        <div class="moduletable login_megamenu login_shell">
            <div class="modal-body">

                <!--h4 class="">Login or register</h4-->
                <form action="/joomla_55599/index.php" method="post" id="login-form">
                    <div class="lr_social_login_basic_150">
                        <div class="lr_providers">
                            <div class="lr_icons_box">
                                <div>
                                    <a class="lr_providericons lr_facebook"
                                       href="javascript:void(0);"
                                       onclick="javascript:window.open();"
                                       rel="nofollow"
                                       title="Login with Facebook">Login with Facebook</a>
                                </div>
                                <div>
                                    <a class="lr_providericons lr_google"
                                       href="javascript:void(0);"
                                       onclick="javascript:window.open();"
                                       rel="nofollow"
                                       title="Login with Google +">Login with Google +</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mod-login_userdata">
                        <div id="form-login-username" class="control-group">
                            <div class="controls">
                                <div class="input-prepend">
              <span class="add-on">
                <span class="fa fa-user hasTooltip" title="Username"></span>
                <label for="modlgn-username" class="element-invisible">Username</label>
              </span>
                                    <input id="modlgn-username"
                                           type="text"
                                           name="username"
                                           class="input-small"
                                           tabindex="0"
                                           size="18"
                                           placeholder="Username"
                                           required/>
                                </div>
                            </div>
                        </div>
                        <div id="form-login-password" class="control-group">
                            <div class="controls">
                                <div class="input-prepend">
              <span class="add-on">
                <span class="fa fa-lock hasTooltip" title="Password">
                </span>
                <label for="modlgn-passwd" class="element-invisible">Password                </label>
              </span>
                                    <input id="modlgn-passwd"
                                           type="password"
                                           name="password"
                                           class="input-small"
                                           tabindex="0"
                                           size="18"
                                           placeholder="Password"
                                           required/>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="e1c83ba183cf791f5aa455829e869caf" value="1"/>
                        <label for="mod-login_remember198" class="checkbox">
                            <input id="mod-login_remember198"
                                   class="mod-login_remember"
                                   type="checkbox"
                                   name="remember"
                                   value="yes">
                            Remember me </label>
                        <div class="mod-login_submit">
                            <button type="submit" tabindex="3" name="Submit" class="btn btn-primary">Login</button>
                        </div>
                        <input type="hidden" name="option" value="com_users">
                        <input type="hidden" name="task" value="user.login">
                        <input type="hidden" name="return" value="aW5kZXgucGhwP0l0ZW1pZD0xMDE=">
                        <div class="reset_remind">
                            Forgot <a href="/joomla_55599/index.php/username-reminder-request"
                                      class="hasTooltip">username</a>/
                            <a href="/joomla_55599/index.php/password-reset" class="hasTooltip">password</a>?
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="style_switcher" class="hidden">
    <div class="toggler"></div>
    <p>The customization tool allows you to make color changes in your theme.</p>
    <ul id="color-box">
        <li class="active">
            <div class="color_scheme color_scheme_1" data-scheme="color_scheme_1">&nbsp;</div>
        </li>
        <li>
            <div class="color_scheme color_scheme_2" data-scheme="color_scheme_2">&nbsp;</div>
        </li>
        <li>
            <div class="color_scheme color_scheme_3" data-scheme="color_scheme_3">&nbsp;</div>
        </li>
        <li>
            <div class="color_scheme color_scheme_4" data-scheme="color_scheme_4">&nbsp;</div>
        </li>
    </ul>
</div>

<div id="fixed-sidebar-right">
    <div class="moduletable " id="module_181">
    </div>


{{--<script src="/joomla_55599/templates/theme3175/js/scripts.js"></script>--}}
