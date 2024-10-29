<x-app-layout>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <style>
        body {
            overflow: hidden; 
            margin: 0; 
            height: 100vh; 
        }

        .button-image {
            transition: transform 0.3s, opacity 0.3s; /* Transição suave */
        }

        .button-image:hover {
            transform: scale(1.05); /* Aumenta o tamanho ao passar o mouse */
            opacity: 0.8; /* Levemente transparente ao passar o mouse */
        }

        .button-image:active {
            transform: scale(0.95); /* Levemente reduzido ao clicar */
        }
    </style>
    
    <div class="relative inline-block h-screen">
        <img class="w-full h-auto" src="{{ asset('imagens/meiocirculo.png') }}" alt="Semicirculo">
        <div class="absolute inset-0">
            <h1 class="text-white font-paytone text-7xl mt-[10%] ml-[5%] ">BAIXE NOSSO APLICATIVO!</h1>
            <h1 class="text-white font-paytone text-4xl mt-[6%] ml-[5%]">Clique no botão abaixo para fazer o download! ⬎</h1>
            <a href="" download>
                <img class="button-image mt-[5%] ml-[5%] cursor-pointer" src="{{ asset('imagens/botaomaior.png') }}" alt="Botão de Download">
            </a>
            <h1 class="text-white font-Montserrat text-3xl mt-[6%] ml-[5%]">Acesse também as nossas redes sociais!</h1>
            <img class="button-image mt-[3%] ml-[5%] cursor-pointer" src="{{ asset('imagens/instagram-logo.png') }}" alt="Botão de Download">
        </div>
    </div>
</x-app-layout>