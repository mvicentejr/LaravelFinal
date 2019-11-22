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

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::resource('produtos', 'produtosController')->middleware('auth');
Route::resource('vendas', 'vendasController')->middleware('auth');
Route::resource('clientes', 'ClientesController')->middleware('auth');

Route::get('/menucliente', function () {
    return view('clientes.menucliente');
})->name('menucliente')->middleware('auth');

