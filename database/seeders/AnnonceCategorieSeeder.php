<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnonceCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create("fr_FR");

        DB::table('annonce_categories')->insert([
            'categorie_id' => $faker->numberBetween(1, 10),
            'annonce_id' => $faker->numberBetween(1, 10),
        ]);
    }
}
