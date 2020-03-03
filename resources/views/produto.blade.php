@extends('layouts.master')

@section('content')

<section>
  <div class="container-fluid">
    <div class="row">

      <div class="col col-7 mt-5 mr-md-3">

        <img src="../img/livro_placeholder.png" class='img-fluid rounded mx-auto d-block' alt="imagem do livro">
      </div>

      <div class="col col-4 mt-5" text-align="start">
        <div class="row">
          <h1>Livro 1</h1>
        </div>

        <div class="row">
          <h3>Nome, Sobrenome</h3>
        </div>

        <div class="row">
          R$XXXX,XX
        </div>

        <div class="row mt-1">
          <button type="button" class="btn btn-success">Adicionar ao carrinho</button>
        </div>

      </div>
    </div>
    <div class="row m-5">
      <h3>SINOPSE</h3>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae ullam et aspernatur, iure, corrupti assumenda quas vel minima laborum iste accusantium magnam voluptas mollitia non temporibus sit qui magni doloribus.
    </div>
    <div class="row m-5">
      <h3>DETALHES DO PRODUTO</h3>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, beatae pariatur obcaecati placeat dolor ullam recusandae commodi, explicabo veritatis minima modi. Consequatur ipsum totam, autem illum corporis incidunt in neque.
    </div>


  </div>
</section>

@stop