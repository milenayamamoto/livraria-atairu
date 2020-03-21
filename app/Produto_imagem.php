<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto_imagem extends Model
{
	protected $table = "produto_imagem";
	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected $fillable = [
		'nome',
		'alt',
		'imagem_id_produto'

	];
}
