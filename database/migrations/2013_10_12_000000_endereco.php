<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Endereco extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('endereco', function (Blueprint $table) {
			$table->increments('id_endereco');
			$table->string('logradouro');
			$table->string('numero');
			$table->string('complemento')->nullable();
			$table->string('cidade');
			$table->string('uf',100);
			$table->integer('cep');
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
		Schema::dropIfExists('endereco');
	}
}
