<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use App\Models\AdressBuyer;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $adresses = AdressBuyer::where('user_id', auth()->user()->id)->get();
        return view('store.pages.painel.checkout', compact('adresses'));
    }
}
