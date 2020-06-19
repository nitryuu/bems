<?php

namespace App\Http\Controllers;

use App\Data;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class UsDataYearController extends Controller
{
  public function usageYear1(){
    $total0=$total1=$total2=$total3=$total4=$total5=
    $total6=$total7=$total8=$total9=$total10=$total11=
    $total12=$total13=$total14=$total15=$total16=$total17=
    $total18=$total19=$total20=$total21=$total22=$total23=
    $total24=$total25=$total26=$total27=$total28=$total29=
    $total30= 0;

    $bulan0t = Carbon::now()->format('Y-01-01 00:00:00');
    $bulan1t = Carbon::now()->format('Y-02-01 00:00:00');
    $bulan2t = Carbon::now()->format('Y-03-01 00:00:00');
    $bulan3t = Carbon::now()->format('Y-04-01 00:00:00');
    $bulan4t = Carbon::now()->format('Y-05-01 00:00:00');
    $bulan5t = Carbon::now()->format('Y-06-01 00:00:00');
    $bulan6t = Carbon::now()->format('Y-07-01 00:00:00');
    $bulan7t = Carbon::now()->format('Y-08-01 00:00:00');
    $bulan8t = Carbon::now()->format('Y-09-01 00:00:00');
    $bulan9t = Carbon::now()->format('Y-10-01 00:00:00');
    $bulan10t = Carbon::now()->format('Y-11-01 00:00:00');
    $bulan11t = Carbon::now()->format('Y-12-01 00:00:00');

    $data = Data::UsageToday1()
    ->whereYear('created_at',Carbon::now()->format('Y'))
    ->get()
    ->groupBy(function($date) {
    return Carbon::parse($date->created_at)->format('m');
  });

  if ($data->has('01')) {
    $data['bulan01'] = $data['01'];
    unset($data['01']);

    foreach($data['bulan01'] as $a){
      $total0 += $a['power'];
      $bulan0t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan0u= strtotime($bulan0t) * 1000;
  $data0 = collect($bulan0u)->merge($total0);

  if ($data->has('02')) {
    $data['bulan02'] = $data['02'];
    unset($data['02']);

    foreach($data['bulan02'] as $a){
      $total1 += $a['power'];
      $bulan1t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan1u= strtotime($bulan1t) * 1000;
  $data1 = collect($bulan1u)->merge($total1);
  if ($data->has('03')) {
    $data['bulan03'] = $data['03'];
    unset($data['03']);

    foreach($data['bulan03'] as $a){
      $total2 += $a['power'];
      $bulan2t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan2u= strtotime($bulan2t) * 1000;
  $data2 = collect($bulan2u)->merge($total2);
  if ($data->has('04')) {
    $data['bulan04'] = $data['04'];
    unset($data['04']);

    foreach($data['bulan04'] as $a){
      $total3 += $a['power'];
      $bulan3t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan3u= strtotime($bulan3t) * 1000;
  $data3 = collect($bulan3u)->merge($total3);
  if ($data->has('05')) {
    $data['bulan05'] = $data['05'];
    unset($data['05']);

    foreach($data['bulan05'] as $a){
      $total4 += $a['power'];
      $bulan4t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan4u= strtotime($bulan4t) * 1000;
  $data4 = collect($bulan4u)->merge($total4);
  if ($data->has('06')) {
    $data['bulan06'] = $data['06'];
    unset($data['06']);

    foreach($data['bulan06'] as $a){
      $total5 += $a['power'];
      $bulan5t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan5u= strtotime($bulan5t) * 1000;
  $data5 = collect($bulan5u)->merge($total5);
  if ($data->has('07')) {
    $data['bulan07'] = $data['07'];
    unset($data['07']);

    foreach($data['bulan07'] as $a){
      $total6 += $a['power'];
      $bulan6t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan6u= strtotime($bulan6t) * 1000;
  $data6 = collect($bulan6u)->merge($total6);
  if ($data->has('08')) {
    $data['bulan08'] = $data['08'];
    unset($data['08']);

    foreach($data['bulan08'] as $a){
      $total7 += $a['power'];
      $bulan7t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan7u= strtotime($bulan7t) * 1000;
  $data7 = collect($bulan7u)->merge($total7);
  if ($data->has('09')) {
    $data['bulan09'] = $data['09'];
    unset($data['09']);

    foreach($data['bulan09'] as $a){
      $total8 += $a['power'];
      $bulan8t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan8u= strtotime($bulan8t) * 1000;
  $data8 = collect($bulan8u)->merge($total8);
  if ($data->has('10')) {
    $data['bulan10'] = $data['10'];
    unset($data['10']);

    foreach($data['bulan10'] as $a){
      $total9 += $a['power'];
      $bulan9t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan9u= strtotime($bulan9t) * 1000;
  $data9 = collect($bulan9u)->merge($total9);
  if ($data->has('11')) {
    $data['bulan11'] = $data['11'];
    unset($data['11']);

    foreach($data['bulan11'] as $a){
      $total10 += $a['power'];
      $bulan10t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan10u= strtotime($bulan10t) * 1000;
  $data10 = collect($bulan10u)->merge($total10);
  if ($data->has('12')) {
    $data['bulan12'] = $data['12'];
    unset($data['12']);

    foreach($data['bulan12'] as $a){
      $total11 += $a['power'];
      $bulan11t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan11u= strtotime($bulan11t) * 1000;
  $data11 = collect($bulan11u)->merge($total11);

  $data = new Collection();
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan0t){
    $data = $data->push($data0);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan1t){
    $data = $data->push($data1);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan2t){
    $data = $data->push($data2);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan3t){
    $data = $data->push($data3);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan4t){
    $data = $data->push($data4);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan5t){
    $data = $data->push($data5);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan6t){
    $data = $data->push($data6);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan7t){
    $data = $data->push($data7);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan8t){
    $data = $data->push($data8);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan9t){
    $data = $data->push($data9);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan10t){
    $data = $data->push($data10);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan11t){
    $data = $data->push($data11);
  }

    return [ 'power' => $data ] ;
  }

  public function usageYear2(){
    $total0=$total1=$total2=$total3=$total4=$total5=
    $total6=$total7=$total8=$total9=$total10=$total11=
    $total12=$total13=$total14=$total15=$total16=$total17=
    $total18=$total19=$total20=$total21=$total22=$total23=
    $total24=$total25=$total26=$total27=$total28=$total29=
    $total30= 0;

    $bulan0t = Carbon::now()->format('Y-01-01 00:00:00');
    $bulan1t = Carbon::now()->format('Y-02-01 00:00:00');
    $bulan2t = Carbon::now()->format('Y-03-01 00:00:00');
    $bulan3t = Carbon::now()->format('Y-04-01 00:00:00');
    $bulan4t = Carbon::now()->format('Y-05-01 00:00:00');
    $bulan5t = Carbon::now()->format('Y-06-01 00:00:00');
    $bulan6t = Carbon::now()->format('Y-07-01 00:00:00');
    $bulan7t = Carbon::now()->format('Y-08-01 00:00:00');
    $bulan8t = Carbon::now()->format('Y-09-01 00:00:00');
    $bulan9t = Carbon::now()->format('Y-10-01 00:00:00');
    $bulan10t = Carbon::now()->format('Y-11-01 00:00:00');
    $bulan11t = Carbon::now()->format('Y-12-01 00:00:00');

    $data = Data::UsageToday2()
    ->whereYear('created_at',Carbon::now()->format('Y'))
    ->get()
    ->groupBy(function($date) {
    return Carbon::parse($date->created_at)->format('m');
  });

  if ($data->has('01')) {
    $data['bulan01'] = $data['01'];
    unset($data['01']);

    foreach($data['bulan01'] as $a){
      $total0 += $a['power'];
      $bulan0t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan0u= strtotime($bulan0t) * 1000;
  $data0 = collect($bulan0u)->merge($total0);

  if ($data->has('02')) {
    $data['bulan02'] = $data['02'];
    unset($data['02']);

    foreach($data['bulan02'] as $a){
      $total1 += $a['power'];
      $bulan1t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan1u= strtotime($bulan1t) * 1000;
  $data1 = collect($bulan1u)->merge($total1);
  if ($data->has('03')) {
    $data['bulan03'] = $data['03'];
    unset($data['03']);

    foreach($data['bulan03'] as $a){
      $total2 += $a['power'];
      $bulan2t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan2u= strtotime($bulan2t) * 1000;
  $data2 = collect($bulan2u)->merge($total2);
  if ($data->has('04')) {
    $data['bulan04'] = $data['04'];
    unset($data['04']);

    foreach($data['bulan04'] as $a){
      $total3 += $a['power'];
      $bulan3t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan3u= strtotime($bulan3t) * 1000;
  $data3 = collect($bulan3u)->merge($total3);
  if ($data->has('05')) {
    $data['bulan05'] = $data['05'];
    unset($data['05']);

    foreach($data['bulan05'] as $a){
      $total4 += $a['power'];
      $bulan4t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan4u= strtotime($bulan4t) * 1000;
  $data4 = collect($bulan4u)->merge($total4);
  if ($data->has('06')) {
    $data['bulan06'] = $data['06'];
    unset($data['06']);

    foreach($data['bulan06'] as $a){
      $total5 += $a['power'];
      $bulan5t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan5u= strtotime($bulan5t) * 1000;
  $data5 = collect($bulan5u)->merge($total5);
  if ($data->has('07')) {
    $data['bulan07'] = $data['07'];
    unset($data['07']);

    foreach($data['bulan07'] as $a){
      $total6 += $a['power'];
      $bulan6t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan6u= strtotime($bulan6t) * 1000;
  $data6 = collect($bulan6u)->merge($total6);
  if ($data->has('08')) {
    $data['bulan08'] = $data['08'];
    unset($data['08']);

    foreach($data['bulan08'] as $a){
      $total7 += $a['power'];
      $bulan7t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan7u= strtotime($bulan7t) * 1000;
  $data7 = collect($bulan7u)->merge($total7);
  if ($data->has('09')) {
    $data['bulan09'] = $data['09'];
    unset($data['09']);

    foreach($data['bulan09'] as $a){
      $total8 += $a['power'];
      $bulan8t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan8u= strtotime($bulan8t) * 1000;
  $data8 = collect($bulan8u)->merge($total8);
  if ($data->has('10')) {
    $data['bulan10'] = $data['10'];
    unset($data['10']);

    foreach($data['bulan10'] as $a){
      $total9 += $a['power'];
      $bulan9t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan9u= strtotime($bulan9t) * 1000;
  $data9 = collect($bulan9u)->merge($total9);
  if ($data->has('11')) {
    $data['bulan11'] = $data['11'];
    unset($data['11']);

    foreach($data['bulan11'] as $a){
      $total10 += $a['power'];
      $bulan10t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan10u= strtotime($bulan10t) * 1000;
  $data10 = collect($bulan10u)->merge($total10);
  if ($data->has('12')) {
    $data['bulan12'] = $data['12'];
    unset($data['12']);

    foreach($data['bulan12'] as $a){
      $total11 += $a['power'];
      $bulan11t = $a['created_at']->format('Y-m-01 00:00:00');
    }
  }
  $bulan11u= strtotime($bulan11t) * 1000;
  $data11 = collect($bulan11u)->merge($total11);

  $data = new Collection();
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan0t){
    $data = $data->push($data0);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan1t){
    $data = $data->push($data1);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan2t){
    $data = $data->push($data2);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan3t){
    $data = $data->push($data3);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan4t){
    $data = $data->push($data4);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan5t){
    $data = $data->push($data5);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan6t){
    $data = $data->push($data6);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan7t){
    $data = $data->push($data7);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan8t){
    $data = $data->push($data8);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan9t){
    $data = $data->push($data9);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan10t){
    $data = $data->push($data10);
  }
  if(Carbon::now('Asia/Jakarta')->toDateTimeString() > $bulan11t){
    $data = $data->push($data11);
  }

    return [ 'power' => $data ] ;
  }
}
?>
