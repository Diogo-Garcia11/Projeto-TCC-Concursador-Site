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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Tabela Periódica</h1>
                <p class="text-black">A tabela periódica é uma ferramenta essencial na química que organiza os elementos
                    de acordo com suas propriedades químicas e físicas. Ela foi desenvolvida para mostrar as relações
                    periódicas entre os elementos e facilitar o entendimento de suas características. Abaixo estão
                    alguns dos aspectos principais da tabela periódica:
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/tabelaperiodica.webp')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#primeiro" class="text-kblue hover:text-black hover:!text-black">1-
                                Estrutura e Organização</a></li>
                        <li><a href="#segundo" class="text-kblue hover:text-black hover:!text-black">2-
                                Classificação dos Elementos</a></li>
                        <li><a href="#terceiro" class="text-kblue hover:text-black hover:!text-black">3-
                                Propriedades Periódicas</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4-
                                Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="primeiro" class="text-3xl font-Montserrat font-bold text-black mb-4">Estrutura e Organização
                </h2>
                <p class="text-justify mb-4 text-black">Linhas e Colunas: A tabela periódica é dividida em linhas
                    horizontais chamadas períodos e colunas verticais chamadas grupos ou famílias. Os elementos em um
                    mesmo grupo possuem propriedades semelhantes e o mesmo número de elétrons na camada de valência, o
                    que influencia sua reatividade.
                    <br><br>Elementos: Cada elemento é representado por um símbolo químico (como H para hidrogênio, O
                    para
                    oxigênio) e tem uma posição única que permite identificar seu número atômico (quantidade de prótons)
                    e massa atômica aproximada.
                    <br><br>Metais, Não Metais e Semimetais: A tabela periódica é subdividida em três principais
                    categorias de
                    elementos. Os metais geralmente estão à esquerda e no centro, os não metais estão à direita, e os
                    semimetais formam uma linha divisória entre eles.
                </p>

                <h2 id="segundo" class="text-3xl font-Montserrat font-bold text-black mb-4">Classificação dos Elementos
                </h2>
                <p class="text-justify mb-4 text-black">
                    Metais Alcalinos (Grupo 1): São muito reativos, especialmente com a água, e incluem elementos como
                    sódio (Na) e potássio (K).
                    <br><br>Metais Alcalino-terrosos (Grupo 2): São menos reativos que os metais alcalinos e incluem o
                    cálcio
                    (Ca) e o magnésio (Mg).
                    <br><br>Metais de Transição (Grupos 3 a 12): Têm várias propriedades metálicas e incluem ferro (Fe),
                    cobre
                    (Cu), e ouro (Au).
                    <br><br>Halogênios (Grupo 17): São elementos reativos que formam sais ao reagir com metais,
                    incluindo flúor
                    (F) e cloro (Cl).
                    <br><br>Gases Nobres (Grupo 18): São gases inertes e estáveis, incluindo hélio (He) e argônio (Ar),
                    com uma
                    camada de valência completa que os torna pouco reativos.
                </p>
                <div class="flex justify-center">
                    <img class="mt-6 w-96" src="{{asset('imagens/tabelaperiodica2.jpg')}}" alt="">
                </div><br><br>
                <h2 id="terceiro" class="text-3xl font-Montserrat font-bold text-black mb-4">Propriedades Periódicas
                </h2>
                <p class="text-justify mb-4 text-black"> Raio Atômico: O tamanho do átomo geralmente diminui ao longo de
                    um período (da esquerda para a direita) e aumenta ao longo de um grupo (de cima para baixo).
                    <br><br>Eletronegatividade: A tendência de um átomo de atrair elétrons em uma ligação química. A
                    eletronegatividade aumenta ao longo de um período e diminui em um grupo.
                    <br><br>Energia de Ionização: É a energia necessária para remover um elétron de um átomo neutro. Em geral, a
                    energia de ionização aumenta ao longo de um período e diminui ao longo de um grupo.
                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Qual é a principal função da tabela periódica?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Organizar os elementos em ordem alfabética para facilitar a leitura</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Classificar os elementos de acordo com suas propriedades químicas e físicas</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Listar os elementos de acordo com suas propriedades biológicas</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Agrupar apenas os elementos gasosos e metálicos</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Os elementos da tabela periódica estão organizados em colunas chamadas:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Níveis de energia</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Subníveis</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Grupos ou famílias</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Períodos</span>
                        </li>
                        <br>

                        <li class="mb-2">
                            <p>3) Qual dos seguintes elementos pertence ao grupo dos metais alcalinos?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) Magnésio (Mg)</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) Sódio (Na)</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) Cálcio (Ca)</span>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) Ferro (Fe)</span>
                        </li>
                        <br>

                        <li class="mb-2">
                            <p>4) Sobre as propriedades periódicas, o que ocorre com o raio atômico ao longo de um período? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) Permanece o mesmo</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Aumenta de forma irregular
                        <li class="radio-container"><input type="radio" name="questao-4" value="1"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) Diminui da esquerda para a direita</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) Aumenta da esquerda para a direita</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) Os elementos do grupo 18 da tabela periódica são conhecidos por serem:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) Altamente reativos com a água</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) Metais de transição</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) Gases nobres, inertes e estáveis/span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) Elementos de alta eletronegatividade</span></li>


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