@extends('layout_site.navbarsite')
@section('title', 'Previsualizar')
@section('conteudo')


<div class="px-4 py-6 h-screen hidden lg:block">
    <div class="h-full py-4 px-5 flex">
        <div class="w-8/12 h-full block mr-5">
            <div class="w-full bg-white rounded h-full rounded px-5 py-4 flex items-center justify-center">
            <div class="h-96 w-11/12 flex items-center justify-center">
                    <img src="{{ url('/storage/'.$anuncio->foto) }}" class="object-cover h-full" alt="">
            </div>
            </div>
            <div class=" mt-5 w-full bg-white rounded px-7 py-6">
                <div class="text-xs text-gray-500">
                    Publicado em {{ $anuncio->data_criacao }}
                </div>
                <div class="mt-3 text-3xl text-emerald-950 font-semibold">
                    {{ $anuncio->titulo}}
                </div>
                <div class="mt-3 text-4xl text-emerald-950 font-bold">
                    {{ number_format($anuncio->valor, 0, '.', ',') }} &euro;
                </div>
                <div class="text-sm mt-3 text-emerald-950">
                    <span class="text-base text-gray-500"><i class="bi bi-award-fill"></i></span> <span class="mr-5">Destacar</span>   <span class="text-base text-gray-500 text-bold"><i class="bi bi-arrow-clockwise"></i></span> <span>Para o topo</span>
                </div>
                <div class="w-full mt-5">
                    <div class="border inline-block border-emerald-950 text-emerald-950 px-3 py-1 rounded text-sm mr-2 mb-4">
                        Produto
                    </div>
                    <div class="border inline-block border-emerald-950 text-emerald-950 px-3 py-1 rounded text-sm mr-2 mb-4">
                        Bom
                    </div>
                    <div class="border inline-block border-emerald-950 text-emerald-950 px-3 py-1 rounded text-sm mr-2 mb-4">
                        Destacado
                    </div>
                    <div class="border inline-block border-emerald-950 text-emerald-950 px-3 py-1 rounded text-sm mr-2 mb-4">
                        Produto
                    </div>
                    <div class="border inline-block border-emerald-950 text-emerald-950 px-3 py-1 rounded text-sm mr-2 mb-4">
                        Bom
                    </div>
                    <div class="border inline-block border-emerald-950 text-emerald-950 px-3 py-1 rounded text-sm mr-2 mb-4">
                        Destacado
                    </div>
                    <div class="border inline-block border-emerald-950 text-emerald-950 px-3 py-1 rounded text-sm mr-2 mb-4">
                        Produto
                    </div>
                    <div class="border inline-block border-emerald-950 text-emerald-950 px-3 py-1 rounded text-sm mr-2 mb-4">
                        Bom
                    </div>
                    <div class="border inline-block border-emerald-950 text-emerald-950 px-3 py-1 rounded text-sm mr-2 mb-4">
                        Destacado
                    </div>
                    <div class="border inline-block border-emerald-950 text-emerald-950 px-3 py-1 rounded text-sm mr-2 mb-4">
                        Produto
                    </div>
                    <div class="border inline-block border-emerald-950 text-emerald-950 px-3 py-1 rounded text-sm mr-2 mb-4">
                        Bom
                    </div>
                    <div class="border inline-block border-emerald-950 text-emerald-950 px-3 py-1 rounded text-sm mr-2 mb-4">
                        Destacado
                    </div>
                    <div class="border inline-block border-emerald-950 text-emerald-950 px-3 py-1 rounded text-sm mr-2 mb-4">
                        Produto
                    </div>
                    <div class="border inline-block border-emerald-950 text-emerald-950 px-3 py-1 rounded text-sm mr-2 mb-4">
                        Bom
                    </div>
                    <div class="border inline-block border-emerald-950 text-emerald-950 px-3 py-1 rounded text-sm mr-2 mb-4">
                        Destacado
                    </div>
                    <div class="border inline-block border-emerald-950 text-emerald-950 px-3 py-1 rounded text-sm mr-2 mb-4">
                        Produto
                    </div>
                    <div class="border inline-block border-emerald-950 text-emerald-950 px-3 py-1 rounded text-sm mr-2 mb-4">
                        Bom
                    </div>
                    <div class="border inline-block border-emerald-950 text-emerald-950 px-3 py-1 rounded text-sm mr-2 mb-4">
                        Destacado
                    </div>
                </div>
                <div class="mt-3 text-2xl text-emerald-950 font-bold">
                    DESCRIÇÃO
                    <div class="text-black mt-5 text-sm font-normal border-b w-full border-gray-400">
                        {!! nl2br($anuncio->descricao) !!}
                    </div>
                    <div class="text-xs font-normal mt-3">
                        <div class="grid grid-cols-3">
                            <div class="text-left">
                                ID: {{ $anuncio->id}}
                            </div>
                                <div class="text-center">
                                    Cliques: Não feito
                                </div>
                                <div class="text-right text-red-500">
                                   <a href=""> <i class="bi bi-flag font-semibold"></i> <span class="border-b-2 border-red-500 pb-1 font-semibold hover:border-none duration-300">Reportar</span> </a>
                                </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class=" mt-5 w-full bg-white rounded px-7 py-6">   
                <div class="float-right bg-teal-950 px-4 py-3 border-4 border-teal-950 hover:bg-white hover:text-emerald-950 text-white font-semibold rounded text-sm text-center mt-7">
                    Ver Contatos
                </div>
                <div class="text-emerald-950 font-semibold text-sm mb-5">
                    CONTATAR ANUNCIANTE
                </div>
                <div class="flex items-center">
                <a href="{{ route('perfil', ['email' => $userEmail]) }}">
                        <div class="rounded-full h-11 w-11 bg-gray-500 mr-4 p-2">
                            <img src="https://cdn-icons-png.flaticon.com/512/666/666201.png" class="object-cover h-full w-full" alt="">
                        </div>
                    </a>
                <div class="block text-lg">
                    <span class="capitalize">{{ auth()->user()->name }}</span> <br>
                <div class="text-xs text-gray-500">
                    No OLX desde <span class="font-bold">{{ auth()->user()->created_at->format('Y-m-d') }}</span>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="block w-4/12">
            <div class="bg-white py-4 px-3 w-full rounded">
                <div class="text-emerald-950 font-bold text-sm mb-5">
                    UTILIZADOR
                </div>
                <a href="{{ route('perfil', ['email' => $userEmail]) }}">
                <div class="flex">
                    <div class="rounded-full h-11 w-11 bg-gray-500 block mr-4 p-2">
                        <img src="https://cdn-icons-png.flaticon.com/512/666/666201.png" class="object-cover" alt="">
                    </div>
                    <div class="block text-lg">
                        <span class="capitalize">{{ auth()->user()->name }}</span> <br>
                        <div class="text-xs text-gray-500">
                            No OLX desde <span class="font-bold">{{ auth()->user()->created_at->format('Y-m-d') }}</span>
                        </div>
                    </div>
                </div>
                </a>
                <div class="bg-blue-50 mx-5 mt-9 rounded px-3 py-3">
                    <div class="flex">
                        <div class="h-7 w-7 rounded-full flex-items-center justify-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/40/40324.png" class="object-cover" alt="">
                        </div>
                        <div class="text-sm font-bold ml-3 text-emerald-950">
                            Nenhuma avaliação
                        </div>
                    </div>
                    <div class="text-sm">
                        Os compradores ainda não viram este anúncio.
                    </div>
                </div>
                <a href="{{ route('perfil', ['email' => $userEmail]) }}">
                    <div  class="bg-teal-950 px-4 py-3 border-4 border-teal-950 hover:bg-white hover:text-emerald-950 text-white font-semibold rounded text-sm w-11/12 mx-auto text-center mt-5">
                        Ver todos os anúncios deste anunciante
                    </div>
                </a>
            </div>
            <div class="bg-white py-4 px-3 w-full rounded mt-5">
                <div class="text-emerald-950 font-bold text-sm mb-5">
                    LOCALIZAÇÃO
                </div>
                <div class="flex">
                    <div class="block text-emerald-950 font-bold text-lg">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="block">
                        <span class="capitalize font-bold">{{ $anuncio->localizacao }}</span> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div class=" lg:hidden mb-20">
    <div class="h-2/5 bg-black">
        <img src="{{ url('/storage/'.$anuncio->foto) }}" class="object-cover" alt="">
    </div>
    <div class="mt-5 w-full bg-white rounded px-3 py-6 border-xl">
        <div class="text-xs text-gray-500">
            Publicado em {{ $anuncio->data_criacao }}
        </div>
        <div class="mt-3 text-xl text-emerald-950 font-normal">
            {{ $anuncio->titulo }}
        </div>
        <div class="mt-3 text-3xl text-emerald-950 font-bold">
            {{ number_format($anuncio->valor, 0, '.', ',') }} &euro;
        </div>
        <div class="w-full mt-5 border-b-2 border-gray-300">
            <div class="border inline-block border-gray-300 text-emerald-950 px-4 py-2 rounded text-sm mr-1 mb-2">
                Produto
            </div>
            <div class="border inline-block border-gray-300 text-emerald-950 px-4 py-2 rounded text-sm mr-1 mb-2">
                Bom
            </div>
            <div class="border inline-block border-gray-300 text-emerald-950 px-4 py-2 rounded text-sm mr-1 mb-2">
                Destacado
            </div>
            <div class="border inline-block border-gray-300 text-emerald-950 px-4 py-2 rounded text-sm mr-1 mb-2">
                Lorem
            </div>
            <div class="border inline-block border-gray-300 text-emerald-950 px-4 py-2 rounded text-sm mr-1 mb-2">
                Peste
            </div>
            <div class="border inline-block border-gray-300 text-emerald-950 px-4 py-2 rounded text-sm mr-1 mb-2">
                Bola
            </div>
            <div class="border inline-block border-gray-300 text-emerald-950 px-4 py-2 rounded text-sm mr-1 mb-2">
                Teclado
            </div>
            <div class="border inline-block border-gray-300 text-emerald-950 px-4 py-2 rounded text-sm mr-1 mb-2">
                Desenho
            </div>
            <div class="border inline-block border-gray-300 text-emerald-950 px-4 py-2 rounded text-sm mr-1 mb-2">
                Anime
            </div>
            <div class="border inline-block border-gray-300 text-emerald-950 px-4 py-2 rounded text-sm mr-1 mb-2">
                Naruto
            </div>
            <div class="border inline-block border-gray-300 text-emerald-950 px-4 py-2 rounded text-sm mr-1 mb-2">
                Goku
            </div>
            <div class="border inline-block border-gray-300 text-emerald-950 px-4 py-2 rounded text-sm mr-1 mb-2">
                Isso
            </div>
        </div>
        <div class="mt-3 text-emerald-950 font-bold text-sm">
            DESCRIÇÃO
            <div class="text-black mt-3 text-sm font-normal border-b w-full border-gray-400">
                {{ $anuncio->descricao }}
            </div>
            <div class="text-xs font-normal mt-3">
                <div class="grid grid-cols-3">
                    <div class="text-left text-red-500">
                        <a href="">
                            <i class="bi bi-flag font-semibold"></i>
                            <span class="border-b-2 border-red-500 pb-1 font-semibold hover:border-none duration-300">Reportar</span>
                        </a>
                    </div>
                </div>
                <div class="text-xs text-gray-500 border-b mt-5 px-3 font-bold">
                    PUBLICIDADE
                </div>
                <div class="bg-white py-4 px-3 w-full rounded border-b-2">
                <div class="text-emerald-950 font-bold text-sm mb-5">
                    UTILIZADOR
                </div>
                <div class="flex">
                    <div class="rounded-full h-11 w-11 bg-gray-500 block mr-4 p-2">
                        <img src="https://cdn-icons-png.flaticon.com/512/666/666201.png" class="object-cover" alt="">
                    </div>
                    <div class="block text-lg">
                        <span class="capitalize">{{ auth()->user()->name }}</span> <br>
                        <div class="text-xs text-gray-500">
                            No OLX desde <span class="font-bold">{{ auth()->user()->created_at->format('Y-m-d') }}</span>
                        </div>
                    </div>
                </div>
                <a href="{{ route('perfil', ['email' => $userEmail]) }}">
                    <div  class="px-4 py-3 text-emerald-950  text-sm w-11/12 mx-auto text-center mt-5">
                        Ver todos os anúncios deste anunciante <i class="bi bi-caret-right"></i>
                    </div>
                </a>
            </div>
            <div class="bg-white py-4 px-3 w-full rounded mt-5">
                <div class="text-emerald-950 font-bold text-sm mb-5">
                    LOCALIZAÇÃO
                </div>
                <div class="flex">
                    <div class="block text-emerald-950 font-bold text-lg">
                        <i class="bi bi-geo-alt"></i> <span class="capitalize font-bold">{{ $anuncio->localizacao }}</span>
                    </div>

                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
