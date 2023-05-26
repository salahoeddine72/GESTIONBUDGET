<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use Illuminate\Http\Request;
use Response;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
                return response()->json(todolist::all());

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newtodo = new todolist($request->input());

        $newtodo -> Libelle = $request->input('Libelle');
        $newtodo -> Date = $request->input('Date');

        //sauegarde
        $newtodo -> save();
        return $newtodo;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\todolist  $todolist
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json( todolist::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\todolist  $todolist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, todolist $todolist)
    {
        $todolist -> update($request->input());
        return $todolist;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\todolist  $todolist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
         $todolist = todolist::find($id);
        $todolist -> delete();
        return $todolist->Libelle;
    }
}
