<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vista()
    {
        return view('pages.Usuario');
    }

    public function index(Request $request)
    {

        return usuario::where('Id_Usuario', auth()->id())->get();

        if ($request->wantsJson()) {
            return usuario::where('user_id', auth()->id())->get();
        } else {
            return view('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new usuario();
        $usuario->Tipo_Usuario = $request->Tipo_Usuario;
        $usuario->Tipo_Identificacion = $request->Tipo_Identificacion;
        $usuario->No_Identificacion = $request->No_Identificacion;
        $usuario->Nombre = $request->Nombre;
        $usuario->Apellido = $request->Apellido;
        $usuario->Cargo = $request->Cargo;
        $usuario->Telefono = $request->Telefono;
        $usuario->Email = $request->Email;
        $usuario->Contrasena = bcrypt($request->Contrasena);
        $usuario->save();
        return $usuario;
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
