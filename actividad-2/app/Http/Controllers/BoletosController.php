<?php

namespace App\Http\Controllers;

use App\Models\Boletos;
use Illuminate\Http\Request;

class BoletosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $boletos = Boletos::all();
        return $boletos;
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
     * @param  \App\Models\Boletos  $boletos
     * @return \Illuminate\Http\Response
     */
    public function show(Boletos $boletos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boletos  $boletos
     * @return \Illuminate\Http\Response
     */
    public function edit(Boletos $boletos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boletos  $boletos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boletos $boletos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boletos  $boletos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boletos $boletos)
    {
        //
    }
}
