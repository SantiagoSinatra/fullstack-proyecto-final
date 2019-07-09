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


Route::get('/faq','navController@faq');
Route::get('/','navController@inicio');
Route::get('/login','navController@login');
Route::get('/registro','navController@registro');
Route::get('/productos','ProductsController@index');
Route::get('/crearProducto','ProductsController@create');
Route::post('/guardarProducto','ProductsController@save');
Route::get('/contacto','navController@contacto');



