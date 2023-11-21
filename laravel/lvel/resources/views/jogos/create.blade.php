@extends('layouts.app')

@section('title', 'Criação')
@section('content')
    <!-- Tudo aqui dentro vai ser renderizado no template -->
    <div class="container mt-5">
        <h1>Crie um novo jogo</h1>
        <hr>
        <form action="{{route('jogos-store')}} " method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" placeholder="Digite o um nome...">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" name="categoria" placeholder="Digite a categoria...">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Ano de lançamento</label>
                    <input type="number" name="ano_criacao" placeholder="Digite ano de lançamento...">
                </div>
                <br>
                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="text" name="valor" placeholder="Digite o valor...">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>

            </div>
        </form>
    </div>
@endsection
