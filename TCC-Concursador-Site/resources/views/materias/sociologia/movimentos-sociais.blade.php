<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p> <!-- Adicionei uma margem horizontal -->
            <a href="{{ route('materias', ['section' => 'sociologia']) }}#sociologia" class="mb-4 text-gray-500 underline inline-block">Sociologia</a>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Movimentos Sociais</h1>
                <p class="text-black">
                    Movimentos sociais são formas de organização e ação coletiva de grupos ou indivíduos que buscam mudanças sociais, políticas, econômicas ou culturais.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/movimentos.jpg')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#o-que-sao-movimentos-sociais" class="text-kblue hover:text-black hover:!text-black">1- O que são movimentos sociais</a></li>
                        <li><a href="#origem-dos-movimentos" class="text-kblue hover:text-black hover:!text-black">2- Origem dos movimentos sociais</a></li>
                        <li><a href="#principais-movimentos" class="text-kblue hover:text-black hover:!text-black">3- Principais movimentos sociais</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4- Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="o-que-sao-movimentos-sociais" class="text-3xl font-Montserrat font-bold text-black mb-4">O que são movimentos sociais</h2>
                <p class="text-justify mb-4 text-black">Movimentos sociais são formas de ação coletiva que buscam transformar ou resistir a estruturas de poder, políticas ou sociais, geralmente em resposta a tensões e desigualdades. Eles podem surgir em diversos contextos e com objetivos variados, como a luta por direitos civis, mudanças políticas ou econômicas, e a promoção da justiça social.

                    <br><br>De acordo com pensadores como Karl Marx, Max Weber e Émile Durkheim, os movimentos sociais são manifestações de tensões sociais, mas são vistos de formas distintas. Para Marx, são a expressão da luta de classes, fundamentais para uma revolução; Weber os vê como uma possível busca por nova ordem burocrática; e Durkheim os interpreta como formas de restaurar a coesão social. Por outro lado, pensadores conservadores como Gustave Le Bon e José Ortega y Gasset acreditam que os movimentos sociais, especialmente os de massa, são irracionais e podem ameaçar a ordem social.

                    <br><b></b>Historicamente, grandes movimentos sociais como a Revolução Francesa (1789) e o movimento sufragista (direito de voto feminino) são exemplos de como as mobilizações populares podem provocar mudanças profundas, seja por revoluções ou por lutas por direitos.
                </p>

                <h2 id="origem-dos-movimentos" class="text-3xl font-Montserrat font-bold text-black mb-4">Origem dos movimentos sociais</h2>
                <p class="text-justify mb-4 text-black">
                    Os movimentos sociais surgem como resposta a desigualdades e opressões em várias sociedades. No final do século XIX e início do XX, com a Revolução Industrial, os sindicatos foram fundados para lutar contra a exploração dos trabalhadores, influenciados por ideais marxistas e por movimentos socialistas e anarquistas que buscavam uma revolução contra o sistema capitalista.

                    <br><br>Na década de 1960, após a Segunda Guerra Mundial, os movimentos sociais se diversificaram. Nos Estados Unidos e na África do Sul, a luta contra o racismo e a segregação racial ganhou força, enquanto as mulheres começaram a se organizar pela igualdade de direitos, marcando a segunda onda do feminismo. O movimento LGBTQ+ também se fortaleceu, especialmente após o Levante de Stonewall em 1969, que originou a Parada do Orgulho LGBTQ+.

                    <br><br>Nesse período, figuras como Angela Davis se tornaram símbolos da luta pelos direitos civis e das mulheres. Esses movimentos refletem a crescente mobilização de grupos marginalizados em busca de justiça social, igualdade de direitos e liberdade, que continuam a influenciar as mudanças sociais até hoje.
                </p>
                <div class="flex justify-center">
                    <img class="p-1 mb-4" src="{{asset('imagens/movimentos2.jpg')}}" alt="">
                </div>
                <h2 id="principais-movimentos" class="text-3xl font-Montserrat font-bold text-black mb-4">Principais movimentos sociais</h2>
                <p class="text-justify mb-4 text-black"> Os principais movimentos sociais surgem como respostas a desigualdades e opressões em diversas áreas. Alguns dos mais importantes incluem:

                    <br><br>Movimento Trabalhista: Surgiu para combater a exploração dos trabalhadores durante a Revolução Industrial, com foco em melhores condições de trabalho, salários e direitos trabalhistas.

                    <br><br>Movimento Feminista: Luta pela igualdade de gênero, direitos civis, e pelo fim da discriminação contra as mulheres. Dividido em várias ondas, abrange desde o direito ao voto até questões de igualdade no trabalho e autonomia reprodutiva.

                    <br><br>Movimento Negro e Antirracista: Combate o racismo e luta pela igualdade racial. Destaca-se na luta pelos direitos civis nos Estados Unidos e contra o apartheid na África do Sul.

                    <br><br>Movimento LGBTQ+: Busca direitos civis, liberdade sexual e igualdade para lésbicas, gays, bissexuais, transexuais e outras identidades de gênero. O Levante de Stonewall (1969) foi um marco importante desse movimento.

                    <br><br>Movimento Ambientalista: Foca na proteção do meio ambiente, combate à poluição e às mudanças climáticas, e busca promover a sustentabilidade e a preservação dos recursos naturais.

                    <br><br>Movimento dos Direitos Humanos: Luta pela garantia dos direitos fundamentais de todos os indivíduos, como liberdade de expressão, direito à educação e igualdade social.

                    <br><br>Movimento Indígena: Defende os direitos territoriais, culturais e de autodeterminação dos povos indígenas, protegendo suas terras e tradições.

                    <br><br>Movimento Pacifista: Promove a não-violência e o fim dos conflitos armados, com destaque para figuras como Gandhi e Martin Luther King Jr..

                    <br><br>Movimento Occupy: Surgiu contra a desigualdade econômica e o poder das grandes corporações, simbolizado pelo lema "Nós somos os 99%".

                    <br><br>Movimento Anti-globalização: Critica a concentração de poder econômico e os impactos negativos da globalização no meio ambiente e nas sociedades.

                    <br><br>Esses movimentos buscam, em diferentes contextos, combater desigualdades, promover direitos e construir uma sociedade mais justa e igualitária.

                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) O que são movimentos sociais?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Organizações governamentais que buscam regular a economia.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Movimentos que apenas buscam reformar leis já existentes, sem alterar estruturas de poder.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Formas de ação coletiva que buscam transformar ou resistir a estruturas de poder, políticas ou sociais.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Grupos sociais que têm como objetivo o fortalecimento de um único partido político.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Qual a principal diferença entre a visão de Karl Marx e a de Max Weber sobre os movimentos sociais?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Marx acredita que os movimentos sociais buscam reformar o capitalismo, enquanto Weber os vê como uma expressão de resistência à burocracia./span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Marx vê os movimentos sociais como uma luta de classes, enquanto Weber os vê como uma busca por uma nova ordem burocrática.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Marx acredita que os movimentos sociais não têm relevância, enquanto Weber os vê como manifestações de coesão social.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Ambos veem os movimentos sociais como uma forma de manter a ordem social e política existente.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>3) Qual foi um dos marcos do movimento LGBTQ+ que ocorreu na década de 1960?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) O início da Parada do Orgulho Gay, após a Revolução Francesa.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B)A legalização do casamento entre pessoas do mesmo sexo em todos os países.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) O Levante de Stonewall, em 1969, que originou a Parada do Orgulho LGBTQ+.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) A fundação dos primeiros sindicatos de trabalhadores LGBTQ+.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) Qual dos seguintes movimentos sociais surgiu principalmente como resposta às condições de trabalho durante a Revolução Industrial? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) Movimento Feminista.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Movimento Ambientalista.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) Movimento Trabalhista.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) Movimento Pacifista.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) Qual movimento social surgiu como resposta à opressão racial e buscou principalmente a igualdade civil nos Estados Unidos e o fim do apartheid na África do Sul? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) Movimento Ambientalista.<span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) Movimento Feminista.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) Movimento Negro e Antirracista.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) Movimento Pacifista.</span></li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        function checkAnswer(event, question) {
            // Remove estilos anteriores
            const radios = document.getElementsByName(question);
            radios.forEach(radio => {
                const label = radio.parentElement;
                label.classList.remove('radio-checked', 'radio-wrong');
            });

            // Adiciona a classe apropriada
            const selectedLabel = event.target.parentElement;
            if (event.target.value === "1") {
                selectedLabel.classList.add('radio-checked');
            } else {
                selectedLabel.classList.add('radio-wrong');

                const correctRadio = Array.from(radios).find(r => r.value === "1");
                if (correctRadio) {
                    const correctLabel = correctRadio.parentElement;
                    correctLabel.classList.add('radio-checked');
                }
            }
        }
    </script>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault(); // Evita o comportamento padrão de rolagem

                const targetId = this.getAttribute('href'); // Obtém o ID do elemento de destino
                const targetElement = document.querySelector(targetId); // Seleciona o elemento de destino

                // Realiza a rolagem suave para o elemento de destino
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start' // Faz o scroll para o início do elemento
                });
            });
        });
    </script>
</x-app-layout>