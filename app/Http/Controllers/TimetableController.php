<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Timetable;
use App\TimetableCategories;
use Illuminate\Http\Request;

class TimetableController extends Controller
{


	public function show()
	{

		$data = Company::companyData();

		return view('timetable')->with(['data' => $data]);
	}

	public function post(Request $request, $id = 0)
	{
		$data = $request->except('_token', 'category');
		$categories = $request->only('category');


//		$timetable = ($id) ? Timetable::find($id) : new Timetable;
//		$timetable->fill($data);
//		$timetable->save();
//
//		$timeTableId = $timetable->id;


		$this->saveCategories(10, $categories);

		return redirect()->route('timetable::edit')->with('success', 'success');
	}


	private function saveCategories($timeTableId, $categories)
	{
		$allrecords = TimetableCategories::where('timetable_id', $timeTableId)->get();
		dd($allrecords, $categories);
	}

}

