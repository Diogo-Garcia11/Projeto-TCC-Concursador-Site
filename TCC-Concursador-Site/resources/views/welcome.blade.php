<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('imagens/logo.ico')}}" type="image/x-icon">
    <title>Página Inicial</title>
    <style>
    :root {
    --cor-site: rgb(44, 61, 91);
    --cor-nav: rgb(67, 93, 134);
}

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: linear-gradient(rgb(44, 61, 91), rgb(67, 93, 134)), url('https://via.placeholder.com/1920x1080') no-repeat center center fixed;
    background-size: cover;
    color: white;
    padding-top: 70px; /* Space for fixed nav */
    overflow-x: hidden;
}

nav {
    background-color: var(--cor-nav);
    padding: 30px;
    display: flex;
    align-items: center; /* Alinha verticalmente ao centro */
    justify-content: space-between; /* Espaça os itens igualmente entre as extremidades */
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
}

.nav-logo {
    display: flex;
    align-items: center;
}

nav img {
    height: 50px;
    margin-right: 20px; /* Espaçamento entre logo e nome */
}

nav h1 {
    margin: 0;
    font-size: 24px;
    color: white;
}

.header {
    display: flex;
    align-items: center;
    gap: 60px; /* Espaçamento entre os itens da lista */
    list-style: none; /* Remove bullets from list */
    margin: 0;
    padding: 0;
}

.header li {
    margin: 0;
}

.header a {
    color: white;
    text-decoration: none;
    padding: 20px;
    transition: color 0.3s ease;
}

.header a:hover {
    color: rgb(173, 203, 234);
}
a{
    text-decoration: underline ;
    color: white;
}
a:hover {
    color: rgb(173, 203, 234);
}
.botao {
    font-size: 14px;
    border-radius: 30px;
    padding: 15px 30px;
    background-color: rgb(60, 95, 155);
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-left: 10px; /* Adiciona espaço entre os botões */
}

.botao:hover {
    background-color: rgb(173, 203, 234);
}


.container {
    width: 80%;
    margin: auto;
    overflow: hidden;
}

.main {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 60px 0;
    max-width: 1300px; /* Define a largura máxima para centralizar o conteúdo */
    margin: 0 auto; /* Centraliza horizontalmente */
}

.main img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
}

.main .text, .main .image {
    flex: 1;
    padding: 20px;
    text-align: center;
}

h1, h3 {
    margin-bottom: 20px;
}

footer {
    background-color: var(--cor-nav);
    padding: 20px;
    text-align: center;
    color: white;
    position: relative;
    bottom: 0;
    width: 100%;
    margin-top: 20px;
}

.glass-effect {
    background: rgba(231, 215, 215, 0.027);
    border-radius: 10px;
    backdrop-filter: blur(10px);
    padding: 20px;
    margin: 20px 0;
    border: 1px solid rgba(41, 38, 38, 0.3);
}

@media (max-width: 768px) {
    .main {
        flex-direction: column;
        text-align: center;
    }

    .main .text, .main .image {
        width: 100%;
    }
}

    </style>
</head>
<body>
    <nav>
        <div class="nav-logo">
        <a id="a_cabeca"></a>
        <img class="logosite" src="{{ asset('imagens/logo.ico') }}" alt="logo" height="100" width="50">
            <h1>Concursador</h1>
        </div>
        <ul class="header">
            <li><a href="#a_materias">Matérias</a></li>
            <li><a href="#a_simulados">Simulados</a></li>
            <li><a href="#a_comunidade">Comunidade</a></li>
            <li><button class="botao"><a href="{{route('login')}}">Entrar</a></button></li>
            <li><button class="botao"><a href="{{route('register')}}">Cadastrar</a></button></li>
        </ul>
    </nav>
    

    <header class="cabeça">
        <!-- Header Content -->
    </header>

    <main>
    <!-- First Main -->
    <div class="glass-effect">
            <div class="main">
                <div class="text">
                    <h1>Concursador</h1>
                    <h3>Nosso site, tem como objetivo facilitar o acesso a educação!</h3>
                </div>
                <div class="image">
                    <img src="https://cdn.pixabay.com/photo/2021/11/05/19/30/animal-6771900_1280.jpg" alt="imagem" height="1000" width="500">
                </div>
            </div>
        </div>

        <!-- Second Main -->
        <div class="glass-effect">
            <div class="main">
            <a id="a_materias"></a>
                <div class="image">
                    <img src="https://media.istockphoto.com/id/155141290/pt/foto/cris%C3%A2ntemo.jpg?s=2048x2048&w=is&k=20&c=H4gVO4mmBhk1fdpSgXBhsHP1uVHXYAfM0c6lU-X3Tq4=" alt="Imagem 2">
                </div>
                <div class="text">
                    <h1>Matérias</h1>
                    <h3>Contando com 9 matérias diferentes, oferecemos um ótimo material de estudos 100% gratuito.</h3>
                </div>
            </div>
        </div>

        <!-- Third Main -->
        <div class="glass-effect">
            <div class="main">
            <a id="a_simulados"></a>
                <div class="text">
                    <h1>Simulados</h1>
                    <h3>Com base nos vestibulares mais popularess do Brasil, nossa plataforma oferece uma ferramenta intuitiva nesse quesito.</h3>
                </div>
                <div class="image">
                    <img src="https://cdn.pixabay.com/photo/2014/04/14/20/11/pink-324175_1280.jpg" alt="Imagem 3">
                </div>
            </div>
        </div>

        <!-- Fourth Main -->
        <div class="glass-effect">
            <div class="main">
            <a id="a_comunidade"></a>
                <div class="image">
                    <img src="https://cdn.pixabay.com/photo/2016/06/17/16/42/roses-1463562_1280.jpg" alt="Imagem 4">
                </div>
                <div class="text">
                    <h1>Comunidade</h1>
                    <h3>Junte-se a nossa comunidade no Discord criada exclusivamente para a plataforma.</h3>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container-pes">
            <div class="footer-copyright">
                &#169; 2024 all rights reserved
            </div>
            <br>
            <a href="#a_cabeca">Voltar ao topo</a>
        </div>
    </footer>

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
s