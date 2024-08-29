<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Questao;




class SimuladoController extends Controller
{
    public function index()
    {
        $questoes = Questao::with('relAlternativa')->get();
        
         // Retorna a view 'simulados' com as questões
        return view('simulados', compact('questoes'));
    }          
}
