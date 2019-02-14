<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  public function sejour(){
    return $this->belongsTo('App\Sejour');
  }
}
