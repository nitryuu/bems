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

  	public function scopeCount($query){
		return $query->selectRaw('COUNT(gedung) g');
	}	

}

?>
