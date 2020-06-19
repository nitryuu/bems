<?php

namespace App\Http\Controllers;

use App\Data;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class UsDataTodayController extends Controller
{
  public function usageToday1(){
    $total0=$total1=$total2=$total3=$total4=$total5=
    $total6=$total7=$total8=$total9=$total10=$total11=
    $total12=$total13=$total14=$total15=$total16=$total17=
    $total18=$total19=$total20=$total21=$total22=$total23= 0;

    $jam0t = Carbon::now()->format('Y-m-d 00:00:00');
    $jam1t = Carbon::now()->format('Y-m-d 01:00:00');
    $jam2t = Carbon::now()->format('Y-m-d 02:00:00');
    $jam3t = Carbon::now()->format('Y-m-d 03:00:00');
    $jam4t = Carbon::now()->format('Y-m-d 04:00:00');
    $jam5t = Carbon::now()->format('Y-m-d 05:00:00');
    $jam6t = Carbon::now()->format('Y-m-d 06:00:00');
    $jam7t = Carbon::now()->format('Y-m-d 07:00:00');
    $jam8t = Carbon::now()->format('Y-m-d 08:00:00');
    $jam9t = Carbon::now()->format('Y-m-d 09:00:00');
    $jam10t = Carbon::now()->format('Y-m-d 10:00:00');
    $jam11t = Carbon::now()->format('Y-m-d 11:00:00');
    $jam12t = Carbon::now()->format('Y-m-d 12:00:00');
    $jam13t = Carbon::now()->format('Y-m-d 13:00:00');
    $jam14t = Carbon::now()->format('Y-m-d 14:00:00');
    $jam15t = Carbon::now()->format('Y-m-d 15:00:00');
    $jam16t = Carbon::now()->format('Y-m-d 16:00:00');
    $jam17t = Carbon::now()->format('Y-m-d 17:00:00');
    $jam18t = Carbon::now()->format('Y-m-d 18:00:00');
    $jam19t = Carbon::now()->format('Y-m-d 19:00:00');
    $jam20t = Carbon::now()->format('Y-m-d 20:00:00');
    $jam21t = Carbon::now()->format('Y-m-d 21:00:00');
    $jam22t = Carbon::now()->format('Y-m-d 22:00:00');
    $jam23t = Carbon::now()->format('Y-m-d 23:00:00');

    $data = Data::UsageToday1()
    ->whereDate('created_at',Carbon::today())
    ->get()
    ->groupBy(function($date) {
    return Carbon::parse($date->created_at)->format('H');
  });

  if ($data->has('00')) {
    $data['jam00'] = $data['00'];
    unset($data['00']);

    foreach($data['jam00'] as $a){
      $total0 += $a['power'];
      $jam0t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam0u= strtotime($jam0t) * 1000;
  $data0 = collect($jam0u)->merge($total0);

  if ($data->has('01')) {
    $data['jam01'] = $data['01'];
    unset($data['01']);

    foreach($data['jam01'] as $a){
      $total1 += $a['power'];
      $jam1t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam1u= strtotime($jam1t) * 1000;
  $data1 = collect($jam1u)->merge($total1);
  if ($data->has('02')) {
    $data['jam02'] = $data['02'];
    unset($data['02']);

    foreach($data['jam02'] as $a){
      $total2 += $a['power'];
      $jam2t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam2u= strtotime($jam2t) * 1000;
  $data2 = collect($jam2u)->merge($total2);
  if ($data->has('03')) {
    $data['jam03'] = $data['03'];
    unset($data['03']);

    foreach($data['jam03'] as $a){
      $total3 += $a['power'];
      $jam3t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam3u= strtotime($jam3t) * 1000;
  $data3 = collect($jam3u)->merge($total3);
  if ($data->has('04')) {
    $data['jam04'] = $data['04'];
    unset($data['04']);

    foreach($data['jam04'] as $a){
      $total4 += $a['power'];
      $jam4t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam4u= strtotime($jam4t) * 1000;
  $data4 = collect($jam4u)->merge($total4);
  if ($data->has('05')) {
    $data['jam05'] = $data['05'];
    unset($data['05']);

    foreach($data['jam05'] as $a){
      $total5 += $a['power'];
      $jam5t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam5u= strtotime($jam5t) * 1000;
  $data5 = collect($jam5u)->merge($total5);
  if ($data->has('06')) {
    $data['jam06'] = $data['06'];
    unset($data['06']);

    foreach($data['jam06'] as $a){
      $total6 += $a['power'];
      $jam6t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam6u= strtotime($jam6t) * 1000;
  $data6 = collect($jam6u)->merge($total6);
  if ($data->has('07')) {
    $data['jam07'] = $data['07'];
    unset($data['07']);

    foreach($data['jam07'] as $a){
      $total7 += $a['power'];
      $jam7t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam7u= strtotime($jam7t) * 1000;
  $data7 = collect($jam7u)->merge($total7);
  if ($data->has('08')) {
    $data['jam08'] = $data['08'];
    unset($data['08']);

    foreach($data['jam08'] as $a){
      $total8 += $a['power'];
      $jam8t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam8u= strtotime($jam8t) * 1000;
  $data8 = collect($jam8u)->merge($total8);
  if ($data->has('09')) {
    $data['jam09'] = $data['09'];
    unset($data['09']);

    foreach($data['jam09'] as $a){
      $total9 += $a['power'];
      $jam9t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam9u= strtotime($jam9t) * 1000;
  $data9 = collect($jam9u)->merge($total9);
  if ($data->has('10')) {
    $data['jam10'] = $data['10'];
    unset($data['10']);

    foreach($data['jam10'] as $a){
      $total10 += $a['power'];
      $jam10t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam10u= strtotime($jam10t) * 1000;
  $data10 = collect($jam10u)->merge($total10);
  if ($data->has('11')) {
    $data['jam11'] = $data['11'];
    unset($data['11']);

    foreach($data['jam11'] as $a){
      $total11 += $a['power'];
      $jam11t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam11u= strtotime($jam11t) * 1000;
  $data11 = collect($jam11u)->merge($total11);
  if ($data->has('12')) {
    $data['jam12'] = $data['12'];
    unset($data['12']);

    foreach($data['jam12'] as $a){
      $total12 += $a['power'];
      $jam12t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam12u= strtotime($jam12t) * 1000;
  $data12 = collect($jam12u)->merge($total12);

  if ($data->has('13')) {
    $data['jam13'] = $data['13'];
    unset($data['13']);

    foreach($data['jam13'] as $a){
      $total13 += $a['power'];
      $jam13t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam13u= strtotime($jam13t) * 1000;
  $data13 = collect($jam13u)->merge($total13);
  if ($data->has('14')) {
    $data['jam14'] = $data['14'];
    unset($data['14']);

    foreach($data['jam14'] as $a){
      $total14 += $a['power'];
      $jam14t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam14u= strtotime($jam14t) * 1000;
  $data14 = collect($jam14u)->merge($total14);
  if ($data->has('15')) {
    $data['jam15'] = $data['15'];
    unset($data['15']);

    foreach($data['jam15'] as $a){
      $total15 += $a['power'];
      $jam15t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam15u= strtotime($jam15t) * 1000;
  $data15 = collect($jam15u)->merge($total15);
  if ($data->has('16')) {
    $data['jam16'] = $data['16'];
    unset($data['16']);

    foreach($data['jam16'] as $a){
      $total16 += $a['power'];
      $jam16t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam16u= strtotime($jam16t) * 1000;
  $data16 = collect($jam16u)->merge($total16);
  if ($data->has('17')) {
    $data['jam17'] = $data['17'];
    unset($data['17']);

    foreach($data['jam17'] as $a){
      $total17 += $a['power'];
      $jam17t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam17u= strtotime($jam17t) * 1000;
  $data17 = collect($jam17u)->merge($total17);
  if ($data->has('18')) {
    $data['jam18'] = $data['18'];
    unset($data['18']);

    foreach($data['jam18'] as $a){
      $total18 += $a['power'];
      $jam18t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam18u= strtotime($jam18t) * 1000;
  $data18 = collect($jam18u)->merge($total18);
  if ($data->has('19')) {
    $data['jam19'] = $data['19'];
    unset($data['19']);

    foreach($data['jam19'] as $a){
      $total19 += $a['power'];
      $jam19t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam19u= strtotime($jam19t) * 1000;
  $data19 = collect($jam19u)->merge($total19);
  if ($data->has('20')) {
    $data['jam20'] = $data['20'];
    unset($data['20']);

    foreach($data['jam20'] as $a){
      $total20 += $a['power'];
      $jam20t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam20u= strtotime($jam20t) * 1000;
  $data20 = collect($jam20u)->merge($total20);
  if ($data->has('21')) {
    $data['jam21'] = $data['21'];
    unset($data['21']);

    foreach($data['jam21'] as $a){
      $total21 += $a['power'];
      $jam21t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam21u= strtotime($jam21t) * 1000;
  $data21 = collect($jam21u)->merge($total21);
  if ($data->has('22')) {
    $data['jam22'] = $data['22'];
    unset($data['22']);

    foreach($data['jam22'] as $a){
      $total22 += $a['power'];
      $jam22t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam22u= strtotime($jam22t) * 1000;
  $data22 = collect($jam22u)->merge($total22);
  if ($data->has('23')) {
    $data['jam23'] = $data['23'];
    unset($data['23']);

    foreach($data['jam23'] as $a){
      $total23 += $a['power'];
      $jam23t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam23u= strtotime($jam23t) * 1000;
  $data23 = collect($jam23u)->merge($total23);

  $data = new Collection();
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam0t){
    $data = $data->push($data0);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam1t){
    $data = $data->push($data1);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam2t){
    $data = $data->push($data2);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam3t){
    $data = $data->push($data3);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam4t){
    $data = $data->push($data4);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam5t){
    $data = $data->push($data5);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam6t){
    $data = $data->push($data6);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam7t){
    $data = $data->push($data7);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam8t){
    $data = $data->push($data8);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam9t){
    $data = $data->push($data9);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam10t){
    $data = $data->push($data10);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam11t){
    $data = $data->push($data11);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam12t){
    $data = $data->push($data12);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam13t){
    $data = $data->push($data13);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam14t){
    $data = $data->push($data14);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam15t){
    $data = $data->push($data15);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam16t){
    $data = $data->push($data16);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam17t){
    $data = $data->push($data17);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam18t){
    $data = $data->push($data18);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam19t){
    $data = $data->push($data19);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam20t){
    $data = $data->push($data20);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam21t){
    $data = $data->push($data21);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam22t){
    $data = $data->push($data22);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam23t){
    $data = $data->push($data23);
  }

    return [ 'power' => $data ] ;
  }

  public function UsageToday2(){
    $total0=$total1=$total2=$total3=$total4=$total5=
    $total6=$total7=$total8=$total9=$total10=$total11=
    $total12=$total13=$total14=$total15=$total16=$total17=
    $total18=$total19=$total20=$total21=$total22=$total23= 0;

    $jam0t = Carbon::now()->format('Y-m-d 00:00:00');
    $jam1t = Carbon::now()->format('Y-m-d 01:00:00');
    $jam2t = Carbon::now()->format('Y-m-d 02:00:00');
    $jam3t = Carbon::now()->format('Y-m-d 03:00:00');
    $jam4t = Carbon::now()->format('Y-m-d 04:00:00');
    $jam5t = Carbon::now()->format('Y-m-d 05:00:00');
    $jam6t = Carbon::now()->format('Y-m-d 06:00:00');
    $jam7t = Carbon::now()->format('Y-m-d 07:00:00');
    $jam8t = Carbon::now()->format('Y-m-d 08:00:00');
    $jam9t = Carbon::now()->format('Y-m-d 09:00:00');
    $jam10t = Carbon::now()->format('Y-m-d 10:00:00');
    $jam11t = Carbon::now()->format('Y-m-d 11:00:00');
    $jam12t = Carbon::now()->format('Y-m-d 12:00:00');
    $jam13t = Carbon::now()->format('Y-m-d 13:00:00');
    $jam14t = Carbon::now()->format('Y-m-d 14:00:00');
    $jam15t = Carbon::now()->format('Y-m-d 15:00:00');
    $jam16t = Carbon::now()->format('Y-m-d 16:00:00');
    $jam17t = Carbon::now()->format('Y-m-d 17:00:00');
    $jam18t = Carbon::now()->format('Y-m-d 18:00:00');
    $jam19t = Carbon::now()->format('Y-m-d 19:00:00');
    $jam20t = Carbon::now()->format('Y-m-d 20:00:00');
    $jam21t = Carbon::now()->format('Y-m-d 21:00:00');
    $jam22t = Carbon::now()->format('Y-m-d 22:00:00');
    $jam23t = Carbon::now()->format('Y-m-d 23:00:00');

    $data = Data::UsageToday2()
    ->whereDate('created_at',Carbon::today())
    ->where('created_at', '>=', Carbon::now()->subDay())
    ->get()
    ->groupBy(function($date) {
    return Carbon::parse($date->created_at)->format('H');
  });

  if ($data->has('00')) {
    $data['jam00'] = $data['00'];
    unset($data['00']);

    foreach($data['jam00'] as $a){
      $total0 += $a['power'];
      $jam0t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam0u= strtotime($jam0t) * 1000;
  $data0 = collect($jam0u)->merge($total0);

  if ($data->has('01')) {
    $data['jam01'] = $data['01'];
    unset($data['01']);

    foreach($data['jam01'] as $a){
      $total1 += $a['power'];
      $jam1t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam1u= strtotime($jam1t) * 1000;
  $data1 = collect($jam1u)->merge($total1);
  if ($data->has('02')) {
    $data['jam02'] = $data['02'];
    unset($data['02']);

    foreach($data['jam02'] as $a){
      $total2 += $a['power'];
      $jam2t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam2u= strtotime($jam2t) * 1000;
  $data2 = collect($jam2u)->merge($total2);
  if ($data->has('03')) {
    $data['jam03'] = $data['03'];
    unset($data['03']);

    foreach($data['jam03'] as $a){
      $total3 += $a['power'];
      $jam3t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam3u= strtotime($jam3t) * 1000;
  $data3 = collect($jam3u)->merge($total3);
  if ($data->has('04')) {
    $data['jam04'] = $data['04'];
    unset($data['04']);

    foreach($data['jam04'] as $a){
      $total4 += $a['power'];
      $jam4t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam4u= strtotime($jam4t) * 1000;
  $data4 = collect($jam4u)->merge($total4);
  if ($data->has('05')) {
    $data['jam05'] = $data['05'];
    unset($data['05']);

    foreach($data['jam05'] as $a){
      $total5 += $a['power'];
      $jam5t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam5u= strtotime($jam5t) * 1000;
  $data5 = collect($jam5u)->merge($total5);
  if ($data->has('06')) {
    $data['jam06'] = $data['06'];
    unset($data['06']);

    foreach($data['jam06'] as $a){
      $total6 += $a['power'];
      $jam6t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam6u= strtotime($jam6t) * 1000;
  $data6 = collect($jam6u)->merge($total6);
  if ($data->has('07')) {
    $data['jam07'] = $data['07'];
    unset($data['07']);

    foreach($data['jam07'] as $a){
      $total7 += $a['power'];
      $jam7t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam7u= strtotime($jam7t) * 1000;
  $data7 = collect($jam7u)->merge($total7);
  if ($data->has('08')) {
    $data['jam08'] = $data['08'];
    unset($data['08']);

    foreach($data['jam08'] as $a){
      $total8 += $a['power'];
      $jam8t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam8u= strtotime($jam8t) * 1000;
  $data8 = collect($jam8u)->merge($total8);
  if ($data->has('09')) {
    $data['jam09'] = $data['09'];
    unset($data['09']);

    foreach($data['jam09'] as $a){
      $total9 += $a['power'];
      $jam9t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam9u= strtotime($jam9t) * 1000;
  $data9 = collect($jam9u)->merge($total9);
  if ($data->has('10')) {
    $data['jam10'] = $data['10'];
    unset($data['10']);

    foreach($data['jam10'] as $a){
      $total10 += $a['power'];
      $jam10t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam10u= strtotime($jam10t) * 1000;
  $data10 = collect($jam10u)->merge($total10);
  if ($data->has('11')) {
    $data['jam11'] = $data['11'];
    unset($data['11']);

    foreach($data['jam11'] as $a){
      $total11 += $a['power'];
      $jam11t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam11u= strtotime($jam11t) * 1000;
  $data11 = collect($jam11u)->merge($total11);
  if ($data->has('12')) {
    $data['jam12'] = $data['12'];
    unset($data['12']);

    foreach($data['jam12'] as $a){
      $total12 += $a['power'];
      $jam12t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam12u= strtotime($jam12t) * 1000;
  $data12 = collect($jam12u)->merge($total12);

  if ($data->has('13')) {
    $data['jam13'] = $data['13'];
    unset($data['13']);

    foreach($data['jam13'] as $a){
      $total13 += $a['power'];
      $jam13t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam13u= strtotime($jam13t) * 1000;
  $data13 = collect($jam13u)->merge($total13);
  if ($data->has('14')) {
    $data['jam14'] = $data['14'];
    unset($data['14']);

    foreach($data['jam14'] as $a){
      $total14 += $a['power'];
      $jam14t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam14u= strtotime($jam14t) * 1000;
  $data14 = collect($jam14u)->merge($total14);
  if ($data->has('15')) {
    $data['jam15'] = $data['15'];
    unset($data['15']);

    foreach($data['jam15'] as $a){
      $total15 += $a['power'];
      $jam15t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam15u= strtotime($jam15t) * 1000;
  $data15 = collect($jam15u)->merge($total15);
  if ($data->has('16')) {
    $data['jam16'] = $data['16'];
    unset($data['16']);

    foreach($data['jam16'] as $a){
      $total16 += $a['power'];
      $jam16t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam16u= strtotime($jam16t) * 1000;
  $data16 = collect($jam16u)->merge($total16);
  if ($data->has('17')) {
    $data['jam17'] = $data['17'];
    unset($data['17']);

    foreach($data['jam17'] as $a){
      $total17 += $a['power'];
      $jam17t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam17u= strtotime($jam17t) * 1000;
  $data17 = collect($jam17u)->merge($total17);
  if ($data->has('18')) {
    $data['jam18'] = $data['18'];
    unset($data['18']);

    foreach($data['jam18'] as $a){
      $total18 += $a['power'];
      $jam18t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam18u= strtotime($jam18t) * 1000;
  $data18 = collect($jam18u)->merge($total18);
  if ($data->has('19')) {
    $data['jam19'] = $data['19'];
    unset($data['19']);

    foreach($data['jam19'] as $a){
      $total19 += $a['power'];
      $jam19t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam19u= strtotime($jam19t) * 1000;
  $data19 = collect($jam19u)->merge($total19);
  if ($data->has('20')) {
    $data['jam20'] = $data['20'];
    unset($data['20']);

    foreach($data['jam20'] as $a){
      $total20 += $a['power'];
      $jam20t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam20u= strtotime($jam20t) * 1000;
  $data20 = collect($jam20u)->merge($total20);
  if ($data->has('21')) {
    $data['jam21'] = $data['21'];
    unset($data['21']);

    foreach($data['jam21'] as $a){
      $total21 += $a['power'];
      $jam21t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam21u= strtotime($jam21t) * 1000;
  $data21 = collect($jam21u)->merge($total21);
  if ($data->has('22')) {
    $data['jam22'] = $data['22'];
    unset($data['22']);

    foreach($data['jam22'] as $a){
      $total22 += $a['power'];
      $jam22t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam22u= strtotime($jam22t) * 1000;
  $data22 = collect($jam22u)->merge($total22);
  if ($data->has('23')) {
    $data['jam23'] = $data['23'];
    unset($data['23']);

    foreach($data['jam23'] as $a){
      $total23 += $a['power'];
      $jam23t = $a['created_at']->format('Y-m-d H:00:00');
    }
  }
  $jam23u= strtotime($jam23t) * 1000;
  $data23 = collect($jam23u)->merge($total23);

  $data = new Collection();
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam0t){
    $data = $data->push($data0);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam1t){
    $data = $data->push($data1);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam2t){
    $data = $data->push($data2);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam3t){
    $data = $data->push($data3);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam4t){
    $data = $data->push($data4);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam5t){
    $data = $data->push($data5);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam6t){
    $data = $data->push($data6);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam7t){
    $data = $data->push($data7);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam8t){
    $data = $data->push($data8);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam9t){
    $data = $data->push($data9);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam10t){
    $data = $data->push($data10);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam11t){
    $data = $data->push($data11);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam12t){
    $data = $data->push($data12);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam13t){
    $data = $data->push($data13);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam14t){
    $data = $data->push($data14);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam15t){
    $data = $data->push($data15);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam16t){
    $data = $data->push($data16);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam17t){
    $data = $data->push($data17);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam18t){
    $data = $data->push($data18);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam19t){
    $data = $data->push($data19);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam20t){
    $data = $data->push($data20);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam21t){
    $data = $data->push($data21);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam22t){
    $data = $data->push($data22);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $jam23t){
    $data = $data->push($data23);
  }

    return [ 'power' => $data ] ;
  }
}
?>
