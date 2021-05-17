@extends('layouts.app')

@section('content')


<div class="header">
      <div class="container d-flex flex-column py-3">
            <div class="text-center">
                  <img src="{{ url('painel/img/logo.svg') }}" alt="">
            </div>
      </div>
</div>
<div class="main">
      <div class="container">
            <div class="title">
                  <h4>Olá,</h4>
                  <p>{{ auth()->user()->name }} {{ auth()->user()->lastname }}</p>
            </div>
      </div>
</div>


@endsection