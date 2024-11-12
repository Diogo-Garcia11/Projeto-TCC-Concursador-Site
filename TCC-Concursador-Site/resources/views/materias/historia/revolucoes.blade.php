<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p>
            <a href="{{ route('materias', ['section' => 'historia']) }}#historia" class="mb-4 text-gray-500 underline inline-block">História</a>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Revoluções e Movimentos Sociais</h1>
                <p class="text-black">
                    As revoluções e os movimentos sociais ao longo da história representam transformações profundas 
                    na forma como a sociedade, a cultura e a religião são vistas e praticadas. Esses movimentos impactaram 
                    as mentalidades e influenciaram mudanças nas instituições, nas relações de poder e no pensamento filosófico. 
                    A seguir, exploramos quatro movimentos de grande importância: Humanismo, Renascimento Cultural, Reforma 
                    Protestante e Contra-Reforma.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/revolucoes_movimentos.webp')}}" alt="Imagem ilustrativa sobre Revoluções e Movimentos Sociais">

                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#humanismo" class="text-kblue hover:text-black hover:!text-black">1- Humanismo</a></li>
                        <li><a href="#renascimento" class="text-kblue hover:text-black hover:!text-black">2- Renascimento Cultural</a></li>
                        <li><a href="#reforma" class="text-kblue hover:text-black hover:!text-black">3- Reforma Protestante</a></li>
                        <li><a href="#contra-reforma" class="text-kblue hover:text-black hover:!text-black">4- Contra-Reforma</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">5- Exercícios Práticos</a></li>
                    </ul>
                </div>

                <h2 id="humanismo" class="text-3xl font-Montserrat font-bold text-black mb-4">Humanismo</h2>
                <p class="text-black">
                    O Humanismo foi um movimento intelectual que surgiu na Europa durante o século XIV e influenciou 
                    diversas áreas do conhecimento, como literatura, filosofia e artes. O foco do Humanismo era a valorização 
                    do ser humano e de suas capacidades racionais, em contraste com a visão teocêntrica da Idade Média, que 
                    colocava Deus no centro de todas as coisas. Com o Humanismo, o ser humano passou a ser visto como o centro 
                    das reflexões filosóficas, e o estudo das obras clássicas gregas e romanas foi revitalizado. Este movimento 
                    também influenciou o desenvolvimento de ideais de liberdade e dignidade humana, influenciando pensadores 
                    e artistas do Renascimento.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/humanismo.webp')}}" alt="Imagem sobre Humanismo">

                <h2 id="renascimento" class="text-3xl font-Montserrat font-bold text-black mb-4">Renascimento Cultural</h2>
                <p class="text-black">
                    O Renascimento Cultural foi um período de intensas transformações nas artes, nas ciências e no pensamento, 
                    que se estendeu do século XIV ao XVII. Inspirado pelo Humanismo, o Renascimento representou um renascimento 
                    dos valores e das técnicas da Antiguidade Clássica. Os artistas e cientistas do Renascimento buscavam entender 
                    e representar o mundo de maneira realista, utilizando novas técnicas, como a perspectiva nas artes visuais e 
                    métodos de observação e experimentação nas ciências. Figuras como Leonardo da Vinci, Michelangelo e Galileu 
                    Galilei foram grandes expoentes do Renascimento, e suas obras e descobertas influenciam a cultura ocidental até hoje.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/renascimento.webp')}}" alt="Imagem sobre o Renascimento Cultural">

                <h2 id="reforma" class="text-3xl font-Montserrat font-bold text-black mb-4">Reforma Protestante</h2>
                <p class="text-black">
                    A Reforma Protestante foi um movimento religioso que teve início no século XVI e desafiou as práticas da 
                    Igreja Católica. Liderada por figuras como Martinho Lutero, João Calvino e Ulrico Zuínglio, a Reforma 
                    questionava a venda de indulgências e a autoridade papal. A partir das 95 teses de Lutero, em 1517, uma 
                    série de críticas eclodiram em toda a Europa, levando à formação de diversas igrejas protestantes e mudando 
                    o cenário religioso, político e cultural. A Reforma teve um grande impacto na cultura ocidental, promovendo 
                    a ideia de liberdade de crença e incentivando a tradução da Bíblia para diversas línguas, tornando-a mais 
                    acessível para o povo.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/reforma_protestante.webp')}}" alt="Imagem sobre a Reforma Protestante">

                <h2 id="contra-reforma" class="text-3xl font-Montserrat font-bold text-black mb-4">Contra-Reforma</h2>
                <p class="text-black">
                    A Contra-Reforma, também conhecida como Reforma Católica, foi a resposta da Igreja Católica às críticas 
                    levantadas pela Reforma Protestante. Iniciado no século XVI, este movimento visava reformar a própria Igreja 
                    Católica, eliminando práticas abusivas e reafirmando doutrinas tradicionais. O Concílio de Trento (1545-1563) 
                    foi um marco da Contra-Reforma, onde foram discutidas e reforçadas práticas como a importância dos sacramentos, 
                    a autoridade papal e a presença real de Cristo na Eucaristia. A Contra-Reforma também impulsionou a criação da 
                    Companhia de Jesus, ou Ordem dos Jesuítas, que teve um papel central na educação e na difusão do catolicismo 
                    pelo mundo.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/contra_reforma.jpeg')}}" alt="Imagem sobre a Contra-Reforma">

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Qual movimento cultural foi influenciado pelo Humanismo e enfatizou o estudo das obras clássicas?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Contra-Reforma</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Renascimento Cultural</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Reforma Protestante</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Humanismo</span></li>

                        <li class="mb-2 mt-4">
                            <p>2) Quem foi o líder da Reforma Protestante que escreveu as 95 teses?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Martinho Lutero</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Leonardo da Vinci</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Galileu Galilei</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) João Calvino</span></li>
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

