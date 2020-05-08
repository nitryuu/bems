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

// Route Monitoring
Route::get('dashboard', 'MoController@dashboard')->name('dashboard');

//Route Control
Route::get('control','CoController@control')->middleware('auth');

//Route Statistic
Route::get('statistic','StatController@stat');

//Route Login
Route::get('login','LoginController@index');
Route::post('login','LoginController@login')->name('login');
Route::get('logout','LoginController@logout')->name('logout');
