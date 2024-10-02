<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Questao>
 */
class QuestaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'contextoQuestao' => $this->faker->sentence,
            'materiaQuestao' => $this->faker->word,
            'categoriaQuestao' => $this->faker->word,
            'introducaoAlternativaQuestao' => $this->faker->sentence,
            'imagemQuestao' => $this->faker->imageUrl,
        ];
    }
}
