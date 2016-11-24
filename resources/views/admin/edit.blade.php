@extends('layouts.admin')
@section('content')
    <div class="row header-style-row">
        <div class="col-lg-12">
            <h1 id="#first" class="header-style-first">Admin panel</h1>
        </div>
    </div>

    @include('admin.productTypes')

@endsection
