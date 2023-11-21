@extends('layout_site.navbarsite')
@section('title', 'Resultado da Pesquisa')
@section('conteudo')
    <div class="w-full mt-20">
        <div class="px-12">
        <h1 class="text-3xl font-bold text-emerald-950 mt-7 mb-5 ml-5">Encontramos um total de {{ $totalAnuncios }} para "{{ $categoria->nome_categoria }}"</h1>

        @if ($anuncios->isEmpty())
            <p class="text-emerald-950 mt-5 ml-5">Nenhum anúncio encontrado para {{ $categoria->nome_categoria}}.</p>
        @else
            @foreach ($anuncios as $anuncio)
            <div class="px-20">
                <a href="{{ route ('ver_anuncio', ['id' => $anuncio->id]) }} ">
                    <div class="flex bg-white rounded mt-4">
                        <div class="w-2/12 rounded-l-lg">
                            <div class="w-28 h-28 rounded-l-lg py-2 px-2">
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
            </div>
    @endforeach
    </div>
        @endif
    </div>
@endsection
