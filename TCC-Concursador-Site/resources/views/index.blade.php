<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('imagens/logo.ico')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Big+Shoulders+Display:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Página Inicial</title>
    <link href="{{ asset('TCC-Concursador-Site/resources/css/app.css') }}" rel="stylesheet">
    <!-- @vite('resources/css/app.css')-->
    <style>
        
    </style>
</head>
<body>
<nav class="nav-con">
    <div class="nav-logo">
        <img class="logosite" src="{{ asset('imagens/logocon.svg') }}" alt="logo">
        <h1 class="nav-titulo">CONCURSADOR</h1>
    </div>
    <ul class="header-center">
        <li><a class="nav-link" href="#a_materias">MATÉRIAS</a></li>
        <li><a class="nav-link" href="#a_simulados">SIMULADOS</a></li>
        <li><a class="nav-link" href="#a_comunidade">COMUNIDADE</a></li>
    </ul>

    <ul class="header-right">
        <li><a class="nav-cad" href="{{route('login')}}">ENTRAR</a></li>
        <li><a class="nav-cad" href="{{route('register')}}">CADASTRAR</a></li>
    </ul>
</nav>
<main>
        <section id="a_materias" class="section glass-effect">
            <div class="main">
                <div class="text">
                    <h1 class="glass-titulo"><a href="{{route('materias')}}">MATÉRIAS</a></h1>
                    <h3 class="glass-texto">Contando com 9 matérias diferentes, oferecemos um ótimo material de estudo 100% gratuito.</h3>
                </div>
                <div class="image">
                    <img src="{{ asset('imagens/teste111.svg') }}" alt="imagem" height="500" width="540">
                </div>
            </div>
        </section>

        <section id="a_simulados" class="section glass-effect">
            <div class="main">
                <div class="image">
                    <img src="{{ asset('imagens/teste111.svg') }}" alt="imagem" height="500" width="540">
                </div>
                <div class="text">
                    <h1 class="glass-titulo"><a href="{{route('simulados')}}">SIMULADOS</a></h1>
                    <h3 class="glass-texto">Com base nos vestibulares mais populares do Brasil, oferecemos uma ferramenta intuitiva.</h3>
                </div>
            </div>
        </section>

        <section id="a_comunidade" class="section glass-effect">
            <div class="main">
                <div class="text">
                    <h1 class="glass-titulo"><a href="{{route('comunidade')}}">COMUNIDADE</a></h1>
                    <h3 class="glass-texto">Junte-se à nossa comunidade no Discord, criada exclusivamente para a plataforma.</h3>
                </div>
                <div class="image">
                    <img src="{{ asset('imagens/teste111.svg') }}" alt="imagem" height="500" width="540">
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container-pes">
            <div class="footer-copyright">
                &#169; 2024 Todos direitos reservados
            </div>
            <br>
            <a href="#a_cabeca">Voltar ao topo</a>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');

            function activateLink() {
                let index = sections.length;

                while (--index && window.scrollY + 50 < sections[index].offsetTop) {}

                navLinks.forEach((link) => link.classList.remove('active'));
                navLinks[index].classList.add('active');
            }

            window.addEventListener('scroll', activateLink);

            navLinks.forEach((link) => {
                link.addEventListener('click', function (event) {
                    event.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetSection = document.getElementById(targetId);

                    window.scrollTo({
                        top: targetSection.offsetTop,
                        behavior: 'smooth',
                    });
                });
            });
        });
    </script>
</body>
</html>
