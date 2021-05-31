<?php

namespace App\Http\Controllers\Checkout;

use App\Models\AdressBuyer;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserOrder;
use App\Models\UserProduct;

class CheckoutController extends Controller
{
    public function index()
    {
        $adresses = AdressBuyer::where('user_id', auth()->user()->id)->get();
        return view('store.pages.painel.checkout', compact('adresses'));
    }

    public function payment(Request $request)
    {
        $messages = [
            // 'adress.required' => 'Cadastre um endereço ou escolha um cadastrado',
            'payment.required' => 'Escolha um Metodo de pagamento para continuar',
            'shipment.required' => 'Escolha um Metodo de Entrega para continuar',
        ];
        $validated = $request->validate([
            // 'adress' => 'required',
            'payment' => 'required',
            'shipment' => 'required',
        ], $messages);

        $user_order = UserOrder::create([
            'adress' => $request->adress,
            'payment_mothod' => $request->payment,
            'shipping_mothod' => $request->shipment,
            'user_id' => auth()->user()->id,
        ]);

        foreach (\Cart::getContent() as $item) {

            UserProduct::create([
                'product_id' => $item->id,
                'name' => $item->name,
                'price' => $item->price,
                'quantity' => $item->quantity,
                'image' => $item->attributes->image,
                'user_id' => auth()->user()->id,
                'order_id' => $user_order->id,
            ]);
        }

  

        \Cart::clear();
        return redirect()->route('store.thanks');
    }

    public function thanks()
    {
        return view('store.pages.painel.thanks');
    }
}
