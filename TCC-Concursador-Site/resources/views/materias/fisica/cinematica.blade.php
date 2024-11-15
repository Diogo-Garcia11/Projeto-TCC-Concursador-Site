<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p>
            <a href="{{ route('materias', ['section' => 'fisica']) }}#fisica" class="mb-4 text-gray-500 underline inline-block">Física</a>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Introdução à Cinemática</h1>

                <p class="text-black">
                    A Cinemática é o ramo da Física que estuda o movimento dos corpos sem considerar as forças que o causam.
                    Esse estudo abrange conceitos como posição, velocidade e aceleração, e é essencial para entender a dinâmica dos movimentos no mundo ao nosso redor.
                    Na Cinemática, observamos como os objetos se deslocam, analisando trajetórias, variações de velocidade e tempos de percurso.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/cinematica.png')}}" alt="">

                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#movimento" class="text-kblue hover:text-black hover:!text-black">1- Conceito de Movimento e Repouso</a></li>
                        <li><a href="#posicao" class="text-kblue hover:text-black hover:!text-black">2- Posição e Deslocamento</a></li>
                        <li><a href="#velocidade" class="text-kblue hover:text-black hover:!text-black">3- Velocidade e Movimento Uniforme</a></li>
                        <li><a href="#aceleracao" class="text-kblue hover:text-black hover:!text-black">4- Aceleração e Movimento Uniformemente Variado</a></li>
                    </ul>
                </div>

                <h2 id="movimento" class="text-3xl font-Montserrat font-bold text-black mb-4">Conceito de Movimento e Repouso</h2>
                <p class="text-black">
                    Movimento e repouso são conceitos relativos. Um corpo está em movimento quando muda sua posição em relação a um ponto de referência ao longo do tempo.
                    Se ele mantém sua posição constante em relação ao ponto de referência, dizemos que está em repouso. Por exemplo, uma pessoa sentada em um trem
                    em movimento pode estar em repouso em relação ao trem, mas em movimento em relação ao solo. Esses conceitos são fundamentais para a Cinemática,
                    pois ajudam a definir quando um objeto está em movimento ou parado, dependendo do referencial adotado.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/movimento.png')}}" alt="">

                <h2 id="posicao" class="text-3xl font-Montserrat font-bold text-black mb-4">Posição e Deslocamento</h2>
                <p class="text-black">
                    A posição de um corpo é determinada em relação a um ponto de referência e indica onde o objeto está em um dado momento.
                    O deslocamento, por sua vez, refere-se à mudança de posição de um corpo ao longo do tempo. É importante distinguir deslocamento
                    de distância percorrida, pois o deslocamento considera apenas a variação entre a posição inicial e a final, enquanto a distância percorrida
                    é o caminho total percorrido pelo objeto. Em uma corrida, por exemplo, o deslocamento do atleta que retorna ao ponto inicial é zero,
                    mas a distância total percorrida inclui todo o trajeto.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/posicao-deslocamento.webp')}}" alt="">

                <h2 id="velocidade" class="text-3xl font-Montserrat font-bold text-black mb-4">Velocidade e Movimento Uniforme</h2>
                <p class="text-black">
                    A velocidade média de um corpo é a razão entre o deslocamento e o intervalo de tempo em que ele ocorre. No movimento uniforme, a velocidade
                    é constante, ou seja, o objeto se desloca a uma taxa fixa ao longo do tempo. Esse tipo de movimento é idealizado, pois na prática, é raro um corpo
                    manter exatamente a mesma velocidade por longos períodos. Entretanto, o estudo do movimento uniforme é útil para simplificar problemas e entender
                    conceitos fundamentais da Cinemática. A velocidade escalar média também pode ser analisada, que considera a distância total percorrida em vez do deslocamento.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/velocidade.webp')}}" alt="">

                <h2 id="aceleracao" class="text-3xl font-Montserrat font-bold text-black mb-4">Aceleração e Movimento Uniformemente Variado</h2>
                <p class="text-black">
                    A aceleração é a taxa de variação da velocidade ao longo do tempo. No movimento uniformemente variado (MUV), a aceleração é constante,
                    o que significa que a velocidade do corpo aumenta ou diminui a uma taxa fixa. Esse tipo de movimento é observado, por exemplo, em um carro que
                    acelera ou desacelera constantemente. A equação do MUV permite calcular a posição e a velocidade de um corpo em qualquer instante, considerando
                    uma aceleração constante. Esse estudo é essencial para entender como a velocidade de um objeto pode mudar ao longo de seu percurso,
                    proporcionando uma base para análises mais complexas da dinâmica.
                </p>


                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Em relação a um ponto de referência fixo, o que indica que um objeto está em movimento?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Mudança de posição ao longo do tempo.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Manter a mesma posição ao longo do tempo.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Aceleração constante.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Velocidade nula.</span></li>

                        <li class="mb-2 mt-4">
                            <p>2) Qual a diferença entre distância percorrida e deslocamento?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Distância percorrida inclui o tempo total do percurso.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Distância percorrida é o caminho total, enquanto o deslocamento considera apenas a posição inicial e final.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Deslocamento é sempre maior que a distância percorrida.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Não há diferença entre distância percorrida e deslocamento.</span></li>
                    </ul>
                    <div class="mt-6">
                        <ul class="text-black">
                            <li class="mb-2">
                                <p>3) Em relação a um ponto de referência fixo, o que indica que um objeto está em movimento?</p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-1" value="1" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Mudança de posição ao longo do tempo.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Manter a mesma posição ao longo do tempo.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Aceleração constante.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Velocidade nula.</span></li>
                            <li class="mb-2 mt-4">
                                <p>4) Qual a diferença entre distância percorrida e deslocamento?</p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Distância percorrida inclui o tempo total do percurso.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-2" value="1" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Distância percorrida é o caminho total, enquanto o deslocamento considera apenas a posição inicial e final.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Deslocamento é sempre maior que a distância percorrida.</span></li>
                            <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Não há diferença entre distância percorrida e deslocamento.</span></li>
                        </ul>
                    </div>

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