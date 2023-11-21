@extends('layout.dash')

@section('title', 'Painel')

@section('content')

<div class="w-1/12 h-full bg-gray-800 rounded-l flex items-center justify-center flex-col float-left">
    <a href="{{ route('listar-users') }}">
        <div class="{{ Request::routeIs('listar-users') ? 'bg-blue-600 active-route' : 'bg-gray-500' }} py-1 px-3 mb-6 rounded text-white text-2xl hover:bg-blue-600 duration-500">
            <i class="bi bi-person-lines-fill"></i>
        </div>
    </a>
    <a href="{{ route('listarfunc') }}">
        <div class="{{ Request::routeIs('listar') ? 'bg-blue-600 active-route' : 'bg-gray-500' }} py-1 px-3 mb-6 rounded text-white text-2xl hover:bg-blue-600 duration-500">
            <i class="bi bi-person-vcard-fill"></i>
        </div>
    </a>
    <a href="{{ route('listar') }}">
        <div class="{{ Request::routeIs('vizu_loja') ? 'bg-blue-600 active-route' : 'bg-gray-500' }} py-1 px-3 mb-6 rounded text-white text-2xl hover:bg-blue-600 duration-500">
            <i class="bi bi-bag-fill"></i>
        </div>
    </a>
</div>

<div class="w-11/12 float-right h-full">
    @yield('painel')
</div>

@endsection
