<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EnderecoCliente extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('endereco_cliente', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('id_endereco');
			$table->foreign('id_endereco')->references('id_endereco')->on('endereco');
			$table->unsignedInteger('id_cliente');
			$table->foreign('id_cliente')->references('id_cliente')->on('cliente');
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
		Schema::dropIfExists('endereco_cliente');
	}
}
