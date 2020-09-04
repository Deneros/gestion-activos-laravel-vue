<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Login 
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Rutas Usuarios
Route::resource('/usuarios', 'usuarioController');
Route::get('/usuario/usuario', 'usuarioController@show');

//Rutas Categorias
Route::resource('/categorias', 'categoriaController');

//Rutas Subcategorias
Route::resource('/subcategorias', 'subcategoriaController');

//Rutas Items


//Retornar vistas 
Route::get('/admin/usuarios', 'usuarioController@vista')->name('vista');
Route::get('/usuario/usuarios', 'usuarioController@vistaeditar')->name('vistaeditar');
Route::get('/categoria/categorias','categoriaController@vistacategoria')->name('vistacategoria');



Route::get('/home', 'HomeController@index')->name('home');
