<form action="{{ route('extrairQuestoes') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="pdf" accept="application/pdf"> <!-- Upload de PDF -->
    <button type="submit">Enviar PDF</button>
</form>


<form action="{{ route('uploadImagem') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="questao">Escolha a questão:</label>
    <select name="questao_id">
        @foreach($questoes as $questao)
            <option value="{{ $questao->id }}">{{ $questao->textoQuestao }}</option>
        @endforeach
    </select>

    <label for="imagem">Escolha a imagem da questão:</label>
    <input type="file" name="imagem" accept="image/*" required>

    <button type="submit">Upload</button>
</form>





