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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Guerras Mundiais</h1>
                <p class="text-black">
                    As Guerras Mundiais foram dois conflitos de proporções globais que transformaram o mundo em termos políticos, 
                    econômicos e sociais. Suas consequências afetaram a geopolítica mundial, as tecnologias militares e as alianças 
                    internacionais. Neste conteúdo, vamos explorar as causas, os principais eventos e as consequências da Primeira 
                    e da Segunda Guerra Mundial.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/guerras_mundiais.webp')}}" alt="Imagem ilustrativa das Guerras Mundiais">

                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#primeira-guerra" class="text-kblue hover:text-black hover:!text-black">1- Primeira Guerra Mundial</a></li>
                        <li><a href="#segunda-guerra" class="text-kblue hover:text-black hover:!text-black">2- Segunda Guerra Mundial</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">3- Exercícios Práticos</a></li>
                    </ul>
                </div>

                <h2 id="primeira-guerra" class="text-3xl font-Montserrat font-bold text-black mb-4">Primeira Guerra Mundial</h2>
                <p class="text-black">
                    A Primeira Guerra Mundial, que ocorreu entre 1914 e 1918, foi desencadeada pelo assassinato do arquiduque 
                    Francisco Ferdinando da Áustria, herdeiro do trono austro-húngaro. Esse evento foi o estopim para uma série de 
                    alianças militares que já estavam em tensão na Europa. Os países foram divididos em dois blocos: a Tríplice 
                    Aliança, formada por Alemanha, Áustria-Hungria e Itália, e a Tríplice Entente, composta por França, Reino Unido 
                    e Rússia. Este conflito marcou o uso de novas tecnologias militares, como tanques, armas químicas e aviões, e 
                    causou a morte de milhões de pessoas. A guerra terminou com a assinatura do Tratado de Versalhes, que impôs 
                    pesadas sanções à Alemanha, e o conflito deixou um impacto profundo na sociedade europeia.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/primeira_guerra_mundial.jpg')}}" alt="Imagem sobre a Primeira Guerra Mundial">

                <h2 id="segunda-guerra" class="text-3xl font-Montserrat font-bold text-black mb-4">Segunda Guerra Mundial</h2>
                <p class="text-black">
                    A Segunda Guerra Mundial ocorreu entre 1939 e 1945, sendo desencadeada pela invasão da Polônia pela Alemanha 
                    nazista, liderada por Adolf Hitler. Este conflito envolveu duas grandes alianças: os Aliados (compostos por 
                    Reino Unido, União Soviética, Estados Unidos e outros) e o Eixo (Alemanha, Itália e Japão). A guerra foi marcada 
                    por batalhas em diversos continentes, pelo genocídio do Holocausto, e pelo uso de bombas atômicas nas cidades 
                    japonesas de Hiroshima e Nagasaki pelos Estados Unidos. A Segunda Guerra terminou com a derrota do Eixo e trouxe 
                    profundas mudanças políticas e econômicas. Este conflito foi um marco na história contemporânea e levou à criação 
                    das Nações Unidas, com o objetivo de prevenir futuros conflitos.
                </p>

                <img class="mt-6 w-96" src="{{asset('imagens/segunda_guerra_mundial.webp')}}" alt="Imagem sobre a Segunda Guerra Mundial">

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Qual foi o evento desencadeador da Primeira Guerra Mundial?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Invasão da Polônia</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Assassinato do arquiduque Francisco Ferdinando</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Ataque a Pearl Harbor</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Batalha de Stalingrado</span></li>

                        <li class="mb-2 mt-4">
                            <p>2) Qual dos eventos abaixo marcou o final da Segunda Guerra Mundial?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Bombardeio de Hiroshima e Nagasaki</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Assinatura do Tratado de Versalhes</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Entrada dos EUA na guerra</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" 
                        onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Batalha de Midway</span></li>
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
