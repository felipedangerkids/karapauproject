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
                  <h3>Escolha<br> um Porto</h3>
            </div>
            <div>
                  <button class="btn btn-info">FILTRAR</button>
            </div>
      </div>

      <div class="portos mt-4">
            <div class="row">
                  @foreach ($portos as $porto)
                  <div class="col-6">
                      <a href="{{ route('store.produto', $porto->id) }}"> <img src="{{ url('storage/portos/'.$porto->image) }}" alt=""></a>
                        <p>{{ $porto->nome }}</p>
                  </div>
                  @endforeach
            </div>
      </div>
</div>

@endsection