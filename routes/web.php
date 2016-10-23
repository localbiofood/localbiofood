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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    return view('startpage');
});

Route::get('newpage', function () {
	return view('newPage');
});


Route::get('bio/about', function(){
    return view('about');
});

Route::get('bio/contact', function(){
    return view('contact');
});

Route::get('/profile', ['as' => 'profile', 'uses' => 'UserController@show'])->middleware('auth');
Route::post('/profile', ['as' => 'profile::save', 'uses' => 'UserController@save'])->middleware('auth');
Route::get('/timetable', ['as' => 'timetable::list', 'uses' => 'TimetableController@show'])->middleware('auth');




