<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho_produto extends Model
{
	protected $table = "carrinho_produto";
	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected $fillable = [
		'id_cliente',
		'id_produto'
	];
}
