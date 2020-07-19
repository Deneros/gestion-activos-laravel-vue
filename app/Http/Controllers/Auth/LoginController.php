<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;


class LoginController extends Controller
 {
     public function login(){
        $credentials = $this->validate(request(),[
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);

         
        if(Auth::attempt($credentials)) 
        {
            return redirect()->route('home');
        }
        return 'Error en la autenticacion';
       
     }
 }
