<?php

namespace App\Http\Controllers;

use App\Data;
use App\Gedung;
use App\User;
use Carbon\Carbon;
use Charts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DaController extends Controller
{
    // Dashboard - Analytics
    public function dashboard(){
        $count = 0;
        if(Auth::check()){
        $id = auth()->user()->id_ref_fakultas;

        $countArr = Gedung::Count($id)->get();
        $count = $countArr[0]['g'];
        }

        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('pages.dashboard', [
            'pageConfigs' => $pageConfigs,
                'count' => $count
        ]);
    }

    public function dashboard2(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('pages.dashboard2', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function getData(){
      $data = Data::select('created_at')->orderByDesc('created_at')->first();
      $time = Carbon::now();

      $diff = $time->diffInSeconds($data['created_at']);

      return $diff;
    }

}
