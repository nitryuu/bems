<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 *
 */
class Gedung extends Model
{
  protected $guarded = [] ;
  protected $table = 'gedung';

  	public function scopeCount($query, $id){
		return $query->join('fakultas','gedung.id_ref_fakultas','=','fakultas.id')
		->selectRaw('COUNT(gedung) g')
	    ->where('fakultas.id',$id);
	}	

}

?>
