@extends('layouts.app')

@section('content')

<div class="">
    <div class="flex flex-wrap justify-center">
        <div class="md:w-4/12 lg:px-4">
            <div class="relative flex flex-col min-w-0 lg:rounded break-words border bg-white">
                <div class="lg:hidden text-5xl font-bold text-emerald-950 py-4 px-6">
                    Bem-vindo ao OLX!
                </div>
                <div class="flex"> 
                    <div class="block py-3 lg:px-6 mb-0 bg-white text-gray-900 border-b-2 border-emerald-950 w-6/12 flex items-center justify-center">Criar conta</div>
                    <div class="py-2 px-2">OU</div>
                    <a href="{{ route('login') }}" class="block py-3 px-6 mb-0 bg-white  text-gray-900 border-b-2 border-gray-200 w-6/12 flex items-center justify-center">
                        <div class="">Login</div>
                    </a>
                </div>



                <div class="flex-auto">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="flex flex-wrap mb-3">
                            <label for="name" class="md:pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end name-label ">Nome</label>

                            <div class="w-11/12 mx-auto">
                                <input id="name" type="text" class="block px-2 w-full py-1 mb-1 border-b-2 focus:outline-none focus:border-b-4 text-base bg-gray-100 text-gray-800 border border-gray-200 name-input @error('name') bg-red-700 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="hidden mt-1 text-sm text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-wrap mb-3">
                            <label for="email" class="md:pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end name-label">Email</label>

                            <div class="w-11/12 mx-auto">
                                <input id="email" type="email" class="block w-full py-1 px-2 mb-1 border-b-2 focus:outline-none focus:border-b-4 text-base bg-gray-100 text-gray-800 border border-gray-200 email-input @error('email') bg-red-700 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="hidden mt-1 text-sm text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-wrap mb-3">
                            <label for="password" class="md:pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end name-label">Password</label>

                            <div class="w-11/12 mx-auto">
                                <input id="password" type="password" class="block w-full py-1 px-2 mb-1 border-b-2 focus:outline-none focus:border-b-4 text-base bg-gray-100 text-gray-800 border border-gray-200 name-input @error('name') bg-red-700 @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="hidden mt-1 text-sm text-red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-wrap mb-3">
                            <label for="password-confirm" class="md:pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal text-md-end name-label">Confirmar Password</label>

                            <div class="w-11/12 mx-auto">
                                <input id="password-confirm" type="password" class="block w-full py-1 px-2 mb-1 border-b-2 focus:outline-none focus:border-b-4 text-base bg-gray-100 text-gray-800 border border-gray-200 name-input @error('name') bg-red-700 @enderror" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="border-2 px-3 text-xs py-4">
                        Ao clicar no botão 'Criar conta', aceito os <div class="text-emerald-950 font-semibold">Termos e Condições</div> da OLX Portugal, S.A.
                        <br> <br>
                        Reconheço que a OLX Portugal, SA, utiliza a minha informação pessoal de acordo com a
                        <div class="text-emerald-950 font-semibold">Política de Privacidade</div> e com a <div class="text-emerald-950 font-semibold">Política de Cookies e Tecnologias Semelhantes</div>. A OLX
                        Portugal, SA, utiliza sistemas automatizados e parceiros para analisar o meu uso dos
                        serviços e facultar funcionalidades de produto relevantes, conteúdo, publicidade visada
                        e baseada nos meus interesses, bem como protecção contra spam, malware e utilização não
                        autorizada.
                        <div class="py-2">
                            <input type="checkbox" class="form-checkbox h-6 w-6 text-emerald-950 checked:bg-emerald-950 checked:border-transparent hover:bg-emerald-950 hover:border-transparent">
                            Sim, eu quero receber actualizações sobre produtos e serviços, promoções, ofertas especiais, novidades e eventos da OLX Portugal, SA, suas afiliadas e parceiros de negócio (e.g. através de newsletters e/ou mensagens SMS)
                        </div>


                    </div>

                        <div class="flex flex-wrap mb-0 border-2">
                        <div class="w-full lg:w-5/12 lg:pr-4 lg:pl-4  py-2 px-3 lg:px-0">
                                <button type="submit" class="bg-blue-500 w-full py-2 rounded text-white text-xl lg:text-sm font-bold   lg:inline-block lg:py-2 lg:align-middle lg:text-center lg:select-none lg:border lg:font-normal lg:whitespace-no-wrap lg:rounded lg:py-1 lg:px-3 lg:leading-normal lg:no-underline lg:bg-blue-600 lg:text-white lg:hover:bg-blue-600">
                                    Criar Conta
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
