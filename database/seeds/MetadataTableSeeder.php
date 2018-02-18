<?php

use Illuminate\Database\Seeder;

class MetadataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Barcelona
        DB::table('metadata')->insert([
            'city_id' => 1,
            'cost' => 828 + 1087,
            'girls' => 8,
            'clubs' => 8,
            'bars' => 7,
            'logistics' => 9
        ]);

        // Moscow
        DB::table('metadata')->insert([
            'city_id' => 2,
            'cost' => 528 + 1038,
//            'girls' => 5,
//            'clubs' => 4,
//            'bars' => 3,
//            'logistics' => 4
        ]);

        // Wroclaw
        DB::table('metadata')->insert([
            'city_id' => 3,
            'cost' => 467 + 586,
//            'girls' => 5,
//            'clubs' => 4,
//            'bars' => 3,
//            'logistics' => 4
        ]);

        // Medellin
        DB::table('metadata')->insert([
            'city_id' => 4,
            'cost' => 426 + 324,
//            'girls' => 5,
//            'clubs' => 4,
//            'bars' => 3,
//            'logistics' => 4
        ]);

        // Las Vegas
        DB::table('metadata')->insert([
            'city_id' => 5,
            'cost' => 799 + 889
        ]);

        // New York City
        DB::table('metadata')->insert([
            'city_id' => 6,
            'cost' => 1158 + 3118,
        ]);

        // San Francisco
        DB::table('metadata')->insert([
            'city_id' => 7,
            'cost' => 1139 + 3280,
        ]);

        // Rio de Janeiro
        DB::table('metadata')->insert([
            'city_id' => 8,
            'cost' => 632 + 591,
        ]);
    }
}
