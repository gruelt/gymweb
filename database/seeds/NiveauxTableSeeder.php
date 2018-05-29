<?php

use Illuminate\Database\Seeder;

class NiveauxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('niveaux')->insert([
            'id' => 1,
            'name' => 'N1',
            'nb_gyms' => 5,
            'nb_notes' => 3,
            'description' =>'Niveau 1',
        ]);
        DB::table('niveaux')->insert([
            'id' => 2,
            'name' => 'N2',
            'nb_gyms' => 5,
            'nb_notes' => 3,
            'description' =>'Niveau 2',
        ]);
        DB::table('niveaux')->insert([
            'id' => 3,
            'name' => 'N3',
            'nb_gyms' => 5,
            'nb_notes' => 3,
            'description' =>'Niveau 3',
        ]);
        DB::table('niveaux')->insert([
            'id' => 4,
            'name' => 'N4',
            'nb_gyms' => 5,
            'nb_notes' => 3,
            'description' =>'Niveau 4',
        ]);

        DB::table('niveaux')->insert([
            'id' => 5,
            'name' => 'N5',
            'nb_gyms' => 6,
            'nb_notes' => 4,
            'description' =>'Niveau 5',
        ]);
        DB::table('niveaux')->insert([
            'id' => 6,
            'name' => 'N6',
            'nb_gyms' => 6,
            'nb_notes' => 4,
            'description' =>'Niveau 6',
        ]);

        DB::table('niveaux')->insert([
            'id' => 7,
            'name' => 'N7',
            'nb_gyms' => 6,
            'nb_notes' => 4,
            'description' =>'Niveau 7',
        ]);

        DB::table('niveaux')->insert([
            'id' => 8,
            'name' => 'N8',
            'nb_gyms' => 6,
            'nb_notes' => 4,
            'description' =>'Niveau 8',
        ]);

        DB::table('niveaux')->insert([
            'id' => 9,
            'name' => 'Mini-enchainement',
            'nb_gyms' => 6,
            'nb_notes' => 4,
            'description' =>'Mini-Enchainement',
        ]);

        DB::table('niveaux')->insert([
            'id' => 10,
            'name' => 'Parcours',
            'nb_gyms' => 1,
            'nb_notes' => 25,
            'description' =>'Parcours',
        ]);
        DB::table('niveaux')->insert([
            'id' => 11,
            'name' => 'Baby-Gym',
            'nb_gyms' => 1,
            'nb_notes' => 25,
            'description' =>'Baby-Gym',
        ]);

        DB::table('niveaux')->insert([
            'id' => 12,
            'name' => 'Loisirs',
            'nb_gyms' => 1,
            'nb_notes' => 25,
            'description' =>'Loisirs',
        ]);

        DB::table('niveaux')->insert([
            'id' => 13,
            'name' => 'Gym-adulte',
            'nb_gyms' => 1,
            'nb_notes' => 25,
            'description' =>'Gym-adulte',
        ]);

    }
}
