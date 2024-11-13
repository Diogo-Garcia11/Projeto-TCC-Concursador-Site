<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p>
            <a href="{{ route('materias', ['section' => 'literatura']) }}#literatura" class="mb-4 text-gray-500 underline inline-block">Literatura</a>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Escolas Literárias Brasileiras</h1>
                <p class="text-black">
                    A literatura brasileira passou por diferentes movimentos e escolas literárias ao longo dos séculos, cada uma com características 
                    e temas distintos, refletindo as mudanças sociais, culturais e estéticas do país. Abaixo estão algumas das principais escolas que 
                    marcaram a literatura nacional.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/escolas_literarias.jpeg')}}" alt="Imagem ilustrativa sobre as Escolas Literárias Brasileiras">

                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#barroco" class="text-kblue hover:text-black hover:!text-black">1- Barroco</a></li>
                        <li><a href="#arcadismo" class="text-kblue hover:text-black hover:!text-black">2- Arcadismo</a></li>
                        <li><a href="#romantismo" class="text-kblue hover:text-black hover:!text-black">3- Romantismo</a></li>
                        <li><a href="#realismo" class="text-kblue hover:text-black hover:!text-black">4- Realismo</a></li>
                        <li><a href="#naturalismo" class="text-kblue hover:text-black hover:!text-black">5- Naturalismo</a></li>
                        <li><a href="#parnasianismo" class="text-kblue hover:text-black hover:!text-black">6- Parnasianismo</a></li>
                        <li><a href="#simbolismo" class="text-kblue hover:text-black hover:!text-black">7- Simbolismo</a></li>
                        <li><a href="#modernismo" class="text-kblue hover:text-black hover:!text-black">8- Modernismo</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">9- Exercícios Práticos</a></li>
                    </ul>
                </div>

                <h2 id="barroco" class="text-3xl font-Montserrat font-bold text-black mb-4">Barroco</h2>
                <p class="text-black">
                    O Barroco foi a primeira escola literária brasileira, surgida no século XVII, e caracterizada pelo contraste entre o espiritual 
                    e o material. Influenciado pelo contexto do Brasil colonial e pela presença da Igreja, o Barroco expressa a dualidade entre a 
                    busca pelo prazer mundano e o medo da condenação eterna. Marcado pelo uso de antíteses e paradoxos, o estilo barroco utiliza 
                    uma linguagem rebuscada e ornamentada, com versos complexos que refletem a tensão e o conflito interior do homem.
                </p>

                <h2 id="arcadismo" class="text-3xl font-Montserrat font-bold text-black mb-4">Arcadismo</h2>
                <p class="text-black">
                    O Arcadismo, também conhecido como Neoclassicismo, surgiu no Brasil no século XVIII e é marcado pela simplicidade e busca pela 
                    vida bucólica, em oposição ao estilo exagerado do Barroco. Inspirados pelos ideais iluministas e pela estética greco-romana, os 
                    poetas árcades valorizavam a natureza, o equilíbrio e a simplicidade. No Brasil, o Arcadismo também reflete o desejo de liberdade 
                    e independência, influenciado pelo contexto da Inconfidência Mineira e pelo crescente desejo de autonomia frente a Portugal.
                </p>

                <h2 id="romantismo" class="text-3xl font-Montserrat font-bold text-black mb-4">Romantismo</h2>
                <p class="text-black">
                    O Romantismo brasileiro, que floresceu no século XIX, destacou-se por temas como a exaltação do amor, da natureza e do 
                    nacionalismo. Os autores românticos buscavam criar uma identidade nacional, valorizando elementos da cultura indígena e da 
                    paisagem brasileira. Dividido em três gerações, o Romantismo apresenta diferentes enfoques, desde o sentimentalismo amoroso 
                    e o indianismo da primeira geração, até a crítica social da segunda e o tom mais sombrio e existencialista da terceira.
                </p>

                <h2 id="realismo" class="text-3xl font-Montserrat font-bold text-black mb-4">Realismo</h2>
                <p class="text-black">
                    O Realismo no Brasil surgiu como reação ao sentimentalismo do Romantismo, buscando uma representação mais fiel e crítica da 
                    realidade. No final do século XIX, os autores realistas retratavam a sociedade de maneira objetiva, abordando questões sociais, 
                    políticas e psicológicas com profundidade. No Brasil, Machado de Assis é um dos principais expoentes do Realismo, com obras que 
                    analisam os conflitos de seus personagens de forma inovadora e analítica.
                </p>

                <h2 id="naturalismo" class="text-3xl font-Montserrat font-bold text-black mb-4">Naturalismo</h2>
                <p class="text-black">
                    O Naturalismo é uma vertente do Realismo que busca explorar o comportamento humano através de uma perspectiva científica. 
                    Influenciado pelas teorias de Darwin, o Naturalismo vê os personagens como produtos de seu meio social e biológico. A literatura 
                    naturalista aborda temas como violência, miséria e instintos primitivos, revelando a face mais crua e realista da sociedade.
                </p>

                <h2 id="parnasianismo" class="text-3xl font-Montserrat font-bold text-black mb-4">Parnasianismo</h2>
                <p class="text-black">
                    O Parnasianismo foi um movimento poético que surgiu no final do século XIX e valorizava a forma e a perfeição estética dos versos. 
                    Em oposição ao subjetivismo do Romantismo, os poetas parnasianos buscavam o rigor formal, o uso de métricas precisas e o culto à 
                    beleza objetiva. A poesia parnasiana é marcada por uma linguagem rebuscada e um apego aos detalhes formais, destacando-se por sua 
                    técnica e precisão.
                </p>

                <h2 id="simbolismo" class="text-3xl font-Montserrat font-bold text-black mb-4">Simbolismo</h2>
                <p class="text-black">
                    O Simbolismo surgiu como uma resposta ao Parnasianismo, valorizando a subjetividade, a musicalidade e o misticismo. Influenciado 
                    pelo romantismo e pelo espiritualismo, o Simbolismo busca representar o inconsciente, as emoções e os mistérios da alma. Os poetas 
                    simbolistas utilizavam imagens oníricas, figuras de linguagem e uma linguagem sugestiva para evocar sensações e sentimentos.
                </p>

                <h2 id="modernismo" class="text-3xl font-Montserrat font-bold text-black mb-4">Modernismo</h2>
                <p class="text-black">
                    O Modernismo no Brasil teve início na Semana de Arte Moderna de 1922, propondo uma ruptura com as tradições e a valorização da 
                    experimentação estética e da liberdade criativa. Dividido em três fases, o Modernismo abordou temas nacionais, como a cultura 
                    popular e o cotidiano, além de promover uma linguagem mais coloquial. A primeira fase é marcada pela busca de uma identidade 
                    brasileira, enquanto a segunda consolida essa identidade e a terceira fase apresenta um tom mais intimista e introspectivo.
                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>Seixas era homem honesto; mas ao atrito da secretaria e ao calor das salas, sua honestidade havia tomado essa têmpera flexível da cera que se molda às fantasias da vaidade e aos reclamos da ambição.



                                Era incapaz de apropriar-se do alheio, ou de praticar um abuso de confiança; mas professava a moral fácil e cômoda, tão cultivada atualmente em nossa sociedade.



                                Segundo essa doutrina, tudo é permitido em matéria de amor; e o interesse próprio tem plena liberdade, desde que se transija com a lei e evite o escândalo.

<br>

                                ALENCAR, J. Senhora. Disponível em: www.dominiopublico.gov.br. Acesso em: 7 out. 2015.
                            <br><br>
                                A literatura romântica reproduziu valores sociais em sintonia com seu contexto de mudanças. No fragmento de Senhora, as concepções românticas do narrador repercutem a</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) resistência à relativização dos parâmetros éticos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) idealização de personagens pela nobreza de atitudes.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) crítica aos modelos de austeridade dos espaços coletivos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) defesa da importância da família na formação moral do indivíduo.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">E) representação do amor como fator de aperfeiçoamento do espírito.</span></li>
                        
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
