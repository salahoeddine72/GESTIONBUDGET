<?php

namespace App\Http\Controllers;

use App\Models\taches;
use Illuminate\Http\Request;

class TachesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return response()->json(taches::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newtache = new taches($request->input());

        $newtache -> Libelle = $request->input('Libelle');
        $newtache -> Etat = $request->input('Etat');
        $newtache -> Ordre = $request->input('Ordre');

        //sauegarde
        $newtache -> save();
        return $newtache;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\taches  $taches
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json( taches::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\taches  $taches
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, taches $taches)
    { 
         $taches -> update($request->input());
        return $taches;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\taches  $taches
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taches = taches::find($id);
        $taches -> delete();
        return $taches ->Libelle;
    }
}
