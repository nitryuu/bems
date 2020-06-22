<?php

namespace App\Http\Controllers;
use App\Data;
use Illuminate\Support\Collection;

class CostDataController extends Controller
{
    public function cost(){
      $data = Data::groupBy('created_at')
      ->selectRaw('UNIX_TIMESTAMP(created_at)*1000 time,sum(cost) cost')
      ->orderBy('time')
      ->get();

      $e = array();
      foreach($data as $b){
        $b['time'] = $b['time'];
        $b['cost'] = $b['cost'];
        $e[] = collect($b['time'])->merge($b['cost']);
      }

      return $e;
    }

}

?>
