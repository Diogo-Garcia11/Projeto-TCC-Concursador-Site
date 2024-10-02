<?php

namespace Database\Seeders;

use App\Models\Alternativa;
use App\Models\User;
use App\Models\Questao;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'diogo',
            'email' => 'diogogarcia08@gmail.com',
            'password' => '12345678',
            'is_admin' => '1',
        ]);
        Questao::factory()->create([
            'contextoQuestao' => 'Um professor lança uma esfera verticalmente para cima, a qual retorna, depois de alguns segundos, ao ponto de lançamento. Em seguida, lista em um quadro todas as possibilidades para as grandezas cinemáticas.',
            'materiaQuestao' => 'ciencias-natureza',
            'categoriaQuestao' => 'enem',
            'introducaoAlternativaQuestao' => 'Ele solicita aos alunos que analisem as grandezas cinemáticas no instante em que a esfera atinge a altura máxima, escolhendo uma combinação para os módulos e sentidos da velocidade e da aceleração. A escolha que corresponde à combinação correta é',
            'imagemQuestao' => 'https://enem.dev/2023/questions/100/92848aa5-da82-4c66-9945-7051120a42c9.jpg',
        ]);
        Alternativa::factory()->create([
            'textoAlternativa' =>'V = 0 e a ≠ 0 para cima.',
            'corretaAlternativa' =>'0',
            'imagemAlternativa' =>'',
            'idQuestao' =>'1',
        ]);
        Alternativa::factory()->create([
            'textoAlternativa' =>'V ≠ 0 para cima e a = 0"',
            'corretaAlternativa' =>'0',
            'imagemAlternativa' =>'',
            'idQuestao' =>'1',
        ]);
        Alternativa::factory()->create([
            'textoAlternativa' =>'V = 0 e a ≠ 0 para baixo.',
            'corretaAlternativa' =>'1',
            'imagemAlternativa' =>'',
            'idQuestao' =>'1',
        ]);
        Alternativa::factory()->create([
            'textoAlternativa' =>'V ≠ 0 para cima e a ≠ 0 para cima.',
            'corretaAlternativa' =>'0',
            'imagemAlternativa' =>'',
            'idQuestao' =>'1',
        ]);
        Alternativa::factory()->create([
            'textoAlternativa' =>'V ≠ 0 para baixo e a ≠ 0 para baixo.',
            'corretaAlternativa' =>'0',
            'imagemAlternativa' =>'',
            'idQuestao' =>'1',
        ]);
        
    }
}
