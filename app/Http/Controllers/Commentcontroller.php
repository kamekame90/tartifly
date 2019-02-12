<?php

namespace App\Http\Controllers;

use App\Sejour;
use Illuminate\Http\Request;

class Commentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $item)
    {
      $sejour = new Sejour;
      $sejour->libelle = $item->libelle;
      $sejour->description = $item->description;
      $sejour->pays = $item->pays;
      $sejour->disponibilite = $item->disponibilite;
      $sejour->dure = $item->dure;
      $sejour->cout = $item->cout;
      $sejour->photo = "/images/sejour.jpg";
      $sejour->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sejour  $sejour
     * @return \Illuminate\Http\Response
     */
    public function show(Sejour $idSejour)
    {
      $sejour = Sejour::find($idSejour);
      return view('admin.sejour', ['sejour' => $sejour]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sejour  $sejour
     * @return \Illuminate\Http\Response
     */
    public function edit(Sejour $sejour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sejour  $sejour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sejour $sejour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sejour  $sejour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sejour $sejour)
    {
        //
    }
}
