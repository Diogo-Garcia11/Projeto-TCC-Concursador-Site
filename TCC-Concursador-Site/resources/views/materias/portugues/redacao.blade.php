<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Adicione seu CSS aqui */
        .loading {
            display: none;
            font-size: 16px;
            color: black;
        }
    </style>
</head>

<body>
    <x-app-layout>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
                <p class="mb-4 text-gray-500 inline-block mx-2">></p> <!-- Adicionei uma margem horizontal -->
                <a href="{{ route('materias', ['section' => 'biologia']) }}#biologia" class="mb-4 text-gray-500 underline inline-block">Biologia</a>


                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                    <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Redação</h1>
                    <p>A genética é a ciência que estuda os genes, a hereditariedade e a variação dos organismos vivos. Essa
                        área da biologia investiga como as características são transmitidas de uma geração para outra e como
                        essas informações são codificadas, expressas e controladas em organismos vivos.</p>
                    <img class="mt-6 w-96" src="{{asset('imagens/geneticabiologia.avif')}}" alt="">
                    <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                    <div class="mb-4 mt-4">
                        <ul>
                            <li><a href="#o-que-e-genetica" class="text-kblue hover:text-black hover:!text-black">1- O que é genética</a></li>
                            <li><a href="#historia-da-genetica" class="text-kblue hover:text-black hover:!text-black">2- História da genética</a></li>
                            <li><a href="#conceitos-basicos" class="text-kblue hover:text-black hover:!text-black">3- Conceitos Básicos</a></li>
                            <li><a href="#gregor-mendel" class="text-kblue hover:text-black hover:!text-black">4- Gregor Mendel</a></li>
                            <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black ">5- Exercicios</a></li>
                        </ul>
                    </div>
                    

                        <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Corrija sua redação aqui</h2><br>
                        <form id="essay-form">
                            @csrf
                            <textarea name="essay" class="text-black" id="essay" rows="15" cols="130" placeholder="Digite sua redação aqui..."></textarea>
                            <br><br>
                            <button style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;" type="submit">Enviar</button>
                        </form>
                        <div id="result" style="margin-top: 20px;" class="text-black"></div>
                        <div class="loading">Carregando...</div>

                        <script>
                            $(document).ready(function() {
                                $('#essay-form').on('submit', function(event) {
                                    event.preventDefault();

                                    // Mostrar a animação de carregamento
                                    $('.loading').show();
                                    $('#result').html('');

                                    $.ajax({
                                        url: "{{ route('essay.submit') }}",
                                        method: "POST",
                                        data: {
                                            _token: $('input[name="_token"]').val(),
                                            essay: $('#essay').val()
                                        },
                                        success: function(response) {
                                            // Esconder a animação de carregamento
                                            $('.loading').hide();

                                            if (response.correctedEssay) {
                                                $('#result').html('<p>' + response.correctedEssay + '</p>');
                                            } else if (response.error) {
                                                $('#result').html('<p>Erro: ' + response.error + '</p>');
                                            }
                                        },
                                        error: function(xhr) {
                                            // Esconder a animação de carregamento
                                            $('.loading').hide();

                                            console.log(xhr.responseText); // Adicione esta linha para verificar a resposta do erro
                                            $('#result').html('<p>Ocorreu um erro ao processar sua redação. Por favor, tente novamente.</p>');
                                        }
                                    });
                                });
                            });
                        </script>
    </x-app-layout>
</body>

</html>