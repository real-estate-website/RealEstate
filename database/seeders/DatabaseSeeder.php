<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Message::factory(5)->create();
        \App\Models\Annonce::factory(5)->create();
        \App\Models\Categorie::factory(5)->create();
        \App\Models\Favorie::factory(5)->create();
        \App\Models\Image::factory(5)->create();
        \App\Models\AnnonceCategorie::factory(5)->create();
        \App\Models\ImageAnnonce::factory(5)->create();
    }
}
