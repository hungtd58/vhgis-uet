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

Route::get('/', 					'VHGISController@getHomeVHGIS');
Route::get('/getbounds', 			'VHGISController@getBoundsByYear');
Route::get('/gethistoryname', 		'VHGISController@getHistoryName');
Route::get('/geteventlist', 		'VHGISController@getEventList');
