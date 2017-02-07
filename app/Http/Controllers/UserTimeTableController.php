<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Timetable;
use App\TimetableCategories;
use App\TimetableImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
		$code = config('timetable.code');
		$timetable = Timetable::getTimetableData($id);

		if ($timetable === null)
		{
			$timetable = new Timetable();
		}
		$googleMap = view('addGoogleMap');

		return view('user.timetable.edit', [$id])
				->with([
						'data' => $timetable,
						'addGoogleMap' => $googleMap,
						'code' => $code,
					   ]);
	}

	public function post(Request $request)
	{
		$data = $request->except('_token', 'category');

		$validator = \Validator::make($request->all(), [
				'region' => 'required',
				'description' => 'required',
		]);

		if ($validator->fails()) {
			return redirect(route('usertimetable::edit', ['id' => 1]))
					->withErrors($validator)
					->withInput();
		}

		$categories = $request->only('category');
		$timetable = Timetable::saveTimetable($data, array_get($data, 'id', 0));
		TimetableCategories::saveCategories($timetable, $categories);

		TimetableImage::saveImages($request, $timetable);


		return redirect()->route('usertimetable::list')->with('success', 'success');
	}

	public function getData()
	{
		$sql = "SELECT tt.id,  tt.lat, tt.lng, tt.region, c.company, tt.starttime, tt.endtime
 			FROM timetables tt 
 			LEFT JOIN companies c ON tt.CompanyID = c.id 
 			ORDER BY tt.starttime DESC
		";

		$count = Timetable::select('id')->get()->count();

		$sql = \DB::select($sql);

		$results = [];
		foreach($sql as $key => $row )
		{
			$categoriesSql = "SELECT tc.code 
 				FROM timetable_categories tc
 				WHERE tc.id = :timetable_id
			";
			$categoriesResult = \DB::select($categoriesSql, ['timetable_id' => $row->id]);
			$categoryImage = '';
			foreach($categoriesResult as $row2)
			{
				$categoryImage .= ($row2->code !== null) ?  "<img src='/assets/images/icons/{$row2->code}.png' style='height:40px' alt='{$row2->code}'>" : '';
			}

			$btn = '<a href="' . route('usertimetable::edit') . '/' . $row->id . '" class="btn btn-xs btn-primary"> Labot </a>';
			$decorated = [];
			$decorated[] 			=  $row->company  ;
			$decorated[] 			=  $row->region;
			$decorated[] 			=  $categoryImage;
			$decorated[] 			=  Carbon::parse($row->starttime)->format('d-m-Y H:s');
			$decorated[] 			=  Carbon::parse($row->endtime)->format('d-m-Y H:s');
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

