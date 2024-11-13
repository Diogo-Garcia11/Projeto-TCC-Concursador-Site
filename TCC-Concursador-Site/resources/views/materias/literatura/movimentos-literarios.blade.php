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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Movimentos Literários e Seus Autores</h1>
                <p class="text-black">
                    A literatura brasileira se desenvolveu ao longo dos séculos, acompanhando os diferentes contextos culturais e sociais. 
                    Os movimentos literários refletem as transformações da sociedade e trazem à tona questões importantes de cada época. 
                    Autores representativos, como Machado de Assis, José de Alencar e Graciliano Ramos, marcaram esses períodos literários, 
                    deixando obras clássicas que continuam influentes. Este conteúdo explora esses movimentos e seus autores, com uma análise 
                    detalhada de cada um.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/movimentos_literarios.webp')}}" alt="Imagem representando Movimentos Literários e seus autores">

                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#arcadismo" class="text-kblue hover:text-black hover:!text-black">1- Arcadismo e Cláudio Manuel da Costa</a></li>
                        <li><a href="#romantismo" class="text-kblue hover:text-black hover:!text-black">2- Romantismo e José de Alencar</a></li>
                        <li><a href="#realismo" class="text-kblue hover:text-black hover:!text-black">3- Realismo e Machado de Assis</a></li>
                        <li><a href="#modernismo" class="text-kblue hover:text-black hover:!text-black">4- Modernismo e Graciliano Ramos</a></li>
                        <li><a href="#contemporaneo" class="text-kblue hover:text-black hover:!text-black">5- Literatura Contemporânea e Clarice Lispector</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">6- Exercícios Práticos</a></li>
                    </ul>
                </div>

                <h2 id="arcadismo" class="text-3xl font-Montserrat font-bold text-black mb-4">Arcadismo e Cláudio Manuel da Costa</h2>
                <p class="text-black">
                    O Arcadismo, também conhecido como Neoclassicismo, foi um movimento que surgiu no final do século XVIII e refletia 
                    ideais de simplicidade, bucolismo e retorno aos valores clássicos. No Brasil, o Arcadismo esteve ligado aos 
                    inconfidentes mineiros e à luta pela independência do país. Cláudio Manuel da Costa foi um dos principais poetas 
                    árcades, e suas obras, como "Obras Poéticas", enfatizam temas de liberdade e exaltação da natureza. O movimento 
                    propunha a fuga dos excessos do Barroco, adotando uma linguagem mais direta e um estilo equilibrado.
                </p>

                <p class="text-black mt-4">
                    A literatura árcade representou o anseio por liberdade e uma vida mais simples e pacífica, em oposição ao 
                    ambiente de tensão política da época. Os poetas árcades buscavam inspiração na Antiguidade clássica e celebravam 
                    as paisagens brasileiras, ainda que de maneira idealizada.
                </p>

                <h2 id="romantismo" class="text-3xl font-Montserrat font-bold text-black mb-4">Romantismo e José de Alencar</h2>
                <p class="text-black">
                    O Romantismo no Brasil surgiu no século XIX e está intimamente ligado ao processo de formação da identidade 
                    nacional. José de Alencar é um dos grandes nomes do Romantismo brasileiro e suas obras, como "Iracema" e "O 
                    Guarani", exploram temas indígenas e regionais, exaltando as paisagens e as tradições do Brasil. O Romantismo 
                    trouxe também a idealização do indígena como herói nacional e buscou retratar as características autênticas da 
                    cultura brasileira.
                </p>

                <p class="text-black mt-4">
                    O movimento romântico, com seu nacionalismo e sentimentalismo, contribuiu para consolidar uma literatura 
                    voltada para a valorização do Brasil e suas particularidades. José de Alencar, em especial, desempenhou um papel 
                    fundamental ao criar narrativas que buscavam representar a "alma" do país.
                </p>

                <h2 id="realismo" class="text-3xl font-Montserrat font-bold text-black mb-4">Realismo e Machado de Assis</h2>
                <p class="text-black">
                    O Realismo surgiu como uma reação ao idealismo romântico, trazendo uma visão mais crítica e objetiva da 
                    sociedade. Machado de Assis é o principal nome do Realismo brasileiro, conhecido por sua ironia e profundidade 
                    psicológica. Em obras como "Memórias Póstumas de Brás Cubas" e "Dom Casmurro", ele aborda temas como hipocrisia, 
                    corrupção e os conflitos morais da elite brasileira. Sua escrita analítica e observadora revela as contradições 
                    sociais e os dilemas humanos, fazendo dele um dos maiores escritores brasileiros.
                </p>

                <p class="text-black mt-4">
                    A literatura realista, especialmente nas mãos de Machado de Assis, expôs a complexidade das relações sociais e 
                    a profundidade das emoções humanas, sem idealizações. O Realismo brasileiro é lembrado por sua crítica social e 
                    seu olhar perspicaz sobre a natureza humana.
                </p>

                <h2 id="modernismo" class="text-3xl font-Montserrat font-bold text-black mb-4">Modernismo e Graciliano Ramos</h2>
                <p class="text-black">
                    O Modernismo no Brasil começou oficialmente em 1922, com a Semana de Arte Moderna, que buscava romper com os 
                    modelos literários anteriores e estabelecer uma literatura autêntica e inovadora. Graciliano Ramos, com sua 
                    obra "Vidas Secas", representa a segunda fase do Modernismo, marcada pela preocupação social e pelo regionalismo. 
                    Seus textos retratam as dificuldades do sertanejo nordestino, com uma linguagem seca e direta, refletindo a 
                    realidade árida do sertão.
                </p>

                <p class="text-black mt-4">
                    Graciliano Ramos e outros modernistas trouxeram para a literatura uma representação crua e realista das 
                    injustiças sociais, da miséria e das desigualdades do país, criando uma literatura comprometida com a 
                    realidade brasileira.
                </p>

                <h2 id="contemporaneo" class="text-3xl font-Montserrat font-bold text-black mb-4">Literatura Contemporânea e Clarice Lispector</h2>
                <p class="text-black">
                    A literatura contemporânea brasileira aborda questões complexas da sociedade moderna, como identidade, gênero, 
                    relações de poder e introspecção psicológica. Clarice Lispector é uma das autoras mais representativas dessa fase, 
                    com obras que exploram a profundidade da mente humana e a busca por autoconhecimento. Em livros como "A Paixão 
                    Segundo G.H.", ela mergulha na subjetividade e nas emoções humanas, refletindo sobre questões existenciais e 
                    psicológicas com uma linguagem poética e introspectiva.
                </p>

                <p class="text-black mt-4">
                    A literatura de Clarice Lispector é marcada por uma escrita intimista, que explora os limites da linguagem e da 
                    compreensão, oferecendo ao leitor uma experiência de autoconhecimento e introspecção. Sua obra reflete a 
                    complexidade da vida contemporânea e os dilemas emocionais que a acompanham.
                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios Práticos</h2>
                <div class="text-black mt-6">
                    <ul class="text-black">
                        <li class="mb-2 mt-4">
                            <p>1) Qual autor foi o principal representante do Realismo no Brasil, conhecido por sua análise crítica 
                               e irônica da sociedade brasileira?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) José de Alencar</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Machado de Assis</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Graciliano Ramos</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Clarice Lispector</span></li>
                    </ul>
                    <ul class="text-black">
                        <li class="mb-2 mt-4">
                            <p>2) Em qual movimento literário José de Alencar se destacou, explorando temas nacionais e indígenas 
                               para construir uma identidade literária brasileira?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Romantismo</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Realismo</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Modernismo</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Arcadismo</span></li>
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
