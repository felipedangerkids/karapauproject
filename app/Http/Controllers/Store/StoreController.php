<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Porto;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return view('store.pages.painel.index');
    }

    public function porto()
    {
        $portos = Porto::all();
        return view('store.pages.painel.porto', compact('portos'));
    }
}
