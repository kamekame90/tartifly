<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sejour extends Model
{
  public function destination(){
    return $this->hasOne('App\Destination');
  }
  public function photos(){
    return $this->hasMany('App\Photo');
  }
  public function reservations(){
    return $this->belongsToMany('App\Reservation');
  }
}
