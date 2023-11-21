@extends('layouts.app')

@section('title', 'Edição')
@section('content')
    <!-- Tudo aqui dentro vai ser renderizado no template -->
    <div class="container mt-5">
        <h1>Editar jogo</h1>
        <hr>
        <form action="{{route('jogos-update', ['id'=>$jogos->id])}} " method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" value="{{$jogos->nome}}" placeholder="Digite o um nome...">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" name="categoria" value="{{$jogos->categoria}}" placeholder="Digite a categoria...">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Ano de lançamento</label>
                    <input type="number" name="ano_criacao" value="{{$jogos->ano_criacao}}" placeholder="Digite ano de lançamento...">
                </div>
                <br>
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="text" name="valor" value="{{$jogos->valor}}" placeholder="Digite o valor...">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
                </div>

            </div>
        </form>
    </div>
@endsection
