<x-app-layout>
    <form action="{{ route('simulados.submit') }}" id="simuladoForm" method="POST">
        @csrf
        <input type="hidden" name="categoria" value="{{ $categoria }}"> <!-- Adiciona a categoria ao formulário para depois ser registrado no banco de dados, não apague-->

        <div style="font-size: 20px; color: white; text-align: center; position: sticky; top: 0; background-color: black; padding: 10px; z-index: 1000;">
            Tempo restante: <span id="tempo">09:30:00</span>
        </div>

        @php $contador = 1; $par =")"; @endphp <!-- Contador inicializado em 1 -->
        @foreach($questoes as $questao)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <h3 class="text-justify">{{ $contador.$par."(".$categoria." ". $questao->anoQuestao . " Questão " . $questao->numeroQuestao . ")" }}
                            @if ($questao->contextoQuestao != null)
                            {{ $questao->contextoQuestao }}
                        </h3> <br>
                        @else

                        @endif
                        @if($questao->imagemQuestao != null)
                        <img src="{{$questao->imagemQuestao}}" alt="Imagem da questão" width="500" height="200"><br>
                        @else

                        @endif
                        <h3>{{$questao->introducaoalternativaQuestao}}</h3>
                        <br><br>
                        @foreach($questao->relAlternativa as $alternativa)

                        @if($alternativa->textoAlternativa != null)
                        <div>
                            <input type="radio" id="alternativa{{ $alternativa->idAlternativa }}" name="questao{{ $questao->idQuestao }}" value="{{ $alternativa->corretaAlternativa }}" class="text-justify">{{ $alternativa->textoAlternativa }} <br>
                        </div>
                        @else

                        @endif

                        @if($alternativa->imagemAlternativa != null)
                        <div>
                            <input type="radio" id="alternativa{{ $alternativa->idAlternativa }}" name="questao{{ $questao->idQuestao }}" value="{{ $alternativa->corretaAlternativa }}"><img src="{{$alternativa->imagemAlternativa}}" alt="Imagem da alternativa" width="500" height="200"><br>
                        </div>
                        @else

                        @endif

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @php $contador++; @endphp <!-- Incrementa o contador -->
        @endforeach
        <input type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;" value="Enviar">
    </form>
    <script>
        var timeLimit = 34200; // 9 horas e meia em segundos 

        function startTimer(duration, display) {
            var timer = duration,
                hours, minutes, seconds;
            var countdown = setInterval(function() {
                hours = parseInt(timer / 3600, 10); // Calcula horas
                minutes = parseInt((timer % 3600) / 60, 10); // Calcula minutos
                seconds = parseInt(timer % 60, 10); // Calcula segundos

                hours = hours < 10 ? "0" + hours : hours;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = hours + ":" + minutes + ":" + seconds;

                if (--timer < 0) {
                    clearInterval(countdown);
                    document.getElementById('simuladoForm').submit(); // Submete o formulário automaticamente
                }
            }, 1000);
        }

        window.onload = function() {
            var display = document.querySelector('#tempo');
            startTimer(timeLimit, display);
        };

          // Armazenando os IDs das questões manualmente
          
        document.getElementById("simuladoForm").addEventListener("submit", function(e) {
            let allAnswered = true; // Variável para verificar se todas as questões foram respondidas

            // Verifica se todas as questões foram respondidas
            questoes.forEach(function(questaoId) {
                if (!document.querySelector('input[name="questao' + questaoId + '"]:checked')) {
                    allAnswered = false; // Se não foi selecionada, define como falso
                    alert("Por favor, responda todas as questões."); // Exibe alerta
                    e.preventDefault(); // Previne o envio do formulário
                    return false; // Para o loop
                }
            });

            return allAnswered; // Retorna true se todas as questões foram respondidas
        });
    </script>
</x-app-layout>