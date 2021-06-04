@extends('layouts.app-store')


@section('content')
<form action="{{ route('store.checkout.payment') }}" method="post">
      @csrf
      @if ($errors->any())
      <div class="alert alert-danger">
            <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
            </ul>
      </div>
      @endif
<<<<<<< HEAD
=======
    
>>>>>>> main
      <div class="header">
            <div class="container">
                  <div class="text-center d-flex justify-content-end mx-auto py-5">
                        <a href="javascript:history.back()"> <button class="btn btn-voltar">VOLTAR</button></a>
                  </div>
            </div>
      </div>
      <div class="container">
            <div class="morada mt-4">
                  <p>Sitios Salvos</p>
            </div>
<<<<<<< HEAD
            @foreach ($adresses as $adress)

=======
            @forelse ($adresses as $adress)
            @if($loop->first)
>>>>>>> main
            <div class="end">
                  <div class="end-in row align-items-center justify-content-center">
                        <div class="col-2">
                              <img src="{{ url('app-store/img/icons/location.svg') }}" alt="">
                        </div>
                        <div class="col-8">
                              <h4>{{ $adress->morada }} - {{ $adress->distrito }}</h4>
                        </div>
                        <div class="col-2">
                              <img src="{{ url('app-store/img/icons/close.svg') }}" alt="">
<<<<<<< HEAD
                        </div>
                  </div>
                  <input type="hidden" name="adress" value="{{ $adress->id }}">
            </div>
            @endforeach()
      </div>
      <div class="container mt-4">
            <div class="morada text-right">
                  <button class="btn btn-cadastrar">Alterar</button>
            </div>
      </div>
      <div class="mt-4">
            <div class="container">
                  <div class="morada">
                        <p>TAXA DE ENTREGA</p>
                  </div>
            </div>
            <div class="tax">
                  <div class="container">
                        <p>€ 0,0</p>
                  </div>
            </div>
      </div>
      <div class="mt-4">
            <div class="container">
                  <div class="morada">
                        <p>FORMA DE PAGAMENTO</p>
                  </div>
            </div>
            <div class="pag">
                  <div class="container">
                        <div class="row pag-in">
                              <div class="col-6">
                                    <p>Transferência Bancária</p>
                              </div>
                              <div class="col-5">
                                    <button class="btn btn-voltar">Alterar</button>
                              </div>
=======
>>>>>>> main
                        </div>
                        <input type="hidden" name="adress" value="{{ $adress->id }}">
                  </div>
            </div>
<<<<<<< HEAD
=======
            @endif
            @empty
            <h4>Nenhum endereço cadastrado</h4>
            @endforelse
      </div>
      <div class="container mt-4">
            <div class="morada text-right">
                  <button class="btn btn-cadastrar">Alterar</button>
            </div>
>>>>>>> main
      </div>
      <div class="mt-4">
            <div class="container">
                  <div class="morada">
<<<<<<< HEAD
                        <p>ITENS</p>
                  </div>
            </div>
            <div class="title-back">
                  <div class="container">
                        <div class="row title-check">
                              <div class="col-3">
                                    <h4>ESPÉCIME</h4>
                              </div>
                              <div class="col-2">
                                    <h4>QUANT</h4>
                              </div>
                              <div class="col-2">
                                    <h4>VALOR</h4>
                              </div>
                              <div class="col-3">
                                    <h4>EMBARCAÇÃO</h4>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="status">
                  <div class="container">

                        <div class="d-flex mt-5 status-in">
                              <div class="item text-uppercase row">

                                    <p>CARAPAU</p>
                              </div>
                              <div class="col-2">
                                    <p>10 KG</p>
                              </div>
                              <div class="col-2">
                                    <p>€ 10,00</p>
                              </div>

                              <div class="col-4 d-flex flex-column">
                                    <button class="btn btn-status0 mb-2">TESTE</button>
                                    <button class="btn btn-status0 bg-danger pb-2">REMOVER</button>
                              </div>
                        </div>
                  </div>

            </div>
      </div>
      </div>
      <div class="finalizar">
            <div class="container">
                  <div class="py-4">
                        <p>Subtotal: € 30,00</p>
                        <p>Taxa de Entrega: € 00,00</p>
                        <h3>Total: €34,90</h3>
                  </div>
            </div>

      </div>
      <div class="container my-4">
            <div class="text-right">
                  <button type="submit" class="btn btn-voltar mx-auto">FINALIZAR</button>
            </div>
      </div>
