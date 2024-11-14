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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Geometria Plana</h1>
                <p class="text-black">A geometria plana é o campo da  matemática que estuda as formas geométricas de até duas dimensões, ou seja, aquelas que podem apresentar largura e comprimento, mas não têm profundidade.
                <img class="mt-6 w-96" src="{{asset('imagens/geometria-plana.webp')}}" alt="">

                </p>
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#o-que-a-geometria-plana-estuda" class="text-kblue hover:text-black hover:!text-black"> 1- O que é Geometria Plana?</a></li>
                        <li><a href="#conceitos-basicos-da-geometria-plana" class="text-kblue hover:text-black hover:!text-black"> 2 - Conceitos básicos de Geometria Plana</a></li>
                        <li><a href="#classificacao-dos-angulos" class="text-kblue hover:text-black hover:!text-black"> 3 - Classificação dos Ângulos</a></li>
                        <li><a href="#formulas-da-geometria-plana" class="text-kblue hover:text-black hover:!text-black"> 4 - Fórmulas de Geometria Plana</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">5 -Exercicios</a></li>
                    </ul>
                </div>

                <h2 id="o-que-a-geometria-plana-estuda" class="text-3xl font-Montserrat font-bold text-black mb-4">O que é Geometria Plana?</h2>
                 

                <p class="text-justify mb-4 text-black">
                Também conhecida como geometria euclidiana entre os estudiosos da área, como uma homenagem ao matemático grego Euclides de Alexandria, essa parte da teoria matemática se dedica às figuras planas, como quadriláteros, triângulos, círculos, entre outros.

Na prática, a geometria plana vai analisar as suas propriedades e tamanhos, além de desenvolver fórmulas para descobrir a sua área e perímetro a partir de cálculos matemáticos. E para que você compreenda melhor, no tópico a seguir, vamos falar um pouco mais sobre os conceitos básicos de geometria plana.

<br>
<h2 id="conceitos-basicos-da-geometria-plana" class="text-3xl font-Montserrat font-bold text-black mb-4"> Conceitos Básicos de Geometria Plana</h2>
                 

                <p class="text-justify mb-4 text-black">
                Para iniciar o estudo da geometria plana, é essencial estabelecer os seus elementos fundamentais. Os conceitos, como ponto, reta e plano, não podem ser completamente definidos de forma independente. Qualquer tentativa de definição acaba sendo circular, ou depende de outros conceitos indefinidos.

Na obra Os elementos, um tratado matemático e geométrico escrito pelo grego Euclides, em Alexandria, por volta de 300 a.C, a linha é descrita como um comprimento sem largura. Porém, os conceitos de comprimento e largura permanecem indefinidos, e frequentemente se classificam como conceitos primitivos.

<br><br> <span class="font-bold">• Ponto: </span>Definido como “aquilo que não tem partes”, o ponto não possui dimensão e é o elemento-base para a formação dos outros conceitos da geometria plana.
<img class="mt-6 w-96" src="{{asset('imagens/ponto (1).webp')}}" alt="">


                    <br><br> <span class="font-bold">• Reta:</span> Uma linha de comprimento ilimitado, mas sem largura, formada por infinitos pontos é o que chamamos de reta. Ela pode ser horizontal, vertical ou diagonal e, em relação a pontos em comum, pode ser classificada como:
