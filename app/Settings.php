<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 *
 */
class Settings extends Model
{
  protected $guarded = [];
  protected $table = 'settings';

  public function scopeGetCost($query){
    return $query->select('cost')
    ->pluck('cost');
  }
}

?>
