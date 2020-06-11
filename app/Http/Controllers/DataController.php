<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Salman\Mqtt\MqttClass\Mqtt;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class DataController extends Controller
{

    private $p, $c;
    public $s, $f;
    public $m, $a;
  /**
    public function store(Request $request){
      $data = new Data;
      $data->id_device = $request->get('id_device',"n/a");
      $data->voltage_a = $request->get('voltage_a',"n/a");
      $data->voltage_b = $request->get('voltage_b',"n/a");
      $data->voltage_c = $request->get('voltage_c',"n/a");
      $data->current_a = $request->get('current_a',"n/a");
      $data->current_b = $request->get('current_b',"n/a");
      $data->current_c = $request->get('current_c',"n/a");
      $data->power_a = $request->get('power_a',"n/a");
      $data->power_b = $request->get('power_b',"n/a");
      $data->power_c = $request->get('power_c',"n/a");
      $data->q_a = $request->get('q_a',"n/a");
      $data->q_b = $request->get('q_b',"n/a");
      $data->q_c = $request->get('q_c',"n/a");

      $data->save();
    }

    public function show(){
      $data = Data::all()->sortByDesc('time')->first();
      return $data->toJson(JSON_PRETTY_PRINT);
    }
   **/

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

  public function SubscribetoTopic($topic1,$topic2,$topic3,$topic4,$topic5)
  {
    $this->s = microtime(true);
    $mqtt = new Mqtt();
    $topic = $topic1."/".$topic2."/".$topic3."/".$topic4."/".$topic5;
    $mqtt->ConnectAndSubscribe($topic, function ($topic, $msg) {

      $pesan = json_decode($msg, true);
      $power = $pesan['field6'];
      $cost = $pesan['field2'];

      $this->p = $power;
      $this->c = $cost;

      $this->storeData();
    }, '');
  }

  public function storeData()
  {
    $data = new Data;
    $data->power = $this->p;
    $data->cost = $this->c;

    $data->save();
    $this->f = microtime(true);
    $execution_time = ($this->f - $this->s);
    //dd($execution_time);
  }
}
