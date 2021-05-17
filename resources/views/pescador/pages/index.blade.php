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
                        <h3>{{ auth()->user()->name  }}</h3>
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
                        <div class="col-4 text-center mt-3">
                              <a href="{{ route('pescador.produto') }}"><i class="fas fa-cart-plus a-1"></i>Vender
                                    </a>
                        </div>
                        <div class="col-4 mt-3">
                              <a href="{{ route('pescador.produto.list') }}"><i class="fas fa-fish a-2"></i>Produtos</a>
                        </div>
                        <div class="col-4 mt-3">
                              <a href=""><i class="fas fa-wallet a-2"></i>Wallet</a>
                        </div>
                        <div class="col-4 mt-3">
                              <a href=""><i class="fas fa-history a-3"></i>Histórico</a>
                        </div>
                  </div>
            </div>
      </div>
</div>

@endsection