<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>OLX</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .div-circular {
            width: 1200px;
            height: 1200px;
            border-radius: 50%;
            border: 140px solid #CEDDFF;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: -1;
        }
    </style>
</head>
<body>
    
    <div class="hideen lg:block lg:overflow-hidden">
        <div id="app" class="bg-blue-500 ">
            <div class="fixed">
                <div class="div-circular hidden lg:block"></div>
                </div>

            <div class="lg:bg-blue-500 overflow-y-hidden">

                <div class="lg:py-4">
                    @yield('content')
                </div>
            </div>    
        </div>
    </div>
</body>
</html>
