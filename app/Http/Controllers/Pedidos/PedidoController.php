<?php

namespace App\Http\Controllers\Pedidos;

use App\Http\Controllers\Controller;
use App\Models\UserOrder;
use App\Models\UserProduct;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function userPedido()
    {
        $user_orders = UserOrder::where('user_id', auth()->user()->id)->get();
        return view('store.pages.user.pedidos', compact('user_orders'));
    }

    public function pedidoDatalheUser($id)
    {
        $produtos = UserProduct::where('order_id', $id)->get();
        $order = UserOrder::where('id', $id)->with('enderecos')->get();
  
        return view('store.pages.user.pedido-produtos', compact('produtos', 'order'));
    }
}
