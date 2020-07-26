<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class usuarioController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vista()
    {
        return view('auth.register');
    }

    public function index(Request $request)
    {

        $users = User::paginate(10);
        return view(user.index, compact('users'));



        // return usuario::where('Id_Usuario', auth()->id())->get();

        // if ($request->wantsJson()) {
        //     return usuario::where('user_id', auth()->id())->get();
        // } else {
        //     return view('home');
        // }
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
        $usuario = new User();
        $usuario->Tipo_Usuario = $request->Tipo_Usuario;
        $usuario->Tipo_Identificacion = $request->Tipo_Identificacion;
        $usuario->No_Identificacion = $request->No_Identificacion;
        $usuario->Nombre = $request->Nombre;
        $usuario->Apellido = $request->Apellido;
        $usuario->Cargo = $request->Cargo;
        $usuario->Telefono = $request->Telefono;
        $usuario->Email = $request->Email;
        $usuario->password = bcrypt($request->Contrasena);
        $usuario->save();
    
         
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
