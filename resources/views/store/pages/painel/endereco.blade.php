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
                  Olá, Felipe Vamos cadastrar seu novo endereço
            </h4>
      </div>
</div>
<div class="container">
      <div class="morada">
            <p>Novo Morada</p>
            <button class="btn btn-cadastrar">cadastrar</button>
      </div>
</div>

<div class="container">
      <div class="morada mt-4">
            <p>Sitios Salvos</p>
      </div>
      <div class="end">
            <div class="end-in row align-items-center justify-content-center">
                  <div class="col-2">
                        <img src="{{ url('app-store/img/icons/location.svg') }}" alt="">
                  </div>
                  <div class="col-8">
                        <h4>Av da Republica, 1290 - Villa Nova de Gaia</h4>
                  </div>
                  <div class="col-2">
                        <img src="{{ url('app-store/img/icons/close.svg') }}" alt="">
                  </div>
            </div>
      </div>
</div>
@endsection