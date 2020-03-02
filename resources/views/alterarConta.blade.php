@extends('layouts.master')

@section('content')

<main id="altera-conta-principal" class="justify-content-center">
  <section>
    <h1>Login e segurança </h1>
    <div id="altera-conta" class="mb-3">
      <div class="container altera-container">
        <div class="row altera-conta-div-principal">
          <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
            <span class="altera-conta-nome" class="altera-conta-nome">Nome:</span>
            <p>Fulano de Tal</p>
          </div>
          <div class="col-8 col-sm-6 col-lg-6 text-right altera-conta-div-auxiliar">
            <button class="btn btn-secondary altera-conta-botao">Editar</button>
          </div>
        </div>
      </div>
      <div class="container altera-container">
        <div class="row altera-conta-div-principal">
          <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
            <span class="altera-conta-nome">E-mail:</span>
            <p>fulano@tal.com</p>
          </div>
          <div class="col-8 col-sm-6 col-lg-6 text-right altera-conta-div-auxiliar">
            <button class="btn btn-secondary altera-conta-botao">Editar</button>
          </div>
        </div>
      </div>
      <div class="container altera-container">
        <div class="row altera-conta-div-principal">
          <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
            <span class="altera-conta-nome">Telefone:</span>
            <p>(11)99999</p>
          </div>
          <div class="col-8 col-sm-6 col-lg-6 text-right altera-conta-div-auxiliar">
            <button class="btn btn-secondary altera-conta-botao">Editar</button>
          </div>
        </div>
      </div>
      <div class="container altera-container">
        <div class="row altera-conta-div-principal">
          <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
            <span class="altera-conta-nome">CPF:</span>
            <p>999.999.999-99</p>
          </div>
          <div class="col-8 col-sm-6 col-lg-6 text-right altera-conta-div-auxiliar">
            <button class="btn btn-secondary altera-conta-botao">Editar</button>
          </div>
        </div>
      </div>
      <div class="container altera-container">
        <div class="row altera-conta-div-principal">
          <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
            <span class="altera-conta-nome">Endereço:</span>
            <p>Rua: Fulano de Tal</p>
          </div>
          <div class="col-8 col-sm-6 col-lg-6 text-right altera-conta-div-auxiliar">
            <button class="btn btn-secondary altera-conta-botao">Editar</button>
          </div>
        </div>
      </div>
      <div class="container altera-container">
        <div class="row altera-conta-div-principal">
          <div class="col-8 col-sm-6 col-lg-6 text-left altera-conta-div-auxiliar">
            <span class="altera-conta-nome">Senha:</span>
            <p>****</p>
          </div>
          <div class="col-8 col-sm-6 col-lg-6 text-right altera-conta-div-auxiliar">
            <button class="btn btn-secondary altera-conta-botao">Editar</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <button class="btn btn-secondary btn-lg altera-conta-botao">Concluído</button>
  </section>
</main>

@stop