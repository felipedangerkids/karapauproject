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
        $comprador1 = CompradorIndividual::where('user_id', auth()->user()->id)->get();
        $comprador2 = CompradorColetivo::where('user_id', auth()->user()->id)->get();

        $inativos_individual = CompradorIndividual::where('user_id', auth()->user()->id)->where('status', 0)->get();
        $ativos_individual = CompradorIndividual::where('user_id', auth()->user()->id)->where('status', 1)->get();
        $inativos_coletivo = CompradorColetivo::where('user_id', auth()->user()->id)->where('status', 0)->get();
        $ativos_coletivo = CompradorColetivo::where('user_id', auth()->user()->id)->where('status', 1)->get();

        return view('comercial.pages.home', compact('comprador1', 'comprador2', 'inativos_individual', 'ativos_individual', 'inativos_coletivo', 'ativos_coletivo'));
    }

    public function compradorCad()
    {
        return view('comercial.pages.cadastro');
    }

    public function compradorListAtivo()
    {
        $comprador1 = CompradorIndividual::where('user_id', auth()->user()->id)->get();
        $comprador2 = CompradorColetivo::where('user_id', auth()->user()->id)->get();

        $inativos_individual = CompradorIndividual::where('user_id', auth()->user()->id)->where('status', 0)->get();
        $ativos_individual = CompradorIndividual::where('user_id', auth()->user()->id)->where('status', 1)->get();
        $ativos_coletivo = CompradorColetivo::where('user_id', auth()->user()->id)->where('status', 1)->get();

        return view('comercial.pages.compradores-ativos', compact('comprador1', 'comprador2', 'ativos_coletivo', 'ativos_individual'));
    }
    public function compradorListInativo()
    {
        $comprador1 = CompradorIndividual::where('user_id', auth()->user()->id)->get();
        $comprador2 = CompradorColetivo::where('user_id', auth()->user()->id)->get();

        $inativos_individual = CompradorIndividual::where('user_id', auth()->user()->id)->where('status', 0)->get();
        $inativos_coletivo = CompradorColetivo::where('user_id', auth()->user()->id)->where('status', 0)->get();

        return view('comercial.pages.compradores-inativos', compact('inativos_individual', 'inativos_coletivo'));
    }

    public function listIndividual($id)
    {
        $comprador1 = CompradorIndividual::where('user_id', auth()->user()->id)->find($id);
      
        return view('comercial.pages.list-individual', compact('comprador1'));
    }
    public function listColetivo($id)
    {
        $comprador1 = CompradorColetivo::where('user_id', auth()->user()->id)->find($id);
      
        return view('comercial.pages.list-coletivo', compact('comprador1'));
    }

    public function incompletoIndividual()
    {
        $imcompletos = CompradorIndividual::orWhereNull('nif')->orWhereNull('sobrenome')->orWhereNull('telemovel')->orWhereNull('morada')->where('user_id', 1)->get();
        dd($imcompletos);
    }
}
