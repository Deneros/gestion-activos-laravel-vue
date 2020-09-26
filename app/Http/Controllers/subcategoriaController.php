<?php

namespace App\Http\Controllers;
use App\Subcategoria;
use Illuminate\Http\Request;

class SubcategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategoria = \DB::table('subcategorias')->select('id','nombre_sub','id_categoria')->get();
        return $subcategoria;
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
        $subcategorias = new Subcategoria();
        $subcategorias->nombre_sub = $request->nombre_sub;
        $subcategorias->id_categoria = $request->id_categoria;
        $subcategorias->save();

        return $subcategorias;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategoria = \DB::table('subcategorias')->select('id','nombre_sub','id_categoria')->where('id_categoria','=',$id)->get();
        return $subcategoria;
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
        $subcategoria = Subcategoria::find($id);
        $subcategoria->nombre_sub = $request->nombre_sub;
        // $subcategoria->id_categoria = $request->id_categoria;
        $subcategoria->save();
        
        return $subcategoria;
        // return 'holamundo';
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
