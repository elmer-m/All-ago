<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - OLX</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body class="bg-gray-100">
  <nav class="hidden lg:block bg-teal-950 fixed w-full top-0">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

        </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex flex-shrink-0 items-center ml-24 mr-24">
            <a href="{{ route ('olx') }}">
              <img class="hidden h-10 w-auto lg:block" src="https://1000logos.net/wp-content/uploads/2023/01/OLX-logo.png" alt="Your Company">
            </a>
          </div>
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex  space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="#" class="text-white flex items-center rounded-md px-5 py-2 text-sm hover:text-gray-400 font-bold ml-60">
                <div class="inline mr-4 text-xl">
                  <i class="bi bi-people-fill"></i>
                </div>
                <div class="inline pt-2">
                  Contato
                </div> 
              </a>
              <a href="" class="text-white text-xl  hover:text-gray-400 rounded-md px-3 py-2 text-sm ">
                <div class="inline mr-4">
                  <i class="bi bi-heart"></i>
                </div>
              </a>
              <a href="{{ route('logout') }}" class="text-white flex items-center rounded-md px-5 py-2 text-sm hover:text-gray-400 font-bold ml-60 mr-20">
                <div class="inline mr-4 text-xl">
                  <i class="bi bi-person "></i>
                </div>
                <div class="inline  pt-2">
                  {{ auth()->user()->name }} <i class="bi bi-caret-down"></i>
                </div> 
              </a>
              @if(empty($telefone))
              <a href="#" class="text-teal-950 hover:text-white border-4 border-white hover:bg-teal-950 flex items-center rounded-md px-5 py-2 text-sm hover:text-gray-400 font-semibold bg-white" onclick="openModalPC()">Anunciar e Vender</a>
              @else
              <a href="{{ route('createproduto') }}" class="text-teal-950 hover:text-white border-4 border-white hover:bg-teal-950 flex items-center rounded-md px-5 py-2 text-sm hover:text-gray-400 font-semibold bg-white">Anunciar e Vender</a>
@endif


            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  
  <div class="w-full h-4/5 mt-16">
      @yield('conteudo')
  </div>
  
  <nav class="lg:hidden fixed bottom-0 right-0 left-0 bg-white">
    <div class="w-full h-full flex items-center justify-center">
      <a href="" class="mr-5">
        <div class="inline-block h-full">
          <div class="flex items-center justify-center border-black text-emerald-950 text-xl fle">
            <i class="bi bi-house-door-fill"></i>
          </div>
          <div class="text-xs">
            Explorar
          </div>
        </div>
      </a>
      <a href="" class="mr-5">
        <div class="inline-block border-black h-full">
          <div class="font-bold flex items-center justify-center border-black text-emerald-950 text-xl">
            <i class="bi bi-heart"></i>
          </div>
          <div class="text-xs">
            Favoritos
          </div>
        </div>
      </a>
      <a href="{{ route ('numero') }}" class="mr-5">
        <div class="inline-block border-black h-full">
          <div class="flex items-center justify-center border-black text-emerald-950 text-xl fle">
            <i class="bi bi-plus-circle"></i>
          </div>
          <div class="text-xs">
            Vender
          </div>
        </div>
      </a>
      <a href="" class="mr-5">
        <div class="inline-block border-black h-full">
          <div class="flex items-center justify-center border-black text-emerald-950 text-xl fle">
            <i class="bi bi-people"></i>
          </div>
          <div class="text-xs">
            Contatos
          </div>
        </div>
      </a>
      <a href="" class="">
        <div class="inline-block border-black h-full">
          <div class="flex items-center justify-center border-black text-emerald-950 text-xl fle">
            <i class="bi bi-person"></i>
          </div>
          <div class="text-xs">
            {{ auth()->user()->name }}
          </div>
        </div>
      </a>
    </div>  
  </nav>



  <!-- Modal da navbar do PC -->
  <div id="modalPC" class="fixed inset-0 flex items-center justify-center z-50 hidden">
      <div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex"></div>
      <div class="bg-white w-1/2 p-6 rounded-lg shadow-lg relative">
          <button onclick="closeModal()" class="float-right text-xl"><i class="bi bi-x"></i></button>
          <form action="{{ route('telefone.update') }}" method="POST">
              @method('PUT')
            @csrf
          <div class="flex items-center justify-center mt-20"> 
            <div class="h-16 w-16">
                <img class="objete-cover w-full h-full" src="https://img.freepik.com/vetores-premium/telemovel-com-marca-de-verificacao-de-escudo-protegido-ou-seguranca-de-smartphone_101884-170.jpg?w=2000" alt="">
            </div>
        </div>
        <div class=" flex items-center justify-center mt-3">    
            <h2 class="text-xl font-bold mb-4 text-emerald-950">Confirma que és mesmo es tu</h2>
        </div>
        <div class=" flex items-center justify-center text-center mt-3">
            <p class="text-xs">A tua segurança é o mais importante para nós. Ajuda-nos a tornar a tua experiência no OLX ainda mais segura ao confirmares a tua identidade. Apenas precisamos de enviar um código SMS para o teu telemóvel para confirmarmos que és mesmo tu.</p>
        </div>
        <div class="px-20 py-5 text-sm text-gray-500">
            Número de telemovel
        </div>
        <div>
            <div class="inline bg-gray-100 ml-24 mr-4 py-2 px-4 text-gray-400 rounded">
                +351
            </div>
            <div class="inline">
    <input type="text" name="telefone" placeholder="123456789" class="bg-gray-200 rounded py-2 px-4 
        @error('telefone') border-red-500 @enderror"
        name="telefone" value="{{ old('telefone') }}">

    @error('telefone')
        <p class="text-red-500 text-sm mt-1">O número de telemovel tem que conter 9 digitos.</p>
    @enderror
</div>
    <div class="mt-10 flex items-center justify-center">
        <button type="submit" class="bg-emerald-950 text-white rounded py-2 px-4 fond-bold">
            Confirmar Número
        </button>
    </div>
    <div class=" flex items-center justify-center text-center mt-3 px-20">
            <p class="text-sm text-gray-400">Introduza um número de uma operadora móvel <br>portuguesa e que ainda não esteja associado a uma <br>conta OLX.</p>
        </div>
        </div>
        
    </div>
  </div>
</form>

  <!-- Adicione esse código JavaScript -->
  <script>
  function openModalMobile() {
    document.getElementById('modalMobile').classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
  }

  function openModalPC() {
    document.getElementById('modalPC').classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
  }

  function closeModal() {
    document.getElementById('modalPC').classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
  }
</script>

</body>
</html>
