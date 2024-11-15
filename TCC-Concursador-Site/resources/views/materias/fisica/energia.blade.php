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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Energia, Trabalho e Potência</h1>

                <p class="text-black">
                    Energia, trabalho e potência são conceitos fundamentais em Física que descrevem como forças e movimentos interagem.
                    Esses conceitos explicam desde as movimentações dos corpos até o uso de máquinas, e são aplicáveis em diversas
                    situações do cotidiano. Eles são essenciais para compreender como o esforço aplicado se traduz em energia transferida
                    ou armazenada e como isso resulta em potência ao longo do tempo.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/energia_trabalho_potencia.webp')}}" alt="Imagem ilustrativa sobre Energia, Trabalho e Potência">

                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#energia" class="text-kblue hover:text-black hover:!text-black">1- Energia</a></li>
                        <li><a href="#trabalho" class="text-kblue hover:text-black hover:!text-black">2- Trabalho</a></li>
                        <li><a href="#potencia" class="text-kblue hover:text-black hover:!text-black">3- Potência</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4- Exercícios Práticos</a></li>
                    </ul>
                </div>

                <h2 id="energia" class="text-3xl font-Montserrat font-bold text-black mb-4">Energia</h2>
                <p class="text-black">
                    Energia é a capacidade de um sistema ou corpo de realizar trabalho. Em Física, a energia pode estar presente de várias formas,
                    como energia cinética, potencial, térmica, entre outras. A energia cinética está associada ao movimento dos corpos, sendo
                    proporcional à massa e ao quadrado da velocidade do objeto. Já a energia potencial é armazenada devido à posição de um corpo
                    em um campo de força, como o gravitacional. A lei da conservação da energia afirma que, em um sistema isolado, a energia total
                    permanece constante, ou seja, ela pode ser transformada, mas não criada ou destruída. Este princípio é a base para o entendimento
                    das interações em sistemas fechados.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/energia.jpg')}}" alt="">

                <h2 id="trabalho" class="text-3xl font-Montserrat font-bold text-black mb-4">Trabalho</h2>
                <p class="text-black">
                    O trabalho em Física é definido como a medida da energia transferida pela aplicação de uma força ao longo de um deslocamento.
                    Matematicamente, o trabalho (W) é dado pelo produto da força (F) pelo deslocamento (d) e pelo cosseno do ângulo entre a
                    força e o deslocamento: W = F.d.cos(θ). O trabalho é positivo quando a força atua na mesma direção do movimento e negativo
                    quando atua na direção oposta. Isso significa que, ao levantar um objeto, o trabalho é positivo, pois estamos aplicando
                    uma força para vencermos a gravidade. Já ao frear um carro, o trabalho da força de atrito é negativo, pois ele retira energia
                    do sistema.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/trabalho.webp')}}" alt="">

                <h2 id="potencia" class="text-3xl font-Montserrat font-bold text-black mb-4">Potência</h2>
                <p class="text-black">
                    Potência é a quantidade de trabalho realizado por unidade de tempo. Em outras palavras, a potência indica a rapidez com que
                    o trabalho é executado. Ela é calculada pela fórmula P = W/t, onde P é a potência, W é o trabalho e t é o tempo. A unidade
                    de medida da potência no Sistema Internacional é o watt (W), onde 1 watt equivale a 1 joule por segundo. A potência é um
                    conceito especialmente relevante em sistemas onde o tempo para realizar o trabalho é importante, como em motores e máquinas.
                    Um motor mais potente é capaz de realizar mais trabalho no mesmo intervalo de tempo, o que explica a diferença entre máquinas
                    industriais de alto desempenho e equipamentos domésticos.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/potencia.jpg')}}" alt="">

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Um objeto de massa 2 kg é elevado a uma altura de 5 metros. Qual é a energia potencial gravitacional acumulada?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) 10 J</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) 100 J</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) 50 J</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) 20 J</span></li>

                        <li class="mb-2 mt-4">
                            <p>2) Se um motor realiza 6000 J de trabalho em 30 segundos, qual é a potência do motor?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) 200 W</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) 300 W</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) 150 W</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) 250 W</span></li>
                    </ul>
                    <div class="mt-6">
                        <ul class="text-black">
                            <li class="mb-2">
                                <p>3) Um objeto de 10 kg está em repouso em uma superfície horizontal. Uma força de 50 N é aplicada ao objeto, deslocando-o 5 metros. Considerando o atrito desprezível, qual é o trabalho realizado pela força?</p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                    onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) 200 J</span></li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                    onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) 250 J</span></li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="1"
                                    onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) 250 N·m</span></li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                    onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) 500 J</span></li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                    onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">E) 100 J</span></li>

                            <li class="mb-2 mt-4">
                                <p>4) Um motor de 2 kW opera por 10 minutos. Qual é a energia total fornecida pelo motor nesse período?</p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                    onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) 200 J</span></li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="1"
                                    onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) 1.200.000 J</span></li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                    onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) 20.000 J</span></li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                    onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) 200 W</span></li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                    onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">E) 1.000.000 J</span></li>

                            <li class="mb-2 mt-4">
                                <p>5) Uma força constante de 30 N é aplicada a um objeto que se move com velocidade constante de 2 m/s por 10 segundos. Qual é a potência média da força?</p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                    onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) 60 W</span></li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="1"
                                    onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) 30 W</span></li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                    onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) 300 W</span></li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                    onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) 120 W</span></li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                    onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">E) 600 W</span></li>
                        </ul>
                    </div>

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