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
            // Obtém as últimas duas notas para cada categoria
            $notas = Nota::where('idUser', $user->id)
                ->where('categoriaNota', $categoria)
                ->orderBy('dataNota', 'desc')
                ->take(2)
                ->get();

            // Prepara os dados para a view
            $ultimaNota = $notas->first();
            $segundaNota = $notas->count() > 1 ? $notas->get(1) : null;

            // Cálculo do percentual da última nota
            $percentualUltimaNota = null;
            if ($ultimaNota) {
                if ($totalQuestoes[$categoria] > 0) {
                    $percentualUltimaNota = ($ultimaNota->totalNota / $totalQuestoes[$categoria]) * 100;
                } else {
                    $percentualUltimaNota = 0; // Definindo como 0 se totalQuestoes for 0
                }
            }

            // Cálculo da comparação entre notas
            $comparacao = null;
            if ($ultimaNota && $segundaNota) {
                if ($segundaNota->totalNota > 0) {
                    $diferencaPercentual = (($ultimaNota->totalNota - $segundaNota->totalNota) / $segundaNota->totalNota) * 100;
                    $comparacao = [
                        'diferenca' => $diferencaPercentual,
                    ];
                } else {
                    $comparacao = [
                        'diferenca' => null, // Ou outra lógica para lidar com isso
                    ];
                }
            }

            // Adiciona as notas e informações ao array
            $notasPorCategoria[$categoria] = [
                'ultimaNota' => $ultimaNota,
                'segundaNota' => $segundaNota,
                'percentualUltimaNota' => $percentualUltimaNota,
                'comparacao' => $comparacao,
                'totalQuestoes' => $totalQuestoes[$categoria],
            ];
        }

        // Retorna para a view com todas as notas por categoria
        return view('dashboard', [
            'notasPorCategoria' => $notasPorCategoria,
        ]);
    }
}
