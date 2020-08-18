<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
/**
 *
 */
class Data extends Model
{
	protected $guarded = [];
	protected $table = 'kwh';

	public function scopeDashL1($query,$i){
		return $query->join('device','kwh.id_device','=','device.id')
	    ->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
	    ->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
	    ->select('power')
	    ->where('ref_lantai.lantai','1')
	    ->where('ref_ruang.ruang',$i)
	    ->where('device.status','on')
	    ->orderByDesc('created_at');
	}

	public function scopeDashL2($query,$i){
		return $query->join('device','kwh.id_device','=','device.id')
	    ->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
	    ->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
	    ->select('power')
	    ->where('ref_lantai.lantai','2')
	    ->where('ref_ruang.ruang',$i)
	    ->where('device.status','on')
	    ->orderByDesc('created_at');
	}

	public function scopeDashL1R1($query){
		return $query->join('device','kwh.id_device','=','device.id')
	    ->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
	    ->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
	    ->select('power')
	    ->where('ref_lantai.lantai','1')
	    ->where('ref_ruang.ruang','1')
		->where('device.status','on')
	    ->orderByDesc('created_at');
	}

	public function scopeDashL1R2($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','1')
		->where('ref_ruang.ruang','2')
		->where('device.status','on')
		->orderByDesc('created_at');
	}

	public function scopeDashL1R3($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','1')
		->where('ref_ruang.ruang','3')
		->where('device.status','on')
		->orderByDesc('created_at');
	}

	public function scopeDashL1R4($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','1')
		->where('ref_ruang.ruang','4')
		->where('device.status','on')
		->orderByDesc('created_at');
	}

	public function scopeDashL1R5($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','1')
		->where('ref_ruang.ruang','5')
		->where('device.status','on')
		->orderByDesc('created_at');
	}

	public function scopeDashL1R6($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','1')
		->where('ref_ruang.ruang','6')
		->where('device.status','on')
		->orderByDesc('created_at');
	}

	public function scopeDashL2R1($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','2')
		->where('ref_ruang.ruang','1')
		->where('device.status','on')
		->orderByDesc('created_at');
	}

	public function scopeDashL2R2($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','2')
		->where('ref_ruang.ruang','2')
		->where('device.status','on')
		->orderByDesc('created_at');
	}

	public function scopeDashL2R3($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','2')
		->where('ref_ruang.ruang','3')
		->where('device.status','on')
		->orderByDesc('created_at');
	}

	public function scopeDashL2R4($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','2')
		->where('ref_ruang.ruang','4')
		->where('device.status','on')
		->orderByDesc('created_at');
	}

	public function scopeDashL2R5($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','2')
		->where('ref_ruang.ruang','5')
		->where('device.status','on')
		->orderByDesc('created_at');
	}

	public function scopeDashL2R6($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','2')
		->where('ref_ruang.ruang','6')
		->where('device.status','on')
		->orderByDesc('created_at');
	}



	public function scopeL1R1($query){
		return $query->join('device','kwh.id_device','=','device.id')
    ->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
    ->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
    ->select('power')
    ->where('ref_lantai.lantai','1')
    ->where('ref_ruang.ruang','1')
    ->orderByDesc('created_at');
	}

	public function scopeL1R2($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','1')
		->where('ref_ruang.ruang','2')
		->orderByDesc('created_at');
	}

	public function scopeL1R3($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','1')
		->where('ref_ruang.ruang','3')
		->orderByDesc('created_at');
	}

	public function scopeL1R4($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','1')
		->where('ref_ruang.ruang','4')
		->orderByDesc('created_at');
	}

	public function scopeL1R5($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','1')
		->where('ref_ruang.ruang','5')
		->orderByDesc('created_at');
	}

	public function scopeL1R6($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','1')
		->where('ref_ruang.ruang','6')
		->orderByDesc('created_at');
	}

