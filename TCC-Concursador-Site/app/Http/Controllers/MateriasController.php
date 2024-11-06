<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Questao;
use App\Models\Nota;
use Illuminate\Support\Facades\Auth;
class MateriasController extends Controller
{
    public function prova_matematica(){
        $questoes = Questao::with('relAlternativa')->where('categoriaQuestao', 'matematica')->inRandomOrder()->take(30)->get();
        
        $categoria = 'matematica'; // Define a categoria
        
        return view('materias.matematica.prova-matematica', compact('questoes', 'categoria'));
    }

    public function prova_portugues(){
        $questoes = Questao::with('relAlternativa')->where('categoriaQuestao', 'portugues')->inRandomOrder()->take(30)->get();
        
        $categoria = 'portugues'; // Define a categoria
        
        return view('materias.portugues.prova-portugues', compact('questoes', 'categoria'));
    }

    public function prova_historia(){
        $questoes = Questao::with('relAlternativa')->where('categoriaQuestao', 'historia')->inRandomOrder()->take(30)->get();
        
        $categoria = 'historia'; // Define a categoria
        
        return view('materias.historia.prova-historia', compact('questoes', 'categoria'));
    }

    public function prova_biologia(){
        $questoes = Questao::with('relAlternativa')->where('categoriaQuestao', 'biologia')->inRandomOrder()->take(30)->get();
        
        $categoria = 'biologia'; // Define a categoria
        
        return view('materias.biologia.prova-biologia', compact('questoes', 'categoria'));
    }

    public function prova_quimica(){
        $questoes = Questao::with('relAlternativa')->where('categoriaQuestao', 'quimica')->inRandomOrder()->take(30)->get();
        
        $categoria = 'quimica'; // Define a categoria
        
        return view('materias.quimica.prova-quimica', compact('questoes', 'categoria'));
    }

    public function prova_fisica(){
        $questoes = Questao::with('relAlternativa')->where('categoriaQuestao', 'fisica')->inRandomOrder()->take(30)->get();
        
        $categoria = 'fisica'; // Define a categoria
        
        return view('materias.fisica.prova-fisica', compact('questoes', 'categoria'));
    }

     public function prova_geografia(){
        $questoes = Questao::with('relAlternativa')->where('categoriaQuestao', 'geografia')->inRandomOrder()->take(30)->get();
        
        $categoria = 'geografia'; // Define a categoria
        
        return view('materias.geografia.prova-geografia', compact('questoes', 'categoria'));
    }

     public function prova_filosofia(){
        $questoes = Questao::with('relAlternativa')->where('categoriaQuestao', 'filosofia')->inRandomOrder()->take(30)->get();
        
        $categoria = 'filosofia'; // Define a categoria
        
        return view('materias.filosofia.prova-filosofia', compact('questoes', 'categoria'));
    }

     public function prova_sociologia(){
        $questoes = Questao::with('relAlternativa')->where('categoriaQuestao', 'sociologia')->inRandomOrder()->take(30)->get();
        
        $categoria = 'sociologia'; // Define a categoria
        
        return view('materias.sociologia.prova-sociologia', compact('questoes', 'categoria'));
    }
    
    public function submit (Request $request)
    {
        $questoes = $request->all();
        $acertos = 0;

        $categoria = $request->input('categoria');

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
                'categoriaNota' => $categoria, // Ajuste de acordo com sua lógica
                'idUser' => $userId,  // Associando a nota ao usuário autenticado
            ]);

            return redirect()->route('dashboard');
        } 
        else 
        {
            return redirect()->route('login')->with('error', 'Você precisa estar logado para enviar suas respostas.');
        }
    }
}
