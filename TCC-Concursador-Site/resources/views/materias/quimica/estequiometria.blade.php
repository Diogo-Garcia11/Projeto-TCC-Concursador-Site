<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p> <!-- Adicionei uma margem horizontal -->
            <a href="{{ route('materias', ['section' => 'quimica']) }}#quimica"
                class="mb-4 text-gray-500 underline inline-block">Química</a>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Estequiometria</h1>
                <p class="text-black">A estequiometria é uma parte da química que estuda as relações quantitativas entre
                    as substâncias que participam de uma reação química.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/estequiometria.jpg')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#o-que-e-estequiometria" class="text-kblue hover:text-black hover:!text-black">1-O
                                que é estequiometria?</a></li>
                        <li><a href="#conceitos" class="text-kblue hover:text-black hover:!text-black">2-
                                Conceitos Principais</a></li>
                        <li><a href="#resolucao" class="text-kblue hover:text-black hover:!text-black">3-
                                Como resolver um problema estequiométrico</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4-
                                Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="o-que-e-estequiometria" class="text-3xl font-Montserrat font-bold text-black mb-4">O que é
                    Química Orgânica</h2>
                <p class="text-justify mb-4 text-black">A estequiometria é uma ferramenta que permite calcular e
                    relacionar as quantidades de substâncias que participam de uma reação química, bem como as
                    quantidades de produtos gerados. Ela usa a equação química balanceada para definir as proporções
                    entre os reagentes e produtos envolvidos no processo.

                    <br><br>Por exemplo, em uma reação representada por:

                    <br><br><span style="font-size: smaller;">A</span> + b<span style="font-size: smaller;">B</span>
                    &rarr; c<span style="font-size: smaller;">C</span>

                    <br><br>A estequiometria nos diz que "a" mols da substância A reagem com "b" mols da substância B
                    para formar "c" mols da substância C. Os números "a", "b" e "c" são chamados de coeficientes
                    estequiométricos e indicam a relação proporcional entre as substâncias, ou seja, as quantidades
                    mínimas e inteiras de cada uma envolvida na reação.

                </p>

                <h2 id="conceitos" class="text-3xl font-Montserrat font-bold text-black mb-4">Conceitos Principais</h2>
                <p class="text-justify mb-4 text-black">
                    Conceitos principais da estequiometria:

                    <br><br>Equação química balanceada: Para resolver problemas estequiométricos, é essencial ter a
                    equação da
                    reação balanceada. Isso significa que o número de átomos de cada elemento deve ser o mesmo nos
                    reagentes e nos produtos.

                    <br><br>Molas (mol): A unidade fundamental da estequiometria é o mol, que representa uma quantidade
                    de 6,022
                    × 10²³ partículas (átomos, moléculas ou íons). A estequiometria usa as relações de mols para
                    calcular as quantidades de substâncias.

                    <br><br>Proporções molares: A equação balanceada indica as proporções molares entre as substâncias.
                    Por
                    exemplo, na reação:

                    <br><br>aA+bB→cC+dD

                    <br><br>Isso significa que "a" mols de A reagem com "b" mols de B para formar "c" mols de C e "d"
                    mols de D.

                    <br><br>Relações de massa: A partir das relações molares, é possível calcular a massa dos reagentes
                    ou
                    produtos. Para isso, utilizamos a massa molar (ou peso molecular), que é a massa de um mol de uma
                    substância, expressa em gramas.

                    <br><br>Lei das proporções definidas: Esta lei afirma que as substâncias químicas se combinam em
                    proporções
                    fixas e constantes para formar compostos, o que é a base da estequiometria. Por exemplo, a água
                    (H₂O) sempre se formará a partir de 2 átomos de hidrogênio para 1 átomo de oxigênio.
                </p>
                <div class="flex justify-center">
                    <img class="mt-6 w-96" src="{{asset('imagens/estequiometria2.webp')}}" alt="">
                </div><br><br>
                <h2 id="resolucao" class="text-3xl font-Montserrat font-bold text-black mb-4">Como resolver um problema
                    estequiométrico</h2>

                <p class="text-justify mb-4 text-black"> Como resolver um problema estequiométrico:

                    <br><br>Escrever a equação balanceada: Primeiro, você deve ter uma equação química balanceada para a
                    reação.

                    <br><br>Converter as quantidades conhecidas para mols: Se você tiver dados em unidades de massa
                    (gramas) ou
                    volume, converta para mols usando as massas molares ou as condições ideais de temperatura e pressão,
                    se for um gás.

                    <br><br>Usar a relação molar: A partir da equação balanceada, use a relação molar entre os reagentes
                    e
                    produtos para calcular a quantidade desconhecida.

                    <br><br>Converter para as unidades desejadas: Se o resultado final for necessário em unidades
                    diferentes,
                    como gramas ou litros, converta de volta utilizando a massa molar ou as condições de gás ideais.

                    <br><br>Exemplo prático:

                    <br><br>Considere a reação de combustão do metano (CH4​):

                    <br><br>CH<span style="font-size: smaller;">4</span> + 2O<span style="font-size: smaller;">2</span>
                    &rarr; CO<span style="font-size: smaller;">2</span> + 2H<span style="font-size: smaller;">2</span>O

                    <br><br>Se você tiver 8 gramas de metano (CH₄), quantos gramas de dióxido de carbono (CO₂) serão
                    produzidos?

                    <br><br>Passos:

                    <br><br>Balancear a equação (já está balanceada).
                    <br><br>Converter 8 g de CH4​ para mols usando a massa molar de CH4 (16 g/mol).

                    <br><br><span style="font-size: smaller;">16</span>g/mol ÷ 8g = 0,5 mol de CH<span
                        style="font-size: smaller;">4</span>

                    <br><br>Usar a proporção molar para encontrar os mols de CO<sub>2</sub> (1 mol de CH<sub>4</sub> produz 1
                    mol
                    de CO<sub>2</sub>):
                    <br><br>0,5 mol de CH<sub>4</sub> &rarr; 0,5 mol de CO<sub>2</sub>
                    <br><br>Converter os mols de CO<sub>2</sub> para gramas usando a massa molar de CO<sub>2</sub> (44 g/mol):

                    <br><br>0,5 mol de CO<sub>2</sub> &times; 44 g/mol = 22 g de CO<sub>2</sub>
                    <br><br>Portanto, 8 gramas de metano produzem 22 gramas de dióxido de carbono.
                    <br><br>A estequiometria é uma ferramenta essencial para entender e controlar as reações químicas em
                    diversos
                    contextos, como na indústria, na pesquisa e até no cotidiano.

                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) O que é a estequiometria?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) O estudo das propriedades físicas das substâncias químicas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) A ferramenta que permite calcular as quantidades de substâncias em uma reação química. </span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) A análise dos produtos de uma reação química.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) O estudo da formação de compostos químicos.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Quais são os coeficientes estequiométricos em uma reação?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Os números que indicam o número de átomos de cada elemento na reação.</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Os números que representam a massa das substâncias reagentes.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Os números que indicam a proporção de reagentes e produtos em uma reação. </span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Os números que representam o volume das substâncias envolvidas.</span>
                        </li>
                        <br>

                        <li class="mb-2">
                            <p>3) O que é necessário para resolver um problema estequiométrico?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) Conhecer as condições de pressão e temperatura para todos os gases envolvidos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) Conhecer apenas as massas molares dos reagentes.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) Ter uma equação química balanceada e utilizar a relação molar.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) Determinar o pH das substâncias envolvidas.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) Qual é a unidade fundamental utilizada na estequiometria?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) Quilo.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Átomo.</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) Mol.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D)Grama.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) Em uma reação de combustão do metano (CH₄), se você tem 8 gramas de metano, quantos gramas de dióxido de carbono (CO₂) serão produzidos? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) 44 gramas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) 16 gramas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) 8 gramas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) 22 gramas.</span></li>


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