<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoyageController extends Controller
{
  public function show($id)
  {
      return view('voyages', ['user' => $id]);
  }
}
