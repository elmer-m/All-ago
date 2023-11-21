<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;
use App\Models\Categoria;

class CategoriaController extends Controller
{
//     public function store_categoria(Request $request)
//     {
//         $requestData = $request->all();
//         if ($request->hasFile('foto')) {
//     $requestData['foto'] = $request->file('foto')
//         ->store('uploads', 'public');
// }


    //     Categoria::create($requestData);
    //     $categorias = Categoria::all();
    //     $anuncios = Anuncio::all();
    //     return view('site.olx', compact('anuncios', 'categorias'));
    // }
    public function store_categoria(Request $request)
    {
        $requestData = $request->all();
    
        if ($request->hasFile('foto')) {
            $requestData['foto'] = $request->file('foto')
                ->store('foto_categoria', 'public');
        }
    
        $categoria = Categoria::create($requestData);
    
        return redirect()->route('olx');
    }
    public function ver_categoria($id)
    {
        $categoria = Categoria::find($id);
    
        $anuncios = Anuncio::where('categoria_id', $categoria->id)->get();

        $totalAnuncios = $anuncios->count();
        
        $telefone = auth()->user()->telefone;
        return view('ver_categoria', compact('anuncios', 'totalAnuncios', 'categoria', 'telefone'));
    }
}
