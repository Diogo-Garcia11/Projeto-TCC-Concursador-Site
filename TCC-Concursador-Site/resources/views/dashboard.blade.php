<x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @foreach ($notasPorCategoria as $categoria => $dados)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3>{{ ucfirst($categoria) }}</h3>

                    @if ($dados['ultimaNota'])
                    <p>Última nota: {{ $dados['ultimaNota']->totalNota }}/{{ $dados['totalQuestoes'] }} questões ({{ number_format($dados['percentualUltimaNota'], 2) }}%)</p>

                    @if ($dados['segundaNota'])
                    <p>Nota Anterior: {{ $dados['segundaNota']->totalNota }}</p>

                    @if ($dados['segundaNota']->totalNota == 0 && $dados['ultimaNota']->totalNota > 0)
                    <p style="color: green;">Você melhorou: {{ number_format(100, 2) }}% </p>
                    @elseif ($dados['comparacao']['diferenca'] > 0)
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
                        <div style="width: 75%; margin: auto; padding-bottom: 50px;">
                            <h2>{{ ucfirst($categoria) }}</h2>
                            <canvas id="myChart"></canvas>
                        </div>

                        <script>
                            // Pega os dados de notas e datas para cada categoria
                            

                            // Configuração do gráfico
                            const ctx = document.getElementById('myChart').getContext('2d');
                            const chart = new Chart(ctx, {
                                type: 'line', // Tipo de gráfico
                                data: {
                                    labels: [{!! $dataNotas !!}], // Datas das notas
                                    datasets: [{
                                        label: 'Notas',
                                        data: [{{ $todasNotas }}]data, // Valores das notas
                                        borderColor: 'rgba(75, 192, 192, 1)', // Cor da linha
                                        backgroundColor: 'rgba(75, 192, 192, 0.2)', // Cor de fundo sob a linha
                                        fill: true, // Preencher sob a linha
                                        tension: 0.4 // Curvatura da linha
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    scales: {
                                        y: {
                                            beginAtZero: true // Eixo Y começa do zero
                                        }
                                    }
                                }
                            });
                        </script>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>