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
    <script type='text/javascript'
            src='http://www.google.com/jsapi?key=AIzaSyCPGgBHAlfYvfitdF967fvGW6YRU0WbuCE'></script>
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
		$(document).ready(function ()
		{
			$('#example').DataTable({
				"processing": true,
				"serverSide": true,
				"ajax": route('timetable::get')
            });
		});

    </script>

    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
          rel='stylesheet'
          type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Asap:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='/assets/plugins/plugin_googlemap3/plugin_googlemap3.css.php' rel='stylesheet' type='text/css'/>

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

            @include('layouts/nav')

            <div class="clearfix"></div>
        </div>


        @yield('showcase');
        @yield('timetable')
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
                            <span class="siteName">Donald. Ag</span>
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
