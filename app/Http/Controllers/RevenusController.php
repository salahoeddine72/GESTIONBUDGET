<?php

namespace App\Http\Controllers;

use App\Models\revenus;
use Illuminate\Http\Request;

class RevenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           return response()->json(revenus::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $newrevenu = new revenus($request->input());
        $newrevenu -> Libelle = $request->input('Libelle');
        $newrevenu -> Montant = $request->input('Montant');
        $newrevenu -> Nature = $request->input('Nature');
        $newrevenu -> Frequence = $request->input('Frequence');
        $newrevenu -> Date_arr = $request->input('Date_arr');
        $newrevenu -> Source = $request->input('Source');

        //sauegarde
        $newrevenu -> save();
        return $newrevenu;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\revenus  $revenus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return response()->json( revenus::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\revenus  $revenus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, revenus $revenus)
    {
        $revenus -> update($request->input());
        return $revenus;
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\revenus  $revenus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         
        $taches = revenus::find($id);
        $taches -> delete();
        return $taches ->Libelle;
    }
}
