<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>entrar</title>
    <link rel="stylesheet" href="/TCC-Concursador-Site/resources/css/entrar_logar.css">
    <link rel="shortcut icon" href="/TCC-Concursador-Site/resources/imagem/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b4a3fdfca9.js" crossorigin="anonymous"></script>
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
body{
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: var(--cor-site);
}
.container{
    background-color: var(--cor-nav);
    padding: 6px;
    width: 350px;
    height: 450px;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 0 15px 0 darkgray;
}
form{
    position: absolute;
    margin-top: 80px;
    transition: .5s;
    width: 300px;
    height: 400px;
}
.botaoformulario{
    margin-top: 40px;
    position: relative;
    border-radius: 30px;
    box-shadow: 0 0 7px 0 black;
}
.botaoformulario button{
    cursor: pointer;
    background: transparent;
    border: none;
    position: relative;
    padding: 10px 29px;
}

.btnCor{
    position: absolute;
    width: 108px;
    height: 100%;
    background: linear-gradient(to right, red,blue);
    border-radius: 30px;
    transition: .3s;
}
input[type="text"], input[type="password"]{
    border: none;
    margin-top: 40px;
    border-radius: 60px;
    padding: 8px 0 8px 35px;
    outline: none;
    width: 100%;
}
button[type="submit"]{
    background: black;
    color: white;
    border-radius: 30px;
    width: 100%;
    border: none;
    outline: none;
    padding: 8px 0 8px 15px;
    font-size: 18px;
    margin-top: 40px;
    cursor: pointer;
}
.divCheck{
    margin: 10px 0 0 5px;
    width: 80%;
    font-size: 14px;
}
#Entrar{
    left: 25px;
}
#Cadastrar{
    left: 450px;
}
i{
    position: relative;
    left: 0;
    padding: 10px 10px;
}
.iEmail{
    top: -4.5vh;
}
.iSenha{
    top: -4.5vh;
}
.iSenha2{
    top: -4.5vh;
}
</style>
<body>
    <div class="container">
        <div class="botaoformulario">
            <div class="btnCor"></div>
            <button id="Entrar">Entrar</button>
            <button id="Cadastrar">Cadastrar</button>
        </div>

        <form id="Entrar">
            <input type="text" placeholder="Digite seu E-mail" required/>
            <i class="fa-solid fa-envelope iEmail"></i>
            <input type="password" placeholder="Digite sua senha" required/>
            <i class="fa-solid fa-lock iSenha"></i>
            <div class="divCheck">
                <input type="checkbox"/>
                <span>Lembrar senha?</span>
            </div>
            <button type="submit">Entrar</button>
        </form>

        <form id="Cadastrar">
            <input type="text" placeholder="Digite seu E-mail" required/>
            <i class="fa-solid fa-envelope iEmail"></i>
            <input type="password" placeholder="Digite sua senha" required/>
            <i class="fa-solid fa-lock iSenha"></i>
            <input type="password" placeholder="Digite sua senha" required/>
            <i class="fa-solid fa-lock iSenha2"></i>
            <div class="divCheck">
                <input type="checkbox"/>
                <span>Lembrar senha?</span>
            </div>
            <button type="submit">Cadastrar</button>
        </form>

    </div>
    <script src="/TCC-Concursador-Site/resources/js/entrar.js"></script>
</body>
</html>