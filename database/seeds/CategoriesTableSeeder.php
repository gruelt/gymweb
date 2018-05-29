<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => '7-8 Ans',
            'age_min' => 7,
            'age_max' => 8,
            'description' =>'',
            'filiere_id' => 2,
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'name' => '7-10 Ans',
            'age_min' => 7,
            'age_max' => 10,
            'description' =>'',
            'filiere_id' => 2,
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'name' => '7-12 Ans',
            'age_min' => 7,
            'age_max' => 12,
            'description' =>'',
            'filiere_id' => 2,
        ]);

        DB::table('categories')->insert([
            'id' => 4,
            'name' => '7-14 Ans',
            'age_min' => 7,
            'age_max' => 14,
            'description' =>'',
            'filiere_id' => 2,
        ]);

        DB::table('categories')->insert([
            'id' => 5,
            'name' => '11-15 Ans',
            'age_min' => 11,
            'age_max' => 15,
            'description' =>'',
            'filiere_id' => 3,
        ]);

        DB::table('categories')->insert([
            'id' => 6,
            'name' => '11-18 Ans',
            'age_min' => 11,
            'age_max' => 18,
            'description' =>'',
            'filiere_id' => 3,
        ]);

        DB::table('categories')->insert([
            'id' => 7,
            'name' => '11+ Ans',
            'age_min' => 11,
            'age_max' => 99,
            'description' =>'',
            'filiere_id' => 3,
        ]);


    }
}
