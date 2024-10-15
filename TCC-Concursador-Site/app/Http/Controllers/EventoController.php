<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = DB::table('eventos')->get()->toArray();

        // Retorne a visualização com os eventos
        return view('eventos.index', ['eventos' => $eventos]);
    }
}
