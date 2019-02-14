<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
  public function sejour(){
    return $this->belongsTo('App\Sejour');
  }
}
