<?php

namespace App\Http\Controllers\Auth;

use App\Models\Porto;
use App\Models\Pescador;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PescadorRegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $dados = Pescador::create([
            'name' =>           $data['name'],
            'lastname' =>       $data['lastname'],
            'email' =>          $data['email'],
            'password' => Hash::make($request['password']),
            'telefone' =>       $data['telefone'],
            'morada' =>         $data['morada'],
            'nif' =>            $data['nif'],
            'iban' =>           $data['iban'],
            'porto' =>          $data['porto'],
            'fishing_zone' =>   $data['fishing_zone'],
            'nome_embarcacao' => $data['nome_embarcacao'],

        ]);

        return redirect()->back()->with('success', 'Usuario criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
