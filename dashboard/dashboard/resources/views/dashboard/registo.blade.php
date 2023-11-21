@extends('layout.dash')

@section('title', 'Painel')
@section('content')
    <div class="h-full">
        <div class="text-white text-2xl font-semibold  mx-auto flex items-center justify-center py-20">

        </div>
        <form action="{{ route('dashboard-store') }}" method="POST">
            @csrf
            <div class="px-80">
                <div class="rounded bg-gray-800 py-2 px-4">
                <div class="text-white text-3xl font-bold, flex items-center justify-center mb-10">
                Registo
            </div>
                    <div class="text-white font-semibold mt-4">
                        <input type="text" id="nome" name="nome" class="bg-inherit  border-2 focus:ml-0 duration-500 absolute rounded">
                        <label for="nome" class="duration-500 ml-2">Nome</label>
                    </div>
                    <div class="text-white font-semibold mt-4">
                        <input type="text" name="apelido" id="apelido" class="bg-inherit border-2 focus:ml-0 duration-500 absolute  rounded">
                        <label for="apelido" class="duration-500 ml-2">Apelido</label>
                    </div>
                    <div class="text-white font-semibold mt-4">
                        <input type="email" id="email" name="email" class="bg-inherit border-2 focus:ml-0 duration-500 absolute  rounded">
                        <label for="email" class="duration-500 ml-2">Email</label>
                    </div>
                    <div class="text-white font-semibold mt-4">
                        <input type="password" name="password" id="password" class="bg-inherit border-2 focus:ml-0 duration-500 absolute  rounded">
                        <label for="password" class="duration-500 ml-2">Password</label>
                    </div>
                    <div class="text-white font-semibold mt-4">
                        <input type="password" name="confirm_password" id="confirm_password" class="bg-inherit border-2 focus:ml-0 duration-500 absolute  rounded">
                        <label for="confirm_password" class="duration-500 ml-2">Confirm Password</label>
                    </div>
                    <div class="text-white my-4">
                        Tipo de conta <br>
                            <div class="inline mr-5 ">
                                <input type="radio" class="" name="tipo" value="Admin">
                                Admin
                            </div>
                            <div class="inline">
                                <input type="radio" name="tipo" value="Normal">
                                Normal
                            </div>
                            <div>
                                <button type="submit" name="submit" class="bg-lime-500 py-1 px-4 rounded font-semibold mt-3">Registar</button>
                            </div>
                    </div>
                </div>
            </div>
</form>
        
    </div>
    
    <style>
    .text-white:focus-within > label,
    .text-white:not(:placeholder-shown) + label,
    .filled {
        margin-left: 220px;
        color: dodgerblue;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var inputs = document.querySelectorAll('input');

        inputs.forEach(function(input) {
            input.addEventListener('input', function() {
                var label = document.querySelector('label[for="' + input.id + '"]');

                if (input.value.trim() !== '') {
                    label.classList.add('filled');
                } else {
                    label.classList.remove('filled');
                }
            });
        });
    });
</script>
@endsection
