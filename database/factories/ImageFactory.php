<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Image::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'url' => $this->faker->url(),
            'annonce_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
