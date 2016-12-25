<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Timetable;
use App\TimetableCategories;
use Illuminate\Http\Request;

class UsefullController extends Controller
{

	public function show(Request $request, $id = null)
	{
		return view('usefull');
	}
}

