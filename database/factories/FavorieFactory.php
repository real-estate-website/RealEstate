<?php

namespace Database\Factories;

use App\Models\Favorie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Favorie>
 */
class FavorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Favorie::class;

    public function definition()
    {
        return [
            'url' => $this->faker->url(),
        ];
    }
}
