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

	public static function saveCategories(Timetable $timetable, $categories)
	{
		if (!empty($categories['category']))
		{
			foreach ($categories['category'] as $key => $value)
			{
				if (!TimetableCategories::select('id')->where(['code' => $key])->exists())
				{
					dump($value, $timetable->getAttribute('id'));
					TimetableCategories::create([
														'code'         => $value,
														'timetable_id' => $timetable->getAttribute('id'),
												]);
				}
			}
		}


		return true;
	}

}
