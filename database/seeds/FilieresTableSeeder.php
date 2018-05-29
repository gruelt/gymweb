<?php

use Illuminate\Database\Seeder;

class FilieresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filieres')->insert([
            'id' => 1,
            'name' => 'Mini-Gym',
            'Description' => 'Gymnastique Mini enchainement / parcours',
        ]);

        DB::table('filieres')->insert([
            'id' => 2,
            'name' => 'Jeunes',
            'Description' => '',
        ]);

        DB::table('filieres')->insert([
            'id' => 3,
            'name' => 'Nationale',
            'Description' => 'Compétion à finale nationale',
        ]);

    }
}
