@extends('layout_site.navbarsite')
@section('title', 'OLX Almada')
@section('conteudo')
<div class="flex justify-center items-center">
    <form action="{{ route('pesquisar') }}" method="GET" class="w-full pl-4">
        <div class="my-7 mx-24 flex items-center justify-center bg-white rounded">
            <input type="text" name="termoPesquisa" class="form-control focus:outline-none w-10/12 h-12 p-4 py-10" placeholder="Pesquisar anúncios">
            <button type="submit" class="flex items-center font-bold text-teal-900 hover:text-white text-sm border-l rounded-r hover:bg-teal-950 px-10 duration-300 h-20">
                <span class="inline">Pesquisar</span><span class="inline ml-2 text-xl"><i class="bi bi-search"></i></span> 
            </button>
        </div>
    </form>
</div>

<div class="bg-white py-10">
    <div class="flex items-center justify-center my-5">
        <div class="text-emerald-950 font-bold text-3xl mb-4">
            Categorias
        </div>
    </div>
    <div class="px-36">
        <div class="grid grid-cols-9">    
          <!-- categoria -->
          @foreach ( $categorias as $categoria )
          <a href="{{ route('ver_categoria', ['id' => $categoria->id]) }}" class="rounded-full h-20 w-20 col-span-1 inline mb-16">
            <img src="{{ url('/storage/'.$categoria->foto) }}" class="object-cover rounded-full h-4/5 w-4/5 " alt="">
                <div class="mt-3 text-xs text-emerald-950 font-bold text-center">
                    {{ $categoria->nome_categoria }}
                </div>
          </a>
          @endforeach    
            @if ( auth()->user()->type === 'administrador')
            <a href="#" class="rounded-full h-16 w-16 col-span-1 inline mb-16" onclick="openModalPC1()">    
                <div class="">
                        <img src="https://static.vecteezy.com/system/resources/previews/009/344/641/non_2x/plus-sign-transparent-free-png.png" class="object-cover w-full h-full rounded-full" alt="">
                        <div class="mt-3 text-xs text-emerald-950 font-bold text-center">
                            Adcionar Categoria
                        </div>
                    </div>    
            </a>
            @endif        
        </div>
</div>


</div>
<div class="py-10 px-10">
    <div class="flex items-center justify-center my-5">
        <div class="text-emerald-950 font-bold text-3xl mb-4">
            Destaques na OLX
        </div>
    </div>
    <div class="grid grid-cols-4">
    @foreach ($anuncios as $anuncio)
    <div class="w-11/12 rounded-lg bg-white mt-3">
        <a href="{{ route('ver_anuncio', ['id' => $anuncio->id]) }}">
        <div class="h-48 flex items-center rounded-lg justify-center">
                <img src="{{ url('/storage/'.$anuncio->foto) }}" class="object-cover rounded-t-lg h-full" alt="">
            </div>
        </a>
            <div class="h-28">
                <div class="px-3">
                <a href="{{ route('ver_anuncio', ['id' => $anuncio->id]) }}">
                    @if (auth()->user()->type === 'administrador')
                        <div class="text-sm mt-2 text-emerald-950">
                            <div class="float-right">
                                <div class="flex">
                                    <a href="{{ route('edit', ['id' => $anuncio->id]) }}" class="hover:bg-yellow-400 py-1 duration-300 bg-teal-950 text-lg rounded text-white inline px-2">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('destroy_Anuncio', ['id' => $anuncio->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="hover:bg-red-600 py-1 duration-300 bg-teal-950 text-lg rounded text-white inline ml-2 px-2 pr-2 pr-1">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif

                <div class="text-emerald-900 mb-6">
                    <span class="hover:bg-teal-950 hover:text-white"><a href="">{{ $anuncio->titulo ?? '' }}</a></span>
                </div>
                <div class="text-xs mt-2 text-gray-500">
                    {{ $anuncio->localizacao ?? '' }}
                </div>
                <div class="text-sm mt-1 font-bold text-emerald-950">
                  @if ($anuncio->valor == '0')
                    Grátis
                  @else
                    {{ $anuncio->valor ?? '' }} &euro;
                  @endif
                    <span class="float-right text-lg text-gray-400"><i class="bi bi-heart"></i></span>
                </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>

<div class="w-full bg-blue-400">
    <div class>

    </div>
</div>
<!-- Modal da navbar do PC -->
<div id="modalPC1" class="fixed inset-0 flex items-center justify-center z-50 hidden">
  <div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex"></div>
  <div class="bg-white w-1/2 p-6 rounded-lg shadow-lg relative">
    <button onclick="closeModal1()" class="float-right text-xl">
      <i class="bi bi-x"></i>
    </button>
    <form action="{{ route('create_categoria') }}" method="POST"  enctype="multipart/form-data">
    @csrf
    <div class="overflow-y-auto max-h-96">
      <div class="flex items-center justify-center mt-3">
        <h2 class="text-xl font-bold mb-4 text-emerald-950">Adicionar Categoria</h2>
      </div>
      <div class="flex items-center justify-center text-center mt-3">
        <p class="text-xs">Certifique-se bem do que vais colocar na categoria, pois será público a todos os utilizadores da OLX!</p>
      </div>
      <div>
        <div class="py-5 text-sm text-gray-500">
          Foto pra categoria
        </div>
        <div>
          <div>
            <input type="file" name="foto" class="bg-gray-200 rounded py-2 px-4 focus:outline-none" required >
          </div>
        </div>
      </div>
      <div>
        <div class="py-5 text-sm text-gray-500">
          Nome da categoria
        </div>
        <div>
          <div>
            <input type="text" placeholder="Ex: Cães, Gatos, Carros..." class="bg-gray-200 rounded py-2 px-4 focus:outline-none" name="nome_categoria" required>
          </div>
        </div>
      </div>
      <div class="mt-10 flex items-center justify-center">
        <button type="submit" class="bg-emerald-950 text-white rounded py-2 px-4 font-bold">
          Criar
        </button>
      </div>
    </div>
</form>

  </div>
</div>

<!-- Adicione esse código JavaScript -->
<script>
  function openModalPC1() {
    document.getElementById('modalPC1').classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
  }

  function closeModal1() {
    document.getElementById('modalPC1').classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
  }
</script>
@endsection