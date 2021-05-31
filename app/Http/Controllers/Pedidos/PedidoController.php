<?php

namespace App\Http\Controllers\Pedidos;

use App\Http\Controllers\Controller;
use App\Models\UserOrder;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function userPedido()
    {
        $user_orders = UserOrder::where('user_id', auth()->user()->id)->get();
        return view('store.pages.user.pedidos', compact('user_orders'));
    }
}
