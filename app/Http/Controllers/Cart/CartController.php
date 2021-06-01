<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;

class CartController extends Controller
{
        public function cartAdd(Request $request)
    {

        $product = $request->all();
      
     
        $cart = \Cart::add(array(
            'id' => $product['id'], // inique row ID
            'name' =>  $product['name'],
            'price' => $product['price'],
            'quantity' => $request['quantity'],
            'attributes' => array(
                'image' => $request->image,
                'user_id' => $product['user_id'],
                'pescador_id' => $product['pescador_id'],
             
            )
        ));

        return redirect()->back()->with('message', 'Produto adicionado no carrinho!');
    }

    public function cart()
    {
        return view('store.pages.painel.cart');
    }

    public function itemRemove($id)
    {
        \Cart::remove($id);

        return redirect()->back();
    }

    public function clear()
    {
        \Cart::clear();

        return redirect()->back()->with('message', 'Carrinho vazio');
    }
}
