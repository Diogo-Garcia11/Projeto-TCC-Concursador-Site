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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">História do Brasil</h1>
                <p class="text-black">
                    A História do Brasil é rica em eventos e transformações que moldaram a nação ao longo dos séculos. 
                    Desde o período da colonização até a formação da República, o país passou por momentos de grande 
                    mudança política, econômica e social. A seguir, exploramos dois dos principais períodos históricos: 
                    a Colonização e o Império, e a República, explicando seus contextos e consequências para a sociedade brasileira.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/historia_brasil.jpg')}}" alt="Imagem ilustrativa sobre a História do Brasil">

                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#colonizacao" class="text-kblue hover:text-black hover:!text-black">1- Colonização e Império</a></li>
                        <li><a href="#republica" class="text-kblue hover:text-black hover:!text-black">2- República</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">3- Exercícios Práticos</a></li>
                    </ul>
                </div>

                <h2 id="colonizacao" class="text-3xl font-Montserrat font-bold text-black mb-4">Colonização e Império</h2>
                <p class="text-black">
                    O período de colonização do Brasil começou em 1500, quando os portugueses chegaram ao território, 
                    inicialmente focados na exploração de recursos naturais, como o pau-brasil. Com o tempo, a colonização 
                    se expandiu, e o sistema de capitanias hereditárias foi implementado para organizar o território e a 
                    exploração econômica. Esse sistema, no entanto, teve limitações, levando à criação do Governo-Geral, 
                    que centralizou a administração. Durante o Império, a independência do Brasil foi declarada em 1822, 
                    e D. Pedro I se tornou o primeiro imperador. A economia do Brasil Império foi baseada principalmente 
                    na produção de café, açúcar e mineração, sustentada por mão de obra escrava, até a abolição da escravidão em 1888.
                </p>
                <p class="text-black">
                    O período imperial também foi marcado por tensões políticas entre liberais e conservadores, bem como 
                    conflitos internos e externos, como a Guerra do Paraguai (1864-1870), que consolidou o Exército Brasileiro 
                    e fortaleceu o nacionalismo. Em 1889, com o crescente descontentamento militar e a pressão por uma mudança 
                    no sistema de governo, a monarquia foi abolida, e o Brasil se tornou uma república.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/colonizacao_imperio.jpeg')}}" alt="Imagem sobre Colonização e Império no Brasil">

                <h2 id="republica" class="text-3xl font-Montserrat font-bold text-black mb-4">República</h2>
                <p class="text-black">
                    A proclamação da República em 1889 trouxe uma nova fase para o Brasil, marcada pela transição de uma 
                    monarquia para um governo republicano. O Brasil passou a ser governado por presidentes e adotou um 
                    sistema federalista. Os primeiros anos da República foram conhecidos como República Velha (1889-1930), 
                    caracterizada pelo domínio das oligarquias, especialmente as elites de São Paulo e Minas Gerais, no 
                    chamado "café com leite", devido à força econômica do café e do leite nas respectivas regiões. Durante 
                    esse período, a política era controlada por interesses locais, o que levou a práticas como o coronelismo.
                </p>
                <p class="text-black">
                    A Revolução de 1930, liderada por Getúlio Vargas, pôs fim à República Velha, e deu início ao Estado 
                    Novo (1937-1945), um regime ditatorial que buscava modernizar o Brasil, impulsionando a industrialização 
                    e as leis trabalhistas. Após a queda de Vargas, o Brasil passou por períodos de instabilidade, incluindo 
                    a Ditadura Militar (1964-1985), que restringiu direitos civis e políticos. A redemocratização em 1985 
                    marcou o retorno do governo civil e a elaboração da Constituição de 1988, que estabelece o Brasil como 
                    uma república democrática. Desde então, o país enfrentou desafios políticos e econômicos, mas também 
                    conquistou avanços em áreas como saúde, educação e inclusão social.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/republica.webp')}}" alt="Imagem sobre a República no Brasil">

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Qual foi o principal produto econômico durante o Brasil Império?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Pau-brasil</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Café</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Algodão</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Ferro</span></li>

                        <li class="mb-2 mt-4">
                            <p>2) Em que ano foi proclamada a República no Brasil?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) 1889</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) 1822</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) 1930</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) 1985</span></li>
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
