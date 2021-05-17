<?php

namespace App\Http\Controllers\Pescador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PainelPescadorController extends Controller
{
    public function index()
    {

        return view('pescador.pages.index');
    }
}
