<?php

namespace App\Http\Controllers\Admin;

use App\Models\Porto;
use App\Models\Especie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EspecieToPorto;
use Intervention\Image\ImageManagerStatic;

class PortoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especies = Especie::all();
        return view('painel.pages.porto.create', compact('especies'));
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
        // dd($data);
        $img = ImageManagerStatic::make($data['image']);
        $name = Str::random() . '.jpg';

        $originalPath = storage_path('app/public/portos/');

        $img->save($originalPath . $name);

        $especie = Porto::create([
            'nome' => $data['nome'],
            'registro' => $request->input('registro'),
            'descarga' => $request->input('descarga'),
            'controle_veterinario' => $data['controle_veterinario'],
            'image' => $name,
  
        ]);
        if ($especie) {

            foreach ($data['especies'] as $key => $especi) {
                EspecieToPorto::create([
                    'porto_id' => $especie->id,
                    'especie_id' => $especi,
                ]);
            }
        }


        return redirect()->route('admin.porto')->with('success', 'Porto criado com sucesso!');
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
