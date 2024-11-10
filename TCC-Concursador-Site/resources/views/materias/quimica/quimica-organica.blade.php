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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Química Orgânica</h1>
                <p class="text-black">A química orgânica é o ramo da química que estuda os compostos do carbono,
                    especialmente aqueles que contêm ligações carbono-carbono (C-C) e carbono-hidrogênio (C-H). Esses
                    compostos são fundamentais para a vida e estão presentes em muitos materiais naturais e sintéticos.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/quimicaorganica.jpg')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#o-que-e-quimica-organica" class="text-kblue hover:text-black hover:!text-black">1-
                                O que é Química Orgânica</a></li>
                        <li><a href="#conceitos-chaves" class="text-kblue hover:text-black hover:!text-black">2-
                                Conceitos chaves de Química Orgânica </a></li>
                        <li><a href="#aplicacoes" class="text-kblue hover:text-black hover:!text-black">3-
                                Aplicações da Química Orgânica</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4-
                                Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="o-que-e-quimica-organica" class="text-3xl font-Montserrat font-bold text-black mb-4">O que é
                    Química Orgânica</h2>
                <p class="text-justify mb-4 text-black">A química orgânica é um ramo da química que se dedica ao estudo
                    dos compostos que têm o carbono como elemento principal em sua estrutura. Além do carbono, esses
                    compostos frequentemente contêm outros elementos, como hidrogênio, oxigênio, nitrogênio, enxofre,
                    fósforo, entre outros. A química orgânica investiga as propriedades, as reatividades e as aplicações
                    desses compostos, que são essenciais para diversas áreas, como a biologia, a medicina, a indústria e
                    a agricultura.

                    <br><br>A principal característica da química orgânica é a presença de ligações carbono-carbono
                    (C-C) e carbono-hidrogênio (C-H), que formam a espinha dorsal das moléculas orgânicas. Essas
                    ligações podem ser simples, duplas ou triplas, e o carbono tem a capacidade única de formar cadeias
                    longas e ramificadas, possibilitando uma imensa diversidade de compostos.

                    <br><br>Compostos orgânicos incluem hidrocarbonetos (como alcano, alceno e alquino), álcoois, ácidos
                    carboxílicos, ésteres, aminas, entre outros. Todos esses compostos são classificados conforme seus
                    grupos funcionais e suas estruturas moleculares. Por exemplo, os álcoois contêm o grupo -OH
                    (hidroxila), enquanto os ácidos carboxílicos têm o grupo -COOH.

                    <br><br>Entretanto, a química orgânica não abrange compostos como carbonatos, óxidos de carbono e
                    cianetos, que são considerados exceções, pois embora contenham carbono, sua química e reatividade
                    diferem daquelas dos compostos orgânicos tradicionais.

                    <br><br>Além disso, a química orgânica estuda reações químicas que envolvem a transformação de
                    compostos orgânicos, como substituição, adição, eliminação e rearranjo, que são fundamentais para a
                    síntese de novos materiais e para processos biológicos e industriais.

                    <br><br>A química orgânica é de extrema importância no desenvolvimento de fármacos, na criação de
                    novos materiais como plásticos e polímeros, no entendimento dos processos biológicos (como a
                    estrutura do DNA e das proteínas) e em muitas outras áreas que impactam diretamente a vida
                    cotidiana.
                </p>

                <h2 id="conceitos-chaves" class="text-3xl font-Montserrat font-bold text-black mb-4">Conceitos chaves de
                    Química Orgânica</h2>
                <p class="text-justify mb-4 text-black">
                    A química orgânica é o ramo da química que estuda os compostos com carbono em sua estrutura,
                    incluindo suas propriedades, reações e síntese. Ela é essencial para o desenvolvimento científico e
                    industrial e é dividida em várias áreas, como:

                    <br><br>Hidrocarbonetos: Compostos formados apenas por carbono e hidrogênio, como alcanos, alcenos,
                    alquinos
                    e aromáticos.
                    <br><br>Nomenclatura: Regras para nomear compostos orgânicos de acordo com a IUPAC, baseadas na
                    estrutura e
                    nos grupos funcionais.
                    <br><br>Funções Orgânicas: Grupos de compostos com propriedades semelhantes, como álcoois, éteres,
                    ácidos
                    carboxílicos e aminas.
                    <br><br>Isomeria: Compostos com a mesma fórmula molecular, mas estruturas diferentes, resultando em
                    propriedades distintas.
                    <br><br>Reações Orgânicas: Transformações químicas entre compostos orgânicos, como substituição,
                    adição e
                    eliminação.
                    <br><br>Estereoquímica: Estudo da disposição espacial dos átomos em moléculas e seu impacto nas
                    propriedades
                    e reações.
                    <br><br>Polímeros: Estudo de macromoléculas formadas por monômeros, essenciais para plásticos e
                    borrachas.
                    <br><br>Mecanismos de Reação: Estudo detalhado dos passos intermediários das reações orgânicas.
                    <br><br>Química dos Aromáticos: Estudo de compostos como o benzeno e seus derivados.
                    <br><br>Espectroscopia Orgânica: Técnicas para determinar a estrutura de compostos, como RMN, IR e
                    espectrometria de massa.
                    <br><br>Síntese Orgânica: Planejamento de reações para criar moléculas orgânicas complexas.
                    <br><br>Química Verde: Práticas que visam reduzir o impacto ambiental na produção de compostos
                    orgânicos.
                </p>
                <div class="flex justify-center">
                    <img class="mt-6 w-96" src="{{asset('imagens/quimicaorganica2.webp')}}" alt="">
                </div><br><br>
                <h2 id="aplicacoes" class="text-3xl font-Montserrat font-bold text-black mb-4">Aplicações da Química
                    Orgânica</h2>
                <p class="text-justify mb-4 text-black"> A química orgânica tem diversas aplicações práticas que impactam
                    diretamente o nosso cotidiano, com contribuições essenciais para diferentes setores da ciência, da
                    indústria e da saúde. A seguir, estão algumas das principais áreas em que a química orgânica é
                    aplicada:

                    <br><br>Desenvolvimento e Síntese de Fármacos:
                    A química orgânica é fundamental para a síntese de medicamentos, como antibióticos, analgésicos,
                    antidepressivos e outros tratamentos terapêuticos. A criação de novas moléculas orgânicas permite o
                    desenvolvimento de fármacos inovadores para combater doenças infecciosas, aliviar dores ou tratar
                    condições psiquiátricas e outras patologias.

                    <br><br>Produção de Aditivos, Conservantes, Corantes e Saborizantes:
                    Na indústria alimentícia, a química orgânica é usada para a síntese de aditivos, como conservantes,
                    corantes e saborizantes artificiais. Esses compostos ajudam a melhorar a aparência, o sabor e a
                    durabilidade dos alimentos, tornando-os mais atraentes e seguros para consumo.

                    <br><br>Criação de Materiais como Plásticos, Borrachas e Fibras Sintéticas:
                    A química orgânica é a base para a produção de polímeros e macromoléculas que dão origem a materiais
                    como plásticos, borrachas e fibras sintéticas. Esses materiais são utilizados em uma ampla gama de
                    produtos, desde embalagens e dispositivos eletrônicos até roupas e calçados.

                    <br><br>Refino de Petróleo:
                    A química orgânica também desempenha um papel crucial no refino do petróleo, processo pelo qual se
                    obtêm combustíveis como gasolina, diesel e querosene. Além disso, o refino do petróleo permite a
                    obtenção de produtos petroquímicos que são matéria-prima para uma vasta gama de produtos
                    industriais.

                    <br><br>Fabricação de Pesticidas, Herbicidas e Fertilizantes:
                    A criação de pesticidas, herbicidas e fertilizantes envolve compostos orgânicos para proteger as
                    culturas agrícolas e promover seu crescimento. Esses produtos são essenciais para a agricultura
                    moderna, ajudando a aumentar a produção de alimentos e controlar pragas e doenças.

                    <br><br>Produção de Cosméticos e Produtos de Cuidado Pessoal:
                    A química orgânica é aplicada na síntese de produtos de cuidados pessoais, como cremes, perfumes,
                    maquiagens e outros cosméticos. Esses produtos são formulados com compostos orgânicos que
                    proporcionam efeitos hidratantes, suavizantes, de proteção e fragrância.

                    <br><br>Síntese de Fibras Sintéticas para a Indústria da Moda:
                    As fibras sintéticas, como o poliéster, o nylon e o acrílico, são criadas por processos químicos
                    orgânicos e são amplamente utilizadas na indústria da moda e do vestuário. Essas fibras oferecem
                    características como durabilidade, elasticidade e facilidade de cuidado, além de serem mais baratas
                    e de fácil produção.

                    <br><br>Desenvolvimento de Produtos de Limpeza:
                    A química orgânica também é importante no desenvolvimento de detergentes, sabões e desinfetantes.
                    Esses compostos orgânicos têm a capacidade de remover sujeira e gordura, tornando-os indispensáveis
                    em ambientes domésticos, comerciais e industriais.

                    <br><br>Além dessas áreas, a química orgânica também é aplicada em tecnologias emergentes, como o
                    desenvolvimento de biocombustíveis, novos materiais e tratamentos para doenças complexas, além de
                    contribuir para inovações no campo da energia renovável e tecnologia ambiental. Em resumo, a química
                    orgânica tem um papel fundamental em praticamente todos os aspectos da vida moderna, desde a saúde
                    até a indústria e o consumo diário.

                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Qual é a principal característica da química orgânica?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) A presença de ligações carbono-oxigênio e carbono-hidrogênio.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) A presença de ligações carbono-carbono e carbono-hidrogênio.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) A ausência de carbono nas moléculas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0"
                                onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) A presença de átomos de nitrogênio e enxofre em todas as moléculas.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Qual das alternativas abaixo não é um exemplo de composto orgânico?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Álcoois.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Ácidos carboxílicos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Cianetos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0"
                                onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Alcanos.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>3) A química orgânica é aplicada em diversas áreas. Qual das seguintes alternativas descreve corretamente uma de suas aplicações?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) Produção de pesticidas e herbicidas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) Criação de compostos inorgânicos como óxidos metálicos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C)  Síntese de minerais para a construção civil.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0"
                                onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) Produção de gás natural.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) Qual dos seguintes compostos é usado na indústria de cosméticos e produtos de cuidado pessoal? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) Ácido sulfúrico.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Glicerina.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C)  Cloreto de sódio.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0"
                                onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) Polietileno.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) Qual é a principal diferença entre compostos orgânicos e compostos como carbonatos e óxidos de carbono? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) Compostos orgânicos não contêm carbono em sua estrutura.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) Compostos orgânicos têm carbono, mas não formam ligações com hidrogênio.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) Compostos orgânicos contêm carbono e hidrogênio, e seus comportamentos químicos são diferentes dos carbonatos e óxidos de carbono.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0"
                                onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) Compostos orgânicos são apenas encontrados em seres vivos.</span></li>


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