<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Especie;
use Intervention\Image\ImageManagerStatic;

class EspecieController extends Controller
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
        return view('painel.pages.especies.create');
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
        $img = ImageManagerStatic::make($data['image']);
        $name = Str::random() . '.jpg';

        $originalPath = storage_path('app/public/especies/');

        $img->save($originalPath . $name);

        $especie = Especie::create([
            'nome_portugues' => $data['nome_portugues'],
            'nome_ingles' => $data['nome_ingles'],
            'nome_espanhol' => $data['nome_espanhol'],
            'nome_cientifico' => $data['nome_cientifico'],
            'codigo_fao' => $data['codigo_fao'],
            'codigo_lota' => $data['codigo_lota'],
            'tamanho_minimo' => $data['tamanho_minimo'],
            'image' => $name,
            'margem' => $data['margem'],
        ]);

        return redirect()->route('admin.especies')->with('success', 'Espécie criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $especie = Especie::findOrFail($id);
        return view('painel.pages.especies.edit', compact('especie'));
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
