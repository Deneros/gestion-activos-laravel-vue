<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;

class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vistaInventarioTotal()
    {
        return view('inventariototal');
    }

    public function vistaitems()
    {
        return view('items');
    }

    public function index()
    {
        $items = \DB::table('items')->select('id_item','nombre_item', 'serial', 'descripcion_item', 'estado', 'ubicacion', 'A_cargo', 'id_subcategoria')->get();
        return $items;
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
        $item = new Item();
        $item->nombre_item = $request->nombre_item;
        $item->serial = $request->serial;
        $item->descripcion_item = $request->descripcion;
        $item->estado = $request->estado;
        $item->ubicacion = $request->ubicacion;
        $item->A_cargo = $request->usuarioCargo;
        $item->id_subcategoria = $request->subcategoria;
        $item->save();

        return $item;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
