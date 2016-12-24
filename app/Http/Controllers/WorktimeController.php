<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Timetable;
use App\TimetableCategories;
use Illuminate\Http\Request;

class WorktimeController extends Controller
{

	public function getData()
	{
		$timeTables = Timetable::select('lat', 'lng')->get();

		return json_encode($timeTables);
	}

}

