<x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <x-slot name="header">
        <a id="a_header"></a>
        <h2 class="font-Monserrat text-xl lg:text-xs text-gray-800 dark:text-gray-200 leading-tight">
            <ul class="flex flex-row justify-center space-x-4">
                @foreach($notasPorCategoria as $categoria => $dados)
                    <li class="inline-flex">
                        <button class="text-white hover:text-gray-500 dark:text-white dark:hover:text-gray-300 px-4" 
                                onclick="showTab('{{ $categoria }}')">
                            {{ ucfirst($categoria) }}
                        </button>
                    </li>
                @endforeach
            </ul>
        </h2>
    </x-slot>

    @foreach ($notasPorCategoria as $categoria => $dados)
        <div id="tab-{{ $categoria }}" class="tab-content py-12" style="display:none;">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3>{{ ucfirst($categoria) }}</h3>

                        @if ($dados['ultimaNota'])
                            <p>Última nota: {{ $dados['ultimaNota']->totalNota }}/{{ $dados['totalQuestoes'] }} questões ({{ number_format($dados['percentualUltimaNota'], 2) }}%)</p>

                            @if ($dados['segundaNota'])
                                <p>Nota Anterior: {{ $dados['segundaNota']->totalNota }}</p>
                                @if ($dados['segundaNota']->totalNota == 0 && $dados['ultimaNota']->totalNota > 0)
                                    <p >Parabéns! Você melhorou: <span style="color: green;">+{{ number_format(100, 2) }}%</span>. Continue com o bom trabalho. </p>
                                @elseif ($dados['comparacao']['diferenca'] > 0)
                                    <p>Parabéns! Você melhorou: <span style="color: green;">+{{ number_format($dados['comparacao']['diferenca'], 2) }}%</span>. Continue com o bom trabalho.</p>
                                    @elseif ($dados['comparacao']['diferenca'] < 0)
                                    <p >Não foi desta vez. Infelizmente você ficou: <span style="color: red;">{{ number_format($dados['comparacao']['diferenca'], 2) }}%</span> abaixo em comparação com a sua última nota. Não desista ainda.</p>
                                @else
                                    <p>Parabéns! Você manteve o mesmo desempenho. Se esforce mais para se tornar a melhor versão de si mesmo.</p>
                                @endif
                            @else
                                <p>Esta é a sua única nota registrada para esta categoria.</p>
                            @endif
                        @else
                            <p>Nenhuma nota registrada para {{ ucfirst($categoria) }}</p>
                        @endif

                        <hr>

                        <div>
                            <canvas id="chart-{{ $categoria }}"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const ctx{{ $categoria }} = document.getElementById('chart-{{ $categoria }}').getContext('2d');
            const chart{{ $categoria }} = new Chart(ctx{{ $categoria }}, {
                type: 'line',
                data: {
                    labels: @json($dados['datasNotas']),
                    datasets: [{
                        label: 'Notas para {{ ucfirst($categoria) }}',
                        data: @json($dados['todasNotas']),
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        fill: true,
                        tension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: {{ $dados['totalQuestoes'] }}
                        }
                    }
                }
            });
        </script>
    @endforeach

    <script>
        // Mostra a aba selecionada e esconde as outras
        function showTab(categoria) {
            const tabs = document.querySelectorAll('.tab-content');
            tabs.forEach(tab => tab.style.display = 'none'); // Esconde todas as abas

            document.getElementById(`tab-${categoria}`).style.display = 'block'; // Mostra a aba selecionada
        }

        // Exibe a primeira aba por padrão ao carregar a página
        document.addEventListener('DOMContentLoaded', function() {
            showTab('{{ array_key_first($notasPorCategoria) }}');
        });
    </script>
</x-app-layout>