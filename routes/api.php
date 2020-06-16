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
  return ['x' => "A", 'y' => [rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99)]];
})->name('random');

Route::get('random2',function() {
  return [ 'x' => time() * 1000 , 'y' => rand(0,99)];
})->name('random2');

Route::get('today',function(){
   return [ 'x' => [[ strtotime('2020-05-16 11:00:40') * 1000, rand(0,99) ], [strtotime('2020-05-16 12:00:40') * 1000, rand(0,99)],
   [strtotime('2020-05-16 13:00:40') * 1000, rand(0,99)], [strtotime('2020-05-16 14:00:40') * 1000, rand(0,99)],
   [strtotime('2020-05-16 15:00:40') * 1000, rand(0,99)], [strtotime('2020-05-16 16:00:40') * 1000, rand(0,99)],
   [strtotime('2020-05-16 17:00:40') * 1000, rand(0,99)], [strtotime('2020-05-16 18:00:40') * 1000, rand(0,99)]]];
})->name('today');

Route::get('today2',function(){
  return [ 'x' => [['1st Room',rand(0,99)],['2nd Room',rand(0,99)],['3rd Room',rand(0,99)],['4th Room',rand(0,99)],['5th Room',rand(0,99)],['6th Room',rand(0,99)]]];
});

Route::get('today3',function(){
  return [ 'x' => [['1st Room',rand(0,99)],['2nd Room',rand(0,99)],['3rd Room',rand(0,99)],['4th Room',rand(0,99)],['5th Room',rand(0,99)],['6th Room',rand(0,99)]]];
});

Route::get('month',function(){
  return [ 'x' => [[ strtotime('2020-05-16 00:00:00') * 1000, rand(0,99)  ], [strtotime('2020-05-17 00:00:00') * 1000, rand(0,99) ],
  [strtotime('2020-05-18 00:00:00') * 1000, rand(0,99) ],[strtotime('2020-05-19 00:00:00') * 1000, rand(0,99) ],
  [strtotime('2020-05-20 00:00:00') * 1000, rand(0,99) ],[strtotime('2020-05-21 00:00:00') * 1000, rand(0,99) ],
  [strtotime('2020-05-22 00:00:00') * 1000, rand(0,99) ],[strtotime('2020-05-23 00:00:00') * 1000, rand(0,99) ]] ];
})->name('month');

Route::get('month2',function(){
  return [ 'x' => [['1st Room',rand(0,99)],['2nd Room',rand(0,99)],['3rd Room',rand(0,99)],['4th Room',rand(0,99)],['5th Room',rand(0,99)],['6th Room',rand(0,99)]]];
});

Route::get('month3',function(){
  return [ 'x' => [['1st Room',rand(0,99)],['2nd Room',rand(0,99)],['3rd Room',rand(0,99)],['4th Room',rand(0,99)],['5th Room',rand(0,99)],['6th Room',rand(0,99)]]];
});

Route::get('year',function(){
  return [ 'x' => [[ strtotime('2019-10-30 00:00:00') * 1000, rand(0,99) ],[strtotime('2019-11-30 00:00:00') * 1000, rand(0,99)],
  [strtotime('2019-12-30 00:00:00') * 1000, rand(0,99)],[strtotime('2020-01-30 00:00:00') * 1000, rand(0,99)],
  [strtotime('2020-02-28 00:00:00') * 1000, rand(0,99)],[strtotime('2020-03-30 00:00:00') * 1000, rand(0,99)],
  [strtotime('2020-04-30 00:00:00') * 1000, rand(0, 99)],[strtotime('2020-05-30 00:00:00') * 1000, rand(0,99)]]];
})->name('year');

Route::get('year2',function(){
  return [ 'x' => [['1st Room',rand(0,99)],['2nd Room',rand(0,99)],['3rd Room',rand(0,99)],['4th Room',rand(0,99)],['5th Room',rand(0,99)],['6th Room',rand(0,99)]]];
});

Route::get('year3',function(){
  return [ 'x' => [['1st Room',rand(0,99)],['2nd Room',rand(0,99)],['3rd Room',rand(0,99)],['4th Room',rand(0,99)],['5th Room',rand(0,99)],['6th Room',rand(0,99)]]];
});

Route::post('data', 'DataController@store');
Route::get('data', 'DataController@show');
Route::post('thingspeak','DataController@thingspeak');

Route::get('valueToday','DataController@valueToday')->name('valueToday');
Route::get('tillNow','DataController@tillNow')->name('tillNow');
Route::get('totalCost','DataController@totalCost')->name('totalCost');
