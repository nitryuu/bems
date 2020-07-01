<?php

namespace App\Http\Controllers;
use App\Data;
use Illuminate\Support\Collection;

class CostDataController extends Controller
{
    public function cost(){
      $data = Data::groupBy('created_at')
      ->selectRaw('UNIX_TIMESTAMP(created_at)*1000 time, sum(cost) cost')
      ->orderBy('time')
      ->get();

      $e = array();
      foreach($data as $b){
        $a = $b['time'];
        $d = (double)number_format(($b['cost']),2);
        $e[] = collect($a)->merge($d);
      }

      return $e;
    }

}

?>
