<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Cliente;
use App\Carrinho;
use App\Carrinho_produto;

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
		$novoUsuario = new Cliente();
		$novoUsuario->nome_completo = 'Jao das Neves';
		$novoUsuario->cpf = '01234567891';
		$novoUsuario->email = 'jao@neves.com.br';
		$novoUsuario->senha = '1234';
		$novoUsuario->save();

		//Criando um carrinho novo
		$novoCarrinho = new Carrinho();
		$novoCarrinho->id_cliente = DB::table('cliente')->where('nome_completo', 'Jao das Neves')->value('id_cliente');
		$novoCarrinho->save();

		//Colocando produtos nesse carrinho
		$novoCarrinho = new Carrinho_produto();
		$novoCarrinho->id_carrinho =  1;
		$novoCarrinho->id_produto = DB::table('produto')->where('isbn', '9788520927823')->value('id_produto');
		$novoCarrinho->quantidade = '1';
		$novoCarrinho->save();
	}
}
