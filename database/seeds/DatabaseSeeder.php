<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CountryTableSeeder::class,
//            CityTableSeeder::class,
            MetadataTableSeeder::class,
            RatingsTableSeeder::class,
            CitiesTableSeeder::class
        ]);
    }
}
