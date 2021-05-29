@extends('layouts.app-store')


@section('content')

<div class="header">
      <div class="container">
            <div class="text-center mx-auto py-5">
                  <img src="{{ url('app-store/img/logo.svg') }}" alt="">
            </div>
      </div>
</div>
<div class="container pb-5">
      <div class="d-flex top mt-3 justify-content-around">
            <div>
                  <h3>{{ $produto->especies->nome_portugues }}</h3>
            </div>
            <div>
                  <button class="btn btn-info">VOLTAR</button>
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
                                    data-countdown="{{ date('Y-m-d H:i:s', strtotime("+1 days", strtotime($produto->created_at))) }}"></h2>
            </div>
            <div class="text-center mt-4">
                  <button class="btn btn-red">INFORMAÇÕES GERAIS</button>
            </div>
            <div class="text-center mt-4">
                  <button class="btn btn-blue">{{  '€ '.number_format($produto->preco, 2, ',', '.') }} - Kg</button>
            </div>
            <div>
                  <h4>STOCK {{ $produto->quantidade_kg }} Kg</h4>
            </div>
            <div class="text-center mt-4">
                  <button class="btn btn-green">COMPRAR</button>
            </div>
      </div>
</div>


@endsection