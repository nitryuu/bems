<?php

namespace App\Http\Controllers;

use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

      $request->session()->flash('error','Check your Email and Password !!');
      return redirect()->back();
    }

    public function logout()
    {
      Auth::logout();

      return redirect()->route('dashboard');
    }

}

?>
