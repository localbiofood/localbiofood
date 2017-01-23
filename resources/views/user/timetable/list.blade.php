@extends('layouts.app')
@section('timetablelist')


    @if(session('success'))
        <div class="alert alert-success m-t-md">
            Veiksmīgi pievienots
        </div>
    @endif

    <h1>Jūsu pievienotās vietas</h1>

    <a href="{{route('usertimetable::edit', ['id' => 0])}}" class="btn btn-primary">Pievienot jaunu</a>
    <!-- Mainbottom -->
    <div id="content">
        <div class="moduletable center">
            <div class="module_container">
                <table id="user_timetable" class="display" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Uzņēmums</th>
                        <th>Reģions</th>
                        <th>Kategorijas</th>
                        <th>Sākuma laiks</th>
                        <th>Beigu laiks</th>
                        <th>Darbības</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                <div class="tab-content" id="bootstrap_tabs_content_213">
                    <div class="tab-pane fade active in" id="tab1-213">

                        <!-- Intro Image -->

                        <div class="item_content">
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