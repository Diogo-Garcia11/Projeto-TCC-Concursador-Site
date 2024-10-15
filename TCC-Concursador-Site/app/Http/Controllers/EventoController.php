<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Evento;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::all()->toArray();

        // Retorne a visualização com os eventos
        return view('eventos.index', ['eventos' => $eventos]);
    }
}
