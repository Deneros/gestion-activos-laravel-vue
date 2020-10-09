<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{

    public function __construct(){
        $this->middleware('guest',['only' => 'showLoginForm']);
    }

    public function showLoginForm(){
        return view('auth.login');

    }

    public function login(){

        $credentials= $this->validate(request(),[
            'Email'=> 'email|required|string',
            'password'=> 'required|string'
        ]);
        
        // return $credentials;

        if(Auth::attempt($credentials)){
            // return 'tu sesion ha iniciado correctamente';
            return redirect()->route('vistainventariototal');
        }else {
            
            return view('auth.login');
            // return 'error';
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
