<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Ecologia</h1>
                <p class="text-black">O objetivo central da ecologia é compreender a distribuição e a abundância dos organismos e como fatores ambientais, como o clima, o solo e a disponibilidade de nutrientes, influenciam essas interações.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/ecologia.webp')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#o-que-e-ecologia" class="text-kblue hover:text-black hover:!text-black">1- O que é ecologia</a></li>
                        <li><a href="#niveis-de-organizacao" class="text-kblue hover:text-black hover:!text-black">2- Níveis de organização</a></li>
                        <li><a href="#conceitos-basicos" class="text-kblue hover:text-black hover:!text-black">3- Conceitos Básicos</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4- Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="o-que-e-ecologia" class="text-3xl font-Montserrat font-bold text-black mb-4">O que é ecologia</h2>
                <p class="text-justify mb-4 text-black">A ecologia é a ciência que investiga as interações entre os seres vivos e o ambiente em que habitam. A origem da palavra vem dos termos gregos oikos, que significa "casa" ou "lugar onde se vive", e logos, que significa "estudo". Portanto, a ecologia pode ser entendida como o estudo do "lugar onde se vive". O termo foi introduzido pelo biólogo alemão Ernst Haeckel em 1869, que o definiu como a ciência que explora a relação dos organismos com seu ambiente.

                    <br><br>A definição de ecologia foi aprimorada ao longo dos anos, com a contribuição de diversos pesquisadores. Um dos mais influentes, Eugene Odum, descreve a ecologia como o "estudo das relações dos organismos ou grupos de organismos com seu ambiente, ou a ciência das inter-relações que conectam os seres vivos ao seu entorno". Assim, a ecologia busca entender como os organismos e suas interações influenciam o meio em que vivem e, ao mesmo tempo, como as condições ambientais moldam as características e o comportamento desses organismos.

                    <br><br>O interesse humano pelo meio ambiente e suas interações é tão antigo quanto a própria existência da humanidade. Conhecer o ambiente era essencial para a sobrevivência, e essa necessidade levou à descrição e classificação dos diversos elementos ecológicos, fortalecendo a relação da ecologia com a história natural.

                    <br><br>Atualmente, a ecologia é uma ciência interdisciplinar, que se conecta com áreas como evolução, genética, etologia (estudo do comportamento) e fisiologia. Essa interconexão permite um entendimento mais profundo dos mecanismos que regem as interações entre os organismos e seu ambiente, tanto biótico quanto abiótico.

                    <br><br>Além disso, os ecólogos utilizam modelos teóricos e matemáticos para simular a realidade da natureza, permitindo previsões sobre como os ecossistemas funcionam. Esses modelos são essenciais para desenvolver estratégias de conservação e gestão ambiental, especialmente em um mundo onde as mudanças climáticas e a perda de biodiversidade estão se tornando questões urgentes.

                    <br><br>A ecologia, portanto, não apenas busca compreender as relações entre os seres vivos e seu ambiente, mas também serve como uma ferramenta fundamental para a preservação do nosso planeta e para garantir a sustentabilidade das interações que sustentam a vida.
                </p>

                <h2 id="niveis-de-organizacao" class="text-3xl font-Montserrat font-bold text-black mb-4">Níveis de organização</h2>
                <p class="text-justify mb-4 text-black">
                    Os níveis de organização na biologia, especialmente na ecologia, representam diferentes escalas que os ecologistas utilizam para estudar e entender os sistemas naturais. Esses níveis, dispostos em ordem crescente de complexidade, são:

                    <br><br> <span class="font-bold">• Organismo individual:</span> Este é o nível mais básico, onde os ecologistas analisam um único organismo e suas características, comportamentos e adaptações ao ambiente. Por exemplo, uma onça-pintada pode ser estudada em termos de seu habitat, dieta, comportamento de caça e estratégias de sobrevivência.

                    <br><br> <span class="font-bold">• População:</span> Neste nível, o foco é em grupos de organismos da mesma espécie que interagem em uma área específica. Os ecologistas estudam dinâmicas populacionais, como taxas de natalidade, mortalidade, migração e densidade populacional. Um exemplo seria a população de onças-pintadas em uma determinada região da Floresta Amazônica, onde se examinam os fatores que influenciam o crescimento ou declínio dessa população.

                    <br><br> <span class="font-bold">• Comunidade:</span> Aqui, os ecologistas estudam todas as populações de diferentes espécies que habitam uma área específica e como elas interagem entre si. Isso inclui a análise de relações ecológicas, como predação, competição e simbiose. Um exemplo seria a interação entre a população de onças-pintadas e outras espécies que vivem na mesma área, como aves, plantas e microorganismos, em um trecho da Floresta Amazônica.

                    <br><br> <span class="font-bold">• Ecossistema:</span> Um ecossistema é formado pela comunidade de organismos interagindo com seu ambiente físico, incluindo fatores abióticos como solo, clima, água e nutrientes. Os ecologistas consideram as transferências de energia e a circulação de nutrientes dentro desses sistemas. Por exemplo, a Floresta Amazônica representa um ecossistema complexo, onde todos os seres vivos e os recursos naturais interagem continuamente.

                    <br><br> <span class="font-bold">• Biosfera: </span> Este é o nível mais abrangente e engloba todos os biomas e ecossistemas da Terra. A biosfera representa a parte do planeta onde a vida é possível e estuda as interações globais entre organismos e seus ambientes. O planeta Terra é um exemplo da biosfera, onde se analisam as grandes questões relacionadas à distribuição de vida, mudanças climáticas e suas implicações para a biodiversidade.
                </p>
                <div class="flex justify-center">
                    <img class="p-1 mb-4" src="{{asset('imagens/niveis-organizacao-ecologia.webp')}}" alt="">
                </div>
                <h2 id="conceitos-basicos" class="text-3xl font-Montserrat font-bold text-black mb-4">Conceitos Básicos</h2>
                <p class="text-justify mb-4 text-black"> <span class="font-bold">• Fatores bióticos</span>Esses são todos os organismos vivos que existem em um ecossistema, além das interações que ocorrem entre eles. Os fatores bióticos incluem não apenas as relações entre indivíduos da mesma espécie (interações intraespecíficas), mas também as interações entre diferentes espécies (interações interespecíficas). Exemplos de fatores bióticos são plantas, animais, fungos e microorganismos.

                    <br><br> <span class="font-bold">• Fatores abióticos</span> Os fatores abióticos referem-se aos componentes não vivos do ambiente que influenciam a presença e a distribuição dos fatores bióticos. Esses fatores podem ser divididos em:
                    <br><br>Fatores abióticos físicos: Incluem clima, temperatura, umidade do ar, velocidade do vento, pH do solo e da água, entre outros. Esses elementos determinam as condições ambientais em que os organismos vivem.

                    <br><br>Fatores abióticos químicos: São compostos químicos presentes no ambiente, como nutrientes (nitrogênio, fósforo, oxigênio e carbono) que afetam o crescimento e a sobrevivência dos organismos.

                    <br><br> <span class="font-bold">• Habitat e nicho ecológico</span> O habitat é o local físico onde um organismo vive. Por exemplo, uma onça-pintada pode ser encontrada na Floresta Amazônica, na Mata Atlântica ou no Pantanal. Já o nicho ecológico refere-se à função que essa espécie desempenha dentro do habitat. É a forma como ela interage com outros organismos e com seu ambiente. Por exemplo, a onça-pintada é um predador noturno, carnívoro e, frequentemente, vive de forma solitária ou em pequenos grupos de até quatro indivíduos.

                    <br><br> <span class="font-bold">• Fluxo de energia</span>O fluxo de energia em um ecossistema descreve como a energia se move através dele, começando geralmente como luz solar, que é capturada pelas plantas (produtores) e, em seguida, transferida através dos diferentes níveis tróficos, como herbívoros e carnívoros. Durante esse processo, parte da energia é dissipada na forma de calor.

                    <br><br> <span class="font-bold">• Biodiversidade</span>A biodiversidade refere-se à variedade de formas de vida em todos os níveis, incluindo diversidade genética, diversidade de espécies e diversidade de ecossistemas. A biodiversidade é crucial para a estabilidade dos ecossistemas, pois um maior número de espécies pode contribuir para a resiliência do ecossistema diante de mudanças ambientais.

                    <br><br> <span class="font-bold">• Ecossistema</span> Um ecossistema é um sistema que inclui todos os organismos vivos em uma área específica, além dos componentes não vivos do ambiente, que interagem como uma unidade. Os ecossistemas variam amplamente em tamanho e complexidade, desde pequenas lagoas até vastas florestas e oceanos. Cada ecossistema possui características únicas que influenciam as espécies que nele habitam.

                    <br><br> <span class="font-bold">• Cadeia alimentar e teia alimentar</span>A cadeia alimentar é uma representação linear que descreve a sequência de quem come quem em um ecossistema. Ela ilustra como a energia e os nutrientes são transferidos de um organismo a outro. Em contrapartida, a teia alimentar é uma rede mais complexa que envolve várias cadeias alimentares interconectadas, mostrando como diferentes espécies estão ligadas e dependem umas das outras em um ecossistema.

                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Qual é o objetivo central da ecologia?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Estudar a evolução dos seres vivos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Analisar a história natural dos organismos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Classificar as espécies de plantas e animais.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Compreender a distribuição e a abundância dos organismos e como fatores ambientais influenciam essas interações.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Quem introduziu o termo "ecologia" e em que ano?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Eugene Odum, 1950</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Charles Darwin, 1859</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Ernst Haeckel, 1869.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Gregor Mendel, 1865</span></li>
                        <br>

                        <li class="mb-2">
                            <p>3) O que diferencia habitat de nicho ecológico?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) Habitat é a quantidade de organismos em um local, enquanto nicho ecológico é a relação entre espécies.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) Habitat é a dieta de uma espécie, enquanto nicho ecológico é o espaço que ela ocupa.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) Habitat refere-se ao ambiente físico, enquanto nicho ecológico refere-se à função da espécie nesse ambiente.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) Habitat é o número de espécies em um ecossistema, enquanto nicho ecológico é o clima local.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) O que é uma teia alimentar? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) Uma cadeia linear de quem come quem em um ecossistema.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Uma rede complexa que mostra as interconexões entre várias cadeias alimentares.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) Uma representação do fluxo de energia de um organismo para o outro.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) Um modelo de interações bióticas e abióticas em um ecossistema.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) Qual é a diferença entre genótipo e fenótipo? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) Fatores físicos e químicosspan></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) Fatores químicos e biológicos</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) Fatores físicos e biológicos</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) Fatores bióticos e abióticos</span></li>


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