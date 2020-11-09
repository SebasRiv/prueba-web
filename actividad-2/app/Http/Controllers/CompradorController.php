<?php

namespace App\Http\Controllers;

use App\Models\Comprador;
use Illuminate\Http\Request;

class CompradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $compradores = Comprador::all();
        return $compradores;
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
        $datosComprador = request()->all();

        Comprador::insert($datosComprador);

        return $datosComprador;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $comprador = Comprador::findOrFail($id);
        return $comprador;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function edit(Comprador $comprador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosComprador = request()->all();

        // $comprador = Comprador::findOrFail($request->id);

        // $comprador->name = $request->name;
        // $comprador->cedula = $request->cedula;
        // $comprador->fecha_nacimiento = $request->fecha_nacimiento;

        Comprador::where('id', '=', $id)->update($datosComprador);

        return $datosComprador;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comprador  $comprador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $comprador = Comprador::destroy($request->id);
        return $comprador;
    }
}
