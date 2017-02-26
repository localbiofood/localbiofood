<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Company;

class UserController extends Controller
{
	public function show()
	{
		$data = Company::companyData();

		return view('profile')->with(['data' => $data]);
	}


	public function save(Request $request)
	{
		$userID = Auth::user()->getAttribute('id');

		$rules = [
				'company' => 'required',
				'name'    => 'string',
				'city'    => 'string',
		];

		$data = $request->except('_token');

		$validator = Validator::make($data, $rules);

		if ($validator->fails())
		{
			return redirect(route('profile'))->withErrors($validator)->withInput();
		}

		if (Company::where('user_id', $userID)->exists())
		{
			$company = Company::where('user_id', $userID)->first();
			$company->update([
									 'user_id'     => $userID,
									 'company'     => $data['company'],
									 'city'        => $data['city'],
									 'region'      => $data['region'],
									 'description' => $data['description'],
							 ]);
		}
		else
		{
			Company::create([
												  'user_id' => $userID,
												  'company' => $data['company'],
												  'city'    => $data['city'],
												  'region'  => $data['region'],
												  'description' => $data['description'],

										  ]);
		}


		return redirect(route('profile'))->with('success', 'success');
	}
}

