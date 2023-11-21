@extends('layout_site.navbarsite')
@section ('title', 'Criar Anuncio')
@section('conteudo')

    <div class="w-full mb-10 mt-28">
        <div class=" font-bold text-emerald-950 text-3xl mt-7 mb-5 ml-5">
            Publicar anúncio
        </div>
    <form action="{{ route ('create_anuncio') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="px-4">
            <div class="bg-white rounded px-8 py-8">
                <div class="font-semibold text-emerald-950 ">
                    Quanto mais detalhado, melhor!
                </div>
                <div>
                    <div class="lg:text-xs text-sm text-emerald-950 me-2 mt-5">
                        Primeiro, pensa num título apelativo*
                    </div>
                    <div>
                        <input type="text" maxlength="255" name="titulo" placeholder="Por exemplo, Iphone 11 com garantia" class="bg-gray-100 mt-2 rounded lg:w-8/12 w-9/12 lg:py-5 py-2 px-4 focus:outline-none focus:border-b-2 border-blue-600" >
                    </div>
                    @error('titulo')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <div class="lg:text-xs text-sm text-emerald-950 me-2 mt-5">
                       Categoria*
                    </div>
                    <div>
                        <input id="categoria" readonly onclick="openModalPC2()" type="text" name="categoria" placeholder="Carros, Telemóveis, Cães, etc..." class="bg-gray-100 mt-2 rounded lg:w-8/12 w-9/12 lg:py-5 py-2 px-4 focus:outline-none">
                        <input type="hidden" id="categoria_id" name="categoria_id" value="">
                    </div>
                </div>
            </div>
        </div>
        <div class="px-4 mt-2">
            <div class="bg-white rounded px-8 py-8">
                <div class="font-semibold text-emerald-950 ">
                    Imagens
                </div>    
                <div class="text-xs text-emerald-950 me-2 mt-5">
                    A primeira imagem é a foto principal do teu anúncio. Arrasta e larga para alterares a ordem.
                </div>
                <div>
                    <input type="file" name="foto" class="bg-gray-100 mt-2 rounded lg:w-8/12 w-9/12 lg:py-5 py-2 px-4  focus:outline-none focus:border-b-2 border-blue-600" >
                </div>
            </div>
        </div>
        <div class="px-4 mt-2">
            <div class="bg-white rounded px-8 py-8">    
                <div class="text-xs text-emerald-950 me-2 mt-5">
                    Descrição*
                </div>
                <div>
                    <textarea name="descricao" id="" placeholder="Escreve o que gostavas de ler se fosses tu a ver este anúncio" class="px-3 py-2 bg-gray-100 mt-3 focus:outline-none font-semibold text-sm" maxlength="9000"  cols="100" rows="10"></textarea>
                </div>
                @error('descricao')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                <div class="text-xs text-gray-500 me-2 mt-5">
                   Escreve pelo menos mais de 80 caracteres
                </div>
            </div>
        </div>
        <div class="px-4 mt-2">
            <div class="bg-white rounded px-8 py-8">    
                <div class="text-xs text-emerald-950 me-2 mt-5">
                    Valor*
                </div>
                <div>
                    <input type="number" maxlength="10" name="valor" placeholder="10&euro;" class="bg-gray-100 mt-2 rounded lg:w-8/12 w-9/12 lg:py-5 py-2 px-4  focus:outline-none focus:border-b-2 border-blue-600">
                </div>
                @error('valor')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="px-4 mt-2">
            <div class="bg-white rounded px-8 py-8">    
                <div class="text-xs text-emerald-950 me-2 mt-5">
                    Localização*
                </div>
                <div>
                    <input type="text" maxlength="255" name="localizacao" placeholder="Freguesia ou código postal" class="bg-gray-100 mt-2 rounded lg:w-8/12 w-9/12 lg:py-5 py-2 px-4  focus:outline-none focus:border-b-2 border-blue-600">
                </div>
                @error('localizacao')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="px-4 mt-2">
            <div class="bg-white rounded px-8 py-8">    
                <div class="font-semibold text-emerald-950 ">
                    Dados de contato
                </div>
                <div class="text-xs text-emerald-950 me-2 mt-5">
                    Nome do anunciante*
                </div>
                <div>
                    <input type="text" name="nomeanunc" placeholder="" class="bg-gray-100 mt-2 rounded lg:w-8/12 w-9/12 lg:py-5 py-2 px-4  focus:outline-none focus:border-b-2 border-blue-600 capitalize" value="{{ auth()->user()->name }}">
                </div>
                <div class="text-xs text-emerald-950 me-2 mt-5">
                    E-mail
                </div>
                <div>
                    <input type="text" placeholder="" readonly class="text-gray-400 bg-gray-100 mt-2 rounded lg:w-8/12 w-9/12 lg:py-5 py-2 px-4  focus:outline-none" name="email" value="{{ auth()->user()->email }}">
                </div>
                <div class="text-xs text-emerald-950 me-2 mt-5">
                    Número de telefone
                </div>
                <div>
                    <input type="text" placeholder="" readonly class="text-gray-400 bg-gray-100 mt-2 rounded lg:w-8/12 w-9/12 lg:py-5 py-2 px-4  focus:outline-none " value="{{ auth()->user()->telefone }}">
                </div>
            </div>
        </div>
        <div class="px-4 mt-2 hidden lg:block">
            <div class="bg-white rounded px-8 py-8">    
                <div class="float-right">
                    <button type="submit">
                        <div class="inline py-3 bg-teal-950 px-4 text-white font-semibold rounded border-4 border-teal-950 hover:bg-white hover:text-teal-950">
                            Publicar anúncio
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <div class="px-4 mt-2 lg:hidden mb-10">
            <div class="bg-white rounded py-10">    
                <div class="mx-auto flex items-center justify-center">
                    <div class="text-emerald-950 inline w-5/12  border-b-2 border-emerald-950 mr-3 py-3 px-4 text-center">
                        Pré-vizualizar
                    </div>
                    <div class="text-teal-950 inline w-5/12 bg-teal-950 px-4 text-white font-semibold rounded border-4 border-teal-950 text-center">
                       <button type="submit"> 
                            Publicar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
<!-- Modal da navbar do PC -->
<div id="modalPC1" class="fixed inset-0 flex items-center justify-center z-50 hidden">
  <div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex"></div>
  <div class="bg-white w-1/2 p-6 rounded-lg shadow-lg relative">
    <button onclick="closeModal2()" class="float-right text-xl">
      <i class="bi bi-x"></i>
    </button>
    <div class="grid grid-cols-4">    
          <!-- categoria -->
          @foreach ( $categorias as $categoria )
          <a href="javascript:void(0)" onclick="selectCategoria('{{ $categoria->nome_categoria }}', '{{ $categoria->id }}')" class="rounded-full h-24 w-24 col-span-1 inline mb-16">
                <img src="{{ url('/storage/'.$categoria->foto) }}" class="object-cover rounded-lg h-full" alt="">
                    <div class="mt-3 text-xs text-emerald-950 font-bold text-center">
                        {{ $categoria->nome_categoria }}
                    </div>
            </a>
          @endforeach    
    </div>
  </div>
</div>


<!-- Adicione esse código JavaScript -->
<script>
function selectCategoria(categoria, categoriaId) {
  document.getElementById('categoria').value = categoria;
  document.getElementById('categoria_id').value = categoriaId;
  closeModal2();
}

  function openModalPC2() {
    document.getElementById('modalPC1').classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
  }

  function closeModal2() {
    document.getElementById('modalPC1').classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
  }
</script>
@endsection