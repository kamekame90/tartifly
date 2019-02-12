<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sejour;

class SejourController extends Controller
{
  public function show()
  {
      $sejours = Sejour::all();
      //$id = Sejour::find($id);
      return view('voyages', ['sejours' => $sejours]);
  }

  public function getSejour($id = null)
  {
      $sejour = Sejour::find($id);
      return view('sejour', ['sejour' => $sejour]);
  }
}
