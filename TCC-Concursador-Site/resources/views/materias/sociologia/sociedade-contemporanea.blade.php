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
            <a href="{{ route('materias', ['section' => 'sociologia']) }}#sociologia" class="mb-4 text-gray-500 underline inline-block">Sociologia</a>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Sociedade Contemporânea</h1>
                <p class="text-black">
                    A sociedade contemporânea refere-se ao contexto social, político, econômico e cultural do mundo atual, que está em constante transformação devido a diversos fatores como avanços tecnológicos, mudanças nas estruturas econômicas, globalização e o desenvolvimento de novas formas de comunicação e interação social. Essa sociedade, que podemos também chamar de "sociedade moderna", se caracteriza por uma série de fenômenos que refletem as complexidades e os desafios do século XXI.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/sociedade.webp')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#transformacoes" class="text-kblue hover:text-black hover:!text-black">1- Transformações Sociais e Econômicas</a></li>
                        <li><a href="#desigualdade" class="text-kblue hover:text-black hover:!text-black">2- Desigualdade e Direitos Humanos</a></li>
                        <li><a href="#desafios" class="text-kblue hover:text-black hover:!text-black">3- Desafios Ambientais e Sustentabilidade</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4- Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="transformacoes" class="text-3xl font-Montserrat font-bold text-black mb-4">Transformações Sociais e Econômicas</h2>
                <p class="text-justify mb-4 text-black">A sociedade contemporânea é marcada por grandes mudanças econômicas, sociais e culturais, impulsionadas principalmente pela globalização, avanços tecnológicos e novas dinâmicas no mundo do trabalho.

                    <br><br>Globalização e Interconexão: A globalização promoveu uma maior interconexão entre os países, facilitando o fluxo de pessoas, bens, serviços, informações e culturas. Porém, também trouxe desafios, como desigualdade econômica, desvalorização de culturas locais e aumento da concentração de poder econômico em grandes corporações.

                    <br><br>Tecnologia e Digitalização: Avanços em áreas como inteligência artificial, biotecnologia e comunicação digital transformaram a forma como as pessoas interagem, trabalham e consomem. A internet e as redes sociais alteraram profundamente a dinâmica de comunicação e as relações sociais.

                    <br><br>Mudanças no Mundo do Trabalho: A automação e a digitalização estão redefinindo o mercado de trabalho, substituindo algumas profissões e criando novas oportunidades, mas também gerando desafios, como a precarização e a desigualdade no acesso a empregos de qualidade.
                </p>

                <h2 id="desigualdade" class="text-3xl font-Montserrat font-bold text-black mb-4">Desigualdade e Direitos Humanos</h2>
                <p class="text-justify mb-4 text-black">
                    Apesar do progresso em várias áreas, a sociedade contemporânea ainda enfrenta desafios significativos relacionados à desigualdade social, exclusão e defesa dos direitos humanos.

                    <br><br>Desigualdade Social: A crescente disparidade entre ricos e pobres, a exclusão social de grupos marginalizados (mulheres, negros, indígenas, LGBTQ+, etc.) e o acesso desigual a serviços essenciais como saúde, educação e segurança são problemas persistentes. Movimentos sociais ao redor do mundo têm lutado por igualdade e justiça social.

                    <br><br>Cidadania e Direitos Humanos: O conceito de cidadania está intrinsecamente ligado à participação política, direitos e deveres do indivíduo no Estado. Já os direitos humanos, definidos pela Declaração Universal dos Direitos Humanos, são fundamentais para garantir a dignidade de todos, independentemente de sua nacionalidade, etnia ou status social. No entanto, a implementação plena desses direitos ainda é um desafio em muitas partes do mundo.

                    <br><br>Movimentos Sociais e Ativismo: Na sociedade contemporânea, movimentos como Black Lives Matter, o movimento feminista, o movimento LGBTQ+ e os direitos dos refugiados têm sido fundamentais para pressionar governos e instituições a promoverem políticas mais inclusivas e igualitárias.
                </p>
                <div class="flex justify-center">
                    <img class="mt-6 w-96" src="{{asset('imagens/sociedade2.jpg')}}" alt="">
                </div>
                <br><br>
                <h2 id="desafios" class="text-3xl font-Montserrat font-bold text-black mb-4">Desafios Ambientais e Sustentabilidade</h2>
                <p class="text-justify mb-4 text-black">A crise ambiental é uma das questões mais urgentes da sociedade contemporânea, refletindo o impacto das atividades humanas no planeta e a necessidade de repensar modelos de desenvolvimento.

                    <br><br>Mudanças Climáticas e Degradação Ambiental: A poluição, o aquecimento global, a destruição dos ecossistemas e a perda de biodiversidade são problemas graves que afetam a vida no planeta. O desmatamento, especialmente na Amazônia, e o uso desenfreado de combustíveis fósseis são algumas das principais causas dessa crise ambiental.

                    <br><br>Sustentabilidade e Ações Globais: Movimentos sociais, governos e organizações internacionais estão se unindo para buscar alternativas mais sustentáveis. O acordo de Paris sobre mudanças climáticas e as metas de desenvolvimento sustentável da ONU são exemplos de iniciativas que buscam mitigar os impactos ambientais e promover um futuro mais verde.

                    <br><br>Mudanças no Consumo e no Estilo de Vida: O consumo desenfreado e a produção em massa têm um impacto direto no meio ambiente. A sociedade contemporânea precisa repensar seus padrões de consumo e adotar um estilo de vida mais responsável e sustentável, com foco na economia circular e no uso de fontes de energia renováveis.


                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Quais são os principais fatores que impulsionam as mudanças na sociedade contemporânea?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Avanços tecnológicos, globalização e mudanças nas estruturas econômicas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Apenas a política e a economia.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) A eliminação de desigualdades sociais e o aumento do consumo.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Exclusivamente a crise ambiental e as mudanças culturais.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) O que caracteriza a globalização na sociedade contemporânea?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) A centralização do poder econômico nas mãos de pequenos grupos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) O aumento da interconexão entre países, facilitando o fluxo de pessoas, bens, serviços, informações e culturas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) A exclusão das culturas locais e a diminuição das trocas comerciais.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) O isolamento dos países em relação às relações internacionais.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>3) Qual é o impacto da digitalização e da automação no mercado de trabalho atual?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) A diminuição das oportunidades de emprego para todos os grupos sociais.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) O fim da desigualdade no acesso a empregos de qualidade.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) A criação de novas oportunidades, mas também desafios como a precarização do trabalho.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) A transformação do trabalho em um processo exclusivamente manual e artesanal.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) Quais são os principais desafios ambientais enfrentados pela sociedade contemporânea?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) O crescimento descontrolado da população e a falta de recursos naturais.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) A escassez de alimentos e o aumento das migrações internacionais.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) O aumento do consumo de combustíveis fósseis e a diminuição da biodiversidade.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) Mudanças climáticas, degradação ambiental, desmatamento e poluição.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) O que são os movimentos sociais na sociedade contemporânea e qual é sua importância?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) São organizações que buscam promover a exclusão de grupos marginalizados.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) São ações isoladas sem impacto significativo no campo político e social.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) São movimentos como Black Lives Matter e o movimento feminista que lutam por igualdade e justiça social.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) São movimentos que se concentram exclusivamente em questões econômicas e financeiras.</span></li>


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