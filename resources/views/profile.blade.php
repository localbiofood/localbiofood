@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel @if (session('success') === null) panel-default @else panel-success @endif">
                <div class="panel-heading">
                    Rediģēt profilu
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12" >
                            <div id="info" class="bs-callout bs-callout-warning" >
                                Uzņēmuma informācija, nosaukums, atrašanās vieta
                            </div>
                        </div>
                    </div>

                        <form action="{{route('profile::save')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group @if ($errors->has('company')) has-error @endif">
                                    <label for="company" class="col-md-2 control-label">Uzņēmums:</label>
                                    <div class="col-md-10">
                                        <input type="text"
                                               class="form-control"
                                               id="company"
                                               name="company"
                                               value="{{array_get($data, 'company', '')}}"
                                               placeholder="Uzņēmums...">
                                        @if ($errors->has('company'))
                                            <span class="help-block">{{ $errors->first('company')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group @if ($errors->has('region')) has-error @endif">
                                    <label for="region" class="col-md-2 control-label">Reģions:</label>
                                    <div class="col-md-10">
                                        <input type="text"
                                               class="form-control"
                                               id="region"
                                               name="region"
                                               value="{{array_get($data, 'region', '')}}"
                                               placeholder="Reģions...">
                                        @if ($errors->has('region'))
                                            <span class="help-block">{{ $errors->first('region')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group @if ($errors->has('city')) has-error @endif">
                                    <label for="city" class="col-md-2 control-label">Pilsēta:</label>
                                    <div class="col-md-10">
                                        <input type="text"
                                               class="form-control"
                                               id="city"
                                               name="city"
                                               value="{{array_get($data, 'city', '')}}"
                                               placeholder="Pilsēta...">
                                        @if ($errors->has('city'))
                                            <span class="help-block">{{ $errors->first('city')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group @if ($errors->has('description')) has-error @endif">
                                    <label for="description" class="col-md-2 control-label">Apraksts:</label>
                                    <div class="col-md-10">
                                        <textarea
                                                name="description"
                                                id="description"
                                                class="form-control"
                                                placeholder="Apraksts..."
                                                cols="30"
                                                rows="10">{{array_get($data, 'description', '')}}</textarea>
                                        @if ($errors->has('description'))
                                            <span class="help-block">{{ $errors->first('description')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Image upload</label>
                                    <div class="form-group">
                                        <img src="assets/img/fish.svg" alt="fish" style="width:100px">
                                        <input type="file" class="col-md-10" value="Upload new image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-left:10px">
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Saglabāt">
                                    <a class="btn btn-default" href="{{route('timetable::list')}}">Pievienot atrašanās vietu</a>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection