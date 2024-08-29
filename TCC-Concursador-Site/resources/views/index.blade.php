<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pag inicio</title>
    <link rel="stylesheet" href="/TCC-Concursador-Site/resources/css/style.css">
    <link rel="shortcut icon" href="{{asset('imagens/logo.ico')}}" type="image/x-icon">
</head>
<style>
:root{
    --cor-site: rgb(44, 61, 91);
    --cor-nav:rgb(67, 93, 134);
}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
h1{
    color:black;
    font-size: 55px;
}
body{

    background-color: var(--cor-site);
    height: 175vh;
    grid-gap: 1rem;
    display: grid;
    grid-template-areas:
      "nav nav nav"
      "header header "
      "main main main"
      "footer footer footer";
}

/*Resposividade*/
@media(max-width:767px){
    .footer-col{
        width: 50%;
        margin-bottom: 30px;
    }
}
@media(max-width:574px){
    .footer-col{
        width: 100%;
    }
}
@media(max-width:767px){
    .header{
        width: 50%;
        margin-bottom: 30px;
    }
}
@media(max-width:574px){
    .header{
        width: 100%;
    }
}
.barrapesquisa{
    position: absolute;
    top: 10.3%;
    left: 70%;
    transform: translate(-50%, -50%);
    background-color:var(--cor-nav);
    height: 30px;
    padding: 20px;
    border-radius: 40px;
    display: flex;
    justify-content: center;
    transition: .5s;
    align-items: center;
}
.barrapesquisa:hover > .pesquisa-txt{
    width: 240px;
    padding: 0 6px;
}
.barrapesquisa:hover .botao-pesquisar{
    background-color:var(--cor-nav);
}
.pesquisa-txt{
    border: none;
    background: none;
    outline: none;
    padding: 0;
    color: white;
    font-size: 20px;
    line-height: 40px;
    width: 0;
    transition: .2s;
}
.botao-pesquisar{
    width: 40px;
    height: 20px;
    border-radius: 50%;
    background-color: var(--cor-nav);
    display: flex;
    justify-content: center;
    align-items: center;
}
.container h4{
    font-size: 32px;
    text-align: center;
    margin-top: -65px;
}
nav{
    border-bottom: 0.1px solid black;
    grid-area: nav;
    align-items: center;
    color: white;
    padding: 20px 40px; /* Aumenta o espaçamento interno da navbar */
    height: 100px; /* Define a altura da navbar */
    background-color: rgb(67, 93, 134);
}
.logosite{
    margin-top: -8px;
    align-items: center;
}
.container-pes{
    max-width: 1170px;
    margin: auto;
}

.footer{
    grid-area: footer;
    padding: 20px 40px; /* Aumenta o espaçamento interno da navbar */
    height: 180px; /* Define a altura da navbar */
    background-color: rgb(67, 93, 134);
    display: flex;
}
.footer-copyright{
    display: flex;
    justify-content: center;
    font-size: 1rem;
    padding: 1.5rem;
    font-weight: 100;
}

.row{
    display: flex;
    flex-wrap: wrap;
}
ul{
    list-style: none;
}
header{
    border-bottom: 0.1px solid black;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: space-around;
}
.header{
    gap: 120px;
    margin-left: 5px;
    margin-left: -80px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 40px; /* Ajuste de acordo com a necessidade */
    font-size: 25px;
    list-style: none;
}
.header a{
    color: white;
    text-decoration: none;
    padding: 20px 85px; /* Aumenta o espaçamento dos links */
    transition: color 0.3s ease; /* Animação suave */
}
.header li a:hover {
    color: rgb(173, 203, 234);
}
.botao a{
    text-decoration: none;
    color: white;
}
.botao{
    margin-right: -550px; /* Espaço entre os botões */
    font-size: 14px;
    border-radius: 30px; /* Arredonda o botão */
    padding: 15px 30px;
    background-color: rgb(60, 95, 155); /* Cor de fundo inicial */
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease; /* Animação suave */
}
.botao:last-child {
    margin-right: 0; /* Remove o espaço do último botão */
}
.botao:hover {
    background-color: rgb(173, 203, 234); /* Azul clarinho ao passar o mouse */
}

.main{
    background-color:black;
    padding: 20px 40px; /* Aumenta o espaçamento interno da navbar */
    height: 650px; /* Define a altura da navbar */
}
.imgesquerda{
    padding: 120px;
    display: flex;
    justify-content:left;
    align-items: left;
    height: 800px;
}

