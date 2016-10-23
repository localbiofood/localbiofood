<?php

namespace App\Http\Controllers;

use App\Company;

class TimetableController extends Controller
{


	public function show()
	{

		$data = Company::companyData();

		return view('timetable.list')->with(['data' => $data]);
	}


}

