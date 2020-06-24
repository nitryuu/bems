<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
use App\User;
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

  public function userList(){
    $data = User::select('id','name','email','created_at')
    ->where('id','!=','1')
    ->get();
    return [ 'data' => $data ];
  }

  public function storeNewUser(Request $request){
    $this->validate(request(),[
      'name' => 'required',
      'email' => 'required',
      'password' => 'required'
    ]);
    $data = new User();
    $data->name = $request->get('name');
    $data->email = $request->get('email');
    $password = $request->get('password');
    $pas = bcrypt($password);
    $data->password = $pas;
    $data->role = 'admin';

    $data->save();

    return redirect()->back();
  }

  public function edit($id)
  {
    $ids = $id;
    $data = User::findorfail($ids);

    return response()->json($data);
  }

  public function update(Request $request){
    $id = $request->get('id');
    $name = $request->get('name');
    $email = $request->get('email');

    $data = User::where('id',$id)->update(array(
      'name' => $name,
      'email' => $email
    ));

    return redirect()->back();
  }

  public function delete($id){
    $data = User::findorfail($id);
    $data->delete();
  }
}

?>