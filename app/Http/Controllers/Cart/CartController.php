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
            'quantity' => $product['quantity'],
            'attributes' => array(
                'image' => $request->image,
                'user_id' => $product['user_id'],
            )
        ));

        return redirect()->back()->with('message', 'Produto adicionado no carrinho!');
    }
}
