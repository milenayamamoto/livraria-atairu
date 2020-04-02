@extends('layouts.master')

@section('content')
<section id="lista-pedidos">
  <div class='container py-5'>
    <h1>Meus pedidos</h1>
    @isset($pedidos)
    <div class='text-center my-5'>
      <span class='total'>Total de pedidos: {{ count($pedidos) }}</span>
    </div>
    @foreach($pedidos as $pedido)
    <div>
      @switch($pedido['status'])

      @case('pagamento')
      <div class='lista-pedidos-item'>
        <div>
          <img src={{ asset('img/orders/awaiting-payment.svg') }} class='status-pedido'>
        </div>
        <div class='info-pedido'>
          <span>Id: #{{$pedido['id_pedido']}}</span>
          <span>Status: Aguardando pagamento</span>
        </div>
        <div><button type="button" class="btn btn-info"><i class="fas fa-edit"></i> Editar</button></div>
        <div><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></div>
      </div>
      @break

      @case('enviado')
      <div class='lista-pedidos-item'>
        <div>
          <img src={{ asset('img/orders/shipped.svg') }} class='status-pedido'>
        </div>
        <div class='info-pedido'>
          <span>Id: #{{$pedido['id_pedido']}}</span>
          <span>Status: Pedido Enviado</span>
        </div>
        <div><button type="button" class="btn btn-info" disabled><i class="fas fa-edit"></i> Editar</button></div>
        <div><button type="button" class="btn btn-danger" disabled><i class="fas fa-trash" disabled></i></button></div>
      </div>
      @break

      @case('concluido')
      <div class='lista-pedidos-item'>
        <div>
          <img src={{ asset('img/orders/complete.svg') }} class='status-pedido'>
        </div>
        <div class='info-pedido'>
          <span>Id: #{{$pedido['id_pedido']}}</span>
          <span>Status: Pedido Concluído</span>
        </div>
        <div><button type="button" class="btn btn-info" disabled><i class="fas fa-edit"></i> Editar</button></div>
        <div><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></div>
      </div>
      @break

      @case('cancelado')
      @default
      <div class='lista-pedidos-item'>
        <div>
          <img src={{ asset('img/orders/cancelled.svg') }} class='status-pedido'>
        </div>
        <div class='info-pedido'>
          <span>Id: #{{$pedido['id_pedido']}}</span>
          <span>Status: Pedido Cancelado</span>
        </div>
        <div><button type="button" class="btn btn-info" disabled><i class="fas fa-edit"></i> Editar</button></div>
        <div><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></div>
      </div>
      @break
      @endswitch

    </div>
    @endforeach
    @endisset

    @empty($pedidos)
    <div class='text-center mt-5'>
      <img src={{ asset('img/orders/no-orders.svg') }}>
      <h3 class='mt-5'>Nenhum pedido feito até agora</h3>
    </div>
    @endempty
  </div>
</section>

@stop