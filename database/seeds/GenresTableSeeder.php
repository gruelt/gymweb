<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'id' => 1,
            'name' => 'GAF',
            'description' =>'Féminin',
        ]);

        DB::table('genres')->insert([
            'id' => 2,
            'name' => 'GAM',
            'description' =>'Masculin',
        ]);
    }
}
