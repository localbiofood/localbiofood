<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Timetable;
use App\TimetableCategories;
use Illuminate\Http\Request;

class TimetableController extends Controller
{

//	public function show(Request $request, $id = null)
//	{
//		$data = Company::companyData();
//		$data['timetable'] = Timetable::getTimetableData($id);
//
//		$googleMap = view('addGoogleMap');
//
//		return view('timetable')->with(['data' => $data, 'googleMap' => $googleMap]);
//	}

	public function edit()
	{
//		$data = Company::companyData();
//		$data['timetable'] = Timetable::getTimetableData($id);
//
//		$googleMap = view('addGoogleMap');
//
//		return view('timetable')->with(['data' => $data, 'googleMap' => $googleMap]);

	}




	public function getData()
	{
		$sql = "SELECT tt.event_length, tt.lat, tt.lng, tt.region, tt.time_when, 
				tt.time_when as test, c.company
 			FROM timetables tt 
 			LEFT JOIN companies c ON tt.CompanyID = c.id 
		";

		$count = Timetable::select('id')->get()->count();

		$sql = \DB::select($sql);


		$results = [];
		foreach($sql as $key => $row )
		{
			$decorated = [];
			$decorated[] 			=  $row->company  ;
			$decorated[] 			=  $row->region;
			$decorated[] 			=  $row->time_when;
			$decorated[] 			=  $row->event_length  ;
			$results[] = $decorated;
		}

		$dtResult = [
				"draw" => 1,
				"recordsTotal" => $count,
				"recordsFiltered" => $count,
				"paging" => true,
				'data' => $results
		];

		return response()
				->json($dtResult);
	}
}

