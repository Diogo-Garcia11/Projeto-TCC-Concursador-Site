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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Porcentagem</h1>
                <p class="text-black">A Porcentagem ou Percentagem representa uma razão cujo denominador é igual a 100 e
                    indica uma comparação de uma parte com o todo.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/porcentagem (1).webp')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#o-que-a-geometria-espacial-estuda"
                                class="text-kblue hover:text-black hover:!text-black">1- O que é Porcentagem?</a></li>
                        <li><a href="#conceitos-importantes-da-geometria-espacial"
                                class="text-kblue hover:text-black hover:!text-black">2- Representações da
                                Porcentagem.</a></li>
                        <li><a href="#principais-formulas-da-geometria-espacial"
                                class="text-kblue hover:text-black hover:!text-black">3- Como Calcular a Porcentagem</a>
                        </li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4-
                                Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="o-que-a-geometria-espacial-estuda" class="text-3xl font-Montserrat font-bold text-black mb-4">O
                    que é a Porcentagem</h2>
                <p class="text-justify mb-4 text-black">Porcentagem envolve diversas situações com que nos deparamos
                    frequentemente em nosso cotidiano, por exemplo em indicadores econômicos, resultados de pesquisas ou
                    promoções. Entendemos porcentagem como sendo a razão entre um número qualquer e 100, sendo
                    representada pelo símbolo %. Utilizamos a ideia de porcentagem para representar partes de algo
                    inteiro."</p>

                <h2 id="conceitos-importantes-da-geometria-espacial"
                    class="text-3xl font-Montserrat font-bold text-black mb-4">Representações da Porcentagem.</h2>
                <p class="text-justify mb-4 text-black">
                    Sabemos que a porcentagem é uma razão, logo, pode ser representada por uma fração, que, por sua vez,
                    pode ser escrita na forma decimal. De modo geral, se temos um número acompanhado pelo símbolo %,
                    basta dividi-lo  por 100, ou seja:
                    <img class="mt-6 w-96" src="{{asset('imagens/porcentagem-caso-geral (2).png')}}" alt="">
                    Veja os exemplos seguintes que mostram as diferentes representações de porcentagens. Lembre-se, para
                    “transformar” a porcentagem em fração, basta dividir o número que acompanha o símbolo % por 100 e
                    simplificar a fração; para “transformar” a fração em forma decimal, basta realizar a divisão.

                    <br><br> <span class="font-bold">• Exemplo:</span>
                    <img class="mt-6 w-96" src="{{asset('imagens/por.png')}}" alt="">

                    Perceba que quando escrevemos a porcentagem 100% é o mesmo que considerar um inteiro, ou seja,
                    quando consideramos 100% de algo, estamos levando em conta o total daquilo. No caso de 210%, estamos
                    considerando mais que um inteiro, isto é, consideramos 2,1 vezes o total.

                    Para fazer o caminho de volta, ou seja, dado uma fração ou um número decimal para ser escrito na
                    forma percentual, basta multiplicar o número em questão por 100. Veja:
                    <img class="mt-6 w-96" src="{{asset('imagens/pi0.png')}}" alt="">


                    <br>

                <h2 id="principais-formulas-da-geometria-espacial"
                    class="text-3xl font-Montserrat font-bold text-black mb-4"> Como Calcular a Porcentagem</h2>
                <p class="text-justify mb-4 text-black"> Para realizar o cálculo da porcentagem de um valor, basta
                    multiplicar esse valor pela porcentagem em sua forma decimal ou fracionária

                    <br><br> <span class="font-bold">• Exemplo:</span> Calcule 50% de 600.
                    Sabemos que 50% = 0,5, assim, basta fazer a substituição e multiplicar os valores. Veja:
                    <img class="mt-6 w-96" src="{{asset('imagens/porcentagemzuzu.png')}}" alt="">

                    Podendo também substituir os 50% na forma fracionária, ficando:
                    <img class="mt-6 w-96" src="{{asset('imagens/porcit.png')}}" alt="">
                    Logo, 50% de 600 = 300. Veja que 50% representam a metade do total que é 600.

                    <br>
                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1)25 representa quantos por cento de 200?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) 12,5%</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) 15,5%</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) 16%</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) 20%</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Em uma sala de aula há 30 alunos, dos quais 40% são meninas. Quantas meninas têm na
                                sala?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) 10 meninas </span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) 12 meninas</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) 15 meninas</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) 18 meninas</span>
                        </li>

                        <br>

                        <li class="mb-2">
                            <p>3) Júlia acertou 75% das questões de Matemática do teste e Mariana acertou 4/5. Quem
                                acertou mais questões?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) Julia</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) Mariana</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) As duas acertaram
                                o mesmo número de questões</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) Na promoção de uma loja de eletrodomésticos, um aparelho de som que custava R$ 400,00
                                teve um desconto de 12%. Quanto o cliente que decidir comprar o equipamento pagará? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) R$ 372,00</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) R$ 342,00</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) R$ 362,00</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) R$ 352,00</span>
                        </li>
                        <br>

                        <li class="mb-2">
                            <p>5) Observe a figura abaixo e responda: a fração do desenho que não está pintada
                                corresponde a que porcentagem? </p>
                            <img class="mt-6 w-96" src="{{asset('imagens/quest.webp')}}" alt="">
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) 20%<span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) 30%</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) 25%</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) 35%</span></li>
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