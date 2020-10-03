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
Route::resource('/items', 'itemController');
Route::get('/Admin/listitems/{id}', 'itemController@show');
Route::get('/inventariototal/items','itemController@inventarioTotal');

//Rutas Historial
Route::resource('/historiales','historialController');

//Rutas Reportes 
Route::get('/reporte1','reportesController@usuariosAsignacion');
Route::get('/reporte2/{cargo}','reportesController@activoCargo');
Route::get('/reporte3','reportesController@reincidencia');


//Retornar vistas 
Route::get('/admin/usuarios', 'usuarioController@vista')->name('vista');
Route::get('/usuario/usuarios', 'usuarioController@vistaeditar')->name('vistaeditar');
Route::get('/categoria/categorias','categoriaController@vistacategoria')->name('vistacategoria');
Route::get('/inventario/items','itemController@vistaInventarioTotal')->name('vistainventariototal');
Route::get('/historial','historialController@vistahistorial')->name('vistahistorial');
Route::get('/admin/items','itemController@vistaitems')->name('vistaitems');
Route::get('/admin/personalizar','usuarioController@vistapersonalizacion')->name('vistapersonalizacion');
// Route::get('/reportes','reportesController@vistareportes')->name('vistareportes');
Route::get('/reportes', function(){
return view('reportes');
})->name('vistareportes');



Route::get('/home', 'HomeController@index')->name('home');
