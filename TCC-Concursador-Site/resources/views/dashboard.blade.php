<x-app-layout>
@foreach ($notasPorCategoria as $categoria => $dados)
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h3>{{ ucfirst($categoria) }}</h3>

                @if ($dados['ultimaNota'])
                    <p>Última nota: {{ $dados['ultimaNota']->totalNota }} ({{ number_format($dados['percentualUltimaNota'], 2) }}%) de {{ $dados['totalQuestoes'] }} questões</p>

                    @if ($dados['segundaNota'])
                        <p>Nota Anterior: {{ $dados['segundaNota']->totalNota }}</p>
                        
                        @if ($dados['comparacao']['diferenca'] > 0)
                            <p style="color: green;">Você melhorou: +{{ number_format($dados['comparacao']['diferenca'], 2) }}%</p>
                        @elseif ($dados['comparacao']['diferenca'] < 0)
                            <p style="color: red;">Você piorou: {{ number_format($dados['comparacao']['diferenca'], 2) }}%</p>
                        @else
                            <p>Você manteve o mesmo desempenho.</p>
                        @endif
                    @else
                        <p>Esta é a sua única nota registrada para esta categoria.</p>
                    @endif
                @else
                    <p>Nenhuma nota registrada para {{ ucfirst($categoria) }}</p>
                @endif

                <hr>
            </div>
        </div>
    </div>
</div>
@endforeach

    
</x-app-layout>