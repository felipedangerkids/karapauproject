@extends('layouts.app-store')


@section('content')

<div class="header">
      <div class="container">
            <div class="text-center mx-auto py-5">
                  <img src="{{ url('app-store/img/logo.svg') }}" alt="">
            </div>
      </div>
</div>
<div class="container">
      <div class="d-flex top mt-3 justify-content-around">
            <div>
                  <h3>{{ $produto->especies->nome_portugues }}</h3>
            </div>
            <div>
                  <button class="btn btn-info">VOLTAR</button>
            </div>
      </div>

      <div class="portos produtos mt-4">
            <div class="d-flex">
 
                  <div class="justify-content-center">
                        <img src="{{ url('storage/especies/'.$produto->especies->image) }}" alt="">
                  </div>
            </div>
      </div>
</div>


@endsection