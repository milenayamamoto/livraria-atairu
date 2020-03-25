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

//Rotas views
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cadastro', 'HomeController@cadastro');
Route::get('/contato', 'HomeController@contato');
Route::get('/faq', 'HomeController@faq');
Route::get('/login', 'HomeController@login');
Route::get('/sobre', 'HomeController@sobre');


//CRUD Usuários
Route::any('/conta', 'UserController@index')->name('conta.index');
Route::post('/conta/alterarConta', 'UserController@update')->name('conta.update');
Route::get('/conta/deletarConta', 'UserController@delete')->name('conta.delete');
Route::any('/auth/register', 'HomeController@index');


//CRUD Carrinho
//TODO: Adicionar item ao carrinho na tela do produto($id) (C)
Route::get('/carrinho/{id}', 'CarrinhoController@index'); //TODO: Ver carrinho (R)
Route::get('/carrinho', 'CarrinhoController@update'); //TODO: Ver carrinho (U)
Route::get('/carrinho', 'CarrinhoController@delete'); //TODO: Ver carrinho (D)


//CRUD Pedidos
Route::get('/carrinho', 'PedidoController@checkout'); //TODO: Fechando o carrinho (C)
Route::get('/conta/pedidos', 'PedidoController@pedidos'); //TODO: Meus pedidos (R)
Route::get('/conta/pedidos', 'PedidoController@update'); //TODO: Meus pedidos (U)
Route::get('/conta/pedidos', 'PedidoController@delete'); //TODO: Meus pedidos (D)

//CRUD Produtos
Route::get('/produtos', 'ProdutoController@index');
Route::get('/produto/{id}', 'ProdutoController@show');


//Autenticação
Auth::routes();
