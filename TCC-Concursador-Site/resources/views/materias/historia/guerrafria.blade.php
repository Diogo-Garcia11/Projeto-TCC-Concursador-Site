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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Geopolítica e Guerra Fria</h1>
                <p class="text-black">
                    A geopolítica no período da Guerra Fria e dos processos de descolonização foi marcada por tensões, disputas de poder 
                    e a reorganização das influências políticas e econômicas em nível global. A Guerra Fria transformou a rivalidade entre 
                    Estados Unidos e União Soviética em um conflito de ideologias e poder, enquanto o movimento de descolonização trouxe 
                    liberdade para muitas nações anteriormente colonizadas.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/guerra_fria_descolonizacao.jpg')}}" alt="Imagem ilustrativa da Guerra Fria e da Descolonização">

                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#guerra-fria" class="text-kblue hover:text-black hover:!text-black">1- Guerra Fria</a></li>
                        <li><a href="#descolonizacao" class="text-kblue hover:text-black hover:!text-black">2- Descolonização</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">3- Exercícios Práticos</a></li>
                    </ul>
                </div>

                <h2 id="guerra-fria" class="text-3xl font-Montserrat font-bold text-black mb-4">Guerra Fria</h2>
                <p class="text-black">
                    A Guerra Fria foi um período de tensões políticas e militares que se estendeu do final da Segunda Guerra Mundial até o 
                    início dos anos 1990. Este conflito não envolveu uma guerra direta entre os Estados Unidos e a União Soviética, mas foi 
                    marcado por disputas ideológicas, econômicas e tecnológicas. De um lado, os Estados Unidos defendiam o capitalismo e a 
                    democracia liberal; do outro, a União Soviética promovia o comunismo. A competição entre essas superpotências levou à 
                    corrida armamentista, à corrida espacial e ao apoio a países alinhados ideologicamente com cada um dos lados, resultando 
                    em guerras por procuração, como a Guerra da Coreia e a Guerra do Vietnã.
                </p>

                <p class="text-black mt-4">
                    A Guerra Fria teve muitos desdobramentos, incluindo a criação da OTAN (Organização do Tratado do Atlântico Norte) pelos 
                    Estados Unidos e seus aliados, e do Pacto de Varsóvia pela União Soviética e seus aliados. Esse cenário bipolar influenciou 
                    as políticas de vários países ao redor do mundo e trouxe o constante medo de um conflito nuclear. O fim da Guerra Fria foi 
                    marcado pela dissolução da União Soviética em 1991, quando o capitalismo e a democracia liberal se tornaram dominantes em 
                    nível global.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/guerra_fria.jpg')}}" alt="Imagem sobre a Guerra Fria">

                <h2 id="descolonizacao" class="text-3xl font-Montserrat font-bold text-black mb-4">Descolonização</h2>
                <p class="text-black">
                    A descolonização foi o processo pelo qual várias colônias europeias na África, Ásia e Caribe conquistaram sua 
                    independência, principalmente após a Segunda Guerra Mundial. O custo humano e econômico do conflito fez com que 
                    as potências coloniais, como França e Reino Unido, tivessem dificuldade em manter controle sobre seus territórios. 
                    Esse processo foi impulsionado também pelo crescimento de movimentos nacionalistas nas colônias, que buscaram o fim 
                    da exploração econômica e a obtenção de autonomia política.
                </p>

                <p class="text-black mt-4">
                    A descolonização trouxe novos desafios para os países recém-independentes, como a criação de governos estáveis, a 
                    superação de divisões étnicas e o desenvolvimento econômico. Em alguns casos, a luta pela independência foi pacífica, 
                    mas em outros, como na Argélia e no Vietnã, houve intensos conflitos. A descolonização alterou o equilíbrio global de 
                    poder e transformou as relações internacionais, fazendo com que os países desenvolvidos precisassem redefinir suas 
                    políticas externas e comerciais em relação às novas nações independentes.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/descolonizacao.webp')}}" alt="Imagem sobre a Descolonização">

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Qual foi um dos principais eventos que marcaram o início da Guerra Fria?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Tratado de Versalhes</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Criação da OTAN</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Revolução Francesa</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Ataque a Pearl Harbor</span></li>

                        <li class="mb-2 mt-4">
                            <p>2) O que caracterizou o processo de descolonização após a Segunda Guerra Mundial?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) O aumento da colonização de países africanos</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) A independência de várias colônias na África e na Ásia</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) A criação do Muro de Berlim</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) A criação das Nações Unidas</span></li>
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
