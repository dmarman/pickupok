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
            'name' => 'The Good Bar',
            'city_id' => 1,
            'type' => 'bar',
            'description' => 'the best in town',
            'score' => 8
        ]);
    }
}
