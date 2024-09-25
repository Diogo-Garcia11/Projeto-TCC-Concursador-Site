<!DOCTYPE html>
<html>
<head>
    <title>Questões do ENEM - {{ $year }}</title>
</head>
<body>
    <h1>Questões do ENEM {{ $year }}</h1>

    @if (!empty($questoes) && is_array($questoes))
        <ul>
            @foreach ($questoes as $questao)
                <li>
                    <strong>Questão {{ $questao['index'] }}:</strong>
                    <p>{{ $questao['context'] }}</p>
                    <ul>
                        @foreach ($questao['alternatives'] as $alternativa)
                            <li>{{ $alternativa }}</li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    @else
        <p>Nenhuma questão encontrada para esta prova.</p>
    @endif

    <a href="{{ route('simulados.index') }}">Voltar para as provas</a>
</body>
</html>
