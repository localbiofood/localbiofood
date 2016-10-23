@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-12">

            <div class="panel @if (session('success') === null) panel-default @else panel-success @endif">
                <div class="panel-heading">
                    Pievienot koordinātas
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12" >
                            <div id="info" class="bs-callout bs-callout-warning" >
                                <p>
                                    Šeit lūdzu norādīt kurā laikā un vietā Jūs atradīsieties, <br />
                                    lai cilvēki var Jūs atrast
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div id="map"></div>
                    </div>


                    <div class="col-md-6">
                        <form action="# " method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                            
                            <div class="form-group @if ($errors->has('region')) has-error @endif">
                            	<label for="region" class="col-md-2 control-label">Reģions:</label>
                            	<div class="col-md-10">
                                    <select name="region_dropdown" class="form-control" id="region_dropdown">
                                        <option value="Vidzeme">Vidzeme</option>
                                        <option value="Kurzeme">Kurzeme</option>
                                        <option value="Latgale">Latgale</option>
                                        <option value="Zemgale">Zemgale</option>
                                    </select>
                            		@if ($errors->has('region'))
                            			<span class="help-block">{{ $errors->first('region')}}</span>
                            		@endif
                            	</div>
                            </div>
                            <div class="form-group @if ($errors->has('time_from')) has-error @endif" id="timeBlock">
                            	<label for="time_from" class="col-md-2 control-label">No:</label>
                            	<div class="col-md-4">
                            		<input type="text"
                            			   class="form-control time start"
                            			   id="time_from"
                            			   name="time_from"
                            			   value="{{array_get($data, 'time_from', '')}}"
                            			   placeholder="Laiks no...">
                            		@if ($errors->has('time_from'))
                            			<span class="help-block">{{ $errors->first('time_from')}}</span>
                            		@endif
                            	</div>
                            </div>
                            <div class="form-group @if ($errors->has('how_long')) has-error @endif">
                            	<label for="region" class="col-md-2 control-label">Paredzētais ilgums:</label>
                            	<div class="col-md-10">
                                    <select class="form-control" name="how_long" id="how_long">
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
                            		@if ($errors->has('how_long'))
                            			<span class="help-block">{{ $errors->first('how_long')}}</span>
                            		@endif
                            	</div>
                            </div>

                            <div class="col-md-12" style="margin-left:10px">
                            	<div class="form-group">
                            		<input class="btn btn-primary" type="submit" value="Saglabāt">
                            		<a class="btn btn-default" href="#">Atcelt</a>
                            	</div>
                            </div>



                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection