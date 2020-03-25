<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrinho;

class CarrinhoController extends Controller
{
	// Tela - Carrinho (listar produtos)
	public function index($id_cliente) //TODO: Utilizar a id do cliente pra pegar o carrinho
	{
		$carrinho = Carrinho::all()->where('id_cliente', $id_cliente); //TODO: Tirar a info chapada
		return view('carrinho', compact('carrinho'));
	}
}
