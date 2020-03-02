@extends('layouts.master')

@section('content')

<main>

    <!-- Variável temporária para simular a existência de um item no carrinho -->
    <?php $item = rand(0, 1); ?>

    <?php if ($item == 0) { ?>
        <h2>Não há items no seu carrinho! :(</h2>
    <?php } else { ?>
        <section class="carrinho_lista">
            <div class="carrinho_checkout">
                <img src='' alt="" />
                <div class="carrinho_conteudo">
                    <h3>Titulo</h3>
                    <small>Sobrenome, Nome</small>
                </div>
                <h4>R$1,99</h4>
                <form>
                    <input type="number" min="1" max="100" placeholder="1">
                    <button><i class="far fa-trash-alt"></i></button>
                </form>
            </div>
        </section>

    <?php } ?>


</main>

@stop