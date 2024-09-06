<x-app-layout>
    <form action="{{ route('simulados.submit') }}" method="POST">
        @csrf
        @php $contador = 1; $par =")";  @endphp <!-- Contador inicializado em 1 -->
        @foreach($questoes as $questao)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <h3>{{ $contador. $par }}.{{ $questao->textoQuestao }}</h3> <br><br>
                        @if($questao->imagemQuestao != null)
                            <img src="{{ asset('imagens/' . $questao->imagemQuestao) }}" alt="Imagem da questão" width="200" height="200">
                        @else

                        @endif
                        @foreach($questao->relAlternativa as $alternativa)
                            <div>
                                <input type="radio" id="alternativa{{ $alternativa->idAlternativa }}" name="questao{{ $questao->idQuestao }}" value="{{ $alternativa->corretaAlternativa }}">{{ $alternativa->textoAlternativa }} <br>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @php $contador++; @endphp <!-- Incrementa o contador -->
        @endforeach
        <input type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;" value="Enviar">
    </form>
</x-app-layout>