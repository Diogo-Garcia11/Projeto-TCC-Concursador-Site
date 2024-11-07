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
                <h1 class="text-3xl font-Montserrat font-bold text-black mb-[20px]">Introdução ao Marxismo</h1>

                <p class="text-black">
                    O Marxismo é uma teoria econômica, social e política criada por Karl Marx e Friedrich Engels no século XIX. 
                    Baseia-se na ideia de que a história da sociedade é marcada por uma luta de classes, onde a classe trabalhadora (proletariado) 
                    é explorada pela classe dominante (burguesia). O objetivo do Marxismo é compreender essa relação de exploração e propor uma 
                    mudança estrutural para criar uma sociedade sem classes, onde não haja exploração de uma classe sobre a outra.
                </p>
                
                <img class="mt-6 w-96" src="{{asset('imagens/marxismo.webp')}}" alt="">

                <br>

                <h2 class="text-3xl font-Montserrat font-bold text-black mt-6">Tópicos</h2>
                <div class="mb-4 mt-4">
                    <ul>
                        <li><a href="#materialismo" class="text-kblue hover:text-black hover:!text-black">1- Materialismo Histórico e Dialético</a></li>
                        <li><a href="#mais-valia" class="text-kblue hover:text-black hover:!text-black">2- Mais-valia</a></li>
                        <li><a href="#luta" class="text-kblue hover:text-black hover:!text-black">3- Luta de Classes</a></li>
                    </ul>
                </div>
                
                <br>
                
                <h2 id="materialismo" class="text-3xl font-Montserrat font-bold text-black mb-4">Materialismo Histórico e Dialético</h2>
                <p class="text-black">
                    O materialismo histórico é a metodologia proposta por Marx para entender a história humana. 
                    Ele argumenta que o desenvolvimento das sociedades é impulsionado por mudanças nas forças e relações de produção. 
                    A luta entre classes sociais surge a partir dessas relações, gerando conflitos que transformam a sociedade. 
                    O materialismo dialético, por sua vez, é a filosofia que orienta a análise marxista, baseando-se na ideia de que tudo 
                    está em constante mudança e é resultado de contradições internas.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/materialismo.jpg')}}" alt="">

                <br><br>

                <h2 id="mais-valia" class="text-3xl font-Montserrat font-bold text-black mb-4">Mais-valia</h2>
                <p class="text-black">
                    A mais-valia é um conceito central no pensamento de Marx, que descreve a forma como os capitalistas obtêm lucro explorando 
                    o trabalho dos trabalhadores. Ela ocorre quando o trabalhador produz valor além do necessário para cobrir seu próprio salário, 
                    gerando um excedente que é apropriado pelo empregador. Esse excedente é o que sustenta o sistema capitalista e permite a acumulação de capital.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/mais-valia.webp')}}" alt="">

                <br><br>

                <h2 id="luta" class="text-3xl font-Montserrat font-bold text-black mb-4">Luta de Classes</h2>
                <p class="text-black">
                    A luta de classes é a força motriz da história, segundo Marx. Ele argumenta que toda sociedade está dividida em classes 
                    com interesses opostos, o que leva a conflitos. No capitalismo, a principal luta é entre a burguesia, que possui os meios de produção, 
                    e o proletariado, que vende sua força de trabalho. A teoria marxista sugere que, eventualmente, essa luta levará a uma revolução onde o proletariado tomará o poder, 
                    abolindo a propriedade privada dos meios de produção e criando uma sociedade socialista.
                </p>
                <img class="mt-6 w-96" src="{{asset('imagens/luta-de-classes.jpg')}}" alt="">

                <br><br>

                <h2 id="exercicios" class="text-3xl font-Montserrat font-bold text-black mt-6">Exercícios</h2>
                <div class="mt-6">
                    <ul class="text-black">
                        <li class="mb-2">
                            <p>1) Segundo o Marxismo, a mais-valia é o conceito que descreve:</p>
                        </li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">A) A quantidade de capital acumulado pelos trabalhadores.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">B) O valor que o trabalhador recebe como salário.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="1" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">C) O valor excedente produzido pelo trabalhador e apropriado pelo capitalista.</span></li>
                        <li class="radio-container"><input type="radio" name="questao-1" value="0" 
                        onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">D) A propriedade dos meios de produção pelo proletariado.</span></li>
                        
                        <!-- Outros exercícios de múltipla escolha -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
