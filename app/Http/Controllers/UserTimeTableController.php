<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Timetable;
use App\TimetableCategories;
use Illuminate\Http\Request;

class UserTimeTableController extends Controller
{

	public function show(Request $request, $id = null)
	{
		$timetable = Timetable::all();

		return view('user.timetable.list')->with(['timetable' => $timetable]);
	}


	public function edit($id = 0)
	{
		$data = Company::companyData();
		$timetable = Timetable::getTimetableData($id);

		$googleMap = view('addGoogleMap');

		return view('user.timetable.edit', [$id])
				->with([
						'data' => $timetable,
						'addGoogleMap' => $googleMap
					   ]);
	}

	public function post(Request $request)
	{
		$data = $request->except('_token', 'category');
		$categories = $request->only('category');


		Timetable::saveTimetable($data, array_get($data, 'id', 0));
//		TimetableCategories::saveCategories($id, $categories);

		return redirect()->route('usertimetable::list')->with('success', 'success');
	}

	public function getData()
	{
		$sql = "SELECT tt.id, tt.event_length, tt.lat, tt.lng, tt.region, tt.time_when, 
				tt.time_when as test, c.company
 			FROM timetables tt 
 			LEFT JOIN companies c ON tt.CompanyID = c.id 
		";

		$count = Timetable::select('id')->get()->count();

		$sql = \DB::select($sql);


		$results = [];
		foreach($sql as $key => $row )
		{
			$btn = '<a href="' . route('usertimetable::edit') . '/' . $row->id . '" class="btn btn-xs btn-primary"> Labot </a>';
			$decorated = [];
			$decorated[] 			=  $row->company  ;
			$decorated[] 			=  $row->region;
			$decorated[] 			=  $row->time_when;
			$decorated[] 			=  $row->event_length  ;
			$decorated[] 			=  $btn;
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

