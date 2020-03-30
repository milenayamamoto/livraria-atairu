<?php

namespace App\Http\Controllers;

use App\Carrinho_produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Produto;

class CarrinhoController extends Controller
{
	//Apenas acessível aos usuários logados
	public function __construct()
	{
		$this->middleware('auth');
	}

	// Carrinho: Read produtos (R)
	public function index($id_cliente)
	{
		$resultado = DB::table('carrinho')
			->join('produto', 'carrinho.id_produto', '=', 'produto.id_produto')
			->select('carrinho.id_cliente', 'carrinho.id_produto AS id_produto', 'produto.imagem', 'carrinho.produto_nome AS titulo', 'carrinho.quantidade', 'carrinho.preco')
			->get();

		return view('carrinho', compact('resultado'));
	}

	//Carrinho: Add produto (C)
	public function insert($id_produto)
	{
		$userID = auth()->user()->id;
		$product = Produto::find($id_produto);
	}

	// Carrinho: Update quantidade (U)
	public function update($id_cliente, $id_produto, Request $request)
	{
		DB::table('carrinho')
			->where('id_cliente', $id_cliente)
			->where('id_produto', $id_produto)
			->update(['quantidade' => $request->quantidade]);

		return back();
	}

	//Carrinho: Delete produto
	public function remove($id_cliente, $id_produto)
	{
		DB::table('carrinho')
			->where('id_cliente', $id_cliente)
			->where('id_produto', $id_produto)
			->delete();

		return back();
	}
}
