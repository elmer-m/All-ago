@extends('layout_site.navbarsite')
@section('title', 'Resultado da Pesquisa')
@section('conteudo')
<div class="flex justify-center items-center">
    <form action="{{ route('pesquisar') }}" method="GET" class="w-full pl-4">
        <div class="my-7 mx-24 flex items-center justify-center bg-white rounded">
            <input type="text" name="termoPesquisa" class="form-control focus:outline-none w-10/12 h-12 p-4 py-10" value="{{ $termoPesquisa }}" placeholder="Pesquisar anúncios">
            <button type="submit" class="flex items-center font-bold text-teal-900 hover:text-white text-sm border-l rounded-r hover:bg-teal-950 px-10 duration-300 h-20">
                <span class="inline">Pesquisar</span><span class="inline ml-2 text-xl"><i class="bi bi-search"></i></span> 
            </button>
        </div>
    </form>
</div>

    <div class="w-full">
        <div class="px-12">
        <h1 class="text-3xl font-bold text-emerald-950 mt-7 mb-5 ml-5">Encontramos um total de {{ $totalAnuncios }} para "{{ $termoPesquisa }}":</h1>

        @if ($anuncios->isEmpty())
            <p class="text-emerald-950 mt-5 ml-5">Nenhum anúncio encontrado para "{{ $termoPesquisa }}".</p>
        @else
            <ul class="list-disc mt-3 ml-5">
            @foreach ($anuncios as $anuncio)
    <a href="{{ route ('ver_anuncio', ['id' => $anuncio->id]) }} ">
        <div class="flex bg-white rounded mt-4">
            <div class="w-2/12 rounded-l-lg">
                <div class="w-full h-28 rounded-l-lg py-2 px-2">
                    @if (isset($anuncio->foto))
                        <img src="{{ url('/storage/'.$anuncio->foto) }}" class="object-cover h-full w-full rounded-l-lg" alt="">
                    @endif
                </div>
            </div>
            <div class="ml-5 h-full w-full">
                <div class="text-sm mt-1 float-right pt-3 pr-3 font-bold text-emerald-950">
                    {{ $anuncio->valor ?? '' }} &euro;
                </div>
                <div class="text-sm mt-2 text-emerald-950">
                    {{ $anuncio->titulo ?? '' }}
                </div>
                <div class="text-xs mt-2 text-gray-500">
                    {{ $anuncio->localizacao ?? '' }}
                </div>
            </div>
        </div>
    </a>
    @endforeach
    </div>
            </ul>
        @endif
    </div>
@endsection
