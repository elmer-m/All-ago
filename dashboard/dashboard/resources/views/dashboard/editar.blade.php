@extends('layout.loja')

@section('title', 'Editar')

@section('contentt')
   <div class="bg-gray-900 text-white w-10/12 mx-auto py-2 px-4 rounded">
      <div class="py-1">   
         <div class="inline-block">
            <h1 class="font-bold text-2xl">
               Editar Produto
            </h1>
         </div>
         <div class=" bg-blue-600 inline-block float-right text-1xl py-1 px-2 rounded font-semibold">
            <a href="{{ route ('loja') }}">
               Voltar
            </a>
         </div>
         <div class="mt-20">
            <form action="{{ route ('update', ['id' => $produto['id']]) }}" method="POST">
               @csrf
               @method('POST')
               <div class="bg-gray-700 w-10/12 mx-auto py-1 px-2 rounded">
               <div class="">
                     <input type="file" name="foto" class="">
                  </div>   
               <div class="">
                     <input type="text" name="nome" value="{{$produto->nome}}" placeholder="Nome do produto" class="rounded mt-4 px-2 bg-gray-700 border-gray-600 border-4 hover:border-blue-600 hover:border-4 outline-none focus:border focus:border-blue-600 focus:border-4 duration-500 " required autofocus>
                  </div>
                  <div>
                     <input type="number" name="valor" placeholder="Valor&euro;" value="{{$produto->valor}}"class="rounded mt-4 px-2 bg-gray-700 border-gray-600 border-4 hover:border-blue-600 hover:border-4 outline-none focus:border focus:border-blue-600 focus:border-4 duration-500" required autofocus>
                  </div>
                  <div>
                     <input type="text" name="descricao" placeholder="Descrição" value="{{$produto->descricao}}" class="rounded mt-4 px-2 bg-gray-700 border-gray-600 border-4 hover:border-blue-600 hover:border-4 outline-none focus:border focus:border-blue-600 focus:border-4 duration-500" required autofocus>
                  </div>
                  <div class="mt-5">
                     <label for="estado" class="font-semibold">Estado: <br></label>
                     <select name="estado" class="rounded mt-2 px-4 bg-gray-700 border-gray-600 border-4 hover:border-blue-600 hover:border-4 outline-none focus:border focus:border-blue-600 focus:border-4 duration-500" required autofocus>
                        <option value="desativo" @if($produto->estado == 'inativos') selected @endif>Inativos</option>
                        <option value="ativo" @if($produto->estado == 'ativo') selected @endif>Ativo</option>
                        <option value="esgotado" @if($produto->estado == 'esgotado') selected @endif>Esgotado</option>

                     </select>
                  </div>
                  <button type="submit" name="submit" class="mt-5 bg-gray-500 hover:bg-blue-600 duration-500 py-1 px-4 rounded text-xl font-semibold">Atualizar</button>
               </div>
            </form>
         </div>
      </div>
   </div>
@endsection
