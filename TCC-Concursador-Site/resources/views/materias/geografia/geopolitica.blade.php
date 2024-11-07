<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

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
            <a href="{{ route('materias', ['section' => 'geografia']) }}#geografia" class="mb-4 text-gray-500 underline inline-block">Geografia</a>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Geopolítica</h1>
                <p class="text-black">População é o termo usado para descrever o conjunto de indivíduos que habitam uma determinada área geográfica, como uma cidade, um país ou o planeta como um todo.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/populacao.jpg')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#o-que-e-geopolitica" class="text-kblue hover:text-black hover:!text-black">1- O que é geopolítica?</a></li>
                        <li><a href="#geopolitica-no-brasil" class="text-kblue hover:text-black hover:!text-black">2- Geopolítica no Brasil</a></li>
                        <li><a href="#geopolitica-mundial" class="text-kblue hover:text-black hover:!text-black">3- Geopolítica mundial</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4- Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="o-que-e-geopolitica" class="text-3xl font-Montserrat font-bold text-black mb-4">O que é geopolítica</h2>
                <p class="text-justify mb-4 text-black">A geopolítica é o estudo das relações de poder entre países e territórios, focando nas dinâmicas espaciais, políticas e econômicas que moldam o comportamento dos Estados e suas interações no cenário global. Ela busca entender como fatores geográficos, como a localização, os recursos naturais e o território, influenciam as decisões políticas, econômicas e militares de uma nação, além das estratégias adotadas por Estados para ampliar sua influência ou proteger seus interesses.

                    A geopolítica é frequentemente associada à ação do Estado, o qual utiliza o território e os recursos disponíveis para desenvolver estratégias políticas que visem atingir objetivos, como segurança, expansão de poder ou controle sobre recursos naturais. Essas ações podem ser realizadas por meio de política externa, alianças militares, blocos econômicos ou organismos internacionais.

                    A prática geopolítica não se restringe apenas ao nível nacional. Ela também envolve uma série de entidades supranacionais, como a Organização das Nações Unidas (ONU), a União Europeia (UE), e outros blocos econômicos e políticos, que buscam influenciar ou mediar conflitos entre Estados, além de regular a economia global e promover a cooperação entre as nações.

                    Adicionalmente, a geopolítica está relacionada à dinâmica de poder global e à luta por controle sobre regiões estratégicas, rotas comerciais e recursos naturais essenciais. Por exemplo, disputas sobre acesso a águas territoriais, energia e tecnologia têm se intensificado com o tempo, refletindo a crescente interdependência e as rivalidades globais.

                    Em tempos modernos, a geopolítica também se expande para questões não militares, como a competição tecnológica, cibersegurança e a globalização econômica. Países com poderio tecnológico crescente, como China e Estados Unidos, desempenham papéis centrais nesse novo campo da geopolítica, onde as disputas são tanto econômicas quanto ideológicas.

                    Em resumo, a geopolítica é uma disciplina essencial para entender como os países posicionam-se e interagem no cenário global, levando em consideração não apenas o poder militar ou econômico, mas também as complexas relações diplomáticas e as influências dos fatores geográficos e ambientais sobre essas dinâmicas.
                </p>

                <h2 id="geopolitica-no-brasil" class="text-3xl font-Montserrat font-bold text-black mb-4">Geopolítica no Brasil</h2>
                <p class="text-justify mb-4 text-black">
                    A geopolítica no Brasil reflete o papel estratégico do país no cenário internacional, especialmente como uma nação em desenvolvimento com grande potencial para crescimento político e econômico. Desde o final do século XX, o Brasil tem consolidado sua posição como uma potência emergente, estabelecendo parcerias importantes com países do Sul Global e integrando-se a blocos econômicos e políticos de relevância global, como o BRICS (Brasil, Rússia, Índia, China e África do Sul) e o Mercosul (Mercado Comum do Sul). Esses vínculos, além de promoverem a cooperação econômica e política, reforçam a presença do Brasil em discussões de políticas globais, especialmente em temas como comércio, segurança e desenvolvimento sustentável.

                    <br><br>A geopolítica brasileira está profundamente relacionada à sua posição estratégica na região do Atlântico Sul. O Brasil é uma das principais potências da América Latina e tem buscado reforçar sua liderança regional, ao mesmo tempo em que trabalha para se afirmar como um ator de influência global. O país possui um vasto território e uma rica diversidade de recursos naturais, o que contribui para sua relevância em questões de segurança energética e ambiental. A preservação da Amazônia e os desafios ligados ao desmatamento também inserem o Brasil em debates sobre meio ambiente e mudanças climáticas, com implicações globais.

                    <br><br>Historicamente, a geopolítica no Brasil foi caracterizada por uma abordagem mais prática, com foco em estratégias de defesa nacional e proteção das fronteiras. Durante grande parte do século XX, a geopolítica brasileira esteve atrelada a questões militares e de segurança interna, especialmente durante o período da ditadura militar, quando o país se preocupava com a preservação do território e com a integração de sua vasta extensão geográfica, muitas vezes em regiões remotas e de difícil acesso.

                    <br><br>A partir da década de 1980, com a redemocratização e o fim da ditadura militar, o Brasil passou a ter um maior desenvolvimento do campo acadêmico de estudos geopolíticos. Nesse período, influenciado por pensadores franceses e alemães, o país começou a integrar mais profundamente as questões geopolíticas nas suas políticas externas e internas, com um olhar mais abrangente para o desenvolvimento econômico, industrialização, urbanização e os desafios regionais.

                    <br><br>A urbanização e a industrialização aceleradas nas décadas de 1950 e 1960 mudaram o perfil interno do Brasil e ajudaram a reposicionar o país na conjuntura política e econômica internacional. A ampliação das cidades e a modernização de setores como a agricultura e a indústria permitiram ao Brasil melhorar sua infraestrutura e ampliar sua influência sobre países da América Latina e outras regiões emergentes. No entanto, o Brasil também enfrenta desafios internos que afetam sua posição geopolítica, como a distribuição desigual de riquezas, a violência urbana e a necessidade de reformas estruturais.

                    <br><br>Além disso, o Brasil sempre procurou se posicionar como um defensor da multilateralidade e do diálogo diplomático em suas relações internacionais, buscando equilibrar sua aliança com as nações mais poderosas do mundo, como os Estados Unidos e China, sem abrir mão de sua independência política e econômica. No contexto geopolítico, a busca por maior autonomia estratégica é uma constante, com o Brasil tentando garantir que sua voz seja ouvida em foros internacionais como as Nações Unidas (ONU), o G20, e a Organização Mundial do Comércio (OMC).

                    <br><br>Em resumo, a geopolítica brasileira é uma combinação de fatores internos e externos, incluindo a busca por crescimento econômico, segurança territorial, parcerias estratégicas e a promoção de um papel ativo em debates globais. A evolução da geopolítica no Brasil reflete tanto a necessidade de desafios internos quanto a influência global crescente, e como o país navega suas relações diplomáticas em um mundo multipolar.
                </p>
                <div class="flex justify-center">
                    <img class="mt-6 w-96" src="{{asset('imagens/geopolitica.jpg')}}" alt="">
                </div>
                <h2 id="geopolitica-mundial" class="text-3xl font-Montserrat font-bold text-black mb-4">Geopolítica mundial</h2>
                <p class="text-justify mb-4 text-black"> A geopolítica no Brasil está intrinsecamente ligada ao contexto global e às mudanças nas dinâmicas internacionais, especialmente a partir da Segunda Guerra Mundial. No período pós-guerra, o mundo foi dividido em duas grandes potências, os Estados Unidos e a União Soviética, que representavam dois blocos ideológicos opostos: o capitalista e o socialista. Esse cenário foi marcado pela Guerra Fria, um período de intensa rivalidade geopolítica que, apesar de não resultar em confrontos militares diretos, gerou uma série de disputas indiretas, como as guerras por procuração e a divisão do mundo em esferas de influência.

                    <br><br>Nesse período, o Brasil, como parte do Sul Global, teve sua geopolítica afetada principalmente pela sua posição estratégica em relação aos Estados Unidos e à União Soviética. O país alinhou-se com o bloco ocidental, particularmente com os Estados Unidos, e participou ativamente em algumas questões internacionais, como a Guerra da Coreia, as disputas territoriais na América Latina e a Crise dos Mísseis de Cuba. A geopolítica brasileira também foi fortemente marcada pelo contexto de dictadura militar que vigorou de 1964 a 1985, durante o qual o país se alinhou aos interesses dos EUA na região, especialmente em um momento de intensificação da guerra fria e do combate ao comunismo.

                    <br><br>A queda do Muro de Berlim e o fim da Guerra Fria, no final da década de 1980, proporcionaram um novo cenário para a geopolítica mundial e, consequentemente, para a geopolítica brasileira. Com a desintegração da União Soviética e o fortalecimento dos Estados Unidos como a única superpotência global, o Brasil teve que se adaptar a uma nova ordem mundial, com ênfase na globalização, no liberalismo econômico e na crescente competição entre potências emergentes, como China e Índia, e potências estabelecidas como os Estados Unidos e a União Europeia.

                    <br><br>O Brasil, enquanto país em desenvolvimento, tem buscado se afirmar no cenário global como uma potência regional e uma potência emergente. A sua geopolítica se articula principalmente por meio de alianças estratégicas com outros países do Sul Global e com membros de blocos como o BRICS (Brasil, Rússia, Índia, China e África do Sul) e o Mercosul (Mercado Comum do Sul). Essas alianças têm sido fundamentais para garantir ao Brasil uma maior projeção internacional, buscando um papel de liderança no Atlântico Sul e na promoção de um desenvolvimento sustentável.

                    <br><br>Além disso, o Brasil tem se posicionado como um defensor da multilateralidade e da integração regional. As questões ambientais, como a preservação da Amazônia, têm sido uma parte crucial da sua geopolítica, uma vez que a região amazônica é de interesse global, dada sua importância para o equilíbrio climático mundial. No entanto, essa posição também gerou tensões, especialmente nas relações com países desenvolvidos, que questionam as políticas brasileiras em relação ao desmatamento e ao controle das mudanças climáticas.

                    <br><br>No cenário atual, o Brasil tem procurado se afirmar tanto no contexto regional quanto global. No Mercosul, busca fortalecer sua posição como líder da América do Sul, enquanto no cenário global, a geopolítica brasileira se orienta por um equilíbrio entre a busca por alianças estratégicas e a necessidade de autonomia frente às grandes potências, como os Estados Unidos e a China. A crescente relevância da China no comércio internacional também impacta a geopolítica brasileira, especialmente por meio do comércio de commodities e da cooperação em áreas como infraestrutura e energia.

                    <br><br>Em resumo, a geopolítica no Brasil reflete um país em transformação, que busca afirmar sua liderança em um cenário global cada vez mais multipolar e interconectado. O país, enquanto parte do Sul Global, tem se consolidado como um jogador importante na geopolítica regional, com seu foco em integração regional e cooperativismo internacional, sem abrir mão de sua soberania e das questões internas que moldam sua estratégia externa, como desafios econômicos, sociais e ambientais.

                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Qual é o foco principal da geopolítica?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) A proteção de fronteiras e o controle territorial de uma nação.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) O estudo das relações políticas internas de um país.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) A análise das dinâmicas espaciais, políticas e econômicas que influenciam os Estados no cenário global.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) O estudo das populações urbanas e rurais ao redor do mundo.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Qual fator contribui para a relevância do Brasil na geopolítica internacional?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) A sua total dependência de países europeus para o comércio.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) A falta de preocupações com questões ambientais globais.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) A sua posição geográfica estratégica no Atlântico Sul e suas vastas reservas de recursos naturais.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) A sua política externa voltada exclusivamente para a promoção de alianças com os Estados Unidos.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>3) Após a queda do Muro de Berlim e o fim da Guerra Fria, qual novo cenário geopolítico se desenhou?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) O fortalecimento da União Soviética como a única superpotência global.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) A formação de um bloco único de países sob a liderança da ONU.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) A consolidação dos Estados Unidos como a única superpotência e a ascensão da China e da Índia como novas potências emergentes.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) O isolamento da União Europeia no cenário mundial.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) O Brasil se posiciona como defensor de qual conceito no cenário internacional?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) Alinhamento irrestrito com os interesses dos Estados Unidos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Nacionalismo extremo e isolamento de organizações internacionais.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) Multilateralismo e diálogo diplomático, buscando equilibrar suas alianças com as grandes potências.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) Exclusão de países do Sul Global em suas políticas internacionais.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) Qual é um dos principais desafios geopolíticos que o Brasil enfrenta atualmente?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) A diminuição do comércio com países da América Latina.<span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) A distribuição desigual de riquezas internas, violência urbana e necessidade de reformas estruturais.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) O excesso de poder militar e influência sobre outras nações.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) A sua falta de recursos naturais e dependência de outros países para energia.</span></li>
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