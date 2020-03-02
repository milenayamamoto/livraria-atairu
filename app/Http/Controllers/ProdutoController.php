<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
	public function index()
	{
		return view('produtos');
	}

	public function show($id_produto)
	{
		return view('produto');
	}
}
