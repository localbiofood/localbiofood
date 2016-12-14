<nav class="moduletable home_menu pull-right"><div class="module_container">
        <div class="icemegamenu">
            <ul id="icemegamenu">

                <li id="iceMenu_285" class="iceMenuLiLevel_1 ">
                    <a href="/" class=" iceMenuTitle ">
                        <span class="icemega_title icemega_nosubtitle">Home</span>
                    </a>
                </li>


                @if (Auth::check())
                    <li id="iceMenu_285" class="iceMenuLiLevel_1 ">
                        <a href="{{ url('/logout') }}" class="iceMenuTitle"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="icemega_title icemega_nosubtitle">Izlogoties</span>

                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @else
                    <li id="iceMenu_285" class="iceMenuLiLevel_1 ">
                        <a href="/register" class=" iceMenuTitle ">
                            <span class="icemega_title icemega_nosubtitle">Reģistrēties</span>
                        </a>
                    </li>

                    <li id="iceMenu_285" class="iceMenuLiLevel_1 ">
                        <a href="/login" class=" iceMenuTitle ">
                            <span class="icemega_title icemega_nosubtitle">Ielogoties</span>
                        </a>
                    </li>
                @endif
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
