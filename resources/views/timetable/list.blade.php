@extends('layouts.app')
@section('timetablelist')

    <div class="row">
        <div class="col-md-12">
            <div id="regionLinks">
                <a href="#content" class="btn btn-primary active" data-region=""> Visi rajoni</a>
                <a href="#content" class="btn btn-primary " data-region="riga"> Rīgas rajons</a>
                <a href="#content" class="btn btn-primary " data-region="vidzeme"> Vidzeme</a>
                <a href="#content" class="btn btn-primary " data-region="zemgale"> Zemgale</a>
                <a href="#content" class="btn btn-primary " data-region="latgale"> Latgale</a>
                <a href="#content" class="btn btn-primary " data-region="kurzeme"> Kurzeme</a>
            </div>

        </div>
    </div>
    <!-- Mainbottom -->
    <div id="container" class="m-b-lg">
        <div id="content">
            <div class="moduletable center">
                <div class="module_container">
                    <table id="timetable" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th data-column-index='0'>No.:</th>
                            <th data-column-index='1'>Uzņēmums</th>
                            <th data-column-index='2'>Reģions</th>
                            <th data-column-index='3'>Kategorija</th>
                            <th data-column-index='4'>Datums</th>
                            <th data-column-index='5'>Laiks</th>
                            <th data-column-index='6'>Atvērt</th>
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