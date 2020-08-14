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
            $p8, $c8=0;
    private $topic2,$cost=0;
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

  public function mqttData()
  {
    $setting = Settings::select('address')->first();
    
    $topic = $setting['address'];
    return redirect()->to('mqtt/publish/bems/'.$topic);
  }

  public function httpData(Request $request)
  {
    $cost = Settings::getCost();
    $thecost = $cost[0];

    $power = $request->get('power');
    $thispower = (double)number_format(($power/1000),3);
    $thiscost = (double)number_format(($power * $thecost),2);

    $data = new Data;
    $data->id_device = $request->get('id_device');
    $data->power = $thispower;
    $data->cost = $thiscost;

    $data->save();
  }

  public function SubscribetoTopic($topic)
  {
    $mqtt = new Mqtt();

    $cost = Settings::getCost();
    $this->cost = $cost[0];

    $mqtt->ConnectAndSubscribe($topic, function ($topic, $msg) {
      
      $power1=$power2=$power3=$power4=$power5=$power6=$power7=$power8=0;
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

      $this->p1 = (double)number_format(($power1/1000),4);
      $this->c1 = (double)number_format(($power1 * $thecost),2);
      $this->p2 = (double)number_format(($power2/1000),4);
      $this->c2 = (double)number_format(($power2 * $thecost),2);
      $this->p3 = (double)number_format(($power3/1000),4);
      $this->c3 = (double)number_format(($power3 * $thecost),2);
      $this->p4 = (double)number_format(($power4/1000),4);
      $this->c4 = (double)number_format(($power4 * $thecost),2);
      $this->p5 = (double)number_format(($power5/1000),4);
      $this->c5 = (double)number_format(($power5 * $thecost),2);
      $this->p6 = (double)number_format(($power6/1000),4);
      $this->c6 = (double)number_format(($power6 * $thecost),2);
      $this->p7 = (double)number_format(($power7/1000),4);
      $this->c7 = (double)number_format(($power7 * $thecost),2);
      $this->p8 = (double)number_format(($power8/1000),4);
      $this->c8 = (double)number_format(($power8 * $thecost),2);
      
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
    ->selectRaw('IFNULL(sum(power),0) p')
    ->whereDate('created_at', Carbon::today())
    ->get();

    return $data;
  }

  public function tillNow(){
    $data = DB::table('kwh')
    ->selectRaw('IFNULL(sum(power),0) p')
    ->whereMonth('created_at',Carbon::now('Asia/Jakarta')->format('m'))
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
    ->whereMonth('created_at',Carbon::now()->startOfMonth()->subMonth())
    ->get();

    $month = Carbon::now()->format('F');
    $pmonth = Carbon::now()->startOfMonth()->subMonth()->format('F');

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

    if($ruang1->isEmpty() || !$ruang1[0]){
      $ruang1[0] = 0;
    }if($ruang2->isEmpty() || !$ruang2[0]){
      $ruang2[0] = 0;
    }if($ruang3->isEmpty() || !$ruang3[0]){
      $ruang3[0] = 0;
    }if($ruang4->isEmpty() || !$ruang4[0]){
      $ruang4[0] = 0;}
    // }if($ruang5->isEmpty() || !$ruang5[0]){
    //   $ruang5[0] = 0;
    // }if($ruang6->isEmpty() || !$ruang6[0]){
    //   $ruang6[0] = 0;
    // }

    $data = collect($ruang1[0])->merge($ruang2[0])->merge($ruang3[0])
    ->merge($ruang4[0]);
// ->merge($ruang5[0])->merge($ruang6[0]
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
