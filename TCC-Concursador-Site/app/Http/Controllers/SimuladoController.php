<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Questao;
use App\Models\Nota;
use Illuminate\Support\Facades\Auth;




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
    public function submit (Request $request)
    {
        $questoes = $request->all();
        $acertos = 0;

        // Itera sobre as respostas enviadas
        foreach ($questoes as $key => $value) {
            // Verifica se o nome do campo começa com "questao"
            if (strpos($key, 'questao') === 0) {
                // Se a alternativa correta foi marcada, incremente o contador de acertos
                if ($value == true) {
                    $acertos++;
                }
            }
        }

        // Salva a nota do usuário no banco de dados
        if (Auth::check()) {
            $userId = Auth::id(); // Obtém o ID do usuário autenticado

            // Salva a nota do usuário no banco de dados
            Nota::create([
                'dataNota' => now(),
                'totalNota' => $acertos,
                'categoriaNota' => 'enem', // Ajuste de acordo com sua lógica
                'idUser' => $userId,  // Associando a nota ao usuário autenticado
            ]);

            return redirect()->route('simulados')->with('status', "Você acertou $acertos questões!");
        } 
        else 
        {
            return redirect()->route('login')->with('error', 'Você precisa estar logado para enviar suas respostas.');
        }
    }
}