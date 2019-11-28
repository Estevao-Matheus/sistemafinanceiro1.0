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
    return view('dashboard');
});

Route::get('/clientes','ClienteController@index')->name('cadastro clientes');;

Route::get('/clientesLista', 'ClienteController@listar')->name('listar clientes');

Route::post('/clientes', 'ClienteController@store');


Route::get('/servicos','servicoController@index');

Route::get('/servicosLista', 'servicoController@listar')->name('listar servicos');

Route::post('/servicos', 'servicoController@store');

Route::get('/origens','OrigemTransacaoController@index')->name('cadastro origens');;

Route::get('/orgigensLista', 'OrigemTransacaoController@listar')->name('listar origens');

Route::post('/origens', 'OrigemTransacaoController@store');



