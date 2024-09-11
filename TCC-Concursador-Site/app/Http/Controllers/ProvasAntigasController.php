<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questao; // Supondo que você tenha um modelo Questao para as provas antigas
use App\Models\Nota; // Supondo que você tenha um modelo Nota para salvar a pontuação (se necessário)
use Illuminate\Support\Facades\Auth;

class ProvasAntigasController extends Controller
{
    /**
     * Exibe as provas antigas do ENEM.
     *
     * @return \Illuminate\View\View
     */
    public function enem()
    {
        $questoes = Questao::with('relAlternativa')->where('categoriaQuestao', 'enem')->get(); // Remove inRandomOrder() se as provas devem ser listadas em ordem
        $categoria = 'enem'; // Define a categoria
        
        return view('provas.enem', compact('questoes', 'categoria'));
    }

    /**
     * Exibe as provas antigas da FATEC.
     *
     * @return \Illuminate\View\View
     */
    public function fatec()
    {
        $questoes = Questao::with('relAlternativa')->where('categoriaQuestao', 'fatec')->get(); // Remove inRandomOrder() se as provas devem ser listadas em ordem
        $categoria = 'fatec'; // Define a categoria
        
        return view('provas.fatec', compact('questoes', 'categoria'));
    }

    /**
     * Exibe as provas antigas da Fuvest.
     *
     * @return \Illuminate\View\View
     */
    public function fuvest()
    {
        $questoes = Questao::with('relAlternativa')->where('categoriaQuestao', 'fuvest')->get(); // Remove inRandomOrder() se as provas devem ser listadas em ordem
        $categoria = 'fuvest'; // Define a categoria
        
        return view('provas.fuvest', compact('questoes', 'categoria'));
    }

    /**
     * Exibe as provas antigas da Unicamp.
     *
     * @return \Illuminate\View\View
     */
    public function unicamp()
    {
        $questoes = Questao::with('relAlternativa')->where('categoriaQuestao', 'unicamp')->get(); // Remove inRandomOrder() se as provas devem ser listadas em ordem
        $categoria = 'unicamp'; // Define a categoria
        
        return view('provas.unicamp', compact('questoes', 'categoria'));
    }

    /**
     * Exibe as provas antigas do Senac.
     *
     * @return \Illuminate\View\View
     */
    public function senac()
    {
        $questoes = Questao::with('relAlternativa')->where('categoriaQuestao', 'senac')->get(); // Remove inRandomOrder() se as provas devem ser listadas em ordem
        $categoria = 'senac'; // Define a categoria
        
        return view('provas.senac', compact('questoes', 'categoria'));
    }

    /**
     * Exibe as provas antigas do IFSP.
     *
     * @return \Illuminate\View\View
     */
    public function ifsp()
    {
        $questoes = Questao::with('relAlternativa')->where('categoriaQuestao', 'ifsp')->get(); // Remove inRandomOrder() se as provas devem ser listadas em ordem
        $categoria = 'ifsp'; // Define a categoria
        
        return view('provas.ifsp', compact('questoes', 'categoria'));
    }
}
