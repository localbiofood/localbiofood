<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;

class TimetableImage extends Authenticatable
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


	protected $table = 'TimetableImages';


	public static function saveImages(Request $request, Timetable $timetable)
	{

		if ($request->file('image') === [] || $request->file('image') == '')
		{
			return false;
		}

		$timetableID = $timetable->getAttribute('id');

		$userID = \Auth::user()->getAttribute('id');

		$path = 'uploads/' . $userID;
		if (!file_exists($path)) {
			File::makeDirectory($path);
		}

		$image = $request->file('image');
		$filename  = time() . '.' . $image->getClientOriginalExtension();

		$path ='uploads/' . $userID . '/' . $filename;
		$path_min = 'uploads/' . $userID . '/min_' . $filename;

		$callback = function ($constraint) { $constraint->upsize();  $constraint->aspectRatio(); };
		ImageManagerStatic::make($image->getRealPath())->resize(870, null, $callback)->save($path);
		ImageManagerStatic::make($image->getRealPath())->resize(100, null, $callback)->save($path_min);

		TimetableImage::create([
									   'user_id' => $userID,
									   'timetable_id' => $timetableID,
									   'image_path' => $path
							   ]);

	}

}
