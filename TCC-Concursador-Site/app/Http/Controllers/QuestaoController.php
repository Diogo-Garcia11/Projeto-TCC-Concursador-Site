<?php

namespace App\Http\Controllers;

use Smalot\PdfParser\Parser;
use App\Models\Questao;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use setasign\Fpdi\Fpdi;

class QuestaoController extends Controller
{
    public function extrairQuestoes(Request $request)
{
    if ($request->hasFile('pdf')) {
        $pdf = $request->file('pdf');
        
        // Extrair texto do PDF
        $parser = new Parser();
        $pdfContent = $parser->parseFile($pdf->getPathname());
        $texto = $pdfContent->getText();

        // Dividir o texto em questões com base no padrão do seu PDF
        $questoes = explode('QUESTÃO', $texto); // Ajuste conforme o delimitador real

        // Iterar sobre cada questão e salvar no banco de dados
        foreach ($questoes as $questao) {
            if (trim($questao) !== '') {
                Questao::create([
                    'textoQuestao' => 'QUESTÃO ' . $questao,
                    'materiaQuestao' => 'Humanas', // Ajuste conforme necessário
                    'categoriaQuestao' => 'ENEM',
                ]);
            }
        }

        return redirect()->back()->with('success', 'Questões inseridas com sucesso!');
    }

    return redirect()->back()->with('error', 'PDF não enviado.');
}



    public function uploadImagem(Request $request)
{
    $request->validate([
        'questao_id' => 'required|exists:questoes,id',
        'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $questao = Questao::find($request->questao_id);

    if ($request->hasFile('imagem')) {
        $imagem = $request->file('imagem');
        $nomeImagem = 'questao_' . $questao->id . '.' . $imagem->getClientOriginalExtension();
        $imagemDestino = public_path('imagens/questoes/' . $nomeImagem);

        // Salvar a imagem no diretório público
        $imagem->move(public_path('imagens/questoes'), $nomeImagem);

        // Atualizar a questão com o caminho da imagem
        $questao->update(['imagemQuestao' => 'imagens/questoes/' . $nomeImagem]);

        return redirect()->back()->with('success', 'Imagem enviada com sucesso!');
    }

    return redirect()->back()->with('error', 'Falha no upload da imagem.');
}

}






