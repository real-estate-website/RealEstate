<?php

namespace Database\Factories;

use App\Models\ImageAnnonce;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ImageAnnonce>
 */
class ImageAnnonceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ImageAnnonce::class;

    public function definition()
    {
        return [
            'image_id' => $this->faker->numberBetween(1, 10),
            'annonce_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
