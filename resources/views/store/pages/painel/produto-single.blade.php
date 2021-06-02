@extends('layouts.app-store')


@section('content')

<div class="header">
      <div class="container">
            <div class="text-center mx-auto py-5">
                  <a href="{{ route('store.index') }}"><img src="{{ url('app-store/img/logo.svg') }}" alt=""></a>
            </div>
      </div>
</div>
<div class="container pb-5">
      <div class="d-flex top mt-3 justify-content-around">
            <div>
                  <h3>{{ $produto->especies->nome_portugues }}</h3>
            </div>
            <div>
                <a href="javascript:history.back()">  <button class="btn btn-info">VOLTAR</button></a>
            </div>
      </div>

      <div class="produtos-single mt-4">
            <div class="row">

                  <div class="mx-auto">
                        <img class="mx-auto" src="{{ url('storage/especies/'.$produto->especies->image) }}" alt="">
                  </div>
            </div>
            <div>
                  <h2>{{ $produto->especies->nome_portugues }}</h2>
            </div>
            <div>
                  <h2 id="clock"
                        data-countdown="{{ date('Y-m-d H:i:s', strtotime("+1 days", strtotime($produto->created_at))) }}">
                  </h2>
            </div>
            <div class="text-center mt-4">
                  <a href="{{ route('store.produto.info', $produto->id) }}"><button class="btn btn-red">INFORMAÇÕES
                              GERAIS</button></a>
            </div>
            <div class="text-center mt-4">
                  <button class="btn btn-blue">{{  '€ '.number_format($produto->preco, 2, ',', '.') }} - Kg</button>
            </div>
            <div>
                  <h4>STOCK {{ $produto->quantidade_kg }} Kg</h4>
            </div>
            <form action="{{ route('store.cart.add') }}" method="POST">
                  <div class="text-center">
                        <h4>Quantidade</h4>
                        <div class="form-group mt-3">
                              <select class="form-control" name="quantity" id="">
                                    <option value="5">5 Kg</option>
                                    <option value="10">10 Kg</option>
                                    <option value="15">15 Kg</option>
                                    <option value="20">20 Kg</option>
                              </select>
                        </div>
                  </div>
                  @csrf
                  <div class="d-none">
                        <input type="hidden" name="id" value="{{ $produto->id }}">
                        <input type="hidden" name="name" value="{{ $produto->especies->nome_portugues }}">
                        <input type="hidden" name="price" value="{{ $produto->preco }}">
                        <input type="hidden" name="image" value="{{  $produto->especies->image }}">
                        <input type="hidden" name="user_id" value="{{  $produto->user_id }}">
                        <input type="hidden" name="pescador_id" value="{{  $produto->pescador_id }}">
                  </div>
                  <div class="text-center comprar">
                        <button type="submit" class="btn btn-green">COMPRAR</button>
                  </div>
            </form>
      </div>
</div>
<a href="{{ route('store.checkout') }}">
      <div class="bottom">
            <div class="d-flex justify-content-around">
                  <div>
                        <h5>Itens ({{ Cart::getTotalQuantity() }} Kg) </h5>
                  </div>
                  <div>
                        <h5>{{  '€ '.number_format(Cart::getSubTotal(), 2, ',', '.') }}</h5>
                  </div>
            </div>
      </div>
</a>

@endsection