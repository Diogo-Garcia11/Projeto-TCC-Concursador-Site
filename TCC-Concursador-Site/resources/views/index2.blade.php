<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Página inicial</title>

    <!-- Fonts -->

    <link rel="shortcut icon" href="{{asset('imagens/logo.ico')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-900 dark:bg-gray-900">
        <nav class="bg-steelblue dark:steelblue dark:border-gray-700">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <a href="{{ route('dashboard') }}">
                                <x-application-logo class="block h-8 w-auto fill-current text-gray-800 dark:text-gray-200" />Concursador
                            </a>
                        </div>

                        <!-- Navigation Links, aqui e onde vai ficar nossas outras paginas -->
                        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                            <li><a href="#a_materias">Matérias</a></li>
                            <li><a href="#a_simulados">Simulados</a></li>
                            <li><a href="#a_comunidade">Comunidade</a></li>
                            @if (Route::has('login'))
                            @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Entrar
                            </a>
                            @else
                            <li><button class="botao"><a href="{{route('login')}}">Entrar</a></button></li>
                            @if (Route::has('register'))
                            <li><button class="botao"><a href="{{route('register')}}">Cadastrar</a></button></li>
                            @endif
                            @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </nav>



        <!-- Page Content -->
        <main>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div class="glass-effect">
                                <div class="main">
                                    <div class="text">
                                        <h1>Bem-vindo ao Concursador!</h1>
                                        <h3>Aqui, o seu sucesso é a nossa missão. No Concursador, oferecemos uma plataforma completa para você que está se preparando para concursos e vestibulares.
                                            Acesse uma vasta gama de questões e simulados atualizados, projetados para te ajudar a se familiarizar com o formato das provas e a aprimorar seu desempenho.
                                            Estude de forma estratégica e eficaz com nossos recursos interativos e desafios práticos.
                                            Estamos aqui para tornar sua jornada de estudos mais eficiente e garantir que você esteja pronto para conquistar seus objetivos.
                                            Comece agora e dê o primeiro passo para o seu sucesso acadêmico e profissional!</h3>
                                    </div>
                                    <div class="image">
                                        <img src="https://cdn.pixabay.com/photo/2021/11/05/19/30/animal-6771900_1280.jpg" alt="imagem" height="1000" width="500">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <a id="a_materias"></a>
                            <div class="glass-effect">
                                <div class="main">
                                    <div class="image">
                                        <img src="https://media.istockphoto.com/id/155141290/pt/foto/cris%C3%A2ntemo.jpg?s=2048x2048&w=is&k=20&c=H4gVO4mmBhk1fdpSgXBhsHP1uVHXYAfM0c6lU-X3Tq4=" alt="Imagem 2">
                                    </div>
                                    <div class="text">
                                        <h1><a href="{{route('materias')}}">Matérias</a></h1>
                                        <h3>Contando com 9 matérias diferentes, oferecemos um ótimo material de estudos 100% gratuito.</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <a id="a_simulados"></a>
                            <div class="glass-effect">
                                <div class="main">
                                    <div class="text">
                                        <h1><a href="{{route('simulados')}}">Simulados</a></h1>
                                        <h3>Com base nos vestibulares mais popularess do Brasil, nossa plataforma oferece uma ferramenta intuitiva nesse quesito.</h3>
                                    </div>
                                    <div class="image">
                                        <img src="https://cdn.pixabay.com/photo/2014/04/14/20/11/pink-324175_1280.jpg" alt="Imagem 3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <a id="a_comunidade"></a>
                            <div class="glass-effect">
                                <div class="main">
                                    <div class="image">
                                        <img src="https://cdn.pixabay.com/photo/2016/06/17/16/42/roses-1463562_1280.jpg" alt="Imagem 4">
                                    </div>
                                    <div class="text">
                                        <h1><a href="{{route('comunidade')}}">Comunidades</a></h1>
                                        <h3>Junte-se a nossa comunidade no Discord criada exclusivamente para a plataforma.</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('a[href^="#"]');

            for (const link of links) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();

                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            }
        });
    </script>
</body>

</html>