<?php

namespace App\Http\Controllers;
use App\Data;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class StatDataController extends Controller
{
    public function statistic()
    {
      $data = Data::groupBy('created_at')
      ->selectRaw('UNIX_TIMESTAMP(created_at)*1000 time,sum(power) power')
      ->orderBy('time')
      ->get();

      $e = array();
      foreach($data as $b){
        $a = $b['time'];
        $d = (double)number_format(($b['power']),2);
        $e[] = collect($a)->merge($d);
      }

      return $e;
    }

}

?>
