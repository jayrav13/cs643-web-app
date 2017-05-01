<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'services'], function() {

	Route::group(['prefix' => 'rides'], function() {
		Route::get("/", "RidesController@index");
	});

	Route::group(['prefix' => 'locations'], function() {
		Route::get("peak", "LocationsController@peak");
	});

	Route::group(['prefix' => 'dates'], function() {
		Route::get("/", "RidesController@pickups_dates");
	});

});