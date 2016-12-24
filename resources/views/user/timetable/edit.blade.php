@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-12">
            @if(session('success'))
                <div class="alert alert-success m-t-md">
                    Veiksmīgi pievienots
                </div>
            @endif

            <input type="hidden" name="lat" value="">
            <input type="hidden" name="lng" value="">
            <div class="row">
                <div class="col-md-12">
                    <div id="info" class="bs-callout bs-callout-warning">
                        <p>
                            Šeit lūdzu norādīt kurā laikā un vietā Jūs atradīsieties, <br/>
                            lai cilvēki var Jūs atrast
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="mapAdd" style="display:block;width:100%; height:450px"></div>
            </div>

            <div class="col-md-6">
                <form action="{{route('usertimetable::post', ['id' => $data->id])}}" method="POST" class="">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group @if ($errors->has('region')) has-error @endif">
                            <label for="region" class="col-md-2 control-label">Reģions:</label>
                            <div class="col-md-10">
                                <select name="region" class="form-control" id="region">
                                    <option @if ($data->region === 'riga') selected="selected" @endif value="riga">Rīga un tās apkārtne</option>
                                    <option @if ($data->region === 'vidzeme') selected="selected" @endif value="vidzeme">Vidzeme</option>
                                    <option @if ($data->region === 'kurzeme') selected="selected" @endif value="kurzeme">Kurzeme</option>
                                    <option @if ($data->region === 'latgale') selected="selected" @endif value="latgale">Latgale</option>
                                    <option @if ($data->region === 'zemgale') selected="selected" @endif value="zemgale">Zemgale</option>
                                </select>
                                @if ($errors->has('region'))
                                    <span class="help-block">{{ $errors->first('region')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <row>
                        <p style="color:red"> Te būs kalendārs</p>
                    </row>
                    <div class="row">
                        <div class="form-group @if ($errors->has('time_when')) has-error @endif" id="timeBlock">
                            <label for="time_when" class="col-md-2 control-label">No:</label>
                            <div class="col-md-6">
                                <input type="text"
                                       class="form-control time start"
                                       id="time_when"
                                       name="time_when"
                                       value="{{array_get($data, 'time_when', '')}}"
                                       placeholder="Laiks no...">
                                @if ($errors->has('time_when'))
                                    <span class="help-block">{{ $errors->first('time_when')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group @if ($errors->has('event_length')) has-error @endif">
                            <label for="region" class="col-md-2 control-label">Paredzētais ilgums:</label>
                            <div class="col-md-10">
                                <select class="form-control" name="event_length" id="event_length">
                                    <option value="5">5m</option>
                                    <option value="10">10m</option>
                                    <option value="15">15m</option>
                                    <option value="20">20m</option>
                                    <option value="25">25m</option>
                                    <option value="30">30m</option>
                                    <option value="45">45m</option>
                                    <option value="60">1h</option>
                                    <option value="90">1h 30m</option>
                                    <option value="180">2h</option>
                                    <option value="360">4h</option>
                                    <option value="720">8h</option>
                                    <option value="0">8h+</option>
                                </select>
                                @if ($errors->has('event_length'))
                                    <span class="help-block">{{ $errors->first('event_length')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group @if ($errors->has('Address')) has-error @endif">
                            <label for="region" class="col-md-2 control-label">Adrese: </label>
                            <div class="col-md-10">
                                <div id="address">
                                    <input id="address2" id="pac-input" class="controls form-control" type="text"
                                           placeholder="Enter a location">
                                    <input type="hidden" name="lat" id="lat">
                                    <input type="hidden" name="lng" id="lng">
                                </div>
                                @if ($errors->has('Address'))
                                    <span class="help-block">{{ $errors->first('Address')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group @if ($errors->has('event_length')) has-error @endif">
                            <label for="region" class="col-md-2 control-label">Produktu kategorijas</label>
                            <div class="col-md-10">
                                <select class="form-control" name="event_length" id="event_length">
                                    <option value="0">Dažādi augļi, āboli, bumbieri, banāni utt.</option>
                                    <option value="720">Vistas gaļa, cūkgaļa, jēra gaļa, liellopu gaļa utt.</option>
                                    <option value="720">Siers, piens, jogurti, biezpiens utt.</option>
                                    <option value="0">Burkāni, gurķi, redīsi, sīpoli utt</option>
                                    <option value="0">Zivis un zivju izstrādājumi</option>
                                    <option value="0">Medus un biškopības produkti</option>
                                    <option value="0">Maize un graudu izstrādājumi</option>
                                </select>
                                @if ($errors->has('event_length'))
                                    <span class="help-block">{{ $errors->first('event_length')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group @if ($errors->has('Address')) has-error @endif">
                            <label for="region" class="col-md-2 control-label">Produkta attēls: </label>
                            <div class="col-md-10">
                                <div id="address">
                                    <input type="file">
                                </div>
                                @if ($errors->has('Address'))
                                    <span class="help-block">{{ $errors->first('Address')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group @if ($errors->has('Address')) has-error @endif">
                            <label for="region" class="col-md-2 control-label">Produkta apraksts: </label>
                            <div class="col-md-10">
                                <div id="address">
                                    <textarea name="" id="" class="form-control" cols="30" rows="3"></textarea>
                                </div>
                                @if ($errors->has('Address'))
                                    <span class="help-block">{{ $errors->first('Address')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <br />

                    <div class="row">
                        <div class="col-md-12" style="margin-left:10px">
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Saglabāt">
                                <a class="btn btn-default" href="{{route('usertimetable::list')}}">Atcelt</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>



                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />

                </form>
            </div>
        </div>
    </div>

@endsection