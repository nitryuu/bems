<?php

namespace App\Http\Controllers;
use App\Data;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class StatDataController extends Controller
{
    public function statistic()
    {
      $data = Data::selectRaw('UNIX_TIMESTAMP(created_at)*1000 time,power')
      ->orderBy('time')
      ->get();

      $e = array();
      foreach($data as $b){
        $a = $b['time'];
        $d = $b['power'];
        $e[] = collect($a)->merge($d);
      }


      return $e;
    }

}

?>
