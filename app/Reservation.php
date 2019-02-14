<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  public function sejeurs(){
    return $this->belongsToMany('App\Sejeur');
  }

}
