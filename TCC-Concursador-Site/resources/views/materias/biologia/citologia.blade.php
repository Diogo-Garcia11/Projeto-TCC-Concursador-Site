<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
<x-app-layout>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p> <!-- Adicionei uma margem horizontal -->
            <a href="{{ route('materias', ['section' => 'biologia']) }}#biologia"
                class="mb-4 text-gray-500 underline inline-block">Biologia</a>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Citologia</h1>
                <p class="text-black">A citologia é o ramo da biologia que estuda as células, as unidades fundamentais
                    dos seres vivos. Este campo abrange o estudo da estrutura, função e composição das células, além dos
                    processos celulares, como divisão, comunicação e metabolismo.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/citologia.jpg')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#o-que-e-citologia" class="text-kblue hover:text-black hover:!text-black">1- O que
                                é
                                citologia?</a></li>
                        <li><a href="#tipos-de-celulas" class="text-kblue hover:text-black hover:!text-black">2-
                                Tipos de células</a></li>
                        <li><a href="#partes-das-celulas" class="text-kblue hover:text-black hover:!text-black">3-
                                Partes das células</a></li>
                        <li><a href="#teoria-celular" class="text-kblue hover:text-black hover:!text-black">4- Teoria
                                Celular</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black ">5-
                                Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="o-que-e-citologia" class="text-3xl font-Montserrat font-bold text-black mb-4">O que é citologia
                </h2>
                <p class="text-justify mb-4 text-black">A citologia é a área da biologia que estuda as células, que são
                    as menores unidades estruturais e funcionais dos seres vivos. Esse campo explora a estrutura,
                    composição, funcionamento e processos das células, como a divisão celular, o metabolismo e a
                    comunicação entre células. A citologia analisa os diferentes tipos de células – como células
                    procariontes (bactérias) e eucariontes (células de plantas e animais) – e suas organelas internas,
                    como núcleo, mitocôndrias e ribossomos, que desempenham funções específicas essenciais para a vida.
                </p>

                <h2 id="historia-da-genetica" class="text-3xl font-Montserrat font-bold text-black mb-4">Tipos de
                    células</h2>
                <p class="text-justify mb-4 text-black">
                <p class="text-black">As células, apesar de serem as unidades fundamentais de todos os
                    seres vivos, apresentam grande variedade em termos de estrutura e organização. Elas são divididas em
                    dois tipos principais: células procarióticas e eucarióticas. Cada uma possui características
                    próprias e compõe diferentes grupos de organismos, como veremos a seguir.</p>

                <br>
                <h1 class="font-bold text-black">Células Procarióticas</h1>

                <br>
                <p class="text-black">As células procarióticas são estruturas mais simples e primitivas, típicas de
                    organismos
                    unicelulares, como as bactérias e arqueas, que pertencem ao reino Monera. Nessas células, o material
                    genético não está delimitado por uma membrana nuclear, ou seja, elas não possuem núcleo verdadeiro,
                    e
                    seu DNA fica disperso no citoplasma, em uma região chamada nucleoide.

                    <br>As procariontes também se distinguem pela ausência de organelas membranosas, como mitocôndrias e
                    retículo endoplasmático. A única organela presente nelas é o ribossomo, que é responsável pela
                    síntese
                    de proteínas e é estruturalmente mais simples do que o das células eucarióticas. Essa simplicidade
                    permite que as células procarióticas sejam metabolicamente eficientes e rápidas na reprodução,
                    principalmente por meio da divisão binária.
                </p>

                <br>
                <h1 class="font-bold text-black">Células eucarióticas</h1>

                <br>
                <p class="text-black">As células eucarióticas, por outro lado, possuem uma estrutura mais complexa e são
                    encontradas
                    em organismos multicelulares, como plantas, animais, fungos e protistas. A principal característica
                    das
                    células eucarióticas é a presença de um núcleo verdadeiro, envolto por uma membrana chamada
                    carioteca,
                    onde o material genético (DNA) é armazenado e protegido. Esse núcleo permite uma regulação mais
                    eficiente das funções celulares e uma organização do material genético.

                    <br><br>Essas células também possuem diversas organelas membranosas, como as mitocôndrias
                    (responsáveis
                    pela produção de energia), o retículo endoplasmático (envolvido na síntese e transporte de proteínas
                    e
                    lipídios), o complexo de Golgi (que modifica e distribui proteínas) e os lisossomos (que participam
                    da
                    digestão intracelular). Em células vegetais, encontramos também os cloroplastos, responsáveis pela
                    fotossíntese, e a parede celular, que confere resistência estrutural.
                </p>

                <br>
                <h1 class="font-bold text-black">Diferenças Fundamentais entre Procariontes e Eucariontes</h1>

                <br>
                <p class="text-black">Núcleo: As células procarióticas não têm núcleo, enquanto as eucarióticas possuem
                    um núcleo bem
                    definido.
                    Organelas Membranosas: Somente as células eucarióticas apresentam organelas envoltas por membranas.
                    Complexidade e Tamanho: As células eucarióticas são maiores e estruturalmente mais complexas que as
                    procarióticas.
                    Reprodução: As procariontes se reproduzem principalmente por divisão binária, um processo rápido e
                    direto, enquanto as eucariontes podem se dividir por mitose e meiose, permitindo uma reprodução mais
                    complexa e, no caso da meiose, contribuindo para a variabilidade genética.

                    <br><br>Hoje, a Genética está na vanguarda de muitos avanços científicos, especialmente na área
                    médica, onde é fundamental para a identificação de doenças e o mapeamento genético. As pesquisas
                    atuais buscam aplicar esses conhecimentos para melhorar a saúde da população e desenvolver novas
                    abordagens para o tratamento de doenças genéticas.

                    brOs genes desempenham um papel crucial na expressão das características de um organismo, uma vez
                    que eles codificam a produção de proteínas, que são substâncias vitais para a formação e o
                    funcionamento das células. A síntese de proteínas é, portanto, o processo pelo qual as instruções
                    contidas nos genes são "traduzidas" em estruturas funcionais que realizam as atividades necessárias
                    para a vida.
                </p><br>

                <h2 id="partes-das-celulas" class="text-3xl font-Montserrat font-bold text-black mb-4">Partes das
                    células
                </h2>
                <class="text-justify mb-4 text-black"> <span class="text-black text-bold">
                        <p>As células são divididas em três partes principais: membrana plasmática, citoplasma e núcleo.
                            Cada uma dessas partes desempenha funções específicas e essenciais para o funcionamento
                            celular, garantindo que a célula possa se proteger, realizar processos metabólicos e
                            coordenar suas atividades.</p>

                        <br> <span class="font-bold">• Membrana Plasmática:</span>
                        <p>A membrana plasmática é a camada mais externa da célula e funciona como uma barreira
                            protetora que delimita o espaço celular, separando o meio interno do externo. Ela é composta
                            por uma bicamada de fosfolipídios com proteínas inseridas, formando uma estrutura
                            lipoproteica. Esse arranjo permite que a membrana seja seletivamente permeável, controlando
                            o que entra e sai da célula. Além disso, a membrana plasmática possui receptores que
                            detectam sinais externos, permitindo à célula responder a mudanças em seu ambiente.</p>

                        <br><span class="font-bold">• Citoplasma:</span>
                        <p> O citoplasma é o meio interno da célula, onde as organelas estão suspensas em um líquido
                            viscoso chamado hialoplasma (ou citosol). O citoplasma abriga várias organelas, cada uma com
                            funções específicas que mantêm a célula em funcionamento. As organelas podem ser comparadas
                            a "departamentos" que realizam tarefas vitais para a célula, como síntese de proteínas,
                            armazenamento e digestão de substâncias. Entre as principais organelas estão:

                            <br><br>Ribossomos: Responsáveis pela síntese de proteínas, unindo aminoácidos para formar
                            cadeias
                            proteicas. Podem estar livres no citoplasma ou associados ao retículo endoplasmático.

                            <br><br>Retículo Endoplasmático Liso: É formado por cavidades tubulares sem ribossomos em
                            sua
                            superfície. Suas principais funções incluem a síntese de lipídios e o metabolismo de
                            carboidratos.

                            <br><br>Retículo Endoplasmático Rugoso: Possui cavidades achatadas com ribossomos aderidos à
                            sua
                            membrana, sendo importante na produção de proteínas que serão exportadas ou inseridas na
                            membrana.

                            <br><br>Complexo Golgiense (ou Complexo de Golgi): Formado por várias sacolas membranosas
                            empilhadas, ele modifica, armazena e transporta proteínas e lipídios. Além disso, é
                            responsável pela formação do acrossomo nos espermatozoides e pela secreção de substâncias.

                            <br><br>Mitocôndrias: São organelas envoltas por duas membranas, sendo a interna dobrada em
                            cristas.
                            Realizam a respiração celular, processo que gera energia na forma de ATP, essencial para as
                            atividades celulares.

                            <br><br>Lisossomos: Pequenas vesículas que contêm enzimas digestivas. Atuam na degradação de
                            resíduos e substâncias não mais necessárias para a célula, funcionando como um sistema de
                            reciclagem interno.
                        </p>

                        <br> <span class="font-bold">• Núcleo:</span>
                        <p> O núcleo é a estrutura mais interna e é considerado o centro de controle da célula, pois
                            armazena o material genético (DNA), que regula todas as atividades celulares. O núcleo foi
                            descoberto pelo botânico Robert Brown e é geralmente arredondado, sendo envolvido por uma
                            membrana dupla chamada carioteca, que apresenta poros para troca de substâncias com o
                            citoplasma.

                            Dentro do núcleo, encontram-se a cromatina (material genético organizado em fios), o
                            nucléolo (onde ocorre a produção de ribossomos) e as enzimas necessárias para a replicação e
                            transcrição do DNA. Essa organização permite que o núcleo coordene eficientemente a síntese
                            de proteínas e a divisão celular, sendo fundamental para a reprodução e hereditariedade.
                        </p>

                        <img class="mt-6 w-96" src="{{asset('imagens/celulas.webp')}}" alt="">

                        <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                        <div class="mt-6">
                            <ul class="text-black">
                                <li class="mb-2">
                                    <p>1) A citologia é o ramo da biologia que estuda:</p>
                                </li>
                                <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) A
                                        estrutura, função e composição das células.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) A
                                        composição e organização dos tecidos dos seres vivos.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) As
                                        interações entre os ecossistemas.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) A anatomia
                                        dos órgãos internos dos seres vivos.</span></li>
                                <br>

                                <li class="mb-2">
                                    <p>2) Qual das alternativas caracteriza corretamente uma célula procariótica?</p>
                                </li>
                                <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Possui
                                        núcleo verdadeiro e organelas membranosas.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) É composta
                                        por mitocôndrias e retículo endoplasmático rugoso.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Tem o
                                        material genético disperso no citoplasma.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Apresenta
                                        núcleo delimitado por carioteca.</span></li>
                                <br>

                                <li class="mb-2">
                                    <p>3) A membrana plasmática tem como principal função:</p>
                                </li>
                                <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                        onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) Síntese de
                                        proteínas e controle da divisão celular.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                        onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B)
                                        Armazenamento de nutrientes e transporte intracelular.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-3" value="1"
                                        onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) Delimitar
                                        o espaço celular e controlar a entrada e saída de substâncias.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                        onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) Produção
                                        de energia e respiração celular..</span></li>
                                <br>

                                <li class="mb-2">
                                    <p>4) Qual organela é responsável pela produção de energia na célula?</p>
                                </li>
                                <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                        onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A)
                                        Lisossomo</span></li>
                                <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                        onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Complexo
                                        Golgiense</span></li>
                                <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                        onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C)
                                        Ribossomo</span></li>
                                <li class="radio-container"><input type="radio" name="questao-4" value="1"
                                        onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D)
                                        Mitocôndria</span></li>
                                <br>

                                <li class="mb-2">
                                    <p>5) Sobre o núcleo das células eucarióticas, é correto afirmar que: </p>
                                </li>
                                <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                        onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) Não possui
                                        envoltório nuclear e apresenta o material genético no citoplasma.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-5" value="1"
                                        onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) Armazena o
                                        DNA e regula as atividades celulares.
                                        é a
                                        expressão externa, enquanto o fenótipo é a composição genética.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                        onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) Tem função
                                        exclusiva de produção de proteínas.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                        onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) É uma
                                        organela presente apenas em células procarióticas.</span></li>


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