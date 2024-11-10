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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Estrutura Atômica</h1>
                <p class="text-black">A estrutura atômica é a organização dos componentes de um átomo, que são
                    fundamentais para entender a natureza da matéria e como ela interage. O átomo é composto por três
                    partículas subatômicas principais: elétrons, nêutrons e prótons. Cada uma dessas partículas possui
                    características diferentes que definem o comportamento do átomo.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/estruturaatomica.webp')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#primeiro" class="text-kblue hover:text-black hover:!text-black">1-
                                Partículas Subatômicas e Sua Organização</a></li>
                        <li><a href="#segundo" class="text-kblue hover:text-black hover:!text-black">2-
                                Modelos Atômicos e Evolução do Conceito </a></li>
                        <li><a href="#terceiro" class="text-kblue hover:text-black hover:!text-black">3-
                                Níveis de Energia, Isótopos e Íons</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4-
                                Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="primeiro" class="text-3xl font-Montserrat font-bold text-black mb-4">Partículas Subatômicas e
                    Sua Organização</h2>
                <p class="text-justify mb-4 text-black">O átomo é composto por três partículas subatômicas principais:
                    prótons, nêutrons e elétrons. Cada uma tem uma função e características distintas.

                    <br><br>Prótons: São partículas com carga positiva e localizadas no núcleo do átomo. O número de
                    prótons
                    define o número atômico de um elemento, que é o que diferencia os elementos químicos. O número
                    atômico é usado para identificar um elemento na tabela periódica (por exemplo, o hidrogênio tem 1
                    próton, e o carbono tem 6 prótons).

                    <br><br>Nêutrons: Partículas sem carga elétrica (neutras) que também estão localizadas no núcleo. Os
                    nêutrons ajudam a estabilizar o núcleo, evitando a repulsão entre os prótons (pois todos têm carga
                    positiva e se repeliriam). Eles também influenciam a massa atômica do átomo, mas não afetam a sua
                    identidade química. Diferentes números de nêutrons em átomos do mesmo elemento geram isótopos, como
                    o carbono-12 e o carbono-14, que têm o mesmo número de prótons, mas diferentes números de nêutrons.

                    <br><br>Elétrons: Partículas com carga negativa que orbitam ao redor do núcleo, em níveis de energia
                    ou
                    camadas eletrônicas. O número de elétrons em um átomo neutro é igual ao número de prótons,
                    garantindo que a carga total do átomo seja neutra. Os elétrons são responsáveis pelas propriedades
                    químicas do átomo, pois é a partir de sua distribuição e configuração que o átomo pode formar
                    ligações químicas com outros átomos.
                </p>

                <h2 id="segundo" class="text-3xl font-Montserrat font-bold text-black mb-4">Modelos Atômicos e
                    Evolução do Conceito</h2>
                <p class="text-justify mb-4 text-black">
                    A compreensão da estrutura atômica evoluiu ao longo do tempo, com diferentes modelos sendo propostos
                    para tentar explicar a organização do átomo e o comportamento de suas partículas.

                    <br><br>Modelo de Dalton (1803): Propôs que o átomo era uma partícula indivisível e esférica. Esse
                    modelo
                    não considerava a existência de subpartículas, como prótons, nêutrons e elétrons, mas ajudou a
                    estabelecer que os átomos combinam-se em proporções simples para formar compostos.

                    <br><br>Modelo de Thomson (1897): Também conhecido como o modelo do pudim de passas, sugeria que os
                    elétrons
                    estavam incrustados em uma "massa positiva", semelhante a um pudim com passas (os elétrons). Esse
                    modelo surgiu após a descoberta do elétron por J.J. Thomson.

                    <br><br>Modelo de Rutherford (1911): Através do experimento da folha de ouro, Rutherford propôs que
                    o átomo
                    tem um núcleo central pequeno e denso, onde estão concentrados os prótons e nêutrons, e que os
                    elétrons circulam em torno do núcleo, em regiões de grande vazio. Esse modelo foi importante, mas
                    não explicava completamente o comportamento dos elétrons.

                    <br><br>Modelo de Bohr (1913): Bohr modificou o modelo de Rutherford, sugerindo que os elétrons se
                    movem em
                    órbitas fixas ou camadas ao redor do núcleo, com quantização de energia (os elétrons só podem ocupar
                    certas órbitas específicas). Esse modelo explicava a estabilidade do átomo e a emissão de luz (como
                    no espectro de linhas).

                    <br><br>Modelo Quântico (1926): Baseado nas teorias da mecânica quântica, esse modelo é o mais
                    atual. Ele
                    descreve os elétrons não em órbitas fixas, mas em orbitais (regiões do espaço com maior
                    probabilidade de encontrar um elétron). Os elétrons não têm trajetórias bem definidas, mas estão
                    distribuídos em níveis de energia discretos, e suas propriedades podem ser descritas apenas
                    probabilisticamente.
                </p>
                <div class="flex justify-center">
                    <img class="mt-6 w-96" src="{{asset('imagens/particulasatomicas.webp')}}" alt="">
                </div><br><br>
                <h2 id="terceiro" class="text-3xl font-Montserrat font-bold text-black mb-4">Níveis de Energia,
                    Isótopos e Íons</h2>
                <p class="text-justify mb-4 text-black"> A estrutura atômica também envolve a distribuição dos elétrons
                    em níveis de energia, a existência de isótopos e a formação de íons.

                    <br><br>Níveis de Energia (ou camadas eletrônicas): Os elétrons estão organizados em camadas ao redor do
                    núcleo, com cada camada podendo comportar um número máximo de elétrons: 2 na camada K, 8 na camada
                    L, 18 na camada M, 32 na camada N, e assim por diante. Cada camada tem subníveis (s, p, d, f) que
                    possuem diferentes capacidades para abrigar elétrons. A distribuição dos elétrons nas camadas
                    determina as propriedades químicas do átomo, e os elétrons na camada mais externa (camada de
                    valência) são os mais importantes nas reações químicas.

                    <br><br>Isótopos: São átomos do mesmo elemento (mesmo número de prótons) mas com diferente número de
                    nêutrons. Isso resulta em uma massa atômica diferente. Por exemplo, o carbono tem isótopos como o
                    carbono-12 (12 prótons e 6 nêutrons) e o carbono-14 (12 prótons e 8 nêutrons), sendo o carbono-14
                    utilizado em datações arqueológicas. Isótopos podem ser estáveis ou radioativos (quando se
                    desintegram espontaneamente).

                    <br><br>Íons: São átomos que ganham ou perdem elétrons, resultando em uma carga elétrica líquida. Quando um
                    átomo perde um ou mais elétrons, ele se torna um íon positivo ou cátion. Quando um átomo ganha
                    elétrons, ele se torna um íon negativo ou ânion. A formação de íons é importante para as reações
                    químicas, pois é a troca ou compartilhamento de elétrons entre íons que forma as ligações iônicas.
                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Qual das partículas subatômicas define o número atômico de um elemento?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Elétron</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Próton</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Nêutron</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Núcleo</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) No modelo atômico de Rutherford, qual é a principal característica da estrutura atômica?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Os elétrons estão incrustados em uma massa positiva</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) O átomo possui um núcleo central denso com elétrons ao redor</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Os elétrons orbitam em níveis de energia específicos</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) O átomo é uma partícula indivisível e esférica</span>
                        </li>
                        <br>

                        <li class="mb-2">
                            <p>3) Como são chamados os átomos que possuem o mesmo número de prótons, mas diferentes números de nêutrons?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) Íons</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) Cátions</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) Isótopos</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) Isômeros</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) Qual é o modelo atômico que descreve os elétrons como distribuídos em orbitais com posições probabilísticas? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) Modelo de Dalton</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Modelo de Thomson</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) Modelo de Bohr</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) Modelo Quântico</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) O que acontece quando um átomo perde um ou mais elétrons?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) Ele se torna um ânion</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) Ele se torna um cátion</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) Ele se torna um nêutron</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) Ele se torna um isótopo</span></li>


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