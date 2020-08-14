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

Route::post('data', 'DashDataController@store');
Route::get('data', 'DashDataController@show');
Route::post('thingspeak','DashDataController@thingspeak');

Route::get('valueToday','DashDataController@valueToday')->name('valueToday');
Route::get('tillNow','DashDataController@tillNow')->name('tillNow');
Route::get('totalCost','DashDataController@totalCost')->name('totalCost');

Route::get('lantai1','DashDataController@lantai1')->name('lantai1');
Route::get('lantai2','DashDataController@lantai2')->name('lantai2');

Route::get('tableToday1','TableController@tableToday1')->name('tableToday1');
Route::get('tableToday2','TableController@tableToday2')->name('tableToday2');

Route::get('tableMonth1','TableController@tableMonth1')->name('tableMonth1');
Route::get('tableMonth2','TableController@tableMonth2')->name('tableMonth2');

Route::get('tableYear1','TableController@tableYear1')->name('tableYear1');
Route::get('tableYear2','TableController@tableYear2')->name('tableYear2');

Route::get('usageToday1','UsDataTodayController@usageToday1')->name('usageToday1');
Route::get('usageToday2','UsDataTodayController@usageToday2')->name('usageToday2');

Route::get('usageMonth1','UsDataMonthController@usageMonth1')->name('usageMonth1');
Route::get('usageMonth2','UsDataMonthController@usageMonth2')->name('usageMonth2');

Route::get('usageYear1','UsDataYearController@usageYear1')->name('usageYear1');
Route::get('usageYear2','UsDataYearController@usageYear2')->name('usageYear2');

Route::get('cost','CostDataController@cost')->name('cost');
Route::get('statistic','StatDataController@statistic')->name('statistic');

Route::post('postValue','CoController@postValue')->name('postValue');
Route::get('getStatus','CoController@getStatus')->name('getStatus');

Route::post('postMasterValue','CoController@postMasterValue')->name('postMasterValue');
Route::get('getMasterStatus','CoController@getMasterStatus')->name('getMasterStatus');

Route::get('getPreviousValue','CoController@getPreviousValue')->name('getPreviousValue');
Route::get('checkFeature','CoController@checkFeature')->name('checkFeature');

Route::get('userList','SettingController@userList')->name('userList');
Route::get('getData','DaController@getData')->name('getData');

Route::post('httpData','DashDataController@httpData')->name('httpData');
Route::get('mqttData','DashDataController@mqttData')->name('mqttData');

Route::get('customTopic1','CusController@customTopic1')->name('customTopic1');
Route::get('customTopic2','CusController@customTopic2')->name('customTopic2');
Route::get('customTopic3','CusController@customTopic3')->name('customTopic3');
Route::get('customTopic4','CusController@customTopic4')->name('customTopic4');

Route::get('custom1','CusController@custom1')->name('custom1');
Route::get('custom2','CusController@custom2')->name('custom2');
Route::get('custom3','CusController@custom3')->name('custom3');
Route::get('custom4','CusController@custom4')->name('custom4');