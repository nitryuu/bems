<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Charts;
use App\User;

class MoController extends Controller
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
}
