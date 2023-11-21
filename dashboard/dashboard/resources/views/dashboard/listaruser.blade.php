@extends('layout.painelhome')

@section('title', 'Listar Utilizadores')
@section('painel')

<div class="text-white bg-gray-800 w-11/12 mx-auto rounded py-1 px-2 mt-20">
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light">
                            <thead class="border-b font-medium dark:border-neutral-500">
                                <tr>
                                    <th class="text-xl font-bold border-r-2 text-center">Nome</th>
                                    <th class="text-xl font-bold border-r-2 text-center">Email</th>
                                    <th class="text-xl font-bold border-r-2 text-center">Tipo de conta</th>
                                    <th class="text-xl font-bold border-r-2 text-center">Criada em</th>
                                    <th class="text-xl font-bold border-r-2 text-center">...</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usersfunc as $userfunc)
                                    <tr>
                                        <td class="text-center font-semibold text-2xs border-r-2">{{$userfunc['name']}}</td>
                                        <td class="text-center font-semibold text-2xs border-r-2">{{$userfunc['email']}}</td>
                                        <td class="text-center font-semibold text-2xs border-r-2">{{$userfunc['type']}}</td>
                                        <td class="text-center font-semibold text-2xs border-r-2">{{$userfunc['created_at']}}</td>
                                        <td class="text-center font-semibold text-2xs border-r-2">
                                        <a href="{{ route('editaru', ['id' => $userfunc->id]) }}">
                                            <div class="p-2 bg-blue-600 rounded text-xl hover:bg-yellow-500 duration-500 inline mr-2 ">
                                                <i class="bi bi-pencil-square"></i>
                                            </div>
                                        </a>
                                            <div class="inline-block">    
                                                <form action="{{ route ('deleteuser', ['id' => $userfunc['id']]) }}" method="POST">
                                                @csrf
                                                @method ('DELETE')
                                                    <button type="submit" onclick="return confirm('Tem certeza que deseja deletar?')">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route ('dashboard-painel') }}">
        <div class="float-right mr-10 mt-8 py-1 px-2 bg-blue-400 hover:bg-blue-600 duration-500 rounded text-xl font-semibold text-white">
            Voltar
        </div>
    </a>
@endsection
