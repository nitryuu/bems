<?php

namespace App\Http\Controllers;

use App\Settings;
use App\User;
use Auth;
use Brotzka\DotenvEditor\DotenvEditor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
  public function index(){
    $status = Settings::select('status')
    ->pluck('status');
    $source = Settings::select('source')
    ->pluck('source');
    $address = Settings::select('address')
    ->pluck('address');
    $auto = Settings::select('automatic_delete')->pluck('automatic_delete');
    $interval = Settings::select('interval_delete(month)')->pluck('interval_delete(month)');

    $bill = Settings::getCost();
    $config = Config::get('mqtt');
    $host = $config['host'];
    $username = $config['username'];
    $password = $config['password'];
    $port = $config['port'];

    return view('pages.settings',['data' => [
      $status,
      $bill,
      $source,
      $address,
      $host,
      $username,
      $password,
      $port,
      $auto,
      $interval
    ]]);
  }

  public function storeSettings(Request $request){
    $auto = '';
    $id = '1';
    $bill = $request->get('bill');
    $featureCheck = $request->get('feature');
    $source = $request->get('source');
    $address = $request->get('address');
    if($featureCheck){
      $feature = $featureCheck;
    }else{
      $feature = 'off';
    }

    $host = $request->get('host');
    $username = $request->get('username');
    $password = $request->get('password');
    $port = $request->get('port');
    $auto = $request->get('auto');
    $interval = $request->get('interval');

    $env = new DotenvEditor();

    $env->changeEnv([
      'MQTT_HOST' => $host,
      'MQTT_USER' => $username,
      'MQTT_PASS' => $password,
      'MQTT_PORT' => $port
    ]);

    if(!$auto){
      $auto = 'off';
    }

    $value = Settings::where('id',$id)
    ->update(array(
      'status' => $feature,
      'cost' => $bill,
      'source' => $source,
      'address' => $address,
      'automatic_delete' => $auto,
      'interval_delete(month)' => $interval
    ));

    $request->session()->flash('success','Settings successfully changed');
    return redirect()->route('settings');
  }

  public function userList(){
    $data = User::select('id','name','email','created_at')
    ->where('role','!=','super admin')
    ->get();
    return [ 'data' => $data ];
  }

  public function storeNewUser(Request $request){
    $this->validate(request(),[
      'name' => 'required',
      'email' => 'required',
    ]);
    $data = new User();
    $data->name = $request->get('name');
    $data->email = $request->get('email');
    $data->password = bcrypt('admin123');
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

  public function reset($id){
    $data = User::where('id',$id)->update(array(
      'password' => bcrypt('admin123')
    ));
  }

  public function changePass(Request $request){
    $id = $request->get('id');
    $old_password = $request->get('old_pass');
    $new_password = $request->get('new_pass');
    $user = User::findorfail($id);

    if (Hash::check($old_password, $user->password)) {
         $user->fill([
          'password' => Hash::make($new_password)
          ])->save();

         $request->session()->flash('success', 'Password changed');
          return redirect()->back();

      } else {
          $request->session()->flash('error', 'Password does not match');
          return redirect()->back();
      }
  }
}

?>
