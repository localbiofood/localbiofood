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

Route::get('/home', 'HomeController@index');


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
Route::get('/timetable/{id?}', ['as' => 'timetable::edit', 'uses' => 'TimetableController@show'])->middleware('auth');
Route::post('/timetable', ['as' => 'timetable::post', 'uses' => 'TimetableController@post'])->middleware('auth');
Route::get('/admin', ['as' => 'admin::edit', 'uses' => 'Admin@show'])->middleware('auth');

Route::get('/productsdelete/{id}', ['as' => 'products::delete', 'uses' => 'Products@delete'])->middleware('auth');
Route::post('/admin/productscategories', ['as' => 'prodcat::add', 'uses' => 'Products@post'])->middleware('auth');
Route::post('/gettimetables', ['as' => 'timetable::get', 'uses' => '\App\Http\Controllers\TimetableController@getTimetables()']);

