@extends('layouts.app')
@section('content')

    <div id="map"></div>

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

        @endfor
@endsection
