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
            <a href="{{ route('materias', ['section' => 'matematica']) }}#matematica" class="mb-4 text-gray-500 underline inline-block">Matemática</a>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Geometria Espacial</h1>
                <p class="text-black">A Geometria Espacial é a parte da matemática que estuda formas com três dimensões. Ela se ocupa de objetos que ocupam espaço, como cubos e esferas.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/geometria-espacial-og.png')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#o-que-a-geometria-espacial-estuda" class="text-kblue hover:text-black hover:!text-black">1- O que a Geometria Espacial estuda?</a></li>
                        <li><a href="#conceitos-importantes-da-geometria-espacial" class="text-kblue hover:text-black hover:!text-black">2- Conceitos importantes da Geometria Espacial</a></li>
                        <li><a href="#principais-formulas-da-geometria-espacial" class="text-kblue hover:text-black hover:!text-black">3- Principais fórmulas da Geometria Espacial</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4- Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="o-que-a-geometria-espacial-estuda" class="text-3xl font-Montserrat font-bold text-black mb-4">O que é a cartografia</h2>
                <p class="text-justify mb-4 text-black">A Geometria Espacial estuda as figuras espaciais conhecidas como sólidos geométricos. O cubo, o cilindro, o cone, as pirâmides, entre outros, são objetos de estudo da Geometria Espacial.</p>

                <h2 id="conceitos-importantes-da-geometria-espacial" class="text-3xl font-Montserrat font-bold text-black mb-4">Conceitos Importantes da Geometria Espacial</h2>
                <p class="text-justify mb-4 text-black">
                Para compreender a Geometria Espacial, é importante conhecer os elementos primitivos, que são: o ponto, a reta, o plano e o espaço. Os elementos primitivos são assim chamados por serem a base da Geometria e não possuírem uma definição, entretanto, todos temos uma intuição sobre cada um deles.
                    <br><br> <span class="font-bold">• Ponto:</span> Os pontos são representados por letras maiúsculas do nosso alfabeto e são o primeiro elemento primitivo da Geometria. O ponto não possui nenhuma dimensão, ou seja, é adimensional.
                    <img class="mt-6 w-96" src="{{asset('imagens/ponto.webp')}}" alt="">

                    <br><br> <span class="font-bold">• Reta:</span> A reta é o segundo elemento primitivo, representado por letras minúsculas do alfabeto (por exemplo, r). A reta possui infinitos pontos colineares e uma única dimensão.
                    <img class="mt-6 w-96" src="{{asset('imagens/reta.webp')}}" alt="">

                    <br><br> <span class="font-bold">• Plano:</span> O plano é o terceiro elemento primitivo. Ele é representado por letras do alfabeto grego, como α, β, entre outras. O plano possui duas dimensões.
                    <img class="mt-6 w-96" src="{{asset('imagens/plano.webp')}}" alt="">

                    <br><br> <span class="font-bold">• Espaço:</span> O espaço possui três dimensões. Podemos representar o espaço quando temos três eixos reais, um para cada dimensão, como na imagem a seguir:
                    <img class="mt-6 w-96" src="{{asset('imagens/espaco.webp')}}" alt="">
                    </p>
                
                <br>

                <h2 id="principais-formulas-da-geometria-espacial" class="text-3xl font-Montserrat font-bold text-black mb-4">Principais fórmulas da Geometria Espacial</h2>
                <p class="text-justify mb-4 text-black"> Como diferença primordial da geometria plana, os objetos tridimensionais têm volume. Vamos ver como calcular o volume de alguns objetos.

                    <br><br> <span class="font-bold">• Prisma:</span> Para calcular o volume de um prisma, basta multiplicar a área de base pela altura.
                    <br>
                       <strong>V = Ab*h, onde Ab é a área da base e h é a altura.</strong>
                    <br>
                        Para calcular a área da base, vamos depender do formato do polígono que forma a base.

                    <br><br> <span class="font-bold">• Paralelepípedo:</span> Um paralelepípedo é um prisma quadrangular no qual as bases são paralelogramos. A fórmula de volume continua valendo.

                    <br><br> <span class="font-bold">• Cubo:</span> O cubo é um poliedro regular no qual todos seus lados são congruentes. Pensando em V = Ab*h, temos para o cubo:
                    <br>V = l²*l = l³, onde l é o valor do lado.
                    <br><br> <span class="font-bold">• Pirâmide: </span>Uma pirâmide é um poliedro definido pela união de todos os pontos entre um ponto V fora do plano e um polígono em um plano. O polígono no plano é chamado de base da pirâmide e pode assumir várias formas. O formato da base vai definir o volume da pirâmide. Temos:
                        <br> V = (Ab*h)/3

                    <br><br> <span class="font-bold">• Tetraedro:</span> Um tetraedro é uma pirâmide regular com quatro faces congruentes, sendo que os triângulos da face são equiláteros. Como a área de um triângulo equilátero é dada por Ab = (a²*√3)/4 e a altura é dada por h = (a*√6)/3, temos:
                    <br>  V = Ab*h/3 = (a²*√3)*(a*√6)/3*4*3 = a³*√2/12
                    <br><br> <span class="font-bold">• Cilindro:</span> Um cilindro é um sólido formado por bases circulares. Seu volume é dado pela multiplicação da área da base e sua altura. Como a base é um círculo, temos:
                        <br>V = π*r²*h, onde r é o raio do círculo da base e h é a altura.
                    <br><br> <span class="font-bold">• Cone:</span> O cone é formado por meio da revolução de um triângulo retângulo sobre um eixo. Sua base é um círculo. Portanto, temos:
                        <br>V = (Ab*h)/3 = π*r²*h/3
                    <br><br> <span class="font-bold">• Esfera:</span> A esfera é formada a partir da revolução de uma semicircunferência em torno de um eixo. Para determinar seu volume, precisamos conhecer o raio da esfera.
                            <br>V = 4*π*r³/3
    
                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Das figuras geométricas as seguir, marque a alternativa que contém uma figura que não é espacial.</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Pirâmide</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Cilindro</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Cubo</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Circunferência</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">E) Prisma</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Um prisma hexagonal possui 8 faces e 12 vértices. Qual é o número de arestas?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) 4</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) 12</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) 18</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) 36</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">E) 96</span></li>
                        <br>

                        <li class="mb-2">
                            <p>3) (Enem 2021) Uma das Sete Maravilhas do Mundo Moderno é o Templo de Kukulkán, localizado na cidade de Chichén Itzá, no México. Geometricamente, esse templo pode ser representado por um tronco reto de pirâmide de base quadrada.
                                As quantidades de cada tipo de figura plana que formam esse tronco de pirâmide são</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) 2 quadrados e 4 retângulos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) 1 retângulo e 4 triângulos isósceles.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) 2 quadrados e 4 trapézios isósceles.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) 1 quadrado, 3 retângulos e 2 trapézios retângulos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">E) 2 retângulos, 2 quadrados e 2 trapézios retângulos.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) (Enem 2021) Num recipiente com a forma de paralelepípedo reto-retângulo, colocou-se água até a altura de 8 cm e um objeto, que ficou flutuando na superfície da água. Para retirar o objeto de dentro do recipiente, a altura da coluna de água deve ser de, pelo menos, 15 cm. Para a coluna de água chegar até essa altura, é necessário colocar dentro do recipiente bolinhas de volume igual a 6 cm3 cada, que ficarão totalmente submersas. </p>
                            <img class="mt-6 w-96" src="{{asset('imagens/exercicio.webp')}}" alt="">
                            <p>O número mínimo de bolinhas necessárias para que se possa retirar o objeto que flutua na água, seguindo as instruções dadas, é de</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) 14</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) 16</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) 18</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) 30</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">E) 34</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) (FAG 2016) Dois blocos de alumínio, em forma de cubo, com arestas medindo 10 cm e 6 cm são levados juntos à fusão e em seguida o alumínio líquido é moldado como um paralelepípedo reto de arestas 8 cm, 8 cm e x cm. O valor de x é: </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) 16<span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) 17</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) 18</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) 19</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">E) 20</span></li>

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