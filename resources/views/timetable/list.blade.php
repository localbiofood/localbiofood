@extends('layouts.app')
@section('timetablelist')

    <div class="row">
        <div class="col-md-12">
            <label for="regionFilter">
                <input type="text" name="regionFilter" id="regionFilter" value="stuff" class="form-control">
            </label>
        </div>
    </div>
    <!-- Mainbottom -->
    <div id="container" class="m-b-lg" style="margin-bottom:300px">
        <div id="content">
            <div class="moduletable center">
                <div class="module_container">
                    <table id="timetable" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No.:</th>
                            <th>Uzņēmums</th>
                            <th>Reģions</th>
                            <th>Kategorija</th>
                            <th>Sākuma laiks</th>
                            <th>Beigu laiks</th>
                            <th>Atvērt</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection