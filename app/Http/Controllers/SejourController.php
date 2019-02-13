<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sejour;

class SejourController extends Controller
{
  public function __construct()
  {
    //$this->middleware('auth');
    //$this->middleware('auth')->except('index');
    //$this->middleware('auth')->only('index','create');


  }
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

  public function search(Request $request)
  {

    $sejour = Sejour::where('libelle', 'LIKE', '%'.$request->libelle.'%')->get();
    //dump($sejour->libelle);
    //die;
      return view('sejour', ['sejour' => $sejour]);
  }
}
