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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Figuras de linguagem</h1>
                <p class="text-black">Figuras de linguagem são recursos estilísticos usados na língua para dar mais
                    expressividade e enriquecer o sentido das palavras em um texto. Elas ajudam a transmitir emoções,
                    ideias complexas e efeitos de estilo, criando uma linguagem mais envolvente e impactante. As figuras
                    de linguagem são frequentemente utilizadas em poemas, músicas, publicidade e outros textos para
                    comunicar algo de maneira mais criativa, apelativa ou persuasiva.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/portugues2.jpg')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#primeiro" class="text-kblue hover:text-black hover:!text-black">1- O que são
                                figuras de linguagem?</a></li>
                        <li><a href="#segundo" class="text-kblue hover:text-black hover:!text-black">2- Principais Tipos
                                de Figuras de Linguagem</a></li>
                        <li><a href="#terceiro" class="text-kblue hover:text-black hover:!text-black">3- Importância da
                                Interpretação de Texto no ENEM?</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4-
                                Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="primeiro" class="text-3xl font-Montserrat font-bold text-black mb-4">O que são figuras de
                    linguagem?
                </h2>
                <p class="text-justify mb-4 text-black">Figuras de linguagem são recursos usados na comunicação para
                    enriquecer o significado das palavras, indo além do sentido literal. Elas aproveitam o sentido
                    conotativo das palavras, ou seja, um significado que depende do contexto e transmite ideias e
                    sentimentos adicionais. Já o sentido denotativo é o sentido básico e direto, sem nenhuma
                    interpretação extra – ele é fixo e não depende do contexto.

                    <br><br>Por exemplo, na frase "Fulano tem um coração de pedra", se interpretarmos no sentido
                    denotativo,
                    entenderíamos que o coração é literalmente feito de pedra. Mas no sentido conotativo, "coração de
                    pedra" indica que Fulano é insensível. Assim, a conotação permite interpretar a expressão de forma
                    figurada, revelando um traço de personalidade em vez de uma característica física.

                    <br><br>As figuras de linguagem se baseiam na conotação para criar expressões mais profundas e
                    complexas,
                    destacando a plurissignificação da linguagem, ou seja, a capacidade que as palavras têm de ganhar
                    vários sentidos. Elas permitem que um mesmo termo ou expressão traga múltiplos significados,
                    dependendo da situação em que é usada. Por isso, as figuras de linguagem são amplamente empregadas
                    na literatura, na música, na publicidade e até na comunicação do dia a dia, dando mais cor, emoção e
                    força às ideias que queremos transmitir.

                    <br><br>Além de enriquecer o discurso, as figuras de linguagem tornam a comunicação mais expressiva
                    e
                    permitem ao falante ou escritor explorar diferentes interpretações. Recursos como a metáfora, a
                    metonímia, a antítese e a personificação são exemplos que ajudam a expressar emoções e sensações de
                    maneira mais intensa e envolvente.

                    <br><br>Em resumo, as figuras de linguagem transformam a maneira como usamos as palavras, dando-lhes
                    novas
                    camadas de significado que podem ser exploradas conforme o contexto e a intenção de quem fala ou
                    escreve.
                </p>

                <h2 id="segundo" class="text-3xl font-Montserrat font-bold text-black mb-4">Principais Tipos de Figuras
                    de Linguagem
                </h2>
                <p class="text-justify mb-4 text-black">
                    <strong>Figuras de Palavras:</strong>
                    <br><br>Essas figuras ocorrem quando uma palavra é usada em um sentido figurado para criar uma
                    imagem ou
                    comparação.

                    <br><br><strong>Metáfora:</strong> Comparação implícita entre dois elementos que têm alguma
                    semelhança, sem o uso de
                    conectivos como "como" ou "tal qual". Exemplo: "Ele é uma fera no trabalho."
                    Comparação: Comparação explícita entre dois elementos, com o uso de conectivos. Exemplo: "Ele é
                    forte como um touro."
                    <br><strong>Metonímia:</strong> Substituição de uma palavra por outra com a qual possui relação de
                    proximidade. Exemplo:
                    "Lemos Shakespeare" (substituição da obra pelo autor).
                    Catacrese: Uso de uma palavra em sentido figurado para suprir a falta de um termo específico.
                    Exemplo: "Braço da cadeira".

                    <br><br><strong>Figuras de Pensamento:</strong>
                    <br><br>Essas figuras exploram a subjetividade, permitindo ao leitor interpretar além
                    do significado literal das palavras.

                    <br><br><strong>Antítese:</strong> Aproximação de ideias opostas em uma frase. Exemplo: "O amor e o
                    ódio caminham juntos."
                    <br><strong>Paradoxo:</strong> Apresentação de ideias contraditórias que desafiam a lógica. Exemplo:
                    "É ferida que dói e
                    não se sente."
                    <br><strong>Personificação (ou Prosopopeia):</strong> Atribuição de características humanas a seres
                    inanimados ou
                    animais. Exemplo: "O vento sussurrava seu nome."
                    <br><strong>Eufemismo:</strong> Uso de uma expressão mais suave para substituir uma palavra ou ideia
                    considerada rude ou
                    desagradável. Exemplo: "Ele partiu para um lugar melhor" (em vez de "Ele morreu").

                    <br><br><strong>Figuras de Sintaxe (ou Construção)</strong>
                    <br><br> São figuras que alteram a ordem ou a estrutura das palavras para
                    dar ênfase ou criar efeito estético.

                    <br><br><strong>Elipse:</strong> Omissão de uma palavra que é subentendida no contexto. Exemplo: "Na
                    sala, apenas silêncio"
                    (omissão de "havia").
                    <br><strong>Polissíndeto:</strong> Repetição de conectivos entre palavras ou orações. Exemplo: "E
                    ria, e chorava, e
                    cantava, e dançava."
                    <br><strong>Anáfora:</strong> Repetição de uma palavra ou expressão no início de frases ou versos.
                    Exemplo: "Tudo cura,
                    tudo salva, tudo alivia."

                    <br><br><strong>Figuras de Som:</strong>
                    <br><br>Essas figuras exploram o som das palavras para criar ritmo e musicalidade.

                    <br><br><strong>Aliteração:</strong> Repetição de sons consonantais. Exemplo: "O rato roeu a roupa
                    do rei de Roma."
                    <br><strong>Assonância:</strong> Repetição de sons vocálicos. Exemplo: "A minha alma está armada e
                    apontada para a cara
                    do sossego."
                    <br><strong>Onomatopeia:</strong> Representação de sons através de palavras. Exemplo: "O relógio
                    fazia tic-tac."
                </p>


                <h2 id="terceiro" class="text-3xl font-Montserrat font-bold text-black mb-4">Importância das Figuras de
                    Linguagem
                </h2>
                <p class="text-justify mb-4 text-black"> As figuras de linguagem tornam a comunicação mais expressiva,
                    facilitando a transmissão de sentimentos, imagens e sensações. Elas são essenciais na literatura, na
                    publicidade e em discursos argumentativos, pois conseguem capturar a atenção do leitor, tornando o
                    texto mais envolvente e persuasivo. No ENEM, o conhecimento das figuras de linguagem ajuda os
                    estudantes a interpretar textos e a identificar as intenções do autor em passagens que usam esses
                    recursos.
                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) O que caracteriza as figuras de linguagem?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) São recursos usados exclusivamente na poesia para criar metáforas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) São técnicas utilizadas para dar expressividade às palavras, criando múltiplos significados e emoções. </span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) São ferramentas gramaticais que explicam o significado denotativo das palavras.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) São elementos visuais usados apenas em publicidade para atrair atenção.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Qual é o principal objetivo da metáfora como figura de linguagem?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Realizar uma comparação explícita entre dois elementos.</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Substituir uma palavra por outra que tenha relação de proximidade.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Comparar dois elementos de forma implícita, sem o uso de conectivos.</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Atribuir características humanas a seres não humanos.</span>
                        </li>
                        <br>

                        <li class="mb-2">
                            <p>3) O que é uma metonímia?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) É uma comparação explícita entre dois elementos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) É a atribuição de qualidades humanas a objetos inanimados.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) É a substituição de uma palavra por outra relacionada a ela.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) É o uso de uma palavra com um sentido exagerado.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) Qual das alternativas abaixo apresenta um exemplo de eufemismo? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) "Ele partiu para um lugar melhor."</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) "O vento sussurrava seu nome."</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) "O amor e o ódio caminham juntos."</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) "Na sala, apenas silêncio."</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) Qual figura de linguagem é utilizada quando há repetição de sons consonantais, como em “O rato roeu a roupa do rei de Roma”?
                            </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) Aliteração<span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) Assonância</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) Onomatopeia</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) Polissíndeto</span></li>


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