<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('imagens/logo.ico') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Big+Shoulders+Display:wght@300;400;700&display=swap" rel="stylesheet">
    
    <!-- CSS (output.css) -->
    <link href="{{ asset('src/output.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-montserrat text-gray-900 antialiased overflow-hidden">
    <nav class="nav-au">
        <div class="nav-logo">
            <a href="/">
                <img class="logosite" src="{{ asset('imagens/logocon.svg') }}" alt="logo">
            </a>
            <h1 class="nav-titulo">CONCURSADOR</h1>
        </div>
    </nav>

    <!-- Conteúdo da página -->
    @yield('content')
</body>
</html>
