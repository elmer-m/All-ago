@extends('layout.dash')
@section('title', 'Home')
@section('content')
    <div class="text-4xl font-bold tracking-wide text-white flex flex-col items-center justify-center">
        <br> <!-- Linha adicionada para separar as mensagens -->
        @if (empty(Auth::user()->name))
        <div class="flex items-center justify-center">
            <h1 class="mt-28 mx-auto mb-8">Bem-vindo a Dashboard</h1>
        </div>
        <div class="w-11/12 h-5/6 mx-auto py-28">
            <div class="text-white mx-auto flex items-center justify-center text-2xl">
                <div class="bg-blue-600 rounded-md px-6 py-2 mr-12 hover:bg-pink-500 duration-500">
                    <a href="{{ route('login')}}">
                        Login
                    </a>
                </div>
                <div class="bg-blue-600 rounded-md px-6 py-2 hover:bg-pink-500 duration-500">
                    <a href="{{ route('register')}}">
                        Registo
                    </a>
                </div>
            </div>
        </div>
        @else
        <div class="relative">
            <h1 class="mt-64 text-5xl relative">Bem-vindo, {{ Auth::user()->name }}</h1>
        </div>
        @endif
    </div>
@endsection
