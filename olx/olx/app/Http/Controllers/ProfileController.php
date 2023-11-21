<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Anuncio;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function perfil($email)
    {
        // 1 -Peguei o email que veio do get, $email
        // 2 - Filtrei o user da tabela users por email e busquei o user pelo email que peguei no get (1)
        $user = User::where('email', $email)->first();
        // 3 - Depois de ja ter o user peguei o email do user e fui buscar a lista de anuncios associados a esse email
        $anuncios = Anuncio::where('email', $user->email)->get();
        $telefone = auth()->user()->telefone;
        return view('profile.perfil', compact('user','telefone', 'anuncios'));
    }
    public function ver_anuncio($id) {
        $anuncio = Anuncio::find($id);
        $userEmail = Auth::user()->email;
        if ($anuncio) {            
            return view('anuncio.ver_anuncio', compact('anuncio', 'userEmail'));
        }
    
        // Caso o anúncio não seja encontrado, você pode redirecionar para uma página de erro ou fazer qualquer outra ação desejada.
        // Por exemplo:
        return redirect()->view('erro');
    }    
}
