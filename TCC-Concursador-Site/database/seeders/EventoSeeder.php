<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Evento; // Importa o modelo Evento

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Evento::create([
            'data' => '2024-10-26',
            'descricao' => 'Prova da Fuvest',
        ]);

        Evento::create([
            'data' => '2024-11-05',
            'descricao' => 'Prova do Enem',
        ]);

        Evento::create([
            'data' => '2024-12-20',
            'descricao' => 'Férias',
        ]);
    }
}
