@extends('layouts.app')

@section('content')
<div class="header">
    <div class="container">
        <div class="py-4 text-center">
            <img class="img-fluid " src="{{ url('painel/img/logo.svg') }}" alt="">
        </div>
    </div>
</div>
<div>
    <div class="container">
        <div class="text-center mt-3">
            Olá, {{ auth()->user()->name  }}
        </div>
        <div class="d-flex flex-column">
            <div class="mx-auto my-4">
               <a href="{{ route('consultor.comprador-individual.create') }}"><button class="btn btn-primary">Comprador Individual</button></a>
            </div>
            <div class="mx-auto my-2">
               <a href="{{ route('consultor.comprador-coletivo.create') }}"> <button class="btn btn-primary">Comprador Coletivo</button></a>
            </div>
        </div>
    </div>
</div>
@endsection