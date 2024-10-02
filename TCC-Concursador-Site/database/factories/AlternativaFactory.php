<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alternativa>
 */
class AlternativaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'textoAlternativa' => $this->faker->sentence,
            'corretaAlternativa' => $this->faker->boolean,
            'imagemAlternativa' => $this->faker->imageUrl,
            'idQuestao' => \App\Models\Questao::factory(), // Create a related Questao
        ];
    }
}
