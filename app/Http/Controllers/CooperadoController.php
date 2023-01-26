<?php

namespace App\Http\Controllers;

use App\Models\Cooperado;
use Illuminate\Http\Request;

class CooperadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Cooperado::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cooperado  $cooperado
     * @return \Illuminate\Http\Response
     */
    public function show(Cooperado $cooperado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cooperado  $cooperado
     * @return \Illuminate\Http\Response
     */
    public function edit(Cooperado $cooperado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cooperado  $cooperado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cooperado $cooperado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cooperado  $cooperado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cooperado $cooperado)
    {
        //
    }
}
