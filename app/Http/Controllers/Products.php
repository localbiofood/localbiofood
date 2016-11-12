<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;


class Products extends Controller
{


	public function post(Request $request)
	{
		$allCategories = Category::getProducts();

		$data = $request->except('_token');
//		$file = $request->file('image')->move(public_path('assets/categories', array_get($data,'name', str_random(10))));
//		Storage::disk('local')->put('file.txt', 'Contents');
//		Categories::create($data);
		$request->file('image')->move(public_path('assets'), 'dickbutt');
		return back();
	}

	public function delete($id)
	{
		if (\Auth::user()->admin === "1")
		{
			$productCategory = Category::find($id);
			if ($productCategory !== null)
			{
				$productCategory->delete();
			}
		}
		return redirect()->back()->with(['productDelete' => 'success']);
	}


}

