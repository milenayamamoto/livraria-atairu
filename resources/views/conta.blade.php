@extends('layouts.master')

@section('content')

<main id="conta-principal">
  <section class="container">
    <h1>Conta</h1>
    <div class="container conta-div-principal mb-2">
      <div class="row justify-content-center">
        <div class="col-8 col-sm-6 col-lg-6">
          <div class="form-group">
            <img src="../img/users-cog-solid.svg" alt="logotipo usuário">
          </div>
        </div>
        <div class="col-8 col-sm-6 col-lg-6">
          <h2 class="title-conta-2 titulo-conta-2">Seus Pedidos</h2>
          <p class="paraf-conta"><a href="/carrinho">Ver pedidos, rastrear ou cancelar compras</a></p>
        </div>
      </div>
    </div>
    <div class="container conta-div-principal">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-lg-6">
          <div class="form-group">
            <img src="../img/box-open-solid.svg" alt="logotipo de uma caixa aberta">
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-6">
          <h2 class="title-conta-2  titulo-conta-2">Alterar Conta</h2>
          <p class="paraf-conta"><a href="{{route ('conta.alteraConta')}}">Modificar senha e Informações pessoais</a></p>
        </div>
      </div>
    </div>
  </section>
</main>

@stop