<head>
    {{--<base href="http://livedemo00.template-help.com/joomla_55599/" />--}}
    <meta http-equiv="content-type" content="text/html; charset=utf-8" /><script type="text/javascript">
    </script>
    <meta name="generator" content="Joomla! - Open Source Content Management" />
    <title>Home</title>
    {{--<link href="/joomla_55599/index.php?format=feed&amp;type=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0" />--}}
    {{--<link href="/joomla_55599/index.php?format=feed&amp;type=atom" rel="alternate" type="application/atom+xml" title="Atom 1.0" />--}}
    <link href="/joomla_55599/templates/theme3175/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="/assets/css/chosen.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/layout.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/jquery.fancybox.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/jquery.fancybox-buttons.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/jquery.fancybox-thumbs.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/template.css" type="text/css" />
    <link rel="stylesheet" href="/assets/modules/mod_tm_style_switcher/css/style.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/color_schemes/color_scheme_1.css" type="text/css" id="color_scheme" />
    <link rel="stylesheet" href="/assets/modules/mod_tm_ajax_contact_form/css/style.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/caroufredsel.css" type="text/css" />
    <link rel="stylesheet" href="/assets/modules/mod_tm_parallax/css/rd-parallax.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/camera.css" type="text/css" />
    <link rel="stylesheet" href="/assets/modules/mod_icemegamenu/css/navbar.css" type="text/css" />

    <script type='text/javascript' src='http://maps.google.com/maps/api/js?v=3.exp&amp;language=en-GB&amp;libraries=places&amp;sensor=false&key=AIzaSyCPGgBHAlfYvfitdF967fvGW6YRU0WbuCE'></script>


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




    <script type="text/javascript">
        jQuery(window).on('load',  function() {
            new JCaption('img.caption');
        });
        jQuery(document).ready(function(){
            jQuery('.hasTooltip').tooltip({"html": true,"container": "body"});
        });
        jQuery(document).ready(function (){
            jQuery('select').chosen({"disable_search_threshold":10,"allow_single_deselect":true,"placeholder_text_multiple":"Select some options","placeholder_text_single":"Select an option","no_results_text":"No results match"});
        });

        jQuery(function($){

            $(document).ready(function () {
                $("link").last().addClass("last_link");
                $("#color_scheme").insertAfter($(".last_link"));
            })

            $("#style_switcher .toggler").click(function(){
                $("#style_switcher").toggleClass("hidden");
            })
            $("#style_switcher").style_switcher("/joomla_55599/templates/theme3175/css/color_schemes/","/joomla_55599");
        })

        window.setInterval(function(){var r;try{r=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP")}catch(e){}if(r){r.open("GET","./",true);r.send(null)}},840000);
        jQuery(function($){
            var error = "Something went wrong, please try again later.",
                validator = $("#contact-form_209").validate({
                    wrapper: "mark",
                    submitHandler: function(form) {
                        $(form).ajaxsendmail();
                        return false;
                    }
                });
            $('#message_3').rules('add', {
                minlength: 50
            });
        })

    </script>

    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Asap:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    {{--<link href='/assets/plugins/plugin_googlemap3/plugin_googlemap3.css.php' rel='stylesheet' type='text/css' />--}}

</head>

<body class="body__home option-com_content view-category task- itemid-101">
<div id="wrapper">
    <div class="wrapper-inner">
        <a id="fake" href='#'></a>
        <!-- Top -->
        <div id="top">
            <div class="moduletable pull-left"><div class="module_container"><div class="mod-menu">
                        <ul class="menu menuinfo">
                            <li class="item-492 deeper parent">
                                <a class="fa fa-comments" href="#" >comments</a>
                                <ul class="nav-child unstyled small">
                                    <li class="item-493">
                                        <a href="#" >live chat</a>
                                    </li>
                                    <li class="item-494">
                                        <span class="separator">We are here to help you</span></li>
                                </ul>
                            </li>
                        </ul>
                    </div></div></div><div class="moduletable pull-right"><div class="module_container">
                    <div class="mod-menu mod-menu__social">
                        <ul class="nav menu social">
                            <li class="item-149"><a class="fa fa-google-plus" href="#" title="Google+" ></a>
                            </li><li class="item-150"><a class="fa fa-twitter" href="#" title="Twitter" ></a>
                            </li><li class="item-148"><a class="fa fa-facebook" href="#" title="Facebook" ></a>
                            </li><li class="item-151"><a class="fa fa-pinterest" href="#" title="Pinterest" ></a>
                            </li><li class="item-152"><a class="fa fa-linkedin " href="#" title="Linkedin" ></a>
                            </li>	</ul>
                    </div></div></div><div class="moduletable pull-right"><div class="module_container"><div class="mod-menu">
                        <ul class="menu usermenu">
                            <li class="item-439">
                                <a href="#modal" >Login</a>
                            </li>
                            <li class="item-441">
                                <a href="/joomla_55599/index.php/user-registration" >Register</a>
                            </li>
                        </ul>
                    </div></div></div>
            <div class="clearfix"></div>
        </div>
        <!-- Header -->
        <div id="header">
            <!-- Logo -->
            <div id="logo">
                <a href="#">
                    <img src="/assets/images/logo.png" alt="Donald. Ag">
                    <h1><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Donald.</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">Ag</span></h1>
                </a>
            </div>
            <nav class="moduletable home_menu pull-right"><div class="module_container">
                    <div class="icemegamenu">
                        <ul id="icemegamenu">
                            <li id="iceMenu_101" class="iceMenuLiLevel_1 mzr-drop parent current active fullwidth">
                                <a href="http://livedemo00.template-help.com/joomla_55599/" class="icemega_active iceMenuTitle ">
                                    <span class="icemega_title icemega_nosubtitle">Home</span>
                                </a>
                                <ul class="icesubMenu icemodules sub_level_1" style="width:900px">
                                    <li>
                                        <div style="float:left;width:900px" class="iceCols">
                                            <ul>
                                                <li id="iceMenu_347" class="iceMenuLiLevel_2 ">
                                                    <div class="icemega_cover_module" style="width:900px">
                                                        <div class="icemega_modulewrap " style="width:auto; ">
                                                            <div class="mod-newsflash-adv megamenu mod-newsflash-adv__ cols-3" id="module_208">
                                                                <div class="row-fluid">
                                                                    <article class="span0 item item_num0 item__module  " id="item_140">

                                                                        <div class="item_content">

                                                                            <!-- Item title -->
                                                                            <h4 class="item_title item_title__"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Adipiscing</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">elit</span></h4>

                                                                            <!-- Intro Image -->
                                                                            <figure class="item_img img-intro img-intro__none">
                                                                                <img src="/assets/images/megamenu/megamenu_img1.jpg" alt="">
                                                                            </figure>

                                                                            <!-- Introtext -->
                                                                            <div class="item_introtext">
                                                                                <p>Lorem ipsum dolor set, consectetuer adipiscing elit. Prnt vestibulum molestie lacus. Aenean nonummy hendrerit muris. Phasellus porta. Fusce svarius mi. Cum sociis natoque petibus.</p>

                                                                            </div>


                                                                            <!-- Read More link -->
                                                                        </div>
                                                                        <div class="clearfix"></div>  </article>
                                                                    <article class="span0 item item_num1 item__module  " id="item_141">

                                                                        <div class="item_content">

                                                                            <!-- Item title -->
                                                                            <h4 class="item_title item_title__"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Adipiscing</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">elit</span></h4>

                                                                            <!-- Intro Image -->
                                                                            <figure class="item_img img-intro img-intro__none">
                                                                                <img src="/assets/images/megamenu/megamenu_img2.jpg" alt="">
                                                                            </figure>

                                                                            <!-- Introtext -->
                                                                            <div class="item_introtext">
                                                                                <p>Lorem ipsum dolor set, consectetuer adipiscing elit. Prnt vestibulum molestie lacus. Aenean nonummy hendrerit muris. Phasellus porta. Fusce svarius mi. Cum sociis natoque petibus.</p>

                                                                            </div>


                                                                            <!-- Read More link -->
                                                                        </div>
                                                                        <div class="clearfix"></div>  </article>
                                                                    <article class="span0 item item_num2 item__module  lastItem" id="item_142">

                                                                        <div class="item_content">

                                                                            <!-- Item title -->
                                                                            <h4 class="item_title item_title__"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Adipiscing</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">elit</span></h4>

                                                                            <!-- Intro Image -->
                                                                            <figure class="item_img img-intro img-intro__none">
                                                                                <img src="/assets/images/megamenu/megamenu_img3.jpg" alt="">
                                                                            </figure>

                                                                            <!-- Introtext -->
                                                                            <div class="item_introtext">
                                                                                <p>Lorem ipsum dolor set, consectetuer adipiscing elit. Prnt vestibulum molestie lacus. Aenean nonummy hendrerit muris. Phasellus porta. Fusce svarius mi. Cum sociis natoque petibus.</p>

                                                                            </div>


                                                                            <!-- Read More link -->
                                                                        </div>
                                                                        <div class="clearfix"></div>  </article>
                                                                </div>
                                                                <div class="clearfix"></div>

                                                            </div>
                                                        </div>
                                                    </div></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li id="iceMenu_134" class="iceMenuLiLevel_1 ">
                                <a href="/joomla_55599/index.php/about" class=" iceMenuTitle ">
                                    <span class="icemega_title icemega_nosubtitle">About</span>
                                </a>
                            </li>
                            <li id="iceMenu_335" class="iceMenuLiLevel_1 mzr-drop parent ">
                                <a class=" iceMenuTitle ">
                                    <span class="icemega_title icemega_nosubtitle">Pages</span>
                                </a>
                                <ul class="icesubMenu icemodules sub_level_1" style="width:150px">
                                    <li>
                                        <div style="float:left;width:150px" class="iceCols">
                                            <ul>
                                                <li id="iceMenu_336" class="iceMenuLiLevel_2 ">
                                                    <a href="/joomla_55599/index.php/pages/pricing" class=" iceMenuTitle ">
                                                        <span class="icemega_title icemega_nosubtitle">Pricing</span>
                                                    </a>
                                                </li>
                                                <li id="iceMenu_138" class="iceMenuLiLevel_2 ">
                                                    <a href="/joomla_55599/index.php/pages/faqs" class=" iceMenuTitle ">
                                                        <span class="icemega_title icemega_nosubtitle">FAQs</span>
                                                    </a>
                                                </li>
                                                <li id="iceMenu_136" class="iceMenuLiLevel_2 ">
                                                    <a href="/joomla_55599/index.php/pages/our-team" class=" iceMenuTitle ">
                                                        <span class="icemega_title icemega_nosubtitle">Our team</span>
                                                    </a>
                                                </li>
                                                <li id="iceMenu_135" class="iceMenuLiLevel_2 ">
                                                    <a href="/joomla_55599/index.php/pages/history" class=" iceMenuTitle ">
                                                        <span class="icemega_title icemega_nosubtitle">History</span>
                                                    </a>
                                                </li>
                                                <li id="iceMenu_137" class="iceMenuLiLevel_2 ">
                                                    <a href="/joomla_55599/index.php/pages/testimonials" class=" iceMenuTitle ">
                                                        <span class="icemega_title icemega_nosubtitle">Testimonials</span>
                                                    </a>
                                                </li>
                                                <li id="iceMenu_305" class="iceMenuLiLevel_2 ">
                                                    <a href="/joomla_55599/index.php/pages/site-map" class=" iceMenuTitle ">
                                                        <span class="icemega_title icemega_nosubtitle">Site map</span>
                                                    </a>
                                                </li>
                                                <li id="iceMenu_342" class="iceMenuLiLevel_2 ">
                                                    <a href="/joomla_55599/index.php/forum" class=" iceMenuTitle ">
                                                        <span class="icemega_title icemega_nosubtitle">Forum</span>
                                                    </a>
                                                </li>
                                                <li id="iceMenu_343" class="iceMenuLiLevel_2 ">
                                                    <a href="/joomla_55599/index.php/pages/careers" class=" iceMenuTitle ">
                                                        <span class="icemega_title icemega_nosubtitle">Careers</span>
                                                    </a>
                                                </li>
                                                <li id="iceMenu_283" class="iceMenuLiLevel_2 ">
                                                    <a href="/joomla_55599/index.php/pages/portfolio" class=" iceMenuTitle ">
                                                        <span class="icemega_title icemega_nosubtitle">Portfolio</span>
                                                    </a>
                                                </li>
                                                <li id="iceMenu_426" class="iceMenuLiLevel_2 ">
                                                    <a href="/joomla_55599/index.php/pages/elements" class=" iceMenuTitle ">
                                                        <span class="icemega_title icemega_nosubtitle">Elements</span>
                                                    </a>
                                                </li>
                                                <li id="iceMenu_171" class="iceMenuLiLevel_2 ">
                                                    <a href="/joomla_55599/index.php/template-settings" class=" iceMenuTitle ">
                                                        <span class="icemega_title icemega_nosubtitle">Template settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li id="iceMenu_285" class="iceMenuLiLevel_1 ">
                                <a href="/joomla_55599/index.php/blog" class=" iceMenuTitle ">
                                    <span class="icemega_title icemega_nosubtitle">Blog</span>
                                </a>
                            </li>
                            <li id="iceMenu_203" class="iceMenuLiLevel_1 gallery">
                                <a href="/joomla_55599/index.php/gallery" class=" iceMenuTitle ">
                                    <span class="icemega_title icemega_nosubtitle">Gallery</span>
                                </a>
                            </li>
                            <li id="iceMenu_142" class="iceMenuLiLevel_1 ">
                                <a href="/joomla_55599/index.php/contacts" class=" iceMenuTitle ">
                                    <span class="icemega_title icemega_nosubtitle">Contacts</span>
                                </a>
                            </li>
                            <li id="iceMenu_437" class="iceMenuLiLevel_1 mzr-drop parent menu-search">
                                <a href="#" class=" iceMenuTitle ">
                                    <span class="icemega_title icemega_nosubtitle">Search</span>
                                </a>
                                <ul class="icesubMenu icemodules sub_level_1" style="width:100%">
                                    <li>
                                        <div style="float:left;width:1" class="iceCols">
                                            <ul>
                                                <li id="iceMenu_477" class="iceMenuLiLevel_2 ">
                                                    <div class="icemega_cover_module" style="width:100%">
                                                        <div class="icemega_modulewrap top_search" style="width:auto; ">
                                                            <i class="fa fa-search"></i>
                                                            <div role="search" class="mod-search mod-search__top_search">
                                                                <form action="/joomla_55599/index.php" method="post" class="navbar-form">
                                                                    <label for="searchword" class="element-invisible">Search ...</label> <input id="searchword" name="searchword" maxlength="200"  class="inputbox mod-search_searchword" type="text" size="20" placeholder="Search ..." required> <button class="button btn btn-primary" onclick="this.form.searchword.focus();"><i class="fa fa-search"></i> </button>  	<input type="hidden" name="task" value="search">
                                                                    <input type="hidden" name="option" value="com_search">
                                                                    <input type="hidden" name="Itemid" value="101">
                                                                </form>
                                                                <i class="fa fa-times"></i>
                                                            </div></div>
                                                    </div></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>


                    <script type="text/javascript">
                        jQuery(document).ready(function(){
                            var browser_width1 = jQuery(window).width();
                            jQuery("#icemegamenu").find(".icesubMenu").each(function(index){
                                var offset1 = jQuery(this).offset();
                                var xwidth1 = offset1.left + jQuery(this).width();
                                if(xwidth1 >= browser_width1){
                                    jQuery(this).addClass("ice_righttoleft");
                                }
                            });

                        })
                        jQuery(window).resize(function() {
                            var browser_width = jQuery(window).width();
                            jQuery("#icemegamenu").find(".icesubMenu").removeClass("ice_righttoleft").each(function(index){
                                var offset = jQuery(this).offset();
                                var xwidth = offset.left + jQuery(this).width();
                                if(xwidth >= browser_width){
                                    jQuery(this).addClass("ice_righttoleft");
                                }
                            });
                        });
                    </script></div></nav>
            <div class="clearfix"></div>
        </div>
        <!-- Navigation -->
        <div id="navigation" role="navigation">
            <div class="moduletable slider"><div class="module_container"><div id="camera-slideshow_201" class="slider camera_wrap pattern_1">

                        <div class="camera-item" data-src="/assets/images/slider/slide-3.jpg">

                            <div class="camera_caption moveFromBottom">




                                <i class="fa fa-phone">+1 959 603 6035</i>
                                <p>Realizing the potential of the agriculture sector</p>
                                <!-- Read More link -->

                            </div>

                        </div>

                        <div class="camera-item" data-src="/assets/images/slider/slide-2.jpg">

                            <div class="camera_caption moveFromBottom">




                                <i class="fa fa-phone">+1 959 603 6035</i>
                                <p>Using innovative equipment to reduce time and energy in farming.</p>
                                <!-- Read More link -->

                            </div>

                        </div>

                        <div class="camera-item" data-src="/assets/images/slider/slide-1.jpg">

                            <div class="camera_caption moveFromBottom">




                                <i class="fa fa-phone">+1 959 603 6035</i>
                                <p>Implementing new technologies for agriculture growth. Call us now!</p>
                                <!-- Read More link -->

                            </div>

                        </div>
                    </div>
                    <script>
                        jQuery(function(){
                            jQuery('#camera-slideshow_201').camera({
                                alignment			: "topCenter", //topLeft, topCenter, topRight, centerLeft, center, centerRight, bottomLeft, bottomCenter, bottomRight
                                autoAdvance				: 1,	//true, false
                                mobileAutoAdvance	: 1, //true, false. Auto-advancing for mobile devices
                                barDirection			: "leftToRight",	//'leftToRight', 'rightToLeft', 'topToBottom', 'bottomToTop'
                                barPosition				: "bottom",	//'bottom', 'left', 'top', 'right'
                                cols							: 6,
                                easing						: "swing",	//for the complete list http://jqueryui.com/demos/effect/easing.html
                                mobileEasing			: "swing",	//leave empty if you want to display the same easing on mobile devices and on desktop etc.
                                fx								: "simpleFade",
                                mobileFx					: "simpleFade",		//leave empty if you want to display the same effect on mobile devices and on desktop etc.
                                gridDifference		: 250,	//to make the grid blocks slower than the slices, this value must be smaller than transPeriod
                                height						: "31.90243902439024%",	//here you can type pixels (for instance '300px'), a percentage (relative to the width of the slideshow, for instance '50%') or 'auto'
                                imagePath					: 'http://livedemo00.template-help.com/joomla_55599/templates/theme3175/images/',	//the path to the image folder (it serves for the blank.gif, when you want to display videos)
                                hover							: 1,	//true, false. Puase on state hover. Not available for mobile devices
                                loader						: "none",	//pie, bar, none (even if you choose "pie", old browsers like IE8- can't display it... they will display always a loading bar)
                                loaderColor				: "#eeeeee",
                                loaderBgColor			: "#222222",
                                loaderOpacity			: .8,	//0, .1, .2, .3, .4, .5, .6, .7, .8, .9, 1
                                loaderPadding			: 2,	//how many empty pixels you want to display between the loader and its background
                                loaderStroke			: 7,	//the thickness both of the pie loader and of the bar loader. Remember: for the pie, the loader thickness must be less than a half of the pie diameter
                                minHeight					: "480px",	//you can also leave it blank
                                navigation				: 0,	//true or false, to display or not the navigation buttons
                                navigationHover		: 0,	//if true the navigation button (prev, next and play/stop buttons) will be visible on hover state only, if false they will be 	visible always
                                mobileNavHover		: 0,	//same as above, but only for mobile devices
                                opacityOnGrid			: 0,	//true, false. Decide to apply a fade effect to blocks and slices: if your slideshow is fullscreen or simply big, I recommend to set it false to have a smoother effect
                                overlayer					: 0,	//a layer on the images to prevent the users grab them simply by clicking the right button of their mouse (.camera_overlayer)
                                pagination				: 1,
                                playPause					: 0,	//true or false, to display or not the play/pause buttons
                                pauseOnClick			: 0,	//true, false. It stops the slideshow when you click the sliders.
                                pieDiameter				: 38,
                                piePosition				: "rightTop",	//'rightTop', 'leftTop', 'leftBottom', 'rightBottom'
                                portrait					: 0, //true, false. Select true if you don't want that your images are cropped
                                rows							: 4,
                                slicedCols				: 6,	//if 0 the same value of cols
                                slicedRows				: 4,	//if 0 the same value of rows
                                // slideOn				: "",	//next, prev, random: decide if the transition effect will be applied to the current (prev) or the next slide
                                thumbnails				: 0,
                                time							: 7000,	//milliseconds between the end of the sliding effect and the start of the nex one
                                transPeriod				: 500	//lenght of the sliding effect in milliseconds
                                // onEndTransition		: function() {  },	//this callback is invoked when the transition effect ends
                                // onLoaded					: function() {  },	//this callback is invoked when the image on a slide has completely loaded
                                // onStartLoading		: function() {  },	//this callback is invoked when the image on a slide start loading
                                // onStartTransition	: function() {  }	//this callback is invoked when the transition effect starts
                            });
                        });
                    </script></div></div>
        </div>
        <!-- Showcase -->
        <div id="showcase">
            <div class="row-container">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="moduletable center double  span12"><div class="module_container"><header><h1 class="moduleTitle "><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">About</span> <span class="item_title_part_1 item_title_part_even item_title_part_first_half">Donald.</span> <span class="item_title_part_2 item_title_part_odd item_title_part_second_half item_title_part_last">Ag</span></h1></header><div class="mod-newsflash-adv about mod-newsflash-adv__center double cols-2" id="module_220">
                                    <div class="module_container"><header><h1 class="moduleTitle  visible-first heading-style-1"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">About</span> <span class="item_title_part_1 item_title_part_even item_title_part_first_half">Donald.</span> <span class="item_title_part_2 item_title_part_odd item_title_part_second_half item_title_part_last">Ag</span></h1></header><div class="mod-newsflash-adv about mod-newsflash-adv__center double cols-2" id="module_220">
                                            <div class="pretext">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.  </div>
                                            <div class="row-fluid">
                                                <article class="span6 item item_num0 item__module   visible-first" id="item_214">

                                                    <!-- Intro Image -->
                                                    <figure class="item_img img-intro img-intro__none">
                                                        <img src="/assets/images/icons/icon1.png" alt="">
                                                    </figure>

                                                    <div class="item_content">

                                                        <!-- Item title -->
                                                        <h3 class="item_title item_title__center double visible-first heading-style-3"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Perspiciatis</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">unde</span></h3>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et  architecto beatae vitae dicta sunt explicabo. 	</div>


                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>  </article>
                                                <article class="span6 item item_num1 item__module   visible-first" id="item_215">

                                                    <!-- Intro Image -->
                                                    <figure class="item_img img-intro img-intro__none">
                                                        <img src="/assets/images/icons/icon2.png" alt="">
                                                    </figure>

                                                    <div class="item_content">

                                                        <!-- Item title -->
                                                        <h3 class="item_title item_title__center double visible-first heading-style-3"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Voluptatem</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">accus</span></h3>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et  architecto beatae vitae dicta sunt explicabo. 	</div>


                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>  </article>
                                            </div><div class="row-fluid">  <article class="span6 item item_num2 item__module   visible-first" id="item_216">

                                                    <!-- Intro Image -->
                                                    <figure class="item_img img-intro img-intro__none">
                                                        <img src="/assets/images/icons/icon3.png" alt="">
                                                    </figure>

                                                    <div class="item_content">

                                                        <!-- Item title -->
                                                        <h3 class="item_title item_title__center double visible-first heading-style-3"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Omnis</span> <span class="item_title_part_1 item_title_part_even item_title_part_first_half">iste</span> <span class="item_title_part_2 item_title_part_odd item_title_part_second_half item_title_part_last">natus</span></h3>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et  architecto beatae vitae dicta sunt explicabo. 	</div>


                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>  </article>
                                                <article class="span6 item item_num3 item__module  lastItem visible-first" id="item_217">

                                                    <!-- Intro Image -->
                                                    <figure class="item_img img-intro img-intro__none">
                                                        <img src="/assets/images/icons/icon4.png" alt="">
                                                    </figure>

                                                    <div class="item_content">

                                                        <!-- Item title -->
                                                        <h3 class="item_title item_title__center double visible-first heading-style-3"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Laudantium,</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">totam</span></h3>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et  architecto beatae vitae dicta sunt explicabo. 	</div>


                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>  </article>
                                            </div>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                </div>
                            </div></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature -->
        <div id="feature">
            <div class="row-container">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="moduletable center team  span12"><div class="module_container"><header><h1 class="moduleTitle center"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Our</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">team</span></h1></header><div class="mod-newsflash-adv products mod-newsflash-adv__center team cols-4" id="module_171">
                                    <div class="module_container"><header><h1 class="moduleTitle center heading-style-1 visible-first"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Our</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">team</span></h1></header><div class="mod-newsflash-adv products mod-newsflash-adv__center team cols-4" id="module_171">
                                            <div class="pretext">
                                                Veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur  </div>
                                            <div class="row-fluid">
                                                <article class="span3 item item_num0 item__module   visible-first" id="item_41">

                                                    <!-- Intro Image -->
                                                    <figure class="item_img img-intro img-intro__none">
                                                        <img src="/assets/images/team/team-1.jpg" alt="">
                                                    </figure>

                                                    <div class="item_content">

                                                        <!-- Item title -->
                                                        <h4 class="item_title item_title__center team heading-style-4 visible-first"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Robert</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">Smith</span></h4>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            Accusantium doloremque laudantium, totam

                                                        </div>


                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>  </article>
                                                <article class="span3 item item_num1 item__module   visible-first" id="item_42">

                                                    <!-- Intro Image -->
                                                    <figure class="item_img img-intro img-intro__none">
                                                        <img src="/assets/images/team/team-2.jpg" alt="">
                                                    </figure>

                                                    <div class="item_content">

                                                        <!-- Item title -->
                                                        <h4 class="item_title item_title__center team heading-style-4 visible-first"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Albert</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">Frost</span></h4>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            Accusantium doloremque laudantium, totam

                                                        </div>


                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>  </article>
                                                <article class="span3 item item_num2 item__module   visible-first" id="item_43">

                                                    <!-- Intro Image -->
                                                    <figure class="item_img img-intro img-intro__none">
                                                        <img src="/assets/images/team/team-3.jpg" alt="">
                                                    </figure>

                                                    <div class="item_content">

                                                        <!-- Item title -->
                                                        <h4 class="item_title item_title__center team heading-style-4 visible-first"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Walter</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">White</span></h4>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            Accusantium doloremque laudantium, totam

                                                        </div>


                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>  </article>
                                                <article class="span3 item item_num3 item__module  lastItem visible-first" id="item_44">

                                                    <!-- Intro Image -->
                                                    <figure class="item_img img-intro img-intro__none">
                                                        <img src="/assets/images/team/team-4.jpg" alt="">
                                                    </figure>

                                                    <div class="item_content">

                                                        <!-- Item title -->
                                                        <h4 class="item_title item_title__center team heading-style-4 visible-first"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Hugo</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">Star</span></h4>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            Accusantium doloremque laudantium, totam

                                                        </div>


                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>  </article>
                                            </div>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                </div>
                            </div></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Maintop -->
        <div id="maintop">
            <div class="moduletable center"><div class="module_container"><div class="parallax parallax__center"
                                                                               data-url="/assets/images/parallax/bg_1.jpg"
                                                                               data-speed="0.8"
                                                                               data-direction="true"
                                                                               data-mobile="true"
                                                                               data-blur="false"
                    >

                        <div class="row-container">
                            <div class="container">
                                <div class="row">
                                    <div class="moduletablecenter span12">
                                        <h1 class="center"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">What</span> <span class="item_title_part_1 item_title_part_even item_title_part_first_half">We</span> <span class="item_title_part_2 item_title_part_odd item_title_part_second_half item_title_part_last">Do</span></h1>
                                        <div class="mod-newsflash-adv mod-newsflash-adv__center cols-4" id="module_136">
                                            <div class="row-fluid">
                                                <article class="span3 item item_num0 item__module  " id="item_210">

                                                    <div class="item_content">
                                                        <i class="fa fa-group"></i>
                                                        <!-- Item title -->
                                                        <h3 class="item_title item_title__center"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first item_title_part_last">Vestibulum</span></h3>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            voluptatem accusantium	</div>


                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>  </article>
                                                <article class="span3 item item_num1 item__module  " id="item_211">

                                                    <div class="item_content">
                                                        <i class="fa fa-bullhorn "></i>
                                                        <!-- Item title -->
                                                        <h3 class="item_title item_title__center"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first item_title_part_last">Libero</span></h3>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            voluptatem accusantium	</div>


                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>  </article>
                                                <article class="span3 item item_num2 item__module  " id="item_212">

                                                    <div class="item_content">
                                                        <i class="fa fa-flash "></i>
                                                        <!-- Item title -->
                                                        <h3 class="item_title item_title__center"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Porta</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">vel</span></h3>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            voluptatem accusantium	</div>


                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>  </article>
                                                <article class="span3 item item_num3 item__module  lastItem" id="item_213">

                                                    <div class="item_content">
                                                        <i class="fa fa-plane "></i>
                                                        <!-- Item title -->
                                                        <h3 class="item_title item_title__center"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first item_title_part_last">Vestibulum</span></h3>
                                                        <!-- Introtext -->
                                                        <div class="item_introtext">
                                                            voluptatem accusantium	</div>


                                                        <!-- Read More link -->
                                                    </div>
                                                    <div class="clearfix"></div>  </article>
                                            </div>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>
        </div>
        <!-- Main Content row -->
        <div id="content">
            <div class="row-container">
                <div class="container-fluid">
                    <div class="content-inner row-fluid">
                        <div id="component" class="span12">
                            <main role="main">
                                <div id="system-message-container">
                                </div>

                                <section class="page-category page-category__home">
                                </section>
                                <!-- Content-bottom -->
                                <div id="content-bottom" class="row-fluid">
                                    <div class="moduletable center  span12"><div class="module_container"><header><h1 class="moduleTitle "><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Our</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">Services</span></h1></header><div class="mod-newsflash-adv services mod-newsflash-adv__center cols-4" id="module_119">
                                                <div class="pretext">
                                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam  </div>
                                                <div class="row-fluid">
                                                    <article class="span3 item item_num0 item__module  " id="item_206">

                                                        <div class="item_content">
                                                            <!-- Item title -->
                                                            <h3 class="item_title item_title__center"><a href="/joomla_55599/index.php/77-our-services/206-quisque"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first item_title_part_last">Quisque</span></a></h3>
                                                            <!-- Introtext -->
                                                            <div class="item_introtext">
                                                                Architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit sed quia consequuntur	</div>


                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="clearfix"></div>  </article>
                                                    <article class="span3 item item_num1 item__module  " id="item_207">

                                                        <div class="item_content">
                                                            <!-- Item title -->
                                                            <h3 class="item_title item_title__center"><a href="/joomla_55599/index.php/77-our-services/207-nulla"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first item_title_part_last">Nulla</span></a></h3>
                                                            <!-- Introtext -->
                                                            <div class="item_introtext">
                                                                Architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit sed quia consequuntur	</div>


                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="clearfix"></div>  </article>
                                                    <article class="span3 item item_num2 item__module  " id="item_208">

                                                        <div class="item_content">
                                                            <!-- Item title -->
                                                            <h3 class="item_title item_title__center"><a href="/joomla_55599/index.php/77-our-services/208-vestibu"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first item_title_part_last">Vestibu</span></a></h3>
                                                            <!-- Introtext -->
                                                            <div class="item_introtext">
                                                                Architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit sed quia consequuntur	</div>


                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="clearfix"></div>  </article>
                                                    <article class="span3 item item_num3 item__module  lastItem" id="item_209">

                                                        <div class="item_content">
                                                            <!-- Item title -->
                                                            <h3 class="item_title item_title__center"><a href="/joomla_55599/index.php/77-our-services/209-porta-ve"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Porta</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">ve</span></a></h3>
                                                            <!-- Introtext -->
                                                            <div class="item_introtext">
                                                                Architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit sed quia consequuntur	</div>


                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="clearfix"></div>  </article>
                                                </div>
                                                <div class="clearfix"></div>

                                            </div>
                                        </div></div>
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mainbottom -->
        <div id="mainbottom-2">
            <div class="moduletable center"><div class="module_container"><header><h1 class="moduleTitle "><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Our</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">Products</span></h1></header>
                    <div class="pretext">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.  </div>

                    <ul class="nav nav-tabs" id="bootstrap_tabs_nav_213">
                        <li class="active"><a data-toggle="tab" href="#tab1-213">Lotus pro</a></li>
                        <li><a data-toggle="tab" href="#tab2-213">Protex</a></li>
                        <li><a data-toggle="tab" href="#tab3-213">Silvio co</a></li>
                        <li><a data-toggle="tab" href="#tab4-213">Zagreb ind</a></li>
                        <li><a data-toggle="tab" href="#tab5-213">Turner case</a></li>
                    </ul>

                    <div class="tab-content" id="bootstrap_tabs_content_213">
                        <div class="tab-pane fade active in" id="tab1-213">

                            <!-- Intro Image -->

                            <div class="item_content">






                                <!-- Introtext -->
                                <div class="item_introtext">		<div class="moduletable">
                                        <div class="mod_caroufredsel portfolio mod_caroufredsel__" id="module_91">
                                            <div id="list_carousel_91" class="list_carousel">

                                                <ul id="caroufredsel_91">
                                                    <li class="item" id="item_161">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category1/image1.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category1/image2.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_195">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category1/image3.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category1/image4.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_197">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category1/image5.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category1/image6.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_199">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category1/image7.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category1/image8.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                </ul>

                                            </div>


                                            <div id="carousel_91_pag" class="caroufredsel_pagination"></div>
                                            <div class="clearfix"></div>

                                        </div>

                                        <script>
                                            jQuery(function($) {
                                                var carousel = $("#caroufredsel_91")
                                                carousel.carouFredSel({
                                                    responsive	: true,
                                                    width: '100%',
                                                    items		: {
                                                        width : 513,
                                                        height: 'variable',
                                                        visible		: {
                                                            min			: 1,
                                                            max			: 4			},
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
                                                    swipe:{
                                                        onTouch: true
                                                    }
                                                });
                                                $(window).load(function(){
                                                    setTimeout(function(){
                                                        carousel.trigger('configuration', {reInit: true})
                                                    }, 100);
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>

                                <!-- Read More link -->
                            </div>

                            <div class="clearfix"></div>	</div>
                        <div class="tab-pane fade" id="tab2-213">

                            <!-- Intro Image -->

                            <div class="item_content">






                                <!-- Introtext -->
                                <div class="item_introtext">		<div class="moduletable">
                                        <div class="mod_caroufredsel portfolio mod_caroufredsel__" id="module_214">
                                            <div id="list_carousel_214" class="list_carousel">

                                                <ul id="caroufredsel_214">
                                                    <li class="item" id="item_189">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category2/image4.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category2/image6.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_192">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category2/image7.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category2/image5.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_162">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category2/image1.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category2/image8.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_188">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category2/image3.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category2/image2.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                </ul>

                                            </div>


                                            <div id="carousel_214_pag" class="caroufredsel_pagination"></div>
                                            <div class="clearfix"></div>

                                        </div>

                                        <script>
                                            jQuery(function($) {
                                                var carousel = $("#caroufredsel_214")
                                                carousel.carouFredSel({
                                                    responsive	: true,
                                                    width: '100%',
                                                    items		: {
                                                        width : 513,
                                                        height: 'variable',
                                                        visible		: {
                                                            min			: 1,
                                                            max			: 4			},
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
                                                    swipe:{
                                                        onTouch: true
                                                    }
                                                });
                                                $(window).load(function(){
                                                    setTimeout(function(){
                                                        carousel.trigger('configuration', {reInit: true})
                                                    }, 100);
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>

                                <!-- Read More link -->
                            </div>

                            <div class="clearfix"></div>	</div>
                        <div class="tab-pane fade" id="tab3-213">

                            <!-- Intro Image -->

                            <div class="item_content">






                                <!-- Introtext -->
                                <div class="item_introtext">		<div class="moduletable">
                                        <div class="mod_caroufredsel portfolio mod_caroufredsel__" id="module_215">
                                            <div id="list_carousel_215" class="list_carousel">

                                                <ul id="caroufredsel_215">
                                                    <li class="item" id="item_181">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category3/image3.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category3/image8.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_182">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category3/image4.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category3/image7.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_183">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category3/image5.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category3/image2.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_184">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category3/image6.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category3/image1.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                </ul>

                                            </div>


                                            <div id="carousel_215_pag" class="caroufredsel_pagination"></div>
                                            <div class="clearfix"></div>

                                        </div>

                                        <script>
                                            jQuery(function($) {
                                                var carousel = $("#caroufredsel_215")
                                                carousel.carouFredSel({
                                                    responsive	: true,
                                                    width: '100%',
                                                    items		: {
                                                        width : 513,
                                                        height: 'variable',
                                                        visible		: {
                                                            min			: 1,
                                                            max			: 4			},
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
                                                    swipe:{
                                                        onTouch: true
                                                    }
                                                });
                                                $(window).load(function(){
                                                    setTimeout(function(){
                                                        carousel.trigger('configuration', {reInit: true})
                                                    }, 100);
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>

                                <!-- Read More link -->
                            </div>

                            <div class="clearfix"></div>	</div>
                        <div class="tab-pane fade" id="tab4-213">

                            <!-- Intro Image -->

                            <div class="item_content">






                                <!-- Introtext -->
                                <div class="item_introtext">		<div class="moduletable">
                                        <div class="mod_caroufredsel portfolio mod_caroufredsel__" id="module_216">
                                            <div id="list_carousel_216" class="list_carousel">

                                                <ul id="caroufredsel_216">
                                                    <li class="item" id="item_178">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category4/image7.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category4/image5.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_174">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category4/image3.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category4/image6.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_175">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category4/image4.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category4/image2.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_179">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category4/image8.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category4/image1.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                </ul>

                                            </div>


                                            <div id="carousel_216_pag" class="caroufredsel_pagination"></div>
                                            <div class="clearfix"></div>

                                        </div>

                                        <script>
                                            jQuery(function($) {
                                                var carousel = $("#caroufredsel_216")
                                                carousel.carouFredSel({
                                                    responsive	: true,
                                                    width: '100%',
                                                    items		: {
                                                        width : 513,
                                                        height: 'variable',
                                                        visible		: {
                                                            min			: 1,
                                                            max			: 4			},
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
                                                    swipe:{
                                                        onTouch: true
                                                    }
                                                });
                                                $(window).load(function(){
                                                    setTimeout(function(){
                                                        carousel.trigger('configuration', {reInit: true})
                                                    }, 100);
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>

                                <!-- Read More link -->
                            </div>

                            <div class="clearfix"></div>	</div>
                        <div class="tab-pane fade" id="tab5-213">

                            <!-- Intro Image -->

                            <div class="item_content">






                                <!-- Introtext -->
                                <div class="item_introtext">		<div class="moduletable">
                                        <div class="mod_caroufredsel portfolio mod_caroufredsel__" id="module_217">
                                            <div id="list_carousel_217" class="list_carousel">

                                                <ul id="caroufredsel_217">
                                                    <li class="item" id="item_171">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category5/image7.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category5/image4.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_172">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category5/image8.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category5/image6.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_167">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category5/image3.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category5/image1.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                    <li class="item" id="item_169">
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category5/image5.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="item_content"><!-- Intro Image -->
                                                            <figure class="item_img img-intro img-intro__none">
                                                                <img src="/assets/images/portfolio/category5/image2.jpg" alt="">
                                                                <figcaption>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus. </figcaption>
                                                            </figure>

                                                            <!-- Read More link -->
                                                        </div>
                                                </ul>

                                            </div>


                                            <div id="carousel_217_pag" class="caroufredsel_pagination"></div>
                                            <div class="clearfix"></div>

                                        </div>

                                        <script>
                                            jQuery(function($) {
                                                var carousel = $("#caroufredsel_217")
                                                carousel.carouFredSel({
                                                    responsive	: true,
                                                    width: '100%',
                                                    items		: {
                                                        width : 513,
                                                        height: 'variable',
                                                        visible		: {
                                                            min			: 1,
                                                            max			: 4			},
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
                                                    swipe:{
                                                        onTouch: true
                                                    }
                                                });
                                                $(window).load(function(){
                                                    setTimeout(function(){
                                                        carousel.trigger('configuration', {reInit: true})
                                                    }, 100);
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>

                                <!-- Read More link -->
                            </div>

                            <div class="clearfix"></div>	</div>
                    </div>

                    <div class="clearfix"></div></div></div>
        </div>
        <!-- Mainbottom -->
        <div id="mainbottom-3">
            <div class="row-container">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="moduletable   span12"><div class="module_container"><div class="mod-newsflash-adv testimonials mod-newsflash-adv__ cols-1" id="module_218">
                                    <div class="row-fluid">
                                        <article class="span12 item item_num0 item__module  lastItem" id="item_50">

                                            <div class="item_content">

                                                <!-- Intro Image -->
                                                <figure class="item_img img-intro img-intro__left">
                                                    <img src="/assets/images/testimonials/testimonials-1.jpg" alt="">
                                                </figure>

                                                <div class="item_indent">

                                                    <!-- Introtext -->
                                                    <div class="item_introtext">
                                                        <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus unum. Defacto lingo est igpay atinlay. Marquee selectus non provisio incongruous feline nolo contendre. Gratuitous octopus niacin, sodium glutimate. Quote meon an estimate et non interruptus stadium.</p>		</div>

                                                    <!-- Item title -->
                                                    <h4 class="item_title item_title__"><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Antonio</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">Brightman</span></h4>

                                                    <figcaption>Tornton Industries</figcaption>


                                                    <!-- Read More link -->

                                                </div>

                                            </div>
                                            <div class="clearfix"></div>  </article>
                                    </div>
                                    <div class="clearfix"></div>

                                </div>
                            </div></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mainbottom -->
        <div id="mainbottom-4">
            <div class="row-container">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="moduletable   span12"><div class="module_container"><div class="mod-menu">
                                    <ul class="menu table">
                                        <li class="item-495">
                                            <a href="#" ><img src="/assets/images/partners/img1.jpg" alt="Partner #1" /></a>
                                        </li>
                                        <li class="item-496">
                                            <a href="#" ><img src="/assets/images/partners/img2.jpg" alt="Partner #2" /></a>
                                        </li>
                                        <li class="item-497">
                                            <a href="#" ><img src="/assets/images/partners/img3.jpg" alt="Partner #3" /></a>
                                        </li>
                                        <li class="item-498">
                                            <a href="#" ><img src="/assets/images/partners/img4.jpg" alt="Partner #4" /></a>
                                        </li>
                                        <li class="item-499">
                                            <a href="#" ><img src="/assets/images/partners/img5.jpg" alt="Partner #5" /></a>
                                        </li>
                                        <li class="item-500">
                                            <a href="#" ><img src="/assets/images/partners/img6.jpg" alt="Partner #6" /></a>
                                        </li>
                                        <li class="item-501">
                                            <a href="#" ><img src="/assets/images/partners/img7.jpg" alt="Partner #7" /></a>
                                        </li>
                                        <li class="item-502">
                                            <a href="#" ><img src="/assets/images/partners/img8.jpg" alt="Partner #8" /></a>
                                        </li>
                                    </ul>
                                </div></div></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom -->
        <div id="bottom">
            <div class="row-container">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="moduletable address  span6"><div class="module_container"><header><h3 class="moduleTitle "><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Get</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">started</span></h3></header><div class="mod-article-single mod-article-single__address" id="module_210">
                                    <div class="pretext">
                                        Epsum factorial non deposit quid pro quo hic escorol. Olypian  quarrels et gorilla congolium.  </div>
                                    <div class="item__module" id="item_156">

                                        <!-- Intro Text -->
                                        <div class="item_introtext">
                                            <span class="text">Have a project? drop us a line</span>

                                            8901 Marmora Road<br />
                                            Glasgow, DO4 89GR.<br />
                                            <span>Freephone:</span>+1 800 559 6580<br />
                                            <span>Telephone:</span>+1 959 603 6035
                                            <p><span>FAX:</span>+ 1 504 889 9898</p>

                                            <p>E-mail: <a href="/cdn-cgi/l/email-protection#c6aba7afaa86a2a3aba9aaafa8ade8a9b4a1"><span class="__cf_email__" data-cfemail="f598949c99b59190989a999c9b9edb9a8792">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></p>		</div>
                                    </div>
                                </div></div></div><div class="moduletable indent  span6"><div class="module_container"><div id="contact_209">
                                    <form class="mod_tm_ajax_contact_form" id="contact-form_209" novalidate>
                                        <input type="hidden" id="module_id" name="module_id" value="209">
                                        <div class="mod_tm_ajax_contact_form_message" id="message_209">
                                            <span class="s">Thank You! Your message has been sent.</span>
                                            <span class="e">Something went wrong, please try again later.</span>
                                            <span class="c">Please enter a correct Captcha answer.</span>
                                        </div>
                                        <fieldset>
                                            <div class="row-fluid">
                                                <div class="control-group control-group-input span12"><div class="controls"><input type="text" placeholder="Full Name" name="name" id="name_0" class="mod_tm_ajax_contact_form_text hasTooltip" required title="Full Name"></div>
                                                </div><div class="control-group control-group-input span12"><div class="controls"><input type="email" placeholder="Email" name="email" id="email_1" class="mod_tm_ajax_contact_form_email hasTooltip" required title="Email"></div>
                                                </div><div class="control-group control-group-input span12"><div class="controls"><input type="text" placeholder="Phone" name="phone" id="phone_2" class="mod_tm_ajax_contact_form_text hasTooltip" title="Phone"></div>
                                                </div><div class="control-group control-group-input span12"><div class="controls"><textarea name="message" placeholder="Message" id="message_3" class="mod_tm_ajax_contact_form_textarea hasTooltip" required title="Message"></textarea></div>
                                                </div>				<!-- Submit Button -->
                                                <div class="control-group control-group-button span12">
                                                    <div class="controls">
                                                        <button type="submit" class="btn btn-primary mod_tm_ajax_contact_form_btn">Send</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="push"></div>
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
                            <span class="copy">&copy;</span>                                        <span class="year">2016</span>                                                                                                                        <span class="copy">All rights reserved.</span>                                    </div>
                        <!-- {%FOOTER_LINK} -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div id="footer">
            <section class="moduletable map"><div class="module_container"><div class="mod-article-single mod-article-single__map" id="module_89">
                        <div class="item__module" id="item_155">

                            <!-- Intro Text -->
                            <div class="item_introtext">
                                <div class="map_wrapper">
                                    <!-- Plugin Google Maps version 3.2 by Mike Reumer --><!-- fail nicely if the browser has no Javascript -->
                                    <noscript><blockquote class='warning'><p><b>JavaScript must be enabled in order for you to use Google Maps.</b> <br/>However, it seems JavaScript is either disabled or not supported by your browser. <br/>To view Google Maps, enable JavaScript by changing your browser options, and then try again.</p></blockquote></noscript><div id='mapbody8_oktdx_0' style="display: none; text-align:center"><div id="googlemap8_oktdx_0" class="map" style="margin-right: auto; margin-left: auto; width:100%; height:460px;"></div></div>
                                    <img src='/assets/images/marker.png' style='display:none' alt='icon' />
                                    <script type='text/javascript'>/*<![CDATA[*/
                                        var mapconfig8_oktdx_0 = {"debug":"0","visualrefresh":"1","show":"1","mapclass":"","loadmootools":"0","timeinterval":"500","googlewebsite":"maps.google.com","align":"center","width":"100%","height":"460px","effect":"none","deflatitude":"40.749032","deflongitude":"-73.937254","centerlat":"","centerlon":"","address":"","latitudeid":"","latitudedesc":"1","latitudecoord":"0","latitudeform":"0","controltype":"UI","zoomtype":"None","svcontrol":"1","returncontrol":"0","zoom":"11","corzoom":"0","minzoom":"0","maxzoom":"19","rotation":"1","zoomnew":"0","zoomwheel":"0","keyboard":"0","maptype":"Normal","showmaptype":"1","shownormalmaptype":"1","showsatellitemaptype":"1","showhybridmaptype":"1","showterrainmaptype":"1","showearthmaptype":"1","showscale":"0","overview":"0","draggable":"false","marker":"1","traffic":"0","transit":"0","bicycle":"0","panoramio":"0","panominzoom":"none","panomaxzoom":"none","pano_userid":"","pano_tag":"","weather":"0","weathercloud":"0","weatherinfo":"1","weathertempunit":"celsius","weatherwindunit":"km","dir":"0","dirtype":"D","formdirtype":"0","avoidhighways":"0","avoidtoll":"0","diroptimize":"0","diralternatives":"0","showdir":"1","animdir":"0","animspeed":"1","animautostart":"0","animunit":"kilometers","formspeed":"0","formaddress":"0","formdir":"0","autocompl":"both","txtdir":"Directions: ","txtgetdir":"Get Directions","txtfrom":"From here","txtto":"To here","txtdiraddr":"Address: ","txt_driving":"","txt_avhighways":"","txt_avtoll":"","txt_walking":"","txt_bicycle":"","txt_transit":"","txt_optimize":"","txt_alternatives":"","dirdefault":"0","gotoaddr":"0","gotoaddrzoom":"0","txtaddr":"Address: ##","erraddr":"Address ## not found!","txtgotoaddr":"Goto","clientgeotype":"google","lightbox":"0","txtlightbox":"Open lightbox","lbxcaption":"","lbxwidth":"1600px","lbxheight":"800px","lbxcenterlat":"","lbxcenterlon":"","lbxzoom":"","sv":"none","svpano":"","svwidth":"100%","svheight":"300px","svautorotate":"0","svaddress":"1","kmlrenderer":"google","kmlsidebar":"none","kmlsbwidth":"200px","kmllightbox":"0","kmlhighlite":"{ \"color\": \"#aaffff\", \"opacity\": 0.3,  \"textcolor\": \"#000000\" }","proxy":"0","tilelayer":"","tilemethod":"","tileopacity":"1","tilebounds":"","tileminzoom":"0","tilemaxzoom":"19","twittername":"","twittertweets":"15","twittericon":"\/media\/plugin_googlemap3\/site\/Twitter\/twitter_map_icon.png","twitterline":"#ff0000ff","twitterlinewidth":"4","twitterstartloc":"0,0,0","lang":"en-GB","mapType":"normal","geocoded":0,"tolat":"","tolon":"","toaddress":"","description":"","tooltip":"","kml":[],"kmlsb":[],"layer":[],"camera":[],"searchtext":"","latitude":"40.749032","longitude":"-73.937254","waypoints":[],"mapnm":"8_oktdx_0","descr":"0","geoxmloptions":{"titlestyle":" class=kmlinfoheader ","descstyle":" class=kmlinfodesc ","veryquiet":true,"quiet":true,"iwmethod":"click","sortbyname":null,"linktarget":"_self","linkmethod":"dblclick","hilite":{"color":"#aaffff","opacity":0.3,"textcolor":"#000000"},"baseicon":"A","lang":{"txtdir":"Directions: ","txtto":"To here","txtfrom":"From here","txtsrchnrby":"Search nearby","txtzoomhere":"Zoom Here","txtaddrstart":"Start address:","txtgetdir":"Go","txtback":"\u00ab Back","txtsearchnearby":"Search nearby: e.g. pizza","txtsearch":"Go"},"inputsize":"25"},"markericon":[{"name":"A","imageurl":"http:\/\/livedemo00.template-help.com\/joomla_55599\/images\/marker.png","iconwidth":"","iconheight":"","iconshadow":"","iconshadowwidth":"","iconshadowheight":"","iconanchorx":"","iconanchory":"","iconimagemap":"13,0,15,1,16,2,17,3,18,4,18,5,19,6,19,7,19,8,19,9,19,10,19,11,19,12,19,13,18,14,18,15,17,16,16,17,15,18,14,19,14,20,13,21,13,22,12,23,12,24,12,25,12,26,11,27,11,28,11,29,11,30,11,31,11,32,11,33,8,33,8,32,8,31,8,30,8,29,8,28,8,27,8,26,7,25,7,24,7,23,6,22,6,21,5,20,5,19,4,18,3,17,2,16,1,15,1,14,0,13,0,12,0,11,0,10,0,9,0,8,0,7,0,6,1,5,1,4,2,3,3,2,4,1,6,0,13,0"}],"icontype":"A","earthoptions":{"timeout":"300","borders":true,"buildings":false,"roads":false,"terrain":false,"lookat":[],"camera":[]}};
                                        var mapstyled8_oktdx_0 = [
                                            {
                                                "featureType": "water",
                                                "elementType": "geometry",
                                                "stylers": [
                                                    { "visibility": "on" },
                                                    { "color": "#cde0fd" }
                                                ]
                                            },
                                            {
                                                "featureType": "landscape",
                                                "elementType": "geometry",
                                                "stylers": [
                                                    { "visibility": "on" },
                                                    { "color": "#e8e7e3" }
                                                ]
                                            },
                                            {
                                                "featureType": "road.highway",
                                                "elementType": "geometry",
                                                "stylers": [
                                                    { "visibility": "on" },
                                                    { "color": "#bababa" }
                                                ]
                                            },
                                            {
                                                "featureType": "landscape.natural",
                                                "elementType": "geometry",
                                                "stylers": [
                                                    { "color": "#f8f8f6" }
                                                ]
                                            },
                                            {
                                                "featureType": "poi",
                                                "elementType": "geometry",
                                                "stylers": [
                                                    { "visibility": "off" }
                                                ]
                                            },
                                            {
                                                "featureType": "road.highway",
                                                "elementType": "labels",
                                                "stylers": [
                                                    { "lightness": 19 },
                                                    { "saturation": -100 }
                                                ]
                                            },
                                            {
                                                "featureType": "transit.station",
                                                "stylers": [
                                                    { "visibility": "off" }
                                                ]
                                            }
                                        ];
                                        var googlemap8_oktdx_0 = new GoogleMaps('8_oktdx_0', mapconfig8_oktdx_0, mapstyled8_oktdx_0);
                                        /*]]>*/</script></div>		</div>
                        </div>
                    </div></div></section>
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
        <div class="moduletable login_megamenu login_shell"><div class="modal-body">

                <!--h4 class="">Login or register</h4-->
                <form action="/joomla_55599/index.php" method="post" id="login-form">
                    <div class="lr_social_login_basic_150">
                        <div class="lr_providers">
                            <div class="lr_icons_box"><div>
                                    <a class="lr_providericons lr_facebook" href="javascript:void(0);" onclick="javascript:window.open();" rel="nofollow" title="Login with Facebook">Login with Facebook</a>
                                </div><div>
                                    <a class="lr_providericons lr_google" href="javascript:void(0);" onclick="javascript:window.open();" rel="nofollow" title="Login with Google +">Login with Google +</a>
                                </div></div>
                        </div>
                    </div>    <div class="mod-login_userdata">
                        <div id="form-login-username" class="control-group">
                            <div class="controls">
                                <div class="input-prepend">
              <span class="add-on">
                <span class="fa fa-user hasTooltip" title="Username"></span>
                <label for="modlgn-username" class="element-invisible">Username</label>
              </span>
                                    <input id="modlgn-username" type="text" name="username" class="input-small" tabindex="0" size="18" placeholder="Username" required />
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
                                    <input id="modlgn-passwd" type="password" name="password" class="input-small" tabindex="0" size="18" placeholder="Password" required />
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="e1c83ba183cf791f5aa455829e869caf" value="1" />              <label for="mod-login_remember198" class="checkbox">
                            <input id="mod-login_remember198" class="mod-login_remember" type="checkbox" name="remember" value="yes">
                            Remember me        </label>
                        <div class="mod-login_submit">
                            <button type="submit" tabindex="3" name="Submit" class="btn btn-primary">Login</button>
                        </div>
                        <input type="hidden" name="option" value="com_users">
                        <input type="hidden" name="task" value="user.login">
                        <input type="hidden" name="return" value="aW5kZXgucGhwP0l0ZW1pZD0xMDE=">
                        <div class="reset_remind">
                            Forgot        <a href="/joomla_55599/index.php/username-reminder-request" class="hasTooltip">username</a>/
                            <a href="/joomla_55599/index.php/password-reset" class="hasTooltip">password</a>?
                        </div>
                    </div>
                </form>
            </div></div>
    </div>
</div>
<div id="style_switcher" class="hidden">
    <div class="toggler"></div>
    <p>The customization tool allows you to make color changes in your theme.</p>
    <ul id="color-box">
        <li class="active"><div class="color_scheme color_scheme_1" data-scheme="color_scheme_1">&nbsp;</div></li>
        <li><div class="color_scheme color_scheme_2" data-scheme="color_scheme_2">&nbsp;</div></li>
        <li><div class="color_scheme color_scheme_3" data-scheme="color_scheme_3">&nbsp;</div></li>
        <li><div class="color_scheme color_scheme_4" data-scheme="color_scheme_4">&nbsp;</div></li>
    </ul>
</div>

<div id="fixed-sidebar-right">
    <div class="moduletable " id="module_181">
    </div>



    {{--<script src="/joomla_55599/templates/theme3175/js/scripts.js"></script>--}}
