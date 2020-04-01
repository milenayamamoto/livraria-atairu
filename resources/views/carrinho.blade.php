@extends('layouts.master')

@section('content')

<main id='carrinho-container'>
  <h1 class="tituloprincipal">Carrinho de Compras</h1>
  <div class="container">
    <div class="row justify-content-center">
      <div class="shopping-cart">
        <div class="column-labels">
          <label class="product-image">Image</label>
          <label class="product-details">Produto</label>
          <label class="product-price">Preço</label>
          <label class="product-quantity">Quantidade</label>
          <label class="product-removal">Remover</label>
          <label class="product-line-price">Total</label>
        </div>

        @if(isset($resultado))
        @foreach($resultado as $produto)
        <div class="product">
          <div class="product-image">
            <img src='{{ $produto->imagem }}'>
          </div>
          <div class="product-details">
            <div class="product-title">{{ $produto->titulo }}</div>
          </div>
          <div class="product-price" style="color:#507642">{{ $produto->preco }}</div>
          <div class="product-quantity">
            <form action="/carrinho/update/{{ $produto->id_cliente }}/{{ $produto->id_produto }}" enctype="multipart/form-data" method="POST">
              @csrf
              @method('PATCH')
              <input type="number" id='quantidade' name="quantidade" value={{ $produto->quantidade }} min="1">
              <a href=''></a>
              <button class="update-product">
                <i class="fas fa-sync"></i>
              </button>
            </form>

            <form action="/carrinho/delete/{{ $produto->id_cliente }}/{{ $produto->id_produto }}" enctype="multipart/form-data" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-link">Remover</button>
            </form>
          </div>
          <div class="product-line-price" style="color:#507642;">{{ number_format((((float)str_replace( ['.',','], ['','.'], $produto->preco )*1.0) * $produto->quantidade), 2, '.', '') }}</div>
        </div>
        @endforeach
        @else
        <h1>Não há itens no seu carrinho =/</h1>
        @endif

        <div class="totals">
          <div class="totals-item totals-item-total">
            <label>Valor Total</label>
            <div class="totals-value" id="cart-total">[TBD]</div>
          </div>
        </div>

        <button class="checkout">FINALIZAR COMPRA</button>
      </div>
    </div>
  </div>
</main>
@stop