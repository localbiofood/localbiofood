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

		$sql = "SELECT tt.event_length, tt.lat, tt.lng, tt.region, tt.time_when, c.city, c.company, c.region, c.description, tt.id
 			FROM timetables tt
			LEFT JOIN companies c ON tt.CompanyID = c.id	
			WHERE tt.id = ':timetable_id'
		";

		$res = \DB::select($sql,
						   [
							   'timetable_id' => $id
						   ]);

		return $res;
	}


	public static function 	saveTimetable($data)
	{
		$userID = \Auth::user()->id;
		$companyData = Company::select('id')->where('user_id', $userID)->first();
//		$companyID = $companyData->getAttribute('id');
		$companyID = 1; // Patreiz hardcodets

		$timetable = Timetable::create([
				'companyID' => $companyID,
				'region' => $data['region'],
				'time_when' => $data['time_when'],
				'event_length' => $data['event_length'],
				'lat' => $data['lat'],
				'lng' => $data['lng'],
						   ]);

		return $timetable;
	}
}
