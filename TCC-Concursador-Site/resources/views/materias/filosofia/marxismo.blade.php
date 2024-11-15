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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Introdução ao Marxismo</h1>

                <p class="text-black">
                    O Marxismo é uma teoria econômica, social e política criada por Karl Marx e Friedrich Engels no século XIX.
                    Baseia-se na ideia de que a história da sociedade é marcada por uma luta de classes, onde a classe trabalhadora (proletariado)
                    é explorada pela classe dominante (burguesia). O objetivo do Marxismo é compreender essa relação de exploração e propor uma
                    mudança estrutural para criar uma sociedade sem classes, onde não haja exploração de uma classe sobre a outra.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/marxismo.webp')}}" alt="">

                <br>

                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#materialismo" class="text-kblue hover:text-black hover:!text-black">1- Materialismo Histórico e Dialético</a></li>
                        <li><a href="#mais-valia" class="text-kblue hover:text-black hover:!text-black">2- Mais-valia</a></li>
                        <li><a href="#luta" class="text-kblue hover:text-black hover:!text-black">3- Luta de Classes</a></li>
                    </ul>
                </div>

                <br>

                <h2 id="materialismo" class="text-3xl font-Montserrat font-bold text-black mb-4">Materialismo Histórico e Dialético</h2>
                <p class="text-black">
                    O materialismo histórico é a metodologia proposta por Marx para entender a história humana.
                    Ele argumenta que o desenvolvimento das sociedades é impulsionado por mudanças nas forças e relações de produção.
                    A luta entre classes sociais surge a partir dessas relações, gerando conflitos que transformam a sociedade.
                    O materialismo dialético, por sua vez, é a filosofia que orienta a análise marxista, baseando-se na ideia de que tudo
                    está em constante mudança e é resultado de contradições internas.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/materialismo.jpg')}}" alt="">

                <br><br>

                <h2 id="mais-valia" class="text-3xl font-Montserrat font-bold text-black mb-4">Mais-valia</h2>
                <p class="text-black">
                    A mais-valia é um conceito central no pensamento de Marx, que descreve a forma como os capitalistas obtêm lucro explorando
                    o trabalho dos trabalhadores. Ela ocorre quando o trabalhador produz valor além do necessário para cobrir seu próprio salário,
                    gerando um excedente que é apropriado pelo empregador. Esse excedente é o que sustenta o sistema capitalista e permite a acumulação de capital.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/mais-valia.webp')}}" alt="">

                <br><br>

                <h2 id="luta" class="text-3xl font-Montserrat font-bold text-black mb-4">Luta de Classes</h2>
                <p class="text-black">
                    A luta de classes é a força motriz da história, segundo Marx. Ele argumenta que toda sociedade está dividida em classes
                    com interesses opostos, o que leva a conflitos. No capitalismo, a principal luta é entre a burguesia, que possui os meios de produção,
                    e o proletariado, que vende sua força de trabalho. A teoria marxista sugere que, eventualmente, essa luta levará a uma revolução onde o proletariado tomará o poder,
                    abolindo a propriedade privada dos meios de produção e criando uma sociedade socialista.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/luta-de-classes.jpg')}}" alt="">

                <br><br>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Segundo o Marxismo, a mais-valia é o conceito que descreve:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) A quantidade de capital acumulado pelos trabalhadores.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) O valor que o trabalhador recebe como salário.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) O valor excedente produzido pelo trabalhador e apropriado pelo capitalista.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) A propriedade dos meios de produção pelo proletariado.</span></li>
                    </ul>
                    <ul class="text-black">
                        <li class="mb-2 mt-4">
                            <p>2) Karl Marx e Friedrich Engels desenvolveram o conceito de "materialismo histórico" para explicar:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) A necessidade da criação de um sistema de governo unificado globalmente.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) A ideia de que as condições materiais de uma sociedade determinam suas estruturas sociais e políticas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) A importância de manter uma economia baseada na agricultura.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) A inevitabilidade da revolução cultural para alcançar o socialismo.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">E) A superioridade do trabalho intelectual sobre o trabalho manual.</span></li>
                    </ul>

                    <ul class="text-black">
                        <li class="mb-2 mt-4">
                            <p>3) No contexto da teoria marxista, a "luta de classes" refere-se a:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) Conflitos entre países com sistemas econômicos diferentes.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Disputas entre indivíduos de classes semelhantes.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) O conflito entre o proletariado e a burguesia devido à exploração dos trabalhadores.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) A rivalidade entre capitalistas para maximizar lucros.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">E) O embate entre Estados Unidos e União Soviética durante a Guerra Fria.</span></li>
                    </ul>

                    <ul class="text-black">
                        <li class="mb-2 mt-4">
                            <p>4) No Marxismo, o conceito de "alienação" se refere a:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) A separação entre trabalhadores e seus sindicatos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) A relação de amizade entre o patrão e os empregados.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) A desconexão do trabalhador com o produto de seu próprio trabalho e a perda de sua identidade no processo produtivo.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) A sensação de liberdade dentro do capitalismo.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">E) A prática de trabalho autônomo.</span></li>
                    </ul>

                    <ul class="text-black">
                        <li class="mb-2 mt-4">
                            <p>5) Qual das alternativas abaixo melhor define o conceito de "capitalismo", segundo Marx?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-6" value="0" onclick="checkAnswer(event, 'questao-6')"><span class="radio-text">A) Um sistema econômico baseado na cooperação mútua.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-6" value="0" onclick="checkAnswer(event, 'questao-6')"><span class="radio-text">B) Um sistema de governo onde o poder está nas mãos do proletariado.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-6" value="0" onclick="checkAnswer(event, 'questao-6')"><span class="radio-text">C) Um sistema econômico controlado exclusivamente pelo Estado.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-6" value="1" onclick="checkAnswer(event, 'questao-6')"><span class="radio-text">D) Um sistema baseado na propriedade privada dos meios de produção e na exploração da força de trabalho pelo capitalista.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-6" value="0" onclick="checkAnswer(event, 'questao-6')"><span class="radio-text">E) Um sistema econômico de distribuição igualitária de recursos.</span></li>
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