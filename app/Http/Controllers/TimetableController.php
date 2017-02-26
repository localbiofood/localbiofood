<?php

namespace App\Http\Controllers;

use App\Timetable;
use App\TimetableImage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;

class TimetableController extends Controller
{
	public function show(Request $request, $id = null)
	{
		$timetable = Timetable::find($id);

		$images = TimetableImage::select('image_path')->where('timetable_id', $id)->get()->toArray();
		return view('product.show')
				->with([
						'data' => $timetable,
						'images' => $images
					   ]);
	}

	public function getData()
	{
		$sql = "SELECT tt.lat, tt.lng, tt.region, c.company, tt.id, tt.starttime, tt.endtime, tt.id
 			FROM timetables tt 
 			LEFT JOIN companies c ON tt.CompanyID = c.id 
 			where tt.starttime > NOW()
 			ORDER BY tt.starttime DESC
		";

		$count = Timetable::select('id')->get()->count();

		$sql = \DB::select($sql);

		$results = [];
		$cnt = 1;
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
			$decorated[] 			=  $row->id;
			$decorated[] 			=  $this->coatLink($row->company, route('timetable::list', ['id' => $row->id]));
			$decorated[] 			=  $row->region;
			$decorated[] 			=  $categoryImage;
			$decorated[] 			=  Carbon::parse($row->starttime)->format('d-m-Y');
			$decorated[] 			=  Carbon::parse($row->endtime	)->format('H:s') . ' - ' . Carbon::parse($row->endtime	)->format('H:s');
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

