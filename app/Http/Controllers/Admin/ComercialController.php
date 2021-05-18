<?php

namespace App\Http\Controllers\Admin;

use App\Models\Consultor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompradorColetivo;
use App\Models\CompradorIndividual;

class ComercialController extends Controller
{
    public function index()
  {
        $consultores = Consultor::paginate(15);
     return view('painel.pages.consultores.index', compact('consultores'));
  }

  public function create()
  {
    return view('painel.pages.consultores.create');
  }
  public function clientes($id)
  {
    $comprador1 = CompradorIndividual::where('user_id', $id)->get();
    $comprador2 = CompradorColetivo::where('user_id', $id)->get();
    return view('painel.pages.consultores.clientes', compact('comprador1', 'comprador2'));
  }
}