</form>
@endsection

{{-- @extends('layouts.app-store')


@section('content')
<form action="{{ route('store.checkout.payment') }}" method="post">
@csrf
@if ($errors->any())
<div class="alert alert-danger">
      <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
      </ul>
</div>
@endif
<div class="onepage-checkout">
      <div class="pure-g-r">

            <!-- Billing & shipping address -->
            <div class="pure-u-1-4">


                  <div class="pure-u-1-1">
                        <div class="wrapper wrapper__alpha">
                              <h2 class="__alpha">Endereço de Entrega</h2>
                              @forelse ($adresses as $adress)
                              <address class="wrapper--box">
                                    {{ $adress->morada }} <br>
                                    {{ $adress->codigo_postal }} <br>
                                    {{ $adress->distrito }}
                                    <input type="hidden" name="adress" value="{{ $adress->id }}">
                              </address>
                              @empty

                              <a href="{{ route('store.adress') }}" class="btn btn-primary bg-success">Cadastrar
                                    Endereço</a>

                              @endforelse


                        </div>
                  </div>
            </div>

            <!-- Shipping -->
            <div class="pure-u-1-4">
                  <div class="pure-u-1-1">
                        <div class="wrapper wrapper__beta">
                              <h2 class="__alpha">Entrega</h2>

                              <ul class="wrapper--box">
                                    <li>
                                          <input type="radio" name="shipment" id="standard" value="Entrega Padrão" />
                                          <label for="standard">Padrão</label>
                                    </li>

                              </ul>
                        </div>
                  </div>

                  <!-- Delivery -->


                  <!-- Payment -->
                  <div class="pure-u-1-1">
                        <div class="wrapper wrapper__delta">
                              <h2 class="__alpha">Pagamento</h2>

                              <ul class="wrapper--box">
                                    <li>
                                          <input type="radio" name="payment" id="creditcard"
                                                value="Transferencia Bancaria" />
                                          <label for="creditcard">Transferencia Bancaria</label>
                                    </li>

                              </ul>
                        </div>
                  </div>

            </div>



            <div class="pure-u-1-2">

                  <div class="wrapper wrapper__gamma">
                        <h2 class="__alpha">Carrinho</h2>
                        <table class="">
                              <thead>
                                    <tr>
                                          <th>Produto(s)</th>
                                          <th></th>
                                          <th>Total(s)</th>
                                    </tr>
                              </thead>
                              @forelse (Cart::getContent() as $item)
                              <tr class="wrapper--box">
                                    <td class="alpha">
                                          <div class="pure-g">
                                                <div class="pure-u-1-4">

                                                      <img
                                                            src='{{ url('storage/especies/'.$item->attributes->image) }}'>
                                                </div>
                                                <div class="pure-u-3-4">
                                                      <div class="helper--alpha">
                                                            <h3>{{ $item->name }}</h3>
                                                            <p>{{  '€ '.number_format($item->price, 2, ',', '.') }}
                                                            </p>
                                                            <p>
                                                                  <a href="{{ route('store.cart.remove', $item->id) }}"
                                                                        class="alpha btn btn-danger bg-danger">remover</a>
                                                            </p>
                                                      </div>
                                                </div>
                                          </div>
                                    </td>
=======
                        <p>TAXA DE ENTREGA</p>
                  </div>
            </div>
            <div class="tax">
                  <div class="container">
                        <p>€ 0,0</p>
                  </div>
            </div>
      </div>
      <div class="mt-4">
            <div class="container">
                  <div class="morada">
                        <p>FORMA DE PAGAMENTO</p>
                  </div>
            </div>
            <div class="pag">
                  <div class="container">
                        <div class="row pag-in">
                              <div class="col-6">
                                    <p>Transferência Bancária</p>
                              </div>
                              <input type="hidden" name="payment" value="Transferencia Bancaria">
                              <input type="hidden" name="shipment" id="standard" value="Entrega Padrão" />
                              <div class="col-5">
                                    <button class="btn btn-voltar">Alterar</button>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class="mt-4">
            <div class="container">
                  <div class="morada">
                        <p>ITENS</p>
                  </div>
            </div>
            <div class="title-back">
                  <div class="container">
                        <div class="row title-check">
                              <div class="col-3">
                                    <h4>ESPÉCIME</h4>
                              </div>
                              <div class="col-2">
                                    <h4>QUANT</h4>
                              </div>
                              <div class="col-2">
                                    <h4>VALOR</h4>
                              </div>
                              <div class="col-3">
                                    <h4>EMBARCAÇÃO</h4>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="status">
                  <div class="container">
                        @forelse (Cart::getContent() as $item)
                        <div class="d-flex mt-5 status-in">
                              <div class="item text-uppercase row">

                                    <div class="col-4">
                                          <p>{{ $item->name }}</p>
                                    </div>
                                    <div class="col-2">
                                          <p>{{ $item->quantity }} KG</p>
                                    </div>
                                    <div class="col-2">
                                          <p>{{  '€ '.number_format($item->price, 2, ',', '.') }}</p>
                                    </div>

                                    <div class="col-4 d-flex flex-column">
                                          <button
                                                class="btn btn-status0 mb-2">{{ $item->attributes->embarcacao }}</button>
                                          <a href="{{ route('store.cart.remove', $item->id) }}"> <button
                                                      class="btn btn-status0 bg-danger mt-4">REMOVER</button></a>
                                    </div>
                              </div>
                        </div>
                        @empty
                        <h3>Carrinho Vazinho!</h3>
                        @endforelse
>>>>>>> main

                                    <td class="alpha">
                                          Quantidade: {{ $item->quantity }} Kg
                                    </td>
                              </tr>
                              @empty
                              <h3>Carrinho Vazinho!</h3>
                              @endforelse
                              <tr>
                                    <td colspan="3">
                                          <hr>
                                    </td>
                              </tr>

                              <tr>
                                    <th colspan='2'>Subtotal</th>
                                    <td>{{  '€ '.number_format(Cart::getSubTotal(), 2, ',', '.') }}</td>
                              </tr>

                              <tr>
                                    <th colspan='2'>Entrega</th>
                                    <td>0</td>
                              </tr>
                              <tr class="alpha">
                                    <th colspan='2'>Total</th>
                                    <td>{{  '€ '.number_format(Cart::getTotal(), 2, ',', '.') }}</td>
                              </tr>
                        </table>

                        <div class="text--right">
                              <button class="beta">Finalizar</button>
                        </div>
                  </div>

            </div>
      </div>
<<<<<<< HEAD
</div>
</form>
@endsection --}}
=======
      <div class="finalizar">
            <div class="container">
                  <div class="py-4">
                        <p>Subtotal: {{  '€ '.number_format(Cart::getSubTotal(), 2, ',', '.') }}</p>
                        <p>Taxa de Entrega: € 00,00</p>
                        <h3>Total: {{  '€ '.number_format(Cart::getTotal(), 2, ',', '.') }}</h3>
                  </div>
            </div>

      </div>
      <div class="container my-4">
            <div class="text-right">
                  <button type="submit" class="btn btn-voltar mx-auto">FINALIZAR</button>
            </div>
      </div>
</form>
@endsection
>>>>>>> main
