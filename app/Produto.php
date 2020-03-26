<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	protected $table = "produto";
	protected $dates = [
		'created_at',
		'updated_at'
	];
	protected $primaryKey = 'id_produto';

	protected $fillable = [
		'isbn',
		'nome',
		'autor',
		'sinopse',
		'id_categoria',
		'numero_paginas',
		'ano_publicacao',
		'edicao',
		'editora',
		'preco'
	];

	public function carrinho()
	{
		return $this->belongsToMany('App\Carrinho')->using('App\Carrinho_produto');
	}

	public function produto_imagem()
	{
		return $this->hasMany('App\Produto_imagem');
	}

	public function categoria()
    {
        return $this->belongsTo('App\Produto_categoria', 'id_categoria', 'id_categoria');
    }
}
