<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<x-app-layout>
    <style>
        .radio-container {
            display: flex;
            align-items: center;
            margin: 8px 0;
            cursor: pointer;

            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .radio-checked {
            background-color: green;
            /* Fundo verde para resposta correta */
            color: white;
        }

        .radio-wrong {
            background-color: red;
            /* Fundo vermelho para resposta errada */
            color: white;
        }

        .radio-text {
            margin-left: 10px;
            /* Espaçamento entre o botão e o texto */
        }

        html {
            scroll-behavior: smooth;
            /* Adiciona rolagem suave ao clicar em links âncora */
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p> <!-- Adicionei uma margem horizontal -->
            <a href="{{ route('materias', ['section' => 'biologia']) }}#biologia" class="mb-4 text-gray-500 underline inline-block">Biologia</a>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Evolução</h1>
                <p class="text-black">A evolução é um dos conceitos centrais da biologia e se refere ao processo pelo qual as espécies de organismos vivos mudam ao longo do tempo.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/evolucao.webp')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#o-que-e-evolucao" class="text-kblue hover:text-black hover:!text-black">1- O que é evolução</a></li>
                        <li><a href="#evidencias-da-evolucao" class="text-kblue hover:text-black hover:!text-black">2- Evidências da Evolução</a></li>
                        <li><a href="#teoria-da-evolucao" class="text-kblue hover:text-black hover:!text-black">3- Teoria da evolução</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4- Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="o-que-e-evolucao" class="text-3xl font-Montserrat font-bold text-black mb-4">O que é evolução</h2>
                <p class="text-justify mb-4 text-black">Os fósseis são restos ou vestígios de organismos que viveram no passado e ficaram preservados, como ossos, conchas, dentes, pegadas e até vestígios de tecidos. Eles fornecem informações cruciais sobre como eram os organismos e os ambientes em que viveram. A sequência de fósseis encontrados nas camadas geológicas permite observar a evolução gradual das espécies, mostrando como elas mudaram ao longo de milhões de anos e como algumas deram origem a novas espécies. Além disso, fósseis intermediários, que apresentam características de grupos distintos de seres vivos, ajudam a compreender as transições evolutivas entre espécies.
                </p>

                <h2 id="evidencias-da-evolucao" class="text-3xl font-Montserrat font-bold text-black mb-4">Evidências da evolução</h2>
                <p class="text-justify mb-4 text-black">
                    Existem diversas evidências científicas que sustentam a teoria de que as espécies sofreram mudanças ao longo do tempo e compartilham ancestrais comuns. Algumas das principais evidências incluem:

                    <br><br> <span class="font-bold">• Fósseis:</span> Os fósseis são restos ou vestígios de organismos que viveram no passado e ficaram preservados, como ossos, conchas, dentes, pegadas e até vestígios de tecidos. Eles fornecem informações cruciais sobre como eram os organismos e os ambientes em que viveram. A sequência de fósseis encontrados nas camadas geológicas permite observar a evolução gradual das espécies, mostrando como elas mudaram ao longo de milhões de anos e como algumas deram origem a novas espécies. Além disso, fósseis intermediários, que apresentam características de grupos distintos de seres vivos, ajudam a compreender as transições evolutivas entre espécies.

                    <br><br> <span class="font-bold">• Órgãos Homólogos:</span> Os órgãos homólogos são estruturas que, apesar de desempenharem funções diferentes em organismos distintos, têm uma origem embrionária comum. Por exemplo, se compararmos os membros anteriores de seres humanos, cães e baleias, veremos que todos possuem o mesmo padrão de ossos (úmero, rádio, ulna, etc.), embora desempenhem funções diferentes, como locomoção em terra (cães), manipulação de objetos (humanos) e nadar (baleias). Isso sugere que esses animais compartilham um ancestral comum, e as diferenças surgiram devido à adaptação de cada grupo ao seu ambiente.

                    <br><br> <span class="font-bold">• Órgãos Vestigiais:</span> Os órgãos vestigiais são estruturas que, ao longo da evolução, perderam a função original que possuíam em espécies ancestrais. Um exemplo clássico são as pernas vestigiais encontradas em algumas espécies de serpentes. Essas pernas são muito pequenas e não têm função no movimento, mas indicam que esses animais, no passado, tinham uma forma de locomoção diferente e perderam essa capacidade ao longo da evolução. Outros exemplos incluem o apêndice nos humanos, que já teve uma função digestiva em nossos ancestrais, mas hoje desempenha um papel muito reduzido.

                    <br><br> <span class="font-bold">• Evidências Celulares e Moleculares:</span> No nível molecular e celular, as semelhanças entre os seres vivos também fornecem fortes evidências da evolução. A genética moderna tem sido essencial para reforçar a teoria evolutiva. Por exemplo, o genoma do bonobo, um primata que compartilha 98,7% do seu DNA com os humanos, é uma forte evidência de que humanos e bonobos têm um ancestral comum recente. Semelhanças também são observadas em outras áreas, como a estrutura das células (todas as células eucarióticas compartilham características básicas) e proteínas, que são extremamente semelhantes entre espécies distantes.

                    <br><br> <span class="font-bold">• Biogeografia: </span> A biogeografia também oferece evidências importantes sobre a evolução. O estudo da distribuição geográfica das espécies ao redor do mundo mostra padrões que podem ser explicados pela evolução. Espécies semelhantes podem ser encontradas em continentes diferentes, mas em ambientes similares, sugerindo que essas espécies se originaram de um ancestral comum e, posteriormente, se adaptaram a condições locais. Um exemplo é a fauna da Austrália, onde os marsupiais predominam, enquanto em outros continentes, mamíferos placentários são mais comuns.
                </p>
                <div class="flex justify-center">
                    <img class="mt-6 w-96" src="{{asset('imagens/fosseis.webp')}}" alt="">
                </div>
                <h2 id="conceitos-basicos" class="text-3xl font-Montserrat font-bold text-black mb-4">Teoria da evolução</h2>
                <p class="text-justify mb-4 text-black"> <span class="font-bold"></span>As teorias da evolução oferecem diferentes explicações para como as espécies mudam ao longo do tempo. As principais teorias são o Lamarckismo, o Darwinismo e o Neodarwinismo. Cada uma delas teve um impacto significativo na compreensão da evolução, com algumas sendo posteriormente modificadas à medida que novos conhecimentos científicos foram adquiridos.

                    <br><br> <span class="font-bold">• Lamarckismo:</span> O Lamarckismo foi proposto por Jean-Baptiste Lamarck no início do século XIX. Lamarck acreditava que as espécies evoluíam de maneira gradual e contínua, e que as mudanças ocorriam devido a dois processos principais:

                        <br><br>Uso e desuso: Lamarck sugeria que os órgãos que eram mais usados por um organismo se tornavam mais desenvolvidos, enquanto os órgãos pouco usados se atrofiavam. Por exemplo, ele acreditava que os peixes que viviam em águas profundas, onde a luz era escassa, não precisavam de visão bem desenvolvida e, portanto, seus olhos se atrofiavam.

                        <br><br>Transmissão dos caracteres adquiridos: Segundo Lamarck, as características adquiridas durante a vida de um indivíduo seriam passadas para seus descendentes. Por exemplo, se um animal desenvolvesse músculos fortes devido ao uso constante, essa característica seria transmitida para sua prole.
                        <br><br>Embora as ideias de Lamarck tenham sido importantes no início do estudo da evolução, elas foram posteriormente refutadas, principalmente a transmissão dos caracteres adquiridos, que não é suportada pela genética moderna. Características adquiridas ao longo da vida de um indivíduo, como músculos desenvolvidos, não são passadas para a descendência, pois não alteram o material genético.

                    <br><br> <span class="font-bold">• Darwinismo:</span> A teoria de Darwin, ou Darwinismo, foi proposta por Charles Darwin em meados do século XIX e se tornou a base para a teoria evolutiva moderna. Em seu livro "A Origem das Espécies" (1859), Darwin apresentou uma nova explicação para a evolução das espécies:

                        <br><br>Ancestralidade comum: Darwin propôs que todas as espécies compartilham um ancestral comum e evoluem ao longo do tempo por meio de um processo de descendência com modificação. Isso significa que as espécies atuais descendem de formas de vida anteriores, mas com mudanças graduais.

                        <br><br>Variabilidade e seleção natural: Darwin observou que, dentro de uma população, existem diferenças naturais entre os indivíduos, e essas diferenças podem influenciar a sobrevivência e a reprodução. No processo de seleção natural, os indivíduos que possuem características mais vantajosas para o ambiente têm mais chances de sobreviver e se reproduzir. Assim, essas características vantajosas se tornam mais comuns nas gerações seguintes. Um exemplo clássico de Darwin é o caso das girafas: ele propôs que girafas com pescoços mais longos tinham uma vantagem na competição por alimentos em árvores altas, e, portanto, essas girafas teriam mais chances de sobrevivência e reprodução, transmitindo seus genes para a próxima geração. 
                        <br><br>Apesar de Darwin ter sido o principal responsável por popularizar a seleção natural, outro naturalista, Alfred Russel Wallace, chegou a conclusões semelhantes e apresentou suas ideias de maneira independente. Ambos compartilharam suas descobertas em uma reunião da Sociedade Lineana de Londres em 1853, mas Darwin publicou seu trabalho antes e ficou amplamente reconhecido como o principal defensor da teoria.

                    <br><br> <span class="font-bold">• Neodarwinismo: </span>O Neodarwinismo, também conhecido como Teoria Sintética da Evolução, surgiu no século XX como uma atualização do Darwinismo. Embora mantenha os princípios básicos de Darwin, como a seleção natural e a ancestralidade comum, o Neodarwinismo incorpora descobertas genéticas que não estavam disponíveis no tempo de Darwin:

                        <br><br>Mutação: A teoria neodarwinista reconhece que a variabilidade genética entre os indivíduos de uma população é gerada principalmente por mutações no DNA, que ocorrem de forma aleatória e podem ser benéficas, neutras ou prejudiciais. Essas mutações geram novas variantes genéticas, que podem ser favorecidas ou eliminadas pela seleção natural.

                        <br><br>Recombinação genética e deriva genética: Além das mutações, a recombinação genética durante a formação dos gametas (células sexuais) também gera diversidade genética. A deriva genética, que ocorre em populações pequenas, é outro processo que pode alterar a frequência de genes de maneira aleatória.
                        <br><br>O Neodarwinismo conseguiu integrar os conceitos de genética e evolução, explicando como as mutacões genéticas e os mecanismos genéticos (como a recombinação e a deriva genética) contribuem para a evolução das espécies. Assim, o Neodarwinismo é visto como uma versão mais completa da teoria evolutiva, pois combina as ideias de Darwin com os conhecimentos da genética moderna.
                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) O que é a evolução?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) O processo pelo qual as espécies permanecem inalteradas ao longo do tempo.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) O processo que explica a origem das espécies por meio da criação divina.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) O processo pelo qual as espécies de organismos vivos mudam ao longo do tempo.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) O processo de adaptação de um único organismo a um novo ambiente.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Qual das alternativas abaixo é uma evidência da evolução?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) A constância das características das espécies ao longo das gerações.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Fósseis que mostram as mudanças graduais das espécies ao longo do tempo.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) A criação de novas espécies por força divina.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) O comportamento das espécies em condições controladas.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>3) Qual é o conceito central da teoria de Lamarck?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) A seleção natural como a principal força impulsionadora da evolução.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) A origem das espécies a partir de um ancestral comum.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) A ideia de que as características adquiridas durante a vida de um organismo são passadas para seus descendentes.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) O entendimento de que todas as mudanças evolutivas ocorrem por mutações aleatórias.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) O que Charles Darwin propôs na sua teoria da seleção natural? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) A variabilidade entre os indivíduos de uma espécie é a base para a seleção natural, onde os mais aptos sobrevivem e se reproduzem.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) A evolução ocorre exclusivamente por mutações genéticas aleatórias.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) As espécies surgem de forma espontânea e não evoluem ao longo do tempo.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) Todas as mudanças nas espécies são causadas por forças sobrenaturais.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) O que é Neodarwinismo? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) Uma teoria que afirma que as espécies são criadas por um ser divino.></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) A teoria de que a evolução ocorre exclusivamente pela mutação genética.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) A teoria que afirma que a evolução ocorre apenas por mecanismos ambientais, sem influência genética.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) Uma atualização do Darwinismo que incorpora conhecimentos modernos sobre genética, como mutações e recombinação genética.</span></li>


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