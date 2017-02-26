@extends('layouts.app')

@section('content')

    <div id="wrapper">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    @foreach($images as $image)
                        <div class="col-md-4">
                            <img src="/{{$image['image_path']}}" class="img-thumbnail" alt="">
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <p id="regionInfo">Reģions: {{$data['region']}}</p>
                        <p>Apraksts: {{$data['description']}}</p>
                    </div>
                </div>
            </div>

            <input type="hidden" id="lat" value="{{$data['lat']}}">
            <input type="hidden" id="lng" value="{{$data['lng']}}">
            <div id="showInMap" style="display:block;width:100%; height:450px"></div>
            </div>
    </div>

@endsection