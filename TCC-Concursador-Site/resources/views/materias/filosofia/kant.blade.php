<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p>
            <a href="{{ route('materias', ['section' => 'filosofia']) }}#filosofia" class="mb-4 text-gray-500 underline inline-block">Filosofia</a>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Introdução à Ética de Kant</h1>

                <p class="text-black">A ética kantiana, desenvolvida pelo filósofo alemão Immanuel Kant (1724-1804), é uma das teorias morais mais influentes da filosofia. 
                    Kant propôs uma ética fundamentada na razão e na autonomia da vontade humana, destacando-se por seu caráter universal e incondicional, diferente das éticas baseadas em consequências ou em sentimentos. 
                    A ideia central da ética kantiana é o imperativo categórico, uma regra moral que deve ser seguida independentemente das circunstâncias ou das consequências, pois é baseada em princípios racionais que poderiam ser universalizados.
                    Kant defendia que a moralidade não deve depender de desejos, emoções ou circunstâncias, mas sim de deveres racionais que valem para todos. 
                    Para ele, a boa vontade – agir por dever e não por interesse – é a única coisa que pode ser considerada boa sem restrições. Assim, o imperativo categórico é a expressão dessa boa vontade.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/kant.webp')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#imperativo" class="text-kblue hover:text-black hover:!text-black">1- Imperativo Categórico</a></li>
                        <li><a href="#autonimia" class="text-kblue hover:text-black hover:!text-black">2- Autonomia da Vontade</a></li>
                        <li><a href="#vontade" class="text-kblue hover:text-black hover:!text-black">3- Boa Vontade e Dever</a></li>
                        <li><a href="#exemplo" class="text-kblue hover:text-black hover:!text-black">4- Exemplos de Aplicação da Ética de Kant</a></li>
                        
                    </ul>
                </div>
                <br><br>
                <h2 id="imperativo" class="text-3xl font-Montserrat font-bold text-black mb-4">Imperativo Categórico
                </h2>
                <p class="text-justify mb-4 text-black">Imperativo Categórico: É a regra moral fundamental para Kant, que ordena agir segundo uma máxima que possa ser universalizada, ou seja, 
                    uma regra que você aceitaria que todos seguissem em qualquer situação. Kant formulou o imperativo categórico de várias maneiras, incluindo:
                    Primeira Formulação: "Aja apenas segundo uma máxima tal que possas ao mesmo tempo querer que ela se torne uma lei universal."
                    Segunda Formulação: "Aja de tal modo que trate a humanidade, tanto na tua pessoa como na de qualquer outro, sempre e simultaneamente como um fim e nunca apenas como um meio."
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/imperativo.jpg')}}" alt="">
                <br><br>

                <h2 id="autonimia" class="text-3xl font-Montserrat font-bold text-black mb-4">Autonomia da Vontade</h2>
                <p class="text-justify mb-4 text-black">
                <p class="text-black">Para Kant, a verdadeira liberdade está em seguir a própria razão, agindo de acordo com deveres morais que a própria pessoa reconhece como universais. 
                    A autonomia significa que a pessoa é legisladora de sua própria moralidade, baseada em princípios racionais.</p>

                <br>
                <img class="mt-6 w-96" src="{{asset('imagens/autonomia.jpg')}}" alt="">
                <br><br>
                <h2 id="vontade" class="text-3xl font-Montserrat font-bold text-black mb-4">Boa Vontade e Dever</h2>

                <br>
                <p class="text-black"> A boa vontade é o princípio de agir pelo dever, ou seja, realizar ações porque elas são moralmente corretas, independentemente das consequências ou dos desejos pessoais.
                     O dever é o que leva uma pessoa a agir de forma moral, respeitando o imperativo categórico.
                </p>
                

                <br><br>
                <h2 id="exemplo" class="text-3xl font-Montserrat font-bold text-black mb-4">Exemplos de Aplicação da Ética de Kant</h2>

                <br>
                <p class="text-black">Mentir para ajudar alguém: Na ética kantiana, mentir é sempre errado, mesmo que seja para proteger alguém, porque a ação de mentir não poderia ser universalizada sem causar contradições.
                    Promessa falsa: Kant diria que prometer algo sem intenção de cumprir é imoral, pois, se todos fizessem isso, a confiança em promessas deixaria de existir.
                </p>
                

                <br>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1)  Kant propõe que a moralidade é baseada em um princípio que pode ser universalizado, o imperativo categórico. Sobre esse princípio, é correto afirmar que:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Depende das emoções e circunstâncias do momento.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Pode ser quebrado quando se deseja alcançar um bem maior.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Baseia-se na ideia de que a ação deve ser sempre para o próprio benefício.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) É uma regra que todos poderiam seguir, independentemente das consequências.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Para Kant, uma ação moralmente correta é aquela que é realizada:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Para alcançar prazer ou satisfação pessoal.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Porque gera bons resultados para o maior número de pessoas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Baseada em princípios universais e pelo dever, independentemente das consequências.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Somente quando beneficia aqueles mais próximos do agente.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>3) Segundo Kant, qual das alternativas a seguir exemplifica o conceito de “agir por dever”?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" 
                        onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) Um funcionário que age com honestidade para obter uma promoção.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" 
                        onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) Um estudante que mente para ajudar um amigo a sair de problemas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" 
                        onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) Um cidadão que paga impostos apenas para evitar punições.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1" 
                        onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) Uma pessoa que devolve uma carteira encontrada, mesmo sem esperar recompensa.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) Em relação à autonomia da vontade, Kant acredita que:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" 
                        onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) A vontade deve ser determinada pelos desejos e circunstâncias.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1" 
                        onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) A moralidade depende do indivíduo agir de acordo com regras que reconhece como universais.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" 
                        onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) A verdadeira liberdade é seguir os desejos pessoais, sem restrições.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" 
                        onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) As decisões morais devem ser controladas pelas emoções e sentimentos.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) Imagine que uma pessoa faz uma promessa que sabe que não poderá cumprir. De acordo com Kant, por que essa atitude é considerada imoral? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1" 
                        onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) Porque uma ação dessas, se universalizada, tornaria as promessas sem valor.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" 
                        onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) Porque o interesse pessoal não foi levado em conta.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" 
                        onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) Porque fere o princípio de maximizar a felicidade.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" 
                        onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) Porque o imperativo categórico permite promessas falsas em casos extremos.</span></li>


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