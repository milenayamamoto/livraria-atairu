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

Route::get('/', 'HomeController@index');
Route::get('/alterarconta', 'HomeController@alterarConta');
Route::get('/cadastro', 'HomeController@cadastro');
Route::get('/carrinho', 'HomeController@carrinho');
Route::get('/conta', 'HomeController@conta');
Route::get('/contato', 'HomeController@contato');
Route::get('/faq', 'HomeController@faq');
Route::get('/login', 'HomeController@login');
Route::get('/sobre', 'HomeController@sobre');


Route::get('/produtos', 'ProdutoController@index');
Route::get('/produto/{id}', 'ProdutoController@show');
