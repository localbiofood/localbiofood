<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Categories extends Authenticatable
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


	protected $table = 'product_types';

	public static function getProducts()
	{
		dd('izsacuas');
		return self::all();
	}
}
