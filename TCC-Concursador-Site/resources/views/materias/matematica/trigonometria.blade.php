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
            <a href="{{ route('materias', ['section' => 'matematica']) }}#matematica" class="mb-4 text-gray-500 underline inline-block">Matemática</a>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Trigonometria</h1>
                <p>A trigonometria é um ramo da matemática que estuda as relações entre os ângulos e os lados dos triângulos, especialmente os triângulos retângulos. </p>
                <img class="mt-6 w-96" src="{{asset('imagens/trigonometria.webp')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#o-que-e-trigonometria" class="text-kblue hover:text-black hover:!text-black">1- O que é a trigonometria</a></li>
                        <li><a href="#triangulo-retangulo" class="text-kblue hover:text-black hover:!text-black">2- Triângulo retângulo</a></li>
                        <li><a href="#funcoes-trigonometricas" class="text-kblue hover:text-black hover:!text-black">3- Funções trigonométricas</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black ">4- Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="o-que-e-trigonometria" class="text-3xl font-Montserrat font-bold text-black mb-4">O que é a trigonometria</h2>
                <p class="text-justify mb-4">A trigonometria é uma área da matemática dedicada ao estudo das relações entre os lados e os ângulos dos triângulos, sendo o triângulo, por ser o polígono mais simples, um objeto de estudo fundamental. Ela explora como os ângulos e os lados se relacionam, especialmente em triângulos retângulos.

                    Um dos princípios centrais da trigonometria é que, em um triângulo com um ângulo de medida α, os lados opostos e adjacentes a esse ângulo mantêm proporções específicas. Essa descoberta levou a um grande avanço no entendimento das propriedades dos triângulos.

                    A trigonometria é amplamente utilizada para calcular valores desconhecidos em triângulos retângulos, sendo muito útil em diversas situações do dia a dia, como na construção civil, navegação, engenharia e até em fenômenos naturais. Sua história remonta a civilizações antigas, como os gregos e egípcios, que já aplicavam conceitos trigonométricos em navegação e astronomia.

                    Além das funções trigonométricas básicas — seno, cosseno e tangente —, a trigonometria também envolve conceitos como identidades trigonométricas, funções inversas e a lei dos senos e cosenos, que permitem resolver problemas mais complexos. Com isso, a trigonometria não só é uma ferramenta essencial na matemática, mas também tem um papel significativo em várias disciplinas científicas.
                </p>

                <h2 id="triangulo-retangulo" class="text-3xl font-Montserrat font-bold text-black mb-4">Triângulo Retângulo</h2>
                <p class="text-justify mb-4">
                    Os primeiros estudos da trigonometria focaram no triângulo retângulo, que se tornou a base para o desenvolvimento do conceito e sua aplicação em outras áreas, como o círculo trigonométrico. As razões trigonométricas mais importantes nesse tipo de triângulo são o seno, o cosseno e a tangente, cada uma com uma aplicação específica que relaciona os lados do triângulo.

                    <br><br>Foi somente no século XIX que a Genética começou a tomar forma como um campo científico
                    estruturado, graças aos estudos do monge Gregor Mendel (1822-1884), que é amplamente reconhecido
                    como o pai da Genética. Mendel conduziu experimentos inovadores com ervilhas, cruzando diferentes
                    linhagens para observar como as características eram transmitidas de uma geração para outra.

                    <br><br>Em um triângulo retângulo, os lados têm nomes distintos. O lado oposto ao ângulo de 90 graus é sempre chamado de hipotenusa, sendo o lado mais longo do triângulo. Os outros dois lados são conhecidos como catetos. Dependendo do ângulo que estamos analisando, um cateto pode ser chamado de cateto oposto, enquanto o outro é o cateto adjacente.

                    <br><br>Por exemplo, se considerarmos um ângulo específico, o lado que está diretamente oposto a esse ângulo é o cateto oposto. O cateto que, junto à hipotenusa, forma esse ângulo é o cateto adjacente. Assim, para resolver problemas trigonométricos, é essencial identificar quais lados estão envolvidos em relação ao ângulo que estamos considerando e, a partir disso, escolher a razão trigonométrica apropriada.

                    <br><br>Durante o estudo das razões, encontramos os ângulos notáveis, que são ângulos frequentemente usados em problemas matemáticos. É importante conhecer os valores de seno, cosseno e tangente desses ângulos, pois eles têm proporções fixas e bem definidas.

                    <br><br>Quando lidamos com um triângulo retângulo, os lados mantêm proporções em relação aos valores desses ângulos notáveis. Se a situação envolver um ângulo que não é um dos ângulos notáveis, podemos utilizar tabelas trigonométricas para encontrar as razões necessárias para a resolução do problema.
                </p>
                <h2 id="conceitos-basicos" class="text-3xl font-Montserrat font-bold text-black mb-4">Funções trigonométricas</h2>
                <class="text-justify mb-4"> <span class="font-bold">As principais funções trigonométricas são o seno, o cosseno e a tangente. Essas funções são chamadas de periódicas, pois seus gráficos exibem um comportamento simétrico que se repete ao longo de intervalos regulares.

