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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Geografia econômica</h1>
                <p class="text-black">A Geografia Econômica é uma subárea da Geografia que estuda as relações entre os espaços geográficos e as atividades econômicas realizadas pelas sociedades.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/geografia-fisica.webp')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#geografia-economica" class="text-kblue hover:text-black hover:!text-black">1- O que é geografia econômica</a></li>
                        <li><a href="#divisoes-geografia-economica" class="text-kblue hover:text-black hover:!text-black">2- Divisões da geografia econômica</a></li>
                        <li><a href="#geografia-economica-no-brasil" class="text-kblue hover:text-black hover:!text-black">3- Geografia econômica do Brasil</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4- Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="geografia-economica" class="text-3xl font-Montserrat font-bold text-black mb-4">O que é geografia econômica?</h2>
                <p class="text-justify mb-4 text-black">A Geografia Econômica é um ramo da Geografia que estuda as atividades econômicas e como elas se distribuem e interagem com o espaço geográfico. Ela analisa como os processos econômicos afetam o território e como o território influencia as decisões econômicas. O foco da Geografia Econômica está na localização, distribuição e inter-relação das atividades econômicas, como a indústria, a agricultura, o comércio e os serviços.

                    <br><br>Os principais temas abordados por essa área incluem:

                    <br><br>Industrialização e Urbanização: Estuda como o crescimento das indústrias e das cidades alteram o espaço geográfico e a organização territorial.
                    <br><br>Dinâmica de Redes e Fluxos: Analisa as interações globais e locais por meio das redes de produção e comércio, e como os fluxos de bens, pessoas e capitais conectam diferentes regiões.
                    <br><br>Modernização do Campo: Estuda as transformações na agricultura, como a mecanização e a intensificação da produção.
                    <br><br>Globalização e Cadeias de Produção: Examina o impacto da globalização nas economias locais e globais, com destaque para as cadeias globais de produção, onde diferentes etapas da produção acontecem em locais distintos ao redor do mundo.
                    <br><br>Além disso, a Geografia Econômica estuda como esses processos afetam as desigualdades regionais e a distribuição da riqueza, influenciando tanto o desenvolvimento econômico quanto as disparidades entre países e regiões.
                </p>

                <h2 id="divisoes-geografia-economica" class="text-3xl font-Montserrat font-bold text-black mb-4">Divisões da geografia econômica</h2>
                <p class="text-justify mb-4 text-black">
                    A Geografia Econômica se divide em quatro áreas principais:

                    <br><br>Geografia das Indústrias: Estuda o desenvolvimento e a distribuição das indústrias, analisando como elas afetam o espaço geográfico, incluindo a urbanização e os impactos ambientais.

                    <br><br>Geografia Agrária: Foca nas atividades agropecuárias e na dinâmica do meio rural, abordando a produção agrícola, a pecuária e as transformações no campo, como a reforma agrária e a tecnologia no campo.

                    <br><br>Geografia do Comércio e do Consumo: Analisa a circulação de mercadorias e os padrões de consumo, observando os impactos da globalização e como o comércio se organiza entre regiões produtoras e consumidores.

                    <br><br>Geografia dos Transportes: Estuda as redes de transporte (rodovias, ferrovias, portos, aeroportos) e como elas influenciam o fluxo de mercadorias, pessoas, informações e capitais, impactando a economia global e local.

                    <br><br>Essas áreas ajudam a compreender a distribuição das atividades econômicas e suas interações com o espaço geográfico, influenciando o desenvolvimento de regiões e a organização da produção e do consumo.
                </p>
                <div class="flex justify-center">
                    <img class="mt-6 w-96" src="{{asset('imagens/geografiafisica2.jpg')}}" alt="">
                </div>
                <h2 id="geografia-economica-no-brasil" class="text-3xl font-Montserrat font-bold text-black mb-4">Geografia econômica do Brasil</h2>
                <p class="text-justify mb-4 text-black"> A Geografia Econômica do Brasil estuda a transformação do território e das atividades produtivas ao longo da história. Inicialmente, a economia brasileira foi baseada em ciclos produtivos no meio rural, como o pau-brasil, o ouro e a borracha. Com a economia cafeeira no século XIX e os incentivos governamentais nas décadas de 1930 e 1940, o país começou a industrializar-se e a urbanizar-se, mudando o centro da economia para as cidades e setores industriais.

                    Nas décadas de 1970 e 1980, o Brasil passou por uma reestruturação produtiva, com expansão da fronteira agrícola e maior inserção nas cadeias globais de produção. O país se consolidou como um grande produtor e exportador de commodities agrícolas, como soja e carne, e se tornou parte do bloco dos BRICS.

                    Apesar do crescimento econômico, o Brasil enfrenta desigualdades sociais, concentração de terras e uma infraestrutura deficiente. Além disso, há um processo de desindustrialização, com o setor de serviços ganhando mais importância no PIB do que a indústria.

                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) O que a Geografia Física estuda?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Apenas os fenômenos climáticos que ocorrem na atmosfera.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Os componentes naturais da Terra, como litosfera, atmosfera, hidrosfera e biosfera, e suas interações.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Somente o relevo terrestre e a formação das montanhas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Exclusivamente os biomas e a vegetação de cada continente.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Qual é o principal objeto de estudo da Climatologia, um dos ramos da Geografia Física?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) As geleiras e seu impacto no relevo terrestre.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) O ciclo da água e as bacias hidrográficas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) O clima e os fenômenos atmosféricos, como ventos e precipitações. </span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) A formação e composição dos solos.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>3) Qual das alternativas abaixo descreve corretamente a relação entre os biomas e a Geografia Física do Brasil?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) O Brasil possui apenas um bioma, a Amazônia, que é responsável por toda sua biodiversidade.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) O estudo da biosfera no Brasil envolve os biomas e suas interações com o relevo, clima, solo e água.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) A consolidação dos Estados Unidos como a única superpotência e a ascensão da China e da Índia como novas potências emergentes.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) Os biomas no Brasil são independentes dos fatores climáticos e geológicos.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) Qual é a principal característica geológica do relevo do Brasil?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) O relevo é muito recente e formado por grandes cadeias montanhosas ativas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) O Brasil apresenta relevo antigo e variado, com planaltos, planícies e depressões.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) O relevo brasileiro é plano e uniforme, sem grandes variações.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) A maior parte do relevo brasileiro é composta por montanhas muito elevadas.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) O que estuda a Pedologia, um dos ramos da Geografia Física?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) O estudo das geleiras e seu impacto nas formações geológicas.<span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) A água subterrânea, como os aquíferos e a distribuição dos rios.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) A composição, formação e classificação dos solos, além dos problemas ambientais, como a erosão.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) O estudo da biodiversidade e a interação dos seres vivos com o ambiente físico.</span></li>
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