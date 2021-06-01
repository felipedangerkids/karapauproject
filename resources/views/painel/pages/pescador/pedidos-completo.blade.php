@extends('layouts.painel')


@section('content')
<p>Pedidos</p>

<div class="container">
      <h2 class="text-center">Pedido</h2>
      <ul class="list-group list-group-flush">
            <li class="list-group-item">ID: {{ $pedido->id }}</li>
            <li class="list-group-item">Método de Pagamento: {{ $pedido->payment_mothod }}</li>
            <li class="list-group-item">Comprador: {{ $pedido->user_name }}</li>
            <li class="list-group-item">Email do Comprador: {{ $pedido->email }}</li>
            <li class="list-group-item">Telemóvel do Comprador: {{ $pedido->telemovel }}</li>
            <li class="list-group-item">Status do Pedido: @if($pedido->status == 0)
                  Aguardando
                  @elseif($pedido->status == 1)
                  Em preparação
                  @elseif($pedido->status == 2)
                  Entrega
                  @endif</li>
      </ul>
      <h2 class="text-center mt-5">Endereço</h2>
      <ul class="list-group list-group-flush">
            <li class="list-group-item">Morada: {{ $pedido->enderecos->morada }}</li>
            <li class="list-group-item">Código Postal: {{ $pedido->enderecos->codigo_postal }}</li>
            <li class="list-group-item">Região: {{ $pedido->enderecos->regiao }}</li>
            <li class="list-group-item">Distrito: {{ $pedido->enderecos->distrito }}</li>
            <li class="list-group-item">Conselho: {{ $pedido->enderecos->distrito }}</li>
            <li class="list-group-item">Freguesia: {{ $pedido->enderecos->freguesia }}</li>
      </ul>
      <h2 class="text-center mt-5">Produtos</h2>
      @foreach ($produtos as $produto)
      <ul class="list-group list-group-flush mt-4 mb-4">
            <li class="list-group-item">Produto: {{ $produto->name }}</li>
            <li class="list-group-item">Preço: {{  '€ '.number_format($produto->price, 2, ',', '.') }}</li>
            <li class="list-group-item">Quantidade: {{ $produto->quantity }}Kg</li>
     
      </ul>
      @endforeach

</div>



@endsection