.imgdireita{
    padding: 120px;
    display: flex;
    justify-content:right;
    align-items: right;
    height: 800px;
}
.conteudodireita {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-end; /* Alinha o conteúdo à direita */
    text-align: right; /* Alinha o texto à direita */
    color: white;
    padding: 20px; /* Adiciona um pouco de padding, se necessário */
    height: 100%; /* Garante que o container ocupe toda a altura disponível */
    width: 100%; /* Garante que o container ocupe toda a largura disponível */
}
.conteudoesquerda {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start; /* Alinha o conteúdo à esquerda */
    text-align: left; /* Alinha o texto à esquerda */
    color: black;
    padding: 20px; /* Adiciona um pouco de padding, se necessário */
    height: 100%; /* Garante que o container ocupe toda a altura disponível */
    width: 100%; /* Garante que o container ocupe toda a largura disponível */
}
.main2{
    padding: 20px 40px; /* Aumenta o espaçamento interno da navbar */
    height: 650px; /* Define a altura da navbar */
    background-color:white;
}
.main3{
    padding: 20px 40px; /* Aumenta o espaçamento interno da navbar */
    height: 650px; /* Define a altura da navbar */
    background-color:violet;
    align-items: center;
}
.main4{
    padding: 20px 40px; /* Aumenta o espaçamento interno da navbar */
    height: 650px; /* Define a altura da navbar */
    background-color: pink;
}

</style>
<body>
    <div class="container">
        <nav>
            <img class="logosite" src="{{ asset('imagens/logo.ico') }}" alt="logo" height="85" width="85">
            <h4>Concursador</h4>
        </nav>
        <header class="cabeça">
            <ul class="header">
                <li><a href="{{route('materias')}}">Matérias</a></li>
                <li><a href="{{route('simulados')}}">Simulados</a></li>
                <li><a href="{{route('comunidade')}}">Comunidade</a></li>
                <!-- <li><div class="barrapesquisa">
                <input type="text" class="pesquisa-txt" placeholder="Pesquisar">
                <a href="#" class="botao-pesquisar">
                    <img src="https://cdn-icons-png.flaticon.com/512/64/64673.png" alt="lupa" height="30" width="30">
                </a> </div></li> -->
                <li><button class="botao"><a href="{{route('login')}}">Entrar</a></button></li>
                <li><button class="botao"><a href="{{route('register')}}">Cadastrar</a></button></li>
            </ul>
        </header>
        
        <main>
        <div class="main">
            <div class="imgesquerda">
            <img src="https://cdn.pixabay.com/photo/2023/04/26/17/09/flower-7952950_1280.jpg" alt="imagem" height="380px">
            <div class="conteudodireita">
            <h1>Seja Bem-vindo!!</h1>
            <h3>Nosso site, tem como objetivo facilitar o acesso a educação!</h3>
            </div>
            </div>
        </div>
        <div class="main2">
        <div class="imgdireita">
        <div class="conteudoesquerda">
            <h1>Matérias</h1>
            <h3>Contando com 9 matérias diferentes, oferecemos um ótimo material de estudos 100% gratuito.</h3>
            </div>
            <img src="https://media.istockphoto.com/id/155141290/pt/foto/cris%C3%A2ntemo.jpg?s=2048x2048&w=is&k=20&c=H4gVO4mmBhk1fdpSgXBhsHP1uVHXYAfM0c6lU-X3Tq4=" alt=""  height="380px" >
        </div>
        </div>
        <div class="main3">
        <div class="imgesquerda">
            <img src="https://cdn.pixabay.com/photo/2014/04/14/20/11/pink-324175_1280.jpg" alt=""  height="380px">
            <div class="conteudodireita">
            <h1>Simulados</h1>
            <h3>Com base nos vestibulares mais popularess do Brasil, nossa plataforma oferece uma ferramenta intuitiva nesse quesito.</h3>
            </div>
        </div>
        </div>
        <div class="main4">
            <div class="imgdireita">
            <div class="conteudoesquerda">
            <h1>Comunidade</h1>
            <h3>Junte-se a nossa comunidade no Discord criada exclusivamente para a plataforma.</h3>
            </div>
            <img src="https://cdn.pixabay.com/photo/2016/06/17/16/42/roses-1463562_1280.jpg" alt=""  height="380px">
            </div>
        </div>
        </main>
    
        <footer class="footer">
            <div class="container-pes">
                <div class="footer-copyright">
                    &#169
                    2024 all rights reserved
                </div>
            </div>
        </footer>
    </div>
</body>
</html>