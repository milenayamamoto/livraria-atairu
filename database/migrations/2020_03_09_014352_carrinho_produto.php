<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarrinhoProduto extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carrinho_produto', function (Blueprint $table) {
			$table->unsignedInteger('id_cliente');
			$table->foreign('id_cliente')->references('id_cliente')->on('carrinho');
			$table->unsignedInteger('id_produto');
			$table->foreign('id_produto')->references('id_produto')->on('produto');
			$table->integer('quantidade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('carrinho_produto');
	}
}
