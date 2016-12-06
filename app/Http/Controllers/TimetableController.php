<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Timetable;
use App\TimetableCategories;
use Illuminate\Http\Request;

class TimetableController extends Controller
{


	public function show(Request $request, $id = null)
	{
		$data = Company::companyData();
		$data['timetable'] = Timetable::getTimetableData($id);

		return view('timetable')->with(['data' => $data]);
	}


	public function post(Request $request, $id = 0)
	{
		$data = $request->except('_token', 'category');
		$categories = $request->only('category');

		Timetable::saveTimetable($data);
		TimetableCategories::saveCategories($id, $categories);

		return redirect()->route('timetable::edit', ['timetable' => $id])->with('success', 'success');
	}

}
