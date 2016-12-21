<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TimetableCategories extends Authenticatable
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


	protected $table = 'timetable_categories';

	public static function saveCategories($timeTableId, $categories)
	{

		if (!empty($categories['category']))
		{
			foreach ($categories['category'] as $key => $value)
			{
				if ($value == 1)
				{
					if (!TimetableCategories::select('id')->where(['code' => $key])->exists())
					{
						TimetableCategories::create([
															'code'         => $key,
															'timetable_id' => $timeTableId,
													]);
					}
				}
			}
		}


		return true;
	}

}
