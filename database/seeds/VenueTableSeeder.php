<?php

use Illuminate\Database\Seeder;

class VenueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('venues')->insert([
            0 => [
                'name' => 'The Good Bar',
                'city_id' => 1,
                'type' => 'bar',
                'description' => 'the best in town',
                'score' => 8
            ],
            1 => [
                'name' => 'Deluxe',
                'city_id' => 1,
                'type' => 'nightclub',
                'description' => 'the best in town',
                'score' => 7
            ],
            2 => [
                'name' => 'Trip Mall',
                'city_id' => 1,
                'type' => 'spot',
                'description' => 'the best in town',
                'score' => 6
            ]
        ]);

    }
}
