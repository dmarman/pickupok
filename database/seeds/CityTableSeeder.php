<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'country_id' => 30,
            'name' => 'Barcelona',
            'longitude' => 41.3851,
            'latitude' => 2.1734,
            'cost' => 828 + 1087
        ]);

        DB::table('cities')->insert([
            'country_id' => 6,
            'name' => 'Moscow',
            'longitude' => 55.7558,
            'latitude' => 37.6173,
            'cost' => 528 + 1038
        ]);

        DB::table('cities')->insert([
            'country_id' => 1,
            'name' => 'Wroclaw',
            'longitude' => 51.1079,
            'latitude' => 17.0385,
            'cost' => 467 + 586
        ]);

        DB::table('cities')->insert([
            'country_id' => 11,
            'name' => 'Medellin',
            'longitude' => 6.2442,
            'latitude' => 75.5812,
            'cost' => 426 + 324
        ]);

        DB::table('cities')->insert([
            'country_id' => 2,
            'name' => 'Las Vegas',
            'cost' => 799 + 889
        ]);

        DB::table('cities')->insert([
            'country_id' => 2,
            'name' => 'New York',
            'cost' => 1158 + 3118
        ]);

        DB::table('cities')->insert([
            'country_id' => 2,
            'name' => 'San Francisco',
            'cost' => 1139 + 3280
        ]);

        DB::table('cities')->insert([
            'country_id' => 14,
            'name' => 'Rio de Janeiro',
            'cost' => 632 + 591
        ]);

        DB::table('cities')->insert([
            'country_id' => 14,
            'name' => 'Sao Paulo',
            'cost' => 632 + 599
        ]);

        DB::table('cities')->insert([
            'country_id' => 11,
            'name' => 'Bogota',
            'cost' => 465 + 421
        ]);

        DB::table('cities')->insert([
            'country_id' => 31,
            'name' => 'Buenos Aires',
            'cost' => 632 + 444
        ]);

        DB::table('cities')->insert([
            'country_id' => 15,
            'name' => 'Lima',
            'cost' => 502 + 517
        ]);

        DB::table('cities')->insert([
            'country_id' => 8,
            'name' => 'Tokio',
            'cost' => 1138 + 1110
        ]);

        DB::table('cities')->insert([
            'country_id' => 3,
            'name' => 'Bangkok',
            'cost' => 661 + 677
        ]);
    }
}
