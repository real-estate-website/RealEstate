<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= \Faker\Factory::create("fr_FR");

        DB::table('annonces')->insert([
            'titre' => $faker->title(),
            'description' => $faker->text(),
            'prix' => $faker->numberBetween(40000, 500000),
            'type' => $faker->randomElement(["appartement", "maison", "autres"]),
            'nbr_piece' => $faker->numberBetween(1, 10),
            'nbr_chambre' => $faker->numberBetween(1, 10),
            'surface' => $faker->numberBetween(1, 1000),
            'user_id' => $faker->numberBetween(1, 10),
        ]);
    }
}
