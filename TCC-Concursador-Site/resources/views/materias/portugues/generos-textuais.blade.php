<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p> <!-- Adicionei uma margem horizontal -->
            <a href="{{ route('materias', ['section' => 'portugues']) }}#portugues"
                class="mb-4 text-gray-500 underline inline-block">Português</a>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Gêneros textuais</h1>
                <p class="text-black">Gêneros textuais são formas de comunicação utilizadas em diferentes contextos
                    sociais e organizadas de acordo com a intenção e o público-alvo.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/portugues.jpg')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#primeiro" class="text-kblue hover:text-black hover:!text-black">1- O
                                que é gênero textual?</a></li>
                        <li><a href="#segundo" class="text-kblue hover:text-black hover:!text-black">2-
                                Principais gêneros textuais</a></li>
                        <li><a href="#terceiro" class="text-kblue hover:text-black hover:!text-black">3-
                                Importância dos Gêneros Textuais no ENEM</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4-
                                Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="primeiro" class="text-3xl font-Montserrat font-bold text-black mb-4">O que é gênero
                    textual</h2>
                <p class="text-justify mb-4 text-black">Os gêneros textuais são diferentes tipos de textos, verbais e
                    não verbais, que usamos para nos comunicar no dia a dia. Cada gênero possui características
                    próprias, como estrutura e estilo, que se adaptam à sua função comunicativa. Esses textos são
                    organizados em gêneros específicos, cada um com um objetivo definido para facilitar a interação e
                    compreensão entre as pessoas.

                    Conhecer as características dos diversos gêneros textuais é essencial para uma comunicação eficaz.
                    Isso nos permite escolher o tipo de texto adequado para cada situação, seja para escrever uma carta,
                    um bilhete ou uma notícia, já que existem muitos gêneros textuais que servem para diferentes
                    finalidades em nossas práticas sociais.
                </p>

                <h2 id="segundo" class="text-3xl font-Montserrat font-bold text-black mb-4">Principais gêneros textuais
                </h2>
                <p class="text-justify mb-4 text-black">
                    Aqui estão alguns dos principais gêneros textuais e suas características:

                    <br><br>Narrativo: Relata uma sequência de eventos, geralmente envolvendo personagens, tempo e
                    espaço.
                    Exemplos incluem contos, crônicas e romances. São narrativas que podem expressar emoções, transmitir
                    mensagens e entreter.

                    <br><br>Descritivo: Focado em descrever pessoas, lugares, objetos ou sentimentos de forma detalhada.
                    É comum
                    em poesias, retratos e até em anúncios publicitários, pois busca criar uma imagem mental precisa.

                    <br><br>Dissertativo-Argumentativo: Apresenta uma tese ou ponto de vista e desenvolve argumentos
                    para
                    defendê-la. Esse gênero é amplamente usado em redações (como a do próprio ENEM) e textos opinativos,
                    como artigos e editoriais.

                    <br><br>Injuntivo: Fornece instruções, orientações ou ordens para realizar uma ação. É o caso das
                    receitas,
                    manuais de instrução e bulas de remédio, onde o objetivo é orientar o leitor a seguir passos
                    específicos.

                    <br><br>Expositivo: Destina-se a informar, explicar ou expor uma ideia ou conceito. Está presente em
                    textos
                    informativos, como notícias, resumos e ensaios. A linguagem é geralmente objetiva e clara.
                </p>


                <h2 id="conceitos-basicos" class="text-3xl font-Montserrat font-bold text-black mb-4">Importância dos
                    Gêneros Textuais no ENEM
                </h2>
                <p class="text-justify mb-4 text-black"> O ENEM valoriza o conhecimento dos gêneros textuais, pois cada
                    um deles reflete um uso específico da língua em contextos reais. Saber identificar o gênero de um
                    texto ajuda o candidato a entender melhor o propósito e a estrutura do conteúdo, facilitando a
                    interpretação.

                    <br><br>Além disso, o domínio dos gêneros textuais é crucial para a produção textual na prova de redação. No
                    ENEM, é exigido um texto dissertativo-argumentativo, onde o candidato deve defender um ponto de
                    vista de maneira estruturada e coerente, usando argumentos sólidos.
                    Exemplos Práticos

                    <br><br>Em uma questão que apresente uma crônica (gênero narrativo), espera-se que o candidato identifique o
                    tom reflexivo ou crítico sobre a vida cotidiana.
                    Um editorial (gênero dissertativo-argumentativo) exige atenção ao posicionamento e aos argumentos do
                    autor.
                    Uma tirinha (muitas vezes usada para interpretação de texto) envolve conhecimento de linguagem
                    informal e humor, e, frequentemente, o uso de figuras de linguagem.

                    <br><br>Assim, estudar os gêneros textuais permite ao candidato desenvolver habilidades essenciais de
                    leitura, interpretação e escrita, além de melhorar o entendimento dos contextos e funções de cada
                    tipo de texto.
                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) O que são gêneros textuais?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) São regras gramaticais que orientam a escrita formal.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) São formas de comunicação utilizadas em diferentes contextos sociais, organizadas de acordo com a intenção e o público-alvo.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) São tipos de textos restritos ao ambiente acadêmico e literário.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) São apenas textos verbais utilizados no dia a dia.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Qual das alternativas a seguir corresponde a um gênero textual narrativo?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Receita</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Resumo</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Romance</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Editorial</span></li>
                        <br>

                        <li class="mb-2">
                            <p>3) Por que o conhecimento sobre gêneros textuais é importante para o ENEM?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) Porque permite ao candidato decorar as regras gramaticais.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) Porque ajuda o candidato a entender melhor o propósito e a estrutura de diferentes textos, facilitando a interpretação.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) Porque o ENEM só utiliza textos descritivos e narrativos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) Porque é necessário para responder apenas as questões de redação.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) O gênero textual injuntivo tem como principal característica: </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) Descrever de maneira detalhada pessoas e lugares.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Apresentar argumentos e defender um ponto de vista.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) Informar e expor ideias de forma objetiva.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) Dar instruções, orientações ou ordens para realizar uma ação.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) Qual alternativa abaixo apresenta um exemplo de gênero dissertativo-argumentativo? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) Tirinha<span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) Manual de instruções</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) Editorial</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) Poema</span></li>


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
            anchor.addEventListener('click', function (e) {
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