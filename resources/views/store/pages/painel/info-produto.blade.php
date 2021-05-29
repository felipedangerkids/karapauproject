@extends('layouts.app-store')


@section('content')

<div class="header">
      <div class="container">
            <div class="text-center mx-auto py-5">
                  <img src="{{ url('app-store/img/logo.svg') }}" alt="">
            </div>
      </div>
</div>
<div class=" pb-5">
      <div class="d-flex top mt-3 justify-content-around">
            <div>
                  <h3>{{ $produto->especies->nome_portugues }}</h3>
            </div>
            <div>
                  <button class="btn btn-info">VOLTAR</button>
            </div>
      </div>
      <div class="produtos-single">
            <div class="text-center mt-4">
                  <button class="btn btn-red">INFORMAÇÕES
                        GERAIS</button>
            </div>
            <div>
                  <h2>{{ $produto->especies->nome_portugues }}</h2>
            </div>
            <div class="row-1 mt-5">
                  <p>Arte da Pesca</p>
            </div>
            <div class="row-2">
                  <p>{{ $produto->arte }}</p>
            </div>
            <div class="row-1">
                  <p>Tamanho</p>
            </div>
            <div class="row-2">
                  <p>{{ $produto->tamanho }}</p>
            </div>
            <div class="row-1">
                  <p>Zona de Pesca</p>
            </div>
            <div class="row-2">
                  <p>{{ $produto->zona }}</p>
            </div>
            <div class="row-1">
                  <p>Embarcação</p>
            </div>
            <div class="row-2">
                  <p>{{ $produto->embarcacao }}</p>
            </div>
      </div>
</div>



@endsection