<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Cliente extends Authenticatable
{
	protected $table = "cliente";
	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected $fillable = [
		'nome_completo',
		'cpf',
		'email',
		'telefone',
		'senha',
		'id_endereco'
	];

	protected $hidden = [
		'senha', 'remember_token',
];

protected $casts = [
	'email_verified_at' => 'datetime',
];

	public function endereco()
	{
		return $this->hasMany('App\Endereco');
	}
}
