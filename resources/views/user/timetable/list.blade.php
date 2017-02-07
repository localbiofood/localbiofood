@extends('layouts.app')
@section('timetablelist')

    <div class="panel panel-default">
        <div class="panel-body">
            @if(session('success'))
                <div class="alert alert-success m-t-md">
                    Veiksmīgi pievienots
                </div>
            @endif

            <h1>Jūsu pievienotās vietas</h1>

            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <a href="{{route('usertimetable::edit', ['id' => 0])}}" class="btn btn-primary">Pievienot jaunu</a>
                    </div>
                </div>
            </div>

            <!-- Mainbottom -->
            <div id="content" class="m-t-lg" style="margin-top:30px">
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

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection