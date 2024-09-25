<!DOCTYPE html>
<html>
<head>
    <title>Provas do ENEM</title>
</head>
<body>
    <h1>Provas do ENEM</h1>

    @if (!empty($provas) && is_array($provas))
        <ul>
            @foreach ($provas as $prova)
                <li>
                    <a href="{{ route('questoes.show', ['year' => $prova['year']]) }}">
                        {{ $prova['title'] }} ({{ $prova['year'] }})
                    </a>
                    <ul>
                        @if (isset($prova['disciplines']) && is_array($prova['disciplines']))
                            @foreach ($prova['disciplines'] as $disciplina)
                                <li>{{ $disciplina['label'] }}</li>
                            @endforeach
                        @else
                            <li>Disciplina não disponível.</li>
                        @endif
                    </ul>
                </li>
            @endforeach
        </ul>
    @else
        <p>Nenhuma prova encontrada.</p>
    @endif
</body>
</html>
