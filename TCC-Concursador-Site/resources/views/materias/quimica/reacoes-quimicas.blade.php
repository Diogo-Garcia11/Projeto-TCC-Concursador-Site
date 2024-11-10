<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p> <!-- Adicionei uma margem horizontal -->
            <a href="{{ route('materias', ['section' => 'quimica']) }}#quimica"
                class="mb-4 text-gray-500 underline inline-block">Química</a>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Reações Químicas</h1>
                <p class="text-black">Reações químicas são processos nos quais as substâncias iniciais, chamadas de
                    reagentes, se transformam em novas substâncias, chamadas de produtos. Durante essas transformações,
                    ocorrem rearranjos das ligações químicas, mas a quantidade de matéria total se mantém constante,
                    conforme a Lei da Conservação da Massa.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/reacoesquimicas.png')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#tipos-de-reacoes-quimicas"
                                class="text-kblue hover:text-black hover:!text-black">1-
                                Tipos de Reações Químicas</a></li>
                        <li><a href="#equacoes-quimicas-e-balanceamento"
                                class="text-kblue hover:text-black hover:!text-black">2-
                                Equações Químicas e Balanceamento </a></li>
                        <li><a href="#fatores-que-influenciam-reacoes-quimicas"
                                class="text-kblue hover:text-black hover:!text-black">3-
                                Fatores que Influenciam Reações Químicas</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4-
                                Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="tipos-de-reacoes-quimicas" class="text-3xl font-Montserrat font-bold text-black mb-4">Tipos de
                    Reações Químicas</h2>
                <p class="text-justify> mb-4 text-black">
                    As reações químicas podem ser classificadas de várias formas, dependendo da maneira como as
                    substâncias reagem entre si. Aqui estão os principais tipos:

                <ul class="text-black">
                    <li><strong>Reações de Combustão:</strong> Uma reação entre um combustível e oxigênio, liberando
                        energia na forma de calor e luz. Exemplo: <code>2CH₄ + 4O₂ → 2CO₂ + 4H₂O</code></li>
                    <li><strong>Reações de Síntese (ou Formação):</strong> Duas ou mais substâncias se combinam para
                        formar um único produto. Exemplo: <code>N₂ + 3H₂ → 2NH₃</code></li>
                    <li><strong>Reações de Decomposição:</strong> Uma substância se quebra em duas ou mais substâncias
                        mais simples. Exemplo: <code>CaCO₃ → CaO + CO₂</code></li>
                    <li><strong>Reações de Deslocamento Simples:</strong> Um elemento desloca outro de um composto.
                        Exemplo: <code>Zn + 2HCl → ZnCl₂ + H₂</code></li>
                    <li><strong>Reações de Deslocamento Duplo:</strong> Dois compostos trocam seus íons para formar
                        novos produtos. Exemplo: <code>NaCl + AgNO₃ → NaNO₃ + AgCl</code></li>
                    <li><strong>Reações de Ácido-Base:</strong> Troca de prótons (H⁺) entre um ácido e uma base.
                        Exemplo: <code>HCl + NaOH → NaCl + H₂O</code></li>
                </ul>

                <h2 class="text-black">2. Equações Químicas e Balanceamento</h2>
                <p class="text-black">A equação química é a representação das reações, mostrando os reagentes e
                    produtos. Para garantir que
                    a Lei da Conservação da Massa seja respeitada, a equação deve ser balanceada.
                    <strong>Exemplo de Balanceamento:</strong>
                </p>
                <br><br>
                <pre class="text-black">
        Equação não balanceada: 
        C₂H₆ + O₂ → CO₂ + H₂O

        Equação balanceada: 
        2C₂H₆ + 7O₂ → 4CO₂ + 6H₂O
    </pre>
                O balanceamento é essencial para garantir que a quantidade de cada átomo seja a mesma nos dois lados
                da equação.

                <h2 class="text-black">
                    <p class="text-black">3. Fatores que Influenciam Reações Químicas
                </h2>
                Vários fatores podem afetar a velocidade e a eficiência de uma reação química. Eles incluem:</p>

                <ul class="text-black">
                    <li><strong>Temperatura:</strong> Aumentar a temperatura geralmente acelera as reações, pois as
                        moléculas colidem mais frequentemente e com maior energia.</li>
                    <li><strong>Concentração dos Reagentes:</strong> Maior concentração de reagentes pode aumentar a
                        taxa de reação, já que há mais partículas para reagir.</li>
                    <li><strong>Superfície de Contato:</strong> Em reações envolvendo substâncias sólidas, a maior área
                        de superfície (como em pó) aumenta a velocidade da reação.</li>
                    <li><strong>Catalisadores:</strong> Substâncias que aceleram a reação sem serem consumidas. Eles
                        diminuem a energia de ativação necessária para a reação ocorrer.</li>
                    <li><strong>Energia das Reações (Exotérmicas e Endotérmicas):</strong>
                        <ul>
                            <li><strong>Exotérmicas:</strong> Liberam energia para o ambiente, como a queima de
                                combustíveis.</li>
                            <li><strong>Endotérmicas:</strong> Absorvem energia, como na fotossíntese das plantas.</li>
                        </ul>
                    </li>
                </ul>

                </p>

                <br>
                <h2 id="equacoes-quimicas-e-balanceamento" class="text-3xl font-Montserrat font-bold text-black mb-4">
                    Equações Químicas e Balanceamento</h2>
                <p class="text-justify mb-4 text-black">
                    Equações Químicas: As reações químicas são representadas por equações que indicam os reagentes
                    (substâncias iniciais) e os produtos (substâncias formadas). A equação química deve ser balanceada
                    para garantir que o número de átomos de cada elemento seja igual nos reagentes e nos produtos,
                    respeitando a Lei da Conservação da Massa.

                    <br><br>Exemplo de Balanceamento:
                    Uma equação não balanceada pode ser:
                    <br><br>C<sub>2</sub>H<sub>6</sub> + O<sub>2</sub> → CO<sub>2</sub> + H<sub>2</sub>O

                    <br><br>Para balancear, ajustamos os coeficientes para que o número de átomos de cada elemento seja
                    igual em
                    ambos os lados da equação. O resultado seria: <strong>2C₂H₆ + 7O₂ → 4CO₂ + 6H₂O</strong>

                    <br><br>Aqui, o número de átomos de carbono, hidrogênio e oxigênio é igual nos reagentes e nos
                    produtos.

                    <br><br>Importância do Balanceamento: O balanceamento das equações é fundamental para determinar as
                    quantidades exatas de reagentes e produtos em uma reação, o que é essencial para o controle de
                    processos industriais e laboratoriais.
                </p>
                <div class="flex justify-center">
                    <img class="mt-6 w-96" src="{{asset('imagens/balanceamentoquimico.webp')}}" alt="">
                </div><br><br>
                <h2 id="aplicacoes" class="text-3xl font-Montserrat font-bold text-black mb-4">Fatores que Influenciam
                    Reações Químicas</h2>
                <p class="text-justify mb-4 text-black"> Vários fatores podem afetar a velocidade e a eficiência de uma
                    reação química, incluindo:

                    <br><br>Temperatura:
                    O aumento da temperatura geralmente acelera as reações. Isso acontece porque as moléculas ganham
                    mais energia cinética e colidem com mais frequência e com maior intensidade, o que facilita as
                    reações químicas. Exemplo:
                    Reações de decomposição, como a quebra de compostos orgânicos, acontecem mais rapidamente em
                    temperaturas mais altas.

                    <br><br>Concentração dos Reagentes:
                    Aumentar a concentração de um reagente (ou seja, aumentar o número de moléculas ou íons presentes)
                    pode aumentar a taxa de reação, pois há mais partículas disponíveis para reagir entre si. Exemplo:
                    Em uma reação de ácido e base, aumentar a concentração do ácido acelera a neutralização.

                    <br><br>Superfície de Contato:
                    Reações que envolvem substâncias sólidas ocorrem mais rapidamente se a superfície de contato for
                    maior. Isso acontece porque as partículas reagentes podem interagir mais facilmente quando a
                    substância está em forma de pó ou finamente dividida. Exemplo:
                    O ferro em pó reage mais rapidamente com o oxigênio do que uma peça sólida de ferro.

                    <br><br>Catalisadores:
                    Os catalisadores são substâncias que aceleram a reação química sem serem consumidas no processo.
                    Eles funcionam ao diminuir a energia de ativação necessária para que as reações ocorram. Exemplo:
                    Enzimas no corpo humano agem como catalisadores, acelerando reações metabólicas essenciais, como a
                    digestão.

                    <br><br>Energia das Reações (Exotérmicas e Endotérmicas):
                    Reações Exotérmicas: Liberam energia para o ambiente, geralmente na forma de calor. Exemplo: a
                    queima de combustíveis.
                    Reações Endotérmicas: Absorvem energia do ambiente, o que pode fazer com que a temperatura do
                    sistema diminua. Exemplo: a fotossíntese nas plantas, onde a energia solar é absorvida.

                    <br><br>Esses fatores influenciam tanto a velocidade quanto o resultado final das reações químicas, e o
                    controle dessas variáveis é essencial em várias aplicações, como na indústria, farmacologia e
                    processos biológicos.
                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) O que são as reações químicas?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Processos em que a quantidade de matéria se altera.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Processos onde as substâncias iniciais permanecem inalteradas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Processos que não envolvem a transformação de substâncias.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Processos em que a quantidade de matéria se altera..</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Qual é o exemplo de uma reação de síntese (ou formação)?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) 2CH₄ + 4O₂ → 2CO₂ + 4H₂O</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) N₂ + 3H₂ → 2NH₃</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) CaCO₃ → CaO + CO₂</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Zn + 2HCl → ZnCl₂ + H₂</span>
                        </li>
                        <br>

                        <li class="mb-2">
                            <p>3) O que é essencial para garantir que a Lei da Conservação da Massa seja respeitada durante uma reação química?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) Os reagentes devem ser completamente consumidos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) A reação deve ser exotérmica.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) A equação química deve ser balanceada.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) Não é necessário balancear a equação química.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) Qual fator não influencia a velocidade de uma reação química?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) Temperatura</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Catalisadores</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) Cor dos reagentes</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) Superfície de contato</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) O que caracteriza uma reação exotérmica? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) A reação libera energia na forma de calor.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) A reação absorve energia do ambiente.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) A reação ocorre somente em temperaturas baixas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) A reação só pode ocorrer na presença de um catalisador.</span></li>


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