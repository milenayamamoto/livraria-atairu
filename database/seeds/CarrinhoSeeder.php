<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Carrinho;
use App\User;

class CarrinhoSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Criando um cliente novo
		$novoUsuario = new User();
		$novoUsuario->name = 'Jao das Neves';
		$novoUsuario->cpf = '12345678910';
		$novoUsuario->email = 'jaod@sneves.com.br';
		$novoUsuario->password = bcrypt('password');
		$novoUsuario->save();

		//Criando um carrinho novo
		$novoCarrinho = new Carrinho();
		$novoCarrinho->id_cliente = DB::table('users')->where('name', 'Jao das Neves')->value('id');
		$novoCarrinho->id_produto = DB::table('produto')->where('isbn', '9788520927823')->value('id_produto');
		$novoCarrinho->produto_nome = DB::table('produto')->where('isbn', '9788520927823')->value('nome');
		$novoCarrinho->quantidade = '1';
		$novoCarrinho->preco = DB::table('produto')->where('isbn', '9788520927823')->value('preco');
		$novoCarrinho->save();
	}
}
