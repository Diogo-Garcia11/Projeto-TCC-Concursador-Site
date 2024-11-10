<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p> <!-- Adicionei uma margem horizontal -->
            <a href="{{ route('materias', ['section' => 'sociologia']) }}#sociologia" class="mb-4 text-gray-500 underline inline-block">Sociologia</a>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Política, Estado e Governo</h1>
                <p class="text-black">
                    Os conceitos de política, Estado e governo são fundamentais para entender o funcionamento das sociedades modernas e a organização dos poderes públicos. Embora frequentemente usados de forma intercambiável, esses termos têm significados distintos e desempenham papéis diferentes no contexto social e político.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/governo.jpg')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#politica" class="text-kblue hover:text-black hover:!text-black">1- Política</a></li>
                        <li><a href="#estado" class="text-kblue hover:text-black hover:!text-black">2- Estado</a></li>
                        <li><a href="#governo" class="text-kblue hover:text-black hover:!text-black">3- Governo</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4- Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="politica" class="text-3xl font-Montserrat font-bold text-black mb-4">Política</h2>
                <p class="text-justify mb-4 text-black">A política é o processo pelo qual as sociedades organizam e distribuem o poder, as decisões e os recursos. Ela envolve as atividades, práticas e instituições que estão relacionadas à governança e à organização do Estado, assim como à resolução de conflitos e à implementação de políticas públicas.

                    <br><br>Em sua forma mais ampla, a política refere-se a todas as ações que visam influenciar a organização e a gestão da sociedade, envolvendo desde eleições, debates públicos, até o processo de formulação de leis e administração pública.

                    <br><br>A política pode ser entendida em diferentes níveis, como:

                    <br><br>Política nacional: Relacionada à organização do poder em nível de um país.
                    <br><br>Política local: Relacionada às decisões políticas dentro de cidades e estados.
                    <br><br>Política internacional: Refere-se às interações entre diferentes Estados e as relações globais.
                    <br><br>Ela é uma prática contínua e dinâmica, que envolve tanto as ações de indivíduos quanto de grupos organizados, como partidos políticos, movimentos sociais e outras instituições.
                </p>

                <h2 id="estado" class="text-3xl font-Montserrat font-bold text-black mb-4">Estado</h2>
                <p class="text-justify mb-4 text-black">
                    O Estado é uma organização política soberana que detém o poder de legislar, administrar e aplicar as leis em um território definido. O conceito de Estado está relacionado a um sistema de governo que regula as relações internas e externas de uma sociedade.

                    <br><br>O Estado é composto por três elementos principais:

                    <br><br>Território: A área geográfica que o Estado governa, com fronteiras definidas.
                    <br><br>População: O conjunto de pessoas que vivem nesse território e que são regidas pelas leis do Estado.
                    <br><br>Soberania: O poder do Estado de tomar decisões e aplicar as leis de maneira independente, sem interferência externa.

                    <br><br>Além desses três elementos, o Estado exerce suas funções através de instituições que desempenham papéis específicos. Essas instituições podem ser legislativas (responsáveis por criar leis), executivas (que implementam as políticas) e judiciárias (que garantem a aplicação das leis).

                    <br><br>Existem diferentes formas de organização do Estado, com base em suas estruturas políticas e sociais, como:

                    <br><br>Estado democrático de direito: Onde os direitos dos cidadãos são protegidos e as autoridades são limitadas por uma constituição.
                    <br><br>Estado autoritário: Onde o poder centralizado pode limitar as liberdades individuais.
                    <br><br>Estado federal: Onde há divisão de competências e poder entre a União e os estados ou províncias.
                    <br><br>Estado unitário: Onde o poder é concentrado no governo central.
                </p>
                <div class="flex justify-center">
                    <img class="mt-6 w-96" src="{{asset('imagens/politica.jpg')}}" alt="">
                </div>
                <br><br>
                <h2 id="governo" class="text-3xl font-Montserrat font-bold text-black mb-4">Governo</h2>
                <p class="text-justify mb-4 text-black"> O governo é o conjunto de pessoas e instituições que administram o Estado e tomam decisões em nome da coletividade. O governo é responsável pela administração pública, pela execução das leis e pela implementação das políticas públicas que afetam diretamente a vida dos cidadãos.

                    <br><br>O governo pode ser visto como o aparato temporário e dinâmico do Estado, que se alterna periodicamente através de eleições ou processos de nomeação (como no caso de governos não democráticos). Portanto, o governo é uma instância que se ocupa da gestão e do exercício do poder, mas não é a totalidade do poder do Estado.

                    <br><br>Tipos de Governo
                    <br><br>Os tipos de governo variam de acordo com o modo de organização do poder, e são definidos de acordo com como o poder é exercido:

                    <br><br>Democracia: Onde o poder é exercido pelo povo, diretamente ou através de representantes escolhidos por eleições livres e periódicas. Exemplo: o governo eleito em um regime democrático.

                    <br><br>Monarquia: Onde o chefe do governo é um monarca, como um rei ou imperador, que pode ter poderes limitados ou ser absoluto. A monarquia pode ser constitucional (onde o monarca tem poderes cerimoniais e as decisões políticas são tomadas por um governo eleito) ou absolutista (onde o monarca detém poder absoluto).

                    <br><br>Ditadura: Um regime de governo onde o poder é exercido por uma única pessoa ou por um pequeno grupo, com pouca ou nenhuma limitação legal e política. A ditadura é caracterizada pela ausência de liberdades democráticas e pela repressão a opositores.

                    <br><br>República: Onde o chefe de governo é eleito pelo povo ou por um grupo específico, e o governo é separado do cargo do chefe de Estado. Pode haver repúblicas presidencialistas (onde o presidente é o chefe de Estado e de governo) ou parlamentares (onde o chefe de governo é o primeiro-ministro e o chefe de Estado é um presidente com funções cerimoniais).

                    <br><br>Funções do Governo
                    <br><br>O governo exerce diversas funções essenciais para o funcionamento da sociedade, que incluem:

                    <br><br>Legislar: Criar e reformar leis para garantir a ordem social e responder às necessidades da população.
                    <br><br>Executar políticas públicas: Administrar os recursos do Estado e implementar programas de saúde, educação, segurança, e outros.
                    <br><br>Julgamento e controle: Garantir que as leis sejam cumpridas e resolver disputas, por meio do poder judiciário.
                    <br><br>Defesa e segurança: Proteger o território e a população contra ameaças externas e internas
                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) O que caracteriza o conceito de "Política" no contexto das sociedades modernas?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) A política é a organização e distribuição do poder, decisões e recursos, englobando atividades como debates, administração pública e formulação de leis.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) A política é apenas o processo de realização de eleições.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) A política se refere apenas ao direito de votar nas eleições.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) A política é um conceito relacionado exclusivamente aos governos autoritários.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Qual dos seguintes elementos NÃO faz parte da definição de "Estado"?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Território</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) População</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Soberania</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Sistema de Governo Temporário</span></li>
                        <br>

                        <li class="mb-2">
                            <p>3) Qual é a principal diferença entre o conceito de "Governo" e "Estado"?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) O governo é a estrutura permanente, enquanto o Estado é temporário.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) O governo e o Estado são conceitos idênticos e são usados de forma intercambiável.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) O governo refere-se apenas aos processos eleitorais, enquanto o Estado não tem relação com o poder.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) O governo é composto por instituições que administram o Estado e tomam decisões em nome da coletividade, enquanto o Estado é uma estrutura mais ampla e permanente.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) Em um Estado federal, como o poder é distribuído?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) O poder é distribuído entre a União e os estados ou províncias.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) O poder é concentrado no governo central.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) O poder é exercido apenas por uma autoridade monárquica.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) O poder é exclusivamente legislativo.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5) Quais são as principais funções do governo em uma sociedade?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) Apenas implementar políticas públicas sem se envolver em qualquer outra área.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) Somente legislar e administrar recursos do Estado.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) Criar leis, administrar recursos públicos, resolver disputas judiciais, e proteger a soberania nacional.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) Manter o poder de forma autoritária, sem a participação popular.</span></li>


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