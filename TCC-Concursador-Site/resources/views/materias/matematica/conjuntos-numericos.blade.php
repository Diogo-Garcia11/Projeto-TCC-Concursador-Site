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
                        <li><a href="#conjunto-naturais" class="text-kblue hover:text-black hover:!text-black"> 1- Conjunto dos Números Naturais (N)</a></li>
                        <li><a href="#conjunto-inteiros" class="text-kblue hover:text-black hover:!text-black"> 2 - Conjunto dos Números Inteiros (Z)</a></li>
                        <li><a href="#conjunto-racionais" class="text-kblue hover:text-black hover:!text-black"> 3 - Conjunto dos Números Racionais (Q)</a></li>
                        <li><a href="#conjunto-irracionais" class="text-kblue hover:text-black hover:!text-black">4 - Conjunto dos Números Irracionais (I)</a></li>
                        <li><a href="#conjunto-reais" class="text-kblue hover:text-black hover:!text-black"> 5- Conjunto dos Números Reais (R)</a></li>
                        <li><a href="#intervalos-reais" class="text-kblue hover:text-black hover:!text-black">6 -Intervalos Numéricos</a></li>
                        <li><a href="#propriedades" class="text-kblue hover:text-black hover:!text-black"> 7 -Propriedades dos Conjuntos Numéricos</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">8 -Exercicios</a></li>
                    </ul>
                </div>

                <h2 id="conjunto-naturais" class="text-3xl font-Montserrat font-bold text-black mb-4">Conjunto dos Números Naturais (N)</h2>
                 

                <p class="text-justify mb-4 text-black">
                O conjunto dos números naturais é representado por N. Ele reúne os números que usamos para contar (incluindo o zero) e é infinito.

No conjunto dos naturais, há apenas números positivos (além do zero). Nele, um novo número sempre pode ser obtido ao adicionar uma unidade ao número anterior.

<br><br> <span class="font-bold">Subconjuntos dos Números Naturais</span>

                    <br><br> <span class="font-bold">• N*= </span> {1, 2, 3, 4, 5..., n, ...} ou N* = N – {0}: conjuntos dos números naturais não-nulos, ou seja, sem o zero.

                    <br><br> <span class="font-bold">• Np= </span> {0, 2, 4, 6, 8..., 2n, ...}, em que n ∈ N: conjunto dos números naturais pares.

                    <br><br> <span class="font-bold">• Ni = </span> {1, 3, 5, 7, 9..., 2n+1, ...}, em que n ∈ N: conjunto dos números naturais ímpares.

                    <br><br> <span class="font-bold">• P = </span> {2, 3, 5, 7, 11, 13, ...}: conjunto dos números naturais primos.
                
                <br>
                <br>

                <h2 id="conjunto-inteiros" class="text-3xl font-Montserrat font-bold text-black mb-4">Conjunto dos Números Inteiros (Z)</h2>
                 
                <p class="text-justify mb-4 text-black">
                O conjunto dos números inteiros é representado por Z. Reúne os elementos dos números naturais (N) e seus opostos. Assim, conclui-se que N é um subconjunto de Z, assim, N ⊂ Z (N está contido em Z).

                <img class="mt-6 w-96" src="{{asset('imagens/conjuntodosinteiros.webp')}}" alt="">

                É possível obter sempre um sucessor, ao adicionar uma unidade ao elemento anterior. Também é possível obter sempre um antecessor, ao subtrair uma unidade do anterior.

O conjunto dos inteiros é infinito, tanto no sentido dos negativos como dos positivos.

<br><br> <span class="font-bold">Subconjuntos dos Números Inteiros</span> 

                    <br><br> <span class="font-bold">• Z* =</span>  {..., –4, –3, –2, –1, 1, 2, 3, 4, ...} ou Z* = Z – {0}: conjuntos dos números inteiros não-nulos, ou seja, sem o zero.
                    

                    <br><br> <span class="font-bold">• Z + =</span> {0, 1, 2, 3, 4, 5, ...}: conjunto dos números inteiros e não-negativos. Note que Z+ = N.

                    <br><br> <span class="font-bold">• Z* + =</span> {1, 2, 3, 4, 5, ...}: conjunto dos números inteiros positivos e sem o zero.

                    <br><br> <span class="font-bold">• Z_ =</span> {..., –5, –4, –3, –2, –1, 0}: conjunto dos números inteiros não-positivos.

                    <br><br> <span class="font-bold">• Z*_ =</span> {..., –5, –4, –3, –2, –1}: conjunto dos números inteiros negativos e sem o zero.
                    </p>
                
                <br>

                <h2 id="conjunto-racionais" class="text-3xl font-Montserrat font-bold text-black mb-4">Conjunto dos Números Racionais (Q)</h2>
                <p class="text-justify mb-4 text-black"> O conjunto dos números racionais é representado por Q. Reúne todos os números que podem ser escritos na forma fracionária.
                    <br>

                sendo a e b números inteiros e b ≠ 0.

Q = {0, ±1, ±1/2, ±1/3, ..., ±2, ±2/3, ±2/5, ..., ±3, ±3/2, ±3/4, ...}
<br>

Note que todo número inteiro é também número racional. Assim, Z é um subconjunto de Q.

<img class="mt-6 w-96" src="{{asset('imagens/conjuntodasracionais.webp')}}" alt="">

