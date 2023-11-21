@extends('layout.dash')

@section('title', 'Login')
@section('content')
    <div class="h-full">
        <div class="text-white text-2xl font-semibold  mx-auto flex items-center justify-center py-20">

        </div>
        <form action="{{ route('dashboard-login') }}" method="POST">
            @csrf
            @method('POST')
            <div class="px-80">
                <div class="rounded bg-gray-800 py-2 px-4">
                <div class="text-white text-3xl font-bold, flex items-center justify-center mb-10">
                Login
            </div>
                    <div class="text-white font-semibold mt-4">
                        <input type="email" id="email" name="email" class="bg-inherit border-2 focus:ml-0 duration-500 absolute  rounded " required autocomplete="email" autofocus>
                        <label for="email" class="duration-500 ml-2">Email</label>
                    </div>
                    <div class="text-white font-semibold mt-4">
                        <input type="password" name="password" id="password" class="bg-inherit border-2 focus:ml-0 duration-500 absolute  rounded" required >
                        <label for="password" class="duration-500 ml-2">Password</label>
                    </div>
                    <div class="row mb-3">
                            <div class="">
                                <div class="">
                                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="" for="remember">
                                        {{ __('Remember me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                            <div>
                                <button type="submit" name="submit" class="bg-lime-500 py-1 px-4 rounded font-semibold mt-3 text-white">Entrar</button>
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
