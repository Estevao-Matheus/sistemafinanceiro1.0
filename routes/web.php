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

Route::get('/home', function () {
    return view('teste');
});

Route::get('/clientes','ClienteController@index')->name('cadastro clientes');;

Route::get('/clientesLista', 'ClienteController@listar')->name('listar clientes');

Route::post('/clientes', 'ClienteController@store');


Route::get('/servicos','servicoController@index')->name('cadastro servicos');;

Route::get('/servicosLista', 'servicoController@listar')->name('listar servicos');

Route::post('/servicos', 'servicoController@store');


#Rotas da origem da transação

Route::get('/origens','OrigemTransacaoController@index')->name('cadastro origens');;

Route::get('/orgigensLista', 'OrigemTransacaoController@listar')->name('listar origens');

Route::post('/origens', 'OrigemTransacaoController@store');


#Rotas do produto
Route::get('/produtos', 'ProdutoController@list')->name('listar_produtos');

Route::get('/produtos/criar', 'ProdutoController@index')->name('cadastro_produtos');

Route::post('/produtos/criar', 'ProdutoController@store');



#Rotas da transação
Route::get('/transacoes', 'TransacaoController@list')->name('listar_transacoes');

Route::get('/transacoes/relatorio', 'TransacaoController@relatorio')->name('relatorio');

Route::get('/transacoes/criar', 'TransacaoController@create')->name('criar_transacao');

Route::post('/transacoes/criar', 'TransacaoController@store');


#Rotas do fornecedor
Route::get('/fornecedor', 'FornecedorController@list')->name('listar_fornecedores');

Route::get('/fornecedor/criar', 'FornecedorController@create')->name('criar_fornecedor');

Route::post('/fornecedor/criar', 'FornecedorController@store');


