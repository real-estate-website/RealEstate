<?php

namespace Database\Factories;

use App\Models\Annonce;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annonce>
 */
class AnnonceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Annonce::class;

    public function definition()
    {
        return [
            'titre' => $this->faker->title(),
            'description' => $this->faker->text(),
            'prix' => $this->faker->numberBetween(40000, 500000),
            'type' => $this->faker->randomElement(["appartement", "maison", "autres"]),
            'nbr_piece' => $this->faker->numberBetween(1, 10),
            'nbr_chambre' => $this->faker->numberBetween(1, 10),
            'surface' => $this->faker->numberBetween(1, 1000),
            'user_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
