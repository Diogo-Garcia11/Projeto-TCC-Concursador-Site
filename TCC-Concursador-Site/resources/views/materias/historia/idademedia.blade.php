<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p>
            <a href="{{ route('materias', ['section' => 'historia']) }}#historia" class="mb-4 text-gray-500 underline inline-block">História</a>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Idade Média</h1>
                <p class="text-black">
                    A Idade Média foi um período histórico que durou aproximadamente do século V ao XV, caracterizado pelo 
                    desenvolvimento do feudalismo, a influência da Igreja Católica, e o surgimento de vários reinos que formaram 
                    as bases da Europa moderna. Este período, também conhecido como "Era das Trevas", é marcado tanto por retrocessos 
                    como por avanços culturais e estruturais.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/idade_media.webp')}}" alt="Imagem ilustrativa da Idade Média">

                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#feudalismo" class="text-kblue hover:text-black hover:!text-black">1- Feudalismo</a></li>
                        <li><a href="#igreja-catolica" class="text-kblue hover:text-black hover:!text-black">2- Igreja Católica</a></li>
                        <li><a href="#reinos-medievais" class="text-kblue hover:text-black hover:!text-black">3- Reinos Medievais</a></li>
                        <li><a href="#inicio-idade-moderna" class="text-kblue hover:text-black hover:!text-black">4- Início da Idade Moderna</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">5- Exercícios Práticos</a></li>
                    </ul>
                </div>

                <h2 id="feudalismo" class="text-3xl font-Montserrat font-bold text-black mb-4">Feudalismo</h2>
                <p class="text-black">
                    O feudalismo foi a principal organização econômica, social e política da Idade Média na Europa, caracterizada 
                    pela descentralização do poder e pela relação de dependência entre senhores e vassalos. No feudalismo, os senhores 
                    feudais possuíam terras onde os camponeses, ou servos, trabalhavam em troca de proteção e sustento. Essa estrutura 
                    proporcionava estabilidade em uma época de frequentes invasões e conflitos, mas ao mesmo tempo limitava a mobilidade 
                    social e o desenvolvimento econômico, pois a terra era a principal fonte de riqueza.
                </p>

                <p class="text-black mt-4">
                    O sistema feudal era sustentado por laços de lealdade e obrigações, onde os senhores feudais tinham controle sobre 
                    a terra e exerciam justiça local. A estrutura era dividida em três ordens principais: o clero, responsável pela 
                    vida religiosa; a nobreza, responsável pela proteção; e os camponeses, que trabalhavam nas terras. Esse modelo 
                    perdurou por séculos, sendo gradualmente enfraquecido pelo crescimento das cidades, o comércio e a centralização 
                    do poder nas mãos dos reis.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/feudalismo.webp')}}" alt="Imagem sobre o Feudalismo">

                <h2 id="igreja-catolica" class="text-3xl font-Montserrat font-bold text-black mb-4">Igreja Católica</h2>
                <p class="text-black">
                    A Igreja Católica teve um papel fundamental durante a Idade Média, não apenas no aspecto religioso, mas também 
                    como uma poderosa instituição política e cultural. A Igreja detinha grande influência sobre a população, sendo 
                    a responsável por disseminar valores, conhecimentos e manter a ordem social. O Papa era visto como a maior 
                    autoridade religiosa e até política, muitas vezes rivalizando com reis e nobres no controle do poder.
                </p>

                <p class="text-black mt-4">
                    A Igreja também foi a principal responsável pela educação e preservação de manuscritos antigos, além de estimular 
                    o desenvolvimento de universidades. Com a Inquisição, a Igreja combatia heresias e mantinha sua hegemonia ideológica, 
                    o que refletia a forte aliança entre o poder espiritual e o poder temporal. No entanto, essa autoridade começou a 
                    ser questionada no final da Idade Média, o que contribuiu para o surgimento de novas ideias e movimentos religiosos 
                    na Europa.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/igreja_catolica.jpg')}}" alt="Imagem sobre a Igreja Católica na Idade Média">

                <h2 id="reinos-medievais" class="text-3xl font-Montserrat font-bold text-black mb-4">Reinos Medievais</h2>
                <p class="text-black">
                    Durante a Idade Média, a Europa foi dividida em vários reinos que tinham suas próprias estruturas políticas e 
                    culturais, como os reinos de França, Inglaterra, Sacro Império Romano-Germânico e os reinos ibéricos. Esses reinos 
                    eram governados por monarcas que exerciam poder local e dependiam de alianças com a nobreza e a Igreja para manter 
                    sua autoridade. Muitos dos conflitos e alianças entre esses reinos moldaram as fronteiras e identidades nacionais 
                    que conhecemos hoje.
                </p>

                <p class="text-black mt-4">
                    Cada reino medieval tinha suas características específicas e sistemas de organização próprios. A rivalidade entre 
                    os reinos era comum e frequentemente resultava em guerras e disputas territoriais, como a Guerra dos Cem Anos entre 
                    França e Inglaterra. Essas batalhas eram travadas por exércitos feudais, e a cavalaria desempenhava um papel importante 
                    no combate. Gradualmente, com o fortalecimento dos reis e a centralização do poder, esses reinos começaram a se 
                    transformar em estados-nação.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/reinos_medievais.jpeg')}}" alt="Imagem sobre os Reinos Medievais">

                <h2 id="inicio-idade-moderna" class="text-3xl font-Montserrat font-bold text-black mb-4">Início da Idade Moderna</h2>
                <p class="text-black">
                    O final da Idade Média deu lugar ao início da Idade Moderna, marcado por profundas transformações econômicas, 
                    sociais e culturais. Esse período de transição incluiu a formação dos estados modernos, o Renascimento cultural 
                    e científico, a expansão marítima e o crescimento do comércio internacional. Foi também a época da Reforma 
                    Protestante, que desafiou a hegemonia da Igreja Católica e abriu caminho para novas crenças religiosas.
                </p>

                <p class="text-black mt-4">
                    Com o avanço das navegações, os países europeus iniciaram a exploração de novas terras, o que expandiu a influência 
                    econômica e política do continente. A Idade Moderna trouxe um aumento significativo no poder dos reis e no surgimento 
                    de grandes impérios coloniais. Esse período também estabeleceu as bases para o mundo moderno, com a ascensão do 
                    pensamento científico e a valorização da razão como forma de entender e transformar o mundo.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/inicio_idade_moderna.webp')}}" alt="Imagem sobre o Início da Idade Moderna">

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Qual era a estrutura social do feudalismo na Idade Média?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" 
                        onclick="checkAnswer(event, 'questao-1', 'b')">A) Apenas senhores e camponeses</li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="2" 
                        onclick="checkAnswer(event, 'questao-1', 'b')">B) Clero, nobreza e camponeses</li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="3" 
                        onclick="checkAnswer(event, 'questao-1', 'b')">C) Nobreza e burguesia</li>
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
