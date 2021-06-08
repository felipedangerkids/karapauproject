<?php

namespace App\Http\Controllers\Store;

use App\Models\Porto;
use App\Models\Produto;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{



    public function index()
    {
        return view('store.pages.painel.index');
    }

    public function porto()
    {
        $portos = Porto::where('status', 0)->get();
        return view('store.pages.painel.porto', compact('portos'));
    }

    public function produtos($id)
    {
        $produtos = Produto::where('porto_id', $id)->olderThanOneDay()->with('especies')->get();
        $porto = Porto::find($id);
        return view('store.pages.painel.produtos', compact('produtos', 'porto'));
    }

    public function produto($id)
    {
        $produto = Produto::with('especies')->find($id);
        return view('store.pages.painel.produto-single', compact('produto'));
    }
    public function produtoInfo($id)
    {
        $produto = Produto::with('especies')->find($id);
        return view('store.pages.painel.info-produto', compact('produto'));
    }

    public function portoSearch(Request $request)
    {
        if ($request->ajax()) {
            $portos = '';
            $portos = DB::table('portos')->where('nome', 'LIKE', '%' . $request->search . "%")->get();


            return response()->json($portos);
        
        // return view('store.pages.painel.porto-filter', compact('portos'))->render();
        }
    }
}
