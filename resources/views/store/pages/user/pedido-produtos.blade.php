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
            <a href="javascript:history.back()">
                  <p>Voltar</p>
            </a>
      </div>
</div>
<div class="pedidos">
      <div class="container mt-5">
            <div class="text-center text-uppercase">
                  <h3>ID: {{ $order[0]->id }}</h3>
                  <h3>Pagamento: {{ $order[0]->payment_mothod }}</h3>
                  <h3>Status: @if($order[0]->status == 0)
                        Aguardando
                        @elseif($order[0]->status == 1)
                        Em preparação
                        @elseif($order[0]->status == 2)
                        Entrega
                        @endif</h3>
            </div>

            <div class="pedidos-s">
                  <h2 class="text-center text-uppercase">Produtos</h2>
            </div>
            @foreach ($produtos as $produto)
            <div class="text-center text-uppercase my-5 bg-info py-3 text-white">
                  <h3>Nome: {{ $produto->name }}</h3>
                  <h3>Preço: {{  '€ '.number_format($produto->price, 2, ',', '.') }}</h3>
                  <h3>Quantidade: {{ $produto->quantity }} Kg</h3>
            </div>
            @endforeach
            <div class="pedidos-s">
                  <h2 class="text-center text-uppercase">Endereço</h2>
            </div>

            <div class="text-center text-uppercase my-5 bg-info py-3 text-white">
                  <h3>Morada: {{ $order[0]->enderecos->morada }}</h3>
                  <h3>Código Postal: {{ $order[0]->enderecos->codigo_postal }}</h3>
                  <h3>Região: {{ $order[0]->enderecos->regiao }}</h3>
                  <h3>Distrito: {{ $order[0]->enderecos->distrito }}</h3>
                  <h3>Distrito: {{ $order[0]->enderecos->conselho }}</h3>
                  <h3>Distrito: {{ $order[0]->enderecos->freguesia }}</h3>
            </div>


      </div>
</div>

@endsection