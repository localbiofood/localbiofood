@extends('layouts.app')
@section('timetablelist')

    <!-- Mainbottom -->
    <div id="content">
        <div class="moduletable center">
            <div class="module_container">

                <ul class="nav nav-tabs" id="bootstrap_tabs_nav_213">
                    <li class="active"><a data-toggle="tab" href="#tab1-213">Rīgas reģions</a></li>
                    <li><a data-toggle="tab" href="#tab2-213">Kurzeme</a></li>
                    <li><a data-toggle="tab" href="#tab3-213">Latgale</a></li>
                    <li><a data-toggle="tab" href="#tab4-213">Zemgale</a></li>
                    <li><a data-toggle="tab" href="#tab5-213">Vidzeme</a></li>
                </ul>

                <table id="timetable" class="display" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Tirgotājs</th>
                        <th>Reģions</th>
                        <th>Kategorija(s)</th>
                    </tr>
                    </thead>
                    <tbody>

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

@endsection