<?php

namespace App\Http\Controllers;

use App\Data;
use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Salman\Mqtt\MqttClass\Mqtt;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class DashDataController extends Controller
{
    private $p1, $c1,
            $p2, $c2,
            $p3, $c3,
            $p4, $c4,
            $p5, $c5,
            $p6, $c6,
            $p7, $c7,
            $p8, $c8;
    private $topic2,$cost;
    public $s, $f;
    public $m, $a;

  public function thingspeak(Request $request)
  {
    $time = $request->get('currentDate');

    $data = new Data;
    $data->power = $request->get('power');
    $data->cost = $request->get('cost');

    $data->save();

    $t = Carbon::now()->getPreciseTimestamp(3);
    dd($time,$t);

  }

  public function show()
  {
    $data = Data::select('power')->get();
    return ['x' => $data];
  }

  public function SubscribetoTopic1($topic1,$topic2,$topic3,$topic4,$topic5)
  {
    //$this->s = microtime(true);
    $mqtt = new Mqtt();
    $topic = $topic1."/".$topic2."/".$topic3."/".$topic4."/".$topic5;
    $this->topic2 = $topic2;

    $cost = Settings::getCost();
    $this->cost = $cost[0];

    $mqtt->ConnectAndSubscribe($topic, function ($topic, $msg) {

      $thecost = $this->cost;
      $pesan = json_decode($msg, true);

      $power1 = $pesan['field1'];
      $power2 = $pesan['field2'];
      $power3 = $pesan['field3'];
      $power4 = $pesan['field4'];
      $power5 = $pesan['field5'];
      $power6 = $pesan['field6'];
      $power7 = $pesan['field7'];
      $power8 = $pesan['field8'];

      $this->p1 = $power1;
      $this->c1 = $power1 * $thecost;
      $this->p2 = $power2;
      $this->c2 = $power2 * $thecost;
      $this->p3 = $power3;
      $this->c3 = $power3 * $thecost;
      $this->p4 = $power4;
      $this->c4 = $power4 * $thecost;
      $this->p5 = $power5;
      $this->c5 = $power5 * $thecost;
      $this->p6 = $power6;
      $this->c6 = $power6 * $thecost;
      $this->p7 = $power7;
      $this->c7 = $power7 * $thecost;
      $this->p8 = $power8;
      $this->c8 = $power8 * $thecost;

      $this->storeData();

    }, '');
  }

  public function storeData()
  {
    $data1 = new Data;
    $data1->id_device = '1';
    $data1->power = $this->p1;
    $data1->cost = $this->c1;
    $data1->save();

    $data2 = new Data();
    $data2->id_device = '2';
    $data2->power = $this->p2;
    $data2->cost = $this->c2;
    $data2->save();

    $data3 = new Data();
    $data3->id_device = '3';
    $data3->power = $this->p3;
    $data3->cost = $this->c3;
    $data3->save();

    $data4 = new Data();
    $data4->id_device = '4';
    $data4->power = $this->p4;
    $data4->cost = $this->c4;
    $data4->save();

    $data5 = new Data();
    $data5->id_device = '5';
    $data5->power = $this->p5;
    $data5->cost = $this->c5;
    $data5->save();

    $data6 = new Data();
    $data6->id_device = '6';
    $data6->power = $this->p6;
    $data6->cost = $this->c6;
    $data6->save();

    $data7 = new Data();
    $data7->id_device = '7';
    $data7->power = $this->p7;
    $data7->cost = $this->c7;
    $data7->save();

    $data8 = new Data();
    $data8->id_device = '8';
    $data8->power = $this->p8;
    $data8->cost = $this->c8;
    $data8->save();

    //$this->f = microtime(true);
    //$execution_time = ($this->f - $this->s);
    //dd($execution_time);
  }

  public function valueToday(){
    $data = DB::table('kwh')
    ->selectRaw('IFNULL(sum(power),0)/1000 p')
    ->whereDate('created_at', Carbon::today())
    ->get();

    return $data;
  }

  public function tillNow(){
    $data = DB::table('kwh')
    ->selectRaw('IFNULL(sum(power),0)/1000 p')
    ->get();

    return $data;
  }

  public function totalCost(){
    $thisMonth = DB::table('kwh')
    ->selectRaw('IFNULL(sum(cost),0) c')
    ->whereMonth('created_at',Carbon::today())
    ->get();

    $previousMonth = DB::table('kwh')
    ->selectRaw('IFNULL(sum(cost),0) c')
    ->whereMonth('created_at',Carbon::now()->subMonth())
    ->get();

    $month = Carbon::now()->format('F');
    $pmonth = Carbon::now()->subMonth()->format('F');

    $data = collect($previousMonth)->merge($thisMonth);
    $datas = new Collection();
    foreach($data as $items){
      foreach($items as $item){
        $datas->push($item);
      }
    }

    return [ 'month'=> [ $pmonth,$month ] ,'cost' => $datas ];
  }

  public function lantai1(){
    $ruang1 = Data::DashL1R1()->pluck('power');
    $ruang2 = Data::DashL1R2()->pluck('power');
    $ruang3 = Data::DashL1R3()->pluck('power');
    $ruang4 = Data::DashL1R4()->pluck('power');
    $ruang5 = Data::DashL1R5()->pluck('power');
    $ruang6 = Data::DashL1R6()->pluck('power');

    if($ruang1->isEmpty() || !$ruang1[0]){
      $ruang1[0] = 0;
    }if($ruang2->isEmpty() || !$ruang2[0]){
      $ruang2[0] = 0;
    }if($ruang3->isEmpty() || !$ruang3[0]){
      $ruang3[0] = 0;
    }if($ruang4->isEmpty() || !$ruang4[0]){
      $ruang4[0] = 0;
    }if($ruang5->isEmpty() || !$ruang5[0]){
      $ruang5[0] = 0;
    }if($ruang6->isEmpty() || !$ruang6[0]){
      $ruang6[0] = 0;
    }

    $data = collect($ruang1[0])->merge($ruang2[0])->merge($ruang3[0])
    ->merge($ruang4[0])->merge($ruang5[0])->merge($ruang6[0]);
    $datas = new Collection();
    foreach($data as $items){
        $datas->push($items);
    }

    return [ 'power' => $datas ];
  }

  public function lantai2(){
    $ruang1 = Data::DashL2R1()->pluck('power');
    $ruang2 = Data::DashL2R2()->pluck('power');
    $ruang3 = Data::DashL2R3()->pluck('power');
    $ruang4 = Data::DashL2R4()->pluck('power');
    $ruang5 = Data::DashL2R5()->pluck('power');
    $ruang6 = Data::DashL2R6()->pluck('power');

    if($ruang1->isEmpty() || !$ruang1[0]){
      $ruang1[0] = 0;
    }if($ruang2->isEmpty() || !$ruang2[0]){
      $ruang2[0] = 0;
    }if($ruang3->isEmpty() || !$ruang3[0]){
      $ruang3[0] = 0;
    }if($ruang4->isEmpty() || !$ruang4[0]){
      $ruang4[0] = 0;
    }if($ruang5->isEmpty() || !$ruang5[0]){
      $ruang5[0] = 0;
    }if($ruang6->isEmpty() || !$ruang6[0]){
      $ruang6[0] = 0;
    }

    $data = collect($ruang1[0])->merge($ruang2[0])->merge($ruang3[0])
    ->merge($ruang4[0])->merge($ruang5[0])->merge($ruang6[0]);
    $datas = new Collection();
    foreach($data as $items){
        $datas->push($items);
    }
    return [ 'power' => $datas ];
  }
}
