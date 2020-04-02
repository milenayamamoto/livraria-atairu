<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;

class PedidoController extends Controller
{
	public function __construct()
    {
			$this->middleware('auth');
		}
		
	public function index()	//Volta todos os pedidos do usuário logado
	{
		$id_user = auth()->user()->id;
		
		$pedidos = Pedido::all()->where('id_cliente', '=', $id_user);
		
		return view('pedidos', compact('pedidos'));
	}
}
