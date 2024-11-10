<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p> <!-- Adicionei uma margem horizontal -->
            <a href="{{ route('materias', ['section' => 'geografia']) }}#geografia" class="mb-4 text-gray-500 underline inline-block">Geografia</a>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Cartografia</h1>
                <p class="text-black">A cartografia é a ciência e a arte de criar representações gráficas da superfície terrestre, como mapas e cartas, com o objetivo de representar, analisar e comunicar informações espaciais.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/cartografia.webp')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#o-que-e-cartografia" class="text-kblue hover:text-black hover:!text-black">1- O que é a cartografia?</a></li>
                        <li><a href="#tipos-de-cartografia" class="text-kblue hover:text-black hover:!text-black">2- Tipos de cartografia</a></li>
                        <li><a href="#conceitos-basicos" class="text-kblue hover:text-black hover:!text-black">3- Conceitos Básicos da cartografia</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4- Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="o-que-e-cartografia" class="text-3xl font-Montserrat font-bold text-black mb-4">O que é a cartografia</h2>
                <p class="text-justify mb-4 text-black">A cartografia é uma área do conhecimento geográfico dedicada ao estudo e ao desenvolvimento de técnicas para representar a superfície terrestre e os diversos aspectos do espaço geográfico em um formato reduzido e compreensível, geralmente em um plano ou mapa. Além disso, envolve o processo de leitura e interpretação desses mapas. Segundo a Associação Cartográfica Internacional (ICA), a cartografia é "a disciplina que se ocupa com a arte, a ciência e a tecnologia da produção de mapas", uma definição que destaca tanto os aspectos técnicos quanto criativos da área.

                    Essa área do conhecimento está intimamente relacionada à representação do espaço, pois, por meio de mapas e outros produtos cartográficos, conseguimos traduzir a complexidade do mundo real em formatos que facilitam a compreensão e análise dos fenômenos geográficos.

                    <br><br><span class="font-bold">• Produtos Cartográficos:</span><br><br>Os produtos cartográficos são os resultados da aplicação das técnicas de cartografia. Tradicionalmente, esses produtos incluem:

                    <br><br> Mapas: Representações gráficas que ilustram áreas específicas da Terra, com detalhes sobre elementos naturais, humanos ou ambos.
                    <br><br>Globos Terrestres: Modelos tridimensionais da Terra, úteis para representar a forma esférica do planeta.
                    <br><br>Planisférios: Mapas do mundo projetados de forma a representar toda a superfície terrestre em uma única visão.
                    <br><br>Croquis: Desenhos ou esboços rápidos, geralmente com pouca precisão, mas úteis para representar áreas de forma simples.

                    <br><br><span class="font-bold">• Evolução da Cartografia:</span><br><br>Antigamente, os produtos cartográficos eram feitos manualmente, o que levava a um processo demorado e de certa imprecisão, configurando a cartografia como uma verdadeira "arte". Contudo, com o avanço das tecnologias de comunicação e dos equipamentos de medição, a cartografia passou a incorporar novas ferramentas que transformaram radicalmente suas práticas.

                    O uso de aerofotografias (imagens obtidas por aeronaves) e imagens de satélite permitiu uma maior precisão e cobertura global, além de facilitar a atualização constante dos dados geográficos. Essas tecnologias não só tornaram os mapas mais detalhados e precisos, mas também possibilitaram o desenvolvimento de mapas digitais e interativos, os quais podem ser consultados em tempo real.

                    Além disso, o advento de sistemas de GPS (Sistema de Posicionamento Global) e Sistemas de Informação Geográfica (SIG) possibilitou que a cartografia se integrasse com a tecnologia digital. Esses dispositivos permitem que os usuários localizem sua posição com precisão e acompanhem percursos em tempo real, transformando a cartografia em uma ferramenta essencial para atividades cotidianas, como navegação, planejamento urbano, e até mesmo a gestão de desastres naturais.
                </p>

                <h2 id="tipos-de-cartografia" class="text-3xl font-Montserrat font-bold text-black mb-4">Tipos de cartografia</h2>
                <p class="text-justify mb-4 text-black">
                    A cartografia pode ser dividida em duas grandes áreas, de acordo com o tipo de informação que cada uma visa representar e o enfoque que adota na sua produção. Essas duas áreas principais são a cartografia temática e a cartografia sistemática, cada uma com objetivos e características distintas, mas ambas essenciais para a compreensão e análise do espaço geográfico.

                    <br><br> <span class="font-bold">• Cartografia Temática:</span> A cartografia temática é voltada para a representação de aspectos específicos e diversos fenômenos que ocorrem ou estão presentes em uma determinada área. Ao contrário da cartografia sistemática, que se concentra nas características físicas e naturais do território, a cartografia temática abrange uma gama ampla de assuntos que podem ser representados espacialmente.

                    Os mapas temáticos podem tratar de uma grande variedade de temas, como:

                    <br><br><span class="font-bold">População:</span> Distribuição demográfica, densidade populacional, migração, etc.
                    <br><br><span class="font-bold">Economia:</span> Uso do solo, distribuição de atividades econômicas, setores industriais, agrícolas, entre outros.
                    <br><br><span class="font-bold">Infraestrutura:</span> Rede de transportes, abastecimento de água, eletricidade, saneamento, etc.
                    <br><br><span class="font-bold">Cultura:</span> Idiomas, religiões, práticas culturais e sociais de diferentes grupos populacionais.
                    <br><br><span class="font-bold">Ambiente e Natureza:</span> Biomas, clima, vegetação, ecossistemas, uso do solo e áreas protegidas.

                    <br><br>A principal característica dos mapas temáticos é que eles são projetados para analisar ou explicar um fenômeno específico dentro de um recorte espacial. Por exemplo, um mapa que mostra a distribuição de diferentes tipos de vegetação em uma região ou um mapa que indica as zonas de risco de desastres naturais em uma cidade. Esses mapas são frequentemente datados e produzidos para análises temporais ou para atender a demandas específicas, como estudos acadêmicos, planejamento urbano, gestão ambiental, ou elaboração de políticas públicas.
                    </p>

                <div class="flex justify-center">
                    <img class="p-1 mb-4" src="{{asset('imagens/cartografiatematica.webp')}}" alt="">
                </div>
                
                <p class="text-black">
                <br><br> <span class="font-bold">• Cartografia Sistemática: </span> A cartografia sistemática, por outro lado, se dedica à representação das características físicas e naturais do território de forma padronizada e com alto nível de precisão. Os produtos dessa área têm um enfoque mais técnico e buscam representar a realidade geográfica de maneira detalhada e objetiva, com informações que podem ser usadas por longos períodos sem grandes alterações.
                    <br><br>Os principais produtos da cartografia sistemática incluem as cartas topográficas, que apresentam informações detalhadas sobre o relevo, hidrografia, vegetação, limites administrativos, e outras características do espaço físico. Essas cartas são fundamentais para estudos e análises relacionadas à paisagem natural, ao planejamento territorial, à gestão de recursos naturais, e a várias outras atividades que exigem um entendimento preciso do espaço geográfico.
                    <br><br>A característica marcante da cartografia sistemática é que as mudanças nas informações representadas ocorrem em intervalos de tempo muito longos. Por exemplo, os limites de uma cidade ou as características de um rio não se alteram de um ano para o outro. Esse tipo de cartografia tem alta durabilidade temporal, o que significa que seus produtos, como as cartas topográficas, continuam a ser relevantes por muitos anos.
                </p>
                <br>
                <div class="flex justify-center">
                    <img class="p-1 mb-4" src="{{asset('imagens/cartografiasistematica.webp')}}" alt="">
                </div>

                <h2 id="conceitos-basicos" class="text-3xl font-Montserrat font-bold text-black mb-4">Conceitos Básicos</h2>
                <p class="text-justify mb-4 text-black"> A cartografia é a ciência e a arte de representar a superfície terrestre e seus diversos aspectos em mapas e outros produtos gráficos. Alguns conceitos fundamentais dessa área incluem:

                    <br><br> <span class="font-bold">• Mapa:</span> Representação reduzida e plana da superfície terrestre, que pode mostrar desde características físicas (relevo, rios) até aspectos sociais e econômicos (população, uso do solo).

                    <br><br> <span class="font-bold">• Projeção cartográfica:</span> Método para representar a Terra, que é esférica, em uma superfície plana. Existem diferentes tipos de projeções (cilíndricas, cônicas, etc.), cada uma com distorções específicas.

                    <br><br> <span class="font-bold">• Coordenadas geográficas:</span> Sistema de linhas imaginárias (paralelos e meridianos) que indica a latitude e longitude de qualquer ponto, permitindo determinar sua localização exata no planeta.

                    <br><br> <span class="font-bold">• Escala cartográfica: </span>Proporção entre as dimensões reais e as representadas no mapa, essencial para compreender o nível de detalhe de um mapa.
                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) O que caracteriza a cartografia como uma disciplina?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) O uso de satélites para monitoramento do espaço.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) A elaboração de planos urbanos e de construção de infraestruturas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) A criação de representações gráficas da superfície terrestre e a análise de fenômenos espaciais.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) A produção de mapas exclusivamente para a navegação.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Qual é a principal diferença entre cartografia temática e cartografia sistemática?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) A cartografia sistemática é mais detalhada, enquanto a temática não se importa com detalhes.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) A cartografia temática só é usada para mapas mundiais, enquanto a sistemática serve para mapas locais.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) A cartografia temática foca na representação de aspectos físicos do espaço, enquanto a sistemática analisa fenômenos sociais.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) A cartografia sistemática se concentra nas características físicas e naturais, enquanto a temática abrange fenômenos específicos, como economia e cultura.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>3) Qual é o papel das projeções cartográficas?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) Identificar as coordenadas geográficas de todos os pontos da Terra.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) Reduzir a escala dos mapas para torná-los mais acessíveis.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) Exibir apenas o relevo e as altitudes de um determinado território.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) Representar a superfície terrestre, que é esférica, em uma superfície plana, embora com distorções.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) O que são as coordenadas geográficas? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) Formas geométricas usadas para calcular a área de um país.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Um sistema de linhas (paralelos e meridianos) usados para indicar a latitude e a longitude de qualquer ponto na Terra.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) Linhas imaginárias que determinam os limites territoriais de um país.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) Cálculos matemáticos que são feitos para determinar a escala de um mapa.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) O que caracteriza um mapa com uma escala maior? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) Apresentar uma visão geral de grandes áreas, sem muito detalhe.<span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) Mostrar uma área maior de forma mais detalhada.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) Representar uma área menor com mais detalhes.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) Não ser preciso e ter menos informações.</span></li>


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