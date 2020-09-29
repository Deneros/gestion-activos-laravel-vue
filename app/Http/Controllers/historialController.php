<?php

namespace App\Http\Controllers;

use App\User;
use App\Item;
use App\Historial;
use App\ItemsHistorial;
use App\UsuariosHistorial;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class historialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        $historial = DB::table('users')
            ->join ('usuarios_historial','users.id','=','usuarios_historial.id_usuario')
            ->join ('historiales', 'usuarios_historial.id_historial','=','historiales.id')
            ->join ('items_historial', 'historiales.id','=','items_historial.id_historial')
            ->join ('items', 'items_historial.id_item','=','items.id')
            ->select('items.nombre_item','historiales.fecha_inscripcion','historiales.fecha_traspaso','users.nombre')
            ->get();

            // ->select('items.nombre_items','historiales.fecha_inscripcion','historiales.fecha_traspaso','users.nombre')
        return $historial; 
    }

    public function vistahistorial()
    {
        return view('historial');
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
