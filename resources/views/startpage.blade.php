@extends('layouts.app')
@section('content')
        <!-- Heading section -->
    <div class="row header-style-row">
        <div class="col-lg-12">
        <h1 id="#first" class="header-style-first">Ražotāju sadaļa</h1>
        </div>
    </div>

        <!-- Content section -->
      <div class="row">
            <div class="col-lg-6 col-md-12">
                <table ng-table="vm.tableParams" class="table table-bordered table-condensed table-hover table-striped" show-filter="true" >
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ražotājs</th>
                            <th>Adrese</th>
                            <th>Piedāvā</th>
                            <th>Pieejams</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Raunas Ķiploks</td>
                            <td>Vidzemes iela2, Rauna, Raunas pagasts</td>
                            <td>Ķiploku izstrādājumi</td>
                            <td>Šodien līdz 14:00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Raunas Ķiploks</td>
                            <td>Vidzemes iela2, Rauna, Raunas pagasts</td>
                            <td>Ķiploku izstrādājumi</td>
                            <td>Šodien līdz 14:00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Raunas Ķiploks</td>
                            <td>Vidzemes iela2, Rauna, Raunas pagasts</td>
                            <td>Ķiploku izstrādājumi</td>
                            <td>Šodien līdz 14:00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Raunas Ķiploks</td>
                            <td>Vidzemes iela2, Rauna, Raunas pagasts</td>
                            <td>Ķiploku izstrādājumi</td>
                            <td>Šodien līdz 14:00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Raunas Ķiploks</td>
                            <td>Vidzemes iela2, Rauna, Raunas pagasts</td>
                            <td>Ķiploku izstrādājumi</td>
                            <td>Šodien līdz 14:00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Raunas Ķiploks</td>
                            <td>Vidzemes iela2, Rauna, Raunas pagasts</td>
                            <td>Ķiploku izstrādājumi</td>
                            <td>Šodien līdz 14:00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Raunas Ķiploks</td>
                            <td>Vidzemes iela2, Rauna, Raunas pagasts</td>
                            <td>Ķiploku izstrādājumi</td>
                            <td>Šodien līdz 14:00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Raunas Ķiploks</td>
                            <td>Vidzemes iela2, Rauna, Raunas pagasts</td>
                            <td>Ķiploku izstrādājumi</td>
                            <td>Šodien līdz 14:00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Raunas Ķiploks</td>
                            <td>Vidzemes iela2, Rauna, Raunas pagasts</td>
                            <td>Ķiploku izstrādājumi</td>
                            <td>Šodien līdz 14:00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Raunas Ķiploks</td>
                            <td>Vidzemes iela2, Rauna, Raunas pagasts</td>
                            <td>Ķiploku izstrādājumi</td>
                            <td>Šodien līdz 14:00</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="col-lg-6 col-md-12">
                  <div id="map"><div>
            </div>
        </div>
        </div>
        </div>

        <!-- Product list -->
        <div class="row header-style-row-content">
            <div class="col-lg-12">
                <h2 class="header-style-second">Produkti</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-lg-offset-2 col-md-3 col-sm-3">
                <a href="#">
                    <div class="media">
                        <div class="pull-left">
                            <img src="assets/img/groceries.svg">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Visi produkti</h4>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="media">
                        <div class="pull-left">
                                <img src="assets/img/steak.svg">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Gaļas produkti</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3">
                <a href="#">
                    <div class="media">
                        <div class="pull-left">
                               <img src="assets/img/cheese.svg">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Piena produkti</h4>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="media">
                        <div class="pull-left">
                                <img src="assets/img/sandwich.svg">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Miltu produkti</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3">
                <a href="#">
                    <div class="media">
                        <div class="pull-left">
                                <img src="assets/img/fish.svg">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Zivis</h4>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="media">
                        <div class="pull-left">
                                <img src="assets/img/salad.svg">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Dārzeņi</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3">
                <a href="#">
                    <div class="media">
                        <div class="pull-left">
                                <img src="assets/img/cherries.svg">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Augļi</h4>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="media">
                        <div class="pull-left">
                                <img src="assets/img/tea.svg">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Tējas</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{--<div id="map"></div>

    <div class="container">
        @for($i=0;$i<10;$i++)
            <a href="#{{$i}}">
                <div class="provider-block" >
                    <div class="views-field views-field-title">        <div class="field-content">ECO BIRD SIA</div>  </div>
                    <div class="views-field views-field-field-saimnieciba-adrese">        <div class="field-content">UPESCIEMA IELA 4-6, ĶEKAVAS PAGASTS, ĶEKAVAS NOVADS</div>  </div>
                    <div class="views-field views-field-field-produktu-grupa">        <div class="item-list"><ul><li class="first last"><div data-name="Gaļa" class="tid2"></div></li>
                            </ul></div>  </div>
                    <div class="views-field views-field-field-produktu-grupa-1">        <div class="field-content">Gaļa</div>  </div>
                    <div class="views-field views-field-field-kontakti-1">        <div class="field-content"><p><span style="font-size:16px">Sandis Kupčs</span></p>
                            <p><span style="font-size:16px">26601149</span></p>
                            <p><span style="font-size:16px"><a href="mailto:sandis.kupcs@gmail.com">sandis.kupcs@gmail.com</a>&nbsp;</span></p>
                        </div>  </div>
                    <div class="views-field views-field-nothing">        Apskatīt  </div>  </div>
                </div>
            </a>

    @endfor--}}
@endsection
