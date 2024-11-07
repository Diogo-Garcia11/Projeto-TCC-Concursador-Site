<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
    <x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p> <!-- Adicionei uma margem horizontal -->
            <a href="{{ route('materias', ['section' => 'filosofia']) }}#filosofia"
                class="mb-4 text-gray-500 underline inline-block">Filosofia</a>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Introdução à Filosofia Grega Clássica: Sócrates, Platão e Aristóteles</h1>

                <p class="text-black">A filosofia grega clássica, surgida na Grécia Antiga, é o alicerce da filosofia ocidental. 
                    Os filósofos gregos não apenas questionaram o mundo ao seu redor, mas também desenvolveram métodos de investigação racional que influenciam o pensamento até hoje.
                     Sócrates, Platão e Aristóteles, em especial, são considerados os maiores representantes dessa era, 
                     cada um contribuindo com teorias fundamentais sobre ética, política, conhecimento e a natureza da realidade. 
                     A busca pela verdade, pelo conhecimento e pela compreensão da alma humana são temas centrais em suas obras.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/socrates-platao-aristotoles.jpg')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#socrates" class="text-kblue hover:text-black hover:!text-black">1- Sócrates (469-399 a.C.)</a></li>
                        <li><a href="#platao" class="text-kblue hover:text-black hover:!text-black">2-Platão (427-347 a.C.)</a></li>
                        <li><a href="#aristoteles" class="text-kblue hover:text-black hover:!text-black">3-Aristóteles (384-322 a.C.)</a></li>
                        
                    </ul>
                </div>
                <br><br>
                <h2 id="socrates" class="text-3xl font-Montserrat font-bold text-black mb-4">Sócrates (469-399 a.C.)
                </h2>
                <p class="text-justify mb-4 text-black">Sócrates é famoso por sua máxima "Só sei que nada sei". Ele acreditava que a sabedoria verdadeira vinha do reconhecimento da própria ignorância e defendia a busca incessante pela verdade. 
                    Como não deixou obras escritas, seu pensamento foi transmitido por seus discípulos, principalmente Platão.

                    Contribuições principais de Sócrates:

                    Método Socrático (ou maiêutica): Consiste em questionar o interlocutor por meio de perguntas, com o objetivo de fazê-lo refletir e chegar a uma verdade por conta própria. 
                    Esse método valoriza o diálogo como forma de explorar conceitos morais e éticos.
                    Ética e Virtude: Sócrates acreditava que o conhecimento é essencial para a virtude. Em sua visão, o mal ocorre por ignorância, e quem conhece o bem, age bem. 
                    Para ele, a virtude era a maior forma de sabedoria, e ser ético estava acima de qualquer vantagem pessoal.
                    Busca pela Verdade: Sócrates desafiava as crenças da sociedade ateniense e questionava o status quo, o que o levou a ser julgado e condenado à morte, acusado de corromper a juventude e questionar os deuses de Atenas.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/socrates.jpg')}}" alt="">
                <br><br>

                <h2 id="platao" class="text-3xl font-Montserrat font-bold text-black mb-4">Platão (427-347 a.C.)</h2>
                <p class="text-justify mb-4 text-black">
                <p class="text-black">Discípulo de Sócrates, Platão desenvolveu sua filosofia com base nos ensinamentos de seu mestre, mas expandiu suas ideias de maneira original. 
                    Ele fundou a Academia em Atenas, uma das primeiras instituições educacionais do Ocidente.

                    Contribuições principais de Platão:

                    Teoria das Ideias (ou Teoria das Formas): Platão acreditava que o mundo sensível (físico) é apenas uma cópia imperfeita de um mundo ideal e eterno, o "mundo das Ideias". 
                    As "Ideias" são realidades perfeitas e imutáveis, que só podem ser compreendidas pela razão, e são a base da verdadeira realidade.
                    Alegoria da Caverna: Platão ilustra a condição humana através de uma metáfora onde pessoas acorrentadas em uma caverna só conseguem ver sombras projetadas na parede, sem acesso ao mundo real. 
                    A alegoria representa o caminho do conhecimento – do mundo das aparências ao mundo das Ideias, onde reside a verdade.
                    Teoria Política: Em sua obra A República, Platão descreve sua visão de uma sociedade ideal, dividida em três classes (governantes, guerreiros e trabalhadores) 
                    e governada por filósofos, que ele considera os mais sábios e aptos a governar.</p>

                <br>
                <img class="mt-6 w-96" src="{{asset('imagens/platao2.jpg')}}" alt="">
                <br><br>
                <h2 id="aristoteles" class="text-3xl font-Montserrat font-bold text-black mb-4">Aristóteles (384-322 a.C.)</h2>

                <br>
                <p class="text-black">Aluno de Platão, Aristóteles discordou de seu mestre em vários pontos e desenvolveu um sistema filosófico próprio, que teve um impacto profundo em diversas áreas do conhecimento, como ética, política, ciência e lógica.

                    Contribuições principais de Aristóteles:

                    Metafísica: Diferentemente de Platão, Aristóteles acreditava que a realidade é constituída por substâncias concretas, e que as "formas" existem dentro das próprias coisas, não em um mundo separado de Ideias.
                    Ética e Virtude: Na Ética a Nicômaco, Aristóteles desenvolveu a teoria da virtude, que considera a felicidade (eudaimonia) como o maior bem da vida humana. 
                    Ele propõe que a virtude é o meio-termo entre dois extremos (excesso e falta), um conceito chamado "doutrina do meio-termo".
                    Lógica: Aristóteles foi pioneiro na lógica formal, sistematizando o raciocínio e o desenvolvimento de argumentos válidos. Sua lógica silogística (premissas levando a uma conclusão) é a base da lógica até hoje.
                    Política: Na sua obra Política, Aristóteles descreve diferentes formas de governo e defende a política como um meio de alcançar a vida boa para todos. 
                    Ele argumenta que o ser humano é um "animal político", ou seja, sua natureza se realiza plenamente na vida em comunidade.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/aristoteles.jpg')}}" alt="">

                <br>
                
                        <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                        <div class="mt-6">
                            <ul class="text-black">
                                <li class="mb-2">
                                    <p>1) Sobre o método socrático, assinale a alternativa correta:</p>
                                </li>
                                <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Consiste em transmitir diretamente o conhecimento, já que este pode ser ensinado por qualquer indivíduo.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Utiliza a ironia para confirmar as opiniões pré-existentes do interlocutor.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C)Baseia-se na maiêutica, que busca a verdade através da auto-reflexão e do raciocínio do próprio indivíduo.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D)Defende a ortodoxia, a opinião firme e única, contra o diálogo e a argumentação.</span></li>
                                <br>

                                <li class="mb-2">
                                    <p>2) Platão acredita que o conhecimento sensível é insuficiente para atingir a verdade, 
                                        pois ele se limita às experiências empíricas individuais. 
                                        Segundo a teoria das ideias de Platão, onde reside o verdadeiro conhecimento?</p>
                                </li>
                                <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) No conhecimento empírico adquirido através dos sentidos.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Na opinião compartilhada entre diferentes indivíduos.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Nos arquétipos ou "eidos", acessíveis através do intelecto.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Na forma de governo que concede liberdade total aos indivíduos.</span></li>
                                <br>

                                <li class="mb-2">
                                    <p>3) No Mito da Caverna de Platão, a relação entre a realidade e as aparências é abordada de maneira metafórica. Sobre essa alegoria, é correto afirmar que:</p>
                                </li>
                                <li class="radio-container"><input type="radio" name="questao-3" value="1"
                                        onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A)O prisioneiro que deixa a caverna e vê o mundo externo simboliza a busca pela verdade e o conhecimento racional.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                        onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B)O prisioneiro que sai da caverna representa alguém que escolhe viver em harmonia com as opiniões populares.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                        onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) As sombras vistas dentro da caverna representam o verdadeiro conhecimento.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                        onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D)  A alegoria defende a impossibilidade de qualquer ser humano alcançar o conhecimento.</span></li>
                                <br>

                                <li class="mb-2">
                                    <p>4)Segundo Aristóteles, o conceito de "ato e potência" ajuda a explicar o processo de mudança e desenvolvimento dos seres. Um exemplo que ilustra essa ideia é:</p>
                                </li>
                                <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                        onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A)Uma pedra que permanece sempre imóvel e inalterada.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-4" value="1"
                                        onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Uma pessoa que aprende uma nova habilidade, passando da potência ao ato.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                        onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C)Um objeto que não possui finalidade e existe sem propósito.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                        onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D)A opinião pública, que é inalterável ao longo do tempo.</span></li>
                                <br>

                                <li class="mb-2">
                                    <p>5) Em "A República", Platão apresenta uma sociedade ideal estruturada em três classes, cada uma com um papel específico. Sobre essa estrutura, é correto afirmar que: </p>
                                </li>
                                <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                        onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) Todos os cidadãos podem ascender a qualquer uma das classes, dependendo de sua vontade individual.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                        onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) O governo ideal é uma democracia, na qual todos os cidadãos têm igual poder de decisão.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                        onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C)  Os guerreiros têm total liberdade para acumular riquezas e bens materiais.</span></li>
                                <li class="radio-container"><input type="radio" name="questao-5" value="1"
                                        onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D)Os filósofos são responsáveis pela direção da sociedade devido à sua capacidade de discernir a ideia do bem.</span></li>


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