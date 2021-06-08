@extends('layouts.app-store')


@section('content')

<div class="header">
      <div class="container">
            <div class="text-center mx-auto py-5">
                  <a href="{{ route('store.index') }}"> <img src="{{ url('app-store/img/logo.svg') }}" alt=""></a>
            </div>
      </div>
</div>
<div class="container">
      <div class="d-flex top mt-3 justify-content-around">
            <div class="porto-nome">
                  <h3>{{ $porto->nome }}</h3>
            </div>
            <div class="">
                  <a href="/store-porto" class="btn btn-info">TROCAR</a>
            </div>

      </div>
      <div class=" mt-5 top d-flex justify-content-end">
            <button class="btn btn-info">FILTRAR</button>
      </div>

      <div class="portos produtos mt-4">
            <div class="row">
                  @foreach ($produtos as $produto)
                  @if($produto->quantidade_kg >= 10)
                  <div class="col-6 my-4">
                        <a href="{{ route('store.produto.single', $produto->id) }}">
                              <img src="{{ url('storage/especies/'.$produto->especies->image) }}" alt="">
                              <p>{{ $produto->especies->nome_portugues }}</p>
                              <p id="clock"
                                    data-countdown="{{ date('Y-m-d H:i:s', strtotime("+1 days", strtotime($produto->created_at))) }}">
                              </p>

                              <p class="unid">{{  '€ '.number_format($produto->preco, 2, ',', '.') }} - Kg</p>
                              <p>STOCK - {{ $produto->quantidade_kg }} Kg</p>
                        </a>
                  </div>
                  @endif
                  @endforeach



            </div>
      </div>
</div>

<a href="{{ route('store.checkout.adress') }}">
      <div class="bottom">
            <div class="d-flex justify-content-around">
                  <div>
                        <h5>Itens ({{ Cart::getTotalQuantity() }})</h5>
                  </div>
                  <div>
                        <h5>{{  '€ '.number_format(Cart::getSubTotal(), 2, ',', '.') }}</h5>
                  </div>
            </div>
      </div>
</a>
@endsection