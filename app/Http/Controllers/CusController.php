<?php

namespace App\Http\Controllers;

use App\Custom1;
use App\Custom2;
use App\Custom3;
use App\Custom4;
use App\Settings;
use Salman\Mqtt\MqttClass\Mqtt;
use Illuminate\Http\Request;

class CusController extends Controller
{
    public function index()
    {
    	$topic = Settings::select(
    		'custom1',
    		'custom2',
    		'custom3',
    		'custom4'
    	)->get();

    	$title = Settings::select(
    		'customTitle1',
    		'customTitle2',
    		'customTitle3',
    		'customTitle4'
    	)->get();

        return view('pages.custom')->with([
        	'title' => $title,
        	'topic' => $topic
        ]);
    }

    public function customTopic1(){
    	$setting = Settings::select('custom1')->first();

    	$topic = $setting['custom1'];

    	return redirect()->to('mqtt/publish/custom1/'.$topic);
    }

    public function customTopic2(){
    	$setting = Settings::select('custom2')->first();

    	$topic = $setting['custom2'];

    	return redirect()->to('mqtt/publish/custom2/'.$topic);
    }

    public function customTopic3(){
    	$setting = Settings::select('custom3')->first();

    	$topic = $setting['custom3'];

    	return redirect()->to('mqtt/publish/custom3/'.$topic);
    }

    public function customTopic4(){
    	$setting = Settings::select('custom4')->first();

    	$topic = $setting['custom4'];

    	return redirect()->to('mqtt/publish/custom4/'.$topic);
    }

    public function SubscribetoTopic1($topic)
	{
	    $mqtt = new Mqtt();
	    $mqtt->ConnectAndSubscribe($topic, function ($topic, $msg) {
	    
	      $pesan = json_decode($msg, true);
	      
	      $data1 = $pesan['data'];
          $data1f = (double)number_format($data1,4);
	      $data = new Custom1;
	      $data->data = $data1f;

	      $data->save();

	    }, '');
	}

    public function SubscribetoTopic2($topic)
	{
	    $mqtt = new Mqtt();
	    $mqtt->ConnectAndSubscribe($topic, function ($topic, $msg) {
	    
	      $pesan = json_decode($msg, true);
	      
	      $data2 = $pesan['data'];
	      $data = new Custom2;
	      $data->data = $data2;

	      $data->save();

	    }, '');
	}

    public function SubscribetoTopic3($topic)
	{
	    $mqtt = new Mqtt();
	    $mqtt->ConnectAndSubscribe($topic, function ($topic, $msg) {
	    
	      $pesan = json_decode($msg, true);
	      
	      $data3 = $pesan['data'];
	      $data = new Custom3;
	      $data->data = $data3;

	      $data->save();

	    }, '');
	}

    public function SubscribetoTopic4($topic)
	{
	    $mqtt = new Mqtt();
	    $mqtt->ConnectAndSubscribe($topic, function ($topic, $msg) {
	    
	      $pesan = json_decode($msg, true);
	      
	      $data4 = $pesan['data'];
	      $data = new Custom4;
	      $data->data = $data4;

	      $data->save();

	    }, '');
	}

    public function custom1(){
    	$data = Custom1::selectRaw('UNIX_TIMESTAMP(created_at)*1000 time')
    	->selectRaw('data data')
    	->orderByDesc('created_at')
    	->first();

    	$setting = Settings::select('customTitle1')->get();

    	$value = $data['data'];
    	$date = $data['time'];
    	$title = $setting[0]['customTitle1'];

    	return response()->json([
    		'data' => [
	    		'x' => $date,
	    		'y' => $value
    		],
    		'title' => [
    			$title
    		]
    	]);
    }

     public function custom2(){
     	$data = Custom2::selectRaw('UNIX_TIMESTAMP(created_at)*1000 time')
    	->selectRaw('data data')
    	->orderByDesc('created_at')
    	->first();

    	$setting = Settings::select('customTitle2')->get();

    	$value = $data['data'];
    	$date = $data['time'];
    	$title = $setting[0]['customTitle2'];

    	return response()->json([
    		'data' => [
	    		'x' => $date,
	    		'y' => $value
    		],
    		'title' => [
    			$title
    		]
    	]);
    }

     public function custom3(){
        $data = Custom3::selectRaw('UNIX_TIMESTAMP(created_at)*1000 time')
    	->selectRaw('data data')
    	->orderByDesc('created_at')
    	->first();

    	$setting = Settings::select('customTitle3')->get();

    	$value = $data['data'];
    	$date = $data['time'];
    	$title = $setting[0]['customTitle3'];

    	return response()->json([
    		'data' => [
	    		'x' => $date,
	    		'y' => $value
    		],
    		'title' => [
    			$title
    		]
    	]);
    }

     public function custom4(){
    	$data = Custom4::selectRaw('UNIX_TIMESTAMP(created_at)*1000 time')
    	->selectRaw('data data')
    	->orderByDesc('created_at')
    	->first();

    	$setting = Settings::select('customTitle4')->get();

    	$value = $data['data'];
    	$date = $data['time'];
    	$title = $setting[0]['customTitle4'];

    	return response()->json([
    		'data' => [
	    		'x' => $date,
	    		'y' => $value
    		],
    		'title' => [
    			$title
    		]
    	]);
    }

    public function customChartSettings(Request $request){
    	$setting = Settings::where('id','1')->update(array(
      		'custom1' => $request->get('topicChart1'),
      		'custom2' => $request->get('topicChart2'),
      		'custom3' => $request->get('topicChart3'),
      		'custom4' => $request->get('topicChart4'),
      		'customTitle1' => $request->get('titleChart1'),
      		'customTitle2' => $request->get('titleChart2'),
      		'customTitle3' => $request->get('titleChart3'),
      		'customTitle4' => $request->get('titleChart4')
    	));

    	return redirect()->back();
    }

    public function clear(Request $request, $id){
    	if($id == '0'){
    		Custom1::truncate();
    	}elseif($id == '1'){
    		Custom2::truncate();
    	}elseif($id == '2'){
    		Custom3::truncate();
    	}elseif($id == '3'){
    		Custom4::truncate();
    	}
    }

}