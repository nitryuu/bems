<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DataController extends Controller
{
    // Dashboard - Analytics
    public function store(Request $request){
      $data = new Data;
      $data->id_device = $request->get('id_device',"n/a");
      $data->voltage_a = $request->get('voltage_a',"n/a");
      $data->voltage_b = $request->get('voltage_b',"n/a");
      $data->voltage_c = $request->get('voltage_c',"n/a");
      $data->current_a = $request->get('current_a',"n/a");
      $data->current_b = $request->get('current_b',"n/a");
      $data->current_c = $request->get('current_c',"n/a");
      $data->power_a = $request->get('power_a',"n/a");
      $data->power_b = $request->get('power_b',"n/a");
      $data->power_c = $request->get('power_c',"n/a");
      $data->q_a = $request->get('q_a',"n/a");
      $data->q_b = $request->get('q_b',"n/a");
      $data->q_c = $request->get('q_c',"n/a");

      $data->save();
    }

    public function show(){
      $data = Data::all()->sortByDesc('time')->first();
      return $data->toJson(JSON_PRETTY_PRINT);
    }

}
