
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p>
            <a href="{{ route('materias', ['section' => 'fisica']) }}#fisica" class="mb-4 text-gray-500 underline inline-block">Física</a>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">As Leis de Newton</h1>

                <p class="text-black">
                    As Leis de Newton, também conhecidas como leis do movimento, são três princípios fundamentais formulados por Isaac Newton, 
                    que descrevem a relação entre a força aplicada a um corpo e o movimento resultante. Essas leis servem como base para a mecânica 
                    clássica e permitem entender como os objetos interagem e se movem no espaço. Através delas, explicamos desde movimentos simples 
                    até fenômenos complexos envolvendo aceleração e inércia.
                </p>
                
                <img class="mt-6 w-96" src="{{asset('imagens/newton.jpg')}}" alt="Imagem ilustrativa das Leis de Newton">

                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#primeira-lei" class="text-kblue hover:text-black hover:!text-black">1- Primeira Lei de Newton (Lei da Inércia)</a></li>
                        <li><a href="#segunda-lei" class="text-kblue hover:text-black hover:!text-black">2- Segunda Lei de Newton (Princípio Fundamental da Dinâmica)</a></li>
                        <li><a href="#terceira-lei" class="text-kblue hover:text-black hover:!text-black">3- Terceira Lei de Newton (Ação e Reação)</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4- Exercícios Práticos</a></li>
                    </ul>
                </div>
                
                <h2 id="primeira-lei" class="text-3xl font-Montserrat font-bold text-black mb-4">Primeira Lei de Newton (Lei da Inércia)</h2>
                <p class="text-black">
                    A Primeira Lei de Newton, conhecida como a Lei da Inércia, afirma que um corpo em repouso tende a permanecer em repouso, 
                    e um corpo em movimento tende a continuar em movimento em linha reta e com velocidade constante, a menos que uma força externa 
                    atue sobre ele. Em outras palavras, os objetos resistem a mudanças em seu estado de movimento. Isso significa que, para alterar 
                    o movimento de um corpo (seja para acelerar, parar ou mudar sua direção), é necessário aplicar uma força. Essa propriedade, chamada 
                    inércia, é diretamente proporcional à massa do objeto. Objetos mais massivos apresentam maior inércia, ou seja, são mais difíceis 
                    de mover ou parar.
                </p>
                
                <img class="mt-6 w-96" src="{{asset('imagens/inercia.png')}}" alt="">

                <h2 id="segunda-lei" class="text-3xl font-Montserrat font-bold text-black mb-4">Segunda Lei de Newton (Princípio Fundamental da Dinâmica)</h2>
                <p class="text-black">
                    A Segunda Lei de Newton estabelece que a força resultante que atua sobre um corpo é igual ao produto da massa desse corpo pela 
                    sua aceleração. Esta relação é expressa pela fórmula F = m.a, onde F é a força em newtons, m é a massa em quilogramas, e a é a 
                    aceleração em metros por segundo ao quadrado (m/s²). Isso significa que, quanto maior a massa de um objeto, maior será a força 
                    necessária para acelerá-lo. Essa lei explica por que um veículo grande requer um motor mais potente para alcançar a mesma 
                    aceleração de um veículo menor. Além disso, essa relação direta entre força e aceleração permite calcular o efeito de forças 
                    em diferentes situações de movimento, sendo fundamental para o estudo da dinâmica.
                </p>
                
                <img class="mt-6 w-96" src="{{asset('imagens/segundalei.webp')}}" alt="">

                <h2 id="terceira-lei" class="text-3xl font-Montserrat font-bold text-black mb-4">Terceira Lei de Newton (Ação e Reação)</h2>
                <p class="text-black">
                    A Terceira Lei de Newton afirma que para toda ação existe uma reação de igual intensidade e em sentido oposto. Isso significa que, 
                    sempre que um corpo exerce uma força sobre outro, este segundo corpo exerce uma força de mesma intensidade e direção, mas em sentido 
                    contrário, sobre o primeiro. Um exemplo claro dessa lei é o movimento de um barco: quando você empurra a água para trás com o remo, 
                    a água empurra o barco para frente. A Terceira Lei é fundamental para o entendimento de fenômenos naturais e tecnológicos, como o 
                    voo de foguetes, que depende da expulsão de gases em alta velocidade para criar a força de propulsão em direção contrária.
                </p>
                
                <img class="mt-6 w-96" src="{{asset('imagens/terceiralei.webp')}}" alt="">

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Qual é o princípio que explica por que um caminhão em movimento é mais difícil de parar do que uma bicicleta em movimento?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Primeira Lei de Newton, devido à inércia do caminhão.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Segunda Lei de Newton, devido à força de gravidade.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Terceira Lei de Newton, devido à ação e reação.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Nenhuma das alternativas acima.</span></li>
                        
                        <li class="mb-2 mt-4">
                            <p>2) Quando você salta, qual das Leis de Newton explica o motivo de você subir ao empurrar o chão com os pés?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Primeira Lei de Newton, devido à inércia.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Segunda Lei de Newton, devido à força de aceleração.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Terceira Lei de Newton, ação e reação entre seus pés e o chão.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Nenhuma das alternativas acima.</span></li>
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
