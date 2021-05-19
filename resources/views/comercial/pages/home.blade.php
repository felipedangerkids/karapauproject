@extends('layouts.app')

@section('content')
<div class="header">
      <div class="container">
            <div class="py-4 text-center">
                  <img class="img-fluid " src="{{ url('painel/img/logo.svg') }}" alt="">
            </div>
      </div>
</div>
<div class="main">
      <div class="title">
            <div class="container px-4">
                  <div class="pt-3">
                        <h4>Olá,</h4>
                        <h3>{{ auth()->user()->name  }} {{ auth()->user()->lastname  }}</h3>
                  </div>
            </div>
      </div>
      <div class="title">
            <div class="container">
                  <div class="mt-3 d-flex px-3">
                        <div>
                              <h4>WALLET</h4>
                        </div>
                        <div class="mx-auto">
                              <h3>€ 00,00</h3>
                        </div>
                  </div>
            </div>
      </div>
      <div class="">
            <div class="container menu-ic">
                  <div class="row pt-3 text-center">
                        <div class="col-4 text-center">
                              <a href="{{ url('comprador-cad') }}"><i class="fas fa-user-plus a-1"></i>Cadastrar
                                    Comprador</a>
                        </div>
                        <div class="col-4">
                              <a href="{{ route('consultor.compradores') }}"><i class="fas fa-users a-2"></i>Compradores</a>
                        </div>
                        <div class="col-4">
                              <a href=""><i class="fas fa-wallet a-2"></i>Wallet</a>
                        </div>
                        <div class="col-4">
                              <a href=""><i class="fas fa-history a-3"></i>Histórico</a>
                        </div>
                  </div>
            </div>
      </div>
</div>


@endsection