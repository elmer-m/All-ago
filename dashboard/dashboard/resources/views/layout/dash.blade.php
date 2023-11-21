<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Dash</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

    <style>

        
        .active-route:hover {
            background-color: inherit !important;
            border-color: inherit !important;
        }
    </style>
</head>

<body class="h-screen">
@section('title', 'Home')
@if (!auth()->check())
<div class="flex">
    <div class="bg-gray-800 w-full h-screen  px-10 drop-shadow-xl">
        <div class="flex items-center justify-center mt-28">
            <div class="text-5xl text-white inline-block mr-2 font-bold">
                <i class="bi bi-clipboard-plus"></i>
            </div>
            <div class="text-4xl text-white font-bold inline-block">
                Dashboard
            </div>
        </div>
        <div class="flex items-center justify-center mt-20 ">    
            <div class="bg-gray-700 rounded-xl  py-5 px-5 font-semibold text-white text-2xl">
              <p class="text-center">  Pra ter acesso a Dashboard, <br> precisa ter uma conta. </p>
                    <div class="mt-20 mb-10">
                        <a href="{{ route('login')}}">
                            <div class="bg-blue-600 rounded-md px-10 py-3 mr-12 hover:bg-pink-500 duration-500 inline text-xl">
                                Login
                            </div>
                        </a>
                        <a href="{{ route('register')}}">
                            <div class="bg-blue-600 rounded-md px-10 py-3 hover:bg-pink-500 duration-500 inline text-xl">
                                Registo
                            </div>
                        </a>
                </div>
            </div>
        </div>
</div>
@else
<div class="flex">
    <div class="bg-gray-800 w-1/4 h-screen py-10 px-10">
        <div class="text-4xl text-white inline-block">
            <i class="bi bi-clipboard-plus"></i>
        </div>
        <div class="inline-block text-3xl text-white mb-20">
            Dashboard
        </div>
        
        <a href="{{ route('dashboard-painel') }}" class="{{ Request::routeIs('dashboard-painel') ? 'bg-gray-900 border-y-2 border-white active-route' : 'bg-blue-600  border-y-2 border-blue-600' }} hover:border-y-2 hover:border-pink-500 rounded-xl grid justify-items-center mb-5 py-2 text-white font-bold tracking-wider hover:bg-pink-500 duration-500">
            <i class="bi bi-pie-chart-fill"></i>
            Painel
        </a>

     
        <a href="{{ route('vizu') }}" class="{{ Request::routeIs('vizu') && ('loja/viu') ? 'bg-gray-900 border-y-2 border-white active-route' : 'bg-blue-600  border-y-2 border-blue-600' }} hover:border-y-2 hover:border-pink-500 rounded-xl grid justify-items-center mb-5 py-2 text-white font-bold tracking-wider hover:bg-pink-500 duration-500">
            <i class="bi bi-bag-fill"></i>
            Loja
        </a>
        <a href="{{ route('dashboard-configuracoes') }}" class="{{ Request::routeIs('dashboard-configuracoes') ? 'bg-gray-900 border-y-2 border-white active-route' : 'bg-blue-600  border-y-2 border-blue-600' }} hover:border-y-2 hover:border-pink-500 rounded-xl grid justify-items-center mb-5 py-2 text-white font-bold tracking-wider hover:bg-pink-500 duration-500">
            <i class="bi bi-gear-fill"></i>
            Configurações
        </a>
        <a href="{{ route('dashboard-outros') }}" class="{{ Request::routeIs('dashboard-outros') ? 'bg-gray-900 border-y-2 border-white active-route' : 'bg-blue-600  border-y-2 border-blue-600' }} hover:border-y-2 hover:border-pink-500 rounded-xl grid justify-items-center mb-5 py-2 text-white font-bold tracking-wider hover:bg-pink-500 duration-500">
            <i class="bi bi-three-dots"></i>
            Outros
        </a>
        <div class="text-white font-semibold text-xl inline-block">
    <a href="{{ route('home')}}">
            <i class="bi bi-person-fill text-white text-2xl"></i>
            {{ Auth::user()->name }} 
        </a>
    </div>
        <a href="{{ route('logotenomorota')}}" class="p-2 rounded-xl bg-red-400 hover:bg-red-600 duration-500 inline-block text-white font-bold">
                    Logotenomorota
                </a>
    </div>
    

    <div class="w-3/4 h-screen">
    <div class="flex items-center justify-center h-full bg-gray-700 py-4">
        <div class=" w-11/12 mx-auto h-full bg-gray-600 rounded">
                @yield('content')
        </div>
    </div>
    </div>
</div>
@endif
</body>
</html>
