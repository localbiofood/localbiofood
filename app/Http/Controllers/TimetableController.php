<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Timetable;
use App\TimetableCategories;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TimetableController extends Controller
{

	public function show(Request $request, $id = null)
	{
//		$data = Company::companyData();
//		$data['timetable'] = Timetable::getTimetableData($id);
//
//		$googleMap = view('addGoogleMap');

		return view('product.show')
				->with([
//						'data' => $data,
//						'googleMap' => $googleMap
					   ]);
	}

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
		$sql = "SELECT tt.lat, tt.lng, tt.region, c.company, tt.id, tt.starttime, tt.endtime, tt.id
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
			$btn = '<a href="' . route('timetable::show', ['id' => $row->id]) . '" class="btn btn-xs btn-secondary"> Atvērt </a>';

			$decorated = [];
			$decorated[] 			=  $this->coatLink($row->company, route('timetable::list', ['id' => $row->id]));
			$decorated[] 			=  $row->region;
			$decorated[] 			=  $categoryImage;
			$decorated[] 			=  Carbon::parse($row->starttime)->format('d-m-Y H:s');
			$decorated[] 			=  Carbon::parse($row->endtime	)->format('d-m-Y H:s');
			$decorated[] 			=  $btn  ;
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

	public function coatLink($text, $target)
	{
		$link = "<a href='{$target}'>$text</a>";

		return $link;
	}
}

