@extends('layouts.master')

@section('content')
<section class="container my-5 py-5">
    @if(isset($produto))
    <div class="row">
        <div class="col">
            <img src="{{ $produto->imagem }}" class="img-thumbnail">
        </div>
        <div class="col">
            <h1>{{ $produto['nome']}}</h1>
            <p>Editora: {{ $produto['editora'] }}</p>
            <p>Autor: {{ $produto['autor'] }}</p>
            <p class="preco">R$ {{ $produto['preco'] }}</p>
            <form action="/{{ $produto->id_produto}}/carrinho-add" enctype="multipart/form-data" method="GET">
                @csrf
                <button class="btn btn-success">Adicionar ao carrinho</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col mt-5">
            <p>{{ $produto['sinopse'] }}</p>
        </div>
    </div>


    <div class="row">
        <div class="col mt-5">
            <a href="/produtos" class="btn btn-success"> voltar para lista</a>
        </div>
    </div>

    @endif
</section>

@stop