<br>
• paralela, quando não possui pontos em comum com outra reta;
<br>
• concorrente, quando se cruzam com outra reta por meio de um ponto em comum.
<img class="mt-6 w-96" src="{{asset('imagens/reta (1).webp')}}" alt="">

                    <br><br> <span class="font-bold">• Semirreta:</span> Partindo de um ponto A, a semirreta se diferencia da reta justamente por possuir um início. A partir daí, esta linha segue de forma limitada, formada por infinitos pontos, porém, em um único sentido.
                    <img class="mt-6 w-96" src="{{asset('imagens/semirretas.webp')}}" alt="">

                    <br><br> <span class="font-bold">• Segmento de reta:</span>Partindo, ainda, do conceito da reta, o segmento também é formado por pontos. No entanto, possui início e fim, demarcado por pontos A e B, por exemplo.
                    <img class="mt-6 w-96" src="{{asset('imagens/segwebp.webp')}}" alt="">

                    <br><br> <span class="font-bold">• Plano:</span> Além de ser formada por infinitos pontos, a figura do plano também é composta por infinitas retas e possui, ao mesmo tempo, comprimento e largura. Visualmente falando, é um elemento bidimensional que constitui a base das demais figuras geométricas planas.
                    <img class="mt-6 w-96" src="{{asset('imagens/plano (1).webp')}}" alt="">

                    <br><br> <span class="font-bold">• Ângulo:</span> Quando duas semirretas partem de uma mesma origem, ou um vértice, a abertura formada entre esses dois elementos é chamada de ângulo que, por sua vez, é representado pela unidade de medida “grau”.
                    <img class="mt-6 w-96" src="{{asset('imagens/angulos.webp')}}" alt="">
                <br>
                <br>

                <h2 id="classificacao-dos-angulos" class="text-3xl font-Montserrat font-bold text-black mb-4"> Classificação dos Ângulos</h2>
                 

                <p class="text-justify mb-4 text-black">
                De acordo com os graus de abertura, os ângulos podem ser classificados de cinco formas diferentes, como podemos verificar logo abaixo:

                    <br><br> <span class="font-bold">• </span> nulo, em que as semirretas partem na mesma direção e se sobrepõem, não havendo abertura e apresentando uma medida igual a 0o;
                    <br><br> <span class="font-bold">• </span> agudo, com uma abertura que varia entre 0o e 90o;
                    <br><br> <span class="font-bold">• </span> reto, que possui exatamente 90o;
                    <br><br> <span class="font-bold">• </span> obtuso, com uma medida maior que 90o, mas inferior a 180o;
                    <br><br> <span class="font-bold">• </span> raso, em que as semirretas partem em direções opostas, formando um ângulo exato de 180o ou, metade de uma circunferência.

                    Além disso, eles podem ser complementares — quando a soma dos ângulos é 90o —, suplementares — quando a soma equivale a 180o —, ou opostos pelo vértice, em que eles são congruentes (com a mesma medida), mas cada um se localiza de um dos lados deste vértice.
                <br>
                <br>

                <h2 id="formulas-da-geometria-plana" class="text-3xl font-Montserrat font-bold text-black mb-4"> Fórmulas de Geometria Plana</h2>
                 

                 <p class="text-justify mb-4 text-black">
                 De acordo com os graus de abertura, os ângulos podem ser classificados de cinco formas diferentes, como podemos verificar logo abaixo:
 
                     <br><br> <span class="font-bold">• Triângulo: </span> Para calcular a área de um triângulo, basta multiplicar a medida da base (b) com a medida da altura (h) e dividir o resultado por dois.
                     <img class="mt-6 w-96" src="{{asset('imagens/triangulo.webp')}}" alt="">

                     <br><br> <span class="font-bold">• Quadrado: </span> Sabemos que os lados do quadrado são todos iguais. Para calcular sua área, multiplicamos a medida da base com a medida altura. Como as medidas são as mesmas, multiplicá-las é o mesmo que elevar o lado ao quadrado.
                     <img class="mt-6 w-96" src="{{asset('imagens/quadrado.webp')}}" alt="">


                     <br><br> <span class="font-bold">• Retângulo: </span> A área do retângulo é dada pela multiplicação da base pela altura.
                     <img class="mt-6 w-96" src="{{asset('imagens/retangulo.webp')}}" alt="">

                     <br><br> <span class="font-bold">• Losango: </span> A área do losango é dada pelo produto da diagonal maior (D) com a diagonal menor (d) dividido por dois.
                     <img class="mt-6 w-96" src="{{asset('imagens/losangulo.webp')}}" alt="">

                     <br><br> <span class="font-bold">• Trapézio: </span> A área do trapézio é dada pelo produto da altura com a soma da base maior (B) e a base menor (b) dividido por dois.
                     <img class="mt-6 w-96" src="{{asset('imagens/trapezio.webp')}}" alt="">

                     <br><br> <span class="font-bold">• Círculo: </span> A área do círculo de raio r é dada pelo produto do raio ao quadrado com o número irracional ℼ (em geral utilizamos o valor ℼ = 3,14).
                     <img class="mt-6 w-96" src="{{asset('imagens/circ.webp')}}" alt="">

                    
                 <br>
                 <br>




                <br>


                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1)(Enem) Uma administração municipal encomendou a pintura de dez placas de sinalização para colocar em seu pátio de estacionamento. O profissional contratado para o serviço inicial pintará o fundo de 10 placas e cobrará um valor de acordo com a área total dessas placas. O formato de cada placa é um círculo de diâmetro d = 40 cm, que tangencia lados de um retângulo, sendo que o comprimento total da placa é h = 60 cm, conforme ilustrado na figura. Use 3,14 como aproximação para π.
                            <img class="mt-6 w-96" src="{{asset('imagens/placa.webp')}}" alt="">
                            Qual é a soma das medidas das áreas, em centímetros quadrados, das 10 placas?
                            </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) 16.628</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) 22.280</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) 28.560</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) 41.120</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">E) 66.240</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Dentro das figuras planas, há várias figuras geométricas. Algumas delas são mais conhecidas, como os quadriláteros e os triângulos. Essas figuras são conhecidas como polígonos. São considerados polígonos, exceto:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) losango</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) trapézio</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) retângulo</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) círculo</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">E) hexágono</span></li>
                        <br>

                        <li class="mb-2">
                            <p>3) Das figuras geométricas a seguir, marque a alternativa que possui somente figuras planas:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) Cubo, triângulo, pirâmide, circunferência.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) Quadrado, retângulo, cone, trapézio.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) Pentágono, círculo, quadrilátero, triângulo.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D)  Esfera, retângulo, hexágono, prisma.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4)Durante visita na obra, o engenheiro responsável constatou que havia uma distorção nos ângulos do desenho da garagem. A ideia é que a garagem tenha formato de retângulo, com ângulos de 90°. Entretanto, ele verificou que dois ângulos do quadrilátero que demarcam o desenho mediam 95° e os outros dois mediam 85° cada. Os ângulos de 95° e 85° são classificados respectivamente como:</p>                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) agudo e obtuso.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) reto e agudo.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) agudo e reto.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) obtuso e agudo.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">E) reto e agudo.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) Marcelo comprou um terreno que possui formato de um retângulo, com dimensões de 27 metros de comprimento e 12 metros de largura. Sua irmã Tatiane comprou um terreno com a mesma área, entretanto, com formato quadrado. A medida do lado do terreno da Tatiane é </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) 15 metros<span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) 16 metros</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) 17 metros</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) 18 metros</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">E) 19 metros</span></li>

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