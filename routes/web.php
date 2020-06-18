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


Route::get('/', function() {
  return redirect('dashboard');
});

// Route Dashboard
Route::get('dashboard', 'DaController@dashboard')->name('dashboard');

Route::get('dashboard2', 'DaController@dashboard2')->name('dashboard2');

//Route Usages
Route::get('usages','UsController@usages')->name('usages');

//Route Control
Route::get('control','CoController@control')->middleware('auth')->name('control');

//Route cost
Route::get('cost','CostController@cost')->name('cost');

//Route Statistic
Route::get('statistic','StatController@stat');

//Route Login
Route::get('login','LoginController@index');
Route::post('login','LoginController@login')->name('login');
Route::get('logout','LoginController@logout')->name('logout');

Route::get('/mqtt/publish/{topic1}/{topic2}/{topic3}/{topic4}/{topic5}','DashDataController@SubscribetoTopic1');
Route::post('storeData','DashDataController@storeData');
