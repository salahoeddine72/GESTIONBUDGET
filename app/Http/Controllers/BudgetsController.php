<?php

namespace App\Http\Controllers;

use App\Models\budgets;
use Illuminate\Http\Request;

class BudgetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(budgets::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $newbudget = new budgets($request->input());
        $newbudget -> Libelle = $request->input('Libelle');
        $newbudget -> Montant = $request->input('Montant');
        $newbudget -> Nature = $request->input('Nature');
        $newbudget -> Frequence = $request->input('Frequence');

        //sauegarde
        $newbudget -> save();
        return $newbudget;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\budgets  $budgets
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json( budgets::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\budgets  $budgets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, budgets $budgets)
    {
        $budgets -> update($request->input());
        return $budgets;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\budgets  $budgets
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $taches = budgets::find($id);
        $taches -> delete();
        return $taches ->Libelle;

    }
}
