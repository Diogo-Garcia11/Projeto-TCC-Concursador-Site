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
            'password' => 'UZcP21zx!',
            'is_admin' => '1',
        ]);
        
        User::factory()->create([
            'name' => 'DanDaDan',
            'email' => 'reisleinad162@gmail.com',
            'password' => 'ovomaltine',
            'is_admin' => '1',
        ]);
        User::factory()->create([
            'name' => 'ket',
            'email' => 'ketelilino@gmail.com',
            'password' => '12345678',
            'is_admin' => '1',
        ]);
        
        
    }
}
