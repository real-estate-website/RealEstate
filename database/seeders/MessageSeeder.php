<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create("fr_FR");

        DB::table('messages')->insert([
            'objet' => $faker->title(),
            'contenu' => $faker->text(),
            'expediteur_id' => $faker->numberBetween(1, 10),
            'destinataire_id' => $faker->numberBetween(1, 10),
            'annonce_id' => $faker->numberBetween(1, 10),
        ]);
    }
}
