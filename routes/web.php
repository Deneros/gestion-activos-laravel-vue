<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('/usuarios', 'usuarioController');

Route::get('/usuario/usuario', 'usuarioController@show');

Route::get('/admin/usuarios', 'usuarioController@vista')->name('vista');
Route::get('/usuario/usuarios', 'usuarioController@vistaeditar')->name('vistaeditar');



Route::get('/home', 'HomeController@index')->name('home');
