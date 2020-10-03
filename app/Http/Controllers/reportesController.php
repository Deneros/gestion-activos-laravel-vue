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


        $reincidencia = DB::table('estados')
        ->join ('items','items.id','=','estados.id_item')
        ->join ('subcategorias','items.id_subcategoria','=','subcategorias.id')
        ->join ('categorias', 'subcategorias.id_categoria','=','categorias.id')
        ->select('estados.id_item','estados.created_at','estados.descripcion','items.nombre_item','items.serial','estados.estado','items.ubicacion','items.A_cargo','subcategorias.nombre_sub','categorias.nombre_cat')
        ->whereIn('estados.id_item', [DB::raw("SELECT id_item FROM estados GROUP BY id_item HAVING COUNT(*)>1")])            
        ->orderBy('estados.id_item')
        ->get();


        return $reincidencia;                
        // $id = \DB::table('items')->select('id')->where('nombre_item',$nombre)->get();
        // $item = DB::table('estados')->count()->;
    }
    function activoCargo($cargo){
        $inventario = DB::table('items')
            ->join ('subcategorias','items.id_subcategoria','=','subcategorias.id')
            ->join ('categorias', 'subcategorias.id_categoria','=','categorias.id')
            ->select('items.id','items.nombre_item','items.serial','items.descripcion_item','items.estado','items.ubicacion','items.A_cargo','subcategorias.nombre_sub','categorias.nombre_cat')
            ->where('A_cargo',$cargo)
            ->get();
        return $inventario; 
        // $reporte = \DB::table('items')->where('A_cargo',$request->A_cargo)->get();
        // return $reporte;
    }
}
