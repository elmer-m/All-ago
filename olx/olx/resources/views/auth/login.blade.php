@extends('layouts.app')

@section('content')
<div class="container lg:mx-auto ">
<div class="flex flex-wrap justify-center sm:h-screen">
        <div class="md:w-4/12 ">
            <div class="relative flex flex-col min-w-0 lg:rounded break-words border px-4 bg-white">
            <div class="lg:hidden text-5xl font-bold text-emerald-950 py-4 px-6">
                    Bem-vindo ao OLX!
                </div>
                <div class="flex"> 
                    <a href="{{ route('register') }}" class="block py-3 px-6 mb-0 bg-white  text-gray-900 border-b-2 border-gray-200 w-6/12 flex items-center justify-center">
                        <div class="">Criar conta</div>
                    </a>

                    <div class="py-2 px-2">OU</div>
                        <div class="block py-3 lg:px-6 mb-0 bg-white text-gray-900 border-b-2 border-emerald-950 w-6/12 flex items-center justify-center">Login</div>
                </div>

                <div class="flex-auto p-6">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="flex flex-wrap  mb-3">
                            <label for="email" class="md:pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end name-label ">Email</label>

                            <div class="w-11/12 mx-auto">
                                <input id="email" type="email" class="block px-2 w-full py-1 mb-1 border-b-2 focus:outline-none focus:border-b-4 text-base bg-gray-100 text-gray-800 border border-gray-200 name-input @error('name') bg-red-700 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="hidden mt-1 text-sm text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-wrap  mb-3">
                            <label for="password" class="md:pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end name-label ">Password</label>

                            <div class="w-11/12 mx-auto">
                                <input id="password" type="password" class="block px-2 w-full py-1 mb-1 border-b-2 focus:outline-none focus:border-b-4 text-base bg-gray-100 text-gray-800 border border-gray-200 name-input @error('name') bg-red-700 @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="hidden mt-1 text-sm text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-wrap  mb-3">
                            <div class="md:w-1/2 pr-4 pl-4 md:mx-1/3">
                                <div class="relative block mb-2">
                                    <input class="absolute mt-1 -ml-6" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="text-gray-700 pl-6 mb-0" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline font-normal text-blue-700 bg-transparent" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                        <div class="flex flex-wrap  mb-0 mt-5">
                            <div class="md:w-2/3 pr-4 pl-4 md:mx-1/3">
                                <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
