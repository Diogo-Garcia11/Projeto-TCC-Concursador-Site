<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p>
            <a href="{{ route('materias', ['section' => 'literatura']) }}#literatura" class="mb-4 text-gray-500 underline inline-block">Literatura</a>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Literatura e Contexto Histórico no Brasil</h1>
                <p class="text-black">
                    A literatura brasileira tem uma conexão íntima com o contexto social e histórico do país, refletindo e interpretando
                    as transformações da sociedade ao longo dos séculos. Desde o período colonial até a contemporaneidade, os autores
                    brasileiros retrataram questões como escravidão, independência, urbanização e desigualdade social, proporcionando um
                    registro único da identidade e da realidade brasileira. Cada obra literária é, em certo sentido, um reflexo do seu
                    tempo, capturando o espírito e os desafios de cada era.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/literatura_contexto_historico.webp')}}" alt="Imagem representando a relação entre Literatura e Contexto Histórico">

                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#literatura-colonial" class="text-kblue hover:text-black hover:!text-black">1- Literatura Colonial</a></li>
                        <li><a href="#literatura-romantica" class="text-kblue hover:text-black hover:!text-black">2- Literatura Romântica e Nacionalismo</a></li>
                        <li><a href="#literatura-realista" class="text-kblue hover:text-black hover:!text-black">3- Literatura Realista e Crítica Social</a></li>
                        <li><a href="#modernismo" class="text-kblue hover:text-black hover:!text-black">4- Modernismo e Identidade Brasileira</a></li>
                        <li><a href="#literatura-contemporanea" class="text-kblue hover:text-black hover:!text-black">5- Literatura Contemporânea e Questões Atuais</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">6- Exercícios Práticos</a></li>
                    </ul>
                </div>

                <h2 id="literatura-colonial" class="text-3xl font-Montserrat font-bold text-black mb-4">Literatura Colonial</h2>
                <p class="text-black">
                    A literatura colonial brasileira teve início com a chegada dos portugueses em 1500 e reflete o processo de
                    colonização, exploração e catequização do território. Textos como as “Cartas de Caminha” e as crônicas dos
                    viajantes europeus retratavam o Brasil a partir de uma perspectiva exótica e eurocêntrica, destacando a riqueza
                    natural e a visão dos colonizadores sobre os indígenas. Essa literatura inicial foi, muitas vezes, um meio de
                    legitimar o domínio colonial e divulgar as potencialidades econômicas da terra.
                </p>

                <p class="text-black mt-4">
                    A produção literária desse período é marcada pela visão de mundo dos colonizadores, deixando pouco espaço para a
                    voz e a cultura dos nativos. A obra do padre José de Anchieta, por exemplo, combinava elementos religiosos com o
                    objetivo de catequização, servindo tanto como ferramenta de conversão quanto como registro cultural.
                </p>

                <h2 id="literatura-romantica" class="text-3xl font-Montserrat font-bold text-black mb-4">Literatura Romântica e Nacionalismo</h2>
                <p class="text-black">
                    O romantismo brasileiro surgiu no século XIX, num momento de construção da identidade nacional, logo após a
                    independência. Esse período literário foi marcado pela valorização das paisagens, das lendas e do folclore
                    brasileiros, na tentativa de definir uma cultura nacional independente das influências europeias. Autores como
                    José de Alencar exploraram temas indígenas e regionais, criando heróis nacionais e exóticos.
                </p>

                <p class="text-black mt-4">
                    A literatura romântica brasileira é também uma literatura de idealização, que, ao valorizar o indígena e a
                    natureza, buscava reforçar o sentimento de nacionalidade. Obras como “Iracema” e “O Guarani” são exemplos
                    dessa tentativa de criar uma identidade nacional, enquanto lidavam com as contradições e problemas da sociedade
                    brasileira do século XIX.
                </p>

                <h2 id="literatura-realista" class="text-3xl font-Montserrat font-bold text-black mb-4">Literatura Realista e Crítica Social</h2>
                <p class="text-black">
                    A literatura realista, que surgiu como reação ao romantismo, trouxe uma visão mais crítica e analítica da
                    sociedade brasileira, especialmente das classes urbanas e dos valores morais. Esse período foi marcado por autores
                    como Machado de Assis, que em suas obras retratava a hipocrisia, a corrupção e os dilemas morais das elites do
                    Brasil do século XIX. Com uma linguagem refinada e uma análise psicológica profunda, Machado de Assis é considerado
                    um dos grandes críticos da sociedade brasileira de sua época.
                </p>

                <p class="text-black mt-4">
                    A obra “Dom Casmurro” é um exemplo notável dessa crítica social e moral, abordando temas como ciúmes, traição e
                    manipulação, revelando a complexidade das relações humanas e sociais. O realismo brasileiro consolidou a literatura
                    como um espaço de reflexão e crítica das estruturas sociais do país.
                </p>

                <h2 id="modernismo" class="text-3xl font-Montserrat font-bold text-black mb-4">Modernismo e Identidade Brasileira</h2>
                <p class="text-black">
                    O modernismo, iniciado em 1922 com a Semana de Arte Moderna, representou uma ruptura com o passado e uma busca por
                    uma identidade cultural genuinamente brasileira. Mário de Andrade, Oswald de Andrade e outros artistas modernistas
                    exploraram temas nacionais, misturando influências populares e eruditas, e promovendo uma linguagem mais coloquial
                    e próxima da realidade do povo brasileiro. Esse movimento marcou a literatura com uma renovação formal e uma
                    valorização das raízes culturais do país.
                </p>

                <p class="text-black mt-4">
                    Obras como “Macunaíma” de Mário de Andrade exemplificam essa busca pela identidade brasileira, misturando mitos
                    populares com críticas à sociedade. O modernismo estabeleceu um novo olhar sobre a cultura e a realidade do país,
                    destacando-se como um marco de autoconhecimento e valorização das especificidades brasileiras.
                </p>

                <h2 id="literatura-contemporanea" class="text-3xl font-Montserrat font-bold text-black mb-4">Literatura Contemporânea e Questões Atuais</h2>
                <p class="text-black">
                    A literatura brasileira contemporânea reflete as transformações sociais e políticas do Brasil atual, abordando temas
                    como desigualdade, violência, racismo, identidade de gênero e outros desafios da sociedade moderna. Autores como
                    Raduan Nassar, Conceição Evaristo e Ferréz exploram a complexidade da vida urbana e das relações de poder,
                    expondo as injustiças e as tensões sociais.
                </p>

                <p class="text-black mt-4">
                    Obras como “Capão Pecado” de Ferréz abordam a vida nas periferias e os desafios enfrentados pela população de baixa
                    renda. A literatura contemporânea brasileira busca dar voz a setores marginalizados da sociedade e denunciar as
                    contradições de um país marcado por profundas desigualdades.
                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Qual movimento literário foi marcado pela valorização das paisagens e do folclore brasileiros?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Realismo</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Romantismo</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Modernismo</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Naturalismo</span></li>
                    </ul>
                    <ul class="text-black">
                        <li class="mb-2 mt-4">
                            <p>2) Quem é o autor da obra “Dom Casmurro”, um dos clássicos do Realismo brasileiro?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Machado de Assis</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) José de Alencar</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Oswald de Andrade</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Raduan Nassar</span></li>
                    </ul>
                    <div class="mt-6">
                        
                        <ul class="text-black">
                            <li class="mb-2 mt-4">
                                <p>3) No contexto da literatura brasileira, o romance "Iracema" de José de Alencar é um exemplo de obra que:</p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) Critica abertamente a colonização europeia</span></li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) Representa a literatura modernista brasileira</span></li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="1" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) Valoriza o indígena como símbolo da nacionalidade</span></li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) Enfatiza a urbanização do Brasil</span></li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">E) Retrata as transformações sociais do século XX</span></li>
                        </ul>

                        
                        <ul class="text-black">
                            <li class="mb-2 mt-4">
                                <p>4) A obra "Memórias Póstumas de Brás Cubas" de Machado de Assis é frequentemente associada ao realismo brasileiro por:</p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="1" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) Explorar temas como hipocrisia e corrupção social</span></li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Idealizar os valores românticos da sociedade</span></li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) Valorizar o indígena como herói nacional</span></li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) Abordar mitos populares brasileiros</span></li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">E) Seguir os padrões estéticos do modernismo</span></li>
                        </ul>

                        
                        <ul class="text-black">
                            <li class="mb-2 mt-4">
                                <p>5) A Semana de Arte Moderna de 1922 representou um marco importante na literatura brasileira, pois:</p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) Buscava reviver as tradições literárias europeias no Brasil</span></li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="1" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) Iniciou um movimento de valorização da cultura brasileira autêntica</span></li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) Defendia o retorno ao estilo romântico</span></li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) Promoveu exclusivamente temas religiosos</span></li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">E) Criticou a influência das culturas africanas e indígenas</span></li>
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