<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::group(['middleware' => 'guest'], function () {
	Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
});



Auth::routes();

/**
 * Contains public timetable
 */
Route::get('/home', 'HomeController@index');
Route::get('/usefull', ['as' => 'useful::get', 'uses' => 'UsefullController@show']);
Route::get('/about', ['as' => 'about::get', 'uses' => 'AboutController@show']);
Route::get('/timetabledata', ['as' => 'timetabledata::post', 'uses' => 'TimetableController@getData']);
Route::get('/worktime-locations', ['as' => 'timetabledata::post', 'uses' => 'WorktimeController@getData']);
Route::get('/timetable', ['as' => 'timetable::list', 'uses' => 'TimetableController@show']);
Route::get('/timetable/show/{id?}', ['as' => 'timetable::show', 'uses' => 'TimetableController@show']);


Route::get('newpage', function () {
	return view('newPage');
});


Route::get('bio/about', function(){
    return view('about');
});

Route::get('bio/contact', function(){
    return view('contact');
});

/**
 * Contains User timetable, necessary to login
 */
Route::group(['middleware' => 'auth'], function () {
	Route::get('/profile', ['as' => 'profile', 'uses' => 'UserController@show'])->middleware('auth');
	Route::post('/profile', ['as' => 'profile::save', 'uses' => 'UserController@save'])->middleware('auth');


	Route::get('/admin', ['as' => 'admin::edit', 'uses' => 'Admin@show'])->middleware('auth');

	Route::get('/productsdelete/{id}', ['as' => 'products::delete', 'uses' => 'Products@delete'])->middleware('auth');
	Route::post('/admin/productscategories', ['as' => 'prodcat::add', 'uses' => 'Products@post'])->middleware('auth');
	Route::post('/gettimetables', ['as' => 'timetable::get', 'uses' => '\App\Http\Controllers\TimetableController@getTimetables()']);

	// User timetable
	Route::post('/usertimetable', ['as' => 'usertimetable::post', 'uses' => 'UserTimeTableController@post']);
	Route::get('/usertimetable', ['as' => 'usertimetable::list', 'uses' => 'UserTimeTableController@show']);
	Route::get('/usertimetable/edit/{id?}', ['as' => 'usertimetable::edit', 'uses' => 'UserTimeTableController@edit']);
	Route::get('/usertimetabledata', ['as' => 'usertimetabledata::post', 'uses' => 'UserTimeTableController@getData']);

});




