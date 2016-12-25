@extends('layouts.app')
@section('timetablelist')

    <!-- Mainbottom -->
    <div id="container" style="height:900px">
        <div id="content">
            <div class="moduletable center">
                <div class="module_container">

                    <table id="timetable" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Uzņēmums</th>
                            <th>Reģions</th>
                            <th>Kategorija</th>
                            <th>Laiks No.</th>
                            <th>Atrašanās ilgums</th>
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

@endsection