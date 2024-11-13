<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p> <!-- Adicionei uma margem horizontal -->
            <a href="{{ route('materias', ['section' => 'matematica']) }}#matematica" class="mb-4 text-gray-500 underline inline-block">Matemática</a>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Conjuntos Númericos</h1>
                <p class="text-black">Os conjuntos numéricos reúnem diversos conjuntos cujos elementos são números. Eles são formados pelos números naturais, inteiros, racionais, irracionais, reais e complexos.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/conj.jpg')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#o-que-a-geometria-espacial-estuda" class="text-kblue hover:text-black hover:!text-black"> 1- Conjunto dos Números Naturais (N)</a></li>
                        <li><a href="#conceitos-importantes-da-geometria-espacial" class="text-kblue hover:text-black hover:!text-black"> 2 - Conjunto dos Números Inteiros (Z)</a></li>
                        <li><a href="#principais-formulas-da-geometria-espacial" class="text-kblue hover:text-black hover:!text-black"> 3 - Conjunto dos Números Racionais (Q)</a></li>
                        <li><a href="#principais-formulas-da-geometria-espacial" class="text-kblue hover:text-black hover:!text-black">4 - Conjunto dos Números Irracionais (I)</a></li>
                        <li><a href="#principais-formulas-da-geometria-espacial" class="text-kblue hover:text-black hover:!text-black"> 5- Conjunto dos Números Reais (R)</a></li>
                        <li><a href="#principais-formulas-da-geometria-espacial" class="text-kblue hover:text-black hover:!text-black">6 -Intervalos Numéricos</a></li>
                        <li><a href="#principais-formulas-da-geometria-espacial" class="text-kblue hover:text-black hover:!text-black"> 7 -Propriedades dos Conjuntos Numéricos</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">8 -Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="o-que-a-geometria-espacial-estuda" class="text-3xl font-Montserrat font-bold text-black mb-4">Conjunto dos Números Naturais (N)</h2>
                <p class="text-justify mb-4 text-black">O conjunto dos números naturais é representado por N. Ele reúne os números que usamos para contar (incluindo o zero) e é infinito.
No conjunto dos naturais, há apenas números positivos (além do zero). Nele, um novo número sempre pode ser obtido ao adicionar uma unidade ao número anterior.</p>

                <h2 id="conceitos-importantes-da-geometria-espacial" class="text-3xl font-Montserrat font-bold text-black mb-4">Conjunto dos Números Inteiros (Z)</h2>
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

                <h2 id="principais-formulas-da-geometria-espacial" class="text-3xl font-Montserrat font-bold text-black mb-4">Conjunto dos Números Racionais (Q)</h2>
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
                   
    
                </p>

                <h2 id="o-que-a-geometria-espacial-estuda" class="text-3xl font-Montserrat font-bold text-black mb-4">Conjunto dos Números Irracionais (I)</h2>
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

                <h2 id="principais-formulas-da-geometria-espacial" class="text-3xl font-Montserrat font-bold text-black mb-4">Conjunto dos Números Reais (R)</h2>
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
                   
    
                </p>
                <h2 id="o-que-a-geometria-espacial-estuda" class="text-3xl font-Montserrat font-bold text-black mb-4">Intervalos Numéricos</h2>
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


                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) (Cefet-CE) É unitário o conjunto:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) {x ∈ Z│x < 1}</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) {x ∈ Z│x2 > 0}</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) {x ∈ R│x2 = 1}</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) {x ∈ Q│x2 < 2}</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">E) {x ∈ N│1 < 2x < 4}</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) (UFOP-MG) A respeito dos números a = 0,499999… e b = 0,5, é correto afirmar:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) b = a + 0,011111</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B)  a = b</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) a é irracional e b é racional</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) a < b</span></li>
                        <br>

                        <li class="mb-2">
                            <p>3) Dado o conjunto A e B, temos que A U B = {1, 2, 4, 6, 8, 10, 12, 14, 16}, que A – B = {1, 2, 10}, e que A ∩ B = {6, 8, 16}, assim, o conjunto B é igual a:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) B = {1, 2, 6, 8, 10, 16}</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) B = {1, 2, 10, 16}</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) B = {6, 8, 12, 14, 16}</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) B = {12, 4, 8, 10, 12, 14}</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">E) B = {4, 6, 8, 12, 14, 16}</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4)Em uma escola de formação de condutores, constatou-se que todos os 34 alunos estavam tirando a primeira carteira nacional de habilitação (CNH). O professor perguntou quantos estavam ali para tirar a CNH da categoria A, e 12 estudantes levantaram a mão, posteriormente, ele perguntou quantos estavam ali para obter CNH da categoria B, e 29 levantaram a mão, sendo assim, a quantidade de candidatos que pretendem tirar somente a CNH da categoria A é: </p>                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) 22</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) 7</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) 5</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) 19</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">E) 10</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) (PUC) Em um colégio, de 100 alunos, 80 gostam de sorvete de chocolate, 70 gostam de sorvete de creme e 60 gostam dos dois sabores. Quantos alunos não gostam de nenhum dos dois sabores? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) 0<span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) 10</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) 20</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) 30</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">E) 40</span></li>

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