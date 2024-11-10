<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p> <!-- Adicionei uma margem horizontal -->
            <a href="{{ route('materias', ['section' => 'geografia']) }}#geografia" class="mb-4 text-gray-500 underline inline-block">Geografia</a>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">População</h1>
                <p class="text-black">População é o termo usado para descrever o conjunto de indivíduos que habitam uma determinada área geográfica, como uma cidade, um país ou o planeta como um todo.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/populacao.jpg')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#o-que-e-populacao" class="text-kblue hover:text-black hover:!text-black">1- O que é população?</a></li>
                        <li><a href="#quais-os-tipos-de-populacao" class="text-kblue hover:text-black hover:!text-black">2- Quais os tipos de população?</a></li>
                        <li><a href="#populacao-mundial" class="text-kblue hover:text-black hover:!text-black">3- População mundial</a></li>
                        <li><a href="#populacao-do-brasil" class="text-kblue hover:text-black hover:!text-black">4- População do Brasil</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">5- Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="o-que-e-populacao" class="text-3xl font-Montserrat font-bold text-black mb-4">O que é população</h2>
                <p class="text-justify mb-4 text-black">População é um conceito que se refere ao conjunto de indivíduos que habitam uma determinada área geográfica, seja ela uma cidade, um país, um continente ou o planeta como um todo. Em termos mais amplos, a palavra "população" pode ser aplicada a qualquer grupo de seres vivos que compartilham uma área específica, como populações de plantas ou populações de animais. No entanto, o termo é comumente utilizado para se referir à população humana, que é o foco principal de diversas disciplinas, como geografia, demografia e sociologia.

                    No contexto da população humana, a demografia é a área do conhecimento que estuda suas características, comportamentos e dinâmicas. Ela envolve a análise da quantidade, distribuição, composição e evolução da população ao longo do tempo.
                </p>

                <h2 id="quais-os" class="text-3xl font-Montserrat font-bold text-black mb-4">Quais os tipos de população?</h2>
                <p class="text-justify mb-4 text-black">
                    No estudo da demografia, as populações podem ser classificadas de diversas formas, mas as duas categorias principais são população absoluta e população relativa. Essas duas classificações ajudam a entender tanto o tamanho total da população quanto a distribuição dessa população em uma determinada área geográfica.

                    <br><br> <span class="font-bold">• População Absoluta:</span> A população absoluta refere-se ao número total de habitantes em uma área geográfica específica, como um país, cidade, bairro ou região. Esse valor é simplesmente a contagem do total de pessoas presentes nesse local em um dado momento.

                    Exemplo: O Brasil, com uma população absoluta de aproximadamente 215 milhões de habitantes (em 2024), é considerado um país com uma população numerosa.

                    A população absoluta é um indicador importante para compreender a dimensão de um território em termos de número de habitantes. No entanto, por si só, ela não revela como essa população está distribuída ou como ocupa o espaço físico de uma região.

                    <br><br> <span class="font-bold">• População Relativa:</span>
                    A população relativa, ou densidade demográfica, é uma medida que analisa como a população está distribuída sobre o território. Ao contrário da população absoluta, que apenas conta o número total de habitantes de uma área, a população relativa leva em consideração tanto a quantidade de pessoas quanto a extensão da área onde essas pessoas estão distribuídas.

                    Para calcular a densidade demográfica, utilizamos uma relação simples entre a população absoluta (o número total de habitantes) e a área territorial (o tamanho do espaço que essa população ocupa). Esse cálculo resulta em um valor que indica o número de habitantes por unidade de área, geralmente expresso em habitantes por quilômetro quadrado (hab/km²).

                    Esse valor é útil para entender como a população está distribuída geograficamente. Quando a densidade demográfica é alta, significa que há muitas pessoas vivendo em uma área pequena, tornando a região densamente povoada. Por outro lado, uma densidade demográfica baixa indica que a população está distribuída por um território mais amplo, o que torna a área menos povoada.

                    <br><br> <span class="font-bold">• População Urbana e Rural:</span> Além da classificação em população absoluta e relativa, as populações podem ser também diferenciadas entre urbana e rural, com base na localização das pessoas.

                    <br><br>População urbana: Refere-se aos indivíduos que vivem em áreas urbanas, como cidades e grandes centros urbanos. Essa população costuma ter maior acesso a serviços como saúde, educação, transporte, e oportunidades de trabalho, além de estar mais concentrada em áreas com infraestrutura mais desenvolvida.

                    <br><br>População rural: São as pessoas que vivem em áreas rurais, fora dos centros urbanos, como campos, vilarejos e pequenas cidades. Geralmente, a população rural está mais voltada à agricultura e atividades relacionadas ao campo.

                    <br><br>Exemplo no Brasil: O Brasil passou por um processo de urbanização acelerada ao longo das últimas décadas. Hoje, mais da metade da população brasileira vive em áreas urbanas, enquanto uma parte significativa ainda reside em zonas rurais, especialmente em estados como Maranhão, Piauí e Bahia.

                    <br><br> <span class="font-bold">• População Ativa e Inativa:</span> A população também pode ser dividida com base em sua atividade econômica:

                    <br><br>População ativa: São os indivíduos em idade de trabalhar (geralmente entre 15 e 64 anos) e que estão envolvidos no mercado de trabalho, seja de forma formal ou informal.

                    <br><br>População inativa: Refere-se a pessoas que não participam diretamente da força de trabalho, como crianças, idosos, estudantes, aposentados e outros que não estão empregados.

                    <br><br>Essa distinção é importante, pois ela impacta a economia de um país e sua capacidade produtiva. Por exemplo, um país com uma população ativa maior pode ter um crescimento econômico mais robusto, enquanto uma população com um grande número de inativos pode enfrentar desafios relacionados ao sustento da aposentadoria e ao encargos sociais.

                    <br><br> <span class="font-bold">• População Jovem, Adulta e Idosa: </span> A composição etária da população também é uma classificação relevante. A estrutura etária de uma população tem implicações profundas sobre suas necessidades e desafios sociais e econômicos:

                    <br><br>população jovem: Refere-se a indivíduos com idades entre 0 e 14 anos. Países com grandes populações jovens precisam investir mais em educação e saúde infantil.

                    <br><br>População adulta: São as pessoas com idades entre 15 e 64 anos, e representam a força de trabalho ativa de um país.

                    <br><br>População idosa: Pessoas com 65 anos ou mais. O envelhecimento da população é um fenômeno crescente em muitos países, especialmente nos desenvolvidos, o que cria desafios para o sistema de previdência social, saúde e sustentabilidade das aposentadorias.
                </p>
                <div class="flex justify-center">
                    <img class="mt-6 w-96" src="{{asset('imagens/populacao2.jpg')}}" alt="">
                </div>
                <h2 id="populacao-mundial" class="text-3xl font-Montserrat font-bold text-black mb-4">População mundial</h2>
                <p class="text-justify mb-4 text-black"> A população mundial é atualmente de cerca de 8 bilhões de pessoas, com uma taxa de crescimento de 1,1% ao ano, que tem diminuído gradualmente. A ONU projeta que a população mundial chegará a 8,5 bilhões até 2030 e a 9 bilhões até 2037.

                    Historicamente, o crescimento populacional foi lento até o início do século XIX, mas a Revolução Industrial, os avanços na medicina e o saneamento básico aceleraram significativamente o aumento da população. A população mundial passou de 1 bilhão no início do século XIX para 6 bilhões no final do século XX.

                    Atualmente, os países desenvolvidos enfrentam uma estabilidade ou até redução da população, enquanto os países em desenvolvimento, especialmente na África e Ásia, ainda têm altos índices de crescimento. A Ásia é o continente mais populoso, com destaque para China e Índia, que juntos concentram cerca de 35% da população mundial.

                    O futuro do crescimento populacional está ligado a fatores como a urbanização, os desafios ambientais e as políticas de saúde e educação. Embora o crescimento continue, ele será mais lento e com maior ênfase em questões de sustentabilidade e qualidade de vida.
                </p>

                <h2 id="populacao-do-brasil" class="text-3xl font-Montserrat font-bold text-black mb-4">População do Brasil</h2>
                <p class="text-justify mb-4 text-black">
                    A população do Brasil é atualmente de 215,4 milhões de habitantes, de acordo com as projeções mais recentes do Instituto Brasileiro de Geografia e Estatística (IBGE). O IBGE é responsável por realizar o Censo Demográfico a cada dez anos, além de atualizar periodicamente os dados populacionais por meio de levantamentos como a Pesquisa Nacional por Amostra de Domicílios (Pnad).

                    O crescimento populacional do Brasil ocorre a uma taxa de 0,74% ao ano, uma desaceleração em relação ao passado. No auge do crescimento populacional, na década de 1970, o país experimentou uma taxa de crescimento anual de 3,71%. Esse declínio nas taxas de crescimento está relacionado a uma série de mudanças estruturais internas, como a industrialização, o aumento da participação feminina no mercado de trabalho e melhorias significativas nas áreas de saúde e medicina.

                    Além disso, a distribuição geográfica da população no Brasil é bastante desigual. Não há uma concentração homogênea de habitantes por todo o território. Regiões como o Sudeste, especialmente o estado de São Paulo, abrigam a maior parte da população, enquanto outras regiões, como o Norte, possuem uma densidade populacional muito mais baixa. Essa desigualdade está relacionada a fatores históricos, econômicos e de infraestrutura, com grandes aglomerações urbanas nas regiões mais industrializadas e menos desenvolvimento em áreas mais afastadas dos grandes centros urbanos.

                    Essas características demográficas influenciam diretamente políticas públicas e o planejamento de recursos no Brasil, além de impactar questões relacionadas à urbanização, saúde pública e distribuição de serviços essenciais.

                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) O que é a "população" no contexto demográfico?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) É o número total de plantas em uma floresta.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Refere-se ao conjunto de seres vivos de diferentes espécies em um ecossistema.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) É o conjunto de indivíduos que habitam uma determinada área geográfica.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Refere-se apenas à quantidade de animais em uma região específica.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Qual é a diferença principal entre população absoluta e população relativa?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) A população absoluta diz respeito ao número total de habitantes, enquanto a população relativa analisa a distribuição desses habitantes por uma área geográfica.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) A população relativa considera apenas o número de habitantes, enquanto a população absoluta foca na sua distribuição.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) A população absoluta está relacionada ao número de pessoas nas cidades, enquanto a população relativa se refere apenas às áreas rurais.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Não há diferença; ambos termos significam a mesma coisa.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>3) Qual é a principal característica da população urbana no Brasil?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) A população urbana é caracterizada por viver em áreas rurais e estar mais focada em atividades agrícolas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) A população urbana vive em grandes centros urbanos, com maior acesso a serviços como saúde, educação e transporte.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) A população urbana é predominantemente composta por crianças e idosos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) A população urbana tem uma maior taxa de fecundidade, comparada à população rural.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) Qual é a taxa de crescimento atual da população mundial?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) 1,5% ao ano.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) 1,1% ao ano.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) 2,3% ao ano.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) 3,7% ao ano.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) O que influencia diretamente as características da distribuição populacional no Brasil?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) A distribuição homogênea de recursos naturais.<span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) A urbanização e os processos históricos e econômicos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) O aumento da fertilidade nos estados do Norte.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) A estagnação do crescimento populacional nas regiões Sudeste e Sul.</span></li>
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