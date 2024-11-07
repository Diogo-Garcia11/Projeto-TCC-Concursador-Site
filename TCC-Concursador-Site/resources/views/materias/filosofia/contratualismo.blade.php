<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p>
            <a href="{{ route('materias', ['section' => 'filosofia']) }}#filosofia" class="mb-4 text-gray-500 underline inline-block">Filosofia</a>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Introdução ao Contratualismo</h1>

                <p class="text-black">O contratualismo é uma teoria filosófica e política que propõe uma explicação para a origem do Estado e da sociedade, baseada na ideia de um "contrato social". 
                    Essa teoria foi desenvolvida por três pensadores fundamentais – Thomas Hobbes, John Locke e Jean-Jacques Rousseau – cada um com uma visão distinta sobre a natureza humana e a melhor forma de organização social.
                    O contratualismo parte da ideia de um "estado de natureza", uma condição hipotética em que os indivíduos viviam antes da criação da sociedade civil. 
                    Esse estado natural varia de acordo com a perspectiva de cada filósofo, mas todos concordam que, em determinado momento, 
                    os indivíduos abandonaram esse estado e estabeleceram um contrato social para formar um governo e garantir certos direitos e deveres. 
                    Esse contrato justifica a autoridade política e o poder do Estado sobre os indivíduos.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/contratualismo.jpg')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#thomas" class="text-kblue hover:text-black hover:!text-black">1- Thomas Hobbes (1588-1679)</a></li>
                        <li><a href="#jhon" class="text-kblue hover:text-black hover:!text-black">2-John Locke (1632-1704)</a></li>
                        <li><a href="#aristoteles" class="text-kblue hover:text-black hover:!text-black">3-Jean-Jacques Rousseau (1712-1778)</a></li>

                    </ul>
                </div>
                <br><br>
                <h2 id="thomas" class="text-3xl font-Montserrat font-bold text-black mb-4">Thomas Hobbes (1588-1679)
                </h2>
                <p class="text-justify mb-4 text-black">Obra principal: Leviatã (1651).
                Visão do estado de natureza: Hobbes acreditava que, no estado de natureza, os seres humanos viviam em uma condição de "guerra de todos contra todos", onde a vida era "solitária, pobre, sórdida, brutal e curta".
                 A ausência de leis e autoridade resultava em violência e insegurança.
                Contrato social: Para escapar desse estado de constante conflito, os indivíduos concordaram em ceder suas liberdades a uma autoridade central (o soberano) que garantisse a paz e a segurança.
                 Para Hobbes, o soberano deve ter poder absoluto para manter a ordem, pois só assim o contrato social é mantido.
                Ponto-chave: O contratualismo de Hobbes é baseado na necessidade de uma autoridade forte (monarquia absoluta) para proteger os indivíduos.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/leviata.jpg')}}" alt="">
                <br><br>

                <h2 id="john" class="text-3xl font-Montserrat font-bold text-black mb-4">John Locke (1632-1704)</h2>
                <p class="text-justify mb-4 text-black">
                <p class="text-black">Obra principal: Segundo Tratado sobre o Governo Civil (1689).
                    Visão do estado de natureza: Locke tinha uma visão mais otimista do estado de natureza. Para ele, as pessoas eram livres e iguais e possuíam direitos naturais (vida, liberdade e propriedade). 
                    No entanto, esse estado de liberdade e igualdade ainda era frágil, pois faltava uma autoridade para resolver conflitos e garantir esses direitos.
                    Contrato social: Locke propôs que os indivíduos formaram uma sociedade civil para proteger seus direitos naturais. Eles concordaram em obedecer a um governo, desde que esse governo respeitasse seus direitos.
                     Se o governo violar esses direitos, o povo tem o direito de resistir e até substituir a autoridade.
                    Ponto-chave: Locke defendia uma autoridade limitada e a ideia de que o governo deve ser baseado no consentimento dos governados, abrindo espaço para a democracia e os direitos individuais.</p>

                <br>
                <img class="mt-6 w-96" src="{{asset('imagens/jhon.jpg')}}" alt="">
                <br><br>
                <h2 id="jean" class="text-3xl font-Montserrat font-bold text-black mb-4">Jean-Jacques Rousseau (1712-1778)</h2>

                <br>
                <p class="text-black">Obra principal: Do Contrato Social (1762).
                    Visão do estado de natureza: Rousseau acreditava que, no estado de natureza, os seres humanos eram bons e viviam em harmonia, mas que a propriedade privada e o aumento da desigualdade destruíram essa harmonia natural.
                    Contrato social: Em sua visão, o contrato social deveria unir as pessoas para garantir a "vontade geral", ou seja, o bem comum. 
                    Diferente de Hobbes e Locke, Rousseau defendia que o contrato social não envolve a submissão a um soberano, mas sim a criação de uma comunidade onde todos participam ativamente e as decisões são tomadas coletivamente.
                    Ponto-chave: Rousseau defendia a soberania popular, onde o poder político pertence ao povo e onde as leis expressam a vontade geral, fundamentando ideias que influenciaram a democracia direta e o pensamento republicano.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/jean.jpg')}}" alt="">

                <br>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Thomas Hobbes acreditava que, no estado de natureza, os seres humanos viviam em um ambiente onde a "vida era solitária, pobre, sórdida, brutal e curta". 
                                Com base nisso, Hobbes propôs um contrato social em que:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) As pessoas deveriam viver em harmonia e igualdade, sem nenhuma autoridade.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Cada indivíduo manteria seus direitos naturais sem nenhuma submissão.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Todos concordariam em ceder suas liberdades a um soberano para manter a paz e a ordem.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) A propriedade privada seria garantida como um direito inalienável dos cidadãos.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) John Locke tinha uma visão mais otimista sobre o estado de natureza, considerando-o um estado de liberdade e igualdade. 
                                Segundo Locke, qual é o principal motivo pelo qual as pessoas se unem para formar uma sociedade civil?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Garantir uma autoridade absoluta que controla os direitos individuais.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Proteger seus direitos naturais (vida, liberdade e propriedade) por meio de uma autoridade limitada.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Fortalecer as desigualdades econômicas e sociais através do governo.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Submeter todos os cidadãos à vontade geral de uma única autoridade.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>3)Jean-Jacques Rousseau defendia que o contrato social deveria garantir a "vontade geral" e o bem comum. 
                                Em oposição à teoria de Hobbes, Rousseau acreditava que o poder político deveria estar nas mãos:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" 
                        onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) De uma autoridade absoluta que fosse responsável pela paz e segurança.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" 
                        onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) Dos governantes, que têm o poder de decidir sobre os direitos dos cidadãos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" 
                        onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) De um soberano que representasse todos os interesses individuais.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1" 
                        onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) Do povo, que participa ativamente das decisões políticas.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4)Dentre as diferenças entre Hobbes e Locke sobre o contrato social, pode-se afirmar que:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" 
                        onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) Ambos concordam que a autoridade deve ser ilimitada para evitar conflitos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1" 
                        onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Locke defende um governo baseado no consentimento dos governados, enquanto Hobbes defende um governo absoluto.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" 
                        onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) Hobbes acredita que as pessoas são essencialmente boas, enquanto Locke discorda.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" 
                        onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) Ambos acreditam que o contrato social não envolve a formação de um governo.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5)A obra Do Contrato Social, de Jean-Jacques Rousseau, introduziu uma ideia importante que influenciou diretamente os princípios democráticos modernos. 
                                Qual dos princípios abaixo é atribuído à teoria política de Rousseau? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" 
                        onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) A submissão dos cidadãos a um soberano absoluto.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" 
                        onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) A defesa da propriedade privada como fundamento da sociedade.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1" 
                        onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) A soberania popular, onde o poder político pertence ao povo.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" 
                        onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) O direito do governo de expropriar os bens dos indivíduos.</span></li>


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