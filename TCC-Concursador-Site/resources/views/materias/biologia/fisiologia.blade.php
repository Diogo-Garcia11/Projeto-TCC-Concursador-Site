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
            <a href="{{ route('materias', ['section' => 'biologia']) }}#biologia" class="mb-4 text-gray-500 underline inline-block">Biologia</a>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Fisiologia</h1>
                <p class="text-black">A fisiologia é o ramo da biologia que estuda as funções e os processos vitais dos organismos vivos, incluindo os seres humanos. Ela investiga como os sistemas do corpo funcionam, interagem e mantêm o equilíbrio necessário para a vida, um conceito conhecido como homeostase.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/fisiologia.webp')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#o-que-e-fisiologia" class="text-kblue hover:text-black hover:!text-black">1- O que
                                é
                                fisiologia?</a></li>
                        <li><a href="#fisiologia-humana" class="text-kblue hover:text-black hover:!text-black">2- Fisiologia humana</a></li>
                        <li><a href="#fisiologia-vegetal" class="text-kblue hover:text-black hover:!text-black">3- Fisiologia vegetal</a></li>
                        <li><a href="#historia-da-fisiologia" class="text-kblue hover:text-black hover:!text-black">4- História da fisiologia</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black ">5-
                                Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="o-que-e-fisiologia" class="text-3xl font-Montserrat font-bold text-black mb-4">O que é fisiologia?
                </h2>
                <p class="text-justify mb-4 text-black">A fisiologia é um campo da biologia que se dedica ao estudo do funcionamento dos organismos vivos, abrangendo os processos físicos, químicos e biológicos essenciais à manutenção da vida. Ela vai além da simples identificação dos órgãos e estruturas que compõem um ser vivo, buscando entender como esses componentes trabalham de maneira integrada para garantir a homeostase e o funcionamento adequado do organismo.

                    Para entender a fisiologia, é preciso considerar os processos que ocorrem em diferentes níveis de organização biológica, desde as células, passando por tecidos e órgãos, até os sistemas inteiros que compõem o corpo. Isso implica uma análise detalhada das funções que permitem ao organismo crescer, se reproduzir, responder a estímulos, obter e processar nutrientes, e eliminar resíduos. Cada uma dessas funções depende de uma complexa rede de interações entre diferentes sistemas, como o cardiovascular, respiratório, digestivo, nervoso, entre outros.

                    Estudar fisiologia é fundamental não apenas para compreender como o corpo humano e de outros seres vivos funcionam normalmente, mas também para identificar e tratar disfunções e doenças. Por exemplo, é essencial saber como os sistemas reguladores, como o sistema nervoso e o endócrino, mantêm o equilíbrio interno do corpo. A homeostase — ou o equilíbrio dinâmico que o corpo mantém frente às variações internas e externas — é um conceito central na fisiologia.
                </p>

                <h2 id="fisiologia-humana" class="text-3xl font-Montserrat font-bold text-black mb-4">Fisiologia humana</h2>
                <p class="text-justify mb-4 text-black">
                <p class="text-black">A fisiologia humana é o ramo da biologia que se dedica ao estudo do funcionamento do corpo humano, abordando os processos físicos, químicos e biológicos que mantêm o organismo vivo e funcionando de maneira integrada. Ela se concentra em como os diferentes sistemas do corpo interagem para garantir a sobrevivência, o crescimento, a reprodução e a resposta adequada a estímulos internos e externos. O objetivo principal da fisiologia humana é compreender como as diversas funções do corpo estão interligadas e como cada célula, órgão e sistema contribuem para o funcionamento global do organismo.</p>

                <br>
                <h1 class="font-bold text-black">Principais sistemas fisiológicos do corpo humano</h1>

                <br>
                <p class="text-black">O corpo humano é composto por vários sistemas fisiológicos, cada um com funções específicas, mas que trabalham em harmonia para manter o equilíbrio necessário para a vida. Aqui estão alguns dos sistemas mais importantes:
                </p>

                <br>
                <h1 class="font-bold text-black">• Sistema Circulatório</h1>

                <br>
                <p class="text-black">O sistema circulatório, também conhecido como sistema cardiovascular, é responsável pelo transporte de sangue, nutrientes, oxigênio e hormônios para as células do corpo e pela remoção de resíduos metabólicos, como o dióxido de carbono. Ele é composto pelo coração, que bombeia o sangue, e pelos vasos sanguíneos, que incluem artérias, veias e capilares.

                    <br>Função: O coração recebe sangue pobre em oxigênio das veias e o bombeia para os pulmões, onde ocorre a troca de gases (oxigênio entra no sangue e o dióxido de carbono é eliminado). Depois, o sangue oxigenado retorna ao coração e é distribuído por todo o corpo através da circulação sistêmica.
                    <br>Importância: O sistema circulatório é vital para manter os tecidos do corpo oxigenados e nutridos, além de remover produtos de excreção, como o dióxido de carbono.
                </p>

                <br>
                <h1 class="font-bold text-black">• Sistema Digestório</h1>

                <br>
                <p class="text-black">O sistema digestório é responsável pela quebra dos alimentos e pela absorção dos nutrientes necessários para a produção de energia, crescimento e manutenção do corpo. Ele inclui órgãos como a boca, esôfago, estômago, intestinos (delgado e grosso), fígado, pâncreas e vesícula biliar.

                    <br>Função: A digestão começa na boca, onde os alimentos são triturados e misturados com saliva, que contém enzimas. No estômago, ocorre a digestão química e mecânica, enquanto no intestino delgado, a maior parte dos nutrientes é absorvida para a corrente sanguínea. O intestino grosso absorve água e forma as fezes.
                    <br>Importância: A digestão e absorção eficaz dos alimentos garantem que o corpo receba os nutrientes necessários para sua energia e funções vitais.
                </p><br>

                <h1 class="font-bold text-black">• Sistema Endócrino</h1>

                <br>
                <p class="text-black">O sistema endócrino é composto por glândulas que produzem e secretam hormônios para regular processos corporais essenciais, como o crescimento, o metabolismo e a reprodução. As principais glândulas do sistema endócrino incluem a glândula pituitária, glândulas adrenais, tireoide, pâncreas e as gônadas (ovários e testículos).

                    <br>Função: Os hormônios são substâncias químicas que atuam como mensageiros, sinalizando e regulando várias funções no corpo, como a taxa de metabolismo, a resposta ao estresse, o controle da glicose no sangue e o ciclo reprodutivo.
                    <br>Importância: O sistema endócrino mantém o corpo em equilíbrio, ajudando a regular processos como o metabolismo, o crescimento e a reprodução.
                </p><br>

                <h1 class="font-bold text-black">• Sistema Nervoso</h1>

                <br>
                <p class="text-black">O sistema nervoso é o centro de controle do corpo humano, responsável por processar informações sensoriais, coordenar respostas motoras e manter o equilíbrio interno. Ele é dividido em duas partes principais: o sistema nervoso central (SNC), que inclui o cérebro e a medula espinhal, e o sistema nervoso periférico (SNP), que envolve nervos que se ramificam do SNC para os órgãos e músculos.

                    <br>Função: O sistema nervoso transmite sinais elétricos rápidos para coordenar movimentos, perceber estímulos sensoriais (como visão, audição, tato), regular funções vitais automáticas (como a respiração) e tomar decisões cognitivas complexas.
                    <br>Importância: Ele permite que o corpo reaja a mudanças no ambiente, mantenha funções essenciais e coordene os sistemas corporais.
                </p><br>

                <h1 class="font-bold text-black">• Sistema Muscular</h1>

                <br>
                <p class="text-black">O sistema muscular é responsável pelo movimento do corpo e pela manutenção da postura. Ele é composto por três tipos de músculos: esquelético, cardíaco e liso.

                    <br>Função: Os músculos esqueléticos são responsáveis pelos movimentos voluntários e pela movimentação dos ossos. O músculo cardíaco, encontrado no coração, é responsável pelos batimentos cardíacos, enquanto os músculos lisos controlam movimentos involuntários, como a contração dos músculos intestinais e a contração das paredes dos vasos sanguíneos.
                    <br>Importância: O sistema muscular permite tanto os movimentos conscientes (como caminhar e pegar objetos) quanto funções automáticas, como a circulação sanguínea e a digestão.
                </p><br>

                <img class="mt-6 w-96" src="{{asset('imagens/kdd.jpg')}}" alt="">

                <br>
                <h2 id="fisiologia-vegetal" class="text-3xl font-Montserrat font-bold text-black mb-4">Fisiologia vegetal</h2>
                <p class="text-justify mb-4 text-black">
                <p class="text-black">A fisiologia vegetal é uma área da botânica que investiga os processos biológicos, físicos e químicos que ocorrem nas plantas e que são fundamentais para seu crescimento, desenvolvimento e adaptação ao ambiente. O objetivo da fisiologia vegetal é entender como as plantas realizam suas funções vitais, como a obtenção de nutrientes, a fotossíntese, o transporte de água, a respiração e a resposta a estímulos ambientais.

                    Estudar a fisiologia das plantas é essencial para várias áreas, incluindo a agricultura, a ecologia, a biotecnologia e a conservação ambiental, pois a compreensão desses processos permite otimizar o cultivo de plantas, melhorar a produção agrícola e entender a interação das plantas com seus ecossistemas.</p>

                <br>
                <h1 class="font-bold text-black">Principais processos fisiológicos nas plantas</h1>

                <br>
                <h1 class="font-bold text-black">• Fotossíntese</h1>

                <br>
                <p class="text-black">A fotossíntese é, sem dúvida, um dos processos mais importantes na fisiologia vegetal. Ela ocorre principalmente nas folhas das plantas, em estruturas chamadas cloroplastos, que contêm o pigmento clorofila, responsável por capturar a luz solar. Durante a fotossíntese, a planta converte energia luminosa em energia química, utilizando dióxido de carbono (CO₂) do ar e água (H₂O) do solo. Esse processo resulta na produção de glicose (um tipo de açúcar que serve como fonte de energia para a planta) e oxigênio (O₂), que é liberado para a atmosfera.
                    <br><br>Fórmula simplificada:
                    <br><br>
                <div class="text-black">
                    <p>6CO<sub>2</sub> + 6H<sub>2</sub>O + luz → C<sub>6</sub>H<sub>12</sub>O<sub>6</sub> + 6O<sub>2</sub></p>
                </div>
                <br>
                <p class="text-black">Importância: A respiração é fundamental para as plantas, pois sem ela não seria possível realizar processos metabólicos que dependem de energia, como o crescimento celular e a defesa contra doenças.</p>
                </p>


                <br>
                <h1 class="font-bold text-black">• Transporte de Água e Nutrientes</h1>

                <br>
                <p class="text-black">A ascensão de água e nutrientes do solo para as partes superiores da planta é um processo vital para sua sobrevivência. Isso ocorre principalmente através de xilema, que transporta a água absorvida pelas raízes até as folhas, onde é usada na fotossíntese.
                    <br><br>Transporte de água: O movimento de água é impulsionado pela transpiração, um processo em que a água evapora das folhas para a atmosfera, criando um gradiente de pressão que puxa a água pelas raízes.
                    <br><br>Absorção de nutrientes: Além da água, as raízes também absorvem nutrientes minerais do solo, como nitrogênio, fósforo e potássio, essenciais para o crescimento e o desenvolvimento da planta.
                    <br><br>Importância: O transporte de água e nutrientes é crucial para garantir a hidratação da planta e a distribuição dos elementos necessários para a fotossíntese, o crescimento e a manutenção celular.
                </p><br>

                <h1 class="font-bold text-black">• Hormônios Vegetais</h1>

                <br>
                <p class="text-black">Os hormônios vegetais são substâncias químicas que regulam diversas funções nas plantas, desde o crescimento até a resposta a estímulos ambientais. Alguns dos principais hormônios vegetais incluem:

                    <br><br>Auxinas: Estimulam o crescimento celular e o alongamento das células. São importantes no crescimento das raízes e na fototropismo (movimento em resposta à luz).
                    <br><br>Giberelinas: Estimulam o crescimento e o alongamento das células, além de induzir a germinação das sementes.
                    <br><br>Citocininas: Estimulam a divisão celular e são importantes na formação de ramos laterais.
                    <br><br>Ácido abscísico (ABA): Está envolvido na resposta ao estresse, como a seca, e regula a abertura e fechamento dos estômatos.
                    <br><br>Etileno: Regula o amadurecimento dos frutos e a abscisão (queda) de folhas e frutos.
                    <br><br>Importância: Os hormônios vegetais permitem que a planta se adapte a mudanças ambientais, controle seu crescimento e coordene processos vitais, como a germinação e a resposta ao estresse.
                </p><br>

                <h1 class="font-bold text-black">• Movimentos Vegetais</h1>

                <br>
                <p class="text-black">As plantas podem apresentar movimentos vegetais em resposta a fatores ambientais. Esses movimentos são frequentemente classificados em movimentos tropismos e nastismos:

                    <br><br>Tropismos: São movimentos direcionais que ocorrem em resposta a estímulos, como luz (fototropismo), gravidade (geotropismo) ou água (hidrotropismo).

                    <br><br>Nastismos: São movimentos não direcionais, geralmente rápidos, e que não dependem da direção do estímulo. Um exemplo clássico é o movimento das folhas do mimosa, que se fecham em resposta ao toque.

                    <br><br>Importância: Os movimentos vegetais ajudam as plantas a otimizar sua exposição à luz (fototropismo), buscar água (hidrotropismo) e a se proteger de condições adversas (como o fechamento das folhas em resposta ao toque ou à seca).
                </p><br>

                <img class="mt-6 w-96" src="{{asset('imagens/fotossintese.webp')}}" alt="">

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) O que é fisiologia</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Apenas a anatomia dos organismos vivos.</span></li>

                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) A interação entre diferentes espécies no ecossistema.</span></li>

                        <li class="radio-container"><input type="radio" name="questao-1" value="1" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) As funções e os processos vitais dos organismos vivos.</span></li>

                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Os efeitos dos poluentes no ambiente.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Qual é o principal objetivo da fisiologia humana?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A)  Estudar a anatomia dos órgãos do corpo humano.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Investigar como os sistemas do corpo humano interagem para manter a homeostase.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Identificar as doenças que afetam o corpo humano.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Analisar o comportamento dos seres humanos em diferentes ambientes.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>3) Qual é a função do sistema circulatório no corpo humano?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) Regular o metabolismo e a reprodução através de hormônios.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) Transportar sangue, oxigênio, nutrientes e remover resíduos metabólicos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) Prover os nutrientes necessários através da digestão e absorção.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) Coordenar os movimentos musculares do corpo humano.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) Qual é o papel da fotossíntese na fisiologia vegetal?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) Produzir hormônios vegetais que ajudam no crescimento das plantas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Transportar nutrientes através do sistema vascular da planta.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) Regular a troca de gases entre as plantas e o ambiente.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D)Converter energia luminosa em energia química para a planta, utilizando dióxido de carbono e água.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) O que caracteriza os movimentos tropismos nas plantas? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) Movimentos não direcionais que ocorrem em resposta ao toque. </span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) Movimentos dos estômatos para controlar a perda de água.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) Movimentos rápidos e involuntários causados pela transpiracão.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D)  Movimentos direcionais que ocorrem em resposta a estímulos específicos como luz, gravidade ou água.</span></li>


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