@extends('layouts.app-store')


@section('content')
<div class="header-top">
      <div class="container">
            <div class="d-flex icons">
                  <div class="mx-3">
                        <img src="{{ url('app-store/img/icons/icone-notificacoes.svg') }}" alt="">
                  </div>
                  <div class="mx-3">
                        <img src="{{ url('app-store/img/icons/edit-off.svg') }}" alt="">
                  </div>

            </div>

      </div>
</div>

<div class="container">
      <div class="title">
            <p>Olá, {{ auth()->user()->nome }}</p>
      </div>
</div>
<div class="header-pedidos">
      <div class="container mt-4">
            <div class="d-flex justify-content-between">
                  <div>
                        <h3>ID</h3>
                  </div>
                  <div>
                        <h3>Pagamento</h3>
                  </div>
                  <div>
                        <h3>Status</h3>
                  </div>
            </div>
      </div>
</div>
@forelse ($user_orders as $order)
<div class="pedidos-body">
      <div class="container mt-4">
            <div class="d-flex justify-content-between">
                  <div>
                        <h3>{{ $order->id }}</h3>
                  </div>
                  <div>
                        <h3>{{ $order->payment_mothod }}</h3>
                  </div>
                  <div>
                        <h3>
                              @if($order->status == 0)      
                              Aguardando
                              @elseif($order->status == 1)
                              Em preparação
                              @elseif($order->status == 2)
                              Entrega
                              @endif
                        </h3>
                  </div>
            </div>
      </div>
</div>
@empty
<h3>Você não tem pedidos!</h3>
@endforelse

@endsection