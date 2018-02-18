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
            'latitude' => 2.1734
        ]);

        DB::table('cities')->insert([
            'country_id' => 6,
            'name' => 'Moscow',
            'longitude' => 55.7558,
            'latitude' => 37.6173
        ]);

        DB::table('cities')->insert([
            'country_id' => 1,
            'name' => 'Wroclaw',
            'longitude' => 51.1079,
            'latitude' => 17.0385
        ]);

        DB::table('cities')->insert([
            'country_id' => 11,
            'name' => 'Medellin',
            'longitude' => 6.2442,
            'latitude' => 75.5812
        ]);

        DB::table('cities')->insert([
            'country_id' => 2,
            'name' => 'Las Vegas'
        ]);

        DB::table('cities')->insert([
            'country_id' => 2,
            'name' => 'New York City'
        ]);

        DB::table('cities')->insert([
            'country_id' => 2,
            'name' => 'San Francisco'
        ]);

        DB::table('cities')->insert([
            'country_id' => 14,
            'name' => 'Rio de Janeiro'
        ]);

        DB::table('cities')->insert([
            'country_id' => 14,
            'name' => 'Sao Paolo'
        ]);

        DB::table('cities')->insert([
            'country_id' => 2,
            'name' => 'Las Vegas'
        ]);

        DB::table('cities')->insert([
            'country_id' => 11,
            'name' => 'Bogota'
        ]);

        DB::table('cities')->insert([
            'country_id' => 11,
            'name' => 'Medellin'
        ]);

        DB::table('cities')->insert([
            'country_id' => 31,
            'name' => 'Buenos Aires'
        ]);

        DB::table('cities')->insert([
            'country_id' => 15,
            'name' => 'Lima'
        ]);

        DB::table('cities')->insert([
            'country_id' => 11,
            'name' => 'Medellin'
        ]);

        DB::table('cities')->insert([
            'country_id' => 8,
            'name' => 'Tokio'
        ]);

        DB::table('cities')->insert([
            'country_id' => 3,
            'name' => 'Bangkok'
        ]);
    }
}
