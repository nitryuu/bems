<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Charts;
use App\User;

class DaController extends Controller
{
    // Dashboard - Analytics
    public function dashboard(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('pages.dashboard', [
            'pageConfigs' => $pageConfigs
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

}
