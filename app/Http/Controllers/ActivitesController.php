<?php

namespace App\Http\Controllers;

use App\Models\activites;
use Illuminate\Http\Request;

class ActivitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return response()->json(activites::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newactivite = new activites($request->input());

        $newactivite -> Libelle = $request->input('Libelle');
        $newactivite -> Seuil = $request->input('Seuil');
        $newactivite -> Date = $request->input('Date');
        $newactivite -> Montant = $request -> input('Montant');

        //sauegarde
        $newactivite -> save();
        return $newactivite;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\activites  $activites
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json( activites::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\activites  $activites
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, activites $activites)
    {
         $activites -> update($request->input());
        return $activites;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\activites  $activites
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $activites = activites::find($id);
        $activites-> delete();
        return $activites->Libelle;
    }
}
