<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Anuncio;
use App\Models\Categoria;

use Illuminate\Support\Facades\Auth;

class AnuncioController extends Controller
{
    public function ver_anuncio($id) {
        $anuncio = Anuncio::where('id', $id)->first(); // Obter o anúncio pelo ID
        $userEmail = $anuncio->email; // Obter o email do usuário associado ao anúncio
        $user = User::where('email', $userEmail)->first(); // Obter o usuário pelo email
        $dataCriacao = $user->created_at; // Obter a data de criação do usuário
        $telefone = auth()->user()->telefone;
        return view('anuncio.ver_anuncio', compact('anuncio','telefone', 'userEmail', 'user', 'dataCriacao'));
    }
    public function pesquisar(Request $request){
        $termoPesquisa = $request->input('termoPesquisa');

        $anuncios = Anuncio::where('titulo', 'LIKE', "%{$termoPesquisa}%")
                           ->orwhere('descricao', "LIKE", "%{$termoPesquisa}%")
                           ->get();  

        $totalAnuncios = $anuncios->count();
                           
        return view ('anuncio.pesquisa', compact('anuncios', 'termoPesquisa', 'totalAnuncios'));
    }
}
