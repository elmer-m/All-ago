@extends('layout.painelhome')
@section('title', 'Painel')
@section('painel')
<div class="">
    <div class="flex items-enter justify-center mt-10">
    </div>
</div>
<div class="flex items-center justify-center mt-20">
  <div class="bg-gray-700 inline-block text-white font-semibold p-3 mr-7 rounded-xl">
    <div class="border-b-2 border-cyan-700">Total de produtos</div>
    @if ($numprodutos === 0)
    <div class="border-gray-400 mt-2 flex items-center justify-center">
      <div class="text-gray-500 mt-2 inline">Sem Produtos</div>
    </div>
    @else
    <div class="border-b-2 border-gray-400 mt-2">
      <div class="text-yellow-500 mt-2 inline">{{ $numprodutos }}<div class="text-white inline float-right">Adicionados</div></div>
    </div>
    <div class="border-b-2 border-gray-400 mt-2 ">
      <div class="text-yellow-500 mt-2 inline">{{ $numprodutosativos }}<div class="text-white inline float-right">Ativos</div></div>
    </div>
    <div class="border-b-2 border-gray-400 mt-2 ">
      <div class="text-yellow-500 mt-2 inline">{{ $numprodutosdesativos }}<div class="text-white inline float-right">Inativos</div></div>
    </div>
    <div class="border-b-2 border-gray-400 mt-2">
      <div class="text-yellow-500 mt-2 inline">{{ $numprodutosesgotados }}<div class="text-white inline float-right">Esgotados</div></div>
    </div>
    @endif
  </div>
  <div class="bg-gray-700 inline-block text-white font-semibold p-3 mr-7 rounded-xl">
    <div class="border-b-2 border-cyan-700">Total de utilizadores</div>
    <div class="border-b-2 border-gray-400 mt-2">
      <div class="text-yellow-500 mt-2 inline">{{ $countadmin }}<div class="text-white inline float-right">Administradores</div></div>
    </div>
    <div class="border-b-2 border-gray-400 mt-2">
      <div class="text-yellow-500 mt-2 inline">{{ $countnormal }}<div class="text-white inline float-right">Normais</div></div>
    </div>
    <div class="border-b-2 border-gray-400 mt-2">
      <div class="text-yellow-500 mt-2 inline">{{ $countutilizador }}<div class="text-white inline float-right">Utilizadores</div></div>
    </div>
  </div>
  <div class="bg-gray-700 inline-block text-white font-semibold p-3 mr-7 rounded-xl">
    <div class="border-b-2 border-cyan-700">Produtos Mais vendidos</div>
    <div class="border-b-2 border-gray-400 mt-2">
      <div class="text-yellow-500 mt-2 inline">321321<div class="text-white inline float-right">Xícara</div></div>
    </div>
    <div class="border-b-2 border-gray-400 mt-2">
      <div class="text-yellow-500 mt-2 inline">932<div class="text-white inline float-right">Star-link</div></div>
    </div>
    <div class="border-b-2 border-gray-400 mt-2">
      <div class="text-yellow-500 mt-2 inline">321<div class="text-white inline float-right">Tesla</div></div>
    </div>
  </div>
  <div class="bg-gray-700 inline-block text-white font-semibold p-3 rounded-xl">
    <div class="border-b-2 border-cyan-700">Total Faturado</div>
    <div class="mt-2">
      <div class="text-yellow-500 mt-2 inline text-2xl">3128328<div class="text-white inline float-right">&euro;</div></div>
    </div>
  </div>
</div>
<div class=" mt-40">
    
<form>   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ml-56">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input type="search" id="default-search" class="block w-3/5 p-6 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500, mx-auto" placeholder="Procure Qualquer Coisa" required>
        <button type="submit" class="text-white absolute right-2.5 mb-2 bottom-2.5 mr-56 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
    </div>
</form>
    
@endsection
