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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Funções da linguagem</h1>
                <p class="text-black">As funções da linguagem referem-se aos diferentes objetivos que a comunicação pode
                    ter, de acordo com a intenção do emissor e o contexto da mensagem. Essas funções foram propostas
                    pelo linguista Roman Jakobson e ajudam a entender como a linguagem é usada para expressar e
                    transmitir significados.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/funcoesdalinguagem.jpg')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#primeiro" class="text-kblue hover:text-black hover:!text-black">1- Quais são as
                                funções da linguagem?</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">2-
                                Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="primeiro" class="text-3xl font-Montserrat font-bold text-black mb-4">Quais são as funções da
                    linguagem?
                </h2>
                <p class="text-justify mb-4 text-black"><strong>1. Função Referencial (ou Denotativa)</strong>

                    <br><br>A função referencial está relacionada ao conteúdo da mensagem, ou seja, à informação que está sendo
                    transmitida. O foco aqui é o contexto e a objetividade do que se está dizendo. Ela é utilizada para
                    informar, relatar fatos, descrever ou transmitir conhecimento de forma clara e direta.

                    <br><br>Exemplo: "O Brasil é um país da América do Sul."

                    <br><br><strong>2. Função Emotiva (ou Explicativa)</strong>

                    <br><br>A função emotiva tem como objetivo expressar sentimentos, emoções ou estados subjetivos do emissor.
                    O foco é o emissor e suas emoções, e ela busca transmitir o que a pessoa está sentindo em relação a
                    algo ou alguém.

                    <br><br>Exemplo: "Que saudade eu tenho de você!" ou "Estou muito feliz com a minha vitória!"

                    <br><br><strong>3. Função Conotativa (ou Apelativa)</strong>

                    <br><br>A função conotativa tem como objetivo influenciar ou persuadir o receptor da mensagem, buscando uma
                    reação ou ação por parte dele. Ela é comum em publicidades, discursos persuasivos, ordens e
                    solicitações.

                    <br><br>Exemplo: "Compre agora e aproveite a promoção!" ou "Vote consciente!"

                    <br><br><strong>4. Função Metalinguística</strong>

                    <br><br>A função metalinguística ocorre quando a linguagem é usada para falar sobre si mesma, ou seja,
                    quando o emissor explica ou esclarece o significado de uma palavra ou expressão. É comum em
                    definições, glossários e explicações.

                    <br><br>Exemplo: "Dicionário é um livro onde se encontram os significados das palavras." ou "A palavra
                    'metáfora' significa uma comparação implícita."

                    <br><br><strong>5. Função Fática</strong>

                    <br><br>A função fática está relacionada à verificação do canal de comunicação, ou seja, ela serve para
                    garantir que a mensagem foi recebida ou está sendo compreendida. Ela é mais utilizada em saudações,
                    despedidas ou quando o emissor deseja confirmar se a comunicação está sendo realizada corretamente.

                    <br><br>Exemplo: "Alô, você me ouve?" ou "Você está me entendendo?"

                    <br><br><strong>6. Função Poética</strong>

                    <br><br>A função poética tem como foco a forma da mensagem, ou seja, a maneira como as palavras são
                    organizadas para causar um efeito estético, sonoro ou visual. Ela é comumente associada à
                    literatura, especialmente à poesia, mas também pode ser encontrada em outros tipos de textos
                    artísticos.

                    <br><br>Exemplo: "O som do silêncio" (Jorge Luis Borges) ou "Verbos que cantam / palavras que se lançam / ao
                    vento" (em um poema).
                </p>


                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Qual é a principal característica da função referencial da linguagem?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Persuadir ou influenciar o receptor.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Usar a linguagem para falar sobre si mesma. </span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Expressar sentimentos e emoções do emissor.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Focar no conteúdo da mensagem e na objetividade.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Em qual tipo de situação a função emotiva da linguagem é mais utilizada?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Em uma propaganda de um produto.</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Ao explicar o significado de uma palavra em um dicionário.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Para expressar sentimentos e emoções pessoais do emissor.</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Em um discurso político para convencer eleitores.</span>
                        </li>
                        <br>

                        <li class="mb-2">
                            <p>3) Qual função da linguagem é usada quando o objetivo é persuadir ou influenciar a reação do receptor?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) Função metalinguística.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) Função fática.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) Função poética.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) Função conotativa.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) O que caracteriza a função metalinguística da linguagem? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) A expressão de sentimentos ou emoções de forma direta.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) A utilização de palavras de forma estética e sonoramente harmoniosa.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) O uso de linguagem para esclarecer o significado de palavras ou expressões.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) A comunicação para verificar se o receptor está compreendendo a mensagem.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) Qual das alternativas a seguir exemplifica uma situação em que a função fática está em uso?
                            </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) "Alô, você me ouve?"<span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) "Estou tão triste com a notícia."</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) "Compre agora e aproveite a promoção!"</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D)"O que você pensa sobre o meu projeto?"</span></li>


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