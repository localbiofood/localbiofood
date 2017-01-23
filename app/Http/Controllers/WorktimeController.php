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
		$timeTables = Timetable::select('lat', 'lng', 'description', 'starttime', 'endtime')->get();

		$final = [];
		foreach($timeTables as $row)
		{
			$row['starttime'] = Carbon::parse($row['starttime'])->format('H:s');
			$final[] = $row;
		}

		return json_encode($final);
	}

}

