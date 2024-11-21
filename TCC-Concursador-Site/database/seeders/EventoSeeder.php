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
            'dataEvento' => '2024-11-04',
            'descricaoEvento' => 'Primeiro dia do Enem',
        ]);

        Evento::create([
            'dataEvento' => '2024-11-11',
            'descricaoEvento' => 'Segundo dia do Enem',
        ]);
        Evento::create([
            'dataEvento' => '2024-11-18',
            'descricaoEvento' => 'Primeira Fase da Fuvest',
        ]);
        Evento::create([
            'dataEvento' => '2024-12-17',
            'descricaoEvento' => 'Segunda Fase da Fuvest',
        ]);
        Evento::create([
            'dataEvento' => '2024-12-16',
            'descricaoEvento' => 'Segunda Fase da Fuvest',
        ]);
        Evento::create([
            'dataEvento' => '2025-01-25',
            'descricaoEvento' => 'Divulgação do resultado da Fuvest',
        ]);


    }
}
