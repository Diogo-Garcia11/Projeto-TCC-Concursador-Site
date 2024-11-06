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
</head>

<body>
    <x-app-layout>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
                <p class="mb-4 text-gray-500 inline-block mx-2">></p> <!-- Adicionei uma margem horizontal -->
                <a href="{{ route('materias', ['section' => 'biologia']) }}#biologia" class="mb-4 text-gray-500 underline inline-block">Biologia</a>


                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                    <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Genética</h1>
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
                            <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black ">4- Exercicios</a></li>
                        </ul>
                    </div>
                    <h2 id="o-que-e-genetica" class="text-3xl font-Montserrat font-bold text-black mb-4">O que é genética</h2>
                    <p class="text-justify mb-4">A Genética é uma ramificação fundamental da Biologia que se dedica ao
                        estudo da hereditariedade, ou seja, como as características são transmitidas dos pais para seus
                        descendentes. Central nesse processo, encontramos o DNA (ácido desoxirribonucleico), que é a
                        molécula responsável por carregar as informações genéticas. Essas informações são passadas para os
                        descendentes durante a fecundação, que ocorre quando os gametas — o óvulo feminino e o
                        espermatozoide masculino — se unem. Cada gameta contém um conjunto completo de informações
                        hereditárias essenciais para o desenvolvimento de um novo organismo, organizadas em unidades
                        chamadas genes.

                        Os genes desempenham um papel crucial na expressão das características de um organismo, uma vez que
                        eles codificam a produção de proteínas, que são substâncias vitais para a formação e o funcionamento
                        das células. A síntese de proteínas é, portanto, o processo pelo qual as instruções contidas nos
                        genes são "traduzidas" em estruturas funcionais que realizam as atividades necessárias para a vida.
                    </p>

                    <h2 id="historia-da-genetica" class="text-3xl font-Montserrat font-bold text-black mb-4">História da genética</h2>
                    <p class="text-justify mb-4">A história da Genética é marcada por questionamentos e investigações que
                        surgem da busca por respostas sobre a hereditariedade e a transmissão de características entre
                        gerações. Essa jornada científica começou há cerca de 2.400 anos, por volta de 410 a.C., com a
                        introdução da teoria da Pangênese, proposta por Hipócrates. Ele sugeriu que os órgãos do corpo
                        humano produziam pequenas partículas chamadas "gêmulas", que carregavam características que seriam
                        passadas aos descendentes. No entanto, essa teoria permaneceu sem contestação por muitos séculos.

                        <br><br>Foi somente no século XIX que a Genética começou a tomar forma como um campo científico
                        estruturado, graças aos estudos do monge Gregor Mendel (1822-1884), que é amplamente reconhecido
                        como o pai da Genética. Mendel conduziu experimentos inovadores com ervilhas, cruzando diferentes
                        linhagens para observar como as características eram transmitidas de uma geração para outra.

                        <br><br>Ao realizar cruzamentos entre ervilhas de linhagens puras — uma de cor amarela e outra de
                        cor verde — Mendel observou que a primeira geração de descendentes, chamada de geração F1,
                        apresentava apenas sementes amarelas. Intrigado, ele então cruzou essas ervilhas da geração F1 entre
                        si e notou que na geração seguinte os descendentes apareciam em cores distintas, numa proporção de
                        3:1, com três ervilhas amarelas para cada ervilha verde.

                        <br><br>A partir desses experimentos, Mendel formulou a primeira lei da herança, conhecida como a
                        Lei da Segregação. Essa lei estabelece que, durante a formação dos gametas (células sexuais), os
                        pares de fatores hereditários — chamados de alelos — se separam, de modo que cada gameta recebe
                        apenas um alelo de cada par.

                        <br><br>Mendel continuou seus estudos, cruzando ervilhas com características diferentes, como cor e
                        textura, e observou uma nova proporção de 9:3:3:1 entre as diferentes características na geração
                        seguinte. Esse trabalho levou à formulação da segunda lei de Mendel, a Lei da Segregação
                        Independente, que afirma que diferentes pares de alelos segregam-se de maneira independente durante
                        a formação dos gametas.

                        <br><br>Apesar da importância de suas descobertas, os trabalhos de Mendel não foram devidamente
                        reconhecidos até o início do século XX. Somente após 1900, botânicos como Hugo de Vries, Carl
                        Correns e Erich Tschermak, ao estudarem plantas híbridas, redescobriram e valorizaram suas
                        contribuições.

                        <br><br>Com o passar do tempo, a Genética continuou a evoluir, especialmente após a descoberta da
                        estrutura de dupla hélice do DNA, creditada a Rosalind Franklin, James Watson, Francis Crick e
                        Maurice Wilkins. Esse marco revolucionou a compreensão sobre como a informação genética é armazenada
                        e transmitida.

                        <br><br>Hoje, a Genética está na vanguarda de muitos avanços científicos, especialmente na área
                        médica, onde é fundamental para a identificação de doenças e o mapeamento genético. As pesquisas
                        atuais buscam aplicar esses conhecimentos para melhorar a saúde da população e desenvolver novas
                        abordagens para o tratamento de doenças genéticas.

                        brOs genes desempenham um papel crucial na expressão das características de um organismo, uma vez
                        que eles codificam a produção de proteínas, que são substâncias vitais para a formação e o
                        funcionamento das células. A síntese de proteínas é, portanto, o processo pelo qual as instruções
                        contidas nos genes são "traduzidas" em estruturas funcionais que realizam as atividades necessárias
                        para a vida.
                    </p>
                    <div class="flex justify-center">
                        <img class="p-1 mb-4" src="{{asset('imagens/mendel.jpg')}}" alt="">
                    </div>
                    <h2 id="conceitos-basicos" class="text-3xl font-Montserrat font-bold text-black mb-4">Conceitos Básicos</h2>
                    <class="text-justify mb-4"> <span class="font-bold">• DNA (Ácido Desoxirribonucleico):</span> O DNA é a
                        molécula que contém toda a informação genética necessária para o desenvolvimento e funcionamento de
                        um organismo. Ele é formado por duas cadeias que se entrelaçam, formando uma estrutura conhecida
                        como dupla hélice.

                        <br><br> <span class="font-bold">• Cromossomos:</span> São estruturas que contêm DNA compactado. O
                        DNA se enrola em proteínas chamadas histonas, formando os cromossomos, que se tornam visíveis
                        durante a divisão celular. Os seres humanos possuem 46 cromossomos, organizados em 23 pares.

                        <br><br> <span class="font-bold">• Genes:</span> Os genes são segmentos específicos de DNA
                        localizados em locais determinados nos cromossomos. Eles são responsáveis pela codificação de
                        proteínas, que desempenham funções essenciais nas células e influenciam características físicas e
                        funcionais do organismo.

                        <br><br> <span class="font-bold">• Lócus:</span> O lócus refere-se à localização específica de um
                        gene em um cromossomo. Cada gene ocupa um lugar definido, que pode ser identificado e estudado.

                        <br><br> <span class="font-bold">• Alelos:</span> Os alelos são diferentes variantes de um mesmo
                        gene que ocupam o mesmo lócus em cromossomos homólogos. Por exemplo, um gene que determina a cor dos
                        olhos pode ter alelos para olhos azuis ou marrons.

                        <br><br> <span class="font-bold">• Características Dominantes e Recessivas:</span>

                        <br><br>Dominante: Uma característica é considerada dominante quando apenas um alelo é necessário
                        para sua manifestação. Isso significa que, mesmo que o organismo seja heterozigoto (possui alelos
                        diferentes), a característica dominante se manifestará.
                        <br><br>Recessiva: Em contraste, uma característica recessiva só se manifesta quando o organismo é
                        homozigoto (possui dois alelos iguais). Isso significa que é preciso ter duas cópias do alelo
                        recessivo para que a característica apareça.

                        <br><br> <span class="font-bold">• Cromossomos Sexuais:</span> Em humanos, os cromossomos sexuais
                        são os cromossomos X e Y, que determinam o sexo do indivíduo. As mulheres possuem dois cromossomos X
                        (XX), enquanto os homens possuem um cromossomo X e um Y (XY).

                        <br><br> <span class="font-bold">• Cromossomos Homólogos:</span> Esses cromossomos têm a mesma
                        sequência de genes (lócus), mas podem ter alelos diferentes. Por exemplo, um cromossomo pode ter o
                        alelo para olhos azuis, enquanto o homólogo pode ter o alelo para olhos marrons.

                        <br><br> <span class="font-bold">• Diploide e Haploide:</span>

                        <br><br>Diploide: Refere-se ao número total de cromossomos em células somáticas (não sexuais), que
                        em humanos é 46. As células diploides contêm dois conjuntos de cromossomos, um de cada progenitor.
                        <br><br>Haploide: Diz respeito ao número de cromossomos em gametas (óvulos e espermatozoides), que
                        possuem apenas 23 cromossomos, ou seja, um de cada par.

                        <br><br> <span class="font-bold">• Genoma:</span> O genoma é o conjunto completo de DNA de um
                        organismo, incluindo todos os seus genes. Ele contém a informação necessária para o desenvolvimento,
                        funcionamento e reprodução do ser vivo.

                        <br><br> <span class="font-bold">• Genótipo e Fenótipo:</span>

                        <br><br>Genótipo: Representa a composição genética de um organismo, ou seja, a combinação de alelos
                        que possui.
                        <br><br>Fenótipo: É a expressão externa do genótipo, que inclui características observáveis como cor
                        dos olhos, altura e outras traits. O fenótipo pode ser influenciado pelo ambiente, interagindo com a
                        genética do organismo.

                        <br><br> <span class="font-bold">• Heterozigoto e Homozigoto:</span>

                        <br><br>Heterozigoto: Refere-se a um indivíduo que possui alelos diferentes em um mesmo lócus. Por
                        exemplo, se o gene para a cor dos olhos tiver um alelo para azul e outro para marrom, o indivíduo é
                        heterozigoto.
                        <br><br>Homozigoto: Refere-se a um indivíduo que possui alelos iguais em um mesmo lócus, como ter
                        dois alelos para olhos azuis.</p>

                        <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Corrija sua redação aqui</h2><br>
                        <form id="essay-form">
                            @csrf
                            <textarea name="essay" class="text-black" id="essay" rows="15" cols="130" placeholder="Digite sua redação aqui..."></textarea>
                            <br><br>
                            <button style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;" type="submit">Enviar</button>
                        </form>
                        <div id="result" style="margin-top: 20px;" class="text-black"></div>

                        <script>
                            $(document).ready(function() {
                                $('#essay-form').on('submit', function(event) {
                                    event.preventDefault();

                                    $.ajax({
                                        url: "{{ route('essay.submit') }}",
                                        method: "POST",
                                        data: {
                                            _token: $('input[name="_token"]').val(),
                                            essay: $('#essay').val()
                                        },
                                        success: function(response) {
                                            $('#result').html('<p>' + response.correctedEssay + '</p>');
                                        },
                                        error: function(xhr) {
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