<?php

namespace Database\Factories;

use App\Models\AnnonceCategorie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AnnonceCategorie>
 */
class AnnonceCategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = AnnonceCategorie::class;

    public function definition()
    {
        return [
            'categorie_id' => $this->faker->numberBetween(1, 10),
            'annonce_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
