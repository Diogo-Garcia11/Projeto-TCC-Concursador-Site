<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p> <!-- Adicionei uma margem horizontal -->
            <a href="{{ route('materias', ['section' => 'matematica']) }}#matematica"
                class="mb-4 text-gray-500 underline inline-block">Matemática</a>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Função</h1>
                <p class="text-black">Na Matemática, função corresponde a uma associação dos elementos de dois
                    conjuntos, ou seja, a função indica como os elementos estão relacionados.

                    Por exemplo, uma função de A em B significa associar cada elemento pertencente ao conjunto A a um
                    único elemento que compõe o conjunto B, sendo assim, um valor de A não pode estar ligado a dois
                    valores de B.
                    <img class="mt-6 w-96" src="{{asset('imagens/definicaodeumafuncao.webp')}}" alt="">

                    Notação para função: f: A → B (lê-se: f de A em B).
                </p>
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#representacao-das-funcoes" class="text-kblue hover:text-black hover:!text-black">
                                1- Representação das funções</a></li>
                        <li><a href="#tipos-de-funcoes" class="text-kblue hover:text-black hover:!text-black"> 2 - Tipos
                                de Funções</a></li>
                        <li><a href="#graficos-de-uma-funcao" class="text-kblue hover:text-black hover:!text-black"> 3 -
                                Gráficos de uma Função</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4
                                -Exercicios</a></li>
                    </ul>
                </div>

                <h2 id="representacao-das-funcoes" class="text-3xl font-Montserrat font-bold text-black mb-4">
                    Representação das funções</h2>


                <p class="text-justify mb-4 text-black">
                    Em uma função f: A → B o conjunto A é chamado de domínio (D) e o conjunto B recebe o nome de
                    contradomínio (CD).

                    Um elemento de B relacionado a um elemento de A recebe o nome de imagem pela função. Agrupando todas
                    as imagens de B temos um conjunto imagem, que é um subconjunto do contradomínio.

                    <br><br> <span class="font-bold">Exemplo: </span>observe os conjuntos A = {1, 2, 3, 4} e B = {1, 2,
                    3, 4, 5, 6, 7, 8}, com a função que determina a relação entre os elementos f: A → B é x → 2x. Sendo
                    assim, f(x) = 2x e cada x do conjunto A é transformado em 2x no conjunto B.
                    <img class="mt-6 w-96" src="{{asset('imagens/fun.webp')}}" alt="">
                    Note que o conjunto de A {1, 2, 3, 4} são as entradas, "multiplicar por 2" é a função e os valores
                    de B {2, 4, 6, 8}, que se ligam aos elementos de A, são os valores de saída.
                    <br>
                    Portanto, para essa função:


                    <br><br> <span class="font-bold">•</span> O domínio é {1, 2, 3, 4}

                    <br><br> <span class="font-bold">•</span> O contradomínio é {1, 2, 3, 4, 5, 6, 7, 8}

                    <br><br> <span class="font-bold">•</span>O conjunto imagem é {2, 4, 6, 8}

                    <br>
                    <br>
                <h2 id="tipos-de-funcoes" class="text-3xl font-Montserrat font-bold text-black mb-4">Tipos de Funções
                </h2>


                <p class="text-justify mb-4 text-black">
                    As funções recebem classificações de acordo com suas propriedades. Confira a seguir os principais
                    tipos.

                    <br><br> <span class="font-bold">Função sobrejetora</span>
                <p class="text-justify mb-4 text-black">
                    Na função sobrejetora o contradomínio é igual ao conjunto imagem. Portanto, todo elemento de B é
                    imagem de pelo menos um elemento de A.
                    <br><br>
                    Notação: f: A → B, ocorre a Im(f) = B
                    <br><br> <span class="font-bold">Exemplo</span>
                    <img class="mt-6 w-96" src="{{asset('imagens/sob.webp')}}" alt="">
                    <br>
                    Para a função acima:

                    <br><br> <span class="font-bold">•</span> O domínio é {-4, -2, 2, 3}

                    <br><br> <span class="font-bold">•</span> O contradomínio é {12, 4, 6}

                    <br><br> <span class="font-bold">•</span> O conjunto imagem é {12, 4, 6}

                    <br>

                    <br><br> <span class="font-bold">Função injetora</span>
                <p class="text-justify mb-4 text-black">
                    Na função injetora todos os elementos de A possuem correspondentes distintos em B e nenhum dos
                    elementos de A compartilham de uma mesma imagem em B. Entretanto, podem existir elementos em B que
                    não estejam relacionados a nenhum elemento de A.

                    <br><br> <span class="font-bold">Exemplo</span>
                    <img class="mt-6 w-96" src="{{asset('imagens/inj.webp')}}" alt="">
                    <br>
                    Para a função acima:

                    <br><br> <span class="font-bold">•</span> O domínio é {0, 3, 5}

                    <br><br> <span class="font-bold">•</span> O contradomínio é {1, 2, 5, 8}

                    <br><br> <span class="font-bold">•</span> O conjunto imagem é {1, 5, 8}

                    <br>



                    <br><br> <span class="font-bold">Função Bijetora</span>
                <p class="text-justify mb-4 text-black">
                    Na função bijetora os conjuntos apresentam o mesmo número de elementos relacionados. Essa função
                    recebe esse nome por ser ao mesmo tempo injetora e sobrejetora.

                    <br><br> <span class="font-bold">Exemplo:</span>
                    <img class="mt-6 w-96" src="{{asset('imagens/bi.webp')}}" alt="">
                    <br>
                    Para a função acima:

                    <br><br> <span class="font-bold">•</span> O domínio é {-1, 1, 2, 4}

                    <br><br> <span class="font-bold">•</span> O contradomínio é {2, 3, 5, 7}

                    <br><br> <span class="font-bold">•</span> O conjunto imagem é {2, 3, 5, 7}

                    <br>
                    <br><br> <span class="font-bold">Função Inversa</span>
                <p class="text-justify mb-4 text-black">
                    A função inversa é um tipo de função bijetora, por isso é sobrejetora e injetora ao mesmo tempo.

                    Através desse tipo de função é possível criar novas funções ao inverter os elementos.

                    <br>
                    <br><br> <span class="font-bold">Função Par</span>
                <p class="text-justify mb-4 text-black">
                    Uma função é par quando f(-x) = f(x). Assim a função possui a mesma imagem, tanto para x quanto para
                    -x.

                    <br>
                    <br><br> <span class="font-bold">Função Modular</span>
                <p class="text-justify mb-4 text-black">
                    A função modular associa elementos em módulos e seus números são sempre positivos.
                    <img class="mt-6 w-96" src="{{asset('imagens/ins.jpeg')}}" alt="">

                    <br><br> <span class="font-bold">Função Afim</span>
                <p class="text-justify mb-4 text-black">
                    A função afim, também chamada de função do 1º grau, apresenta uma taxa de crescimento e um termo
                    constante.
                    <br>
                    f(x) = ax + b
                    <br>
                    a: coeficiente angular
                    b: coeficiente linear
                    <br>
                    <br><br> <span class="font-bold">Função Linear</span>
                <p class="text-justify mb-4 text-black">
                    A função linear é um caso particular da função afim, sendo definida como f(x) = ax.
                    <br>
                    Quando o valor do coeficiente (a) que acompanha o x da função for igual a 1, a função linear é uma
                    função identidade.
                    <br>

                    <br><br> <span class="font-bold">Função Quadrática</span>
                <p class="text-justify mb-4 text-black">
                    A função quadrática é também chamada de função do 2º grau.
                    <br>
                    f(x) = ax2+ bx + c, sendo a ≠ 0
                    <br>
                    a, b e c: coeficientes da função polinomial de grau 2.


                    <br>
                    <br><br> <span class="font-bold">Função Logarítmica</span>
                <p class="text-justify mb-4 text-black">
                    A função logarítmica de base a é representada por f(x) = loga x, sendo a real positivo e a ≠ 1.
                    <br>
                    Ao invertermos a função logarítmica passamos a ter uma função exponencial.
                    <br>

                    <br><br> <span class="font-bold">Função Exponencial</span>
                <p class="text-justify mb-4 text-black">
                    A função exponencial apresenta uma variável no expoente e a base é sempre maior que zero e diferente
                    de um.
                    <br>
                    f(x) = ax, sendo a > 0 e a ≠ 0
                    <br>

                    <br><br> <span class="font-bold">Função Polinomial</span>
                <p class="text-justify mb-4 text-black">
                    A função polinomial é definida por expressões polinomiais.
                    <br>
                    f(x) = an . xn + an – 1 . xn – 1 + ...+a2 . x2 + a1 . x + a0
                    <br>
                    an, an-1, ... , a2, a1, a0: números complexos
                    <br>
                    n: número inteiro
                    x: variável complexa
                    <br><br> <span class="font-bold">Função Trigonométricas</span>

                <p class="text-justify mb-4 text-black">
                    As funções trigonométricas estão relacionadas com as voltas no ciclo trigonométrico, como:
                    <br>
                    Função Seno: f(x) = sen x
                    <br>
                    Função Cosseno:f(x) = cos x
                    <br>
                    Função Tangente: f(x) = tg x
                    <br>



                    <br>
                <h2 id="graficos-de-uma-funcao" class="text-3xl font-Montserrat font-bold text-black mb-4">Gráficos de
                    uma Função</h2>
                <p class="text-justify mb-4 text-black">A maneira como um elemento y se relaciona com um elemento x é
                    expressa através de um gráfico, que nos dá a ideia do comportamento da função.

                    Cada ponto no gráfico é dado por um par ordenado de x e y, onde x é o valor de entrada e y é o
                    resultado da relação definida pela função, ou seja, x → função → y.

                    <img class="mt-6 w-96" src="{{asset('imagens/func.webp')}}" alt="">
                    Para construir um gráfico, cada elemento x da função deve ser inserido no eixo horizontal (abcissas)
                    e os elementos y são posicionados no eixo vertical (ordenadas).
                    <br>
                    Os possíveis valores de x formam o conjunto Domínio. Já o conjunto dos valores assumidos por y,
                    formam o conjunto imagem.
                    <br>
                    Confira alguns exemplos de gráficos de funções.


                    <img class="mt-6 w-96" src="{{asset('imagens/gra.webp')}}" alt="">




                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1)(Cefet - MG - 2015) Um motorista de táxi cobra, para cada corrida, uma taxa fixa de R$
                                5,00 e mais R$ 2,00 por quilômetro rodado. O valor total arrecadado (R) num dia é função
                                da quantidade total (x) de quilômetros percorridos e calculado por meio da função R(x) =
                                ax + b, em que a é o preço cobrado por quilômetro e b, a soma de todas as taxas fixas
                                recebidas no dia. Se, em um dia, o taxista realizou 10 corridas e arrecadou R$ 410,00,
                                então a média de quilômetros rodados por corrida, foi de</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) 14</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) 16</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) 18</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) 20</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) (Unicamp - 2016) Considere a função afim f(x) = ax + b definida para todo número real
                                x, onde a e b são números reais. Sabendo que f(4) = 2, podemos afirmar que f(f(3) +
                                f(5)) é igual a</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) 5</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) 4</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) 3</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) 2</span></li>
                        <br>

                        <li class="mb-2">
                            <p>3) (Enem 2021) Por muitos anos, o Brasil tem figurado no cenário mundial entre os maiores
                                produtores e exportadores de soja. Entre os anos de 2010 e 2014, houve uma forte
                                tendência de aumento da produtividade, porém, um aspecto dificultou esse avanço: o alto
                                custo do imposto ao produtor associado ao baixo preço de venda do produto. Em média, um
                                produtor gastava R$ 1 200,00 por hectare plantado, e vendia por R$ 50,00 cada saca de 60
                                kg. Ciente desses valores, um produtor pode, em certo ano, determinar uma relação do
                                lucro L que obteve em função das sacas de 60 kg vendidas. Suponha que ele plantou 10
                                hectares de soja em sua propriedade, na qual colheu x sacas de 60 kg e todas as sacas
                                foram vendidas.
                                <br><br>
                                Qual é a expressão que determinou o lucro L em função de x obtido por esse produtor
                                nesse ano?
                            </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) L(x) = 50x – 1
                                200</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) L(x) = 50x – 12
                                000</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) L(x) = 50x + 12
                                000</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) L(x) = 500x – 1
                                200</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">E) L(x) = 1 200x –
                                500</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4)Ana e Bruno têm, juntos, R$ 110,00. Sabemos que Bruno tem R$ 20,00 a mais do que o
                                dobro da quantia de Ana. Qual é a quantia que Ana possui?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) R$ 20,00</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) R$ 30,00</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) R$ 40,00</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) R$ 50,00</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">E) R$ 60,00</span>
                        </li>
                        <br>

                        <li class="mb-2">
                            <p>5) (Colégio Naval - 2016) Na divisão exata do número k por 50, uma pessoa,
                                distraidamente, dividiu por 5, esquecendo o zero e, dessa forma, encontrou um valor 22,5
                                unidades maiores que o esperado. Qual o valor do algarismo das dezenas do número k? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) 1<span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) 2</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) 3</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) 4</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">E) 5</span></li>

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