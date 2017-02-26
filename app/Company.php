<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Company extends Authenticatable
{
	use Notifiable;

	/**
	 * The attributes that are not mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = [];
	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [];


	public static function companyData()
	{
		$userID = Auth::user()->getAttribute('id');

		return  self::select('company', 'city', 'region', 'description')
				->where('user_id', $userID)
				->first();
	}

	public static function getCompanyID()
	{
		$userID = Auth::user()->getAttribute('id');

		$companyID = Company::select('id')->where('user_id', $userID)->first();

		return $companyID;
	}
}
