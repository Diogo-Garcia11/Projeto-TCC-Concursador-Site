<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    public function index()
    {
        return view('calendario');
    }

    public function eventos(Request $request)
    {
        $mes = $request->query('mes');
        $ano = $request->query('ano');
        $eventos = Evento::whereYear('data', $ano)->whereMonth('data', $mes)->get();

        return response()->json($eventos);
    }
}
