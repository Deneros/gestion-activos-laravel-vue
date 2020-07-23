<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('/usuarios', 'usuarioController');
Route::get('/admin/usuario/vista', 'usuarioController@vista')->name('vista');



Route::get('/home', 'HomeController@index')->name('home');
