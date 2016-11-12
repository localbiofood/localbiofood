@extends('layouts.app')
@section('content')


    <div id="app">


    </div>


    {{----}}
    {{--<h1>Test with vue tables</h1>--}}
    {{--<div id="people" class="container">--}}
        {{--<h2>VueTables Client-Side Demo</h2>--}}
        {{--<div class="alphabet-filter">--}}
            {{--<p>Custom Filter Example:</p>--}}
            {{--<button class="btn btn-default" :class="{active:letter==selectedLetter}" v-for="letter in letters" @click="alphabetFilter(letter)">{{letter}}</button>--}}
            {{--<button class="btn btn-default" @click="alphabetFilter('')">Clear</button>--}}
        {{--</div>--}}
        {{--<p>Average Age: {{averageAge}}</p>--}}
        {{--<v-client-table :data="tableData" :columns="columns" :options="options"></v-client-table>--}}
        {{--<h4>Want to use the pagination component independently? Use <a target="_blank" href="https://www.npmjs.com/package/v-pagination">v-pagination</a></h4>--}}
    {{--</div>--}}


    <hr>




    <!-- Heading section -->
    <div class="row header-style-row">
        <div class="col-lg-12">
            <h1 id="#first" class="header-style-first">Rīga</h1>
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
