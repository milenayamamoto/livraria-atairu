@extends('layouts.master')

@section('content')

<main class="container-fluid" id="main-login">
  <section class="row justify-content-center">
    <section class="col-12 col-sm-6 col-lg-6">
      <form id="form-container-login" class="justify-content-center">
        <h1 class="text-center mt-2">Login</h1>
        <div class="input-group mb-4">
          <div class="input-group-prepend login-div-icones">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
          <input class="form-control" type="email" name="login-email" id="login-email" placeholder="Digite seu E-mail" aria-describedby="login-email" required autofocus>*
        </div>
        <div class="input-group mb-4">
          <div class="input-group-prepend login-div-icones">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
          </div>
          <input class="form-control" type="password" name="login-senha" id="login-senha" placeholder="Digite sua Senha" aria-describedby="login-senha" required>*
        </div>
        <div class="form-group" id="login-links">
          <a href="" class="">Esqueceu a Senha?</a>
          <a href="/cadastro" class="">Ainda não sou cadastrado</a>
        </div>
        <button type="submit" class="btn btn-primary btn-block" id="botao-login">Enviar</button>
      </form>
    </section>
  </section>
</main>

@stop