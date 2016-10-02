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


Route::get('website', 'WebsitesController@show')->name('website::show');

Route::get('bio/about', function(){
    return view('about');
});

Route::get('bio/contact', function(){
    return view('contact');
});



