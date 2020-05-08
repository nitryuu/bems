<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('random',function() {
  return ['x' => "A", 'y' => [rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99)]];
})->name('random');

Route::get('totalcost',function(){
  return ['x' => "A", 'y' => [300,rand(0,550)]];
})->name('tcost');

Route::post('data', 'DataController@store');
Route::get('data', 'DataController@show');
