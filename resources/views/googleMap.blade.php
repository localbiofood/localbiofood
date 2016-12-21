@extends('layouts.app')

@section('googleMap')
    <div id="startpageMap"></div>
@endsection

@section('googleMap2')
    <div id="footer">
        <section class="moduletable map">
            <div class="module_container">
                <div class="mod-article-single mod-article-single__map" id="module_89">
                    <div class="item__module visible-first" id="item_155">

                        <div class="item_introtext">
                            <div class="map_wrapper">

                                <noscript>&lt;blockquote class='warning'&gt;&lt;p&gt;&lt;b&gt;JavaScript must be enabled in order for you to use Google Maps.&lt;/b&gt; &lt;br/&gt;However, it seems JavaScript is either disabled or not supported by your browser. &lt;br/&gt;To view Google Maps, enable JavaScript by changing your browser options, and then try again.&lt;/p&gt;&lt;/blockquote&gt;</noscript>
                                <div id="mapbody8_snl4g_0" style="display: block; text-align: center;">
                                    <div id="googlemap8_snl4g_0"
                                         class="map"
                                         style="margin-right: auto; margin-left: auto; width: 100%; height: 460px; position: relative; overflow: hidden;"
                                         oldvalue="1828"
                                         refreshmap="1">
                                        <div style="height: 100%; width: 100%; position: absolute; background-color: rgb(229, 227, 223);">
                                            <div class="gm-style"
                                                 style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;">
                                                <div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;">
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                <div aria-hidden="true"
                                                                     style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 561px; top: 58px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 817px; top: 58px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 817px; top: -198px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 561px; top: -198px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 561px; top: 314px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 817px; top: 314px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 305px; top: 58px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 305px; top: 314px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 305px; top: -198px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 49px; top: 58px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 49px; top: 314px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: 49px; top: -198px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: -207px; top: 58px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: -207px; top: 314px;"></div>
                                                                    <div style="width: 256px; height: 256px; position: absolute; left: -207px; top: -198px;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                                <div aria-hidden="true"
                                                                     style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 561px; top: 58px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 817px; top: 58px;">
                                                                        <canvas draggable="false"
                                                                                height="256"
                                                                                width="256"
                                                                                style="user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas>
                                                                    </div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 817px; top: -198px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 561px; top: -198px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 561px; top: 314px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 817px; top: 314px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 305px; top: 58px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 305px; top: 314px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 305px; top: -198px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 49px; top: 58px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 49px; top: 314px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 49px; top: -198px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -207px; top: 58px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -207px; top: 314px;"></div>
                                                                    <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -207px; top: -198px;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                            <div aria-hidden="true"
                                                                 style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                                <div style="position: absolute; left: 561px; top: 58px; transition: opacity 200ms ease-out;">
                                                                    <img src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i11!2i602!3i769!4i256!2m3!1e0!2sm!3i369047163!3m14!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC52Om9ufHAuYzojZmZjZGUwZmQscy50OjV8cy5lOmd8cC52Om9ufHAuYzojZmZlOGU3ZTMscy50OjQ5fHMuZTpnfHAudjpvbnxwLmM6I2ZmYmFiYWJhLHMudDo4MnxzLmU6Z3xwLmM6I2ZmZjhmOGY2LHMudDoyfHMuZTpnfHAudjpvZmYscy50OjQ5fHMuZTpsfHAubDoxOXxwLnM6LTEwMCxzLnQ6NjZ8cC52Om9mZg!4e0&amp;token=70224"
                                                                         draggable="false"
                                                                         alt=""
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                                <div style="position: absolute; left: 817px; top: 58px; transition: opacity 200ms ease-out;">
                                                                    <img src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i11!2i603!3i769!4i256!2m3!1e0!2sm!3i369047163!3m14!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC52Om9ufHAuYzojZmZjZGUwZmQscy50OjV8cy5lOmd8cC52Om9ufHAuYzojZmZlOGU3ZTMscy50OjQ5fHMuZTpnfHAudjpvbnxwLmM6I2ZmYmFiYWJhLHMudDo4MnxzLmU6Z3xwLmM6I2ZmZjhmOGY2LHMudDoyfHMuZTpnfHAudjpvZmYscy50OjQ5fHMuZTpsfHAubDoxOXxwLnM6LTEwMCxzLnQ6NjZ8cC52Om9mZg!4e0&amp;token=105173"
                                                                         draggable="false"
                                                                         alt=""
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                                <div style="position: absolute; left: 817px; top: -198px; transition: opacity 200ms ease-out;">
                                                                    <img src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i11!2i603!3i768!4i256!2m3!1e0!2sm!3i369047175!3m14!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC52Om9ufHAuYzojZmZjZGUwZmQscy50OjV8cy5lOmd8cC52Om9ufHAuYzojZmZlOGU3ZTMscy50OjQ5fHMuZTpnfHAudjpvbnxwLmM6I2ZmYmFiYWJhLHMudDo4MnxzLmU6Z3xwLmM6I2ZmZjhmOGY2LHMudDoyfHMuZTpnfHAudjpvZmYscy50OjQ5fHMuZTpsfHAubDoxOXxwLnM6LTEwMCxzLnQ6NjZ8cC52Om9mZg!4e0&amp;token=102014"
                                                                         draggable="false"
                                                                         alt=""
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                                <div style="position: absolute; left: 561px; top: -198px; transition: opacity 200ms ease-out;">
                                                                    <img src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i11!2i602!3i768!4i256!2m3!1e0!2sm!3i369047175!3m14!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC52Om9ufHAuYzojZmZjZGUwZmQscy50OjV8cy5lOmd8cC52Om9ufHAuYzojZmZlOGU3ZTMscy50OjQ5fHMuZTpnfHAudjpvbnxwLmM6I2ZmYmFiYWJhLHMudDo4MnxzLmU6Z3xwLmM6I2ZmZjhmOGY2LHMudDoyfHMuZTpnfHAudjpvZmYscy50OjQ5fHMuZTpsfHAubDoxOXxwLnM6LTEwMCxzLnQ6NjZ8cC52Om9mZg!4e0&amp;token=67065"
                                                                         draggable="false"
                                                                         alt=""
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                                <div style="position: absolute; left: 561px; top: 314px; transition: opacity 200ms ease-out;">
                                                                    <img src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i11!2i602!3i770!4i256!2m3!1e0!2sm!3i369047163!3m14!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC52Om9ufHAuYzojZmZjZGUwZmQscy50OjV8cy5lOmd8cC52Om9ufHAuYzojZmZlOGU3ZTMscy50OjQ5fHMuZTpnfHAudjpvbnxwLmM6I2ZmYmFiYWJhLHMudDo4MnxzLmU6Z3xwLmM6I2ZmZjhmOGY2LHMudDoyfHMuZTpnfHAudjpvZmYscy50OjQ5fHMuZTpsfHAubDoxOXxwLnM6LTEwMCxzLnQ6NjZ8cC52Om9mZg!4e0&amp;token=74471"
                                                                         draggable="false"
                                                                         alt=""
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                                <div style="position: absolute; left: 817px; top: 314px; transition: opacity 200ms ease-out;">
                                                                    <img src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i11!2i603!3i770!4i256!2m3!1e0!2sm!3i369047163!3m14!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC52Om9ufHAuYzojZmZjZGUwZmQscy50OjV8cy5lOmd8cC52Om9ufHAuYzojZmZlOGU3ZTMscy50OjQ5fHMuZTpnfHAudjpvbnxwLmM6I2ZmYmFiYWJhLHMudDo4MnxzLmU6Z3xwLmM6I2ZmZjhmOGY2LHMudDoyfHMuZTpnfHAudjpvZmYscy50OjQ5fHMuZTpsfHAubDoxOXxwLnM6LTEwMCxzLnQ6NjZ8cC52Om9mZg!4e0&amp;token=109420"
                                                                         draggable="false"
                                                                         alt=""
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                                <div style="position: absolute; left: 305px; top: 58px; transition: opacity 200ms ease-out;">
                                                                    <img src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i11!2i601!3i769!4i256!2m3!1e0!2sm!3i369047163!3m14!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC52Om9ufHAuYzojZmZjZGUwZmQscy50OjV8cy5lOmd8cC52Om9ufHAuYzojZmZlOGU3ZTMscy50OjQ5fHMuZTpnfHAudjpvbnxwLmM6I2ZmYmFiYWJhLHMudDo4MnxzLmU6Z3xwLmM6I2ZmZjhmOGY2LHMudDoyfHMuZTpnfHAudjpvZmYscy50OjQ5fHMuZTpsfHAubDoxOXxwLnM6LTEwMCxzLnQ6NjZ8cC52Om9mZg!4e0&amp;token=35275"
                                                                         draggable="false"
                                                                         alt=""
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                                <div style="position: absolute; left: 305px; top: 314px; transition: opacity 200ms ease-out;">
                                                                    <img src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i11!2i601!3i770!4i256!2m3!1e0!2sm!3i369047163!3m14!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC52Om9ufHAuYzojZmZjZGUwZmQscy50OjV8cy5lOmd8cC52Om9ufHAuYzojZmZlOGU3ZTMscy50OjQ5fHMuZTpnfHAudjpvbnxwLmM6I2ZmYmFiYWJhLHMudDo4MnxzLmU6Z3xwLmM6I2ZmZjhmOGY2LHMudDoyfHMuZTpnfHAudjpvZmYscy50OjQ5fHMuZTpsfHAubDoxOXxwLnM6LTEwMCxzLnQ6NjZ8cC52Om9mZg!4e0&amp;token=39522"
                                                                         draggable="false"
                                                                         alt=""
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                                <div style="position: absolute; left: 305px; top: -198px; transition: opacity 200ms ease-out;">
                                                                    <img src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i11!2i601!3i768!4i256!2m3!1e0!2sm!3i369047175!3m14!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC52Om9ufHAuYzojZmZjZGUwZmQscy50OjV8cy5lOmd8cC52Om9ufHAuYzojZmZlOGU3ZTMscy50OjQ5fHMuZTpnfHAudjpvbnxwLmM6I2ZmYmFiYWJhLHMudDo4MnxzLmU6Z3xwLmM6I2ZmZjhmOGY2LHMudDoyfHMuZTpnfHAudjpvZmYscy50OjQ5fHMuZTpsfHAubDoxOXxwLnM6LTEwMCxzLnQ6NjZ8cC52Om9mZg!4e0&amp;token=32116"
                                                                         draggable="false"
                                                                         alt=""
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                                <div style="position: absolute; left: 49px; top: 58px; transition: opacity 200ms ease-out;">
                                                                    <img src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i11!2i600!3i769!4i256!2m3!1e0!2sm!3i369047163!3m14!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC52Om9ufHAuYzojZmZjZGUwZmQscy50OjV8cy5lOmd8cC52Om9ufHAuYzojZmZlOGU3ZTMscy50OjQ5fHMuZTpnfHAudjpvbnxwLmM6I2ZmYmFiYWJhLHMudDo4MnxzLmU6Z3xwLmM6I2ZmZjhmOGY2LHMudDoyfHMuZTpnfHAudjpvZmYscy50OjQ5fHMuZTpsfHAubDoxOXxwLnM6LTEwMCxzLnQ6NjZ8cC52Om9mZg!4e0&amp;token=326"
                                                                         draggable="false"
                                                                         alt=""
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                                <div style="position: absolute; left: 49px; top: 314px; transition: opacity 200ms ease-out;">
                                                                    <img src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i11!2i600!3i770!4i256!2m3!1e0!2sm!3i369047163!3m14!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC52Om9ufHAuYzojZmZjZGUwZmQscy50OjV8cy5lOmd8cC52Om9ufHAuYzojZmZlOGU3ZTMscy50OjQ5fHMuZTpnfHAudjpvbnxwLmM6I2ZmYmFiYWJhLHMudDo4MnxzLmU6Z3xwLmM6I2ZmZjhmOGY2LHMudDoyfHMuZTpnfHAudjpvZmYscy50OjQ5fHMuZTpsfHAubDoxOXxwLnM6LTEwMCxzLnQ6NjZ8cC52Om9mZg!4e0&amp;token=4573"
                                                                         draggable="false"
                                                                         alt=""
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                                <div style="position: absolute; left: 49px; top: -198px; transition: opacity 200ms ease-out;">
                                                                    <img src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i11!2i600!3i768!4i256!2m3!1e0!2sm!3i369047163!3m14!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC52Om9ufHAuYzojZmZjZGUwZmQscy50OjV8cy5lOmd8cC52Om9ufHAuYzojZmZlOGU3ZTMscy50OjQ5fHMuZTpnfHAudjpvbnxwLmM6I2ZmYmFiYWJhLHMudDo4MnxzLmU6Z3xwLmM6I2ZmZjhmOGY2LHMudDoyfHMuZTpnfHAudjpvZmYscy50OjQ5fHMuZTpsfHAubDoxOXxwLnM6LTEwMCxzLnQ6NjZ8cC52Om9mZg!4e0&amp;token=1619"
                                                                         draggable="false"
                                                                         alt=""
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                                <div style="position: absolute; left: -207px; top: 58px; transition: opacity 200ms ease-out;">
                                                                    <img src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i11!2i599!3i769!4i256!2m3!1e0!2sm!3i369047127!3m14!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC52Om9ufHAuYzojZmZjZGUwZmQscy50OjV8cy5lOmd8cC52Om9ufHAuYzojZmZlOGU3ZTMscy50OjQ5fHMuZTpnfHAudjpvbnxwLmM6I2ZmYmFiYWJhLHMudDo4MnxzLmU6Z3xwLmM6I2ZmZjhmOGY2LHMudDoyfHMuZTpnfHAudjpvZmYscy50OjQ5fHMuZTpsfHAubDoxOXxwLnM6LTEwMCxzLnQ6NjZ8cC52Om9mZg!4e0&amp;token=71006"
                                                                         draggable="false"
                                                                         alt=""
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                                <div style="position: absolute; left: -207px; top: 314px; transition: opacity 200ms ease-out;">
                                                                    <img src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i11!2i599!3i770!4i256!2m3!1e0!2sm!3i369047163!3m14!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC52Om9ufHAuYzojZmZjZGUwZmQscy50OjV8cy5lOmd8cC52Om9ufHAuYzojZmZlOGU3ZTMscy50OjQ5fHMuZTpnfHAudjpvbnxwLmM6I2ZmYmFiYWJhLHMudDo4MnxzLmU6Z3xwLmM6I2ZmZjhmOGY2LHMudDoyfHMuZTpnfHAudjpvZmYscy50OjQ5fHMuZTpsfHAubDoxOXxwLnM6LTEwMCxzLnQ6NjZ8cC52Om9mZg!4e0&amp;token=116083"
                                                                         draggable="false"
                                                                         alt=""
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                                <div style="position: absolute; left: -207px; top: -198px; transition: opacity 200ms ease-out;">
                                                                    <img src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i11!2i599!3i768!4i256!2m3!1e0!2sm!3i369047127!3m14!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmd8cC52Om9ufHAuYzojZmZjZGUwZmQscy50OjV8cy5lOmd8cC52Om9ufHAuYzojZmZlOGU3ZTMscy50OjQ5fHMuZTpnfHAudjpvbnxwLmM6I2ZmYmFiYWJhLHMudDo4MnxzLmU6Z3xwLmM6I2ZmZjhmOGY2LHMudDoyfHMuZTpnfHAudjpvZmYscy50OjQ5fHMuZTpsfHAubDoxOXxwLnM6LTEwMCxzLnQ6NjZ8cC52Om9mZg!4e0&amp;token=72299"
                                                                         draggable="false"
                                                                         alt=""
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;"></div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; height: 100%;"></div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 4; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                                    </div>
                                                </div>
                                                <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                                    <a target="_blank"
                                                       href="https://maps.google.com/maps?ll=40.749032,-74.213972&amp;z=11&amp;t=m&amp;hl=en-GB&amp;gl=US&amp;mapclient=apiv3"
                                                       title="Click to see this area on Google Maps"
                                                       style="position: static; overflow: visible; float: none; display: inline;">
                                                        <div style="width: 66px; height: 26px; cursor: pointer;">
                                                            <img src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5.png"
                                                                 draggable="false"
                                                                 style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                                        </div>
                                                    </a></div>
                                                <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 361px; top: 157px;">
                                                    <div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div>
                                                    <div style="font-size: 13px;">Map data ©2016 Google</div>
                                                    <div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;">
                                                        <img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png"
                                                             draggable="false"
                                                             style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                </div>
                                                <div class="gmnoprint"
                                                     style="z-index: 1000001; position: absolute; right: 166px; bottom: 0px; width: 121px;">
                                                    <div draggable="false"
                                                         class="gm-style-cc"
                                                         style="user-select: none; height: 14px; line-height: 14px;">
                                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                            <div style="width: 1px;"></div>
                                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                        </div>
                                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                            <a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2016 Google</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gmnoscreen"
                                                     style="position: absolute; right: 0px; bottom: 0px;">
                                                    <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2016 Google</div>
                                                </div>
                                                <div class="gmnoprint gm-style-cc"
                                                     draggable="false"
                                                     style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 95px; bottom: 0px;">
                                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                        <div style="width: 1px;"></div>
                                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                    </div>
                                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                        <a href="https://www.google.com/intl/en-GB_US/help/terms_maps.html"
                                                           target="_blank"
                                                           style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a>
                                                    </div>
                                                </div>
                                                <div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;">
                                                    <img src="https://maps.gstatic.com/mapfiles/api-3/images/sv9.png"
                                                         draggable="false"
                                                         class="gm-fullscreen-control"
                                                         style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                                </div>
                                                <div draggable="false"
                                                     class="gm-style-cc"
                                                     style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                        <div style="width: 1px;"></div>
                                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                    </div>
                                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                        <a target="_new"
                                                           title="Report errors in the road map or imagery to Google"
                                                           href="https://www.google.com/maps/@40.749032,-74.2139721,11z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3"
                                                           style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a>
                                                    </div>
                                                </div>
                                                <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom"
                                                     draggable="false"
                                                     controlwidth="28"
                                                     controlheight="93"
                                                     style="margin: 10px; user-select: none; position: absolute; bottom: 107px; right: 28px;">
                                                    <div class="gmnoprint"
                                                         controlwidth="28"
                                                         controlheight="55"
                                                         style="position: absolute; left: 0px; top: 38px;">
                                                        <div draggable="false"
                                                             style="user-select: none; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;">
                                                            <div title="Zoom in"
                                                                 style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;">
                                                                <div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;">
                                                                    <img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png"
                                                                         draggable="false"
                                                                         style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;">
                                                                </div>
                                                            </div>
                                                            <div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div>
                                                            <div title="Zoom out"
                                                                 style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;">
                                                                <div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;">
                                                                    <img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png"
                                                                         draggable="false"
                                                                         style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gm-svpc"
                                                         controlwidth="28"
                                                         controlheight="28"
                                                         style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px;">
                                                        <div style="position: absolute; left: 1px; top: 1px;"></div>
                                                        <div style="position: absolute; left: 1px; top: 1px;">
                                                            <div aria-label="Street View Pegman Control"
                                                                 style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;">
                                                                <img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png"
                                                                     draggable="false"
                                                                     style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                            </div>
                                                            <div aria-label="Pegman is on top of the Map"
                                                                 style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;">
                                                                <img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png"
                                                                     draggable="false"
                                                                     style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                            </div>
                                                            <div aria-label="Street View Pegman Control"
                                                                 style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;">
                                                                <img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png"
                                                                     draggable="false"
                                                                     style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gmnoprint"
                                                         controlwidth="28"
                                                         controlheight="0"
                                                         style="display: none; position: absolute;">
                                                        <div title="Rotate map 90 degrees"
                                                             style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; cursor: pointer; background-color: rgb(255, 255, 255); display: none;">
                                                            <img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png"
                                                                 draggable="false"
                                                                 style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                        <div class="gm-tilt"
                                                             style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);">
                                                            <img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png"
                                                                 draggable="false"
                                                                 style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gmnoprint"
                                                     style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;">
                                                    <div class="gm-style-mtc" style="float: left;">
                                                        <div draggable="false"
                                                             title="Show street map"
                                                             style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 22px; font-weight: 500;">Map
                                                        </div>
                                                    </div>
                                                    <div class="gm-style-mtc" style="float: left;">
                                                        <div draggable="false"
                                                             title="Show satellite imagery"
                                                             style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-left: 0px; min-width: 40px;">Satellite
                                                        </div>
                                                        <div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; right: 0px; top: 40px; text-align: left; display: none;">
                                                            <div draggable="false"
                                                                 title="Show imagery with street names"
                                                                 style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;">
                                                                    <span role="checkbox"
                                                                          style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div
                                                                                style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img
                                                                                    src="https://maps.gstatic.com/mapfiles/mv/imgs8.png"
                                                                                    draggable="false"
                                                                                    style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label
                                                                        style="vertical-align: middle; cursor: pointer;">Labels</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="/assets/images/marker.png" style="display:none" alt="icon">
                                <script type="text/javascript">/*<![CDATA[*/
									var mapconfig8_snl4g_0 = {
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
										"deflatitude": "56.934992",
										"deflongitude": "24.1730152",
										"centerlat": "56.934992",
										"centerlon": "24.1730152",
										"address": "",
										"latitudeid": "",
										"latitudedesc": "1",
										"latitudecoord": "0",
										"latitudeform": "0",
										"controltype": "UI",
										"zoomtype": "None",
										"svcontrol": "1",
										"returncontrol": "0",
										"zoom": "8",
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

										"waypoints": [],
										"mapnm": "8_snl4g_0",
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
											"imageurl": "https:\/\/livedemo00.template-help.com\/joomla_55599\/images\/marker.png",
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
									var mapstyled8_snl4g_0 = [
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

									mapconfig8_snl4g_0['latitude'] = '56.934992';
									mapconfig8_snl4g_0['longitude'] = '24.1730152';
									console.log(mapconfig8_snl4g_0);

									var googlemap8_snl4g_0 = new GoogleMaps('8_snl4g_0', mapconfig8_snl4g_0, mapstyled8_snl4g_0);
									var mapconfig8_snl4g_1 = mapconfig8_snl4g_0;
									var mapstyled8_snl4g_1 = mapstyled8_snl4g_0;

									mapconfig8_snl4g_1['latitude'] = '56.954992';
									mapconfig8_snl4g_1['longitude'] = '24.1530152';

									mapconfig8_snl4g_1.deflatitude = '56.334992';
									mapconfig8_snl4g_1.deflongitude = '24.1730152';
									console.log(mapconfig8_snl4g_1);

                                    /*]]>*/</script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection