@extends('layouts.app')
@section('content')

    <div id="bottom" class="transForm">

        <div class="row">
            <div class="col-md-12">
                @if(session('success'))
                    <div class="alert alert-success m-t-md">
                        Veiksmīgi pievienots
                    </div>
                @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
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
                    <form class="form-horizontal form" action="{{route('usertimetable::post')}}" method="POST"  enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <div class="row">
                                <div class="col-md-12">
                                       <label for="region" class="control-label">Reģions:</label>

                                       <select name="region" class="form-control" id="region">
                                           <option @if ($data->region === 'riga') selected="selected"
                                                   @endif value="riga">Rīga un tās apkārtne
                                           </option>
                                           <option @if ($data->region === 'vidzeme') selected="selected"
                                                   @endif value="vidzeme">Vidzeme
                                           </option>
                                           <option @if ($data->region === 'kurzeme') selected="selected"
                                                   @endif value="kurzeme">Kurzeme
                                           </option>
                                           <option @if ($data->region === 'latgale') selected="selected"
                                                   @endif value="latgale">Latgale
                                           </option>
                                           <option @if ($data->region === 'zemgale') selected="selected"
                                                   @endif value="zemgale">Zemgale
                                           </option>
                                       </select>
                                       @if ($errors->has('region'))
                                           <span class="help-block">{{ $errors->first('region')}}</span>
                                       @endif
                                </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                    <label for="region" class="control-label">Paredzētais ilgums:</label>

                                    <input type="text" class="form-control datepicker" name="date" id="date">
                            </div>
                            <div class="col-sm-6">
                                <label for="region" class="col-sm-6 control-label">Sākuma laiks:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control"  name="time" id="time" class="datepicker">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="region" class="col-sm-6 control-label">Beigu laiks:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control"  name="time2" id="time2" class="datepicker">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div id="address">
                                    <label for="region" class=" control-label">Adrese: </label>

                                    <input id="pac-input" class="controls form-control" type="text"
                                           placeholder="Enter a location">
                                    <input type="hidden" name="lat" id="lat" value="{{$data->lat}}">
                                    <input type="hidden" name="lng" id="lng" value="{{$data->lng}}">
                                </div>
                                @if ($errors->has('Address'))
                                    <span class="help-block">{{ $errors->first('Address')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="region" class="control-label">Produktu kategorijas</label>
                                <select class="form-control" name="category[code]" id="code">
                                    @foreach($code as $key => $value)
                                        <option @if($data->code === $key) selected="selected"
                                                @endif value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('event_length'))
                                    <span class="help-block">{{ $errors->first('event_length')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                                <div class="col-md-12">
                                    <label for="region" class="col-md-2 control-label">Produkta attēls: </label>
                                    <div id="image">
                                        <input type="file" class="form-control" name="image" id="image">
                                    </div>
                                    @if ($errors->has('image'))
                                        <span class="help-block">{{ $errors->first('image')}}</span>
                                    @endif
                                </div>
                        </div>

                        <div class="row">
                                <div class="col-md-12">
                                    <label for="region" class="control-label">Produkta apraksts: </label>

                                    <div id="description">
                                    <textarea name="description"
                                              id=""
                                              class="form-control"
                                              cols="30"
                                              rows="3">{{$data->description}}</textarea>
                                    </div>
                                    @if ($errors->has('description'))
                                        <span class="help-block">{{ $errors->first('description')}}</span>
                                    @endif
                                </div>
                        </div>

                        <br/>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Saglabāt">
                                    {{--<a class="btn btn-default" href="{{route('usertimetable::list')}}">Atcelt</a>--}}
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>

        <script>
			$(function ()
			{
//			$('.timepicker').wickedpicker();

				moment.locale('en', {
					week: {dow: 1} // Monday is the first day of the week
				});

				var now = moment();

				console.log(now);

				$('#date').datetimepicker({
					format: 'DD-MM-YYYY',
				});

				$('#time').datetimepicker({
					format: 'H:s',
				});

				var compiledStartDate = moment($('#date').val() + ' ' + $('#time').val(), 'DD-MM-YYYY H:s');

				$('#time').val('08:30');

				var tt = $('#time').val();
				var time1 = moment($('#time').val(), 'H:s');
				var startTime = time1.format('H');


				$('#time2').datetimepicker({
					format: 'H:s',
				});

				$('#time').on('dp.change', function ()
				{
					console.log($(this).val());
					mT = moment($(this).val(), 'H:s');
					mh = mT.format('H');
					startTime = mh;
					$('#time2').datetimepicker({});
					$('#time2').val(mT.format('H:s'));
				});

			});
        </script>

    </div>
@endsection