<?php

namespace App\Http\Controllers\Comercial;

use Illuminate\Http\Request;
use App\Models\CompradorColetivo;
use App\Models\CompradorIndividual;
use App\Http\Controllers\Controller;

class ComercialPainelController extends Controller
{

    public function index()
    {
       return view('comercial.pages.home');
    }

    public function compradorCad()
    {
        return view('comercial.pages.cadastro');
    }

    public function compradorList()
    {
        $comprador1 = CompradorIndividual::where('user_id', auth()->user()->id)->get();
        $comprador2 = CompradorColetivo::where('user_id', auth()->user()->id)->get();

        $inativos_individual = CompradorIndividual::where('user_id', auth()->user()->id)->where('status', 0)->get();
        $ativos_individual = CompradorIndividual::where('user_id', auth()->user()->id)->where('status', 1)->get();

        return view('comercial.pages.compradores', compact('comprador1', 'comprador2', 'inativos_individual', 'ativos_individual'));
    }
}
