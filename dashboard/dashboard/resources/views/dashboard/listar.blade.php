@extends('layout.loja')

@section('title', 'Listar Produtos')
@section('contentt')

<div class="text-white bg-gray-800 w-11/12 mx-auto rounded py-1 px-2 mt-20">
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    @if (count($produtos) === 0)
                        <p class="text-center font-semibold text-2xl mt-4">Sem produtos</p>
                    @else
                        <table class="min-w-full text-left text-sm font-light">
                            <thead class="border-b font-medium dark:border-neutral-500">
                                <tr>

                                    <th class="text-xl font-bold border-r-2 text-center">Foto</th>
                                    <th class="text-xl font-bold border-r-2 text-center">Nome</th>
                                    <th class="text-xl font-bold border-r-2 text-center">Preço</th>
                                    <th class="text-xl font-bold border-r-2 text-center">Descrição</th>
                                    <th class="text-xl font-bold text-center">Estado</th>
                                    <th class="text-xl font-bold text-center">...</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produtos as $produto)
                                    <tr>
                                        <td class="text-center font-semibold text-2xs border-r-2 p-4">
                                            
                                            <div class="w-30 h-20 flex justify-center items-center">
                                                <img src="{{ asset('storage/' . $produto->foto) }}" class="max-w-full max-h-full object-center" alt="">
                                            </div>
                                        </td>
                                        <td class="text-center font-semibold text-2xs border-r-2 p-4">{{$produto['nome']}}</td>
                                        <td class="text-center font-semibold text-2xs border-r-2">{{$produto['valor']}}&euro;</td>
                                        <td class="text-center font-semibold text-2xs border-r-2">{{$produto['descricao']}}</td>
                                        <td class="text-center font-semibold text-2xs border-r-2">{{$produto['estado']}}</td>
                                        <td class="text-center font-semibold text-2xs border-r-2">
                                        <a href="{{ route ('edit', ['id' => $produto['id']]) }}">
                                            <div class="p-2 bg-blue-600 rounded text-xl hover:bg-yellow-500 duration-500 inline mr-2 ">
                                                <i class="bi bi-pencil-square"></i>
                                            </div>
                                        </a>
                                            <div class="inline-block">    
                                                <form action="{{ route ('delete', ['id' => $produto['id']]) }}" method="POST">
                                                @csrf
                                                @method ('DELETE')
                                                    <button class="" type="submit" onclick="return confirm('Tem certeza que deseja deletar?')">
                                                        <div class="p-2 bg-red-400 rounded text-xl hover:bg-red-600 duration-500">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </div>
                                                    </button>
                                                </form>
                                            </div>
                                    </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
