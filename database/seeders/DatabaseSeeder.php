<?php

namespace Database\Seeders;

use App\Models\Ingredients;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     *  il permet d'effectuer la liaison entre chaque factory précédemment créée et la base prête à les recevoir.
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Recipe::factory(10)->create();// crée 10 recettes en lien avec le model Recipe
        \App\Models\Ingredients::factory(3)->create();
    }
}
