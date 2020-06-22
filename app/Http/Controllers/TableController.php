<?php

namespace App\Http\Controllers;

use App\Data;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
  public function tableToday1(){
    $ruang1 = Data::L1R1()->whereDate('created_at',Carbon::today())->sum('power');
    $ruang2 = Data::L1R2()->whereDate('created_at',Carbon::today())->sum('power');
    $ruang3 = Data::L1R3()->whereDate('created_at',Carbon::today())->sum('power');
    $ruang4 = Data::L1R4()->whereDate('created_at',Carbon::today())->sum('power');
    $ruang5 = Data::L1R5()->whereDate('created_at',Carbon::today())->sum('power');
    $ruang6 = Data::L1R6()->whereDate('created_at',Carbon::today())->sum('power');

    $room = [ '1st Room','2nd Room','3rd Room','4th Room','5th Room','6th Room' ];
    $ruang1 = collect($room[0])->merge($ruang1);
    $ruang2 = collect($room[1])->merge($ruang2);
    $ruang3 = collect($room[2])->merge($ruang3);
    $ruang4 = collect($room[3])->merge($ruang4);
    $ruang5 = collect($room[4])->merge($ruang5);
    $ruang6 = collect($room[5])->merge($ruang6);

    return [ 'energy' => [ $ruang1,$ruang2,$ruang3,$ruang4,$ruang5,$ruang6 ] ];
  }

  public function tableToday2(){
    $ruang1 = Data::L2R1()->whereDate('created_at',Carbon::today())->sum('power');
    $ruang2 = Data::L2R2()->whereDate('created_at',Carbon::today())->sum('power');
    $ruang3 = Data::L2R3()->whereDate('created_at',Carbon::today())->sum('power');
    $ruang4 = Data::L2R4()->whereDate('created_at',Carbon::today())->sum('power');
    $ruang5 = Data::L2R5()->whereDate('created_at',Carbon::today())->sum('power');
    $ruang6 = Data::L2R6()->whereDate('created_at',Carbon::today())->sum('power');


    $room = [ '1st Room','2nd Room','3rd Room','4th Room','5th Room','6th Room' ];
    $ruang1 = collect($room[0])->merge($ruang1);
    $ruang2 = collect($room[1])->merge($ruang2);
    $ruang3 = collect($room[2])->merge($ruang3);
    $ruang4 = collect($room[3])->merge($ruang4);
    $ruang5 = collect($room[4])->merge($ruang5);
    $ruang6 = collect($room[5])->merge($ruang6);

    return [ 'energy' => [ $ruang1,$ruang2,$ruang3,$ruang4,$ruang5,$ruang6 ] ];
  }

  public function tableMonth1(){
    $ruang1 = Data::SumL1R1()->whereMonth('created_at',Carbon::now()->format('m'))
    ->sum('power');
    $ruang2 = Data::SumL1R2()->whereMonth('created_at',Carbon::now()->format('m'))
    ->sum('power');
    $ruang3 = Data::SumL1R3()->whereMonth('created_at',Carbon::now()->format('m'))
    ->sum('power');
    $ruang4 = Data::SumL1R4()->whereMonth('created_at',Carbon::now()->format('m'))
    ->sum('power');
    $ruang5 = Data::SumL1R5()->whereMonth('created_at',Carbon::now()->format('m'))
    ->sum('power');
    $ruang6 = Data::SumL1R6()->whereMonth('created_at',Carbon::now()->format('m'))
    ->sum('power');

    $room = [ '1st Room','2nd Room','3rd Room','4th Room','5th Room','6th Room' ];
    $ruang1 = collect($room[0])->merge($ruang1);
    $ruang2 = collect($room[1])->merge($ruang2);
    $ruang3 = collect($room[2])->merge($ruang3);
    $ruang4 = collect($room[3])->merge($ruang4);
    $ruang5 = collect($room[4])->merge($ruang5);
    $ruang6 = collect($room[5])->merge($ruang6);

    return [ 'energy' => [ $ruang1,$ruang2,$ruang3,$ruang4,$ruang5,$ruang6 ] ];
  }

  public function tableMonth2(){
    $ruang1 = Data::SumL2R1()->whereMonth('created_at',Carbon::now()->format('m'))
    ->sum('power');
    $ruang2 = Data::SumL2R2()->whereMonth('created_at',Carbon::now()->format('m'))
    ->sum('power');
    $ruang3 = Data::SumL2R3()->whereMonth('created_at',Carbon::now()->format('m'))
    ->sum('power');
    $ruang4 = Data::SumL2R4()->whereMonth('created_at',Carbon::now()->format('m'))
    ->sum('power');
    $ruang5 = Data::SumL2R5()->whereMonth('created_at',Carbon::now()->format('m'))
    ->sum('power');
    $ruang6 = Data::SumL2R6()->whereMonth('created_at',Carbon::now()->format('m'))
    ->sum('power');

    $room = [ '1st Room','2nd Room','3rd Room','4th Room','5th Room','6th Room' ];
    $ruang1 = collect($room[0])->merge($ruang1);
    $ruang2 = collect($room[1])->merge($ruang2);
    $ruang3 = collect($room[2])->merge($ruang3);
    $ruang4 = collect($room[3])->merge($ruang4);
    $ruang5 = collect($room[4])->merge($ruang5);
    $ruang6 = collect($room[5])->merge($ruang6);

    return [ 'energy' => [ $ruang1,$ruang2,$ruang3,$ruang4,$ruang5,$ruang6 ] ];
  }

  public function tableYear1(){
    $ruang1 = Data::SumL1R1()->whereYear('created_at',Carbon::now()->format('Y'))
    ->sum('power');
    $ruang2 = Data::SumL1R2()->whereYear('created_at',Carbon::now()->format('Y'))
    ->sum('power');
    $ruang3 = Data::SumL1R3()->whereYear('created_at',Carbon::now()->format('Y'))
    ->sum('power');
    $ruang4 = Data::SumL1R4()->whereYear('created_at',Carbon::now()->format('Y'))
    ->sum('power');
    $ruang5 = Data::SumL1R5()->whereYear('created_at',Carbon::now()->format('Y'))
    ->sum('power');
    $ruang6 = Data::SumL1R6()->whereYear('created_at',Carbon::now()->format('Y'))
    ->sum('power');

    $room = [ '1st Room','2nd Room','3rd Room','4th Room','5th Room','6th Room' ];
    $ruang1 = collect($room[0])->merge($ruang1);
    $ruang2 = collect($room[1])->merge($ruang2);
    $ruang3 = collect($room[2])->merge($ruang3);
    $ruang4 = collect($room[3])->merge($ruang4);
    $ruang5 = collect($room[4])->merge($ruang5);
    $ruang6 = collect($room[5])->merge($ruang6);

    return [ 'energy' => [ $ruang1,$ruang2,$ruang3,$ruang4,$ruang5,$ruang6 ] ];
  }

  public function tableYear2(){
    $ruang1 = Data::SumL2R1()->whereYear('created_at',Carbon::now()->format('Y'))
    ->sum('power');
    $ruang2 = Data::SumL2R2()->whereYear('created_at',Carbon::now()->format('Y'))
    ->sum('power');
    $ruang3 = Data::SumL2R3()->whereYear('created_at',Carbon::now()->format('Y'))
    ->sum('power');
    $ruang4 = Data::SumL2R4()->whereYear('created_at',Carbon::now()->format('Y'))
    ->sum('power');
    $ruang5 = Data::SumL2R5()->whereYear('created_at',Carbon::now()->format('Y'))
    ->sum('power');
    $ruang6 = Data::SumL2R6()->whereYear('created_at',Carbon::now()->format('Y'))
    ->sum('power');

    $room = [ '1st Room','2nd Room','3rd Room','4th Room','5th Room','6th Room' ];
    $ruang1 = collect($room[0])->merge($ruang1);
    $ruang2 = collect($room[1])->merge($ruang2);
    $ruang3 = collect($room[2])->merge($ruang3);
    $ruang4 = collect($room[3])->merge($ruang4);
    $ruang5 = collect($room[4])->merge($ruang5);
    $ruang6 = collect($room[5])->merge($ruang6);
    return [ 'energy' => [ $ruang1,$ruang2,$ruang3,$ruang4,$ruang5,$ruang6 ] ];
  }

}
