<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
use Auth;

class SettingController extends Controller
{
  public function index(){
    $status = Settings::select('status')
    ->pluck('status');
    $bill = Settings::getCost();
    return view('pages.settings',['data' => [$status,$bill]]);
  }

  public function storeSettings(Request $request){
    $id = '1';
    $bill = $request->get('bill');
    $featureCheck = $request->get('feature');
    if($featureCheck){
      $feature = $featureCheck;
    }else{
      $feature = 'off';
    }
    $value = Settings::where('id',$id)
    ->update(array(
      'status' => $feature,
      'cost' => $bill
    ));
    return redirect()->route('settings');
  }
}

?>
