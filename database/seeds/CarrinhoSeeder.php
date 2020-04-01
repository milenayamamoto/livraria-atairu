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
		$novoUsuario->cpf = '01234567891';
		$novoUsuario->email = 'jao@neves.com.br';
		$novoUsuario->password = '1234';
		$novoUsuario->save();

		//Criando um carrinho novo
		$novoCarrinho = new Carrinho();
		$novoCarrinho->id_cliente = DB::table('users')->where('name', 'Jao das Neves')->value('id');
		$novoCarrinho->save();

		//Colocando produtos nesse carrinho
		$novoCarrinho = new Carrinho();
		$novoCarrinho->id_carrinho =  1;
		$novoCarrinho->id_cliente = DB::table('users')->where('name', 'Jao das Neves')->value('id');
		$novoCarrinho->id_produto = DB::table('produto')->where('isbn', '9788520927823')->value('id_produto');
		$novoCarrinho->nome = DB::table('produto')->where('isbn', '9788520927823')->value('nome');
		$novoCarrinho->quantidade = '1';
		$novoCarrinho->preco = DB::table('produto')->where('isbn', '9788520927823')->value('preco');
		$novoCarrinho->save();
	}
}
