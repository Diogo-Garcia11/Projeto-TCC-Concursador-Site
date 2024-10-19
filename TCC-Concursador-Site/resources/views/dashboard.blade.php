<x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <x-slot name="header">
    <a id="a_header"></a>
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        <ul class="flex flex-row justify-center space-x-4"> 
            @foreach($notasPorCategoria as $categoria => $dados)
                <li class="inline-flex">
                    <a class="text-white hover:text-gray-500 dark:text-white dark:hover:text-gray-300 px-4" href="#{{ $categoria }}">{{ ucfirst($categoria) }}</a>
                </li>
            @endforeach
        </ul>
    </h2>
</x-slot>

    @foreach ($notasPorCategoria as $categoria => $dados)
    <a id="{{ $categoria }}"></a>
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

                    <div>
                        <canvas id="chart-{{ $categoria }}"></canvas>
                    </div>
                    <a href="#a_header">Voltar ao topo.</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        const ctx{{ $categoria }} = document.getElementById('chart-{{ $categoria }}').getContext('2d');
        const chart{{ $categoria }} = new Chart(ctx{{ $categoria }}, {
            type: 'line',
            data: {
                labels: @json($dados['datasNotas']), // Datas formatadas
                datasets: [{
                    label: 'Notas para {{ ucfirst($categoria) }}',
                    data: @json($dados['todasNotas']), // Notas da categoria
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    fill: true,
                    tension: 0.4 // Curvatura da linha
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: {{ $dados['totalQuestoes'] }} // Limite superior baseado no total de questões
                    }
                }
            }
        });
    </script>
    @endforeach

    <script>
            document.addEventListener('DOMContentLoaded', function() {
        const links = document.querySelectorAll('a[href^="#"]');

        for (const link of links) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        }
    });
    </script>
</x-app-layout>
