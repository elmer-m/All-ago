<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class TelefoneController extends Controller
{

    public function numero(){
        return view ('layout_site.numero');
    }
    public function updateTelefone(Request $request)
    {
        $user = Auth::user();
    
        if ($user) {
            $user->telefone = $request->input('telefone');
            $user->save();
        }
    
        return redirect()->route('createproduto')->with('success', 'Telefone atualizado com sucesso!');
    }
}
