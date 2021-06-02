@extends('layouts.app-pescador')

@section('content')


<div class="header">
      <div class="container">
            <div class="py-4 text-center">
                  <img class="img-fluid " src="{{ url('app-comercial/img/logo-img.svg') }}" alt="">
            </div>
      </div>
</div>
<div>
      <div class="d-flex justify-content-between container voltar py-4 mb-5">
            <div>
                  <a href="{{ route('pescador.index') }}"> <i class="fas fa-chevron-left"></i> Voltar</a>
            </div>
            <div>
                  <span>PEDIDOS</span>
            </div>
      </div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
      <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
      </ul>
</div>
@endif

<div class="list ">
      <div class="container">
            <div class="d-flex justify-content-around text-center">

                  <div>
                        <p>Espécie</p>
                  </div>
                  <div>
                        <p>Quantidade</p>
                  </div>
                  <div>
                        <p>Valor</p>
                  </div>
                  <div>
                        <p>Total</p>
                  </div>
            </div>
      </div>
      @foreach ($pedidos as $pedido)
      <div class="repeat">
            <div class="for">
                  <div class="container">
                        <div class="d-flex  justify-content-around text-center">

                              <div>
                                    <h5>{{ $pedido->products->name }}</h5>
                              </div>
                              <div>
                                    <h5>{{ $pedido->products->quantity }} Kg</h5>
                              </div>
                              <div>
                                    <h5>{{  '€ '.number_format($pedido->products->price, 2, ',', '.') }}</h5>
                              </div>
                              <div>
                                    <h5>{{  '€ '.number_format($pedido->orders->total, 2, ',', '.') }}</h5>
                              </div>
                        </div>

                  </div>

            </div>
            <div class="">
                  <div class="text-center mt-4 mb-4">
                        <form action="{{ route('pescador.produto.status', $pedido->products->id) }}">
                              @if($pedido->products->status == 0)
                              <input type="hidden" name="status" value="1">
                              <button class="btn btn-danger bg-danger text-white">A LIBERAR</button>
                              @elseif($pedido->products->status == 1)
                              <input type="hidden" name="status" value="2">
                              <button class="btn btn-success bg-success text-white">LIBERAR RETIRADA</button>
                              @elseif($pedido->products->status == 2)
                              <input type="hidden" name="status" value="3">
                              <button class="btn btn-success bg-primary text-white">ENTREGUE</button>
                              @elseif($pedido->products->status == 3)
                                    <h5>Produto Entregue!</h5>
                              @endif
                        </form>
                  </div>
            </div>
      </div>
      @endforeach
</div>


@endsection