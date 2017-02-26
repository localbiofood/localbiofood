<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Timetable extends Authenticatable
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


	protected $table = 'timetables';


	/**
	 * @return mixed
	 * TODO: check if it is even used
	 */
	public static function getTimetable()
	{

		$sql = "SELECT tt.lat, tt.lng, tt.region, c.city, c.company, c.region, c.description, tt.id
 			FROM timetables tt
			LEFT JOIN companies c ON tt.CompanyID = c.id	
		";

		$result = \DB::select($sql);

		return $result;
		}

	public static function getTimetableData($id)
	{
		$sql = "SELECT tt.lat, tt.lng, tt.region, 
					tt.id, tt.description, c.code, tt.starttime, tt.endtime
 			FROM timetables tt
			LEFT JOIN timetable_categories c ON tt.id = c.timetable_id	
			WHERE tt.id = :timetable_id
		";

		$res = \DB::selectOne($sql,
						   [
							   'timetable_id' => $id
						   ]);

		$result = [];

		if (is_array($res))
		{
			foreach($res as $key => $row)
			{
				$result[$key] = $row;
			}

			$categories = TimetableCategories::select('id', 'code')
					->where('timetable_id', $id)
					->get()
					->pluck('code')
					->toArray();

			$result['categories'] = $categories;
		}


		return $result;
	}

	public function getCategories()
	{

	}

	public static function 	saveTimetable($data, $id)
	{
		$userID = \Auth::user()->id;
		$companyID = 1; // Patreiz hardcodets

		$time = array_get($data, 'time');
		$starttime = Carbon::parse(array_get($data, 'date') . $time);

		$time2 = array_get($data, 'time2');
		$endtime = Carbon::parse(array_get($data, 'date') . $time2);

		if (isset($data['new']))
		{
			$timetable = Timetable::create([
												   'companyID' => $companyID,
												   'region' => $data['region'],
												   'description' => $data['description'],
												   'lat' => $data['lat'],
												   'lng' => $data['lng'],
												   'starttime' => $starttime,
												   'endtime' => $endtime,
										   ]);
		} else {
			$timetable = Timetable::find($id);
			$update = [
					'companyID' => $companyID,
					'region' => $data['region'],
					'description' => $data['description'],
					'lat' => $data['lat'],
					'lng' => $data['lng'],
			];
			$timetable->update($update);
			$timetable->save();
		}

		return $timetable;
	}
}
