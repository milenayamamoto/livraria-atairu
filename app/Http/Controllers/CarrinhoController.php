<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarrinhoController extends Controller
{
	// Carrinho: Read produtos (R)
	public function index($id_cliente)
	{
		$resultado = DB::table('carrinho')
			->join('carrinho_produto', 'carrinho.id_carrinho', '=', 'carrinho_produto.id_carrinho')
			->join('produto', 'carrinho_produto.id_produto', '=', 'produto.id_produto')
			->join('produto_imagem', 'produto.id_produto', '=', 'produto_imagem.id_produto')
			->where('carrinho.id_cliente', $id_cliente)
			->select('carrinho.id_carrinho AS id_carrinho', 'produto.id_produto AS id_produto', 'produto_imagem.nome AS imagem', 'produto.nome AS titulo', 'carrinho_produto.quantidade', 'produto.preco')
			->get();

		return view('carrinho', compact('resultado'));
	}

	// Carrinho: Update quantidade (U)
	public function update($id_carrinho, $id_produto, Request $request)
	{
		DB::table('carrinho_produto')
			->where('id_carrinho', $id_carrinho)
			->where('id_produto', $id_produto)
			->update(['quantidade' => $request->quantidade]);

		return back();
	}

	//Carrinho: Delete produto
	public function remove($id_carrinho, $id_produto)
	{
		DB::table('carrinho_produto')
			->where('id_carrinho', $id_carrinho)
			->where('id_produto', $id_produto)
			->delete();

		return back();
	}
}
