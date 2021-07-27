@extends('atualiza.layout.index')


@section('content')
    <div class="header-top">
    </div>
    <div class="headertop1"></div>



    <div class="container">

        <div class="buyer-number">
            <div class="comprador">
                <p>NÚMERO DE <br> COMPRADOR</p>
            </div>
            <div class="numero">
                <p>10000</p>
            </div>
        </div>

        <div class="title">
            <p>Olá, </p>
            <a href="">SAIR</a>
        </div>

        <div class="row mt-5 menu-icons">
            <div class="col-6">
                <a href="{{ route('store.porto') }}"> <img src="{{ url('app-store/img/icons/compras.svg') }}"
                        alt=""></a>
                <p>Fazer Compras</p>
            </div>
            <div class="col-6">
                <a href="{{ route('user.pedidos') }}"> <img src="{{ url('app-store/img/icons/encomendas.svg') }}"
                        alt=""></a>
                <p>SUAS ENCOMENDAS</p>
            </div>
            <div class="col-6">
                <img src="{{ url('app-store/img/icons/perfil.svg') }}" alt="">
                <p>SEUS DADOS
                    DE PERFIL</p>
            </div>
            <div class="col-6">
                <img src="{{ url('app-store/img/icons/suporte.svg') }}" alt="">
                <p>SUPORTE TÉCNICO</p>
            </div>
        </div>
    </div>

@endsection
