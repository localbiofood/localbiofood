<?php

namespace App\Http\Controllers;

use App\Timetable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//    	$worktimes = Timetable::getTimetable();


		$showcase = view('timetable.showcase');
		$region = view('region');
		$googleMap = view('googleMap');
        return view('startpage', ['showcase' => $showcase,  'region' => $region, 'googleMap' => $googleMap]);
    }
}
