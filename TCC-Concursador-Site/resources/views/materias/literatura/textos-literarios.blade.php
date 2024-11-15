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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Interpretação de Textos Literários</h1>
                <p class="text-black">
                    A interpretação de textos literários é uma habilidade essencial para entender o que o autor deseja comunicar,
                    indo além do sentido literal para captar nuances estilísticas, emocionais e temáticas presentes na obra. Analisar
                    um texto literário envolve decifrar suas metáforas, símbolos, estrutura e o estilo do autor. Poesias, contos,
                    romances e outras formas de expressão literária carregam intenções profundas, e a interpretação revela o impacto
                    dessas mensagens no contexto social e na individualidade do leitor.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/interpretacao_texto.webp')}}" alt="Imagem representando a Interpretação de Textos Literários">

                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#interpretacao-poesia" class="text-kblue hover:text-black hover:!text-black">1- Análise de Poesia</a></li>
                        <li><a href="#interpretacao-prosa" class="text-kblue hover:text-black hover:!text-black">2- Interpretação de Prosa</a></li>
                        <li><a href="#caracteristicas-estilisticas" class="text-kblue hover:text-black hover:!text-black">3- Características Estilísticas e Temáticas</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4- Exercícios Práticos</a></li>
                    </ul>
                </div>

                <h2 id="interpretacao-poesia" class="text-3xl font-Montserrat font-bold text-black mb-4">Análise de Poesia</h2>
                <p class="text-black">
                    A análise de uma poesia é um processo cuidadoso que envolve a interpretação de suas imagens, sons e ritmo. Poemas
                    geralmente são concisos, usando linguagem figurativa para evocar emoções e ideias complexas. É essencial observar
                    o uso de metáforas, aliterações e rimas, que criam uma melodia interna e destacam as palavras-chave da obra. Cada
                    verso, palavra e figura de linguagem é escolhido intencionalmente para produzir um efeito específico e para convidar
                    o leitor a uma reflexão mais profunda.
                </p>

                <p class="text-black mt-4">
                    Por exemplo, na poesia modernista de Carlos Drummond de Andrade, as imagens são muitas vezes introspectivas e
                    reflexivas, revelando um desencanto com a sociedade e uma busca por significado. Já a poesia parnasiana de Olavo
                    Bilac utiliza uma estrutura rígida e a busca pela perfeição formal para expressar sentimentos patrióticos e
                    universalistas. Compreender o estilo do poeta é fundamental para captar a intenção de seus versos.
                </p>

                <h2 id="interpretacao-prosa" class="text-3xl font-Montserrat font-bold text-black mb-4">Interpretação de Prosa</h2>
                <p class="text-black">
                    A prosa literária abrange contos, romances e crônicas, que desenvolvem histórias e personagens complexos. Na
                    interpretação da prosa, é crucial observar a construção dos personagens, a evolução do enredo e a ambientação
                    criada pelo autor. Autores como Machado de Assis, por exemplo, utilizam narradores não confiáveis e exploram a
                    subjetividade para gerar reflexões profundas sobre a natureza humana. A estrutura narrativa e o ponto de vista do
                    narrador são ferramentas que influenciam diretamente a experiência de leitura.
                </p>

                <p class="text-black mt-4">
                    No caso da prosa realista, como em “Dom Casmurro”, o autor emprega descrições detalhadas e diálogos que refletem a
                    complexidade psicológica dos personagens, sugerindo temas como ciúme e traição. Já na literatura fantástica, como
                    a de Guimarães Rosa, os elementos sobrenaturais e o regionalismo dão espaço a interpretações multifacetadas sobre
                    o sertão e a existência humana.
                </p>

                <h2 id="caracteristicas-estilisticas" class="text-3xl font-Montserrat font-bold text-black mb-4">Características Estilísticas e Temáticas</h2>
                <p class="text-black">
                    Cada autor possui um estilo único que se manifesta por meio de escolhas linguísticas e temáticas específicas.
                    Estilisticamente, pode-se notar a preferência por vocabulário erudito, como em João Cabral de Melo Neto, ou por uma
                    linguagem coloquial e intimista, como em Clarice Lispector. Os temas abordados, por sua vez, frequentemente refletem
                    o contexto histórico e social em que o autor viveu, assim como suas próprias experiências pessoais e percepções.
                </p>

                <p class="text-black mt-4">
                    Por exemplo, o regionalismo de Jorge Amado explora o universo cultural da Bahia, destacando questões de identidade
                    e desigualdade social. No modernismo, os autores buscavam romper com os modelos clássicos e exploravam temas
                    nacionalistas e existenciais, como a identidade do povo brasileiro. A análise dessas características ajuda a
                    compreender a relevância de cada obra e sua contribuição para a literatura brasileira.
                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Qual elemento é frequentemente utilizado na poesia para evocar emoções e criar ritmo?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Personagens complexos</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Metáforas e aliterações</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Narradores não confiáveis</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Descrições realistas</span></li>
                    </ul>
                    <ul class="text-black">
                        <li class="mb-2 mt-4">
                            <p>2) Na interpretação de prosa, é importante observar:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Apenas os temas abordados</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Construção dos personagens e evolução do enredo</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) O contexto histórico apenas</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) A linguagem científica</span></li>
                    </ul>
                    <!-- Questão 3 -->
                    <ul class="text-black mt-6">
                        <li class="mb-2">
                            <p>3) Qual é uma característica comum da poesia parnasiana, como a de Olavo Bilac?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) Uso de linguagem coloquial</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) Estilo introspectivo e reflexivo</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) Busca pela perfeição formal e patriotismo</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) Foco em elementos do sobrenatural</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">E) Utilização de linguagem informal e regional</span></li>
                    </ul>

                    <!-- Questão 4 -->
                    <ul class="text-black mt-6">
                        <li class="mb-2">
                            <p>4) Na interpretação de contos realistas, como os de Machado de Assis, é fundamental observar:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) O uso de temas sobrenaturais</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) A simplicidade na construção dos personagens</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) O uso de narradores não confiáveis e crítica social</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) A ausência de metáforas e figuras de linguagem</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">E) A estrutura simplista e direta da narrativa</span></li>
                    </ul>

                    <!-- Questão 5 -->
                    <ul class="text-black mt-6">
                        <li class="mb-2">
                            <p>5) Qual dos autores abaixo é conhecido pelo uso de uma linguagem coloquial e introspectiva em suas obras?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) João Cabral de Melo Neto</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) Clarice Lispector</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) Olavo Bilac</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) Jorge Amado</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">E) Machado de Assis</span></li>
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