Quando construímos o ciclo trigonométrico, podemos associar cada valor de x no intervalo de zero a dois pi a um ponto específico no plano trigonométrico. Isso significa que cada número é representado por um ponto nesse ciclo.

                    <br><br> <span class="font-bold">• Função Seno</span> A função seno é definida para um número x que pertence ao conjunto dos números reais. Essa função pode ser expressa como "f de x igual a seno de x". Tanto o domínio quanto o contradomínio da função são o conjunto dos números reais.

O valor de x pode ser medido em radianos ou graus. Quando analisamos a função seno, notamos que seus valores sempre variam entre menos um e um, pois o seno nunca ultrapassa um. Essa limitação se origina da definição da função em relação ao círculo trigonométrico, que tem um raio de um. Além disso, a função seno apresenta um comportamento periódico, o que significa que, após um intervalo de dois pi, ela repete seu padrão.

                    <br><br> <span class="font-bold">• Função Cosseno</span> A função cosseno também é definida para um número x pertencente aos números reais. Ela pode ser expressa como "f de x igual a cosseno de x", com o domínio e o contradomínio igualmente sendo o conjunto dos números reais.

Assim como na função seno, o valor de x pode ser medido em radianos ou graus. A função cosseno também varia entre menos um e um, com o mesmo princípio de periodicidade. O cosseno também repete seu padrão após um intervalo de dois pi.

                    <br><br> <span class="font-bold">• função tangente</span> O lócus refere-se à localização específica de um
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

                    <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                    <div class="mt-6">
                        <ul>
                            <li class="mb-2">
                                <p>1) Qual é a definição de Genética?</p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) O estudo da variação das espécies.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-1" value="1" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) A ciência que investiga a hereditariedade e a transmissão de características dos organismos.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) O estudo da ecologia e dos ambientes naturais.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) A análise das estruturas celulares.</span></li>
                            <br>

                            <li class="mb-2">
                                <p>2) O que é o DNA?</p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Um tipo de proteína encontrada nas células.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Um cromossomo específico encontrado em organismos humanos.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-2" value="1" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) A molécula que carrega as informações genéticas de um organismo.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Um tipo de célula do corpo humano.</span></li>
                            <br>

                            <li class="mb-2">
                                <p>3) Qual é a primeira lei de Mendel?</p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) A Lei da Segregação Independente.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) A Lei da Hereditariedade.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="1" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) A Lei da Segregação dos Fatores.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) A Lei dos Cromossomos.</span></li>
                            <br>

                            <li class="mb-2">
                                <p>4) Como uma característica recessiva se manifesta em um organismo?</p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) Quando apenas um alelo é presente.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Quando dois alelos iguais estão presentes.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) Quando apenas um alelo dominante é presente.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="1" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) Quando não há alelos recessivos no organismo.</span></li>
                            <br>

                            <li class="mb-2">
                                <p>5) Qual é a diferença entre genótipo e fenótipo? </p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="1" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) O genótipo é a composição genética, enquanto o fenótipo é a expressão externa.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) O genótipo é a expressão externa, enquanto o fenótipo é a composição genética.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) Ambos se referem à mesma coisa.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) O genótipo é apenas relacionado a características físicas.</span></li>


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