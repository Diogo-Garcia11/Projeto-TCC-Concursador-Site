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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Interpretação de texto</h1>
                <p class="text-black">Interpretação de texto é a habilidade de entender, analisar e refletir sobre o
                    conteúdo de um texto, considerando tanto seu sentido literal quanto seus significados mais profundos
                    e contextuais. Essa competência é fundamental em processos de leitura, pois envolve não apenas
                    decodificar palavras e frases, mas também captar nuances, intenções do autor, informações implícitas
                    e o contexto em que o texto foi escrito.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/interpretacaodetexto.png')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#primeiro" class="text-kblue hover:text-black hover:!text-black">1- Como
                                interpretar um texto?</a></li>
                        <li><a href="#segundo" class="text-kblue hover:text-black hover:!text-black">2- Estratégias para
                                Melhorar a Interpretação de Texto</a></li>
                        <li><a href="#terceiro" class="text-kblue hover:text-black hover:!text-black">3- Importância da
                                Interpretação de Texto no ENEM<< /a>
                        </li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4-
                                Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="primeiro" class="text-3xl font-Montserrat font-bold text-black mb-4">Como interpretar um texto?
                </h2>
                <p class="text-justify mb-4 text-black"><strong>Compreensão Literal e Inferência:</strong>

                    A compreensão literal envolve entender o conteúdo explícito do texto, ou seja, o que está claramente
                    escrito. Já a inferência é a capacidade de ler nas entrelinhas, deduzindo informações que o autor
                    sugere, mas não diz diretamente. As inferências podem ser feitas a partir de pistas no texto, como o
                    tom, o contexto e o uso de determinadas expressões.

                    <br><br><strong>Identificação do Propósito e Intenção do Autor:</strong>

                    Entender por que o autor escreveu o texto e o que ele deseja comunicar é crucial para a
                    interpretação. O propósito pode variar entre informar, entreter, argumentar, persuadir ou criticar.
                    Identificar esse propósito ajuda a compreender a escolha de palavras, a estrutura e o estilo do
                    texto.

                    <br><br><strong>Reconhecimento dos Gêneros Textuais e Funções da Linguagem:</strong>

                    O gênero textual (narrativo, expositivo, injuntivo, dissertativo, entre outros) e a função da
                    linguagem (emotiva, referencial, apelativa, etc.) influenciam a forma como o texto é interpretado.
                    Cada gênero tem características que ajudam o leitor a saber o que esperar e a entender melhor o
                    texto, enquanto as funções da linguagem destacam os diferentes efeitos e objetivos que o autor quer
                    alcançar.
                </p>

                <h2 id="segundo" class="text-3xl font-Montserrat font-bold text-black mb-4">Estratégias para Melhorar a
                    Interpretação de Texto
                </h2>
                <p class="text-justify mb-4 text-black">
                    Ler com atenção: Ler o texto inteiro sem pressa, atentando-se a todos os detalhes.
                    <br><br>Identificar palavras-chave: Focar em palavras e expressões que dão pistas sobre o sentido
                    geral e as
                    intenções do autor.
                    <br><br>Analisar o contexto: Considerar o momento histórico, social ou cultural em que o texto foi
                    escrito.
                    <br><br>Fazer perguntas: Questionar o conteúdo do texto, como "Por que o autor disse isso?" ou "Qual
                    é o
                    objetivo deste parágrafo?"
                    <br><br>Resumir: Após a leitura, fazer um breve resumo do texto com as ideias principais ajuda a
                    fixar a
                    compreensão.
                </p>


                <h2 id="conceitos-basicos" class="text-3xl font-Montserrat font-bold text-black mb-4">Importância da
                    Interpretação de Texto no ENEM
                </h2>
                <p class="text-justify mb-4 text-black"> No ENEM, a interpretação de texto é fundamental, pois grande
                    parte das questões de Linguagens, Ciências Humanas e até mesmo Ciências da Natureza envolve a
                    capacidade de compreender e analisar textos de diferentes tipos, como artigos, poemas, tirinhas e
                    charges. Além disso, na prova de redação, interpretar bem o tema proposto e os textos motivadores é
                    essencial para construir uma argumentação relevante e coerente.

                    <br><br>Assim, a interpretação de texto vai além de entender as palavras; ela envolve refletir sobre ideias,
                    reconhecer pontos de vista e captar informações implícitas, o que permite ao leitor uma compreensão
                    mais profunda e crítica do conteúdo.
                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) O que é interpretação de texto?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) É a habilidade de apenas decodificar palavras e frases.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) É a capacidade de resumir um texto sem analisar seu conteúdo.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C)  É a capacidade de entender, analisar e refletir sobre o conteúdo de um texto, considerando significados literais e contextuais.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) São apenas textos
                                verbais utilizados no dia a dia.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) A compreensão literal em interpretação de texto significa:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Entender o conteúdo implícito e subjetivo do texto.</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Analisar apenas as intenções do autor.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Entender o que está claramente escrito, sem precisar deduzir informações não ditas diretamente.</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Analisar o contexto histórico do autor.</span>
                        </li>
                        <br>

                        <li class="mb-2">
                            <p>3) Qual é uma das estratégias recomendadas para melhorar a interpretação de texto?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) Ler apenas o início e o final do texto.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) Memorizar todas as palavras do texto.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) Escrever uma nova versão do texto.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) Fazer perguntas sobre o conteúdo, como "Por que o autor disse isso?"</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) No contexto do ENEM, a interpretação de texto é importante porque: </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) Ajuda o candidato a decifrar questões de qualquer disciplina que envolvam compreensão de textos diversos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Facilita a memorização de datas e fatos históricos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) É exigida apenas na prova de Ciências Humanas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) Permite decorar regras gramaticais.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) Identificar o propósito e a intenção do autor em um texto ajuda o leitor a:
                            </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) Decorar as palavras usadas pelo autor.<span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) Compreender a escolha de palavras, estrutura e estilo do texto.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) Ignorar o contexto em que o texto foi escrito.</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) Concentrar-se apenas no sentido literal das palavras.</span></li>


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