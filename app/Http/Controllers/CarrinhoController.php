<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarrinhoController extends Controller
{
	// Tela - Carrinho (listar produtos)
	public function index($id_cliente) //TODO: Pegar o id do cliente na rota
	{
		$resultado = DB::table('carrinho')
			->join('carrinho_produto', 'carrinho.id_carrinho', '=', 'carrinho_produto.id_carrinho')
			->join('produto', 'carrinho_produto.id_produto', '=', 'produto.id_produto')
			->join('produto_imagem', 'produto.id_produto', '=', 'produto_imagem.id_produto')
			->where('carrinho.id_cliente', $id_cliente)
			->select('produto_imagem.nome AS imagem', 'produto.nome AS titulo', 'carrinho_produto.quantidade', 'produto.preco')
			->get();

		return view('carrinho', compact('resultado'));
	}
}
