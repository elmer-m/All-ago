@extends('layout.dash')

@section('title', 'Loja')

@section('content')
    <div class="w-1/12 h-full bg-gray-800 rounded-l flex items-center justify-center flex-col float-left">
        <a href="{{ route('criar') }}">
            <div class="{{ Request::routeIs('criar') ? 'bg-blue-600 active-route' : 'bg-gray-500 ' }} py-1 px-3 mb-6 rounded text-white text-2xl hover:bg-blue-600 duration-500"> 
                <i class="bi bi-cart-plus-fill"></i>
            </div>
        </a>
        <a href="{{ route('listar') }}">
            <div class="{{ Request::routeIs('listar') ? 'bg-blue-600 active-route' : 'bg-gray-500 ' }} py-1 px-3 mb-6 rounded text-white text-2xl hover:bg-blue-600 duration-500"> 
                <i class="bi bi-list-nested"></i>
            </div>
        </a>
        <a href="{{ route ('vizu') }}">
            <div class="{{ Request::routeIs('vizu') ? 'bg-blue-600 active-route' : 'bg-gray-500 ' }} py-1 px-3 mb-6 rounded text-white text-2xl hover:bg-blue-600 duration-500"> 
                <i class="bi bi-window-fullscreen"></i>
            </div>
        </a>
    </div>
    <div class=" w-11/12  float-right overflow-y-auto h-full">
        @yield('contentt')
    </div>
@endsection
