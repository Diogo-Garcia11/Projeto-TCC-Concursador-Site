<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Evento;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Evento::create([
            'dataEvento' => '2024-10-26',
            'descricaoEvento' => 'Prova da Fuvest',
        ]);

        Evento::create([
            'dataEvento' => '2024-11-05',
            'descricaoEvento' => 'Prova do Enem',
        ]);

        Evento::create([
            'dataEvento' => '2024-12-20',
            'descricaoEvento' => 'Férias',
        ]);
    }
}
