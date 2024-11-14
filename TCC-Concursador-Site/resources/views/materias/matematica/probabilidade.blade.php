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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Probabilidade</h1>
                <p class="text-black">A probabilidade de um evento ocorrer é calculada pela razão entre o número de casos favoráveis ao evento e o número de casos possíveis.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/pro.webp')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#o-que-a-geometria-espacial-estuda" class="text-kblue hover:text-black hover:!text-black"> 1- O que é a Probabilidade?</a></li>
                        <li><a href="#conceitos-importantes-da-geometria-espacial" class="text-kblue hover:text-black hover:!text-black"> 2 - Conceitos Básicos</a></li>
                        <li><a href="#principais-formulas-da-geometria-espacial" class="text-kblue hover:text-black hover:!text-black"> 3 - Tipos de Probabilidade</a></li>
                        <li><a href="#principais-formulas-da-geometria-espacial" class="text-kblue hover:text-black hover:!text-black">4 - Eventos na Probabilidade</a></li>
                        <li><a href="#principais-formulas-da-geometria-espacial" class="text-kblue hover:text-black hover:!text-black"> 5- Fórmulas na Probabilidade</a></li>
                        <li><a href="#principais-formulas-da-geometria-espacial" class="text-kblue hover:text-black hover:!text-black">6 -Como Calcular a Probabilidade</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">8 -Exercicios</a></li>
                    </ul>
                </div>

                <h2 id="conceitos-importantes-da-geometria-espacial" class="text-3xl font-Montserrat font-bold text-black mb-4">O que é a Probabilidade?</h2>
                 

                <p class="text-justify mb-4 text-black">
                Probabilidade é a chance de obter determinado resultado em um experimento. Fundamentos probabilísticos são utilizados na análise de experimentos e situações aleatórias e podem contribuir para tomadas de decisões em diferentes contextos.

Para desenvolver o estudo da probabilidade, precisamos compreender alguns conceitos básicos.

<h2 id="conceitos-importantes-da-geometria-espacial" class="text-3xl font-Montserrat font-bold text-black mb-4">Conceitos básicos</h2>
<p class="text-justify mb-4 text-black">A probabilidade conta com conceitos importantes, como:
    <br>
                    <br> <span class="font-bold">• Ponto amostral na probabilidade: </span>Considere uma situação ou experimento que pode produzir diferentes resultados cada vez que ocorrer (ou seja, um experimento aleatório). Cada resultado particular é chamado de ponto amostral.
<br>
Exemplo: A face superior resultante do lançamento de um dado é um experimento aleatório. Cada face é um ponto amostral.

                   <br> <span class="font-bold">• Espaço Amostral na Probabilidade: </span> Espaço amostral é o conjunto de todos os possíveis resultados de um experimento. Esse conjunto é frequentemente expresso pela letra grega maiúscula Ômega: Ω .
<br>
Exemplo: A face superior resultante do lançamento de um dado de 6 faces pode ser o número 1, 2, 3, 4, 5 ou 6. Logo, nesse experimento, Ω= {1,2,3,4,5,6}.
<br>
<strong>→ Espaço amostral equiprovável</strong>
<br>
Um espaço amostral é chamado de equiprovável se todos os resultados possuem a mesma chance de acontecerem.
<br>
Exemplo: Ao lançar um dado comum (também chamado de “não viciado”) de 6 faces, a chance de obter, na face superior, o número 1 é a mesma de obter o número 2, que é a mesma de obter o número 3 e assim por diante. Portanto, o espaço amostral Ω={1,2,3,4,5,6} é equiprovável.
                
                <br>
                <br>

                <h2 id="conceitos-importantes-da-geometria-espacial" class="text-3xl font-Montserrat font-bold text-black mb-4">Tipos de Probabilidade</h2>
                 
                <p class="text-justify mb-4 text-black">
                Existem diferentes concepções acerca do estudo de probabilidade.

                    <br> <span class="font-bold">• </span>A probabilidade <strong>clássica</strong> supõe um espaço amostral equiprovável para o cálculo de probabilidades.
                    
                    <br><span class="font-bold">• </span>A probabilidade <strong>empírica</strong> (ou frequentista) considera que o cálculo de probabilidade deve ser realizado a partir de repetições do experimento e análise dos resultados.

                    <br> <span class="font-bold">• </span> A probabilidade <strong>subjetiva</strong> se baseia em ideias, crenças e julgamentos pessoais. Consequentemente, o cálculo de probabilidade em determinado contexto pode variar de uma pessoa para outra.

                    </p>
                
                <br>

                <h2 id="conceitos-importantes-da-geometria-espacial" class="text-3xl font-Montserrat font-bold text-black mb-4">Eventos na Probabilidade</h2>
                 
                <p class="text-justify mb-4 text-black">
               Um <strong>evento é um conjunto especifíco de resultados</strong>e geralmente é representado por uma letra maiúscula.

Considere o experimento de lançar um dado de 6 faces e observar a face superior.

