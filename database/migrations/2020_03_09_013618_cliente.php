<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cliente extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cliente', function (Blueprint $table) {
			$table->increments('id_cliente');
			$table->string('nome_completo');
			$table->string('cpf', 11)->unique();
			$table->string('email');
			$table->integer('telefone')->nullable();
			$table->string('senha');
			$table->unsignedInteger('id_endereco')->nullable();
			$table->foreign('id_endereco')->references('id_endereco')->on('endereco');
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
		Schema::dropIfExists('cliente');
	}
}
