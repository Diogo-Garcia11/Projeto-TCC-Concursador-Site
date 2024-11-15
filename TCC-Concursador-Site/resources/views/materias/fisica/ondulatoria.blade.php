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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Ondulatória</h1>

                <p class="text-black">
                    Ondulatória é o ramo da Física que estuda as propriedades, comportamento e características das ondas.
                    As ondas são perturbações que se propagam através de um meio, transportando energia de um ponto a outro
                    sem a necessidade de transportar matéria. A ondulatória é aplicada em diversos campos, como na análise
                    do som, luz, e ondas sísmicas, e é fundamental para a compreensão de fenômenos do cotidiano.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/ondulatoria.webp')}}" alt="Imagem ilustrativa sobre Ondulatória">

                <br><br>

                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#tipos_de_ondas" class="text-kblue hover:text-black hover:!text-black">1- Tipos de Ondas</a></li>
                        <li><a href="#caracteristicas" class="text-kblue hover:text-black hover:!text-black">2- Características das Ondas</a></li>
                        <li><a href="#fenomenos_ondulatorios" class="text-kblue hover:text-black hover:!text-black">3- Fenômenos Ondulatórios</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4- Exercícios Práticos</a></li>
                    </ul>
                </div>

                <br><br>

                <h2 id="tipos_de_ondas" class="text-3xl font-Montserrat font-bold text-black mb-4">Tipos de Ondas</h2>
                <p class="text-black">
                    As ondas podem ser classificadas de diversas formas, dependendo das suas características e do meio pelo qual se propagam.
                    Existem ondas mecânicas, que necessitam de um meio material para se propagar, como as ondas sonoras. Por outro lado,
                    ondas eletromagnéticas, como a luz, não precisam de um meio material e podem se propagar no vácuo. Além disso, as ondas
                    podem ser transversais, onde a oscilação é perpendicular à direção da propagação, como as ondas de luz, ou longitudinais,
                    onde a oscilação ocorre na mesma direção da propagação, como no caso das ondas sonoras. Essa classificação é essencial
                    para o entendimento dos comportamentos e aplicações de cada tipo de onda.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/tipos_de_ondas.webp')}}" alt="">

                <br><br>

                <h2 id="caracteristicas" class="text-3xl font-Montserrat font-bold text-black mb-4">Características das Ondas</h2>
                <p class="text-black">
                    As ondas possuem várias características fundamentais que ajudam a descrever seu comportamento. A frequência é a quantidade de
                    oscilações que ocorrem por segundo, medida em hertz (Hz). O comprimento de onda é a distância entre duas cristas sucessivas
                    de uma onda, representando a "largura" de uma oscilação. A amplitude é a altura máxima da oscilação, relacionada com a
                    intensidade da onda. A velocidade de propagação é a rapidez com que a onda se desloca pelo meio e depende das propriedades
                    do meio e do tipo de onda. Essas características são fundamentais para descrever fenômenos como o som, que é percebido de
                    forma diferente dependendo da frequência e amplitude.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/caracteristicas_das_ondas.webp')}}" alt="">

                <br><br>

                <h2 id="fenomenos_ondulatorios" class="text-3xl font-Montserrat font-bold text-black mb-4">Fenômenos Ondulatórios</h2>
                <p class="text-black">
                    Os fenômenos ondulatórios descrevem os comportamentos observados quando as ondas interagem com o meio ou entre si.
                    A reflexão ocorre quando uma onda encontra um obstáculo e retorna ao meio de origem, como o som que ecoa em paredes.
                    A refração é a mudança de direção e velocidade de uma onda ao passar de um meio para outro, como a luz que se desvia
                    ao atravessar a água. A difração é a capacidade das ondas de contornar obstáculos, sendo evidente nas ondas sonoras.
                    A interferência ocorre quando duas ondas se encontram e combinam suas amplitudes, podendo ser construtiva (somando-se)
                    ou destrutiva (anulando-se). Esses fenômenos são fundamentais para a compreensão de sistemas de comunicação e instrumentos
                    ópticos.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/fenomenos_ondulatorios.webp')}}" alt="">

                <br><br>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Uma onda sonora tem uma frequência de 500 Hz e se propaga a uma velocidade de 340 m/s. Qual é o comprimento de onda?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) 0,68 m</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) 0,68 m</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) 1 m</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) 1,25 m</span></li>

                        <li class="mb-2 mt-4">
                            <p>2) Qual fenômeno ondulatório ocorre quando a luz atravessa um prisma e se divide em diferentes cores?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Reflexão</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Refração</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Difração</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Interferência</span></li>
                    </ul>
                    <div class="mt-6">
                        <ul class="text-black">
                           
                            
                            <li class="mb-2 mt-4">
                                <p>3) O que ocorre com o comprimento de onda de uma luz quando ela passa de um meio menos refringente para um mais refringente?</p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) Aumenta</span></li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="1" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) Diminui</span></li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) Permanece constante</span></li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) Varia de acordo com a amplitude</span></li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">E) É nula</span></li>

                            
                            <li class="mb-2 mt-4">
                                <p>4) Qual é a principal característica das ondas mecânicas?</p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="1" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) Necessitam de um meio material para se propagar</span></li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Não necessitam de um meio material para se propagar</span></li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) Possuem frequência constante</span></li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) Viajam exclusivamente no vácuo</span></li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">E) São sempre transversais</span></li>

                            <li class="mb-2 mt-4">
                                <p>5) Qual grandeza física está diretamente relacionada com a intensidade de uma onda?</p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) Frequência</span></li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) Comprimento de onda</span></li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="1" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) Amplitude</span></li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) Velocidade</span></li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">E) Período</span></li>
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