Importante ressaltar que as dízimas periódicas são números racionais. Elas são números decimais que se repetem após a vírgula, por exemplo: 1,4444444444... Embora possua infinitas casas decimais, pode ser escrito como a fração 13/9.

                    <br><br> <span class="font-bold">Subconjuntos dos Números Racionais</span>

                    <br><br> <span class="font-bold">• Q* =</span> subconjunto dos números racionais não-nulos, formado pelos números racionais sem o zero.

                    <br><br> <span class="font-bold">• Q+ =</span> subconjunto dos números racionais não-negativos, formado pelos números racionais positivos e o zero.

                    <br><br> <span class="font-bold">• Q*+ =</span>subconjunto dos números racionais positivos, formado pelos números racionais positivos, sem o zero.

                    <br><br> <span class="font-bold">• Q_ =</span> subconjunto dos números racionais não-positivos, formado pelos números racionais negativos e o zero.

                    <br><br> <span class="font-bold">• Q*_ =</span> subconjunto dos números racionais negativos, formado pelos números racionais negativos, sem o zero.
    
                </p>

                <br>

                <h2 id="conjunto-irracionais" class="text-3xl font-Montserrat font-bold text-black mb-4">Conjunto dos Números Irracionais (I)</h2>
                <p class="text-justify mb-4 text-black">
                O conjunto dos números irracionais é representado por I. Reúne os números decimais não exatos com uma representação infinita e não periódica, por exemplo: 3,141592... ou 1,203040...

Os números irracionais não contêm os racionais. São conjuntos sem intersecção.
<img class="mt-6 w-96" src="{{asset('imagens/conjuntodosreais.webp')}}" alt="">

                <br>

                <h2 id="conjunto-reais" class="text-3xl font-Montserrat font-bold text-black mb-4">Conjunto dos Números Reais (R)</h2>
                <p class="text-justify mb-4 text-black"> O conjunto dos números reais é representado por R. Esse conjunto é formado pelos números racionais (Q) e irracionais (I). Assim, temos que R = Q ∪ I (união entre os racionais e os irracionais).
                <br>
Além disso, N, Z, Q e I são subconjuntos de R.
<img class="mt-6 w-96" src="{{asset('imagens/conjuntodosreais2.webp')}}" alt="">


                    <br><br> <span class="font-bold">Subconjuntos dos Números Reais</span> 

                    <br><br> <span class="font-bold">• R* =</span> {x ∈ R│x ≠ 0}: conjunto dos números reais não-nulos.

                    <br><br> <span class="font-bold">• R+ =</span> {x ∈ R│x ≥ 0}: conjunto dos números reais não-negativos.

                    <br><br> <span class="font-bold">• R*+ =</span> {x ∈ R│x > 0}: conjunto dos números reais positivos.

                    <br><br> <span class="font-bold">• R_ = </span>{x ∈ R│x ≤ 0}: conjunto dos números reais não-positivos.

                    <br><br> <span class="font-bold">• R*_ = </span> {x ∈ R│x < 0}: conjunto dos números reais negativos.
                   
    
                </p>

                <br>
                <h2 id="intervalos-reais" class="text-3xl font-Montserrat font-bold text-black mb-4">Intervalos Numéricos</h2>
                <p class="text-justify mb-4 text-black">Há ainda um subconjunto relacionado com os números reais, chamados de intervalos. Sejam a e b números reais e a < b, temos os seguintes intervalos reais:
                    <br><br> <span class="font-bold">• Intervalo aberto de extremos: </span> ]a,b[ = {x ∈ R│a < x < b}
<img class="mt-6 w-96" src="{{asset('imagens/intervalo_aberto.webp')}}" alt="">

<br><br> <span class="font-bold">• Intervalo fechado de extremos: </span>  [a,b] = {x ∈ R│a ≤ x ≤ b}
<img class="mt-6 w-96" src="{{asset('imagens/intervalo_fechado.webp')}}" alt="">

<br><br> <span class="font-bold">• Intervalo aberto à direta </span> (ou fechado à esquerda) de extremos: [a,b[ = {x ∈ R│a ≤ x < b}
<img class="mt-6 w-96" src="{{asset('imagens/intervalo_diretira.webp')}}" alt="">

<br><br> <span class="font-bold">• Intervalo aberto à esquerda </span> (ou fechado à direita) de extremos: ]a,b] = {x ∈ R│a < x ≤ b}
<img class="mt-6 w-96" src="{{asset('imagens/entervalo_esquerda.webp')}}" alt="">

                </p>
                    <br>
                    br
                <h2 id="propriedades" class="text-3xl font-Montserrat font-bold text-black mb-4">Propriedades dos Conjuntos Numéricos</h2>
<img class="mt-6 w-96" src="{{asset('imagens/digrama.webp')}}" alt="">

                <p class="text-justify mb-4 text-black">
                Para facilitar os estudos sobre os conjuntos numéricos, segue abaixo algumas de suas propriedades:
                    <br><br> <span class="font-bold">• </span> O conjunto dos números naturais (N) é um subconjunto dos números inteiros Z, (N ⊂ Z).


                    <br><br> <span class="font-bold">• </span> O conjunto dos números inteiros (Z) é um subconjunto dos números racionais Q, (Z ⊂ Q).

                    <br><br> <span class="font-bold">• </span> O conjunto dos números racionais (Q) é um subconjunto dos números reais (R). (Q ⊂ R)

                    <br><br> <span class="font-bold">• </span> Os conjuntos dos números naturais (N), inteiros (Z), racionais (Q) e irracionais (I) são subconjuntos dos números reais (R).
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