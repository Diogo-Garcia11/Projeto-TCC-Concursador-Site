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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Geografia física</h1>
                <p class="text-black">A Geografia Física é uma subárea da Geografia que estuda os elementos naturais da superfície terrestre e os processos que moldam o ambiente físico do planeta.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/geografia-fisica.webp')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#o-que-e-geografia-fisica" class="text-kblue hover:text-black hover:!text-black">1- O que a geografia física estuda?</a></li>
                        <li><a href="#areas-geografia-fisica" class="text-kblue hover:text-black hover:!text-black">2- Áreas da Geografia Física</a></li>
                        <li><a href="#geografia-fisica-no-brasil" class="text-kblue hover:text-black hover:!text-black">3- Geografia física do Brasil</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4- Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="geografia-fisica" class="text-3xl font-Montserrat font-bold text-black mb-4">O que a geografia física estuda?</h2>
                <p class="text-justify mb-4 text-black">A Geografia Física é a área da Geografia que estuda os componentes naturais da Terra e como eles interagem. Ela se concentra em quatro grandes temas:

                    <br><br>Litosfera: Refere-se à camada rochosa da Terra, incluindo a crosta e o manto superior. O estudo da litosfera envolve processos como tectônica de placas, formação do relevo, terremotos e vulcões.

                    <br><br>Atmosfera: Estuda a camada de gases que envolve o planeta, analisando fenômenos climáticos e meteorológicos, como ventos, nuvens, precipitações e a circulação atmosférica.

                    <br><br>Hidrosfera: Envolve todos os corpos de água da Terra, como rios, mares, oceanos e lagos, além do ciclo da água e as bacias hidrográficas.

                    <br><br>Biosfera: Refere-se à camada da Terra que contém os seres vivos e sua interação com o ambiente físico (solo, água, ar), incluindo ecossistemas, fauna e flora.

                    <br><br>A Geografia Física vê a Terra como um sistema dinâmico, onde esses componentes estão interligados e se influenciam mutuamente, formando um equilíbrio natural que pode ser alterado por fenômenos naturais ou atividades humanas.
                </p>

                <h2 id="areas-geografia-fisica" class="text-3xl font-Montserrat font-bold text-black mb-4">Áreas da Geografia Física</h2>
                <p class="text-justify mb-4 text-black">
                    A Geografia Física estuda os processos naturais da Terra, focando em aspectos como relevo, clima, água, solos e biomas. Ela se divide em vários ramos especializados:

                    <br><br>Climatologia: Estuda o clima e os fenômenos atmosféricos, como furacões e ciclones, e suas interações com a superfície terrestre.
                    <br><br>Geomorfologia: Analisa as formas do relevo terrestre, como montanhas e planícies, e os processos que as formam, como o intemperismo e a atividade tectônica.
                    <br><br>Hidrologia: Foca na água, tanto superficial (rios e oceanos) quanto subterrânea (aquíferos), e sua distribuição, como nas grandes bacias hidrográficas.
                    <br><br>Pedologia: Investiga os solos, sua formação, composição e os problemas ambientais, como a erosão.
                    <br><br>Glaciologia: Estuda as geleiras e seu impacto no relevo e no clima, além de investigar o derretimento das geleiras.
                    <br><br>Orografia: Descreve e analisa as montanhas, seus processos de formação e os agentes que modificam o relevo, como a erosão.
                    <br><br>Esses ramos ajudam a entender os fenômenos naturais e suas interações, fundamentais para a análise ambiental e a gestão dos recursos naturais.
                </p>
                <div class="flex justify-center">
                    <img class="mt-6 w-96" src="{{asset('imagens/geografiafisica2.jpg')}}" alt="">
                </div>
                <h2 id="geografia-fisica-no-brasil" class="text-3xl font-Montserrat font-bold text-black mb-4">Geografia física do Brasil</h2>
                <p class="text-justify mb-4 text-black"> A Geografia Física do Brasil estuda as características naturais do território brasileiro, que é um país de grande diversidade geográfica e climática. Os principais aspectos abordados são:

                    <br><br>Litosfera: O estudo da litosfera no Brasil foca nas características geológicas e no relevo do país, que é marcado por uma formação antiga e variada. O Brasil possui diferentes formas de relevo, como planaltos, planícies e depressões, com destaque para as grandes bacias sedimentares, as serras e as grandes cadeias montanhosas, como a Serra do Mar e a Serra da Mantiqueira.

                    <br><br>Hidrosfera: O Brasil é um dos países mais privilegiados em termos de recursos hídricos, com várias bacias hidrográficas importantes, como a do Amazonas, do São Francisco, do Paraná e do Tocantins. Esses rios e suas bacias desempenham um papel crucial na economia do país, sendo fontes essenciais de água potável, irrigação e transporte. Além disso, o Brasil tem uma grande quantidade de lagos, represas e aquíferos, como o Aquífero Guarani.

                    <br><br>Atmosfera: A atmosfera do Brasil é estudada pela classificação dos climas que predominam no território, com destaque para o clima tropical, que cobre grande parte do país. O Brasil apresenta uma grande diversidade climática, que varia de equatorial a semiárido, passando por clima tropical, subtropical e temperado, influenciados pela sua localização geográfica e proximidade com a Linha do Equador. Fenômenos meteorológicos como as chuvas de monção, secas e tempestades também fazem parte do estudo.

                    <br><br>Biosfera: O Brasil é um dos países com maior biodiversidade do mundo, possuindo diversos biomas, como a Amazônia, o Cerrado, a Caatinga, a Mata Atlântica, o Pampa e o Pantanal. Cada bioma é associado a características geográficas e climáticas específicas, com grande variedade de fauna e flora. O estudo da biosfera brasileira envolve, portanto, as relações entre os seres vivos e os elementos naturais que formam o ambiente.

                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) O que é estudado pela Geografia Física?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Apenas os fenômenos climáticos que ocorrem na atmosfera.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Os componentes naturais da Terra, como litosfera, atmosfera, hidrosfera e biosfera, e suas interações.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Somente o relevo terrestre e a formação das montanhas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D)  Exclusivamente os biomas e a vegetação de cada continente.</span></li>
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
                            <p>3)  Qual das alternativas abaixo descreve corretamente a relação entre os biomas e a Geografia Física do Brasil?</p>
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
                            <p>4)  Qual é a principal característica geológica do relevo do Brasil?</p>
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