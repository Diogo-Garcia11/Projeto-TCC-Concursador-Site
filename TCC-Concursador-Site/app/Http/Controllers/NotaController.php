<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Categorias que você deseja exibir
        $categorias = ['enem', 'fatec', 'fuvest', 'matematica', 'portugues', 'historia', 'geografia', 'biologia', 'quimica', 'fisica', 'filosofia', 'sociologia'];

        // Array para armazenar as notas de cada categoria
        $notasPorCategoria = [];

        $totalQuestoes = [
            'enem' => 180,
            'fatec' => 54,
            'fuvest' => 90,
            'matematica' => 30,
            'portugues' => 30,
            'historia' => 30,
            'biologia' => 30,
            'quimica' => 30,
            'fisica' => 30,
            'geografia' => 30,
            'filosofia' => 30,
            'sociologia' => 30,
        ];

        foreach ($categorias as $categoria) {
            // Obtém todas as notas para cada categoria
            $todasNotas = Nota::where('idUser', $user->id)
                ->where('categoriaNota', $categoria)
                ->orderBy('dataNota', 'asc')
                ->get();

            // Prepara os dados para a view
            $ultimaNota = $todasNotas->last();
            $segundaNota = $todasNotas->count() > 1 ? $todasNotas->slice(-2, 1)->first() : null;

            // Cálculo do percentual da última nota
            $percentualUltimaNota = 0;
            if ($ultimaNota && $ultimaNota->totalNota > 0 && $totalQuestoes[$categoria] > 0) {
                $percentualUltimaNota = ($ultimaNota->totalNota / $totalQuestoes[$categoria]) * 100;
            }

            // Cálculo da comparação entre notas (evitando divisão por zero)
            $comparacao = null;
            if ($ultimaNota && $segundaNota) {
                if ($segundaNota->totalNota > 0) {
                    $diferencaPercentual = (($ultimaNota->totalNota - $segundaNota->totalNota) / $segundaNota->totalNota) * 100;
                    $comparacao = ['diferenca' => $diferencaPercentual];
                } else {
                    $comparacao = ['diferenca' => null]; // Não tem como comparar se a nota anterior foi 0
                }
            }

            // Adiciona as notas e informações ao array
            $notasPorCategoria[$categoria] = [
                'ultimaNota' => $ultimaNota,
                'segundaNota' => $segundaNota,
                'percentualUltimaNota' => $percentualUltimaNota,
                'comparacao' => $comparacao,
                'totalQuestoes' => $totalQuestoes[$categoria],
                'todasNotas' => $todasNotas->pluck('totalNota'), // Lista de notas
                'datasNotas' => $todasNotas->pluck('dataNota')->map(function ($date) {
                    return \Carbon\Carbon::parse($date)->format('d/m/Y');
                }), // Lista de datas
            ];
        }

        // Retorna para a view com todas as notas por categoria
        return view('dashboard', ['notasPorCategoria' => $notasPorCategoria]);
    }
}
