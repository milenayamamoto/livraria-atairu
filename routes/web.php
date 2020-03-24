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

//CRUD usuários
Route::any('/conta', 'UserController@index')->name('conta.index');
Route::post('/conta/alterarConta', 'UserController@update')->name('conta.update');
Route::get('/conta/deletarConta', 'UserController@delete')->name('conta.delete');
Route::any('/auth/register', 'HomeController@index');

//CRUD pedidos
Route::get('/login/pedidos', 'PedidoController@index');
Route::get('/carrinho', 'HomeController@carrinho');


Route::get('/produtos', 'ProdutoController@index');
Route::get('/produto/{id}', 'ProdutoController@show');

//Autenticação
Auth::routes();
