<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p>
            <a href="{{ route('materias', ['section' => 'fisica']) }}#fisica" class="mb-4 text-gray-500 underline inline-block">Física</a>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Eletricidade e Circuitos Elétricos</h1>

                <p class="text-black">
                    A eletricidade é um dos conceitos fundamentais na física, sendo essencial para o funcionamento de 
                    grande parte dos dispositivos modernos. Ela é gerada pelo movimento de cargas elétricas e é utilizada 
                    para alimentar circuitos e sistemas que realizam diversas funções em nossa vida cotidiana. Entender 
                    eletricidade envolve compreender desde as partículas subatômicas até o funcionamento de circuitos 
                    complexos em redes elétricas.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/eletricidade.jpg')}}" alt="Imagem ilustrativa sobre Eletricidade e Circuitos Elétricos">

                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#carga_eletrica" class="text-kblue hover:text-black hover:!text-black">1- Carga Elétrica e Corrente Elétrica</a></li>
                        <li><a href="#tensao_e_resistencia" class="text-kblue hover:text-black hover:!text-black">2- Tensão Elétrica e Resistência</a></li>
                        <li><a href="#circuitos_eletricos" class="text-kblue hover:text-black hover:!text-black">3- Circuitos Elétricos</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4- Exercícios Práticos</a></li>
                    </ul>
                </div>

                <h2 id="carga_eletrica" class="text-3xl font-Montserrat font-bold text-black mb-4">Carga Elétrica e Corrente Elétrica</h2>
                <p class="text-black">
                    A carga elétrica é uma propriedade fundamental da matéria, manifestada pelas partículas subatômicas como 
                    prótons e elétrons. Prótons têm carga positiva, enquanto elétrons possuem carga negativa. Quando há um 
                    desequilíbrio de cargas entre dois pontos, cria-se uma diferença de potencial que gera uma corrente elétrica. 
                    A corrente elétrica é o fluxo ordenado de elétrons e é medida em ampères (A). Esse fluxo de elétrons é o 
                    que alimenta dispositivos elétricos e possibilita a transmissão de energia por cabos e circuitos. 
                    A corrente pode ser contínua (CC), mantendo o mesmo sentido, ou alternada (CA), mudando de direção em intervalos regulares.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/corrente_eletrica.jpg')}}" alt="">

                <h2 id="tensao_e_resistencia" class="text-3xl font-Montserrat font-bold text-black mb-4">Tensão Elétrica e Resistência</h2>
                <p class="text-black">
                    A tensão elétrica, ou diferença de potencial, é a força que impulsiona a corrente elétrica em um circuito, 
                    sendo medida em volts (V). Ela representa a energia por unidade de carga necessária para mover as cargas 
                    elétricas. Já a resistência é uma propriedade dos materiais que se opõem ao fluxo de corrente, sendo medida 
                    em ohms (Ω). A resistência depende do tipo de material, comprimento e espessura do condutor. Em um circuito, 
                    a relação entre tensão, corrente e resistência é descrita pela Lei de Ohm: \( V = I \cdot R \), onde \( V \) 
                    é a tensão, \( I \) é a corrente e \( R \) é a resistência. Esse princípio é essencial para o dimensionamento 
                    de circuitos e para a segurança dos dispositivos.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/tensao_resistencia.webp')}}" alt="">

                <h2 id="circuitos_eletricos" class="text-3xl font-Montserrat font-bold text-black mb-4">Circuitos Elétricos</h2>
                <p class="text-black">
                    Circuitos elétricos são sistemas fechados pelos quais a corrente elétrica pode circular. Eles são compostos 
                    por fontes de energia (como baterias ou geradores), condutores (como fios) e dispositivos de controle e carga 
                    (como resistores, lâmpadas, motores, entre outros). Existem diferentes tipos de circuitos, como os circuitos 
                    em série, onde os componentes estão dispostos em uma única linha de fluxo de corrente, e os circuitos em paralelo, 
                    onde a corrente se divide entre múltiplos caminhos. Em circuitos mistos, existem combinações em série e paralelo, 
                    possibilitando um controle mais complexo da distribuição de energia e permitindo o funcionamento de dispositivos 
                    em configurações específicas.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/circuitos_eletricos.webp')}}" alt="">

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Em um circuito elétrico, a corrente é de 3 A e a resistência do circuito é de 10 Ω. Qual é a tensão elétrica?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) 20 V</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) 25 V</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) 30 V</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) 40 V</span></li>

                        <li class="mb-2 mt-4">
                            <p>2) Qual componente do circuito oferece resistência ao fluxo de corrente elétrica?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Fonte de energia</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Resistor</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Fio condutor</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Interruptor</span></li>
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
