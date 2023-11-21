<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


use App\Models\Anuncio;
use App\Models\Categoria;
use App\Models\User;


class ProdutoController extends Controller
{
    public function createproduto(){
        $telefone = auth()->user()->telefone;
        $categorias = Categoria::all();
        return view('produto.create', compact('telefone', 'categorias'));
    }
    public function store(Request $request)
{
    $requestData = $request->all();

    if ($request->hasFile('foto')) {
        $requestData['foto'] = $request->file('foto')
            ->store('uploads', 'public');
    }

    // Formate a descrição com quebras de linha corretas
    $requestData['descricao'] = nl2br($requestData['descricao']);

    $anuncio = Anuncio::create($requestData);

    return redirect()->route('ver', ['id' => $anuncio->id]);
}
    
    public function ver($id){
        $userEmail = Auth::user()->email;
        $anuncio = Anuncio::where('email', $userEmail)->orderByDesc('id')->first();
        if (!$anuncio) {
            // Tratar caso não exista anúncio para o usuário logado.
            // Por exemplo, redirecionar para outra página ou mostrar uma mensagem de erro.
        }
        $telefone = auth()->user()->telefone;
        $localizacao = $anuncio->localizacao;
        $categoria = Categoria::find($id);
        return view('verificar_anuncio', compact('anuncio', 'telefone', 'localizacao', 'userEmail', 'categoria'));
    }
    
    public function updateTelefone(Request $request, $id){
        $anuncio = Anuncio::find($id);
        $anuncio->estado = $request->estado;
        $anuncio->save();
        return view('layout_site.navbarsite');
    }
    public function edit($id)
    {
        $anuncio = Anuncio::find($id);
        $user = User::where('email', $anuncio->email)->first();
        $categorias = Categoria::all();
    
        return view('produto.edit', compact('anuncio', 'user', 'categorias'));
    }
    public function update_Anuncio(Request $request, $id)
{
    // Atualize os campos do anúncio com base nos dados do formulário
    $requestData = $request->all();

    if ($request->hasFile('foto')) {
        $requestData['foto'] = $request->file('foto')
            ->store('uploads', 'public');
    }
    $requestData = $request->except(['foto']);
    // Salve as alterações no banco de dados
    $anuncio = Anuncio::findOrFail($id);
    $anuncio->update($requestData);

    return redirect()->route('ver', ['id' => $anuncio->id]);
}

public function destroy_Anuncio($id)
{
    
    $anuncio = Anuncio::where("id",$id)->first();
    // Verifica se o anúncio existe
    if (!$anuncio) {
        return redirect()->route('ver', ['id' => $anuncio->id])->with('error', 'Anúncio não 
        encontrado.');
    }
    // Verifica se o anúncio pertence ao usuário logado
    if ($anuncio->user_id != Auth::user()->id) {
        //return redirect()->route('ver', ['id' => $anuncio->id])->with('error', 'Você não tem permissão para excluir este anúncio.');
    }

    Anuncio::where('id',$id)->delete();
    return back()->withInput()->with('success', 'O anúncio foi excluído.');
}


    
}
