var formEntrar = document.querySelector('#Entrar')
var formCadastrar = document.querySelector('#Cadastrar')
var btnCor = document.querySelector('.btnCor')

document.querySelector('#btnEntrar').addEventListener('click', () => {
    formEntrar.style.left = "25px"
    formCadastrar.style.left = "450px"
    btnCor.style.left = "0px"
})

document.querySelector('#btnCadastrar').addEventListener('click', () => {
    formEntrar.style.left = "-450px"
    formCadastrar.style.left = "25px"
    btnCor.style.left = "110px"
})