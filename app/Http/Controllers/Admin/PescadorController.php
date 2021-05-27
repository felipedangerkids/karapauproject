<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produto;
use App\Models\Pescador;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Especie;
use Illuminate\Support\Facades\Hash;

class PescadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pescadores = Pescador::with('produtos')->paginate(15);

        return view('painel.pages.pescador.index', compact('pescadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showProducts($id)
    {
        $produtos = Produto::with('especies')->where('pescador_id', $id)->get();
        return view('painel.pages.pescador.produtos', compact('produtos'));
    }


    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pescador = Pescador::findOrFail($id);

        return view('painel.pages.pescador.edit-pescador', compact('pescador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pescador = Pescador::find($id);

        $pescador->name =     $request->get('name');
        $pescador->lastname = $request->get('lastname');
        $pescador->email = $request->get('email');
        $pescador->password = Hash::make($request->get('password'));
        $pescador->telefone = $request->get('telefone');
        $pescador->morada = $request->get('morada');
        $pescador->nif = $request->get('nif');
        $pescador->iban = $request->get('iban');
        $pescador->nome_embarcacao = $request->get('nome_embarcacao');

        $pescador->save();

        return redirect()->route('admin.pescador')->with('success', 'Pescador alterado com sucesso!');
    }


    public function updateStatus(Request $request, $id)
    {
        $pescador = Pescador::find($id);
        $pescador->status = $request->get('status');
        $pescador->save();
        return redirect()->back();

    }

    public function editProduto($id)
    {
        $especies = Especie::all();
        $produto = Produto::with('especies')->find($id);

        return view('painel.pages.pescador.edit-produto', compact('produto', 'especies'));
    }

    public function updateProdutoStatus(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto->status = $request->get('status');
        $produto->save();
        return redirect()->back();

    }


    public function destroy($id)
    {
        //
    }
}
