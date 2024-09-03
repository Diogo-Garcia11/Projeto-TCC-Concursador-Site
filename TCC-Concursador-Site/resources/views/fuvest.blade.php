<x-app-layout>
    @csrf
    @foreach($questoes as $questao)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h3>{{ $questao->textoQuestao }}</h3> <br><br>
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
    @endforeach
</x-app-layout>