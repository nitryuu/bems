<?php

namespace App\Http\Controllers;
use App\Data;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class CostDataController extends Controller
{
    public function cost(){
      $data = Data::selectRaw('UNIX_TIMESTAMP(created_at)*1000 time,cost')
      ->orderBy('time')
      ->get();

      $e = array();
      foreach($data as $b){
        $a = $b['time'];
        $d = $b['cost'];
        $e[] = collect($a)->merge($d);
      }


      return $e;
    }

}

?>
