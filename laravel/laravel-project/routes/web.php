<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faq','navController@faq');
Route::get('/inicio','navController@inicio');
Route::get('/login','navController@login');
Route::get('/registro','navController@registro');
Route::get('/productos','ProductsController@index');
Route::get('/crearProducto','ProductsController@create');
Route::get('/contacto','navController@contacto');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//contrasenia rafarosetti@gmail.com = 123456
