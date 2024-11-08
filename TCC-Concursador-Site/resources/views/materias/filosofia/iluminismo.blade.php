
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="mb-4 text-gray-500 underline inline-block">Matérias</a>
            <p class="mb-4 text-gray-500 inline-block mx-2">></p>
            <a href="{{ route('materias', ['section' => 'filosofia']) }}#filosofia" class="mb-4 text-gray-500 underline inline-block">Filosofia</a>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-[80px]">
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Introdução ao Iluminismo</h1>

                <p class="text-black">
                    O Iluminismo foi um movimento intelectual e cultural que floresceu na Europa durante os séculos XVII e XVIII. 
                    Defendia o uso da razão como o melhor método para entender e transformar o mundo, questionando tradições e promovendo valores 
                    como liberdade, igualdade e progresso. Inspirou revoluções e mudanças sociais profundas, buscando libertar a sociedade das superstições 
                    e dogmas, especialmente da religião e do absolutismo.
                </p>
                <br>
                
                <img class="mt-6 w-96" src="{{asset('imagens/iluminismo.webp')}}" alt="">

                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#razão" class="text-kblue hover:text-black hover:!text-black">1- Valorização da Razão</a></li>
                        <li><a href="#ciencia" class="text-kblue hover:text-black hover:!text-black">2- A Ciência como Base</a></li>
                        <li><a href="#direitos" class="text-kblue hover:text-black hover:!text-black">3- Direitos Naturais e Igualdade</a></li>
                    </ul>
                </div>
                <br>
                
                <h2 id="razão" class="text-3xl font-Montserrat font-bold text-black mb-4">Valorização da Razão</h2>
                <p class="text-black">
                    O Iluminismo colocava a razão no centro do pensamento humano, acreditando que o conhecimento racional era a chave para o progresso. 
                    Esse ideal defendia a capacidade de cada indivíduo questionar e descobrir a verdade por conta própria, sem se submeter cegamente às autoridades religiosas 
                    ou políticas. Essa ênfase na racionalidade foi essencial para o desenvolvimento científico e cultural da época.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/razao.webp')}}" alt="">
                <br><br>

                <h2 id="ciencia" class="text-3xl font-Montserrat font-bold text-black mb-4">A Ciência como Base</h2>
                <p class="text-black">
                    Os pensadores iluministas consideravam a ciência uma ferramenta essencial para a compreensão e transformação do mundo. 
                    Buscavam explicações racionais e experimentais para os fenômenos naturais, rejeitando superstições e tradições sem fundamento. 
                    Esse enfoque contribuiu para avanços notáveis em várias áreas do conhecimento e estabeleceu a ciência como pilar da sociedade moderna.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/ciencia.jpg')}}" alt="">
                <br><br>

                <h2 id="direitos" class="text-3xl font-Montserrat font-bold text-black mb-4">Direitos Naturais e Igualdade</h2>
                <p class="text-black">
                    O Iluminismo também popularizou a ideia de que todos os seres humanos possuem direitos naturais, inalienáveis e universais, como a liberdade e a igualdade. 
                    Esses conceitos impulsionaram movimentos contra a escravidão, a desigualdade de classes e os governos absolutistas. O pensamento iluminista influenciou 
                    diretamente a Declaração de Independência dos Estados Unidos e a Revolução Francesa, entre outros eventos históricos marcantes.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/direitos-naturais.jpg')}}" alt="">
                <br><br>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Qual dos seguintes princípios foi central para o Iluminismo?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) Submissão total às autoridades religiosas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) Valorização da razão e do conhecimento científico.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) Rejeição completa da liberdade individual.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) Defesa do governo absoluto e hereditário.</span></li>
                        
                        <!-- Outros exercícios de múltipla escolha -->
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
