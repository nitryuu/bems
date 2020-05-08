<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Brian2694\Toastr\Facades\Toastr;

class LoginController extends Controller
{
    public function index()
    {
        return view('/pages/login');
    }

    public function login(Request $request)
    {
      if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        return redirect()->back();
      }

      session()->flash('error','Check your Email and Password !!');
      return redirect()->back();
    }

    public function logout()
    {
      Auth::logout();

      return redirect()->route('dashboard');
    }

}

?>
