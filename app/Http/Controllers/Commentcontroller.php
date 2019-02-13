<?php

namespace App\Http\Controllers;

use App\Sejour;
use Illuminate\Http\Request;
use Validator;

class Commentcontroller extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    //$this->middleware('auth')->except('index');
    //$this->middleware('auth')->only('index','create');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sejours = Sejour::all();
        return view('admin.sejour',['sejours' => $sejours]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $item)
    {
      $validator = Validator::make($item->all(),[
        'libelle' => 'required|min:4',
        'description' => 'required|min:10',
        'dure' => 'required|min:1',
        'cout' => 'required|min:1'
      ]);

      if($validator->fails()){
      	return back()->withErrors($validator)->withInput();
      }

      $sejour = new Sejour;
      $sejour->libelle = $item->libelle;
      $sejour->description = $item->description;
      $sejour->pays = $item->pays;
      $sejour->disponibilite = $item->disponibilite;
      $sejour->dure = $item->dure;
      $sejour->cout = $item->cout;
      $sejour->photo = "/images/sejour.jpg";
      $sejour->save();

      return redirect()->route('sejour.index')->withStatus('stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sejour  $sejour
     * @return \Illuminate\Http\Response
     */
    public function show()//Sejour $idSejour)
    {
      //$sejour = Sejour::find($idSejour);
      //return view('admin.sejour', ['sejour' => $sejour]);
      return view('admin.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sejour  $sejour
     * @return \Illuminate\Http\Response
     */
    public function edit($idSejour)
    {
      $sejour = Sejour::find($idSejour);
      return view('admin.edit', ['sejour' => $sejour]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sejour  $sejour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $item, $idSejour)
    {
      $validator = Validator::make($item->all(),[
        'libelle' => 'required|min:4',
        'description' => 'required|min:10',
        'dure' => 'required|min:1',
        'cout' => 'required|min:1'
      ]);

      if($validator->fails()){
      	return back()->withErrors($validator)->withInput();
      }

      $sejour = Sejour::find($idSejour);
      $sejour->libelle = $item->libelle;
      $sejour->description = $item->description;
      $sejour->pays = $item->pays;
      $sejour->disponibilite = $item->disponibilite;
      $sejour->dure = $item->dure;
      $sejour->cout = $item->cout;
      $sejour->photo = "/images/sejour.jpg";
      $sejour->save();

      return redirect()->route('sejour.index')->withStatus('stored');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sejour  $sejour
     * @return \Illuminate\Http\Response
     */
    public function destroy($idSejour)
    {
      $sejour = Sejour::find($idSejour);
      $sejour->delete();
      return redirect()->route('sejour.index');
    }
}
