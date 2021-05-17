<?php

namespace App\Http\Controllers\Comercial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComercialPainelController extends Controller
{

    public function index()
    {
       return view('home');
    }
    public function compradorCad()
    {
        return view('comercial.pages.cadastro');
    }
}
