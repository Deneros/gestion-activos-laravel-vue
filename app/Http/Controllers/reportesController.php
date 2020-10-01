<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reportesController extends Controller
{
    function usuariosAsignacion(){
        $reporte = DB::table('items')
            ->join ('subcategorias','items.id_subcategoria','=','subcategorias.id')
            ->join ('categorias', 'subcategorias.id_categoria','=','categorias.id')
            ->select('items.id','items.nombre_item','items.serial','items.descripcion_item','items.estado','items.ubicacion','subcategorias.nombre_sub','categorias.nombre_cat')
            ->where('A_cargo',NULL)
            ->get();
        return $reporte;

         // return $inventario; 
        // $reporte = \DB::table('items')->where('A_cargo',NULL)->get();
    }
    function reincidencia(){
        
    }
    function activoCargo(Request $request){
        $inventario = DB::table('items')
            ->join ('subcategorias','items.id_subcategoria','=','subcategorias.id')
            ->join ('categorias', 'subcategorias.id_categoria','=','categorias.id')
            ->select('items.id','items.nombre_item','items.serial','items.descripcion_item','items.estado','items.ubicacion','items.A_cargo','subcategorias.nombre_sub','categorias.nombre_cat')
            ->where('A_cargo',$request->A_cargo)
            ->get();
        return $inventario; 
        // $reporte = \DB::table('items')->where('A_cargo',$request->A_cargo)->get();
        // return $reporte;
    }
}
