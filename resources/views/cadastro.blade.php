@extends('layouts.master')

@section('content')

<div class="container">
	<main>
		<section>
			<div class="forma">
				<h1 id="main-cadastro">Cadastro de Cliente</h1>
				<form method="POST" action="/cadastro">
					<p> <label>Nome:</label> </p>
					<input type="text" name="nome" id="nome"><br>
					<p> <label>Sobrenome:</label> </p>
					<input type="text" name="sobrenome" id="sobrenome"><br>
					<p> <label>E-mail:</label> </p>
					<input type="text" name="email" id="email"><br>
					<p> <label>Senha:</label> </p>
					<input type="password" name="senha" id="senha"><br>
					<p> <label>Confirmar Senha:</label> </p>
					<input type="password" name="senha2" id="senha2"><br>
					<p> <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar"> </p>
				</form>
			</div>
			<section>
	</main>

</div>

@stop