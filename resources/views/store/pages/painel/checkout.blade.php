@extends('layouts.app-store')


@section('content')
<form action="{{ route('store.checkout.payment') }}" method="post">
      @csrf
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
                                    <address class="wrapper--box">
                                          <button class="btn btn-primary">Cadastrar Endereço</button>
                                    </address>
                                    @endforelse

                                    <button class="gamma">Selecionar</button>
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
                                                <input type="radio" name="shipment" id="standard" value="Entrega Padrão"/>
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
                                                <input type="radio" name="payment" id="creditcard" value="Transferencia Bancaria"/>
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
                                                                        <a
                                                                              href="{{ route('store.cart.remove', $item->id) }}">
                                                                              <button class="alpha">remove</button></a>
                                                                  </p>
                                                            </div>
                                                      </div>
                                                </div>
                                          </td>

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
      </div>
</form>
@endsection