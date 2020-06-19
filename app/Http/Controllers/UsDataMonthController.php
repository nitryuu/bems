<?php

namespace App\Http\Controllers;

use App\Data;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class UsDataMonthController extends Controller
{
  public function usageMonth1(){
    $total0=$total1=$total2=$total3=$total4=$total5=
    $total6=$total7=$total8=$total9=$total10=$total11=
    $total12=$total13=$total14=$total15=$total16=$total17=
    $total18=$total19=$total20=$total21=$total22=$total23=
    $total24=$total25=$total26=$total27=$total28=$total29=
    $total30= 0;

    $hari0t = Carbon::now()->format('Y-m-01 00:00:00');
    $hari1t = Carbon::now()->format('Y-m-02 00:00:00');
    $hari2t = Carbon::now()->format('Y-m-03 00:00:00');
    $hari3t = Carbon::now()->format('Y-m-04 00:00:00');
    $hari4t = Carbon::now()->format('Y-m-05 00:00:00');
    $hari5t = Carbon::now()->format('Y-m-06 00:00:00');
    $hari6t = Carbon::now()->format('Y-m-07 00:00:00');
    $hari7t = Carbon::now()->format('Y-m-08 00:00:00');
    $hari8t = Carbon::now()->format('Y-m-09 00:00:00');
    $hari9t = Carbon::now()->format('Y-m-10 00:00:00');
    $hari10t = Carbon::now()->format('Y-m-11 00:00:00');
    $hari11t = Carbon::now()->format('Y-m-12 00:00:00');
    $hari12t = Carbon::now()->format('Y-m-13 00:00:00');
    $hari13t = Carbon::now()->format('Y-m-14 00:00:00');
    $hari14t = Carbon::now()->format('Y-m-15 00:00:00');
    $hari15t = Carbon::now()->format('Y-m-16 00:00:00');
    $hari16t = Carbon::now()->format('Y-m-17 00:00:00');
    $hari17t = Carbon::now()->format('Y-m-18 00:00:00');
    $hari18t = Carbon::now()->format('Y-m-19 00:00:00');
    $hari19t = Carbon::now()->format('Y-m-20 00:00:00');
    $hari20t = Carbon::now()->format('Y-m-21 00:00:00');
    $hari21t = Carbon::now()->format('Y-m-22 00:00:00');
    $hari22t = Carbon::now()->format('Y-m-23 00:00:00');
    $hari23t = Carbon::now()->format('Y-m-24 00:00:00');
    $hari24t = Carbon::now()->format('Y-m-25 00:00:00');
    $hari25t = Carbon::now()->format('Y-m-26 00:00:00');
    $hari26t = Carbon::now()->format('Y-m-27 00:00:00');
    $hari27t = Carbon::now()->format('Y-m-28 00:00:00');
    $hari28t = Carbon::now()->format('Y-m-29 00:00:00');
    $hari29t = Carbon::now()->format('Y-m-30 00:00:00');
    $hari30t = Carbon::now()->format('Y-m-31 00:00:00');

    $data = Data::UsageToday1()
    ->whereMonth('created_at',Carbon::now()->format('m'))
    ->get()
    ->groupBy(function($date) {
    return Carbon::parse($date->created_at)->format('d');
  });

  if ($data->has('01')) {
    $data['hari01'] = $data['01'];
    unset($data['01']);

    foreach($data['hari01'] as $a){
      $total0 += $a['power'];
      $hari0t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari0u= strtotime($hari0t) * 1000;
  $data0 = collect($hari0u)->merge($total0);

  if ($data->has('02')) {
    $data['hari02'] = $data['02'];
    unset($data['02']);

    foreach($data['hari02'] as $a){
      $total1 += $a['power'];
      $hari1t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari1u= strtotime($hari1t) * 1000;
  $data1 = collect($hari1u)->merge($total1);
  if ($data->has('03')) {
    $data['hari03'] = $data['03'];
    unset($data['03']);

    foreach($data['hari03'] as $a){
      $total2 += $a['power'];
      $hari2t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari2u= strtotime($hari2t) * 1000;
  $data2 = collect($hari2u)->merge($total2);
  if ($data->has('04')) {
    $data['hari04'] = $data['04'];
    unset($data['04']);

    foreach($data['hari04'] as $a){
      $total3 += $a['power'];
      $hari3t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari3u= strtotime($hari3t) * 1000;
  $data3 = collect($hari3u)->merge($total3);
  if ($data->has('05')) {
    $data['hari54'] = $data['05'];
    unset($data['05']);

    foreach($data['hari05'] as $a){
      $total4 += $a['power'];
      $hari4t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari4u= strtotime($hari4t) * 1000;
  $data4 = collect($hari4u)->merge($total4);
  if ($data->has('06')) {
    $data['hari06'] = $data['06'];
    unset($data['06']);

    foreach($data['hari06'] as $a){
      $total5 += $a['power'];
      $hari5t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari5u= strtotime($hari5t) * 1000;
  $data5 = collect($hari5u)->merge($total5);
  if ($data->has('07')) {
    $data['hari07'] = $data['07'];
    unset($data['07']);

    foreach($data['hari07'] as $a){
      $total6 += $a['power'];
      $hari6t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari6u= strtotime($hari6t) * 1000;
  $data6 = collect($hari6u)->merge($total6);
  if ($data->has('08')) {
    $data['hari08'] = $data['08'];
    unset($data['08']);

    foreach($data['hari08'] as $a){
      $total7 += $a['power'];
      $hari7t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari7u= strtotime($hari7t) * 1000;
  $data7 = collect($hari7u)->merge($total7);
  if ($data->has('09')) {
    $data['hari09'] = $data['09'];
    unset($data['09']);

    foreach($data['hari09'] as $a){
      $total8 += $a['power'];
      $hari8t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari8u= strtotime($hari8t) * 1000;
  $data8 = collect($hari8u)->merge($total8);
  if ($data->has('10')) {
    $data['hari10'] = $data['10'];
    unset($data['10']);

    foreach($data['hari10'] as $a){
      $total9 += $a['power'];
      $hari9t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari9u= strtotime($hari9t) * 1000;
  $data9 = collect($hari9u)->merge($total9);
  if ($data->has('11')) {
    $data['hari11'] = $data['11'];
    unset($data['11']);

    foreach($data['hari11'] as $a){
      $total10 += $a['power'];
      $hari10t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari10u= strtotime($hari10t) * 1000;
  $data10 = collect($hari10u)->merge($total10);
  if ($data->has('12')) {
    $data['hari12'] = $data['12'];
    unset($data['12']);

    foreach($data['hari12'] as $a){
      $total11 += $a['power'];
      $hari11t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari11u= strtotime($hari11t) * 1000;
  $data11 = collect($hari11u)->merge($total11);
  if ($data->has('13')) {
    $data['hari13'] = $data['13'];
    unset($data['13']);

    foreach($data['hari13'] as $a){
      $total12 += $a['power'];
      $hari12t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari12u= strtotime($hari12t) * 1000;
  $data12 = collect($hari12u)->merge($total12);

  if ($data->has('14')) {
    $data['hari14'] = $data['14'];
    unset($data['14']);

    foreach($data['hari14'] as $a){
      $total13 += $a['power'];
      $hari13t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari13u= strtotime($hari13t) * 1000;
  $data13 = collect($hari13u)->merge($total13);
  if ($data->has('15')) {
    $data['hari15'] = $data['15'];
    unset($data['15']);

    foreach($data['hari15'] as $a){
      $total14 += $a['power'];
      $hari14t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari14u= strtotime($hari14t) * 1000;
  $data14 = collect($hari14u)->merge($total14);
  if ($data->has('16')) {
    $data['hari16'] = $data['16'];
    unset($data['16']);

    foreach($data['hari16'] as $a){
      $total15 += $a['power'];
      $hari15t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari15u= strtotime($hari15t) * 1000;
  $data15 = collect($hari15u)->merge($total15);
  if ($data->has('17')) {
    $data['hari17'] = $data['17'];
    unset($data['17']);

    foreach($data['hari17'] as $a){
      $total16 += $a['power'];
      $hari16t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari16u= strtotime($hari16t) * 1000;
  $data16 = collect($hari16u)->merge($total16);
  if ($data->has('18')) {
    $data['hari18'] = $data['18'];
    unset($data['18']);

    foreach($data['hari18'] as $a){
      $total17 += $a['power'];
      $hari17t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari17u= strtotime($hari17t) * 1000;
  $data17 = collect($hari17u)->merge($total17);

  if ($data->has('19')) {
    $data['hari19'] = $data['19'];
    unset($data['19']);

    foreach($data['hari19'] as $a){
      $total18 += $a['power'];
      $hari18t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari18u= strtotime($hari18t) * 1000;
  $data18 = collect($hari18u)->merge($total18);

  if ($data->has('20')) {
    $data['hari20'] = $data['20'];
    unset($data['20']);

    foreach($data['hari20'] as $a){
      $total19 += $a['power'];
      $hari19t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari19u= strtotime($hari19t) * 1000;
  $data19 = collect($hari19u)->merge($total19);
  if ($data->has('21')) {
    $data['hari21'] = $data['21'];
    unset($data['21']);

    foreach($data['hari21'] as $a){
      $total20 += $a['power'];
      $hari20t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari20u= strtotime($hari20t) * 1000;
  $data20 = collect($hari20u)->merge($total20);
  if ($data->has('22')) {
    $data['hari22'] = $data['22'];
    unset($data['22']);

    foreach($data['hari22'] as $a){
      $total21 += $a['power'];
      $hari21t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari21u= strtotime($hari21t) * 1000;
  $data21 = collect($hari21u)->merge($total21);
  if ($data->has('23')) {
    $data['hari23'] = $data['23'];
    unset($data['23']);

    foreach($data['hari23'] as $a){
      $total22 += $a['power'];
      $hari22t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari22u= strtotime($hari22t) * 1000;
  $data22 = collect($hari22u)->merge($total22);
  if ($data->has('24')) {
    $data['hari24'] = $data['24'];
    unset($data['24']);

    foreach($data['hari24'] as $a){
      $total23 += $a['power'];
      $hari23t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari23u= strtotime($hari23t) * 1000;
  $data23 = collect($hari23u)->merge($total23);

  if ($data->has('25')) {
    $data['hari25'] = $data['25'];
    unset($data['25']);

    foreach($data['hari25'] as $a){
      $total24 += $a['power'];
      $hari24 = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari24u= strtotime($hari24t) * 1000;
  $data24 = collect($hari24u)->merge($total24);

  if ($data->has('26')) {
    $data['hari26'] = $data['26'];
    unset($data['26']);

    foreach($data['hari26'] as $a){
      $total25 += $a['power'];
      $hari25t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari25u= strtotime($hari25t) * 1000;
  $data25 = collect($hari25u)->merge($total25);

  if ($data->has('27')) {
    $data['hari27'] = $data['27'];
    unset($data['27']);

    foreach($data['hari27'] as $a){
      $total26 += $a['power'];
      $hari26t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari26u= strtotime($hari26t) * 1000;
  $data26 = collect($hari26u)->merge($total26);

  if ($data->has('28')) {
    $data['hari28'] = $data['28'];
    unset($data['28']);

    foreach($data['hari28'] as $a){
      $total27 += $a['power'];
      $hari27t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari27u= strtotime($hari27t) * 1000;
  $data27 = collect($hari27u)->merge($total27);

  if ($data->has('29')) {
    $data['hari29'] = $data['29'];
    unset($data['29']);

    foreach($data['hari29'] as $a){
      $total28 += $a['power'];
      $hari28t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari28u= strtotime($hari28t) * 1000;
  $data28 = collect($hari28u)->merge($total28);

  if ($data->has('30')) {
    $data['hari30'] = $data['30'];
    unset($data['30']);

    foreach($data['hari30'] as $a){
      $total29 += $a['power'];
      $hari229 = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari29u= strtotime($hari29t) * 1000;
  $data29 = collect($hari29u)->merge($total29);

  if ($data->has('31')) {
    $data['hari31'] = $data['31'];
    unset($data['31']);

    foreach($data['hari31'] as $a){
      $total30 += $a['power'];
      $hari30t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari30u= strtotime($hari30t) * 1000;
  $data30 = collect($hari30u)->merge($total30);

  $data = new Collection();
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari0t){
    $data = $data->push($data0);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari1t){
    $data = $data->push($data1);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari2t){
    $data = $data->push($data2);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari3t){
    $data = $data->push($data3);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari4t){
    $data = $data->push($data4);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari5t){
    $data = $data->push($data5);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari6t){
    $data = $data->push($data6);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari7t){
    $data = $data->push($data7);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari8t){
    $data = $data->push($data8);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari9t){
    $data = $data->push($data9);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari10t){
    $data = $data->push($data10);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari11t){
    $data = $data->push($data11);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari12t){
    $data = $data->push($data12);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari13t){
    $data = $data->push($data13);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari14t){
    $data = $data->push($data14);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari15t){
    $data = $data->push($data15);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari16t){
    $data = $data->push($data16);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari17t){
    $data = $data->push($data17);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari18t){
    $data = $data->push($data18);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari19t){
    $data = $data->push($data19);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari20t){
    $data = $data->push($data20);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari21t){
    $data = $data->push($data21);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari22t){
    $data = $data->push($data22);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari23t){
    $data = $data->push($data23);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari24t){
    $data = $data->push($data24);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari25t){
    $data = $data->push($data25);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari26t){
    $data = $data->push($data26);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari27t){
    $data = $data->push($data27);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari28t){
    $data = $data->push($data28);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari29t){
    $data = $data->push($data29);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari30t){
    $data = $data->push($data30);
  }

    return [ 'power' => $data ] ;
  }

  public function usageMonth2(){
    $total0=$total1=$total2=$total3=$total4=$total5=
    $total6=$total7=$total8=$total9=$total10=$total11=
    $total12=$total13=$total14=$total15=$total16=$total17=
    $total18=$total19=$total20=$total21=$total22=$total23=
    $total24=$total25=$total26=$total27=$total28=$total29=
    $total30= 0;

    $hari0t = Carbon::now()->format('Y-m-01 00:00:00');
    $hari1t = Carbon::now()->format('Y-m-02 00:00:00');
    $hari2t = Carbon::now()->format('Y-m-03 00:00:00');
    $hari3t = Carbon::now()->format('Y-m-04 00:00:00');
    $hari4t = Carbon::now()->format('Y-m-05 00:00:00');
    $hari5t = Carbon::now()->format('Y-m-06 00:00:00');
    $hari6t = Carbon::now()->format('Y-m-07 00:00:00');
    $hari7t = Carbon::now()->format('Y-m-08 00:00:00');
    $hari8t = Carbon::now()->format('Y-m-09 00:00:00');
    $hari9t = Carbon::now()->format('Y-m-10 00:00:00');
    $hari10t = Carbon::now()->format('Y-m-11 00:00:00');
    $hari11t = Carbon::now()->format('Y-m-12 00:00:00');
    $hari12t = Carbon::now()->format('Y-m-13 00:00:00');
    $hari13t = Carbon::now()->format('Y-m-14 00:00:00');
    $hari14t = Carbon::now()->format('Y-m-15 00:00:00');
    $hari15t = Carbon::now()->format('Y-m-16 00:00:00');
    $hari16t = Carbon::now()->format('Y-m-17 00:00:00');
    $hari17t = Carbon::now()->format('Y-m-18 00:00:00');
    $hari18t = Carbon::now()->format('Y-m-19 00:00:00');
    $hari19t = Carbon::now()->format('Y-m-20 00:00:00');
    $hari20t = Carbon::now()->format('Y-m-21 00:00:00');
    $hari21t = Carbon::now()->format('Y-m-22 00:00:00');
    $hari22t = Carbon::now()->format('Y-m-23 00:00:00');
    $hari23t = Carbon::now()->format('Y-m-24 00:00:00');
    $hari24t = Carbon::now()->format('Y-m-25 00:00:00');
    $hari25t = Carbon::now()->format('Y-m-26 00:00:00');
    $hari26t = Carbon::now()->format('Y-m-27 00:00:00');
    $hari27t = Carbon::now()->format('Y-m-28 00:00:00');
    $hari28t = Carbon::now()->format('Y-m-29 00:00:00');
    $hari29t = Carbon::now()->format('Y-m-30 00:00:00');
    $hari30t = Carbon::now()->format('Y-m-31 00:00:00');

    $data = Data::UsageToday2()
    ->whereMonth('created_at',Carbon::now()->format('m'))
    ->get()
    ->groupBy(function($date) {
    return Carbon::parse($date->created_at)->format('d');
  });

  if ($data->has('01')) {
    $data['hari01'] = $data['01'];
    unset($data['01']);

    foreach($data['hari01'] as $a){
      $total0 += $a['power'];
      $hari0t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari0u= strtotime($hari0t) * 1000;
  $data0 = collect($hari0u)->merge($total0);

  if ($data->has('02')) {
    $data['hari02'] = $data['02'];
    unset($data['02']);

    foreach($data['hari02'] as $a){
      $total1 += $a['power'];
      $hari1t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari1u= strtotime($hari1t) * 1000;
  $data1 = collect($hari1u)->merge($total1);
  if ($data->has('03')) {
    $data['hari03'] = $data['03'];
    unset($data['03']);

    foreach($data['hari03'] as $a){
      $total2 += $a['power'];
      $hari2t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari2u= strtotime($hari2t) * 1000;
  $data2 = collect($hari2u)->merge($total2);
  if ($data->has('04')) {
    $data['hari04'] = $data['04'];
    unset($data['04']);

    foreach($data['hari04'] as $a){
      $total3 += $a['power'];
      $hari3t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari3u= strtotime($hari3t) * 1000;
  $data3 = collect($hari3u)->merge($total3);
  if ($data->has('05')) {
    $data['hari54'] = $data['05'];
    unset($data['05']);

    foreach($data['hari05'] as $a){
      $total4 += $a['power'];
      $hari4t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari4u= strtotime($hari4t) * 1000;
  $data4 = collect($hari4u)->merge($total4);
  if ($data->has('06')) {
    $data['hari06'] = $data['06'];
    unset($data['06']);

    foreach($data['hari06'] as $a){
      $total5 += $a['power'];
      $hari5t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari5u= strtotime($hari5t) * 1000;
  $data5 = collect($hari5u)->merge($total5);
  if ($data->has('07')) {
    $data['hari07'] = $data['07'];
    unset($data['07']);

    foreach($data['hari07'] as $a){
      $total6 += $a['power'];
      $hari6t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari6u= strtotime($hari6t) * 1000;
  $data6 = collect($hari6u)->merge($total6);
  if ($data->has('08')) {
    $data['hari08'] = $data['08'];
    unset($data['08']);

    foreach($data['hari08'] as $a){
      $total7 += $a['power'];
      $hari7t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari7u= strtotime($hari7t) * 1000;
  $data7 = collect($hari7u)->merge($total7);
  if ($data->has('09')) {
    $data['hari09'] = $data['09'];
    unset($data['09']);

    foreach($data['hari09'] as $a){
      $total8 += $a['power'];
      $hari8t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari8u= strtotime($hari8t) * 1000;
  $data8 = collect($hari8u)->merge($total8);
  if ($data->has('10')) {
    $data['hari10'] = $data['10'];
    unset($data['10']);

    foreach($data['hari10'] as $a){
      $total9 += $a['power'];
      $hari9t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari9u= strtotime($hari9t) * 1000;
  $data9 = collect($hari9u)->merge($total9);
  if ($data->has('11')) {
    $data['hari11'] = $data['11'];
    unset($data['11']);

    foreach($data['hari11'] as $a){
      $total10 += $a['power'];
      $hari10t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari10u= strtotime($hari10t) * 1000;
  $data10 = collect($hari10u)->merge($total10);
  if ($data->has('12')) {
    $data['hari12'] = $data['12'];
    unset($data['12']);

    foreach($data['hari12'] as $a){
      $total11 += $a['power'];
      $hari11t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari11u= strtotime($hari11t) * 1000;
  $data11 = collect($hari11u)->merge($total11);
  if ($data->has('13')) {
    $data['hari13'] = $data['13'];
    unset($data['13']);

    foreach($data['hari13'] as $a){
      $total12 += $a['power'];
      $hari12t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari12u= strtotime($hari12t) * 1000;
  $data12 = collect($hari12u)->merge($total12);

  if ($data->has('14')) {
    $data['hari14'] = $data['14'];
    unset($data['14']);

    foreach($data['hari14'] as $a){
      $total13 += $a['power'];
      $hari13t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari13u= strtotime($hari13t) * 1000;
  $data13 = collect($hari13u)->merge($total13);
  if ($data->has('15')) {
    $data['hari15'] = $data['15'];
    unset($data['15']);

    foreach($data['hari15'] as $a){
      $total14 += $a['power'];
      $hari14t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari14u= strtotime($hari14t) * 1000;
  $data14 = collect($hari14u)->merge($total14);
  if ($data->has('16')) {
    $data['hari16'] = $data['16'];
    unset($data['16']);

    foreach($data['hari16'] as $a){
      $total15 += $a['power'];
      $hari15t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari15u= strtotime($hari15t) * 1000;
  $data15 = collect($hari15u)->merge($total15);
  if ($data->has('17')) {
    $data['hari17'] = $data['17'];
    unset($data['17']);

    foreach($data['hari17'] as $a){
      $total16 += $a['power'];
      $hari16t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari16u= strtotime($hari16t) * 1000;
  $data16 = collect($hari16u)->merge($total16);
  if ($data->has('18')) {
    $data['hari18'] = $data['18'];
    unset($data['18']);

    foreach($data['hari18'] as $a){
      $total17 += $a['power'];
      $hari17t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari17u= strtotime($hari17t) * 1000;
  $data17 = collect($hari17u)->merge($total17);

  if ($data->has('19')) {
    $data['hari19'] = $data['19'];
    unset($data['19']);

    foreach($data['hari19'] as $a){
      $total18 += $a['power'];
      $hari18t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari18u= strtotime($hari18t) * 1000;
  $data18 = collect($hari18u)->merge($total18);

  if ($data->has('20')) {
    $data['hari20'] = $data['20'];
    unset($data['20']);

    foreach($data['hari20'] as $a){
      $total19 += $a['power'];
      $hari19t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari19u= strtotime($hari19t) * 1000;
  $data19 = collect($hari19u)->merge($total19);
  if ($data->has('21')) {
    $data['hari21'] = $data['21'];
    unset($data['21']);

    foreach($data['hari21'] as $a){
      $total20 += $a['power'];
      $hari20t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari20u= strtotime($hari20t) * 1000;
  $data20 = collect($hari20u)->merge($total20);
  if ($data->has('22')) {
    $data['hari22'] = $data['22'];
    unset($data['22']);

    foreach($data['hari22'] as $a){
      $total21 += $a['power'];
      $hari21t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari21u= strtotime($hari21t) * 1000;
  $data21 = collect($hari21u)->merge($total21);
  if ($data->has('23')) {
    $data['hari23'] = $data['23'];
    unset($data['23']);

    foreach($data['hari23'] as $a){
      $total22 += $a['power'];
      $hari22t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari22u= strtotime($hari22t) * 1000;
  $data22 = collect($hari22u)->merge($total22);
  if ($data->has('24')) {
    $data['hari24'] = $data['24'];
    unset($data['24']);

    foreach($data['hari24'] as $a){
      $total23 += $a['power'];
      $hari23t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari23u= strtotime($hari23t) * 1000;
  $data23 = collect($hari23u)->merge($total23);

  if ($data->has('25')) {
    $data['hari25'] = $data['25'];
    unset($data['25']);

    foreach($data['hari25'] as $a){
      $total24 += $a['power'];
      $hari24 = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari24u= strtotime($hari24t) * 1000;
  $data24 = collect($hari24u)->merge($total24);

  if ($data->has('26')) {
    $data['hari26'] = $data['26'];
    unset($data['26']);

    foreach($data['hari26'] as $a){
      $total25 += $a['power'];
      $hari25t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari25u= strtotime($hari25t) * 1000;
  $data25 = collect($hari25u)->merge($total25);

  if ($data->has('27')) {
    $data['hari27'] = $data['27'];
    unset($data['27']);

    foreach($data['hari27'] as $a){
      $total26 += $a['power'];
      $hari26t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari26u= strtotime($hari26t) * 1000;
  $data26 = collect($hari26u)->merge($total26);

  if ($data->has('28')) {
    $data['hari28'] = $data['28'];
    unset($data['28']);

    foreach($data['hari28'] as $a){
      $total27 += $a['power'];
      $hari27t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari27u= strtotime($hari27t) * 1000;
  $data27 = collect($hari27u)->merge($total27);

  if ($data->has('29')) {
    $data['hari29'] = $data['29'];
    unset($data['29']);

    foreach($data['hari29'] as $a){
      $total28 += $a['power'];
      $hari28t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari28u= strtotime($hari28t) * 1000;
  $data28 = collect($hari28u)->merge($total28);

  if ($data->has('30')) {
    $data['hari30'] = $data['30'];
    unset($data['30']);

    foreach($data['hari30'] as $a){
      $total29 += $a['power'];
      $hari229 = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari29u= strtotime($hari29t) * 1000;
  $data29 = collect($hari29u)->merge($total29);

  if ($data->has('31')) {
    $data['hari31'] = $data['31'];
    unset($data['31']);

    foreach($data['hari31'] as $a){
      $total30 += $a['power'];
      $hari30t = $a['created_at']->format('Y-m-d 00:00:00');
    }
  }
  $hari30u= strtotime($hari30t) * 1000;
  $data30 = collect($hari30u)->merge($total30);

  $data = new Collection();
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari0t){
    $data = $data->push($data0);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari1t){
    $data = $data->push($data1);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari2t){
    $data = $data->push($data2);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari3t){
    $data = $data->push($data3);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari4t){
    $data = $data->push($data4);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari5t){
    $data = $data->push($data5);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari6t){
    $data = $data->push($data6);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari7t){
    $data = $data->push($data7);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari8t){
    $data = $data->push($data8);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari9t){
    $data = $data->push($data9);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari10t){
    $data = $data->push($data10);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari11t){
    $data = $data->push($data11);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari12t){
    $data = $data->push($data12);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari13t){
    $data = $data->push($data13);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari14t){
    $data = $data->push($data14);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari15t){
    $data = $data->push($data15);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari16t){
    $data = $data->push($data16);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari17t){
    $data = $data->push($data17);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari18t){
    $data = $data->push($data18);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari19t){
    $data = $data->push($data19);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari20t){
    $data = $data->push($data20);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari21t){
    $data = $data->push($data21);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari22t){
    $data = $data->push($data22);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari23t){
    $data = $data->push($data23);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari24t){
    $data = $data->push($data24);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari25t){
    $data = $data->push($data25);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari26t){
    $data = $data->push($data26);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari27t){
    $data = $data->push($data27);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari28t){
    $data = $data->push($data28);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari29t){
    $data = $data->push($data29);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() >= $hari30t){
    $data = $data->push($data30);
  }

    return [ 'power' => $data ] ;
  }
}
?>
