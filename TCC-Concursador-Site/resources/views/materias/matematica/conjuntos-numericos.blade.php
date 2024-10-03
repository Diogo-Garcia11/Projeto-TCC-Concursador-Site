<x-app-layout>
    <style>
       

        .radio-container {
            display: flex;
            align-items: center;
            margin: 8px 0;
            cursor: pointer;
            
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .radio-checked {
            background-color: green;
            /* Fundo verde para resposta correta */
            color: white;
        }

        .radio-wrong {
            background-color: red;
            /* Fundo vermelho para resposta errada */
            color: white;
        }

        .radio-text {
            margin-left: 10px;
            /* Espaçamento entre o botão e o texto */
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('materias')}}" class="p-3">Matemática</a>
            <h1 class="text-3xl font-Montserrat text-genericwhite p-2">Conjuntos númericos</h1>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <p>loremLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et sodales mauris. Proin at est consectetur, gravida leo vitae, convallis nulla. Suspendisse potenti. Sed erat purus, maximus eget orci et, pretium tempor elit. Phasellus lacinia nisi eget aliquam sodales. Proin turpis risus, dictum accumsan libero quis, consectetur rhoncus est. Duis tristique commodo neque, in feugiat ante rhoncus quis. Vivamus eget porta tellus. Nulla placerat augue a luctus maximus. Nunc efficitur sapien laoreet eleifend volutpat.</p>
                    <img class="m-5" src="{{asset('imagens/conjuntos.png')}}" alt="">
                    <h2 class="text-3xl font-Montserrat text-black p-2">Tópicos</h2>
                    <div class="mb-4">
                        <ul>
                            <li><a href="">1- cu</a></li>
                            <li><a href="">2- djfijf</a></li>
                            <li><a href="">3- dklfjdkl</a></li>
                            <li><a href="">4- nfdjkfjd</a></li>
                            <li><a href="">5- nfdjkfjd</a></li>
                        </ul>
                    </div>
                    <h2 class="text-3xl font-Montserrat text-black mb-4">Oq sao conjuntos numericos</h2>
                    <p class="text-justify mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et sodales mauris. Proin at est consectetur, gravida leo vitae, convallis nulla. Suspendisse potenti. Sed erat purus, maximus eget orci et, pretium tempor elit. Phasellus lacinia nisi eget aliquam sodales. Proin turpis risus, dictum accumsan libero quis, consectetur rhoncus est. Duis tristique commodo neque, in feugiat ante rhoncus quis. Vivamus eget porta tellus. Nulla placerat augue a luctus maximus. Nunc efficitur sapien laoreet eleifend volutpat.
                        Aenean mollis, lacus nec bibendum eleifend, eros magna congue elit, in luctus justo augue sed ligula. Aenean ipsum leo, volutpat ut pulvinar et, ornare ac orci. Sed diam sem, ultrices et pellentesque nec, consectetur nec quam. Integer ullamcorper luctus ex. Sed et est erat. Fusce fringilla hendrerit ex, id vulputate tellus auctor sed. Integer rhoncus sit amet mauris nec tempus. Curabitur interdum eget lorem at elementum. Mauris ultricies non lectus vel ornare. Nam augue lacus, efficitur id nisl in, dapibus feugiat lorem. Nullam neque risus, blandit eu molestie vel, volutpat vulputate eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur a sagittis nisl, tincidunt iaculis libero.</p>
                    <div class="flex justify-center">
                        <img class="p-1 mb-4" src="{{asset('imagens/emoji.jpg')}}" alt="">
                    </div>
                    <h2 class="text-3xl font-Montserrat text-black p-2 mb-4">Exercícios</h2>
                    <div class="mb-4">
                        <ul>
                            <li class="mb-2">
                                <p>1) kdjfklsd</p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">Sla</span></li>
                            <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">Sla</span></li>
                            <li class="radio-container"><input type="radio" name="questao-1" value="1" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">Sim</span></li>
                            <li class="radio-container"><input type="radio" name="questao-1" value="0" onclick="checkAnswer(event, 'questao-1')"><span class="radio-text">Sla</span></li><br>

                            <li class="mb-2">
                                <p>1) kdjfklsd</p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">Sla</span></li>
                            <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">Sla</span></li>
                            <li class="radio-container"><input type="radio" name="questao-2" value="1" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">Sim</span></li>
                            <li class="radio-container"><input type="radio" name="questao-2" value="0" onclick="checkAnswer(event, 'questao-2')"><span class="radio-text">Sla</span></li><br>

                            <li class="mb-2">
                                <p>1) kdjfklsd</p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">Sla</span></li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">Sla</span></li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="1" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">Sim</span></li>
                            <li class="radio-container"><input type="radio" name="questao-3" value="0" onclick="checkAnswer(event, 'questao-3')"><span class="radio-text">Sla</span></li><br>

                            <li class="mb-2">
                                <p>1) kdjfklsd</p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">Sla</span></li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">Sla</span></li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="1" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">Sim</span></li>
                            <li class="radio-container"><input type="radio" name="questao-4" value="0" onclick="checkAnswer(event, 'questao-4')"><span class="radio-text">Sla</span></li><br>

                            <li class="mb-2">
                                <p>1) kdjfklsd</p>
                            </li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">Sla</span></li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">Sla</span></li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="1" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">Sim</span></li>
                            <li class="radio-container"><input type="radio" name="questao-5" value="0" onclick="checkAnswer(event, 'questao-5')"><span class="radio-text">Sla</span></li>

                            
                        </ul>
                    </div>
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
</x-app-layout>