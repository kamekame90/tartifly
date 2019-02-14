<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sejour;
//use App\Destination;

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
      //dump($sejours);
      //$id = Sejour::find($id);
      return view('voyages', ['sejours' => $sejours]);
  }

  public function getSejour($id = null)
  {
      $sejour = Sejour::find($id);
      //dd($sejour->photos);
      //$this->getDestinations($sejour->id);
      return view('sejour', ['sejour' => $sejour]);
  }

  /*public function getDestinations($sejour_id)
  {
      $destinations = Destination::where('sejour_id', '=', $sejour_id)->get();
      //dump($destinations);
      return view('sejour', ['destinations' => $destinations]);
  }*/

  public function search(Request $request)
  {

      $sejour = Sejour::where('libelle', 'LIKE', '%'.$request->libelle.'%')->get();
    //dump($sejour[0]->libelle);
    //die;
      return view('sejour', ['sejour' => $sejour[0]]);
  }
}
