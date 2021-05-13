<?php

namespace App\Http\Controllers\Auth;

use App\Models\Mails;
use App\Mail\AdminMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CompradorIndividual;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\CompradorIndividualMail;


class CompradorIndividualController extends Controller
{

    public function index()
    {
        return view('auth.comprador-individual.create');
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
        $random = Str::random(9);
        $user = auth()->user()->id;
        $dados = $request->all();
        $save = CompradorIndividual::create([
            'user_id' => $user,
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'email' => $request->email,
            'password' => Hash::make($random),
            'telemovel' => $request->telemovel,
            'morada' => $request->morada,
        ]);


        $mails = new Mails();
        $mails['consultor'] = auth()->user()->name;
        $mails['nome'] = $request->name;
        $mails['email'] = $request->email;
        $mails['senha'] = $random;

        Mail::to('cadastros@karapau.pt')->send(new AdminMail($mails));

        $mails = new Mails();
        $mails['nome'] = $request->name;
        $mails['email'] = $request->email;
        $mails['senha'] = $random;

        Mail::to($request->email)->send(new CompradorIndividualMail($mails));

        return redirect()->route('consultor')->with('success', 'Comprador criado com sucesso!');
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
