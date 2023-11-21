<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

// ...


class DashboardController extends Controller
{
    public function index(){
        $usersfunc = User::whereIn('type', ['admin', 'normal'])->get();
        if ($usersfunc->contains('type', 'utilizador')) {
            return view('lojaa.index');
        } else {
            return view('dashboard.index');
        }
        
    }
    
    public function painel()
{
    $produtos = Produto::all();
    $numprodutos = count($produtos);
    $numprodutosativos = Produto::where('estado', 'ativo')->count();
    $numprodutosdesativos = Produto::where('estado', 'desativo')->count();
    $numprodutosesgotados = Produto::where('estado', 'esgotado')->count();




    $countadmin = User::where('type', 'Admin')->count();
    $countnormal = User::where('type', 'normal')->count();
    $countutilizador = User::where('type', 'utilizador')->count();

    return view('dashboard.painel', compact('numprodutos','numprodutosativos','numprodutosdesativos','numprodutosesgotados', 'countadmin', 'countnormal','countutilizador' ));
}
    public function painelhome(){
        return view('dashboard.painelhome');
    }
    public function listar_users(){
        $usersfunc = User::where('type', 'Utilizador')->get();
        return view('dashboard.listaruser', compact('usersfunc'));
    }
    public function loja(){
        return view('layout.loja');
    }
    public function configuracoes(){
        return view('dashboard.configuracoes');
    }
    public function outros(){
        return view('dashboard.outros');
    }
    public function register(){
        
        return view('register');
    }
    public function login(){
        return view('login');
    }
    
    public function logotenomorota()
    {
        Session::flush();
        
        Auth::logout();
        
        return view('dashboard.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'valor' => 'required|numeric',
            'descricao' => 'required',
            'estado' => 'required|in:ativo,desativo',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $produto = new Produto();
        $produto->nome = $request->input('nome');
        $produto->valor = $request->input('valor');
        $produto->descricao = $request->input('descricao');
        $produto->estado = $request->input('estado');
        
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $nomeFoto = $foto->getClientOriginalName();
            $caminhoFoto = $foto->storeAs('public/produtos', $nomeFoto);
        
            // Salve o caminho relativo em uma variável
            $caminhoRelativo = 'produtos/' . $nomeFoto;
        
            $produto->foto = $caminhoRelativo;
        }
        
    
        $produto->save();
        // Redirecionar ou executar outras ações após a criação do produto
        return redirect()->route('listar');
    }


public function criar(){
    return view('dashboard.criar');
}
public function vizu(){
    $produtos = Produto::all();
    return view('dashboard.vizu', compact('produtos'));
}
public function lojaa(){
    $produtos = Produto::all();
    return view('dashboard.lojaa', compact('produtos'));
}
public function edit($id){
    $produto = Produto::find($id);
    return view('dashboard.editar', compact('produto'));
}
public function editaru($id){
    $userfunc = User::find($id);

    return view('dashboard.editaru', compact('userfunc'));
}
public function updateu(Request $request, $id){
    $userfunc = User::find($id);
    $userfunc->name = $request->input('name');
    $userfunc->email = $request->input('email');
        $userfunc->type = $request->input('type');
        $userfunc->update();

        return redirect()->route('dashboard-painel');
    }
public function listar(Request $request)
{
    $produtos = Produto::all();
    return view('dashboard.listar', compact('produtos'));
}
public function listar_func(){
    $usersfunc = User::whereIn('type', ['admin', 'normal'])->get();
    return view('dashboard.listarfunc', compact('usersfunc'));

}
public function update(Request $request, $id){
    $produto = Produto::find($id);
    $produto->nome = $request->input('nome');
    $produto->valor = $request->input('valor');
    $produto->descricao = $request->input('descricao');
        $produto->estado = $request->input('estado');
        $produto->update();

        return redirect()->route('listar');
    }
    public function destroyProduto($id)
    {
        Produto::where('id',$id)->delete();
        return redirect()->route('listar');
        }
    public function destroyUser($id)
    {
        User::where('id',$id)->delete();
        return redirect()->route('dashboard-painel');
        }
        public function destroyUserl($id)
    {
        User::where('id',$id)->delete();
        return redirect()->route('listar-users');
        }

}