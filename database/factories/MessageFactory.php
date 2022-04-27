<?php

namespace Database\Factories;

use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Message::class;

    public function definition()
    {
        return [
            'objet' => $this->faker->title(),
            'contenu' => $this->faker->text(),
            'expediteur_id' => $this->faker->numberBetween(1, 10),
            'destinataire_id' => $this->faker->numberBetween(1, 10),
            'annonce_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
