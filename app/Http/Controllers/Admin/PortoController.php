<?php

namespace App\Http\Controllers\Admin;

use App\Models\Porto;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Especie;
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
        $portos = porto::all();
        return view('painel.pages.porto.create', compact('portos'));
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

        $porto = Porto::create([
            'nome' => $data['nome'],
            'registro' => $request->input('registro'),
            'descarga' => $request->input('descarga'),
            'controle_veterinario' => $data['controle_veterinario'],
            'image' => $name,

        ]);
        if ($porto) {

            foreach ($data['portos'] as $key => $especi) {
                EspecieToPorto::create([
                    'porto_id' => $porto->id,
                    'porto_id' => $especi,
                ]);
            }
        }


        return redirect()->route('admin.porto')->with('success', "Porto $porto->nome criado com sucesso!");
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
        $porto = Porto::findOrFail($id);
        $especies = Especie::all();
        return view('painel.pages.porto.edit', compact('porto', 'especies'));
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
        $porto = Porto::find($id);

        $data = $request->all();

        if ($request->image != '') {
            $path = storage_path('app/public/portos/');

            //code for remove old file
            if ($porto->image != ''  && $porto->image != null) {
                $file_old = $path . $porto->image;
                unlink($file_old);
            }

            //upload new file
            $img = ImageManagerStatic::make($data['image']);


            $name = Str::random() . '.jpg';

            $originalPath = storage_path('app/public/portos/');

            $img->save($originalPath . $name);

            //for update in table
            $porto->update(['image' => $name]);
        }


        $porto->nome =     $request->get('nome');
        $porto->registro = $request->get('registro');
        $porto->descarga = $request->get('descarga');
        $porto->controle_veterinario = $request->get('controle_veterinario');
        // $porto->especies = $request->get('especies');
  



        $porto->save();


        return redirect()->route('admin.porto')->with('success', 'porto alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $porto = Porto::findOrFail($id);
        $porto->delete();
        return redirect()->route('admin.porto')->with('success', "Porto $porto->nome deletado com sucesso!");
    }
}
