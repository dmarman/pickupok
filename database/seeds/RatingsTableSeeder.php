<?php

use Illuminate\Database\Seeder;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // https://www.ranker.com/list/countries-with-the-most-beautiful-girls-v1/tabikide

        // Barcelona
        DB::table('ratings')->insert([
            'user_id' => 1,
            'city_id' => 1,
            'metadata' => 'girls',
            'value' => 8.4
        ]);

        // Moscow
        DB::table('ratings')->insert([
            'user_id' => 1,
            'city_id' => 2,
            'metadata' => 'girls',
            'value' => 10
        ]);

        // Wroclaw
        DB::table('ratings')->insert([
            'user_id' => 1,
            'city_id' => 3,
            'metadata' => 'girls',
            'value' => 8.2
        ]);

        // Medellin
        DB::table('ratings')->insert([
            'user_id' => 1,
            'city_id' => 4,
            'metadata' => 'girls',
            'value' => 7
        ]);

        // Las Vegas
        DB::table('ratings')->insert([
            'user_id' => 1,
            'city_id' => 5,
            'metadata' => 'girls',
            'value' => 6.1
        ]);

        // New York
        DB::table('ratings')->insert([
            'user_id' => 1,
            'city_id' => 6,
            'metadata' => 'girls',
            'value' => 6.1
        ]);

        // San Francisco
        DB::table('ratings')->insert([
            'user_id' => 1,
            'city_id' => 7,
            'metadata' => 'girls',
            'value' => 6.1
        ]);

        // Rio
        DB::table('ratings')->insert([
            'user_id' => 1,
            'city_id' => 8,
            'metadata' => 'girls',
            'value' => 6.8
        ]);

        // Sao
        DB::table('ratings')->insert([
            'user_id' => 1,
            'city_id' => 9,
            'metadata' => 'girls',
            'value' => 6.8
        ]);

        // Bogota
        DB::table('ratings')->insert([
            'user_id' => 1,
            'city_id' => 10,
            'metadata' => 'girls',
            'value' => 7
        ]);

        // Buenos Aires
        DB::table('ratings')->insert([
            'user_id' => 1,
            'city_id' => 11,
            'metadata' => 'girls',
            'value' => 6.2
        ]);

        // Lima
        DB::table('ratings')->insert([
            'user_id' => 1,
            'city_id' => 12,
            'metadata' => 'girls',
            'value' => 3.8
        ]);

        // Japan
        DB::table('ratings')->insert([
            'user_id' => 1,
            'city_id' => 13,
            'metadata' => 'girls',
            'value' => 5.3
        ]);

        // Bangkok
        DB::table('ratings')->insert([
            'user_id' => 1,
            'city_id' => 14,
            'metadata' => 'girls',
            'value' => 4.5
        ]);
    }
}
