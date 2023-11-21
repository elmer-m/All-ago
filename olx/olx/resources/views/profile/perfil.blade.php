@extends('layout_site.navbarsite')
@section('title', 'Perfil')
@section('conteudo')
<div class="hidden lg:block">
    <div class="px-10 pt-10">
        <div class="md:block flex justify-between bg-white px-3">
            <div class="bg-white py-4 px-3 rounded">
                <div class="flex items-center">
                    <div class="rounded-full h-20 w-20 bg-gray-500 block mr-4 p-2">
                        <img src="https://cdn-icons-png.flaticon.com/512/666/666201.png" class="object-cover" alt="">
                    </div>
                    <div class="block text-4xl font-bold">
                        
                            <span class="capitalize">{{$user->name }}</span> <br>
                        
                    </div>
                </div>
            </div>
            <div class=" px-3 py-2 w-2/12 flex items-center">
                <a href="">
                    <div class="border-b-2 border-emerald-950 text-emerald-950 text-sm font-bold pb-1 mr-5 text-xs">
                        Partilhar
                    </div>
                </a>
                <a href="">
                    <div class="border-2 border-emerald-950 text-emerald-950 text-sm font-bold pb-1 px-3 py-2 flex items-center rounded hover:shadow-inner transform hover:-translate-y-1 hover:scale-105 transition duration-300">
                        <i class="bi bi-heart mr-2"></i>
                        <span class="text-xs">Seguir</span>
                    </div>
                </a>    
            </div>
        </div>
    </div>
    <div class="px-10 py-4">
        <div class="">
            <div class="flex justify-between">
                <div class="rounded w-3/12">
                    <div class="text-sm text-gray-500 pt-2">
                        Pesquisar nesta página
                    </div>
                    <div class="mt-1">
                        <div class="relative">
                            <input type="text" class="px-2 py-2 rounded w-10/12" placeholder="Pesquisar...">
                            <span class="absolute inset-y-0 right-0 pr-2 flex items-center">
                                <i class="bi bi-search text-gray-400"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mt-7">
                        <div class="text-2xl text-emerald-950 font-bold">
                            Filtrar anúncios    
                        </div>
                        <div class="text-sm text-gray-500 pt-2">
                            Encontramos 3 resultados
                        </div>
                        <div class="text-sm text-gray-500 mt-10">
                            Categorias
                        </div>
                        <div class="text-sm text-gray-500 mt-2 ">
                            <span class="text-xl text-green-300"><i class="bi bi-check"></i></span>
                            <span class="font-bold text-gray-800 pl-3">Todos os anúncios</span>
                            <span class="float-right  px-2 bg-black py-1 rounded-full bg-yellow-500 text-xs mt-1 mr-5">1</span>
                        </div>
                        <div class="text-sm text-gray-500 mt-2 ">
                            <span class="text-xl text-green-300"><i class="bi bi-check"></i></span>
                            <span class="font-bold text-gray-800 pl-3">Sla</span>
                            <span class="float-right  px-2 bg-black py-1 rounded-full bg-yellow-500 text-xs mt-1 mr-5">1</span>
                        </div>
                    </div>
                </div>
                <div class="px-5 w-9/12">
                    <div class="h-1/5">
                    <div class="text-sm text-gray-500 pt-2 w-3/12">
                        Pesquisar nesta página
                    </div>
                    <div class="mt-1 text-sm text-gray-400">
                        <select name="filtro" class="px-5 py-2 rounded hover:outline-none">
                            <option value="recente" class="">Mais recente</option>
                            <option value="barato">Mais barato</option>
                            <option value="caro">Mais caro</option>
                            <option value="anuncio">Anuncios</option>
                            <option value="recomendado">Recomendados</option>
                        </select>
                        <button id="listButton" class="ml-5 focus:outline-none text-black" onclick="showListContent()">
        <i class="bi bi-list-task text-xl"></i>
    </button>
    <button id="gridButton" class="ml-5 focus:outline-none text-gray-400" onclick="showGridContent()">
        <i class="bi bi-grid text-xl"></i>
    </button>
    </div>

    <div class="mt-5">
    <div id="listContent" class="block mt-7">
    <!-- Conteúdo da lista -->
    @foreach ($anuncios as $anuncio)
    <a href="{{ route ('ver_anuncio', ['id' => $anuncio->id]) }} ">
        <div class="flex bg-white rounded mt-4">
            <div class="w-2/12 rounded-l-lg">
                <div class="w-full h-28 rounded-l-lg">
                    @if (isset($anuncio->foto))
                        <img src="{{ url('/storage/'.$anuncio->foto) }}" class="object-cover h-full w-full rounded-l-lg" alt="">
                    @endif
                </div>
            </div>
            <div class="ml-5 h-full w-full">
                <div class="text-sm mt-2 text-emerald-950">
                    {{ $anuncio->titulo ?? '' }}
                    <span class="float-right pr-5"><i class="bi bi-heart"></i></span>
                </div>
                <div class="text-sm mt-1 font-bold text-emerald-950">
                    {{ $anuncio->valor ?? '' }} &euro;
                </div>
                <div class="text-xs mt-2 text-gray-500">
                    {{ $anuncio->localizacao ?? '' }}
                </div>
            </div>
        </div>
    </a>
    @endforeach
    </div>

    </div>
    <div id="gridContent" class="hidden">
        <!-- Conteúdo da grade -->
        <div class="grid grid-cols-3">
    @foreach ($anuncios as $anuncio)
    <div class="w-11/12 rounded-lg bg-white mt-3">
        <div class="h-48 flex items-center rounded-lg justify-center">
            <img src="{{ url('/storage/'.$anuncio->foto) }}" class="object-cover rounded-lg h-full" alt="">
            </div>
            <div class="h-28">
                <div class="px-3">
                    <div class="text-sm mt-2 text-emerald-950">
                        {{ $anuncio->titulo ?? '' }}
                        <span class="float-right pr-5"><i class="bi bi-heart"></i></span>
                    </div>
                    <div class="text-sm mt-1 font-bold text-emerald-950">
                    {{ $anuncio->valor ?? '' }} &euro;
                </div>
                <div class="text-xs mt-2 text-gray-500">
                    {{ $anuncio->localizacao ?? '' }}
                </div>
                </div>    
                </div>
            </div>
        @endforeach
        </div>
    </div>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="px-2 pt-3 lg:hidden mb-20">
    <div class="bg-white pb-5">
        <a href="">
            <div class="bg-white text-xl text-emerald-950 mb-5">
                <i class="bi bi-caret-left"></i>
                <div class="float-right text-xs font-bold text-emerald-950 pr-5 pt-5 border-emerald-950 flex- items-center justify-center">
                    PARTILHAR
                </div>
            </div>
        </a>
        <div class="bg-white">
            <div class="flex">
                <div class="rounded-full h-20 w-20 bg-gray-500 block mr-4 p-2">
                    <img src="https://cdn-icons-png.flaticon.com/512/666/666201.png" class="object-cover" alt="">
                </div>
                <div class="block text-4xl font-bold">
                    <span class="capitalize">{{$user->name }}</span> <br>
                    <div class="text-sm font-normal text-gray-500">
                        {{ $anuncio->localizacao }}
                    </div>  
                    <div class="text-xs font-normal text-gray-500">
                        No OLX desde <span class="font-bold text-black">{{ $anuncio->created_at->format('Y/m/d') }}</span>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 mx-5 mt-9 rounded px-3 py-3 mb-5">
                <div class="flex">
                    <div class="h-7 w-7 rounded-full flex-items-center justify-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/40/40324.png" class="object-cover" alt="">
                    </div>
                    <div class="text-sm ml-3 text-emerald-950">
                        Este anunciante ainda não recebeu nenhuma classificação
                    </div>
                </div>
                <div class="text-sm border-b-2 inline pb-1 border-emerald-950 hover:border-none duration-300">
                    Como funcionam as classificações?
                </div>
            </div>
            <div class="ml-5 border-2 border-emerald-950 px-4 py-2 rounded inline mt-5 font-semibold">
                <span class=""><i class="bi bi-heart"></i></span> Seguir
            </div>
        </div>
    </div>
    <div class="text-xs py-3 text-gray-800">
        ECONTRAMOS N ANÚNCIOS
    </div>
    @foreach ($anuncios as $anuncio)
    <a href="{{ route('ver_anuncio', ['id' => $anuncio->id]) }}">
    <div class="flex bg-white rounded mt-4">
        <div class="w-2/12 rounded-l-lg">
            <div class="w-full h-36 w-36 flex items-center justify-center rounded-l-lg">
                @if (isset($anuncio->foto))
                <img src="{{ url('/storage/'.$anuncio->foto) }}" class="object-cover h-full w-full rounded-l-lg" alt="">
                @endif
            </div>
        </div>
        <div class="ml-20">
            <div class="ml-5 w-full relative">
                <div class="text-sm mt-2 text-emerald-950 w-full border-2">
                    <div class="w-8/12 overflow-hidden max-h-14">
                        <div class="line-clamp-2">{{ $anuncio->titulo ?? '' }}</div>
                    </div>
                </div>
                <div class="text-sm mt-1 font-bold text-emerald-950">
                    {{ $anuncio->valor ?? '' }} &euro;
                </div>
                <div class="text-xs mt-2 text-gray-500">
                    {{ $anuncio->localizacao ?? '' }}
                </div>
            </div>
        </div>
    </div>
</a>
@endforeach

</div>

<script>
  function showListContent() {
    document.getElementById('listContent').style.display = 'block';
    document.getElementById('gridContent').style.display = 'none';
    document.getElementById('listButton').classList.add('text-black');
    document.getElementById('listButton').classList.remove('text-gray-400');
    document.getElementById('gridButton').classList.add('text-gray-400');
    document.getElementById('gridButton').classList.remove('text-black');
  }
  
  function showGridContent() {
    document.getElementById('listContent').style.display = 'none';
    document.getElementById('gridContent').style.display = 'block';
    document.getElementById('listButton').classList.add('text-gray-400');
    document.getElementById('listButton').classList.remove('text-black');
    document.getElementById('gridButton').classList.add('text-black');
    document.getElementById('gridButton').classList.remove('text-gray-400');
  }
</script>
@endsection
