@extends('layouts.app-store')


@section('content')

    <div class="header">
        <div class="container">
            <div class="text-center mx-auto py-5">
                <a href="{{ route('store.index') }}"> <img src="{{ url('app-store/img/logo.svg') }}" alt=""></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex inicio mt-3 ">
            <div>
                <button class="btn btn-voltar">VOLTAR</button>
            </div>
            <div>
                <span>ENCOMENDA 1001</span>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="detail">
            <span>Detalhes da Encomenda</span>
        </div>
    </div>

    <div class="container mt-3">
        <div class="d-flex itens">
            <div>
                <span>ESPÉCIME</span>
            </div>
            <div>
                <span>QUANT</span>
            </div>
            <div>
                <span>VALOR</span>
            </div>
            <div>
                <span>STATUS</span>
            </div>
        </div>
    </div>

    <div class="d-flex itens mt-5">
        <div>
            <span>SARDINHA</span>
        </div>
        <div>
            <span>10 KG</span>
        </div>
        <div>
            <span>€ 29,00</span>
        </div>
        <div>
            <button>transporte</button>
        </div>
    </div>


@endsection
