@extends('layouts.app-store')


@section('content')
<div class="header">
      <div class="container">
            <div class="text-center d-flex justify-content-end mx-auto py-5">
                  <a href="javascript:history.back()"> <button class="btn btn-voltar">VOLTAR</button></a>
            </div>
      </div>
</div>

<div class="container">
      <div class="ola my-5">
            <h4>
                  Olá, {{ auth()->user()->nome }} Vamos cadastrar seu novo endereço
            </h4>
      </div>
</div>
<div class="container">
      <div class="morada">
            <p>Novo Morada</p>
            <a href="{{ route('store.adress') }}"> <button class="btn btn-cadastrar">cadastrar</button></a>
      </div>
</div>

<div class="container">
      <div class="morada mt-4">
            <p>Sitios Salvos</p>
      </div>
      @forelse ($adresses as $adress)
      @if($loop->first)
      <a href="{{ route('store.checkout') }}">
            <div class="end">
                  <div class="end-in row align-items-center justify-content-center">
                        <div class="col-2">
                              <img src="{{ url('app-store/img/icons/location.svg') }}" alt="">
                        </div>
                        <div class="col-8">
                              <h4>{{ $adress->morada }} - {{ $adress->distrito }}</h4>
                        </div>
                        <div class="col-2">
                              <img src="{{ url('app-store/img/icons/close.svg') }}" alt="">
                        </div>
                  </div>
                  <input type="hidden" name="adress" value="{{ $adress->id }}">
            </div>
      </a>
      @endif
      @empty

      @endforelse
</div>
@endsection