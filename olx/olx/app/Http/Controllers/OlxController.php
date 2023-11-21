<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Anuncio;
use Illuminate\Support\Facades\Auth;

class OlxController extends Controller
{
    public function olx(){
        $telefone = auth()->user()->telefone;
        $anuncios = Anuncio::all();
        $categorias = Categoria::all();
        return view('site.olx', compact('telefone', 'anuncios', 'categorias'));
    }
}