<br><br> <span class="font-bold">Exemplo de eventos são:</span>
                    <br><br> <span class="font-bold">•</span> A = Obter um número ímpar.
                    <br><br> <span class="font-bold">•</span> B = Obter um número par.
                    <br><br> <span class="font-bold">•</span> C = {1,2} (Obter o número 1 ou o número 2).
                    <br><br> <span class="font-bold">•</span> D = {1, 2, 3, 4, 5, 6} (Obter um número de 1 a 6).
                    <br><br> <span class="font-bold">•</span> E = {7} (Obter o número 7).

                    <br><br>
                    Note que os eventos A, B, C e D são subconjuntos do espaço amostral (o evento D, inclusive, é igual ao espaço amostral). Assim, os eventos A, B e C são eventos possíveis e o evento D é um evento certo, pois com certeza a face obtida será um número de 1 a 6. Já o evento E é chamado de evento impossível, pois não podemos obter o número 7 ao lançar um dado de 6 faces.
</p>
            
                <br>

                <h2 id="conceitos-importantes-da-geometria-espacial" class="text-3xl font-Montserrat font-bold text-black mb-4">Fórmulas na Probabilidade</h2>
                 
                <p class="text-justify mb-4 text-black">
                Agora que conheçemos esses conceitos fundamentais, podemos seguir com o cálculo básico de probabilidade. Vamos representar a probabilidade de um evento A acontecer por P(A).
<br>
A probabilidade de um evento A ocorrer a partir de um experimento é a razão entre o número de casos favoráveis a esse evento e o número total de casos possíveis. Isso significa, respectivamente, a razão entre o número de elementos do conjunto A e o número de elementos do espaço amostral do experimento.
<br>
<img class="mt-6 w-96" src="{{asset('imagens/baixados (6).png')}}" alt="">
                   
<br><br> <span class="font-bold">Exemplo de eventos são:</span>
                    <br><br> <span class="font-bold">•</span> P(A) →  probabilidade do evento A ocorrer.
                    <br><br> <span class="font-bold">•</span> n(A) →  número de elementos do conjunto A, ou seja, a quantidade pontos amostrais favoráveis à ocorrência de A.
                    <br><br> <span class="font-bold">•</span> n(Ω) →  número de elementos do espaço amostral.

                    <br><br>
                    Observações:
<br>
→ Frequentemente essa razão é expressa nas formas percentual e decimal.
<br>
→ Note que P(A) é um número de 0 a 1. Se A for impossível, n(A) = 0  e P(A) = 0 = 0% . Se A for o espaço amostral, então n(A)= n(Ω) e P(A)= 1= 100% .
</p>
            
                <br>

        

                <h2 id="principais-formulas-da-geometria-espacial" class="text-3xl font-Montserrat font-bold text-black mb-4">Como calcular a Probabilidade</h2>
                <p class="text-justify mb-4 text-black"> A fórmula para calcular uma probabilidade é relativamente simples e podemos encontrá-la ao dividir o número de eventos favoráveis e o número total de resultados possíveis.
<br>
Seja um evento A
 e um espaço amostral S
, a notação n(A)
 e n(S)
 se refere à quantidade de elementos nestes conjuntos, e P(A) se refere à probabilidade de o evento A acontecer dado pela fórmula:
 <br>
 <img class="mt-6 w-96" src="{{asset('imagens/ca.jpeg')}}" alt="">
 Os valores da probabilidade podem ser expressos em frações ou em porcentagens.
    
                </p>

                
                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) (ENEM) Em uma central de atendimento, cem pessoas receberam senhas numeradas de 1 até 100. Uma das senhas é sorteada ao acaso. Qual é a probabilidade de a senha ser um número de 1 a 20.</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) 1/100</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) 19/100</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) 20/100</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) 21/100</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">E) 80/100</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) (Fundatec – 2019) Ao lançar uma moeda não viciada três vezes consecutivas, a probabilidade de sair pelo menos duas caras é de:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) 10%</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B)  20%</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) 30%</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) 40%</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">E) 50%</span></li>
                        <br>

                        <li class="mb-2">
                            <p>3) Um restaurante está com 13 pessoas: 9 clientes e 4 garçons. Se escolhermos uma pessoa do local aleatoriamente, qual a probabilidade de ser um cliente?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) 3/13</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) 9/13</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) 6/13</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) 7/13</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4)Qual a probabilidade de escolher uma carta no baralho e essa carta não ser um ás? </p>                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) 17/13</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) 12/13</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) 14/13</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) 11/13</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5)Uma pessoa foi até a padaria para comprar pão e iogurte. Se o estabelecimento possui 30 pães, sendo que 5 são do dia anterior e os outros foram fabricados no dia, e 20 iogurtes com data de validade inelegível, dos quais 1 já venceu, qual a probabilidade do cliente escolher um pão do dia e um iogurte na validade? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) 19/24<span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) 17/30</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) 14/27</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) 18/29</span></li>
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