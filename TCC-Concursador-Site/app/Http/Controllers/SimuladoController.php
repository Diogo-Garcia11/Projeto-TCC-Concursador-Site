<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Questao;




class SimuladoController extends Controller
{
    public function enem()
    {
        $questoes = Questao::with('relAlternativa')->where('categoriaQuestao', 'enem')->inRandomOrder()->get();
        return view('enem', compact('questoes'));
    } 
    public function fatec()
    {
        $questoes = Questao::with('relAlternativa')->where('categoriaQuestao', 'fatec')->inRandomOrder()->get();
        return view('fatec', compact('questoes'));
    } 
    public function fuvest()
    {
        $questoes = Questao::with('relAlternativa')->where('categoriaQuestao', 'fuvest')->inRandomOrder()->get();
        return view('fuvest', compact('questoes'));
    }

    public function submit(Request $request)
    {
        // Valida os dados recebidos
        $data = $request->all();

        // Aqui você pode processar os dados do formulário,
        // por exemplo, salvar respostas no banco de dados
        
        // Exemplo: apenas para depuração
        dd($data);

        // Redirecionar ou retornar uma resposta
        return redirect()->route('simulado.index')->with('status', 'Respostas enviadas com sucesso!');
    }
}