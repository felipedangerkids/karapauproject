@extends('layouts.app-store')


@section('content')

<div class="container mt-5">
      <div class="alert alert-success" role="alert">
            Pedido realizado com sucesso! aguardando pagamento para liberação.
      </div>
      <div class="alert alert-info" role="alert">
            <p>Conta: 4525</p>
            <p>Agencia: 0000-0</p>
            <p>Banco: Nubank</p>
      </div>
      <div class="alert alert-info" role="alert">
            <div class="text-center">
                  <button class="btn btn-primary">Ver Pedidos</button>
            </div>
      </div>
</div>


@endsection