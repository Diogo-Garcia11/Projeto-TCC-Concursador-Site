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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Coesão e Coerência</h1>
                <p class="text-black">Coesão e coerência são dois conceitos fundamentais na construção de um texto claro
                    e lógico. Ambos são essenciais para que a mensagem seja bem transmitida e compreendida pelo leitor.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/coesaoecoerencia.png')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#primeiro" class="text-kblue hover:text-black hover:!text-black">1- Coesão</a></li>
                        <li><a href="#segundo" class="text-kblue hover:text-black hover:!text-black">2- Coerência</a>
                        </li>
                        <li><a href="#terceiro" class="text-kblue hover:text-black hover:!text-black">3- Diferença entre
                                coesão e coerência</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4-
                                Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="primeiro" class="text-3xl font-Montserrat font-bold text-black mb-4">Coesão
                </h2>
                <p class="text-justify mb-4 text-black">A coesão diz respeito à forma como as ideias, frases e
                    parágrafos de um texto se conectam entre si, garantindo fluidez e continuidade. Ou seja, é a
                    habilidade de ligar as partes do texto de maneira que o conjunto faça sentido. Existem vários
                    recursos de coesão, entre os mais comuns:

                    <br><br>Pronomes: Usados para substituir substantivos e evitar repetições desnecessárias.
                    Exemplo: João comprou um livro. Ele adorou a história.

                    <br><br>Conjunções: Ligam orações e ideias, estabelecendo relações de tempo, causa, contraste, etc.
                    Exemplo: Estudei muito para a prova, porém, não consegui o resultado esperado.

                    <br><br>Advérbios: Modificam o sentido de verbos, adjetivos ou outros advérbios, ajudando a dar uma
                    noção de
                    tempo, lugar, modo, etc.
                    Exemplo: Ela cantou muito bem.

                    <br><br>Elipse: Omissão de uma palavra que é subentendida pelo contexto.
                    Exemplo: Ele foi ao cinema e ela, ao teatro. (A palavra "foi" está subentendida).

                    <br><br>Esses e outros recursos (como a repetição e a anáfora) ajudam a manter a coesão do texto,
                    permitindo
                    que o leitor siga o raciocínio sem se perder.
                </p>

                <h2 id="segundo" class="text-3xl font-Montserrat font-bold text-black mb-4">Coerência
                </h2>
                <p class="text-justify mb-4 text-black">
                    A coerência está relacionada à lógica interna do texto, ou seja, à maneira como as ideias se
                    organizam de forma clara e consistente, sem contradições. Ela envolve a harmonia entre as
                    informações e a adequação do discurso ao objetivo proposto. Para garantir coerência, é importante
                    que:

                    <br><br>As ideias estejam bem organizadas: O texto deve apresentar uma estrutura lógica, onde cada
                    argumento
                    ou afirmação leva a outro de maneira sequencial e clara.
                    Exemplo de incoerência: Eu gosto muito de nadar, mas tenho medo de água. (Contradição interna)

                    <br><br>O tema seja mantido ao longo do texto: Não é interessante mudar de assunto abruptamente,
                    pois isso
                    confunde o leitor.
                    Exemplo: O tema do texto é a importância da educação, mas no meio do texto começa-se a falar de
                    receitas de bolo. (Falta de foco e continuidade temática)

                    <br><br>A relação entre as ideias seja clara e bem construída: As afirmações devem se apoiar em
                    argumentos
                    que façam sentido e estejam ligados ao contexto.
                    Exemplo: O mercado financeiro está em crise, por isso é importante investir em ações de empresas
                    sustentáveis. (A ligação entre crise e investimentos sustentáveis precisa ser explicada)
                </p>


                <h2 id="terceiro" class="text-3xl font-Montserrat font-bold text-black mb-4">Diferença entre coesão e
                    coerência
                </h2>
                <p class="text-justify mb-4 text-black"> Coesão trata da estrutura do texto, de como as partes se
                    conectam entre si. Ela garante que as frases estejam bem encadeadas e que o texto tenha fluidez.
                    Coerência, por outro lado, trata da lógica do texto, da relação das ideias com o tema central e da
                    clareza na transmissão da mensagem.

                    <br><br>Ambos são essenciais para a criação de um texto bem estruturado e de fácil compreensão. Um texto
                    pode ser coeso (bem encadeado) mas incoerente (sem lógica interna), ou pode ser coerente (com ideias
                    claras) mas pouco coeso (difícil de seguir pela falta de ligações adequadas). A combinação de coesão
                    e coerência resulta em um texto eficiente, que transmite sua mensagem de forma clara e lógica.
                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) O que caracteriza a coesão em um texto?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) A clareza nas ideias apresentadas e a organização lógica.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) A sequência lógica entre as ideias e a continuidade do tema. </span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) A forma como as ideias, frases e parágrafos estão conectados, garantindo fluidez.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) A ausência de contradições internas entre as afirmações.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Qual recurso de coesão é utilizado para evitar a repetição de palavras no texto?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Conjunções.</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Pronomes.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Elipse.</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Advérbios.</span>
                        </li>
                        <br>

                        <li class="mb-2">
                            <p>3) Qual exemplo abaixo ilustra uma incoerência no texto?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) "Eu gosto muito de nadar, mas tenho medo de água."</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) "Ela cantou muito bem."</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) "João comprou um livro. Ele adorou a história."</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) "Estudei muito para a prova, porém, não consegui o resultado esperado."</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) Como a coerência contribui para a construção de um texto? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) Garante a fluidez das ideias, conectando palavras e frases.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Organiza as ideias de forma lógica e sem contradições, mantendo o foco no tema.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) Substitui as palavras por pronomes e evita repetições.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) Modifica a estrutura gramatical para criar um efeito estético.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) Qual é a principal diferença entre coesão e coerência?
                            </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) Coesão refere-se à lógica interna do texto, enquanto coerência diz respeito à estrutura.<span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) Coesão se relaciona à organização das ideias, enquanto coerência ao encadeamento das frases.</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) Coesão trata da fluidez entre as partes do texto, enquanto coerência refere-se à relação das ideias com o tema central.</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) Coesão usa recursos de estilo, enquanto coerência é sobre o uso adequado das palavras.</span></li>


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