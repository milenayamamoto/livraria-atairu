<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pedido;
use App\Produto_pedido;

class PedidoController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()	//Volta todos os pedidos do usuário logado
	{
		$id_user = auth()->user()->id;

		$pedidos = Pedido::all()->where('id_cliente', '=', $id_user)->sortByDesc('id_pedido');

		return view('pedidos', compact('pedidos'));
	}

	public function show($id_pedido)	//Mostra um pedido específico do usuário
	{
		$pedido = Pedido::where('id_pedido', '=', $id_pedido)->select('id_pedido', 'status')->get();
		$produtos_pedido = Produto_pedido::all()->where('id_pedido', '=', $id_pedido);

		return view('pedido', compact('produtos_pedido', 'pedido'));
	}

	public function update($id_pedido)	//Tela de update
	{
		$produtos_pedido = Produto_pedido::all()->where('id_pedido', '=', $id_pedido);

		return view('pedidoedit', compact('produtos_pedido'));
	}

	public function put($id_pedido, $id_produto, Request $request)	//Envia o update
	{

		DB::table('produto_pedido')
			->where('id_pedido', $id_pedido)
			->where('id_produto', $id_produto)
			->update(['quantidade' => $request->quantidade]);

		return back();
	}

	public function delete($id_pedido)	//Exclui o pedido
	{
		DB::table('produto_pedido')
			->where('id_pedido', $id_pedido)
			->delete();

		DB::table('pedido')
			->where('id_pedido', $id_pedido)
			->delete();

		return back();
	}
}
