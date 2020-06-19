<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;
use App\Log;
use App\Settings;
use App\MasterControl;
class CoController extends Controller
{
    public function control()
    {
        $data = MasterControl::select('id','status')->get();
        return view('pages.control',['data' => $data]);
    }

    public function postValue(Request $request){
      $id = $request->id;
      $value = $request->value;
      $data = Device::where('id',$id)->update(array('status' => $value));
    }

    public function postMasterValue(Request $request){
      $id = $request->id;
      $value = $request->value;
      $data = MasterControl::where('id',$id)->update(array('status' => $value));
    }

    public function getStatus(){
      $data = Device::select('id','status')->get();

      return $data;
    }

    public function getMasterStatus(){
      $data = MasterControl::select('id','status')->get();

      return $data;
    }

    public function getPreviousValue(){
      $data = Log::select('id','log_status')->get();

      return $data;
    }

    public function checkFeature(){
      $feature = Settings::select('status')->pluck('status');

      return $feature;
    }
}

?>
