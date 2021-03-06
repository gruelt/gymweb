<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(FilieresTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(NiveauxTableSeeder::class);
         $this->call(GenresTableSeeder::class);
    }
}
