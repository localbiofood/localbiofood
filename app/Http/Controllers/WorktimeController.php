<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Timetable;
use App\TimetableCategories;
use Illuminate\Http\Request;
use Carbon\Carbon;

class WorktimeController extends Controller
{

	public function getData()
	{
		$sql = "SELECT t.id, t.lat, t.lng, t.description, t.starttime, t.endtime, c.company
 				FROM timetables t
 				LEFT JOIN companies c ON t.companyID = c.id
			";
		$timeTables = \DB::select($sql, []);

		$final = [];
		foreach($timeTables as $row)
		{
			$row->starttime = Carbon::parse($row->starttime)->format('H:s');
			$row->endtime = Carbon::parse($row->endtime)->format('H:s');
			$final[] = $row;
		}

		return json_encode($final);
	}

}

