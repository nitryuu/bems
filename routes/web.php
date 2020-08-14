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

// Route Custom Chart
Route::get('custom','CusController@index')->name('custom');

//Route Login
Route::get('login','LoginController@index');
Route::post('login','LoginController@login')->name('login');
Route::get('logout','LoginController@logout')->name('logout');

Route::get('/mqtt/publish/bems/{any}','DashDataController@SubscribetoTopic')->where('any','.*');
Route::get('/mqtt/publish/custom1/{any}','CusController@SubscribetoTopic1')->where('any','.*');
Route::get('/mqtt/publish/custom2/{any}','CusController@SubscribetoTopic2')->where('any','.*');
Route::get('/mqtt/publish/custom3/{any}','CusController@SubscribetoTopic3')->where('any','.*');
Route::get('/mqtt/publish/custom4/{any}','CusController@SubscribetoTopic4')->where('any','.*');

Route::post('storeData','DashDataController@storeData');

Route::get('settings','SettingController@index')->middleware('auth')->name('settings');
Route::post('storeSettings','SettingController@storeSettings')->middleware('auth')->name('storeSettings');
Route::get('customChartSettings','CusController@customChartSettings')->name('customChartSettings');
Route::get('clear/{id}','CusController@clear')->name('clear');

Route::get('addUser','SettingController@addUser')->middleware('auth')->name('addUser');
Route::post('storeNewUser','SettingController@storeNewUser')->middleware('auth')->name('storeNewUser');

Route::get('edit/{id}','SettingController@edit')->middleware('auth');
Route::post('update','SettingController@update')->middleware('auth')->name('update');
Route::get('delete/{id}','SettingController@delete')->middleware('auth')->name('delete');
Route::get('reset/{id}','SettingController@reset')->middleware('auth')->name('reset');
Route::post('changePass','SettingController@changePass')->middleware('auth')->name('changePass');