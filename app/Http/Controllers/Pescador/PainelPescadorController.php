<?php

namespace App\Http\Controllers\Pescador;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class PainelPescadorController extends Controller
{
    public function index()
    {
        $produtos = Produto::where('pescador_id', auth()->guard('pescador')->user()->id)->get();
        return view('pescador.pages.index', compact('produtos'));
    }
}
