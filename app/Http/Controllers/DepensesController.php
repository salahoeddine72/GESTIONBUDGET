<?php

namespace App\Http\Controllers;

use App\Models\depenses;
use Illuminate\Http\Request;

class DepensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(depenses::all());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newdepense = new depenses($request->input());
        $newdepense -> Libelle = $request->input('Libelle');
        $newdepense -> Montant = $request->input('Montant');
        $newdepense -> Nature = $request->input('Nature');
        $newdepense -> Frequence = $request->input('Frequence');

        //sauegarde
        $newdepense -> save();
        return $newdepense;


        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\depenses  $depenses
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(depenses::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\depenses  $depenses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, depenses $depenses)
    {
        $depenses -> update($request->input());
        return $depenses;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\depenses  $depenses
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $depenses = depenses::find($id);
        $depenses -> delete();
        return $depenses ->Libelle;
    }
}
