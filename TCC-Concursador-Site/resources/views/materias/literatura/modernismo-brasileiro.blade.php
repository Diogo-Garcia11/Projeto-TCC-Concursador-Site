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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Modernismo Brasileiro – Fases do Modernismo</h1>
                <p class="text-black">
                    O Modernismo Brasileiro foi um movimento artístico e literário que surgiu no início do século XX com o objetivo de
                    renovar a literatura e as artes, buscando romper com as tradições acadêmicas e explorar novas linguagens e temas.
                    Dividido em três fases, o Modernismo destacou-se pela originalidade e pela busca de uma identidade cultural brasileira,
                    sendo marcado por figuras como Mário de Andrade, Oswald de Andrade e Carlos Drummond de Andrade.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/modernismo_brasileiro.webp')}}" alt="Imagem ilustrativa do Modernismo Brasileiro">

                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#primeira-fase" class="text-kblue hover:text-black hover:!text-black">1- Primeira Fase do Modernismo</a></li>
                        <li><a href="#segunda-fase" class="text-kblue hover:text-black hover:!text-black">2- Segunda Fase do Modernismo</a></li>
                        <li><a href="#terceira-fase" class="text-kblue hover:text-black hover:!text-black">3- Terceira Fase do Modernismo</a></li>
                        <li><a href="#semana-de-arte-moderna" class="text-kblue hover:text-black hover:!text-black">4- Semana de Arte Moderna de 1922</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">5- Exercícios Práticos</a></li>
                    </ul>
                </div>

                <h2 id="primeira-fase" class="text-3xl font-Montserrat font-bold text-black mb-4">Primeira Fase do Modernismo</h2>
                <p class="text-black">
                    A Primeira Fase do Modernismo, também chamada de Fase Heroica, foi marcada pelo espírito de ruptura e experimentação.
                    Teve início com a Semana de Arte Moderna de 1922, que desafiou as normas estéticas tradicionais e celebrou a liberdade
                    criativa. Mário de Andrade e Oswald de Andrade foram figuras centrais nessa fase, promovendo uma literatura que
                    refletisse a identidade e a realidade brasileiras, sem as influências europeias que prevaleciam até então. Essa fase
                    é caracterizada por uma linguagem coloquial, o uso de temas nacionais e uma crítica à sociedade burguesa da época.
                </p>

                <p class="text-black mt-4">
                    O livro “Pauliceia Desvairada”, de Mário de Andrade, exemplifica bem o espírito dessa fase, trazendo a cidade de São
                    Paulo como protagonista e utilizando uma linguagem inovadora. A Primeira Fase do Modernismo trouxe uma verdadeira
                    revolução nas letras brasileiras, incentivando uma arte que fosse genuinamente nacional e popular.
                </p>

                <h2 id="segunda-fase" class="text-3xl font-Montserrat font-bold text-black mb-4">Segunda Fase do Modernismo</h2>
                <p class="text-black">
                    A Segunda Fase do Modernismo Brasileiro, que começou nos anos 1930, é conhecida como Fase de Consolidação. Durante esse
                    período, os escritores passaram a abordar temas sociais e políticos, refletindo as tensões e transformações do Brasil da
                    época. Os autores dessa fase buscaram uma visão crítica da realidade brasileira, com um olhar mais maduro e introspectivo.
                </p>

                <p class="text-black mt-4">
                    Carlos Drummond de Andrade, por exemplo, destacou-se com poemas que exploravam a angústia existencial e a situação do
                    homem moderno. Obras como “Sentimento do Mundo” abordam a complexidade da vida humana e as dificuldades sociais e
                    pessoais. Essa fase também foi marcada pela prosa regionalista, com autores como Graciliano Ramos e Jorge Amado, que
                    apresentaram a realidade do interior brasileiro de forma crua e autêntica.
                </p>

                <h2 id="terceira-fase" class="text-3xl font-Montserrat font-bold text-black mb-4">Terceira Fase do Modernismo</h2>
                <p class="text-black">
                    A Terceira Fase do Modernismo, ou Pós-Modernismo, começou nos anos 1940 e foi marcada pela diversidade temática e
                    estilística. Esse período é caracterizado pela busca de novas linguagens e pela exploração de aspectos psicológicos e
                    subjetivos. Os escritores dessa fase exploraram temas como a condição humana, o existencialismo e as inquietações
                    individuais.
                </p>

                <p class="text-black mt-4">
                    Nessa fase, autores como Clarice Lispector e Guimarães Rosa produziram obras que traziam uma linguagem inovadora e um
                    olhar profundo sobre a subjetividade humana. A obra “Grande Sertão: Veredas”, de Guimarães Rosa, exemplifica bem essa
                    complexidade, explorando o sertão brasileiro e a luta entre o bem e o mal de maneira simbólica e universal.
                </p>

                <h2 id="semana-de-arte-moderna" class="text-3xl font-Montserrat font-bold text-black mb-4">Semana de Arte Moderna de 1922</h2>
                <p class="text-black">
                    A Semana de Arte Moderna de 1922, realizada no Theatro Municipal de São Paulo, foi o evento que marcou o início do
                    Modernismo no Brasil. Organizada por artistas como Mário de Andrade, Oswald de Andrade e Anita Malfatti, a Semana foi
                    uma celebração da renovação artística e da valorização da cultura nacional. As apresentações incluíram pinturas,
                    esculturas, poesias e performances que chocaram o público devido ao caráter inovador e provocativo.
                </p>

                <p class="text-black mt-4">
                    A Semana de 1922 buscava libertar a arte brasileira da imitação europeia, incentivando uma produção genuinamente
                    nacional. Os poemas e discursos proferidos durante o evento exaltavam o Brasil, sua paisagem, sua gente e sua cultura.
                    Apesar de ter sido recebida com críticas e resistência, a Semana de Arte Moderna consolidou-se como um marco na história
                    da arte brasileira e influenciou diversas gerações de artistas e escritores.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/semana_arte_moderna.webp')}}" alt="Imagem da Semana de Arte Moderna de 1922">

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Quem foi um dos principais autores da Primeira Fase do Modernismo Brasileiro?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Mário de Andrade</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Machado de Assis</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) José de Alencar</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Raul Pompeia</span></li>
                    </ul>
                    <ul class="text-black">
                        <li class="mb-2 mt-4">
                            <p>2) Qual evento marcou o início do Modernismo no Brasil?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Independência do Brasil</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Semana de Arte Moderna de 1922</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Revolta da Chibata</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Proclamação da República</span></li>
                    </ul>
                    <ul class="text-black">
                        <li class="mb-2 mt-4">
                            <p>3) Qual obra de Mário de Andrade é considerada emblemática da Primeira Fase do Modernismo?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) Memórias Póstumas de Brás Cubas</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) Pauliceia Desvairada</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) Dom Casmurro</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) Iracema</span></li>
                    </ul>

                    <ul class="text-black">
                        <li class="mb-2 mt-4">
                            <p>4) Quais autores foram destaques na Segunda Fase do Modernismo Brasileiro?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) Carlos Drummond de Andrade e Jorge Amado</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Oswald de Andrade e Clarice Lispector</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) Machado de Assis e Guimarães Rosa</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) Manuel Bandeira e José de Alencar</span></li>
                    </ul>

                    <ul class="text-black">
                        <li class="mb-2 mt-4">
                            <p>5) A obra “Grande Sertão: Veredas” é característica de qual fase do Modernismo?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) Primeira Fase</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) Segunda Fase</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) Terceira Fase</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) Pós-Modernismo</span></li>
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