<?php

namespace App\Http\Controllers\Admin;

use App\Models\Consultor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
