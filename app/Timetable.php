<?php

namespace App;

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

		$sql = "SELECT tt.event_length, tt.lat, tt.lng, tt.region, tt.time_when, c.city, c.company, c.region, c.description, tt.id
 			FROM timetables tt
			LEFT JOIN companies c ON tt.CompanyID = c.id	
		";

		$result = \DB::select($sql);

		return $result;
		}

	public static function getTimetableData($id)
	{
		$sql = "SELECT tt.event_length, tt.lat, tt.lng, tt.region, tt.time_when, 
					c.city, c.company, c.description, tt.id
 			FROM timetables tt
			LEFT JOIN companies c ON tt.CompanyID = c.id	
			WHERE tt.id = :timetable_id
		";

		$res = \DB::selectOne($sql,
						   [
							   'timetable_id' => $id
						   ]);

			return $res;
	}


	public static function 	saveTimetable($data, $id)
	{
		$userID = \Auth::user()->id;
		$companyData = Company::select('id')->where('user_id', $userID)->first();
//		$companyID = $companyData->getAttribute('id');
		$companyID = 1; // Patreiz hardcodets

		if ($id === 0)
		{
			$timetable = Timetable::create([
												   'companyID' => $companyID,
												   'region' => $data['region'],
												   'time_when' => $data['time_when'],
												   'event_length' => $data['event_length'],
												   'lat' => $data['lat'],
												   'lng' => $data['lng'],
										   ]);
		} else {
			$timetable = Timetable::find($id);
			$update = [
					'companyID' => $companyID,
					'region' => $data['region'],
					'time_when' => $data['time_when'],
					'event_length' => $data['event_length'],
					'lat' => $data['lat'],
					'lng' => $data['lng'],
			];
			$timetable->update($update);
			$timetable->save();
		}

		return $timetable;
	}
}
