<?php

namespace App\Http\Controllers\Backend;

use App\Camara;
use App\Http\Controllers\Controller;
use App\Http\Requests\CamaraRequest;

class CamaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $camaras = Camara::latest()->get();

        return view('camaras.index', compact('camaras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('camaras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CamaraRequest $request)
    {
        $camara = Camara::create([
            'user_id' => auth()->user()->id
        ] + $request->all());

        return back()->with('status', 'Creado con exito');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Camara  $camara
     * @return \Illuminate\Http\Response
     */
    public function edit(Camara $camara)
    {
        return view('camaras.edit', compact('camara'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Camara  $camara
     * @return \Illuminate\Http\Response
     */
    public function update(CamaraRequest $request, Camara $camara)
    {
        $camara->update($request->all());

        return back()->with('status', 'Actualizado con exito');
    }

    /**PostPostPostPost
     * Remove the specified resource from storage.
     *
     * @param  \App\Camara  $camara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Camara $camara)
    {
        $camara->delete();

        return back()->with('status','Eliminado con exito');
    }
}
