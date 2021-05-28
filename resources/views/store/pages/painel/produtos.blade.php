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
                  <h3>{{ $porto->nome }}</h3>
            </div>
            <div>
                  <button class="btn btn-info">FILTRAR</button>
            </div>
      </div>

      <div class="portos mt-4">
            <div class="row">
                  @foreach ($produtos as $produto)
                  <div class="col-6">
                      
                        <img src="{{ url('storage/especies/'.$produto->especies->image) }}" alt="">
                        <p>{{ $produto->especies->nome_portugues }}</p>
                        <p id="clock"
                                          data-countdown="{{ date('Y-m-d H:i:s', strtotime("+1 days", strtotime($produto->created_at))) }}"></p>
                  </div>
                  @endforeach



            </div>
      </div>
</div>


@endsection