<?php

namespace App\Http\Controllers;
use App\Item;
use App\Historial;
use App\ItemsHistorial;
use App\UsuariosHistorial;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        // $items = \DB::table('items')->select('id','nombre_item', 'serial', 'descripcion_item', 'estado', 'ubicacion', 'A_cargo', 'id_subcategoria')->get();
        // return $items;
        // $inventario = DB::table('items')
        //     ->join ('subcategorias','subcategorias.id','=','items.id_subcategoria')
        //     ->select('items.*','subcategorias.nombre_sub')
        //     ->get();
        // return $inventario;  

        $data = Item::select('items.id','items.nombre_item', 'subcategorias.id')
        ->leftjoin('subcategorias', 'items.id_subcategorias', '=', 'subcategorias.id')
        ->get();

        return $data;

    }

    public function inventarioTotal(){
        

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
        

        $historial = new Historial();
        $historial -> fecha_inscripcion = Carbon::now();
        $historial -> fecha_traspaso = null;
        $historial -> save();

        $usuariosh =  new UsuariosHistorial();
        $usuariosh -> id_usuario = User::where("id","=",)->get();
        
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
        // $inventario = DB::table('items')
        //     ->join ('subcategorias','items.id_subcategoria','=','subcategorias.id_subcategoria')
        //     ->join ('catagorias', 'subcategorias.id_categoria','=','categorias.id_categoria')
        //     ->select('items.*','subcategorias.id_subcategoria','subcategorias.nombre_sub','categorias.id_categoria','categorias.nombre_cat')
        //     ->get();
        // return $inventario; 
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
