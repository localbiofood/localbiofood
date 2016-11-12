<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;

class Admin extends Controller
{


	public function show()
	{
		$allCategories = Category::getProducts();

		$data = [];

		return view('admin.edit')->with([
				'data' => $data,
				'categories' => $allCategories
										]);
	}


}

