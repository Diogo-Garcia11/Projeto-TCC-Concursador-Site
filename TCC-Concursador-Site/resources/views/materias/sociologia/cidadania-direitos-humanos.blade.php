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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Direitos humanos e cidadania</h1>
                <p class="text-black">
                    Direitos Humanos e Cidadania são conceitos fundamentais para a construção de uma sociedade justa e igualitária. Ambos estão interligados, mas têm significados distintos, e sua compreensão é crucial para entender o papel do indivíduo na sociedade e o papel do Estado em garantir esses direitos.</p>
                <img class="mt-6 w-96" src="{{asset('imagens/movimentos.jpg')}}" alt="">
                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#direitos-humanos" class="text-kblue hover:text-black hover:!text-black">1- Direitos humanos</a></li>
                        <li><a href="#cidadania" class="text-kblue hover:text-black hover:!text-black">2- Cidadania</a></li>
                        <li><a href="#relacao" class="text-kblue hover:text-black hover:!text-black">3- Relação entre direitos humanos e cidadania</a></li>
                        <li><a href="#exercicios" class="text-kblue hover:text-black hover:!text-black">4- Exercicios</a></li>
                    </ul>
                </div>
                <h2 id="direitos-humanos" class="text-3xl font-Montserrat font-bold text-black mb-4">Direitos humanos</h2>
                <p class="text-justify mb-4 text-black">Direitos humanos são direitos universais que pertencem a todos os seres humanos, independentemente de sua nacionalidade, etnia, gênero, religião, status social, ou qualquer outra característica. Esses direitos são reconhecidos como essenciais para a dignidade humana e incluem uma série de liberdades e garantias que devem ser protegidas por todos os governos.

                    <br><br>A base dos direitos humanos modernos está na Declaração Universal dos Direitos Humanos (DUDH), adotada pela Assembleia Geral da Organização das Nações Unidas (ONU) em 1948. A DUDH define os direitos que todos os seres humanos devem ter, sem distinção. Ela inclui direitos civis, políticos, econômicos, sociais e culturais.

                    <br><br>Alguns exemplos de direitos humanos incluem:

                    <br><br>Direito à vida: Nenhuma pessoa deve ser privada de sua vida arbitrariamente.
                    <br><br>Liberdade de expressão: Todas as pessoas têm o direito de expressar suas opiniões sem censura ou repressão.
                    <br><br>Direito à educação: Toda pessoa tem o direito de ter acesso a uma educação básica.
                    <br><br>Direito à igualdade: Todas as pessoas devem ser tratadas de forma igual perante a lei, sem discriminação.
                    <br><br>Direito à saúde: Todos têm o direito de acessar serviços de saúde e a cuidados médicos essenciais.
                    <br><br>Liberdade de associação: Toda pessoa tem o direito de formar e participar de organizações pacíficas.
                    <br><br>Além disso, tratados internacionais como a Convenção sobre os Direitos das Crianças, a Convenção sobre a Eliminação de Todas as Formas de Discriminação contra a Mulher (CEDAW), e a Convenção Internacional sobre a Eliminação de Todas as Formas de Discriminação Racial (CERD) buscam garantir a proteção de grupos específicos, como crianças, mulheres, e minorias raciais.
                </p>

                <h2 id="origem-dos-movimentos" class="text-3xl font-Montserrat font-bold text-black mb-4">Cidadania</h2>
                <p class="text-justify mb-4 text-black">
                    Cidadania refere-se à condição jurídica e política de um indivíduo dentro de um Estado. Ela confere a ele direitos e deveres com relação à nação, bem como o direito de participar da vida política e social do país. Ser cidadão implica ter o direito de votar, ser votado, acessar serviços públicos, e participar ativamente da sociedade. Também implica responsabilidades, como pagar impostos e cumprir as leis do país.

                    <br><br>A cidadania está intimamente ligada ao conceito de Estado-nação, que é o sistema político que organiza a sociedade em uma determinada área geográfica e reconhece seus cidadãos com direitos e deveres.

                    <br><br>Os principais direitos de um cidadão incluem:

                    <br><br>Direito ao voto: Participação nas eleições e escolha de representantes políticos.
                    <br><br>Direito à liberdade de movimento: A liberdade para se deslocar dentro e fora do país.
                    <br><br>Direito ao trabalho: O direito de buscar e exercer qualquer profissão dentro da lei.
                    <br><br>Direito à segurança social: Acesso à assistência social, benefícios e apoio em caso de necessidade.
                    <br><br>Direito à igualdade: Garantia de igualdade perante a lei e proteção contra discriminação.
                </p>
                <div class="flex justify-center">
                    <img class="mt-6 w-96" src="{{asset('imagens/cidadania.png')}}" alt="">
                </div>
                <br><br>
                <h2 id="relacao" class="text-3xl font-Montserrat font-bold text-black mb-4">Relação entre direitos humanos e cidadania</h2>
                <p class="text-justify mb-4 text-black"> Embora direitos humanos sejam universais e aplicáveis a todos os indivíduos, a cidadania é um conceito mais específico, relacionado ao vínculo de um indivíduo com um Estado particular. A cidadania confere ao indivíduo uma série de direitos, como o direito ao voto e à participação política, que podem não ser automaticamente garantidos por direitos humanos universais, dependendo do contexto jurídico de cada país.

                    <br><br>Contudo, todos os cidadãos devem ter seus direitos humanos respeitados. Isso inclui o direito à igualdade, à liberdade de expressão e à liberdade de associação, entre outros. A proteção dos direitos humanos é uma obrigação do Estado, que, como parte de sua soberania, deve garantir esses direitos a todos os indivíduos dentro de seu território, sejam eles cidadãos ou estrangeiros.

                    <br><br>Exemplo prático de relação entre direitos humanos e cidadania:
                    <br>Um cidadão de um país tem, por exemplo, o direito de votar, o que é um direito de cidadania. Contudo, esse mesmo indivíduo tem direitos humanos, como o direito à liberdade de expressão e à privacidade, que não são limitados à sua condição de cidadão, mas a todos os seres humanos.

                </p>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) O que são direitos humanos?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) São direitos exclusivos de cidadãos de um país específico.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) São direitos universais que pertencem a todos os seres humanos, independentemente de sua nacionalidade, etnia, gênero, religião ou status social.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) São direitos que se aplicam apenas às pessoas nascidas dentro das fronteiras de um Estado-nação.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) São direitos temporários que podem ser revogados a qualquer momento.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>2) Qual é a principal característica da cidadania?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">A) Ela garante a todos os indivíduos o direito à saúde e à educação, independentemente do país em que vivem.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="1" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">B) Ela está ligada ao vínculo de um indivíduo com um Estado particular e confere direitos e deveres relacionados a esse Estado.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">C) Ela é um conceito exclusivamente filosófico, sem relação com questões jurídicas ou políticas.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">D) Ela limita a participação política a apenas um grupo de pessoas com maior poder econômico.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>3) De acordo com o texto, o que caracteriza a relação entre direitos humanos e cidadania?</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">A) Os direitos humanos são exclusivos de cidadãos, enquanto a cidadania não garante direitos humanos a todos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">B) Não existe relação entre direitos humanos e cidadania, são conceitos completamente distintos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">C) A cidadania garante todos os direitos humanos, mas os direitos humanos não são aplicáveis a cidadãos estrangeiros.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-3" value="1" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">D) Os direitos humanos são universais e se aplicam a todos os indivíduos, enquanto a cidadania confere direitos específicos de participação política e social dentro de um Estado.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>4) Qual dos seguintes direitos é garantido pela Declaração Universal dos Direitos Humanos? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="1" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">A) Direito à vida, à liberdade de expressão, à educação, e à saúde.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">B) Direito ao voto e à participação política apenas para cidadãos maiores de 30 anos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">C) Direito exclusivo à proteção para grupos religiosos específicos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">D) Direito à liberdade econômica, sem limites, independentemente de outros direitos.</span></li>
                        <br>

                        <li class="mb-2">
                            <p>5)  Qual é um exemplo de direito cidadão mencionado no texto? </p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">A) Direito à liberdade de expressão em qualquer país.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">B) Direito à proteção contra a tortura, que se aplica a todos os indivíduos.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="1" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">C) Direito ao voto e à participação política nas eleições.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">D) Direito à igualdade de gênero em todas as culturas.</span></li>


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