	public function scopeL2R1($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','2')
		->where('ref_ruang.ruang','1')
		->orderByDesc('created_at');
	}

	public function scopeL2R2($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','2')
		->where('ref_ruang.ruang','2')
		->orderByDesc('created_at');
	}

	public function scopeL2R3($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','2')
		->where('ref_ruang.ruang','3')
		->orderByDesc('created_at');
	}

	public function scopeL2R4($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','2')
		->where('ref_ruang.ruang','4')
		->orderByDesc('created_at');
	}

	public function scopeL2R5($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','2')
		->where('ref_ruang.ruang','5')
		->orderByDesc('created_at');
	}

	public function scopeL2R6($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power')
		->where('ref_lantai.lantai','2')
		->where('ref_ruang.ruang','6')
		->orderByDesc('created_at');
	}

	public function scopeSumL1R1($query){
		return $query->join('device','kwh.id_device','=','device.id')
    ->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
    ->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
    ->selectRaw('sum(power) power')
    ->where('ref_lantai.lantai','1')
    ->where('ref_ruang.ruang','1')
    ->orderByDesc('created_at');
	}

	public function scopeSumL1R2($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->selectRaw('sum(power) power')
		->where('ref_lantai.lantai','1')
		->where('ref_ruang.ruang','2')
		->orderByDesc('created_at');
	}

	public function scopeSumL1R3($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->selectRaw('sum(power) power')
		->where('ref_lantai.lantai','1')
		->where('ref_ruang.ruang','3')
		->orderByDesc('created_at');
	}

	public function scopeSumL1R4($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->selectRaw('sum(power) power')
		->where('ref_lantai.lantai','1')
		->where('ref_ruang.ruang','4')
		->orderByDesc('created_at');
	}

	public function scopeSumL1R5($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->selectRaw('sum(power) power')
		->where('ref_lantai.lantai','1')
		->where('ref_ruang.ruang','5')
		->orderByDesc('created_at');
	}

	public function scopeSumL1R6($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->selectRaw('sum(power) power')
		->where('ref_lantai.lantai','1')
		->where('ref_ruang.ruang','6')
		->orderByDesc('created_at');
	}

	public function scopeSumL2R1($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->selectRaw('sum(power) power')
		->where('ref_lantai.lantai','2')
		->where('ref_ruang.ruang','1')
		->orderByDesc('created_at');
	}

	public function scopeSumL2R2($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->selectRaw('sum(power) power')
		->where('ref_lantai.lantai','2')
		->where('ref_ruang.ruang','2')
		->orderByDesc('created_at');
	}

	public function scopeSumL2R3($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->selectRaw('sum(power) power')
		->where('ref_lantai.lantai','2')
		->where('ref_ruang.ruang','3')
		->orderByDesc('created_at');
	}

	public function scopeSumL2R4($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->selectRaw('sum(power) power')
		->where('ref_lantai.lantai','2')
		->where('ref_ruang.ruang','4')
		->orderByDesc('created_at');
	}

	public function scopeSumL2R5($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->selectRaw('sum(power) power')
		->where('ref_lantai.lantai','2')
		->where('ref_ruang.ruang','5')
		->orderByDesc('created_at');
	}

	public function scopeSumL2R6($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->selectRaw('sum(power) power')
		->where('ref_lantai.lantai','2')
		->where('ref_ruang.ruang','6')
		->orderByDesc('created_at');
	}

	public function scopeUsageToday1($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power','created_at')
		->where('ref_lantai.lantai','1')
		->orderByDesc('created_at');
	}

	public function scopeUsageToday2($query){
		return $query->join('device','kwh.id_device','=','device.id')
		->join('ref_ruang','ref_ruang.id','=','device.id_ref_ruang')
		->join('ref_lantai','ref_ruang.id_ref_lantai','=','ref_lantai.id')
		->select('power','created_at')
		->where('ref_lantai.lantai','2')
		->orderByDesc('created_at');
	}

}
?>
