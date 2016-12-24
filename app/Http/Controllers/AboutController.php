<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;


class AboutController extends Controller
{


	public function show()
	{
		return view('about');
	}
}

