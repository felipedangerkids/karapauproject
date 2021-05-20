@extends('layouts.app-comercial')

@section('content')
<div class="">
      <div class="container">
            <div class="py-4 text-center">
                  <img class="img-fluid " src="{{ url('app-comercial/img/logo.svg') }}" alt="">
            </div>
      </div>
</div>
<div class="">
      <div class="title">
            <div class="container px-4 d-flex justify-content-between">
                  <div class="pt-3">
                        <h4>Olá, {{ auth()->user()->name  }} {{ auth()->user()->lastname  }}</h4>
                  </div>
                  <div>
                        <a href="{{ route('consultor.logout') }}"> <span class="iconify" data-inline="false"
                                    data-icon="ls:logout"
                                    style="color: #ffffff; font-size: 38.42677688598633px;"></span></a>
                  </div>
            </div>
      </div>

      <div class="container mt-3">
            <div class="wallet px-4">
                  <div class="py-4">
                        <a href=""><i class="fas fa-wallet a-2"></i> Seu Wallet</a>
                        <h3>€ 00,00</h3>
                  </div>
            </div>
      </div>
      @php $comp = $comprador1->count() + $comprador2->count() @endphp
      @php $comp_ativo = $ativos_individual->count() + $ativos_coletivo->count() @endphp
      <div class="container mt-3">
            <div class="ativos px-4">
                  <div class="py-4">
                        <a href=""> <i class="fas fa-thumbs-up"></i> Compradores Ativos</a>
                        <h3>{{ $comp_ativo }}/{{ $comp }}</h3>
                  </div>
            </div>
      </div>
      <div class="container pb-5 mt-3">
            <div class="menu justify-content-around row">
                  <div class="col-5 text-center pl">
                        <a href="{{ url('comprador-cad') }}"><span class="iconify" data-inline="false"
                                    data-icon="bx:bx-user-plus"
                                    style="color: #36a6d4; font-size: 75.05713653564453px;"></span>
                              <p>CADASTRO DE COMPRADOR</p>
                        </a>
                  </div>
                  <div class="col-5 text-center pl">
                        <a href=""><span class="iconify" data-inline="false" data-icon="vaadin:piggy-bank"
                                    style="color: #36a6d4; font-size: 56px;"></span>
                              <p>VER SEU
                                    EXTRACTO</p>
                        </a>
                  </div>
                  <div class="col-5 text-center mt-3 pt-3 pl">
                        <a href="{{ route('consultor.compradores.ativo') }}"><i style="color: #36a6d4; font-size: 56px;"
                                    class="fas fa-thumbs-up pb-2"></i>
                              <p>VER ATIVOS</p>
                        </a>
                  </div>

                  <div class="col-5 text-center mt-3 pt-3 pl">
                        <a href="{{ route('consultor.compradores.inativo') }}"><span class="iconify" data-inline="false"
                                    data-icon="fluent:thumb-dislike-24-filled"
                                    style="color: #de1313; font-size: 53px;"></span>
                              <p>VER INATIVOS</p>
                        </a>
                  </div>

                  <div class="col-5 text-center mt-3 pt-3 pl">
                        <a href=""><i style="color: #36a6d4; font-size: 56px;" class="fas fa-book mb-2"></i>
                              <p>FAQ</p>
                        </a>
                  </div>
                  <div class="col-5 text-center mt-3 pt-3 pl">
                        <a href=""><span class="iconify mb-2" data-inline="false" data-icon="bi:chat-dots-fill"
                                    style="color: #36a6d4; font-size: 56px;"></span></span>
                              <p>SUPORTE</p>
                        </a>
                  </div>
            </div>
      </div>






      {{-- 
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
</div> --}}
</div>


@endsection